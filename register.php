<?php
include_once 'core/init.php';

if(Input::exists()){
  echo 'Am not empty';  
}else{
    echo 'Am empty!';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<fieldset>
<title>title="Register Form</title>
<form action="" method="post">
<input type="text" name="username" id="username" placeholder="Username" value="<?= escape(Input::get('username')); ?>">
<br />
<input type="text" name="password" id="password" placeholder="Password">
<br />

<input type="text" name="cpassword" id="cpassword" placeholder="Confirm Password">
<br />

<input type="text" name="name" id="name" placeholder="Name">
<br />
<input type="submit" value="Register">

</form>
</fieldset>

    
</body>
</html>