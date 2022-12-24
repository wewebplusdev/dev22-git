<?php

/**
 * Description of url
 *
 * version 3.0
 *
 * @author Pandalittle CH
 */

class url
{
    public $url, $parametter, $segment, $uri, $pagelang, $optionurl, $rootDocument, $rootDir, $onFolder, $onfolderType, $onModulus;
    public $listfilemodulus = array("config.php", "modulus.php", "index.php");
    public $listcheckurl = array("");

    public function __construct()
    {
        global $url_show_lang, $lang_set, $lang_default, $url_show_default, $url_error_default;
        $pathFirst = $this->onRoot();

        $_SERVER['DOCUMENT_ROOT'] = str_replace("private_html", "public_html", $_SERVER['DOCUMENT_ROOT']);
        $this->rootDir = str_replace("\\", '/', dirname(__FILE__)); # _DIR
        $this->rootDocument = str_replace('//', '/', str_replace('//', '/', $_SERVER['DOCUMENT_ROOT']));
        $this->url = end(explode($pathFirst, str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'])));
        define("_URL", _http . "://" . str_replace('//', '/', $_SERVER['HTTP_HOST'] . "/" . $this->onFolder) . "/");

        $urlall = explode("?", $this->url);
        $segment = cleanArray(explode('/', $urlall[0]));
        $this->segment = $segment;
        $this->onModulus = $segment['0'] ? $segment['0'] : $url_show_default;
        if (!empty($url_show_lang)) {
            if (isset($lang_set[$this->segment[0]])) {
                $this->pagelang = $lang_set[$this->segment[0]];
                array_splice($this->segment, 0, 1);
            } else {
                $this->pagelang = $lang_set[$lang_default];
                $urlNewDirect = str_replace('//', '/', "/" . $this->onFolder . "/" . $this->pagelang[2]);
                $urlNewDirect .= "/intro";
                // header("Location:" . _URL . $urlNewDirect);
            }
        } else {
            if (!empty($_SESSION['pagelang'])) {
                $this->pagelang = $lang_set[$_SESSION['pagelang']];
            } else {
                $this->pagelang = $lang_set[$lang_default];
            }
        }


        foreach ($this->listcheckurl as $valueCheckurl) {
            $valueCheckurl = '1';
            if (strpos($this->segment[0], $valueCheckurl) !== false) {
                $listnewsegment = explode($valueCheckurl, $this->segment[0]);
                $this->segment[0] = str_replace("-", "", $valueCheckurl);
                foreach ($listnewsegment as $keyUrl => $valueUrl) {
                    if (!empty($valueUrl)) {
                        $this->optionurl[] = trim(str_replace("-", " ", urldecode($valueUrl)));
                    }
                }
            }
        }

        if (!empty($urlall[1])) {
            $this->parametter = $urlall[1];
            $uri_frist = cleanArray(explode('&', $urlall[1]));
            foreach ($uri_frist as $xuri) {
                $thum = explode('=', $xuri, 2);
                if (count($thum) == 2 and trim($thum[0]) != "") {
                    $uri[trim($thum[0])] = trim($thum[1]);
                }
            }
            $this->uri = $uri;
        }
    }


    public function onRoot()
    {
        $onDir = end(explode("/", _DIR));
        $onBase = end(explode("/", $_SERVER['DOCUMENT_ROOT']));

        if ($onDir != $onBase) {
            $this->onFolder = $onDir;
            $this->onfolderType = 'in folder';
            $trimPath = $onDir;
        } else {
            $this->onFolder = '';
            $this->onfolderType = 'out site folder';
            $trimPath = $onBase;
        }
        return $trimPath;
    }

    public function page()
    {
        $folderpage = _DIR . '/front/controller/script/' . $this->segment[0] . "/";
        if (file_exists($folderpage)) {
            $statuspage = $this->checkpagefile($folderpage);
            if (!empty($statuspage)) {
                $loderpage['pagename'] = $this->segment[0];
                $loderpage['load'][] = $folderpage . "lang/" . $this->pagelang[2] . ".php";
                foreach ($this->listfilemodulus as $value) {
                    $loderpage['load'][] = $folderpage . $value;
                }
                return $loderpage;
            } else {
                return $this->setpagedefault();
            }
        } else {
            return $this->setpagedefault();
        }
    }

    public function setpagedefault()
    {
        global $url_show_default, $url_error_default;

        // call check short url
        $arrUrl = $this->loadShortURL(mb_substr($_SERVER['REDIRECT_URL'], 1));
        $callMenu = $this->callMenu($arrUrl->fields['masterkey']);
        $callCms = $this->callCms($arrUrl->fields['masterkey'], $arrUrl->fields['contantid']);

        $arrConf = array(
            'masterkey' => $arrUrl->fields['masterkey'],
            'contantid' => $arrUrl->fields['contantid'],
            'menuid' => $callMenu->fields['id'],
            'gid' => $callCms->fields['gid'],
        );
        $convertUrl = $this->convertUrl($arrConf);

        if (!empty($this->segment[0])) {
            if (!empty($convertUrl)) {
                $path = _DIR . '/front/controller/script/' . $convertUrl;
                $loderpage['pagename'] = $convertUrl;
            } else {
                $path = _DIR . '/front/controller/script/404';
                $loderpage['pagename'] = "404";
            }
            $loderpage['load'][] = $path . "/lang/" . $this->pagelang[2] . ".php";
            foreach ($this->listfilemodulus as $value) {
                $loderpage['load'][] = $path . "/" . $value;
            }
        } else {
            $path = _DIR . '/front/controller/script/' . $url_show_default;
            $loderpage['pagename'] = $url_show_default;
            $loderpage['load'][] = $path . "/lang/" . $this->pagelang[2] . ".php";
            foreach ($this->listfilemodulus as $value) {
                $loderpage['load'][] = $path . "/" . $value;
            }
        }
        return $loderpage;
    }

    public function checkpagefile($page)
    {
        foreach ($this->listfilemodulus as $value) {
            $thischeckfile = file_exists($page . $value);
            if (empty($thischeckfile)) {
                return false;
            }
        }
        return true;
    }

    public function loadmodulus($array)
    {
        $listfile = array("config.php", "modulus.php");
        $loderpage = array();
        foreach ($array as $value) {
            $path = _DIR . '/front/controller/script/' . $value . "/";
            foreach ($listfile as $isfile) {
                $loderpage[] = $path . $isfile;
            }
        }
        return $loderpage;
    }

    ########## Start Add by bonz ##########
    private function loadShortURL($uri)
    {
        global $db, $tbconf;

        $sql = "SELECT 
        " . $tbconf['short']['db'] . "." . $tbconf['short']['db'] . "_id as id,
        " . $tbconf['short']['db'] . "." . $tbconf['short']['db'] . "_contantid as contantid,
        " . $tbconf['short']['db'] . "." . $tbconf['short']['db'] . "_masterkey as masterkey,
        " . $tbconf['short']['db'] . "." . $tbconf['short']['db'] . "_short_url as short_url,
        " . $tbconf['short']['db'] . "." . $tbconf['short']['db'] . "_long_url as long_url
        FROM
        " . $tbconf['short']['db'] . "
        WHERE
        " . $tbconf['short']['db'] . "." . $tbconf['short']['db'] . "_short_url = '" . $uri . "'
        ";

        $result = $db->query($sql);
        return $result;
    }

    private function callMenu($masterkey)
    {
        global $db, $tbconf;

        $sql = "SELECT 
        " . $tbconf['mnu']['db'] . "." . $tbconf['mnu']['db'] . "_id as id,
        " . $tbconf['mnu']['db'] . "." . $tbconf['mnu']['db'] . "_masterkey as masterkey
        FROM
        " . $tbconf['mnu']['db'] . "
        WHERE
        " . $tbconf['mnu']['db'] . "." . $tbconf['mnu']['db'] . "_masterkey = '" . $masterkey . "'
        ";

        $result = $db->query($sql);
        return $result;
    }

    private function callGroupCms($masterkey, $id = null)
    {
        global $db, $tbconf;

        $sql = "SELECT 
        " . $tbconf['cmg']['db'] . "." . $tbconf['cmg']['db'] . "_id as id,
        " . $tbconf['cmg']['db'] . "." . $tbconf['cmg']['db'] . "_masterkey as masterkey,
        " . $tbconf['cmg']['db'] . "." . $tbconf['cmg']['db'] . "_subject as subject
        FROM
        " . $tbconf['cmg']['db'] . "
        WHERE
        " . $tbconf['cmg']['db'] . "." . $tbconf['cmg']['db'] . "_masterkey = '" . $masterkey . "'
        ";

        if (!empty($id)) {
            $sql .= " AND " . $tbconf['cmg']['db'] . "." . $tbconf['cmg']['db'] . "_id = '" . $id . "' ";
        }

        $result = $db->query($sql);
        return $result;
    }

    private function callCms($masterkey, $id = null)
    {
        global $db, $tbconf;

        $sql = "SELECT 
        " . $tbconf['cms']['db'] . "." . $tbconf['cms']['db'] . "_id as id,
        " . $tbconf['cms']['db'] . "." . $tbconf['cms']['db'] . "_masterkey as masterkey,
        " . $tbconf['cms']['db'] . "." . $tbconf['cms']['db'] . "_subject as subject,
        " . $tbconf['cms']['db'] . "." . $tbconf['cms']['db'] . "_gid as gid
        FROM
        " . $tbconf['cms']['db'] . "
        WHERE
        " . $tbconf['cms']['db'] . "." . $tbconf['cms']['db'] . "_masterkey = '" . $masterkey . "'
        ";

        if (!empty($id)) {
            $sql .= " AND " . $tbconf['cms']['db'] . "." . $tbconf['cms']['db'] . "_id = '" . $id . "' ";
        }

        $result = $db->query($sql);
        return $result;
    }

    private function convertUrl($conf = array())
    {
        global $pageconf, $linklang;
        foreach ($pageconf as $key => $value) {
            if (strpos($conf['masterkey'], $key) !== false) {
                $pageloader = $value;
            }
        }

        switch ($pageloader) {
            case 'about':
                $this->segment[0] = $pageloader;
                $this->segment[1] = $conf['menuid'];
                $this->segment[3] = 'detail';
                $this->segment[4] = $conf['contantid'];
                return $pageloader;
                break;

            default:
                if (empty($_SESSION['intro'])) {
                    return $pageloader = " intro";
                } else {
                    if (isset($_SESSION['intro']) && (time() - $_SESSION['intro'] > 1800)) {
                        // last request was more than 30 minutes ago
                        unset($_SESSION['intro']);     // unset $_SESSION variable for the run-time 
                        http_response_code(302);
                        header('location:' . $linklang . "/404");
                    } else {
                        http_response_code(302);
                        header('location:' . $linklang . "/404");
                    }
                }
                break;
        }
    }
    ########## End Add by bonz ##########
}
