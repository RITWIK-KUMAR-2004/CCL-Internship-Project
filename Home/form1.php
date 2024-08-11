<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="form1.css">
</head>

<body>
    <Header>
        <nav>
            <div class="left"><img src="CCL_LOGO2_final.jpg" alt=""></div>
            <div class="left"><img src="ccl-ke-lal-ccl-ki-laadli.jpg" alt=""></div>
            <div class="right">
                <P>Registration Form</P>
            </div>
        </nav>
    </Header>

    <main>
        <hr>
        <div class="container">
            <form action="#" method ="POST">
            <div class="title"> 
                <!--form title-->
            </div>
            <div class="form">
    
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname">
                </div>
                
                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname">
                </div>
    
                <div class="input_field">
                    <label>Date Of Birth </label>
                    <input type="date" class="input" name="dob">
                </div>
    
                <div class="input_field">
                    <label>Gender</label>
                    <select class="selectbox" name="gender">
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
    
                <div class="input_field">
                    <label>Student's WhatApp No.</label>
                    <input type="number" class="input" name="sno">
                </div>
    
                <div class="input_field">
                    <label>Student's Email</label>
                    <input type="email" class="input" name="sgmail">
                </div>
                
                <div class="input_field">
                    <label>Father's Name </label>
                    <input type="text" class="input" name="faname">
                </div>
    
                <div class="input_field">
                    <label>Father's Contact No. </label>
                    <input type="number" class="input" name="fno">
                </div>
                
                <div class="input_field">
                    <label>Mother's Name</label>
                    <input type="text" class="input" name="mname">
                </div>
    
                <div class="input_field">
                    <label>Mother's Contact No.</label>
                    <input type="number" class="input" name="mno">
                </div>
    
                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address"></textarea>
                </div>
    
                <div class="input_field">
                    <label>Category</label>
                    <select class="selectbox" name="category">
                        <option>Select</option>
                        <option>GE</option>
                        <option>OBC</option>
                        <option>SC</option>
                        <option>ST</option>
                    </select>
                </div>
    
                <div class="input_field">
                    <label>Name Of The Board</label>
                    <select class="selectbox" name="boardname">
                        <option>Select</option>
                        <option>CBSE</option>
                        <option>ICSE</option>
                        <option>JAC</option>
                        <option>Other</option>
                    </select>
                </div>
    
                <div class="input_field">
                    <label>10th Roll No.</label>
                    <input type="number" class="input" name="roll">
                </div>
                
                <div class="input_field">
                    <label>10th Percentage</label>
                    <input type="text" class="input" name="per">
                </div>
    
                <div class="input_field">
                    <label>Whether son/daughter of CCL Employee</label>
                    <select class="selectbox" name="ccl">
                        <option>Select</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
    
                <div class="input_field">
                    <input type="submit" value="SUBMIT" class="btn" name="registration">
                </div>
            </div>
            </form>
        </div>
        <br>
        <hr>
    </main>
</body>

</html>
<?php include("Connection1.php"); ?>

 <?php
    if($_POST['registration'])
    {
       $fname   =   $_POST['fname'];
       $lname   =   $_POST['lname'];
       $dob     =   $_POST['dob'];
       $gender  =   $_POST['gender'];
       $sno     =   $_POST['sno'];
       $sgmail  =   $_POST['sgmail'];
       $faname   =   $_POST['faname'];
       $fno     =   $_POST['fno'];
       $mname   =   $_POST['mname'];
       $mno     =   $_POST['mno'];
       $address =   $_POST['address'];
       $category   =   $_POST['category'];
       $boardname   =   $_POST['boardname'];
       $roll     =   $_POST['roll'];
       $per     =   $_POST['per'];
       $ccl     =   $_POST['ccl'];

       $query = "INSERT INTO form1 values('$fname','$lname','$dob','$gender','$sno','$sgmail','$faname','$fno','$mname','$mno','$address','$category','$boardname','$roll','$per','$ccl')";
       $data = mysqli_query($conn,$query);

       if ($data) {
        echo "Data Inserted into Database";
       }
       else{
        echo "Failed";
       }
    }
?>