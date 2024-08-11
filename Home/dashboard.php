<?php
session_start();
$userid=$_SESSION['userid'];
if($_SESSION['flag']=='')
{
    header('Location:form2.php');
}
?>

<?php 

$score=$_GET['id'];

//echo $score;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="conductquiz1.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Dashboard</h1>
        <div id="score-container">
            <h2>Your Score</h2><?php echo $score?>
            <p id="score"></p>
        </div>
    </div>
    <?php
        include 'connection1.php';

        $query = "INSERT INTO result(student_email,test) values('$userid','$score')";
        $data = mysqli_query($conn,$query);
 
        if ($data) {
         //echo "Data Inserted into Database";
        }
        else{
         echo "Failed";
        }

?>
</body>
</html>
