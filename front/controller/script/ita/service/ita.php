<?php
switch ($PageAction) {
    
  default:
    $callGroup = $itaPage->callGroup($MenuID, $ContentID);
   $GroupID = $url->segment[1];
    if ($callGroup->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callGroup", $callGroup);
    if(empty($GroupID)){
        $GroupID = $callGroup->fields['id'];
    }
    
    $callGroupInfo = $itaPage->callGroup($MenuID, $$GroupID);
    $smarty->assign("callGroupInfo", $callGroupInfo->fields);
    

    $callSubGroup = $itaPage->callSubGroup($MenuID,$GroupID,null, $page['on'], null, null,null);
    $masterkey_page = $callSubGroup->fields['masterkey'];
    $MaxRecord = $callSubGroup->_maxRecordCount;
    $smarty->assign("orderArray", $OrderArray);
    $smarty->assign("callSubGroup", $callSubGroup);
    $smarty->assign("callSubGroupRows", $MaxRecord);
    $arrListData = array();
     foreach ($callSubGroup as $keycallSubGroup => $valuecallSubGroup) {
        $callSSubGroup = $itaPage->callSubGroup($MenuID,null,$valuecallSubGroup['id'], $page['on'], null, null,null);
        $arrListData[$GroupID]['subgroup'][] = $valuecallSubGroup;
        $SGroupID =$valuecallSubGroup['id'];
        foreach ($callSSubGroup as $keycallSSubGroup => $valuecallSSubGroup) {
            $arrListData[$SGroupID]['ssubgroup'][] = $valuecallSSubGroup;
            $callCMS = $itaPage->callCMSList($MenuID, null,$GroupID, $valuecallSubGroup['id'],$valuecallSSubGroup['id']);
            $SSGroupID = $valuecallSSubGroup['id']; 
            foreach ($callCMS as $keycallCMS => $valuecallCMS) {
                $callLink = $itaPage->callCMSFileList($valuecallCMS['id']);
                foreach ($callLink as $keycallLink => $valuecallLink) {
                    $valuecallCMS['linklist'][] = $valuecallLink;
                }
                $arrListData[$SSGroupID]['list'][] = $valuecallCMS;
            }
        }

     }
    // print_pre($arrListData);
    $smarty->assign("arrListData", $arrListData);

    ## title
    $settingModulus['title'] = $breadcrumb[0];

    /*## Start SEO #####*/
    $seo_desc = "";
    $seo_title = ($callGroupInfo->fields['metatitle']!='' ? $callGroupInfo->fields['metatitle'] : $callGroupInfo->fields['subject']);;
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