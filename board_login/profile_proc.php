<?php
    include_once('db/db_user.php');
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
     $target_path = PROFILE_PATH . $login_user["i_user"];
     if(!is_dir($target_path)) {
         mkdir($target_path, 0777, true);
     }
     $imageUpload = move_uploaded_file($_FILES['img']['tmp_name'], $target_path . "/" . $target_filenm);
     if($imageUpload) {
        
        //예전 등록된프사가있으면 삭제
        if($login_user["profile_img"]) {
            $saved_img = $target_path . "/" . $login_user["profile_img"];
            if(file_exists($saved_img)) {
                unlink($saved_img);
            }
        }

        //DB에 저장
        $param = [
            "profile_img" => $target_filenm,
            "i_user" => $login_user["i_user"]
        ];

        $result = upd_profile_img($param);
        $_SESSION["login_user"]["profile_img"] = $target_filenm; 

         header("Location: profile.php");
     } else {
         echo "업로드실패";
     }

    // echo "ext : ". $ext;
