<?php
$callCMS = $researchPage->callCMS($config['cod_f']['main']['masterkey'], $_REQUEST['diaform']);
$arrData = array();

if ($callCMS->fields['type'] == 3) {
    $arrGid = array();
    foreach (unserialize($callCMS->fields['factor_arr']) as $keyFactor => $valueFactor) {
        $arrGid[] = "'".$valueFactor."'"; 
    }

    //Length to Width Ratio.
    $Ratio = $_REQUEST['diamcut'] / $_REQUEST['widecut'];
    // Factor
    $callGroup = $researchPage->callGroupRatio($config['cod_f']['main']['masterkey'], null, $arrGid);
    $factor = 0;
    $factor_temp = $callGroup->fields['factor'];
    foreach ($callGroup as $keycallGroup => $valuecallGroup) {
        if ($Ratio >= floatval($valuecallGroup['ratio'])) {
            $factor = floatval($valuecallGroup['factor']);
        }
        if ($factor == 0 && $callGroup->_numOfRows == ($keycallGroup+1)) {
            $factor = floatval($factor_temp);
        }
    }

    //Length × Width × Depth × Adjustment Factor × GTF × WCF
    $result = ($_REQUEST['diamcut'] * $_REQUEST['widecut']) * ($_REQUEST['heightcut']);
    $cal_Factor = $result * ($factor);
    $cal_GTF = $cal_Factor * $_REQUEST['girth'];
    $cal_WCF = $cal_Factor * ($_REQUEST['pavbul']/100);
    $calculator = $cal_Factor + $cal_GTF + $cal_WCF;

    //Dept Percentage
    $dept = $_REQUEST['heightcut'] / $_REQUEST['widecut'] * 100;

    //Length to Width Ratio
    $Ratio = $_REQUEST['diamcut'] / $_REQUEST['widecut'];
    
    $arrData = array(
        'calculator' => $calculator,
        'deptpercentage' => $dept,
        'ratio' => $Ratio,
    );

    if (!$calculator) {
        $arrJson = array(
            'status' => false,
            'msg' => 'Calculator Error.',
        );
    }else{
        $arrJson = array(
            'status' => true,
            'msg' => 'Successfully.',
            'dataset' => $arrData,
        );
    }

}elseif($callCMS->fields['type'] == 1){
    //Diameter2 × Depth × factor × GTF
    $result = ($_REQUEST['diamcut1'] * $_REQUEST['diamcut1']) * ($_REQUEST['heightcut']);
    $cal_Factor = $result * ($callCMS->fields['factor']);
    $cal_GTF = $cal_Factor * $_REQUEST['girth'];
    $cal_WCF = $cal_Factor * ($_REQUEST['pavbul']/100);
    $calculator = $cal_Factor + $cal_GTF + $cal_WCF;

    //Dept Percentage
    $dept = $_REQUEST['diamcut1'] * $_REQUEST['heightcut'];

    //Length to Width Ratio
    $Ratio = "1.00 to 1";

    $arrData = array(
        'calculator' => $calculator,
        'deptpercentage' => $dept,
        'ratio' => $Ratio,
    );

    if (!$calculator) {
        $arrJson = array(
            'status' => false,
            'msg' => 'Calculator Error.',
        );
    }else{
        $arrJson = array(
            'status' => true,
            'msg' => 'Successfully.',
            'dataset' => $arrData,
        );
    }
}else{
    //Length × Width × Depth × factor × GTF × WCF
    $result = ($_REQUEST['diamcut'] * $_REQUEST['widecut']) * ($_REQUEST['heightcut']);
    $cal_Factor = $result * ($callCMS->fields['factor']);
    $cal_GTF = $cal_Factor * $_REQUEST['girth'];
    $cal_WCF = $cal_Factor * ($_REQUEST['pavbul']/100);
    $calculator = $cal_Factor + $cal_GTF + $cal_WCF;
    
    //Dept Percentage
    $dept = $_REQUEST['heightcut'] / $_REQUEST['widecut'] * 100;

    //Length to Width Ratio
    $Ratio = $_REQUEST['diamcut'] / $_REQUEST['widecut'];

    $arrData = array(
        'calculator' => $calculator,
        'deptpercentage' => $dept,
        'ratio' => $Ratio,
    );

    if (!$calculator) {
        $arrJson = array(
            'status' => false,
            'msg' => 'Calculator Error.',
        );
    }else{
        $arrJson = array(
            'status' => true,
            'msg' => 'Successfully.',
            'dataset' => $arrData,
        );
    }
}


echo json_encode($arrJson);
exit(0);