<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>    
</head>
<body>
    <div id="container">
    
    <form action="adminModify.php" method = 'post'>
    <label>Which employee you want to change the time:</label>
        <select name="employeeOption">
            <option value="Fikri">Fikri</option>
            <option value="Zahin">Zahin</option> 
            <option value="Amir">Amir</option>
            <option value="Azizi">Azizi</option> 
        </select>
        
        <input type='submit' value='submit'>
    </form>
    </div>

    <?php

        $adminName = $_POST['name'];
        $secondName = $adminName;
        // if(isset($adminName) == ""){
        //     $adminName = $secondName;
        // }
        // echo $adminName;
        // echo isset($adminName);




        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employee_assessment";
        
        $optionArr = $_POST['employeeOption'];
        // echo $optionArr;

        

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        
        
        $sql = "UPDATE employeeinfo SET employee_CI_Date = CURRENT_TIMESTAMP() WHERE employee_Name='$optionArr' ORDER BY employee_CI_Date LIMIT 1";

        if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        $adminName = $secondName;
        echo $adminName;
        } else {
        echo "Error updating record: " . $conn->error;
        }

        

        
            
        // }
    ?>

    
</body>
</html>