<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title> MNHS VMS Registration </title>
    <link rel="stylesheet" type="text/css" href="homepage.php">
</head>

<style>
    * {
    margin: 0px;
    padding: 0px;
}

body {
    font-size: 120%;
}

.header{
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #5ab6ca;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px ;
    padding: 20px;
}

form {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}

.input-group{
    margin: 10px 0px 10px 0px;
}

.input-group label{
    display: block;
    text-align: center;
    margin: 3px;
}

.input-group input{
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}

.btn{
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EAD;
    border: none;
    border-radius: 5px;
}

.error{
    text-align: left;
    width: 92%;
    padding: 10px;
    border: 1px solid red;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
}
 </style>

<body>
    <div class="header">
        <h2> Login </h2>
    </div>

    <form method="post" action="login.php">
        <div class="input-group">
            <label> Email Address </label>
            <input type="emailAdd" name="emailAdd1" required>
        </div>

        <div class="input-group">
            <label> Password </label>
            <input type="password" name="[password]" required>
        </div>

        <div class="input-group">
        <button type="submit" name="login" class="btn" href=""> Login </button>
        </div>
        <p> Not yet a Registered Student? <a href="register.php"> Register or Sign up </a>

        </p>
    </form>
</body>

</html>