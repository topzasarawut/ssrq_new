<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<form action="PagePost3.php" method="post" name="form1">
<?php
echo $_POST["txtName"]."<br>"; // txtName
echo $_POST["txtSiteName"]."<br>"; // txtSiteName
echo "<hr>";
?>
  <input name="txtName" type="hidden" value="<?=$_POST["txtName"];?>">
  <input name="txtSiteName" type="hidden" value="<?=$_POST["txtSiteName"];?>">
  <input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>