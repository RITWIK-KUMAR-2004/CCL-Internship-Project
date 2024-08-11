<?php  
    error_reporting(E_ERROR | E_PARSE);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registrationform";

    $conn = mysqli_connect($servername,$username,$password,$dbname);


	
	if($_POST['submit_status']==1)
	{
    $username = $_POST['sgmail'];  
    $password = $_POST['dob'];  
      
        
      
        $sql = "select *from form1 where student_email = '$username' and dob = '$password'";  
        //echo $sql;
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            session_start();
            $_SESSION['flag']=1; 
            $_SESSION['userid']=$username; 
           header('Location: register.php');
        }  
        else{  
            $status_msg= '<span style="color:red"> Login failed. Invalid username or password.</span>';  
        }  
	}
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="form2.css">
</head>

<body>
    <Header>
        <nav>
            <div class="left"><img src="CCL_LOGO2_final.jpg" alt=""></div>
            <div class="right">
                <P>Login Form</P>
            </div>
        </nav>
    </Header>

    <main>
        <hr>
        <div class="container">
            <div class="title"> 
                <!--form title-->
            </div>
			<?php
			   if ($status_msg!='') {
				   echo $status_msg;
			   }
			?>
			<form action="form2.php" method="post">
            <div class="form">
    
                <div class="input_field">
                    <label>User Id<br>(Student's Email Id)</label>
                    <input type="text" id="emailid" name="sgmail" class="input" required>
                </div>
    
                <div class="input_field">
                    <label>Password<br>(Student's DOB)</label>
                    <input type="date" id="dob" name="dob" class="input" required>
                </div>
    
                <div class="input_field">

                    <!--<a class="btn btn-default btn-block" href="register.php">Login</a>-->
					<input type="hidden" id="submit_status" name="submit_status" value="1">
					  <button type="submit" class="btn btn-default btn-block">Login</button>
                </div>
            </div>
            </form>
        </div>
        <hr>
    </main>
</body>


</html>