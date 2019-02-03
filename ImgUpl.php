<?php
echo  $_FILES['file']['name'];

$hostname = "localhost";
$username = "root";
$password = "";
$database = "Bio";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed, please try later");
}
    $sql = "select max(id_post)as PostCount from posts;";
    $result=$conn->query($sql);
    $row= mysqli_fetch_assoc($result);
    $postCount=$row["PostCount"];

$target_dir = "img/posts/";
//$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename ="Post". ++$postCount . '.' .strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION));
$imageFileType = strtolower(pathinfo($newfilename,PATHINFO_EXTENSION));
$uploadOk = 1;

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size

if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file

} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir."$newfilename")) {
        echo "The file ". $newfilename . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($conn->connect_error) {
    die("Connection failed, please try later");
}
if(isset($_POST['name'])&& isset($_POST['description'])){
    $sql = 'Insert Into Posts Values(NULL,"'.$_POST['name'].'","'.$newfilename.'", "'.$_POST['description'].'","'.date('Y-m-d').'");';
    if ($conn->query($sql)) {
        echo "uraa";
    }else{echo  "ups";}
}
$conn->close();