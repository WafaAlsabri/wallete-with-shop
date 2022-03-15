<?php

session_start();
include('config.php');
$money=$_POST['money'];
/*$ID=$_SESSION['ID'];*/
$sql="select Amount from deposit";
$result=mysqli_query($conn,$sql);
$present=mysqli_num_rows($result);

if($present>0){
    
$row=mysqli_fetch_array($result);
$deposit=$row['Amount'];
$_SESSION['Amount'] = $deposit;
if( is_numeric($money) && $money >0 ){
$total=$deposit+$money;
$querys="update deposit set Amount='$total' ";
$result=mysqli_query($conn,$querys);
echo "<script>alert('succes')</script>";

}
else{
    echo "<script>alert('NOOOOOOOOOO'); location.href='whethdraw_db.php'</script>";
}
}
else{
 $sql="insert into deposit(ID,Amount)valuse($ID,$money)";
 $result=mysqli_query($conn,$sql);
  
}





?>