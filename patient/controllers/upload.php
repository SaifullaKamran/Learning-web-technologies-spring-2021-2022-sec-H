<?php 

  session_start();

  $src = $_FILES['myfile']['tmp_name'];
  $des = '../models/upload/'.$_FILES['myfile']['name'];

  if(move_uploaded_file($src, $des)){
    $_SESSION['myimage'] = $_FILES['myfile']['name'];
    echo "Uploaded Successfully";
  }else{
    echo "Upload failed";
  }
?>