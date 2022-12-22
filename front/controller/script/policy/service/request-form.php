<?php

switch ($url->segment[2]) {
    case 'insert-req':
        require_once _DIR . '/front/controller/script/'.$menuActive.'/service/insert-req.php';
        break;

    case 'verify':
        require_once _DIR . '/front/controller/script/'.$menuActive.'/service/verify.php';
        break;
    
    default:
        switch ($url->segment[2]) {
            case 'step-2':
                $token = $_REQUEST['token'];
                $debug = $_REQUEST['debug'];
                // check time out
                if (empty($token) && $debug != 'debug') {
                    header("location:". $linklang . "/" . $menuActive . "/step-1");
                }
                $callcustp = $policyPage->callcustp($token);
                $datenow = date('Y-m-d H:i:s');
                if ($callcustp->_numOfRows > 0) {
                    if ($policyPage->DateDiff($callcustp->fields['credate'], $datenow) > 1) {
                        // header("location:". $linklang . "/" . $menuActive . "/step-1");
                        $timeout = "timeout";
                    }
                }else{
                    // header("location:". $linklang . "/" . $menuActive . "/step-1");
                    $timeout = "no-data";
                }
                if ($debug != "debug") {
                    $smarty->assign("timeout", $timeout);
                    $smarty->assign("callcustp", $callcustp);
                }
                $smarty->assign("debug", $debug);


                $cookie = $_COOKIE["SITE_SESSION"];
                $cookie_decode = base64_decode($cookie);
                $explode = explode(':', $cookie_decode);
                $sitekey = $explode[0];
                $secretkey = $explode[1];
                $siteName = $policyPage->getSiteName($sitekey, $secretkey);
                $smarty->assign("siteName", $siteName->fields['subject']);
        
                $callCountry = $policyPage->callCountry();
                $smarty->assign("callCountry", $callCountry);
                
                $callCusGroup = $policyPage->callCusGroup();
                $smarty->assign("callCusGroup", $callCusGroup);
        
                $smarty->assign("langweb", $url->pagelang[3]);

                /*## Start SEO #####*/
                $seo_desc =($callPolocy->fields['description']!='' ? $callPolocy->fields['description'] : '');
                $seo_title =($callPolocy->fields['metatitle']!='' ? $callPolocy->fields['metatitle'] : $lang['form']['title-befor'].''.$lang['form']['title-after']);
                $seo_keyword =($callPolocy->fields['keywords']!='' ? $callPolocy->fields['keywords'] : '');
                Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
                /*## End SEO #####*/

                $settingPage = array(
                    "page" => $menuActive,
                    "template" => "req-policy-step-2.tpl",
                    "display" => "page",
                    "control" => "component",
                );
                break;
            
            default:
                ## breadcrumb
                $breadcrumb = explode("-", $settingModulus['title']);
                $settingModulus['breadcrumb'] = $breadcrumb[0];

                ## lang variable
                $lang_concat = $url->pagelang['3'];
                $smarty->assign("lang_concat", "address" . $lang_concat);

                /*## Start SEO #####*/
                $seo_desc ="";
                $seo_title =$lang["policy"]["request"];
                $seo_keyword ="";
                Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
                /*## End SEO #####*/

                $settingPage = array(
                    "page" => $menuActive,
                    "template" => "req-policy.tpl",
                    "display" => "page",
                    "control" => "component",
                );
                break;
        }
        break;
}