<?php
  include('DatabaseCon.php');
  $db=new DatabaseCon();
  session_start();
  $uid=$_SESSION['uid'];
  $feedback=$_GET['message'];

  $sql="insert into feedback(feedback,uid)values('$feedback','$uid')";
$db->insertquery($sql);
echo"<script>alert('Submited Successfully');window.location='feedback.php';</script>";
?>