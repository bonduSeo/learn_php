<?php
    session_start();
    $login_user = $_SESSION["login_user"];
    define("PROFILE_PATH", "img/profile/");

    // var_dump($_FILES);
    if($_FILES["img"]["name"] === "") {
        echo "이미지없음";
        exit;
    }

    function gen_uuid_v4() { 
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0x0fff) | 0x4000
            , mt_rand(0, 0x3fff) | 0x8000
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
         );
     }
     //UUID 생성함수 (구글링)

    //  echo gen_uuid_v4();

    $img_name = $_FILES["img"]["name"];
    $last_index = mb_strrpos($img_name, ".");
    $ext = mb_substr($img_name, $last_index);
    // utf-8 한글때문에 mb_사용

     $target_filenm = gen_uuid_v4() . $ext;
     $target_full_path = PROFILE_PATH . $login_user["i_user"];
     if(!is_dir($target_full_path)) {
         mkdir($target_full_path, 0777, true);
     }
     $imageUpload = move_uploaded_file($_FILES['img']['tmp_name'], $target_full_path . "/" . $target_filenm);
     if($imageUpload) {
         header("Location: profile.php");
     } else {
         echo "업로드실패";
     }

    // echo "ext : ". $ext;
