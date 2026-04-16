```php id="c5m8qk"
<?php
include("connect.php");

if(isset($_POST['btn']))
{
    $txtn  = $_POST['txtn'];
    $txtsn = $_POST['txtsn'];
    $txte  = $_POST['txte'];
    $txtc  = $_POST['txtc'];
    $txtcn = $_POST['txtcn'];
    $txtq  = $_POST['txtq'];
    $txtco = $_POST['txtco'];
    $txtf  = $_POST['txtf'];
    $txtp  = $_POST['txtp'];
    $txtr  = $_POST['txtr'];

    $qry = "INSERT INTO reg
    (txtn, txtsn, txte, txtc, txtcn, txtq, txtco, txtf, txtp, txtr)
    VALUES
    ('$txtn','$txtsn','$txte','$txtc','$txtcn','$txtq','$txtco','$txtf','$txtp','$txtr')";

    $sql = mysqli_query($con, $qry);

    if($sql)
    {
        header("Location: thankyou.php");
        exit();
    }
    else
    {
        echo "<script>alert('Error while saving record');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration</title>

<style>
*{
    box-sizing:border-box;
}

body{
    margin:0;
    padding:0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #1e3c72, #2a5298);
}

/* Header */
.header{
    width:85%;
    margin:20px auto;
    border-collapse: collapse;
    background:white;
}

.title{
    font-size:42px;
    text-align:center;
    background:black;
    color:white;
    padding:20px;
}

/* Menu */
#menu{
    width:85%;
    margin:20px auto;
    border-collapse: collapse;
}

#menu td{
    width:25%;
    text-align:center;
    background:#4a4aff;
    padding:15px;
    transition:0.3s;
}

#menu td:hover{
    background:#ff4d4d;
}

a{
    color:white;
    text-decoration:none;
    font-weight:bold;
    font-size:18px;
}

/* Form */
.form-box{
    width:500px;
    max-width:95%;
    margin:30px auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 4px 15px rgba(0,0,0,0.4);
}

input{
    width:100%;
    padding:10px;
    border:1px solid #ccc;
    border-radius:5px;
    font-size:16px;
}

input[type=submit]{
    background:#4a4aff;
    color:white;
    border:none;
    cursor:pointer;
    font-size:18px;
}

input[type=submit]:hover{
    background:#ff4d4d;
}

h2{
    text-align:center;
    color:#1e3c72;
}

/* Mobile */
@media screen and (max-width:768px){
    .title{
        font-size:26px;
    }

    #menu td{
        display:block;
        width:100%;
    }

    .form-box{
        width:95%;
    }
}
</style>
</head>

<body>

<!-- Header -->
<table class="header">
<tr>
<td width="15%" bgcolor="#00CCCC">
<img src="image/logo3.jpg" width="100" height="100">
</td>
<td class="title">
Student Management System
</td>
</tr>
</table>

<!-- Menu -->
<table id="menu">
<tr>
<td><a href="index.php">HOME</a></td>
<td><a href="reg.php">REGISTRATION</a></td>
<td><a href="view.php">STUDENT RECORD</a></td>
<td><a href="viewdel.php">EDIT</a></td>
</tr>
</table>

<!-- Form -->
<div class="form-box">
<h2>Student Registration Form</h2>

<form method="post" oninput="txtr.value=parseInt(txtf.value||0)-parseInt(txtp.value||0)">

<table width="100%" cellpadding="10">
<tr><td>Name</td><td><input type="text" name="txtn" required></td></tr>
<tr><td>Surname</td><td><input type="text" name="txtsn" required></td></tr>
<tr><td>Email</td><td><input type="email" name="txte" required></td></tr>
<tr><td>Contact</td><td><input type="text" name="txtc" required></td></tr>
<tr><td>College Name</td><td><input type="text" name="txtcn" required></td></tr>
<tr><td>Qualification</td><td><input type="text" name="txtq" required></td></tr>
<tr><td>Course</td><td><input type="text" name="txtco" required></td></tr>
<tr><td>Fees</td><td><input type="number" name="txtf" required></td></tr>
<tr><td>Paid</td><td><input type="number" name="txtp"></td></tr>
<tr><td>Remaining</td><td><input type="number" name="txtr" readonly></td></tr>
<tr>
<td></td>
<td><input type="submit" value="Save Record" name="btn"></td>
</tr>
</table>

</form>
</div>

</body>
</html>
```
