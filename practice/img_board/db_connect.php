<script src="https://kit.fontawesome.com/71e09e17ba.js" crossorigin="anonymous"></script>
<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB", "board1");
    define("PORT", "3306");

    function get_conn() {
       return mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DB, PORT);
    }


   function upload_file($fileToUpload) {
      $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($fileToUpload["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($fileToUpload["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        while(file_exists($target_file)) {
            $target_file = $target_file."1";
        }
     
        // $uploadOk = 0;
    }
    // Check file size
    if ($fileToUpload["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        die();
    // if everything is ok, try to upload file
    } else {
        print $fileToUpload['error'];
        if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
            // echo "<p>The file ". basename( $fileToUpload["name"]). " has been uploaded.</p>";
            // echo "<br><img src=../../uploads/".basename( $fileToUpload["name"]). ">";
            // echo "<br><button type='button' onclick='history.back()'>돌아가기</button>";
        } else {
            echo "<p>Sorry, there was an error uploading your file.</p>";
            echo "<br><button type='button' onclick='history.back()'>돌아가기</button>";
            die();
        }
    }

    $img_url = "../../uploads/".basename( $fileToUpload['name']);
    return $img_url;
   }



function liked($id, $idn) {
    $sql = 
    "
        SELECT num, idn FROM liketable
        WHERE id = '$id'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    $wholike = array();
    $n=0;
    $wholike['me'] = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $wholike[$n++] = $row['idn'];
        if($row['idn'] == $idn) {
            $wholike['me'] = $row['num'];
        }
    }
    return $wholike;
}
   