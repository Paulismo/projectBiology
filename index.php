<?php
  require_once "header.php";
?>

<!-- Start jumbotron -->

<div class="jumbotron-fluid">
  <div class="container">
    <h1>Olimpiada de Biologie</h1>
    <h2>Republica Moldova</h2>
  </div>
</div>

<!-- End jumbotron -->

<!-- Start posts -->

<div class="Posts pt-5 pb-5">
  <div class="container">
    <div class="row">
<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "Bio";

  $conn = new mysqli($hostname, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection failed, please try later");
  }

  $sql = "SELECT count(*) as Count FROM Posts;";
  $result = $conn->query($sql);
  
  $row = mysqli_fetch_assoc($result);
  $column = $row['Count'];
  $sql = "SELECT * FROM Posts ORDER BY id_post DESC LIMIT ".($column-6).", ".$column.";";
    $result = $conn->query($sql);
   while($row = $result->fetch_assoc())
  {
	  
?>
      <div class="col-sm-12 col-md-4 top-news pb-4">
          <div class="img-header">
              <a href="post.php?post=<?php echo $row['id_post']; ?>"><img class="w-100" src="img/posts/<?php echo $row['main_img_post']; ?>" alt="Card image cap"></a>
          </div>
          <h5 class="mt-2 mb-3"><a href="post.php?post=<?php echo $row['id_post']; ?>"><?php echo $row['name_post']; ?></a></h5>
          <a href="post.php?post=<?php echo $row['id_post']; ?>" class="button">Detalii</a>
      </div>

<?php
}
?>

    </div>
  </div>
</div>

<?php
  require_once "footer.php";
?>