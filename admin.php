<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Olimpiada de Biologie</title>
  <!-- css -->
  <link href='css/css.css' rel='stylesheet'>
  <link href='css/bootstrap.min.css' rel='stylesheet'>
  <link href='css/bootstrap-grid.min.css' rel='stylesheet'>
  <link href='css/bootstrap-reboot.min.css' rel='stylesheet'>

</head>
<body>
  <style>
			label{
			        vertical-align: baseline;
			}
  </style>
  <div class='container'>

<form action='ImgUpl.php' method='POST' enctype="multipart/form-data">
	<div class='row'>
	    <div class='form-group col-4' style='margin-left: 0%; margin-bottom: 1%; margin-top: 1%'> 
		    <label for='name'>Insert post name </label>
		    <input type='text' class='' name='name' placeholder='post name' style='border-radius: 5px '>
        </div>
    </div>
    
    <div class='row'>
        <div class='form-group col' style='margin-bottom: 1%;'>
            <label for='description'>Post description </label>
            <textarea name='description' class='md-textarea form-control' rows='5' type='text' cols='20'></textarea>
        </div>
    </div>
	
	<div class='input-group col-4' style='margin-left: -1.2%; margin-bottom: 1%'>
        <div>
            <input type="file"  name="file" id="file" accept="image/vnd.sealedmedia.softseal-jpg, image/jpeg ">
        </div>
    </div>

	<div class='row' style='margin-left: -1.2%'>
		<div class='form-group col'>
	        <input type='submit' value='Upload new post' style=\"border-radius: 5px\">
        </div>
    </div>
</form>
</div>
  </body>

  <!-- Plugins -->
  <script src='js/bootstrap.min.js'></script>
  <script src='js/bootstrap.bundle.min.js'></script>
  <script src='js/jquery.js'></script>
  </html>