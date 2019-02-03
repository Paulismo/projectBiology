<?php
  require_once "header.php";
?>

<!--<div class="calendar" style="background-color: #212121; display: inline-block; width: 150px; height: 150px;">-->
<!--  <p class="text-center" style="color: #fff"> Etapa de sector</p>-->
<!--  <p class="text-center" style="color: #fff"> 25.07.2018</p>-->
<!--  <p class="text-center" style="color: green; font-size: 25px;">-->
<!--  --><?//
//  $curday = date('d.m.Y');
//  $olympiadeDate = "25.07.2018";
//  $d1 = strtotime($olympiadeDate);
//  $d2 = strtotime($curday);
//  $diff = $d1-$d2;
//  $diff = $diff/(60*60*24);
//  echo $years = floor($diff);
//  ?>
<!--  </p>-->
<!--</div>-->

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

    $pages = 0;
    while ($column > 0) {
        $column -= 9;
        $pages++;
    }

    $page = $_GET['page']-1;
    $sql = "SELECT * FROM Posts LIMIT ".($page*9+1).", ".(($page+1)*9).";";
    $result = $conn->query($sql);

  while($row = mysqli_fetch_assoc($result))
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
        <div class="pages col-xs-12 col-md-12 text-center">
<?php
    $i = 1;
    while($i <= $pages) {
      echo "<a href='noutati.php?page=$i'>$i</a>";
      $i++;
    }
?>
        </div>
    </div>
  </div>
</div>

<?
  require_once "footer.php";
?>
