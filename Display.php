<?php
$servername = "localhost";
$username = "root";
$password = "yaja@491491491";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$Firstname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$Lastname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$City = mysqli_real_escape_string($conn, $_REQUEST['cityname']);
$State = mysqli_real_escape_string($conn, $_REQUEST['state']);
$Phone =mysqli_real_escape_string($conn, $_REQUEST['phone']);
$Email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$Dob = mysqli_real_escape_string($conn, $_REQUEST['dateofbirth']);
$Gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$Address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$skill_1 = mysqli_real_escape_string($conn, $_REQUEST['skill_1']);
$skill_2 = mysqli_real_escape_string($conn, $_REQUEST['skill_2']);
$skill_3 = mysqli_real_escape_string($conn, $_REQUEST['skill_3']);
$skill_4 = mysqli_real_escape_string($conn, $_REQUEST['skill_4']);
$skill_5 = mysqli_real_escape_string($conn, $_REQUEST['skill_5']);
$Tenth =mysqli_real_escape_string($conn, $_REQUEST['tenth']);
$School = mysqli_real_escape_string($conn, $_REQUEST['school']);
$Board = mysqli_real_escape_string($conn, $_REQUEST['board']);
$Year = mysqli_real_escape_string($conn, $_REQUEST['year']);
$Twelfth = mysqli_real_escape_string($conn, $_REQUEST['twelfth']);
$school = mysqli_real_escape_string($conn, $_REQUEST['school-twelfth']);
$board = mysqli_real_escape_string($conn, $_REQUEST['board-twelfth']);
$year = mysqli_real_escape_string($conn, $_REQUEST['year-twelfth']);
$graduation = mysqli_real_escape_string($conn, $_REQUEST['Graduation']);
$College = mysqli_real_escape_string($conn, $_REQUEST['college']);
$Yeargrad = mysqli_real_escape_string($conn, $_REQUEST['year-grad']);
$Workyear = mysqli_real_escape_string($conn, $_REQUEST['work-year']);
$jobtitle = mysqli_real_escape_string($conn, $_REQUEST['job-title']);
$company = mysqli_real_escape_string($conn, $_REQUEST['company']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);

//insert data of user to database

$result = mysqli_query($conn, "INSERT INTO users(First_name, Last_name, Phone_number, City_name, State_name , Email_id, Dateofbirth, Gender, Address) VALUES('$Firstname', '$Lastname', '$Phone', '$City', '$State', '$Email', '$Dob', '$Gender', '$Address')");

$result_1 = mysqli_query($conn, "INSERT INTO skills(First, Second, Third, Fourth, Fifth) VALUES('$skill_1', '$skill_2', '$skill_3', '$skill_4', '$skill_5')");


$result_2 = mysqli_query($conn, "INSERT INTO graduation(College, SGPA, Year) VALUES('$College', '$graduation', '$Yeargrad')");


$result_3 = mysqli_query($conn, "INSERT INTO education10(School, Board, Percentage, Year) VALUES('$School', '$Board', '$Tenth', '$Year')");


$result_4 = mysqli_query($conn, "INSERT INTO education12(School, Board, Percentage, Year) VALUES('$school', '$board', '$Twelfth', '$year')");

$result_5 = mysqli_query($conn, "INSERT INTO workexperience(Year, Job, Company) VALUES('$Workyear', '$jobtitle', '$company')");


mysqli_close($conn); // Closing Connection with Server

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RESUME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .topsection {
   float: right;
   padding: 0px;
   line-height: 15px;
}
.per-info{
    padding-top: 150px;
}
body{
    margin: 0;
    background-image: url("images/bg.png");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 10px;
  font-size: 18px;
}
.content{
    box-sizing: content-box;
     background:#101820FF;
  border: 4px solid black;
  padding: 10px;
    max-width: 1000px;
  margin: auto;
  color: #a7f7e6;
  font-size: 20px;
}
h2{
    color: #f8f9fa;
    text-align: center;
    text-decoration: underline;
}
.topsection{
    line-height: 150%;
}
li{
    list-style-type: circle;
}
hr{
    width: 100%;
}
</style>
</head>
<body>
    <div class="content">
        <header>
            <div class="topsection">
                <h1><strong><?php echo $Firstname . " ". $Lastname;?></strong></h1>
                <p><strong>Curriculum Vitae</strong></p>
                <i>Phone number: <?php echo $Phone;?></i><br>
                <i>E-mail: <?php echo $Email;?></i>
            </div>
        </header>
        <section>
            <div class="per-info" ><hr>
                <h2><strong>Personal Information</strong></h2>
                <p>Full name :  <?php echo $Firstname . " ". $Lastname;?></p>
                <p>Date of Birth :   <?php echo $Dob;?></p>
                <p>Gender :    <?php echo $Gender;?></p>
                <p>Address :    <?php echo $Address;?></p>
                <p>City :    <?php echo $City;?></p>
                <p>State :    <?php echo $State;?></p>
            </div>
        </section>

        <section>
            <div class="Edu-info">
                <h2>Academics</h2>
                <h3><strong style="text-decoration: underline;">Higher Education:</strong></h3>
                <i class="fa-2x fa fa-book" style="color: #000000"></i><p><?php echo $Year;?></p>
                <p>I have completed my class 10th from <?php echo $School;?>(<?php echo $Board;?>) with an overall <?php echo $Tenth;?>%</p>

                <h3><strong style="text-decoration: underline;">Secondary Education:</strong></h3>
                <i class="fa-2x fa fa-university" style="color: #000000"></i><p><?php echo $year;?></p>
                <p>I have completed my class 12th from <?php echo $school;?>(<?php echo $board;?>) with an overall <?php echo $Twelfth;?>%</p>

                <h3><strong style="text-decoration: underline;">Graduation:</strong></h3>
                <i class="fa-2x fa fa-graduation-cap" style="color: #000000"></i><p><?php echo $Yeargrad;?></p>
                <p>College: <?php echo $College;?></p>
                <p>Percentage: <?php echo $graduation;?></p>

            </div>
        </section> 

        <section>
            <div class="Skill-info">
                <h2>Skills</h2>
                <ul>
                    <li>1 <?php echo $skill_1;?></li>
                    <li>2 <?php echo $skill_2;?></li>
                    <li>3 <?php echo $skill_3;?></li>
                    <li>4 <?php echo $skill_4;?></li>
                    <li>5 <?php echo $skill_5;?></li>
                </ul>
                
            </div>
        </section>

        <section>
            <div class="workexp-info">
                <h2>Work-Experience </h2>
                <p>Year : <?php echo $Workyear;?></p>
                <p>Job-title :  <?php echo $jobtitle;?></p>
                <p>Company :  <?php echo $company;?></p>
                <p>Description :  <?php echo $description;?></p>
                
            </div>
        </section>
    </div>
</body>
</html>