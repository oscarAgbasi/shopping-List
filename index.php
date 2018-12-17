

 <!DOCTYPE html>
 <html>

 <title>StoreName</title>
 //Author:Agbasi oscar
 <head>
 <meta charset ="utf-8" />
 <style>
body {background-color: powderblue;}
h1   {color: blue;}



</style>

 
 </head>

<body>

<h1>Hello customer</h1>


<form method="get" action="Form_Validation.php">

<fieldset style ="width: 400px">
    <legend>Store Information</legend>

                
<!-- Store-Name input-->
Store-Name: <br> <input id = "store-name" placeholder= "Store Name" type="text" name="storename"><br>
<p><?php if(isset($er['name'])) echo $er ['name']; ?></p>

Street Address: <br><input id = "Street-Address" placeholder="Address" type="text" name="StreetAddress"><br>
<p><?php if(isset($er['Address'])) echo $er ['Address']; ?></p>

City: <br><input id = "city" placeholder="City" type="text" name="city"><br>
<p><?php if(isset($er['city1'])) echo $er ['city1']; ?></p>

Postal-code <br><input id = "Postal-code" placeholder="Postal code"  type="text" name="Postalcode"><br>
<p><?php if(isset($er['code'])) echo $er ['code']; ?></p>

<br>
<input type="submit" value ="Submit" > <input type = "reset" value ="Reset">

</fieldset>
</form>



</form>


</body>

 <footer>
  <p>Author:Agbasi Oscar</p>
  <p>Student Number:000333302</p>
</footer> 
</html> 