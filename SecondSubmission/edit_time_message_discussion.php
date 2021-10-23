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
        $edit_id = $_POST['edit_time_log_id'];
        echo 'The record selected has the log id of '.$edit_id.'<br>';
        

        $sql = "UPDATE employee_ci_logs SET emp_date_time= CURRENT_TIMESTAMP() WHERE CI_logs=$edit_id";

        if ($conn->query($sql) === TRUE) {
        echo "The date and time of the record has been updated.";
        } else {
        echo "There is a problem in updating the date and time of the record selected. Please contact admin for more information " . $conn->error;
        }

        ?>
    </div>

    
</body>
</html>