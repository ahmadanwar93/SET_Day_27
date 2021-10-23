<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View</title>    
    <?php include './header_discussion.php'?> 
</head>
<body>
    <div id="container">
        <?php
        // to get the name and password entered in the index page
        $login_name = $_POST['name'];
        $login_pw = $_POST['password'];

        $employeePWHashed = password_hash($login_pw, PASSWORD_DEFAULT);

        $sql = "SELECT employee_Name,employee_PW,employee_ID FROM employee INNER JOIN admin_table
        ON employee.employee_ID = admin_table.emp_id  WHERE employee_Name='$login_name'";
        $result = $conn->query($sql);
        // $row is the associative array that has been returned from the SQL query
        $row = $result->fetch_all(MYSQLI_ASSOC);
        // will check for correct name and pw. If there are now rows returned from SQL query, the user name is not exist
        if(count($row) == 0){
            echo 'wrong admin name and password. Access is restricted';
        }else{
            if ($row[0]['employee_Name'] == $login_name && password_verify($login_pw, $row[0]['employee_PW'])){
                // echo 'The admin name and password is correct'.'<br>';
                // will return employee ID from the query
                $employee_ID =  $row[0]['employee_ID'];
                // we want to select all the data from the attendance logs and display it here
                
                $sql = "SELECT employee.employee_id, employee.employee_Name, employee_ci_logs.emp_date_time,CI_logs FROM employee_ci_logs INNER JOIN employee
                ON employee.employee_ID = employee_ci_logs.emp_id";
                $result = $conn->query($sql);
                // $row_2 is the associative array that has been returned from the SQL query
                $row_2 = $result->fetch_all(MYSQLI_ASSOC);

                // print_r ($row_2);

                $i = 0;
                while($i < count($row_2)){
                    echo "
                    <p>No: {$row_2[$i]['CI_logs']}</p>
                    <p>Employee ID: {$row_2[$i]['employee_id']}</p>
                    <p>Employee Name: {$row_2[$i]['employee_Name']}</p>
                    <p>Employee Check In Date Time: {$row_2[$i]['emp_date_time']}</p>
                    <form action='admin_modify_time_discussion.php' method='post'>
                        <button type='submit' value ='{$row_2[$i]['CI_logs']}' name='edit_time_log'>Edit log</button>
                    </form>
                    ".'<br>';
                
                    $i += 1;

                }                
            }else{
                echo 'wrong admin name and password. Access is restricted';
            }
        }

        


        ?>
        
    </div>

    
</body>
</html>