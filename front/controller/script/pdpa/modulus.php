<?php
###############################################################  Start Accept  #######################################################################################
function insertLogAccept($baseSite = null, $client_ip = null, $client_ip_router = null, $ac_token)
{
  global $config, $db, $url;

  // $client_time = time();
  $client_browser = getBrowser($_SERVER['HTTP_USER_AGENT']);

    // if ($baseSite == $domainLink) {
        // $ValAccessToken_encode = Secretkey($HTTP_IP,$HTTP_IPROUTER,$HTTP_TIME);
        
        $data = array();
        $data[$config['pdpa']['db'] . "_masterkey"] = "'".$config['pdpa']['masterkey']."'";
        $data[$config['pdpa']['db'] . "_ipaddress"] = "'".$client_ip."'";
        $data[$config['pdpa']['db'] . "_iprouter"] = "'".$client_ip_router."'";
        $data[$config['pdpa']['db'] . "_credate"] = "NOW()";
        $data[$config['pdpa']['db'] . "_lastdate"] = "NOW()";
        $data[$config['pdpa']['db'] . "_countsecretkey"] = "1";
        $data[$config['pdpa']['db'] . "_accesstoken"] = "'".$ac_token."'";
        $data[$config['pdpa']['db'] . "_browser"] = "'".$client_browser."'";
        
        $sql = "INSERT INTO " . $config['pdpa']['db'] . "(" . implode(',', array_keys($data)) . ")VALUES(" . implode(',', array_values($data)) . ")";
        // print_pre($sql);
        $insertDb = $db->execute($sql);

        $output = array(
            'status'    => true,
            'statuscode'    => 201,
            'msg'       => 'ADD LOG ACCEPT COOKIE CONSENT',
        );
        return json_encode($output);
    // } else {
    //     $output = array(
    //         'status'    => false,
    //         'statuscode'    => 400,
    //         'msg'       => 'WRONG URL WEBSITE',
    //     );
    //     return json_encode($output);
    // }
}
###############################################################  End Accept  #########################################################################################

function getBrowser($useragent = null)
{
    $t = strtolower($useragent);
    $t = " " . $t;
    if (strpos($t, 'opera'     ) || strpos($t, 'opr/')) {
        
    }
    if     (strpos($t, 'opera'     ) || strpos($t, 'opr/')     ) return 'opera'            ;
    elseif (strpos($t, 'edge'      )                           ) return 'microsoft-edge'   ;
    elseif (strpos($t, 'chrome'    )                           ) return 'chrome'           ;
    elseif (strpos($t, 'safari'    )                           ) return 'safari'           ;
    elseif (strpos($t, 'firefox'   )                           ) return 'firefox'          ;
    elseif (strpos($t, 'msie'      ) || strpos($t, 'trident/7')) return 'msie'             ;
}
