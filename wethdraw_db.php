<?php
session_start();
include('config.php');
$money=$_POST['money'];
// $ID=$_SESSION['ID'];

// $sql="select Amount from deposit where ID='$ID'";
$sql="select Amount from deposit";
$result=mysqli_query($conn,$sql);
$present=mysqli_num_rows($result);

if($present>0){
    
$row=mysqli_fetch_array($result);
$Amount=$row['Amount'];
if( is_numeric($money) && $money <= $Amount ){
$total=$Amount - $money;
$querys="update deposit Set Amount='$total' ";
$result=mysqli_query($conn,$querys);

echo "<script>alert('succes')</script>";

}
else{
    echo "<script>alert('NO money'); location.href='whethdraw_db.php'</script>";
}

}


?>

