<?php
    //$_FILES에 담긴 배열정보 구하기
    var_dump($_FILES);
    print "<br>";
    print_r($_FILES);

    //임시로 저장된 정보(tep_name)
    $tempFile = $_FILES['img']['tmp_name'];

    //파일타입 및 확장자 체크
    $fileTypeExt = explode("/", $_FILES['img']['type']);

    // print "<br>";
    // print_r($fileTypeExt);

    //파일타입
    $fileType = $fileTypeExt[0]; //image

    //파일확장자
    $fileExt = $fileTypeExt[1]; //jpg, png등

    //확장자검사
    $extStatus = false;

    switch($fileExt) {
        case 'jpeg':
        case 'jpg':
        case 'gif':
        case 'bmp':
        case 'png':
            $extStatus = true;
            break;
        default:
            echo "이미지 전용 확장자(jpg, bmp, gif,png)외에는 사용불가능합니다";
            exit;
    }

    //이미지 파일이 맞는지 검사
    if($fileType == 'image') {
        //허용할 확장자 외에는 업로드 불가
        if($extStatus) {
            $res_path = "../img";
            if(!is_dir($res_path)) {
                mkdir($res_path, 0777, true);
                // 0777: 리눅스에서잘쓰이는데 8진수로 3자리 가장높은수, 권한을 다주는것을 뜻함(owner/group/public(user))
            }
            //임시파일 옮길 디렉토리 및 파일명
            $resFile = $res_path . "/{$_FILES['img']['name']}"; //중괄호 이렇게쓰면 배열도 가능
            //임시 저장된 파일을 우리가 저장할 디렉토리 및 파일명으로 옮김
            $imageUpload = move_uploaded_file($tempFile, $resFile);

            //업로드 성공 여부 확인
            if($imageUpload == true) {
                echo "파일이 정상적으로 업로드되었습니다.<br>";
                echo "<img src='{$resFile}' width='100'>";
            } else {
                echo "파일 업로드에 실패하였습니다.";
            }

        } else {
            echo "파일확장자는 jpg, bmp, gif, png 이어야합니다.";
            exit;
        }
    } else {
        echo "이미지파일이아닙니다.";
    }