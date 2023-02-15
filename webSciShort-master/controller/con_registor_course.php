<?php
include_once("../model/ConDB.php");
include_once("../model/Register.php");
// echo $_SERVER["REQUEST_METHOD"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // echo 'hello';
  $data_register = array();
  $data_register['email'] = $_POST['email'];
  $data_register['title_name'] = $_POST['title_name'];
  $data_register['name'] = $_POST['name'];
  $data_register['phone'] = $_POST['phone'];
  $data_register['id_number'] = $_POST['id_number'];
  $data_register['hq'] = $_POST['hq'];
  $data_register['image_url'] = $_POST['image_url'];
  // echo $data_register['phone'] ;
  foreach ($data_register as $value) {
    echo gettype($value), ' ', $value, "\n";
  }
  $obj_name = new Register();
  $rs2 = $obj_name->registerCourse($data_register);
  if ($rs2) {
    
    header('Location: ../view/registor_course_sucuss.php');
    exit();

  }


} else {
  echo "<script type='text/javascript'>alert('ไม่ถูกต้อง');</script>";
  header('Location: ../view/view_registor_course.php');
  exit();
}
?>