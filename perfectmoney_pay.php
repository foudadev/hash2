<?php
session_start();
$user_id    = $_SESSION['id'];
$product_id = $_GET['id'];
// Create connection
include 'config.php';
$conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
// my query 
  $sql = "SELECT id,name,price FROM products WHERE id = '".$product_id."'";
  $result = mysqli_query($conn, $sql);
// check result
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

    $product_name   =  $row["name"];
    $product_salary =  $row["price"];
   
  }
}  
   
?>

<!DOCTYPE html>
<html lang="en">
  <body>
<h1>project name   :<?php echo $product_name ;?> </h1>
<h1>project salary : <?php echo $product_salary ." USD"; ?> </h1>
<form action="https://perfectmoney.com/api/step1.asp" method="POST">
<input type="hidden" name="PAYEE_ACCOUNT"  value="U31623422">
<input type="hidden" name="PAYEE_NAME"     value="yahia">
<input type="hidden" name="PAYMENT_AMOUNT" value="<?php echo $product_salary ;?>">
<input type="hidden" name="PAYMENT_UNITS"  value="USD">
<input type="hidden" name="STATUS_URL"     value="yehiafouda20012002@gmail.com">
<input type="hidden" name="PAYMENT_URL"    value="http://localhost/hash2/done.php?id=<?php echo $product_id;?>?user_id=<?php echo $user_id?>?product=<?php echo $product_name?>">
<input type="hidden" name="NOPAYMENT_URL"  value="http://localhost/hash2/dashboard.php">
<input type="hidden" name="test" value="done">
<input type="hidden" name="BAGGAGE_FIELDS" value="test">
<input type="submit" name="PAYMENT_METHOD" value="Pay Now!">
</form>
  </body>
</html>

