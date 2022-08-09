<?php include "../control/process.php"; ?>

<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="../css/mystyle.css"> -->
</head>
<body>


<!-- <div class="header">
  <center>
  <h1>ABC Management System</h1>
  <h2>We Create Future</h2>
  </center>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a> -->

</div>
</div>
<div class="registrationBox">
<h1 align="left">Registration form </h1>
<hr size = "2"></hr>
</div>
<div class="frame">

</div>

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" onsubmit ="return foemcheck()">

<table>
        <tr><td>
        First Name:
        </td><td>
        <input type="text" name="fname" id = "fname" onkeyup = "Fname()">
        <td>
          <label id="Fname"></label>
        </td>
        </td></tr>
        <tr><td>
        Last Name:
        </td><td>
        <input type="text" name="lname" id = "lname" onkeyup = "Lname()">
        <td>
          <label id="Lname"></label>
        </td>
      </td></tr>
        <tr><td>
        Age:
        </td><td>
        <input type="text" name="age" id="age" onkeyup="Age()">
        <label id="Age"></label>
        </td></tr>
        <tr><td>
        Designation:
        </td><td>
        <input type="radio" name="des" value = "Junior Programmer">Junior Programmer
        <input type="radio" name="des" value = "Senior Programmer">Senior Programmer
        <input type="radio" name="des" value = "Project Leader">Project Lead
        </td></tr>
        <tr><td>
        Preferred language:
        </td><td>
        <input type="checkbox" name="check" value="Java">JAVA
        <input type="checkbox" name="check" value="PHP">PHP
        <input type="checkbox" name="check" value="CPP">C++
        </td></tr>
        <tr><td>
        E-mail:
        </td><td>
        <input type="email" name="email" id ="email" onkeyup="Email()">
        <label id="EMAIL"></label>
        </td></tr>
        <tr><td>
        Enter a Password:
        </td><td>
        <input type="password" name="password" id ="pass" onkeyup="Password()">
        <label id="Pass"></label>
        </td></tr>
        <tr><td>
        Please choose a file
        </td><td>
        <input type="file" name="file">
        </td></tr>

    </table>
    <input type="submit" class="button submit" name="submit">
        <input type="reset" class="button reset" name="reset">
</form>

</div>
<script src="../js/myscript.js"></script>
<label id="write"></label>


</body>
</html>