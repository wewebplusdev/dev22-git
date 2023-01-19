<?php

## default menu lv2
$arrMenu = $aboutPage->callGroup($MenuID);
$smarty->assign("arrMenu", $arrMenu);

switch ($PageAction) {

    default:
        $callGroup = $aboutPage->callGroupDWN($MenuID, $ContentID);
        $GroupID = $url->segment[2];
        if ($callGroup->_numOfRows < 1) {
            header('location:' . $linklang . '/404');
            exit(0);
        }
        $smarty->assign("callGroup", $callGroup);
        if (empty($GroupID)) {
            $GroupID = $callGroup->fields['id'];
        }
        // print_pre($GroupID);
        $smarty->assign("GroupID", $GroupID);
        $callGroupInfo = $aboutPage->callGroupDWN($MenuID, $$GroupID);
        $smarty->assign("callGroupInfo", $callGroupInfo->fields);


        $callSubGroup = $aboutPage->callSubGroupDW($MenuID, $GroupID, null, $page['on'], null, 'DESC', null);
        $masterkey_page = $callSubGroup->fields['masterkey'];
        $MaxRecord = $callSubGroup->_maxRecordCount;
        $smarty->assign("orderArray", $OrderArray);
        $smarty->assign("callSubGroup", $callSubGroup);
        $smarty->assign("callSubGroupRows", $MaxRecord);
        $arrListData = array();
        foreach ($callSubGroup as $keycallSubGroup => $valuecallSubGroup) {
            $callSSubGroup = $aboutPage->callSubGroupDW($MenuID, null, $valuecallSubGroup['id'], $page['on'], null, 'ASC', null);
            $arrListData[$GroupID]['subgroup'][] = $valuecallSubGroup;
            $SGroupID = $valuecallSubGroup['id'];
            foreach ($callSSubGroup as $keycallSSubGroup => $valuecallSSubGroup) {
                $arrListData[$SGroupID]['ssubgroup'][] = $valuecallSSubGroup;
                $callCMS = $aboutPage->callCMSListDW($MenuID, null, $GroupID, $valuecallSubGroup['id'], $valuecallSSubGroup['id']);
                $SSGroupID = $valuecallSSubGroup['id'];
                foreach ($callCMS as $keycallCMS => $valuecallCMS) {
                    $callLink = $aboutPage->callCMSFileListDW($valuecallCMS['id']);
                    foreach ($callLink as $keycallLink => $valuecallLink) {
                        $valuecallCMS['linklist'][] = $valuecallLink;
                    }
                    $arrListData[$SSGroupID]['list'][] = $valuecallCMS;
                }
            }
        }
        // print_pre($arrListData);
        $smarty->assign("arrListData", $arrListData);

        ## menu lv 2 active
        $menuidLv2 = $callGroup->fields['id'];
        $smarty->assign("menuidLv2", $menuidLv2);

        ## breadcrumb
        $breadcrumb = explode("-", $callGroup->fields['menuname']);
        $settingModulus['breadcrumb'] = $breadcrumb[0];

        ## title
        $settingModulus['title'] = $breadcrumb[0];


        /*## Start SEO #####*/
        $seo_desc = "";
        $seo_title = ($callGroupInfo->fields['metatitle'] != '' ? $callGroupInfo->fields['metatitle'] : $callGroupInfo->fields['subject']);;
        $seo_keyword = "";
        Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
        /*## End SEO #####*/

        $settingPage = array(
            "page" => $menuActive,
            "template" => "ita.tpl",
            "display" => "page",
            "control" => "component",
        );
        break;
}
// slick slide
$initialSlide2 = 0;
if (count($arrMenu) > 4) {
    foreach ($arrMenu as $key => $valuearrMenu) {
        if ($valuearrMenu['id'] == $menuidLv2) {
            break;
        } else {
            $initialSlide2++;
        }
    }
}
$smarty->assign("initialSlide2", '{"initialSlide": ' . $initialSlide2 . '}');
