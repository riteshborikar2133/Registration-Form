<?php
$servername="localhost";
$username="root";
$password="";
$database="ieee";
$con=mysqli_connect($servername,$username,$password,$database);
if(isset($con)){
    echo "<script>console.log('Successfull')</script>";
}
else{
    die("Unable to connect");
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "<script>console.log('done')</script>";
    $name=$_POST['name'];
    $USN=$_POST['USN'];
    $Branch=$_POST['Branch'];
    $sql= "INSERT INTO `info` (`Name:`, `USN no:`, `Branch:`) VALUES ('$name', '$USN', '$Branch');";
    $result=mysqli_query($con,$sql);
    if(!$result){
        echo "Form not Registered";
    }
    else{
        echo "FOrm Registered Successfully";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        *{
            margin: 0px;
        }
        .head {
            border: 1px solid red;
            display: flex;
            justify-content: space-around;
        }

        .logo,
        .navtext {
            border: 1px solid green;
        }

        .main {
            background-image: url('https://img.freepik.com/free-vector/laptop-with-program-code-isometric-icon-software-development-programming-applications-dark-neon_39422-971.jpg');    
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            margin: 0;
            padding: 100px 200px;
        }
        .frm{
            /* border: 1px solid red; */
            border-radius: 30px;
            padding: 10px;
            height: 400px;
            text-align: center;
            color: white;
            font-size: 30px;
            background-color: rgb(240, 255, 255,0.2);
            text-shadow: 4px 4px 8px violet;
        }
        form{
            font-size: 20px;
            line-height: 15px;
        }
        input[type=text]{
            text-align: center;
            margin: 10px 0px;
            outline: none;
            background:transparent;
            width: 150px;
            border-bottom: 3px white solid;
            border-top: none;
            border-left: none;
            border-right: none;
        }
    </style>
</head>

<body>
    <div class="head">
        <div class="logo"></div>
        <div class="navtext">
            <h3>Join Brain Coder Now!!</h3> 
        </div>
    </div>
    <div class="main">
        <div class="frm">
            <h2>Registration Form</h2> <br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <label for="name">Enter Name:</label>  <br>
                <input type="text" name="name" id=""> <br><br>
                <label for="USN">Enter USN Number</label>  <br>
                <input type="text" name="USN" id=""> <br> <br>
                <label for="Branch">Enter Branch:</label>  <br>
                <input type="text" name="Branch" id="">
                <br> <br>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">

            </form>
        </div>
    </div>
</body>

</html>