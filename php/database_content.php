<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  Database Content Showing Page
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 20px;
        text-align: left;
        }

        th {
        background-color: #fc5b1d;
        color: white;
        }

        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
    <h1>ADMIN LOGIN - DATABASE OF THE EATSLK RESTAURANT</h1>
    <button><label><a href="http://localhost/Demo-Static-Website/index.html">HOME</a></button>
<body>


<br>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Table 1 - Contact table
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<table border="1pt">
<h3>The database of Contact details</h3>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>subject</th>
        <th>message</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "eatslk_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo"The database of Contact details";
        echo "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td><td>" . $row["message"] ."</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Table 2 - Subscribe table
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<table border="1pt">
<h3>The database of Subscribe Newsletter details</h3>
    <tr>
        <th>email</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "eatslk_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM subscribe";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    //echo"The database of Subscribe Newsletter details";
    while($row = $result->fetch_assoc()) {
        echo  "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Table 3 - Bookings table
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<table border="1pt">
<h3>The database of Booking Details</h3>
    <tr>
        <th>date</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>message</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "eatslk_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    //echo"The database of Booking Details";
    while($row = $result->fetch_assoc()) {
        echo "</td><td>" . $row["date"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] ."</td><td>" . $row["message"] . "</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>
</table>
</body>
</html>