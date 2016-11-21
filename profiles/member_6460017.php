<!DOCTYPE html>
<?php $cookie_name = 'views';
$cookie_value = '1';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day ?>
<html>
<style>
body{

}

h1{
	text-align:center;
	color:white;
<!-- I have got text shadow for my h1-->
	text-shadow: 2px 2px 4px #000000;
}


footer{
	background-color: ;
	margin:0;
	padding:none;
	padding: 1em;
	color: white;
	background-color: #333;
	clear: left;
	text-align: center;
}
.header{
	background-color: ;
	margin:0;
	padding:none;
	padding: 1em;
	color: white;
	background-color: #333;
	clear: left;
	text-align: center;
}


#home{
	background-image: url("https://yanphoto.com/wp-content/uploads/2016/08/TS-Night-Photography.jpg");
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
}

#aboutme{
	background-image: url("http://dreamlovewallpapers.com/wp-content/uploads/2015/12/Girl-Alone-In-Forest-With-Teddy-Bear-Photo-Wallpaper.jpg");
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
}

#contactme{
	background-image: url("http://s3.favim.com/orig/42/accessories-adorable-camera-cute-fashion-Favim.com-361489.jpg");
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
}

ul {
    list-style-type: none;
    overflow: hidden;
    background-color: #333;
	
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.navbar{
	position:fixed;
	position:overflow;
	top:0;
	
}
h2{
	text-color:white;
	color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px grey, 0 0 5px black;
	}
	
	
	

.text{
	background-color:white;
	font-family:@import url('https://fonts.googleapis.com/css?family=Open+Sans');	
	font-size:25px;
	float:left;
    width: 600px;
	padding: 100px;
	background-color:white;
	opacity:0.8;
	filter: alpha(opacity=50);
	position: relative;
	<!--I have got rounded corner which is advanced css as well-->
	
	border-radius: 25px;
	<!-- I got this source from w3school but I have completely changed the size and the movement
	http://www.w3schools.com/cssreF/tryit.asp?filename=trycss3_animation-fill-mode-->
	
	<!--This Code is css advanced-->
	
    -webkit-animation: mymove 3s; 
    -webkit-animation-fill-mode: right; 
    animation: move 3s;
    animation-fill-mode: right;
	}


@-webkit-keyframes move {
    from {left: 1000px;}
    to {left: 100px;}
}

@keyframes move {
    from {left: 1000px;}
    to {left: 100px;}
}




.form{

    font-family: 'Open Sans Condensed', arial, sans;
    width: 500px;
    padding: 30px;
    background: transparent;
    position: absolute;
    top: 2400px;
    right: 16px;
    font-size: 18px;
	left:800px;
	}
	
.mypic{
	position: absolute;
    top: 1500px;
	right: 100px;

	
}

.field{
    border: 1px solid black;
	box-sizing: border-box;
    outline: none;
    display: block;
    width: 100%;
    padding: 7px;
    border-bottom: 1px solid #ddd;
    background:white;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
    height: 45px;
	}
	
.button{
	width:100%;
	height:45px;
    border-bottom: 1px solid #ddd;
    background:#bfbfbf;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
}
.button:hover {
	background-color: white;
	}

.button:active {
	background-color: #C0C0C0;
	box-shadow: 0 5px #666;
	transform: translateY(4px);
}

h2{
	text-color:white;
	color: white;
    text-shadow: 1px 1px 2px black, 0 0 25px grey, 0 0 5px darkblue;

	}
p{
		font-family:"Trebuchet MS", Helvetica, sans-serif;
	}
	
table,td,th{
	border:1px solid grey;
}



</style>

<title>Thushanthy Thillainathan's Page</title>


<body>

<section>
<div id ="home">
		<div class="header">

		<div class ="navbar">
			<ul>
				<li><a class="active" href="../index.php">Home</a></li>
				<li><a class="active" href="#aboutme">About Me</a></li>
				<li><a class="active" href="#contact">Contact Me</a></li>
			</ul>
		</div>
	<h2> Thushanthy Thillainathan</h2>
	</div>


	<br/>
	<br/>
	<h2>Welcome To My Page</h2>

 

	<div class ="text">
	<p>This page is about myself and my hobby. I have got about me page in order to let you know some information about me and also I have got contact me page to contact me as well.</p>
	<!-- this is foreach array-->
	<?php
	$myhobby=array("Taking Photos"=>"1st","Collecting stamps"=>"2nd","Playing games"=>"3rd");

	foreach($myhobby as $x=>$x_value)
	{
	echo "My"." ".$x_value." ". "hobby is" ." ". $x ;
	echo "<br>";
	}
	?>
	


	</div>
	<br/>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

	<footer>
	© Thushanthy Thillainathan 
	</footer>
	</div>
</section>

	<!--About me page-->

<div id ="aboutme" >
	<div class="header">

	<h2> About Me</h2>
	</div>


	<br/>
	<br/>
	<!-- this video i have made and the pictures are mine as well-->
	<div>
	<iframe width="1300" height="350" src="https://www.youtube.com/embed/AHz97O0_35A" ></iframe>
	</div>
	<div class="mypic">
		<img src="../images/member_6460017_mypic.jpg" width="400" height="500" alt="mypic">
	</div>
	<div class ="text">
	<p><span style= "text-color:black; font-size:25px;" > <b>Hello!!! I am Thushanthy Thillainathan. <br/>I am studying computing and information technology. I am from Sri Lanka and I have been living in here for four years. I was in Wembley high technology and studied my GSCE in there. After I continued my education in harrow college and did my further education in there.Finally I am here now.</b><br/></span></p>
	<p><span style= "text-color:black; font-size:25px;" ><b>I love Photography alot. I love taking pictures of intersting things, or new things and the landscape as well. Even the random pictures that you take make you to remember something. <i>I don't shoot what it looks like I shoot what it feels like</i> </b></span> </p>
	<p> <span style= "text-color:black; font-size:25px;" ><b>In this table I have got some of the qualifications I got.</b></span></p>
		
		<table>
			<tr>
			<th>Subject</th>
			<th>Grade</th>
			</tr>
			<tr>
			<td>English GCSE</td>
			<td> C</td>
			</tr>
			<tr>
			<td>Maths GCSE</td>
			<td> B</td>
			</tr>
			<tr>
			<td>Btec ICT Extened Level 3</td>
			<td> D*D*D*</td>
			</tr>
		</table>
		
	</div>
	<br/>

	<br/><br/><br/><br/><br/><br/><br/>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<footer>
	© Thushanthy Thillainathan 
	</footer>
</div>


<!--contact me page-->

<div id ="contact">
	<div class="header">
	<h2> Contact me</h2>
	</div>
	<div id="contactme">
		<div class ="text">

			<p> <span style= "text-color:black; font-size:25px;" ></span><b> Want To Know More About Me??? <br> Contact Me </b> </p>
				
					<?xml version="1.0" standalone="no" ?>
						<!DOCTYPE note SYSTEM "member_6460017.dtd">
						<note>
							<to>user</to>
							<from>Thushanthy</from>
							<heading>Reminder</heading>
							<message>Don't forget to subscribe me</message>
						</note>
					
					
					
					<br/><br/><br/>
		</div>
			<table>
                <tr>
                  <td><a href="https://www.facebook.com/" title="facebook page"></a><img src="../images/fb.png" width="66" height="69" alt="fb"></td>
                  <td><a href="https://http://instagram.com/" title="instragm page"></a><img src="../images/instagram.png" width="58" height="58" alt="instragrm"></td>
                  <td><a href="https://accounts.google.com/ServiceLogin?sacu=1&continue=https%3A%2F%2Fplus.google.com%2F%3Ffd%3D1%26gpsrc%3Dgplp0&service=oz" title="google+ page"></a><img src="../images/google.jpg" width="62" height="61" alt="google+"></td>
                  <td><a href="https://twitter.com/?lang=en-gb" title="twitter page"></a><img src="../images/Twitter.png" width="62" height="63" alt="t"></td>
                  <td><a href="https://www.tumblr.com/" title="tumblr page"></a><img src="../images/tumblr.png" width="65" height="64" alt="tumblr"></td>
                </tr>
							<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

			</table>
		</div>
			<br/>

		<div class="form">

		<h2>Contact Us</h2>
			<form class="contact-form">
				<input type="text" class="field" placeholder="  Your Name" />
				<input type="text" class="field" placeholder="Email Address" />
				<textarea class="field" placeholder="Type your Message"></textarea>
				<button onClick ="thankAlert()" class="button" value="Send">Submit </button>
			</form>
		</div>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</div>

<!--This is my javascript code and it has got function as well-->
		<script>
            $(function() {
                $("#mailtoform").submit(function(e) {
                    $("#contactForm").hide();
                    $("#contactFormSubmitted").show();
                });
            });
            
            function thankAlert(){
            alert("Thank You");
            }
        </script>
		
		<!-- This code is bit advanced as well and this clear all the fields that the use click on the submit button-->
		<script>
		function submit() {
            document.contact-form.submit();
            document.contact-form.reset();
		</script>
		

		<?php
		if(!isset($_COOKIE[$cookie_name])) {
		print "cookies"." ".$cookie_name . "=".$cookie_value;
		} else {
		print "cookies"." ".$cookie_name ."=". $cookie_value;}	
		?>
		



	<footer>
	© Thushanthy Thillainathan 
	</footer>

</body>
</html>