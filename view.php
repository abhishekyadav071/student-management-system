```php id="3kq90e"
<!DOCTYPE html>
<html>
<head>
<title>Student Records</title>
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

.record-box{
    width:90%;
    margin:30px auto;
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 4px 15px rgba(0,0,0,0.4);
    overflow-x:auto;
}

.record-table{
    width:100%;
    border-collapse:collapse;
}

.record-table th{
    background:#003366;
    color:white;
    padding:12px;
    font-size:17px;
}

.record-table td{
    padding:10px;
    text-align:center;
    border:1px solid #ddd;
    font-size:16px;
}

.record-table tr:nth-child(even){
    background:#f2f2f2;
}

.record-table tr:hover{
    background:#d9edf7;
}

.title{
    font-size:50px;
    text-align:center;
    background:black;
    color:white;
    padding:20px;
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

<!-- Records -->
<div class="record-box">
<h2 style="text-align:center; color:#1e3c72;">Student Records</h2>

<table class="record-table">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Contact</th>
<th>College Name</th>
<th>Qualification</th>
<th>Course</th>
<th>Fees</th>
<th>Paid</th>
<th>Remaining</th>
</tr>

<?php
include("connect.php");

$qry = "SELECT * FROM reg";
$run = mysqli_query($con, $qry);

while($row = mysqli_fetch_array($run))
{
?>
<tr>
<td><?php echo $row['txtn']; ?></td>
<td><?php echo $row['txtsn']; ?></td>
<td><?php echo $row['txte']; ?></td>
<td><?php echo $row['txtc']; ?></td>
<td><?php echo $row['txtcn']; ?></td>
<td><?php echo $row['txtq']; ?></td>
<td><?php echo $row['txtco']; ?></td>
<td><?php echo $row['txtf']; ?></td>
<td><?php echo $row['txtp']; ?></td>
<td><?php echo $row['txtr']; ?></td>
</tr>
<?php
}
?>

</table>
</div>

</body>
</html>
```
