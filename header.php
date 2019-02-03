<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Olimpiada de Biologie</title>

  <!-- css -->
  <link href="css/css.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="css/bootstrap-reboot.min.css" rel="stylesheet">

  <!-- Jquery 3.3.1 -->
  <script src="js/jquery.js"></script>
</head>
<body>
  <header class="navbar-light bg-light">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="index.php">Olimpiada de Biologie</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Acasă</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noutati.php?page=1">Noutăți</a>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Subiecte
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="subiecte.php?page=sector">Sector</a>
                    <a class="dropdown-item" href="subiecte.php?page=municipiu">Municipiu</a>
                    <a class="dropdown-item" href="subiecte.php?page=republicana">Republicană</a>
                    <a class="dropdown-item" href="subiecte.php?page=probabaraj">Probă de Baraj</a>
                </div>
            </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
