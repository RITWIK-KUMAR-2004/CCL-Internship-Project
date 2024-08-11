<?php
session_start();
$userid=$_SESSION['userid'];
if($_SESSION['flag']=='')
{
    header('Location:form2.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <Header>
        <nav>
            <div class="left"><img src="CCL_LOGO2_final.jpg" alt=""></div>
            <div class="left"><img src="ccl-ke-lal-ccl-ki-laadli.jpg" alt=""></div>
            <div class="right">
                <ul>
                     <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </Header>
    <main>
        <section class="firstSection">
            <div class="leftSection">
                Students Profile <span class="purple">Welcome Students!!!</span>
                <div></div>
                <span id="element"></span>
            </div>
            <div class="rightSection">
                
            </div>
        </section>

        <SECTION CLASS="secondsection">
            <div class="container">
            <div class="quiz-card">
                <h2>Quiz 1</h2>
                <p>Test your knowledge with Quiz 1.</p>
                <button class="quiz-btn" onclick="location.href='Quiz1.php'">Start Quiz 1</button>
            </div>
            <div class="quiz-card">
                <h2>Quiz 2</h2>
                <p>Challenge yourself with Quiz 2.</p>
                <button class="quiz-btn" onclick="location.href='Quiz2.php'">Start Quiz 2</button>
            </div>
            
        </div>
        <hr>
    </body>
    </html>