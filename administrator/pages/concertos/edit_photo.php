<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header('Location: index.php?erro=1');
  }
?>
<?php 

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
				//echo "File is an image - " . $check["mime"] . "."; Front, colocar essa mensagem na modal
		$uploadOk = 1;
	} else {
				//echo "File is not an image."; Front, colocar essa mensagem na modal
		$uploadOk = 0;
	}
}
	// Check if file already exists
if (file_exists($target_file)) {
		//echo "Sorry, file already exists."; Front, colocar essa mensagem na modal
	$uploadOk = 0;
}
	// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
		//echo "Sorry, your file is too large."; Front, colocar essa mensagem na modal
	$uploadOk = 0;
}
	// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; Front, colocar essa mensagem na modal
	$uploadOk = 0;
}
	// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	$_SESSION['msg'] = "<div class='alert alert-sucess' role='alert'>Verifique a extensão das imagens. Só é permitido .png, .jpg, .jpeg e .gif <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."; Front, colocar essa mensagem na modal
			//$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Verifique a extensão das imagens. Só é permitido .png, .jpg, .jpeg e .gif <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";

	} else {
				//echo "Sorry, there was an error uploading your file."; Front, colocar essa mensagem na modal
	}
}
require_once('../db.class.php');
$objDb = new db();
$link = $objDb->conecta_mysql();
$id = $_POST['id'];

$url_file = "/img/".basename($_FILES["fileToUpload"]["name"]);
$sql  = "UPDATE `concerto` SET `link_endereco` = '$url_file' WHERE idconcerto = '$id';";
mysqli_query($link, $sql);

echo $sql;

$url = '../concertos/';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>
