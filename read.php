<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"])){
    // Include config file
    require_once "config.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM nhanvien WHERE id = $id";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Store data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $name = $row["name"];
            $address = $row["address"];
            $salary = $row["salary"];
            echo "<pre>ID: {$id}<br />Name: {$name}<br />Address: {$address}<br />Salary: {$salary}<br /></pre>";
            echo '<a href="welcome.php">Go back</a>';
        }
        } else {
        echo "0 Results";
        }
        mysqli_close($link);
    }
?>
