<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>    
    <!-- <?php include './dailyAssessmentphp.php'?> -->
</head>
<body>
    <div id="container">
        <form action="dailyAssessmentphp.php" method="post">
            <!-- id: <input type="text" name="id"><br> -->
            name: <input type="text" name="name"><br>
            Password: <input type="password" name="password"><br>
            <input type="checkbox" id="hereCB" name="hereCB" value='I am here!!!' checked="true">
            <label for="hereCB" > I am here!</label><br>
            <input type="submit">
        </form>
        
    </div>

    
</body>
</html>