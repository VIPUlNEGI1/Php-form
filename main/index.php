<?php
// Include the database connection file
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from POST request
    $Name = isset($_POST['Name']) ? $_POST['Name'] : '';
    $Age = isset($_POST['Age']) ? $_POST['Age'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Number = isset($_POST['Number']) ? $_POST['Number'] : '';
    $Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
    $Text = isset($_POST['Text']) ? $_POST['Text'] : '';

    // Validate inputs
    if (!empty($Name) && !empty($Age) && !empty($Email) && !empty($Number) && !empty($Gender) && !empty($Text)) {
        // Insert query
        $sql = "INSERT INTO `tcsdatabase` (`Name`, `Age`, `Email`, `Number`, `Gender`, `Text`) 
                VALUES ('$Name', '$Age', '$Email', '$Number', '$Gender', '$Text')";

        if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    } else {
        echo "Please fill in all fields.";
    }

    mysqli_close($con);
} else {
    echo "Invalid request method.";
}
?>
