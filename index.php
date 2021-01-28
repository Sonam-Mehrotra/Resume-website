<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Resume Builder</title>
	<link rel="stylesheet" type="text/css" href="abc.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style type="text/css">
 	.dropbtn {
  background-color: #815d5f;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content{
  display: none;
  position: absolute;
  background-color: #ffffff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {
	background-color: #ddd;
}

.dropdown:hover .dropdown-content {
	display: block;
}

.dropdown:hover .dropbtn {
	background-color: #815d5f;
}
.lines-drp{
  width: 25px;
  height: 2px;
  background-color: white;
  margin: 6px 0;
}
.bg-img{
	background-image: url("images/img-2.jpg");
	min-height: 850px;
	background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
}
.text-on-img{
	font-size: 50px;
	position: center;
	text-align: center;
	padding-left: 80px;
	padding-right: 50px;
	padding-top: 90px;
	display: block;
	font-weight: lighter;
	color: #ffffff;
}
.bg-image{
	background-image: url("images/img-1.jpg");
	min-height: 350px;
	background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  text-align: right;
  margin: auto;
  padding-top: 400px;
}
.btn{
	background-color: #ced1d4;
	position: relative;
	border: ridge;
	color: #000000;
	text-align: center;
	font-size: 35px;
	transition: 0.3s;
	border: 3px solid #b52a2a;
	border-color: #000000;
	border-radius: 50px;
	margin-left: 300px;
	margin-top: 150px;
	margin-bottom: 100px;
	margin-right: 250px;
}

.btn:hover{
	background-color:#b52a2a;
}
footer{
	background-color: #000000;
	color: #ffffff;
	min-height: 300px;
	height: 100px;
	margin: 0;
	margin-top: 2px;
}
.section{
	 background-color: lightgrey;
  border: 3px solid black;
  padding: 10px;
  margin: 2px;
  box-sizing: content-box;
  font-size: 18px;
}
h1{
	font-size: 50px;
}
section{
	padding: 0px;
	margin: 0px;
	grid-row-gap: 0px;
}
body{
	font-family: cursive;
	margin: 2px;
}
 </style>
</head>
<body>
	<div class="bg-img">
		<div class="dropdown">
			<button class="dropbtn">
				<div class="lines-drp"></div>
				<div class="lines-drp"></div>
				<div class="lines-drp"></div>
			</button>
			<div class="dropdown-content">
			    <a href="#About">About</a>
                <a href="#Create your resume">Create your resume</a>
                <a href="#Contact Us">Contact Us</a>
            </div>
        </div>
        <div class="text-on-img">
        	<p><strong>Start building your resume online-<br>Quick & Easy</strong></p>
        </div>
    </div>
<section>
	<div class="section">
		<h1><a name="About">About</a></h1>
		<p>
			Your personal resume website is a digital version of the traditional paper resume. It shows your education, skills, and previous positions or projects you’ve worked on. But, it also shows things you cannot accurately share using a paper resume.Here are just a few benefits of using an online resume service:
		</p>
		<ol>
			<li><strong> You can have multiple versions</strong></li>
			<p>Undoubtedly, some of your skills and prior experiences are more relevant to some jobs/companies than others. With an online CV, you’re not confined to one overly broad resume. An online resume service gives you the option of having multiple resumes at your disposal. This way you can use the version that highlights the skills that make you a good candidate for a certain position, without any of the irrelevant distractions.</p>

			<li><strong> Flexible</strong></li>
		    <p>See a mistake on your resume? Forget to add a prior employer? In the dark ages of the paper CV, this would have meant going back to the computer and wasting more of your precious “eggshell” or “toasted-ivory” resume paper. With an online CV it’s simply a matter of a couple clicks, and you can even do it from your phone.</p>

			<li><strong> Easily shared</strong></li>
		    <p>With an online resume you don’t have to deal with postage, or awkwardly approaching a manager or supervisor to hand them your credentials. And it allows you to link to your resume from all of your social media profiles, making employers more likely to see it when they Google your name.</p>

			<li><strong> You can link out to other social profiles and portfolios</strong></li>
		    <p>You can also use your online resume to direct potential employers toward anything else you might like them to see. For instance, if you’re a writer or graphic designer, you can link straight from your CV to your blog or design portfolio, giving employers a curated tour of your very best work.</p>
        </ol>
	</div>
</section>
<section>
	<h1><a name="Create your resume"></a></h1>
	<div class="bg-image">
		<button class="btn" onclick="window.open('http://localhost/index1.php')">Create your resume</button>
	</div>

</section>

<footer>
	<div class="link">
		<h1><a name="Contact Us">Contact Us</a></h1>
			<a href="mailto:msonam491@gmail.com">
				<i class="fa-2x fa fa-envelope"></i>
		    </a>

		
		    <a href="https://www.instagram.com/sonam_491">
			    <i class="fa-2x fa fa-instagram"></i>
		    </a>	

		    <a href="https://www.linkedin.com/in/sonam-mehrotra-578260194/">
			    <i class="fa-2x fa fa-linkedin"></i>
		    </a>
	</div>
	<div class="footer">
    	<p>Website designed by Sonam Mehrotra.<br>
    		Copyright &copy 2020
    	</p>
    	
    </div>	
</footer>

   
</body>
</html>
