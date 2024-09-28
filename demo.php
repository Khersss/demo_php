<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
        <?php
        if(isset($_GET["success"])){
        ?>
            <p style="background-color:blueviolet"><?php echo $_GET["success"]?></p>
        <?php
        }
        ?>

        <?php
        if(isset($_GET["error"])){
        ?>
            <p style="background-color:aqua"><?php echo $_GET["error"]?></p>
        <?php
        }
        ?>

    <form action="output.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter Username">
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password">
        </div>

        
        <div>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Please Confirm Password">
        </div>

        <div>
            <input type="submit" id="submit" value="Register">
        </div>

    </form>
</body>
</html>