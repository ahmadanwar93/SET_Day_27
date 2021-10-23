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
        // get the attendance log attendance from the admin modify page. This is crucial to know which attendance log record we need to modify
        $edit_log_id = $_POST['edit_time_log'];
        // echo $edit_log_id
        echo 'The current record log id is '. $edit_log_id.'<br>';
        echo 'If you press the submit button, the date and time of the current attendance log record will be set to current time stamp.';
        echo "
        <form action='edit_time_message_discussion.php' method='post'>
            <button type='submit' value ='$edit_log_id' name='edit_time_log_id'>Edit log</button>
        </form>        
        "



        ?>
    </div>

    
</body>
</html>