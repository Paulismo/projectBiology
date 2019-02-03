<?php
  require_once "header.php";
?>

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "Bio";

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
    die("Connection failed, please try later");
    }

    $sql = "SELECT * FROM Posts WHERE id_post = '".$_GET['post']."';";
    $result = $conn->query($sql);
	if($row = $result->fetch_assoc()) {$img_name= $row['main_img_post']; $post_name=$row['name_post']; $post_text=$row['text_post']; }
?>

<div class="img-post">
    <div class="container-fluid">
        <div class="row">
            <div class="w-100">
                <img src="img/posts/<?php echo $img_name ?>" alt="Post image" class="w-100" style="margin-top: -2rem">
            </div>
        </div>
    </div>
</div>

<div class="Post pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h1> <?php echo $post_name ?> </h1>
                <p> <?php echo $post_text ?> </p>
            </div>
        </div>
    </div>
</div>
<?
  require_once "footer.php";
?>
