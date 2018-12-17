<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<title>List Building</title>
<head>
<meta charset ="utf-8" />
<style>
	body {background-color: powderblue;}
	h1   {color: blue;}
</style>

</head>

<body>	
	<form method="get" action="List_Builder.php">
		<input type="text" id = "Name" name="Name"/>
	</form>
<input type = "Submit" value ="ADD">

<p>Shopping List</p>
<p>------------------------------------------------------------------</p>
<?php 

if (isset($_GET["Name"]) && $_GET["Name"] !="") {

	$shop= $_GET["Name"];
	if(!isset($_SESSION['items'])){
		$_SESSION['items'] = array();
		array_push($_SESSION['items'],$shop);
	}
	elseif($shop == "Re"){
		Session_unset();
	}
	else{
		if(in_array($shop, $_SESSION['items']))
		{
			echo "Value is in the array already";
		}
		else{
			array_push($_SESSION['items'],$shop); 
		}
	}
	
	if(isset($_SESSION['items'])){
	foreach($_SESSION['items'] as $key => $value)
	{	 
		echo "<pre>";
		
		echo "{$key} => {$value}";
		echo "</pre>";		
	}
	}
} 
 
	

?>
		<p>Click here if your are  <a href="Summary.php">done</a></p>
		
</body>
<footer>
  <p>Author:Agbasi Oscar</p>
  <p>Student Number:000333302</p>
</footer> 
</html>
