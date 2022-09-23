<?php
include_once "connect.php";

if (isset($_POST["login"])){
$user=$_POST["uname"];
$pass=$_POST["psw"];

$statement=$conn->prepare("SELECT * FROM tbl_user WHERE email = :email");
$statement->bindParam(':email', $user);
$statement->execute();

$user = $statement->fetch(PDO::FETCH_ASSOC);

$email = $user["email"];
$password =$user["password"];

//$checkpass=password_verify($pass, $password);

//if($checkpass ===false){
if (password_verify($password, $user['password'])) {

    header("location:../admin/index.php?error=wrongpass");
exit;
}else{
    session_start();
    $_SESSION['u_id']=$user["user_id"];
    $_SESSION["name"]=$user['firstName'];
    $_SESSION["email"]=$user['email'];
    header("location:../index.php?error=success");
    exit;
    
}


}

?>