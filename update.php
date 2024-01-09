<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM Student WHERE id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $number = $row['Stud_No'];
    $name = $row['Stud_Name'];
    $phone = $row['Stud_Phone'];
    $state = $row['Stud_State'];
    $age = $row['Stud_Age'];
} else {
    echo "No record found";
}
$conn->close();
?>
<form action="" method="POST">
		<h2>Entry Update</h2>
		<label for ="number">No</label>
		<input type="number" id="number" name="number" value="<?php echo $number; ?>" required><br><br>
		<label for ="name">Name</label>
		<input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>
		<label for ="phone">Phone</label>
		<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" value="<?php echo $phone; ?>"required><br><br>
		<label for ="state">State</label>
		<input type="text" id="state" name="state" value="<?php echo $state; ?>" required><br><br>
		<label for ="age">Age</label>
		<input type="number" id="age" name="age" value="<?php echo $age; ?>" required><br><br>
		<input type="submit" value="Update "name="update">


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $number = $_POST["number"];
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$state = $_POST["state"];
	$age = $_POST["age"];
        $sql = "UPDATE Student SET Stud_No='$number', Stud_Name='$name', Stud_Phone='$phone', Stud_State='$state', Stud_Age='$age' WHERE id=$id";
	if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location: process.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    $conn->close();
}
?>
