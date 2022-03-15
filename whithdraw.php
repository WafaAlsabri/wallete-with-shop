

 <?php
//session_start();
$message='';
if(isset($_SESSION['alert'])){$message='no enouf mony';}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
      <h1>withdrow money</h1>
      <h2><?php echo $message; ?>
    <div>
    <form action="wethdraw_db.php" method="post">
        <label for="name"> enter withdrow amount</label>
        <input type="float" id="email" name="money" placeholder="enter amount">
</div>
<button type="submit" >withdrow</button></form>

</body>
</html>