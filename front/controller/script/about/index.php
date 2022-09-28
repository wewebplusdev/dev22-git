<?php

$menuActive = "about";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$aboutPage = new aboutPage;
$arrMenu = array();
$ContentID = GetContentID($url->segment[2]);
$MenuID = GetContentID($url->segment[1]);
$MenuID = $callSetWebsite->getMenuDetail($MenuID);

if (empty($MenuID)) {
    $MenuID = 'ab_odc';
}

switch ($MenuID) {
    case 'value':
        # code...
        break;
    
    default:
        ## default menu
        $call_list_first = $aboutPage->callCMS($config['about']['ab_odc']['masterkey']);
        $call_list_seconde = $aboutPage->callCMS($config['about']['ab_odw']['masterkey']);
        ## merg array
        foreach ($call_list_first as $keycall_list_first => $valuecall_list_first) {
            $arrMenu[] = $valuecall_list_first;
        }
        foreach ($call_list_seconde as $keycall_list_seconde => $valuecall_list_seconde) {
            $arrMenu[] = $valuecall_list_seconde;
        }
        $smarty->assign("arrMenu", $arrMenu);

        ## case 2 menu
        print_pre($arrMenu);
        switch ($MenuID) {
            case 'ab_odc':
                $ContentID = $ContentID ? $ContentID : $arrMenu[0]['id'];
                $callCMS = $aboutPage->callCMS($MenuID, $ContentID);
                
                if ($callCMS->_numOfRows < 1) {
                    header('location:'.$linklang.'/404');
                    exit(0);
                }

                /*## Start SEO #####*/
                if($callCMS->fields['pic'] !== ''){
                    $fullpath_pic = fileinclude($callCMS->fields['pic'],'real',$MenuID,'link');
                }else{
                    $fullpath_pic = '';
                }
                $smarty->assign("valSeoImages", $fullpath_pic);
                $seo_desc =($callCMS->fields['description']!='' ? $callCMS->fields['description'] : '');
                $seo_title =($callCMS->fields['metatitle']!='' ? $callCMS->fields['metatitle'] : $callCMS->fields['subject']);
                $seo_keyword =($callCMS->fields['keywords']!='' ? $callCMS->fields['keywords'] : '');
                $seo_pic =($callCMS->fields['pic']!='' ? $fullpath_pic : '');
                Seo($seo_title, $seo_desc, $seo_keyword);
                /*## End SEO #####*/

                $settingPage = array(
                    "page" => $menuActive,
                    "template" => "cms_detail.tpl",
                    "display" => "page",
                    "control" => "component",
                );
                break;

            case 'ab_odw':
                $ContentID = $ContentID ? $ContentID : $arrMenu[0]['id'];
                $callCMS = $aboutPage->callCMS($MenuID, $ContentID);

                if ($callCMS->_numOfRows < 1) {
                    header('location:'.$linklang.'/404');
                    exit(0);
                }
                
                /*## Start SEO #####*/
                if($callCMS->fields['pic'] !== ''){
                    $fullpath_pic = fileinclude($callCMS->fields['pic'],'real',$MenuID,'link');
                }else{
                    $fullpath_pic = '';
                }
                $smarty->assign("valSeoImages", $fullpath_pic);
                $seo_desc =($callCMS->fields['description']!='' ? $callCMS->fields['description'] : '');
                $seo_title =($callCMS->fields['metatitle']!='' ? $callCMS->fields['metatitle'] : $callCMS->fields['subject']);
                $seo_keyword =($callCMS->fields['keywords']!='' ? $callCMS->fields['keywords'] : '');
                $seo_pic =($callCMS->fields['pic']!='' ? $fullpath_pic : '');
                Seo($seo_title, $seo_desc, $seo_keyword);
                /*## End SEO #####*/

                $settingPage = array(
                    "page" => $menuActive,
                    "template" => "cms_detail.tpl",
                    "display" => "page",
                    "control" => "component",
                );
                break;
            
            default:
                header('location:'.$linklang.'/404');
                exit(0);
                break;
        }
        break;
}

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("fileInclude", $settingPage);