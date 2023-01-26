<?php
// print_pre($_FILES);die;
// print_pre($_REQUEST);die;
if (!empty($_REQUEST['type'])) {
  switch ($_REQUEST['type']) {
    case "add":
      $pathUploadPicAvatar = $path_upload . "/" . $_REQUEST['masterkey'];
      // $pathUploadPicAvatar = $path_upload . "/" . $config['slip']['masterkey'];
      if (!empty($_FILES)) {
        $_FILES['uploadSlip'] = $_FILES[$_REQUEST['fileTemp']];
        $temporary = explode(".", $_FILES['uploadSlip']["name"]);
        $file_extension = end($temporary);
        $filelimit = $validsizefile * 1024 * 10;
        // print_pre($_FILES['uploadSlip']['size']);
        // print_pre($filelimit);die;

        if (in_array(strtolower($file_extension), $validextensions_req)) {
          if ($_FILES['uploadSlip']['size'] < $filelimit) {
            if ($_FILES["file"]["error"] > 0) {
              $_FILES['uploadSlip']['name'];
              $_FILES['uploadSlip']['error'];
            } else {
              if (!is_dir($pathUploadPicAvatar)) {
                mkdir($pathUploadPicAvatar, 0777);
              }

              if (!is_dir($pathUploadPicAvatar . "/file")) {
                mkdir($pathUploadPicAvatar . "/file", 0777);
              }

              if (file_exists($pathUploadPicAvatar . "/file/" . $_REQUEST['delpicname'])) {
                @unlink($pathUploadPicAvatar . "/file/" . $_REQUEST['delpicname']);
              }

              $inputFile = $_FILES['uploadFile']['tmp_name'];
              //   $myNewRand = date("dhis");
              $myNewRand = time() . rand(111, 999);
              $filename = $temporary[0] . "-" . $myNewRand . "";
              // print_pre($filename);
              $file = $filename . "." . $file_extension;
              //  print_pre($picname);

              ##  Real ################################################################################
              $imgReal = $pathUploadPicAvatar . "/file/" . $file;

              if (copy($inputFile, $pathUploadPicAvatar . "/file/" . $file)) {
                @chmod($imgReal, 0777);
              }

              if (!empty($imgReal)) {
                $explode = explode('.', $file);
                $listreturn[$key]['real'] = _URL . str_replace(_DIR, "", $imgReal);
                $listreturn[$key]['name'] = $explode[0];
                $listreturn[$key]['uploadname'] = $file;
                $listreturn[$key]['text_respone'] = $lang['form']['upload'];
                $listreturn[$key]['typefile'] = "." . $file_extension;
              } else {
                $listreturn[$key]['real'] = "error";
                $listreturn[$key]['text_respone'] = $lang['form']['try'];
                $listreturn[$key]['text_title'] = $lang['form']['notfile'];
              }
              //  print_pre(json_encode($listreturn));
              echo json_encode($listreturn);
            }
          } else {
            $errorUpload = array();
            $errorUpload['status'] = "error";
            $errorUpload['text_respone'] = $lang['form']['try'];
            $errorUpload['text'] = $lang['career']['maxsize'];
            echo json_encode($errorUpload);
          }
        } else {
          $errorUpload = array();
          $errorUpload['status'] = "error";
          $errorUpload['text_respone'] = $lang['form']['try'];
          $errorUpload['text_title'] = $lang['form']['notfile'];
          echo json_encode($errorUpload);
        }
      } else {
        $errorUpload = array();
        $errorUpload['status'] = "error";
        $errorUpload['text_respone'] = $lang['form']['try'];
        $errorUpload['text_title'] = $lang['form']['notfile'];
        echo json_encode($errorUpload);
      }
      break;
  }
}
