<html>
<head>
	<title>3NF Crud Operation</title>
</head>
<body>
	<form action="process.php" method="POST">
		<h2>Student Entry</h2>
		<label for ="number">No</label>
		<input type="number" id="number" name="number" required><br><br>
		
		<label for ="name">Name</label>
		<input type="text" id="name" name="name" required><br><br>
		
		<label for ="phone">Phone</label>
		<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="10 digit phone number" required><br><br>
		
		<label for ="state">State</label>
		<input type="text" id="state" name="state" required><br><br>
		
		<label for ="age">Age</label>
		<input type="number" id="age" name="age" required><br><br>
		
		<input type="submit" name="submit">
	</form>
</body>
</html>
