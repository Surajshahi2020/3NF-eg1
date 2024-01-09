<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $age = $_POST["age"]; 
    $check = "SELECT * FROM State_Country WHERE State = '$state'";
    $result = $conn->query($check);
    if ($result && $result->num_rows > 0) {
        $sql = "INSERT INTO Student (Stud_No, Stud_Name, Stud_Phone, Stud_State, Stud_Age) VALUES ('$number', '$name', '$phone', '$state', '$age')";
        echo ($conn->query($sql)) ? "Inserted successfully" : "Error: " . $conn->error;
    } else {
        echo "State does not exist.";
    }
}

$retrieve = "SELECT * FROM Student";
$result = $conn->query($retrieve);
if ($result->num_rows > 0){
	echo "<table border='1'>";
	echo "<tr>
		<th>Id</th>
		<th>Number</th>
		<th>Name</th>
		<th>Phone</th>
		<th>State</th>
		<th>Age</th>
		<th>DELETE</th>
		<th>UPDATE</th>
	      </tr>";
	      while($row = $result->fetch_assoc()){
		 echo "<tr>";
		 echo "<td>" . $row["Id"] . "</td>";
	         echo "<td>" . $row["Stud_No"] . "</td>";
		 echo "<td>" . $row["Stud_Name"] . "</td>";
		 echo "<td>" . $row["Stud_Phone"] . "</td>";
		 echo "<td>" . $row["Stud_State"] . "</td>";
		 echo "<td>" . $row["Stud_Age"] . "</td>";
		 echo "<td><a href='delete.php?id={$row["Id"]}'>Delete</a></td>";
		 echo "<td><a href='update.php?id={$row["Id"]}'>Update</a></td>";
		 echo "</tr>";
		}
	}
?>

