```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Management System</title>

<style>
*{
    box-sizing: border-box;
}

body{
    margin:0;
    padding:0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    color: white;
}

/* Header */
.header{
    width:85%;
    margin:20px auto;
    border-collapse: collapse;
}

.header td{
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    padding: 10px;
}

.logo{
    width:150px;
    height:auto;
}

.title{
    font-size: 48px;
    text-align: center;
    font-weight: bold;
    text-shadow: 3px 3px 5px black;
}

/* Banner */
.banner{
    width:85%;
    margin:20px auto;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,0.4);
}

.banner img{
    width:100%;
    height:auto;
    display:block;
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
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(8px);
    padding:15px;
    transition:0.3s;
}

#menu td:hover{
    background:#ff4d4d;
}

a{
    color:white;
    text-decoration:none;
    font-size:18px;
    font-weight:bold;
}

/* Cards */
.section{
    width:85%;
    margin:25px auto;
    padding:25px;
    background: rgba(255,255,255,0.12);
    backdrop-filter: blur(12px);
    border-radius:15px;
    box-shadow:0 8px 20px rgba(0,0,0,0.4);
}

.section h2{
    color:#00ffff;
}

/* Faculty */
#book{
    width:100%;
}

#book td{
    text-align:center;
    padding:10px;
}

.faculty-img{
    width:100%;
    max-width:180px;
    height:auto;
    border-radius:15px;
    transition:0.4s;
    box-shadow:0 6px 15px rgba(0,0,0,0.4);
}

.faculty-img:hover{
    transform: scale(1.05);
}

/* Footer */
.footer{
    width:85%;
    margin:20px auto;
    text-align:center;
    padding:20px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius:10px;
    font-size:20px;
}

/* Mobile Responsive */
@media screen and (max-width: 768px){

    .header{
        width:95%;
    }

    .title{
        font-size:28px;
        padding:10px;
    }

    .logo{
        width:80px;
    }

    .banner{
        width:95%;
    }

    #menu{
        width:95%;
    }

    #menu tr{
        display:block;
    }

    #menu td{
        display:block;
        width:100%;
        margin-bottom:5px;
    }

    .section{
        width:95%;
        padding:15px;
    }

    #book tr{
        display:block;
    }

    #book td{
        display:block;
        width:100%;
        margin-bottom:15px;
    }

    .footer{
        width:95%;
        font-size:16px;
    }
}
</style>
</head>

<body>

<table class="header">
<tr>
<td width="15%">
<img src="image/logo3.jpg" class="logo">
</td>
<td class="title">
Student Management System
</td>
</tr>
</table>

<div class="banner">
<img src="image/banner2.jpg">
</div>

<table id="menu">
<tr>
<td><a href="index.php">HOME</a></td>
<td><a href="reg.php">REGISTRATION</a></td>
<td><a href="view.php">STUDENT RECORD</a></td>
<td><a href="viewdel.php">EDIT</a></td>
</tr>
</table>

<div class="section">
<h2>About Student Management System</h2>
<p style="font-size:18px; line-height:30px;">
This project helps in managing student records such as registration,
viewing records, editing data, and faculty information.
It makes student data management easy and efficient.
</p>
</div>

<div class="section">
<h2>Our Features</h2>
<ul style="font-size:18px; line-height:35px;">
<li>Student Registration</li>
<li>View Student Records</li>
<li>Edit Student Details</li>
<li>Delete Student Information</li>
<li>Faculty Information</li>
</ul>
</div>

<div class="section">
<h2>Latest Notice</h2>
<p style="font-size:18px;">
Admissions are open for 2026 session.
New student registrations started.
</p>
</div>

<div class="section">
<h2>Expert Faculties</h2>
<table id="book">
<tr>
<td><img src="image/n1.jpg" class="faculty-img"></td>
<td><img src="image/n2.jpg" class="faculty-img"></td>
<td><img src="image/n3.jpg" class="faculty-img"></td>
<td><img src="image/n6.jpg" class="faculty-img"></td>
<td><img src="image/n5.jpg" class="faculty-img"></td>
</tr>
</table>
</div>

<div class="section">
<h2>Contact Us</h2>
<p style="font-size:18px; line-height:30px;">
Email: support@sms.com <br>
Phone: +91 9876543210 <br>
Address: Kanpur, Uttar Pradesh
</p>
</div>

<div class="footer">
Made by Abhishek Yadav
</div>

</body>
</html>
```
