<html>
<body>
<style>
input
 
{
	
	border-style:soild;
	border-color:brown;
	
}
</style>
<head>
<title></title>
<h2 align="center">Registraion From</h2>

<form action="" method=" ">
<table cellspacing="10" cellpadding="5" align="center" border="0" bgcolor="#FDESDC">
   
<tr>
<td><label>Username:</label></td>
<td><input type="text" name="Username" /></td>	
</tr> 
   
<tr>
<td><label>Password:</label></td> 
<td><input type="Password" name="pwd" /></td>	
</tr>    

<tr>
<td><label>Name:</label></td>
<td><input type="text" name="Name" /></td>	
</tr>    
	
<tr>
<td><label>Address:</label></td> 
<td><input type="text" name="add" /></td>	
</tr>    	
 
<tr>
<td><label>Country:</label></td>  
<td><select name="Country">
<option>please select a country</option>
<option>India</option>
<option>canada</option>
<option>U.k.</option>
<option>china</option>
</tr>
</select> 

<tr>
<td><label>ZIP Code:</label></td> 
<td><input type="code" name="cd" /></td>	
</tr>    	   	
     
<tr>
<td><label>Email:</label></td> 
<td><input type="email" name="eml" /></td>	
</tr>    	  

<tr>
<td><label>Sex:</label></td> 
<td><input type="radio" name="gender" id="male" />male
<input type="radio" name="gender" id="female" />female</td>	
</tr>  

<tr>
<td><label>language:</label></td> 
<td><input type="checkbox" name="eng"/>English
<input type="checkbox" name="non"/>Non English</td>	
</tr>

<tr>
<td><label>About:</label></td> 
<td><textarea name="about" cols="35" rows="4"/></textarea></td>	
	
</tr>

<tr>
<td align="center"  colspan="2"  rowspan="2"><input type="submit" name="submit"></td> 
</tr>    
 
</form> 
</head>

</body>
</html>

<?php

?>