<?php
 $connect=mysqli_connect("localhost","root","","validate_form");
//require();
//Insert start
if(isset($_POST["insert"])) {
    $first_name = $_POST["first_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"]; 
    $gender = $_POST["gender"];

    $insert = "INSERT INTO info1(First_Name, Email, Password, Phone, Gender) VALUES ('$first_name', '$email', '$password', '$phone', '$gender')";
    $result = mysqli_query($connect, $insert);

    if($result) {
        echo "Successfully inserted a record!";
    } else {
        echo "Unsuccessful";
    }
}

  //Insert end



?>


<html>
<head>
    <title>Personal Details</title>
    <style type="text/css">
        body {
            text-align: center;
            font-size: 25px;
        }

        input {
            font-size: 20px;
        }

        table {
            margin: auto;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h2>Information Form</h2>
    <form method="post" action="" onsubmit="return validateForm()">
        <table border="0" style="text-align: left">
            <tr>
                <tr>
                    <th>First Name</th>
                    <td><input type="text" name="first_name" required></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="text" name="email" id="email" required></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <th>Phone No</th>
                    <td><input type="number" name="phone" id="phone"></td>
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
        </form>

        <script>
            function validateForm() {
                var name = document.getElementsByName("first_name")[0].value;
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
                var phone = document.getElementById("phone").value;

                // Validate Name
                if (name.length < 6 || !/^[a-zA-Z ]+$/.test(name)) {
                    alert("Name should contain alphabets and be at least 6 characters long.");
                    return false;
                }

                // Validate Password
                if (password.length < 6) {
                    alert("Password should be at least 6 characters long.");
                    return false;
                }

                //Validate Phone Number
                if (phone.length !==10) {
                    alert("Phone Number should contain 10 digits only! .");
                    return false;
                }


                // Validate Email
                var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (!email.match(emailPattern)) {
                    alert("Invalid email address. Please use a valid email pattern (e.g., name@domain.com).");
                    return false;
                }

                return true;
            }
        </script>
    </body>
</html>
