<!DOCTYPE html>
<html lang="en">
<head>
  <style>



.input{
    width: 100%;
    box-sizing: border-box;
    margin: 6px 0px;
    padding: 5px;
}
input{
    width: 100%;
    box-sizing: border-box;
    margin: 6px 0px;
    padding: 5px;
}
.form{
    width: 100%;
    box-sizing: border-box;
    margin: 6px 0px;
    padding: 5px;
    
}
form{
    width: 25%;
    background: #f3f3f3;
    padding: 40px 30px;
    position: relative;
    top: 70%;
    left: 50%;
    transform: translate(-50%,3%);
    border-radius: 10px;
    
}
input[type=submit]{
background:blue;
border-color: blue;
font-size: 18px;
color: white;
font-weight: bold;
width: 100%;
}
      </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <form method="POST" action="include2.php">

    <h1> Add new student</h1>  

    <label>id</label><br><br>
    <input type="text" name="id"> <br>

    <label>student_name</label><br><br>
    <input type="text" name="student_name"><br>

    <label>age</label><br><br>
    <input type="text" name="age"><br>

    <label>sex</label><br><br>

   <select name="sex" class="input">
        <option >Male</option>
        <option >Female</option>
  </select>

   <input type="submit" value="Insert student"><br><br>
    </form>
</body>
</html>