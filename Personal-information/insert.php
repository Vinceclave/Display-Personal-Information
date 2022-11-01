<!DOCTYPE html>
<html lang="en">
<head>
  <title>Information Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="insert.css" />

</head>
<body>
    <?php 
        // servername => localhost
        // username => root
        // password => empty
        // database name => myinfo

        $conn = mysqli_connect("localhost", "root", "", "myinfo");
   
        // Check connection
           if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 8 values from the form data(input)

        $id_number = $_REQUEST['id-number'];
        $first_name = $_REQUEST['first-name'];
        $middle_name = $_REQUEST['middle-name'];
        $last_name = $_REQUEST['last-name'];
        $age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];
        $status = $_REQUEST['status'];
        $address = $_REQUEST['address'];

        // Performing insert query execution
        // here our table name is information

        $sql = "INSERT INTO information  VALUES ('$id_number', '$first_name', ' $middle_name',
            '$last_name', '$age', '$gender', '$status','$address')";

                    
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.\n"
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("<div><p>ID. Number: $id_number</p> <p>First Name: $first_name</p>  <p>Middle Name: $middle_name</p <p>Last Name: $last_name</p> <p>Age: $age</p> <p>Gender: $gender</p> <p>Status: $status</p> <p>Address: $address</p></div");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
   ?>
</body>
</html>