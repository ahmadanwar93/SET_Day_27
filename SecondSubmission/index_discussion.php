<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>    
    <?php include './header_discussion.php'?> 
</head>
<body>
    <div id="container">
        <form action="attendance_discussion.php" method="post">
            name: <input type="text" name="name"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit">
        </form>
        
    </div>

    
</body>
</html>