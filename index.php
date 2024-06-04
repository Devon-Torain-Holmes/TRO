<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
   

    <link rel="stylesheet" type="text/css" href="css/style3.css">

</head>

<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <div class="form-field">
        <input type="text" name="uname" placeholder="User Name"><br>
        </div>

        <label>Password</label>
        
        <div class="form-field">
        <input type="password" name="password" placeholder="Password"><br> 
        </div>

        <div class="form-field">
        <button type="submit">Login</button>
        </div>
        
     </form>

</body>

</html>