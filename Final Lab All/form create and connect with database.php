<?php
 $connect=mysqli_connect("localhost","root","","info_form");
//require();
//Insert start
if(isset($_POST["insert"]))
{
	
	$first_name=$_POST["first_name"];
	$email=$_POST["email"];
    $password=$_POST["password"];
	$gender=$_POST["gender"];
   
	$insert="insert into information1(First_Name,Email,Password,Gender) values('$first_name','$email', '$password','$gender')";
	$result=mysqli_query($connect,$insert);
	if($result==1)
	{
		echo"Successfully inserted!";
	}
	else
	{
		echo"Unsuccess";
	}
}  //Insert end



?>
<html>
<head>
	<title>Personal Details</title>
	<style type="text/css">
		body{
			text-align: center;
           font-size: 25px;
		}
		input{
			font-size: 20px;
		}
		table
		{
			margin: auto;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h2>Information Form </h2>
	<form method="post" action="" onsubmit="return validateForm()">
<table border="0" style="text-align:left" >
        <tr>
		 <tr>
           <th>First Name</th>
        <td><input type="text" name="first_name"  required></td>
         </tr>
         <tr>
           <th>Email</th>
           <td><input type="text" name="email" required></td>
         </tr>
         <tr>
           <th >Password</th>
           <td><input type="password" name="password"></td>
         </tr>
		 <tr>
           <th>Gender</th>
           <td><input type="radio" name="gender" value="Male" checked> Male
                <input type="radio" name="gender" value="Female"> Female
            </td>
		 </tr>
		 <tr> 
		 	<td>
		 		
             <input type="submit" name="insert" value="Submit">
		 	</td>
		 </tr> 
		 </table> 

		 <br>
    
</form>





</body>
</html>