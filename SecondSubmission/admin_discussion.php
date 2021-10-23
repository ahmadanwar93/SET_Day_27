<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>    
    <?php include './header_discussion.php'?> 
</head>
<body>
    <div id="container">
        <form action="admin_modify_discussion.php" method="post">
            Admin name: <input type="text" name="name"><br>
            Admin password: <input type="password" name="password"><br>
            <input type="submit">
        </form>
        
    </div>

    
</body>
</html>