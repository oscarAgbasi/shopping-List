<html>
<?php
Session_start();
?>
    <head>
        <meta charset="UTF-8">
        <title>Index Validation</title>
        <style type="text/css">
            .error { color:red;}
            .good {color:green;}
        </style>
    </head>
    <body>
       
		
		
<?php 
//FIRST PARAMETER

	$name1 = filter_input(INPUT_GET, "storename", FILTER_SANITIZE_STRING);
	$error=0;
	if($name1 !== null)
	{
		
	if (!preg_match("/([A-Z])\w+\s\d+\s\w+/", $name1))
	{
	 	echo "<p class = 'error'> Your store Name should contain one or more capital word or intergers, separated by space Please <a href='index.php'>try again.</a> </p>";
		
	} else {
		
		echo "<p class = 'good'> first parameter is ok </p>";
		$_SESSION["storename"]= $name1;
		$error++;
	}

}else {
            echo "<p class='error'>Strore name parameter missing. Please <a href='index.php'>try again.</a></p>";
			
        }
//Second parameter

		$Address1 = filter_input(INPUT_GET, "StreetAddress", FILTER_SANITIZE_STRING );
		
		if($Address1 !== null){
			
	if (!preg_match("/\d+\s[A-Z]\w*\s[A-Za-z]{1}\w*.\s?[E-W]?/", $Address1))
		
	{
		
	 	echo "<p class = 'error'> The Street Address is a number followed by capitalized word, followed by a legal abbreviation and then an optional direction (E,N,W,S) Please <a href='index.php'>try again.</a></p>";
		
	} else {
		
		echo "<p class = 'good'> Second parameter is ok </p>";
		$_SESSION["StreetAddress"]=$Address1;
		$error++;
		
	}

}else {
            echo "<p class='error'>Strore Address parameter missing. Please <a href='index.php'>try again.</a></p>";
        }
		
		//THRID PARAMETER
		$city1 = filter_input(INPUT_GET, "city", FILTER_SANITIZE_STRING );
		
		if($city1 !== null){
	if (!preg_match("/([A-Z])\w+/", $city1))
	{
	
	 	echo "<p class = 'error'> The Story city is single, capitalized word with no digital or special characters. Please <a href='index.php'>try again.</a></p>";
		
	} else {
		
		echo "<p class = 'good'> Thrid parameter is ok </p>";
		$_SESSION["city"]=$city1;
		$error++;
	}

}else {
            echo "<p class='error'>Strore City parameter missing. Please <a href='index.php'>try again.</a></p>";
        }
		
		//FOURTH PARAMETER
		$code1 = filter_input(INPUT_GET, "Postalcode", FILTER_SANITIZE_STRING );
		
		if($code1 !== null){
	if (!preg_match("/[A-Z][0-9][A-Z]\s[0-9][A-z][0-9]/", $code1))
	{
	 	echo "<p class = 'error'> postal code correct format: A0A 0A0 Please <a href='index.php'>try again.</a></p>";
		
	} else {
		
		echo "<p class = 'good'> Fourth parameter is ok </p>";
		$_SESSION["Postalcode"]=$code1;
		$error++;
	}

}else {
            echo "<p class='error'>Strore code parameter missing. Please <a href='index.php'>try again.</a></p>";
        }

		if ($error == 4){
		echo '<p>Start Building your Shopping List <a href="List_Builder.php">Here</a></p>';
			
		} 
		
/*
if ($_GET)
{
// Check if the form field are field are empty and display an error.


$er = array();

//Start validation

if ($_SERVER["REQUEST_METHOD"] == "GET"){
if (empty($_GET["store-name"]))
{
	$er['name'] = "your first name cant be empty";
	$er++;
}

if (empty($_GET['Street-Address']))
{
	$er['Address'] = "your Store address cant be empty";
	$er++;
	
}

if (empty($_GET['city']))
{
	$er['city1'] = "The city cant be empty";
	$er++;
}

if (empty($_GET['Postal-code']))
{
	$er['code'] = "The Postal code cant be empty";
	$er++;
}


}


//check error

if(count ($er)== 0)
{
	//redirect to success page
	header("Location: List_Builder.php");
	exit();
	
}
}




*/
?>
</body>

</html>