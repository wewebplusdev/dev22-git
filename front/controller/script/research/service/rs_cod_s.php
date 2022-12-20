<?php

switch ($PageAction) {
    case 'calculator':
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/calculator.php';
        break;

    case 'diamond-weight-calculator':
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/rs_cod_s-cal.php';
        break;
    
    default: //คำนวนณเพชร
    
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/rs_cod_s-page.php';
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