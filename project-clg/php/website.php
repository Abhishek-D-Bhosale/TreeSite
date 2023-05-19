<?php
if(isset($_POST['order'])){
   $a = $_POST['name'];
   $b = $_POST['email'];
   $c = $_POST['telephone'];
   $d = $_POST['subject'];
   $e = $_POST['message'];
   $db = "treesite";
   $conn=new mysqli("localhost","root","","treesite");
   if($conn->connect_error){
     die("Connection Failed:" .$conn->connect_error);
 }
 $sql = "Insert into website values('$a','$b','$c','$d','$e')";
 if($conn->query($sql)==TRUE){
  echo "Our Team will Contact You";
 }
 else{
  echo "Error Occured";
 }
}
?>