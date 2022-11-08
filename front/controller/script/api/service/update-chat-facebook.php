<?php
$callChatFB = $apiPage->callChatFB();
$arrData = array();
$arrData['source'] = $callChatFB->fields['title'];
$arrData['date']['sdate'] = $callChatFB->fields['sdate'];
$arrData['date']['edate'] = $callChatFB->fields['edate'];
$arrData['status'] = $callChatFB->fields['status'];

file_put_contents('./webservice_json/facebook.json', json_encode($arrData));
http_response_code(201);
$dataJson = array(
    'status' => 201,
    'msg' => 'update chat facebook success.'
);
echo json_encode($dataJson);
