<?php require_once('Connections/MyConnection.php'); ?>
<?php session_start();
if(!isset($_SESSION['customer_email']))
{
    // not logged in
    header('Location: login.php');
exit();}    
?>
<?php
$email=$_SESSION['customer_email']; 
$pqty=$_POST['pq'];
$pimg=$_POST['pi'];
$pi=$_POST['pid'];
$prodname=$_POST['pname'];
$prodprice=$_POST['prodaprice']*$pqty;
mysqli_select_db($db, "ecommerce");
$una=mysqli_query($db, "SELECT customer_id FROM customers where customer_email='$email'") or die(mysqli_error());
$custid = mysqli_fetch_assoc($una);
$un=mysqli_query($db, "INSERT INTO cart (email ,product_id,name,quantity, price,img) 
	VALUES ('$email','$pi','$prodname','$pqty', '$prodprice','$pimg')") or die(mysqli_error());
$Result1 = mysqli_query($db, $un) or die(mysqli_error());

?>
