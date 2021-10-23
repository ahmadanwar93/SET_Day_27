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
        <?php
        // to get the name and password entered in the index page
        $login_name = $_POST['name'];
        $login_pw = $_POST['password'];

        $employeePWHashed = password_hash($login_pw, PASSWORD_DEFAULT);

        $sql = "SELECT employee_Name,employee_PW,employee_ID FROM employee WHERE employee_Name='$login_name'";
        $result = $conn->query($sql);
        // $row is the associative array that has been returned from the SQL query
        $row = $result->fetch_all(MYSQLI_ASSOC);
        // will check for correct name and pw. If there are now rows returned from SQL query, the user name is not exist
        if(count($row) == 0){
            echo 'wrong name and password';
        }else{
            if ($row[0]['employee_Name'] == $login_name && password_verify($login_pw, $row[0]['employee_PW'])){
                echo 'The name and password is correct'.'<br>';
                // will return employee ID from the query
                $employee_ID =  $row[0]['employee_ID'];
                // insert 
                $sql = "INSERT INTO employee_ci_logs (emp_id,emp_date_time) VALUES ('$employee_ID', CURRENT_TIMESTAMP())";

                if ($conn->query($sql) === TRUE) {
                    echo "Your attendance has been added";
                } else {
                    echo "There is an error with your attendance, please contact the admin";
                }  
                
            }
        }

        


        ?>
        
    </div>

    
</body>
</html>