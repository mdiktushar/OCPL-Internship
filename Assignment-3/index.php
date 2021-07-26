<!DOCTYPE html>

<style>

input, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<html>
  <body>
	<form method="post" action="process.php">

		<label for="id">First Name</label>
		<input type="text" name="first_name">
		<br>
		<label for="id">Last Name</label>
		<input type="text" name="last_name">
		<br>

		<label for="id">Email</label>
		<input type="email" name="email">
		<br><br>

		<label for="id">Date of birth</label>
    	<input type="date" id="lname" name="dateofbirth" >
		<br><br>

		<label for="id">City</label>
		<input type="text" name="city_name">

		<input type="submit" name="save" value="submit">


	</form>
  </body>
</html>