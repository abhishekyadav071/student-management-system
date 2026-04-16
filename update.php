```php id="y24f0m"
<?php
include("connect.php");

$id = $_REQUEST['id'];

$qry = "SELECT * FROM reg WHERE id='$id'";
$sql = mysqli_query($con, $qry);
$row = mysqli_fetch_array($sql);

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

    $qry = "UPDATE reg SET
        txtn='$txtn',
        txtsn='$txtsn',
        txte='$txte',
        txtc='$txtc',
        txtcn='$txtcn',
        txtq='$txtq',
        txtco='$txtco',
        txtf='$txtf',
        txtp='$txtp',
        txtr='$txtr'
        WHERE id='$id'";

    $sql = mysqli_query($con, $qry);

    if($sql)
    {
        echo "<script>alert('Data Updated Successfully'); window.location='view.php';</script>";
    }
    else
    {
        echo "<script>alert('Data Not Updated');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student Record</title>
<style>
body{
    margin:0;
    padding:0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #1e3c72, #2a5298);
}

table{
    border-collapse: collapse;
    margin: auto;
}

a{
    color:white;
    text-decoration:none;
    font-weight:bold;
}

#menu td{
    width:25%;
    text-align:center;
    background:#4a4aff;
    padding:15px;
    font-size:18px;
    transition:0.3s;
}

#menu td:hover{
    background:#ff4d4d;
}

.form-box{
    width:500px;
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

.title{
    font-size:50px;
    text-align:center;
    background:black;
    color:white;
    padding:20px;
}

h2{
    text-align:center;
    color:#1e3c72;
}
</style>
</head>

<body>

<!-- Header -->
<table width="85%" bgcolor="white">
<tr>
<td width="15%" bgcolor="#00CCCC">
<img src="image/logo3.jpg" width="150" height="150">
</td>
<td class="title">
Student Management System
</td>
</tr>
</table>

<br>

<!-- Menu -->
<table id="menu" width="85%">
<tr>
<td><a href="index.php">HOME</a></td>
<td><a href="reg.php">REGISTRATION</a></td>
<td><a href="view.php">STUDENT RECORD</a></td>
<td><a href="viewdel.php">EDIT</a></td>
</tr>
</table>

<!-- Form -->
<div class="form-box">
<h2>Edit Student Record</h2>

<form method="post" oninput="txtr.value=parseInt(txtf.value||0)-parseInt(txtp.value||0)">

<table width="100%" cellpadding="10">
<tr><td>Name</td><td><input type="text" name="txtn" value="<?php echo $row['txtn']; ?>" required></td></tr>
<tr><td>Surname</td><td><input type="text" name="txtsn" value="<?php echo $row['txtsn']; ?>" required></td></tr>
<tr><td>Email</td><td><input type="email" name="txte" value="<?php echo $row['txte']; ?>" required></td></tr>
<tr><td>Contact</td><td><input type="text" name="txtc" value="<?php echo $row['txtc']; ?>" required></td></tr>
<tr><td>College Name</td><td><input type="text" name="txtcn" value="<?php echo $row['txtcn']; ?>" required></td></tr>
<tr><td>Qualification</td><td><input type="text" name="txtq" value="<?php echo $row['txtq']; ?>" required></td></tr>
<tr><td>Course</td><td><input type="text" name="txtco" value="<?php echo $row['txtco']; ?>" required></td></tr>
<tr><td>Fees</td><td><input type="number" name="txtf" value="<?php echo $row['txtf']; ?>" required></td></tr>
<tr><td>Paid</td><td><input type="number" name="txtp" value="<?php echo $row['txtp']; ?>"></td></tr>
<tr><td>Remaining</td><td><input type="number" name="txtr" value="<?php echo $row['txtr']; ?>" readonly></td></tr>
<tr>
<td></td>
<td><input type="submit" value="Update Record" name="btn"></td>
</tr>
</table>

</form>
</div>

</body>
</html>
```
