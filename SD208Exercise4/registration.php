<?php include('validation.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title> Registration Form </title>
</head>

<style>
* {
    margin: 0px;
    padding: 0px;
}

body {
    font-size: 120%;

}
.header {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #8B4513;
    text-align: center;
    border: 1px solid #8B4513;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}

form {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 2px solid #8B4513;
    background: white;
    border-radius: 0px 0px 10px 10px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: center;
    margin: 3px;
}

.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid brown;
}

.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #8B4513;
    border: none;
    border-radius: 5px;
}

.error {
    font-size: 15px;
    text-align: left;
    width: 92%;
    padding: 5px;
    border: 1px solid red;
    color: #a94442;
    background: #f2dede;
    border-radius: 2px;
}
</style>

<body>
    <div class="header">
        <h2> Register </h2>
    </div>
    <form method="post" action="registration.php">
        <!-- display validation errors here  -->
        <?php include('errors.php'); ?>

        <p> Please fill in the form correctly. </p>
        <div class="input-group">
            <label> First Name </label>
            <input type="text" name="firstname">
        </div>

        <div class="input-group">
            <label> Last Name </label>
            <input type="text" name="lastname">
        </div>

        <div class="input-group">
            <label> Email </label>
            <input type="emailadd" name="email">
        </div>

        <div class="input-group">
            <label> Address </label>
            <input type="text" name="address">
        </div>

        <div class="input-group">
            <button type="submit" name="submit" class="btn"> Submit </button>
        </div>

        </div>
    </form>
    </div>


</body>

</html>