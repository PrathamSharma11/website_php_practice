<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" action="collegeinsert.php">
        Name: 
        <input type="text" name="name">
        <br><br>
        email:
        <input type="text" name="email">
        <br><br>
        college:
        <select name="college">
           <option>Select college</option>
           <option value="RJIT">RJIT</option>
           <option value="ITM">ITM</option>
        </select>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="male">FeMale
        <br><br>
        Education:
        <input type="checkbox" name="education"  value="10th">10th
        <input type="checkbox" name="education" value="10th">12th
        <input type="checkbox" name="education" value="BE">BE
        <br><br>
        <input type="submit" value="submit">
</form>

</body>
</html>