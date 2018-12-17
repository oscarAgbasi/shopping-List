<!DOCTYPE html>
<?php 
Session_start();
?>
<html>
<head>
<meta charset ="utf-8" />
<title>Summary</title>
<style>
	body {background-color: powderblue;}
	h1   {color: blue;}
</style>

</head>
<body>	
<p>
Hello You want to shop at
 

<?php
echo $_SESSION["storename"];?>
, located in 
<?php echo $_SESSION["StreetAddress"];?><br>
<?php echo $_SESSION["city"];
	  echo $_SESSION["Postalcode"];
	  ?>
	  </p>
	  
	  <P>Shoping List</p>
<?php
	
	
	
	if(isset($_SESSION['items'])){
	foreach($_SESSION['items'] as $key => $value)
	{	 
		echo "<pre>";
		echo "{$key} => {$value}";
		echo "</pre>";		
	}
	}
	
?>
</p>
</body>
<footer>
  <p>Author:Agbasi Oscar</p>
  <p>Student Number:000333302</p>
</footer> 
</html>