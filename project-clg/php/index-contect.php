<?php
if(isset($_POST['submit'])){
   $a = $_POST['name'];
   $b = $_POST['email'];
   $c = $_POST['subject'];
   $d = $_POST['message'];
   $db = "treesite";
   $conn=new mysqli("localhost","root","","treesite");
   if($conn->connect_error){
     die("Connection Failed:" .$conn->connect_error);
 }
 $sql = "Insert into indexcontact values('$a','$b','$c','$d')";
 if($conn->query($sql)==TRUE){
  echo "Our Team Will Contact You";
 }
 else{
  echo "Error Occured";
 }
}
?>