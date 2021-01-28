<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Resume Builder</title>  
	<style type="text/css">
		
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
		.container {
    box-sizing: content-box;
	border: 4px solid black;
    padding: 10px;
    max-width: 1200px;
  margin: auto;
  border-radius: 5px;
  font-size: 20px;
  background-color: #6dc56d;
  padding: 10px;
}

.col-1{
  float: left;
  width: 25%;
  margin-top: 6px;
  color: black;
  font-size: 20px;
}

.col-2{
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
li{
	list-style-type: none;
}
h1{
	text-align: center;
	color: #000000;
	font-family: serif;
}
h3{
	font-size: 30px;
	color: #000000;
}

input[type=text],input[type=email],input[type=tel],input[type=number],input[type=year], select{
  width: 60%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=submit] {
  background-color: #000000;
  color: white;
  font-size: 20px;
  padding: 15px 20px;
  border: solid;
  border-radius: 6px;
  cursor: pointer;
  text-align: center;

}
input[type=submit]:hover {
  background-color: #176717ed;
}
body{
	font-family: cursive;
	background-image: url("images/forest.jpeg");
	background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
	</style>                                                                                       
</head>
<body>
	<div class="container">
		<h1><u>CREATE YOUR RESUME</u></h1>
		<form action= "Display.php" method="post">
			<h1><u>ABOUT</u></h1>
			<div class="row">
				<div class="col-1">
					<label for="firstname">First Name</label>
		        </div>
		        <div class="col-2">
		        	<input type="text" name="firstname" id="firstname" placeholder="Enter your name..." required pattern="[A-Za-z]{3,}">
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="lastname">Last Name</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="lastname" id="lastname" placeholder="Enter your last name..." required pattern="[A-Za-z]{3,}">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="cityname">City</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="cityname" id="cityname" required pattern="[A-Za-z]{1,}">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="state">State</label>
		    	</div>
		    	<div class="col-2">
		    		<select id="state" name="state" required>
		    			<option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="phone">Phone Number</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="tel" name="phone" id="phone" required pattern="[0-9]{10}">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="email">Email id</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="email" name="email" id="email" placeholder="abc@yahoo.com" required>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="dateofbirth">Date of Birth</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="date" name="dateofbirth" id="dateofbirth" required placeholder="dd-mm-yyyy" min="1997-01-01" max="2030-12-31">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="gender">Gender</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="radio" name="gender" id="Male" value="Male" required>
		    		<label for="Male">Male</label><br>
		    		<input type="radio" name="gender" id="Female" value="Female">
		    		<label for="Female">Female</label><br>
		    		<input type="radio" name="gender" id="Other" value="Other">
		    		<label for="Other">Other</label><br>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="address">Address</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="textarea" name="address" id="address" required>
		    	</div>
		    </div>


		    <h1><u>Skills</u></h1>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="skill_1">First</label>
		    	</div>
		    	<div class="col-2">
		    		<li><input type="text" name="skill_1" id="skill_1"></li>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="skill_2">Second</label>
		    	</div>
		    	<div class="col-2">
		    		<li><input type="text" name="skill_2" id="skill_2"></li>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="skill_3">Third</label>
		    	</div>
		    	<div class="col-2">
		    		<li><input type="text" name="skill_3" id="skill_3"></li>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="skill_4">Fourth</label>
		    	</div>
		    	<div class="col-2">
		    		<li><input type="text" name="skill_4" id="skill_4"></li>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="skill_5">Fifth</label>
		    	</div>
		    	<div class="col-2">
		    		<li><input type="text" name="skill_5" id="skill_5"></li>
		    	</div>
		    </div>

		    <h1><u>Academics</u></h1>
		    <h3>Higher Education:-</h3>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="tenth">Percentage</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="number" name="tenth" id="tenth" min="00" max="100">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="school">School</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="school" id="school">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="board">Board</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="board" id="board">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="year">Year</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="year" name="year" id="year" pattern="[0-9]{4}">
		    	</div>
		    </div>

		    <h3>Secondary Education:-</h3>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="twelfth">Percentage</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="number" name="twelfth" id="twelfth" min="00" max="100">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="school-twelfth">School</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="school-twelfth" id="school-twelfth">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="board-twelfth">Board</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="board-twelfth" id="board-twelfth">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="year-twelfth">Year</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="year" name="year-twelfth" id="year-twelfth" pattern="[0-9]{4}">
		    	</div>
		    </div>

		    <h3>Graduation:-</h3>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="Graduation">Percentage</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="number" name="Graduation" id="Graduation" min="00" max="100">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="college">College</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="college" id="college">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="year-grad">Year</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="year" name="year-grad" id="year-grad" pattern="[0-9]{4}">
		    	</div>
		    </div>

		    <h1><u>Work-experience</u></h1>
            <div class="row">
		    	<div class="col-1">
		    		<label for="work-year">Year</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="year" name="work-year" id="work-year" pattern="[0-9]{4}">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="job-title">Job-title</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="job-title" id="job-title" placeholder="Enter your job-title...">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="company">Company</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="text" name="company" id="company" placeholder="Enter your company name...">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-1">
		    		<label for="description">Description</label>
		    	</div>
		    	<div class="col-2">
		    		<input type="textarea" name="description" id="description" placeholder="Describe your job">
		    	</div>
		    </div>

		    <div class="row">
		    	<input type="submit" value="Submit" name="submit" class="btn">
            </div>
		</form>
	</div>
</body>
</html>