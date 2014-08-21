<!DOCTYPE html>
<html>
<head>
<title>Array String Maker</title>
<style type="text/css">
div {
float:left;
width:50%;
}
</style>
</head>
<body>
<div>

<form action="<?php $_PHP_SELF ?>" method="post">
<textarea rows="10" cols="10" placeholder="Paste your data here! It will be saparated by spaces!" name="dataGeter"></textarea>
<br>
<input type="submit" name="submit" value="Generate">
<input type="checkbox" name="details" checked="checked" ><label for="details" >Print Details</label>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['dataGeter'])){
$input = htmlentities($_POST['dataGeter']);
$arr = preg_split("/[\s,]+/", $input);
$arr = array_filter($arr);
echo "<div>";
	if ($_POST['details']){
		var_dump($arr);
	}
	for ($i = 0; $i < count($arr); $i++) {
		if($i < (count($arr)- 1)){
			echo "'".trim($arr[$i])."', ";
		} else {
			echo "'".trim($arr[$i])."'";
		}
	}
echo "</div>";
}
	
?>
