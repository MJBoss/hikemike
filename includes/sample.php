<?php
include("connect.php");
if(isset($_POST['submit'])){
    $user_id=$_POST["uid"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
$statement=$conn->prepare("UPDATE tbl_user SET firstName=:fname, lastName=:lname, email=:email WHERE user_id =:uid");
$statement->bindValue(':fname',$fname);
$statement->bindValue(':lname',$lname);
$statement->bindValue(':email',$email);
$statement->bindValue(':uid',$user_id);
$statement->execute();
header("location:../admin/user-table.php?error=updated");
exit;
}
?>