<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$numErr = "";
$number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["number"])) {
    $numErr = "Sayı girmeniz gerekli!";
  } else {
    $number = test_input($_POST["number"]);
    if (!preg_match("/^[0-9]+/",$number)) {
      $numErr = "Sadece sayı girebilirsiniz.";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <h1>Girdiğin sayının asal sayı olup olmadığını öğren!</h1><br>
   <input type="text" name="number" value="<?php echo $number;?>">
  <span class="error">* <?php echo $numErr;?></span>
  <input type="submit" name="submit" value="Bir asal sayı mıdır?">  
</form>



<?php
 
$prime=0; $i=2;
if($number==null){}
else{
    do
{
	if ($number % $i == 0)
	{
		$prime = 1;
	}
	$i++;
}
while($i<$number);
 
if ($prime != 1)
{
	echo "<h2>$number asal bir sayıdır.<h2/>";
}
else
{
	echo "<h2>$number asal bir sayı değildir.<h2/>";
}
}

?>


</body>
</html>