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
  <h1>Girdiğin sayının mükemmel sayı olup olmadığını öğren!</h1><br>
   <input type="text" name="number" value="<?php echo $number;?>">
  <span class="error">* <?php echo $numErr;?></span>
  <input type="submit" name="submit" value="Bir mükemmel sayı mıdır?">  
</form>



<?php
$i = 1;
$total = 0;
if ($number==null) {}
else{
    for($i=1; $i<$number; $i++){
        if($number % $i == 0) $total += $i;
    }
    if($total == $number)
        echo "<script>alert('$number mükemmel bir sayıdır.');</script>";
    else
    echo "<script>alert('$number mükemmel bir sayı değildir.');</script>";
}
?>


</body>
</html>