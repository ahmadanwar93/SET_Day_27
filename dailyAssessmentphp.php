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
        
    </div>

    <?php     
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employee_assessment";

        

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        
        // to get the check box value. If the user click it and submit the value will be 'I am here!!!'
        $checkBoxValue = $_POST['hereCB'];
        // to fetch the value of employeeID, employee password and employee name in the form if the user submitted any
        // $employeeID = $_POST['id'];
        $employeeName = $_POST['name'];
        $employeePW = $_POST['password'];
    

       



        // try sini
        if ($employeeName == "Fikri" || $employeeName == "Zahin" ||$employeeName == "Amir" ||$employeeName == "Azizi"){
            // echo 'correct name';
            $sql = "INSERT INTO employeeinfo (employee_Name, employee_PW)
            VALUES ('$employeeName', '$employeePW')";

            if ($conn->query($sql) === TRUE) {
            //   echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            

            $sql = "SELECT * FROM employeeinfo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0 && $employeeName !== "Naruto") {
            // output data of each row
                echo "id    "."Name    "."Checked In Date    "."<br>";
                while($row = $result->fetch_assoc()) {
                    echo $row["employee_ID"].'         '. $row["employee_Name"].'         '. $row["employee_CI_Date"].'<br>';
                    
            }
            
        } else {
            echo "0 results";
        }
        }else{
            echo 'wrong name';
            
        }
        $employeeName = "Naruto";
        
    ?>

    
</body>
</html>