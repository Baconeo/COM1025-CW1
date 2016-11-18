<!DOCTYPE html>
<html>
    <style>
        body{
            background-color:#d9d9d9;
        }

        h1{
            text-align:center;
            text-color:white;
        }
        header, footer{
            background-color: ;
            margin:0;
            padding:none;
            padding: 1em;
            color: white;
            background-color: #333;
            clear: left;
            text-align: center;


        }
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: solid;
            background-color:white;
            border-color:black;
        }

        input [type=button]{
            list-style-type: none;
            overflow: hidden;
            background-color: #333;
        }

        button a:hover {
            background-color: #111;
        }

        #home{
            background-image: url("https://yanphoto.com/wp-content/uploads/2016/08/TS-Night-Photography.jpg");
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
        }
        .text1{
            position: absolute;
            left:10px;
            width: 1000px;
            padding: 100px;
            background-color:white;
            opacity:0.8;
            filter: alpha(opacity=50);}

        .text2{
            position: absolute;

        }
        .details{
            position: absolute;
            right:10px;
            width: 1000px;
            padding: 100px;
            background-color:white;
            opacity:0.8;
            filter: alpha(opacity=50);}

        .form{
            background-color:#ffffff;
            width: 400px;
            padding: 25px;
            background-color:white;
            opacity:0.8;
            filter: alpha(opacity=50);


        }


    </style>

    <head>
        <title> Thushanthy Thillainathan's Page </title>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../css/group.css">
    </head>
    <body>


        <div id ="home">
            <header>
                <div class ="navbar">
                    <ul>
                        <li><a class="active" href="#home">Home</a></li>
                        <li><a class="active" href="#aboutme">About Me</a></li>
                        <li><a class="active" href="#contact">Contact Me</a></li>
                    </ul>
                </div>
                <h1> Thushanthy Thillainathan</h1>
            </header>
            <br></br>
            <br></br>
            <br></br><br></br>
            <br></br>
            <br></br>
            <br></br><br></br><br></br>
            <?xml version ="1.0" encoding ="UTF-8"?>

            <!DOCTYPE note
                [<!ELEMENT note (to, from,body)>
            <!ELEMENT to (#PCDATA)>
            <!ELEMENT from (#PCDATA)>
            <!ELEMENT body (#PCDATA)>

            ]>
            <note>
                <to> User</to>
                <from> Thushanthy</from>
                <body>Welcome To My Page</body>
            </note>


            <br></br><br></br>
            <br></br>
            <br></br>
            <br></br><br></br>
            <br></br>
            <br></br>
            <br></br><br></br>
            <br></br>
            <br></br>
            <br></br><br></br>

            <div class ="homediv">
                <img src="H:\Thushanthy\COM1025\own page\images\2.jpg" position="center", attachment="fixed" width="100%";>

            </div>
        </div>

        <div id ="aboutme">
            <header>
                <h1> About me</h1>
            </header>
            <div class="text1">
                <br></br>

                <br></br>
                <br></br>

                <p><span style= "text-color:black; font-size:25px;" > <b>Hello!!! I am Thushanthy Thillainathan. <br></br>I am studying computing and information technology. I am from Sri Lanka and I have been living in here for four years. I was in Wembley high technology and studied my GSCE in there. After I continued my education in harrow college and did my further education in there.Finally I am here now.</b><br></br></span></p>

                <p><span style= "text-color:black; font-size:25px;" ><b>I love Photography alot. I love taking pictures of intersting things, or new things and the landscape as well. Even the random pictures that you take make you to remember something. <i>I don't shoot what it looks like I shoot what it feels like</i> </b></span> </p>
            </div>


        </div>

        <div id = "image">
            <img src="H:\Thushanthy\COM1025\own page\images\2.jpg" position="center", attachment="fixed" width="100%";>

        </div>

        <div id ="contact">
            <header>
                <h1> Contact me</h1>
            </header>
            <div id="contactme">
                <div class ="text2">

                    <p> <span style= "text-color:black; font-size:25px;" ><b> Want To Know More About Me??? <br> Contact Me </b> <p></span>

                        <br></br>


                    <div style="position:relative;" class="form">
                        <form action="mailto:tt00308@surrey.ac.uk" id="mailtoform" method="POST">
                            <label>Your Email:</label><br />
                            <input type="text" name ="Email"><br />
                            <label>Subject:</label><br />
                            <input type="text" name="Subject"><br />
                            <label>Comment:</label><br >
                            <input type="text" name="Comment"><br />
                            <div class= "button">
                                <button onClick ="thankAlert()">Submit Comment</button>
                            </div>
                        </form>
                    </div>	

                    <div class="details">
                        <p> My Details<br></br>
                            name<br></br>Address<br></br></p>
                        <?php
                        $aboutme = array(array("Thank", "You"));
                        echo"Dear user" . $aboutme[0] . "," . $aboutme[1];
                        ?>
                    </div>
                </div>
                <div id = "image">
                    <img src="H:\Thushanthy\COM1025\own page\images\5.jpg" position="center", attachment="fixed" width="100%";>
                </div>
            </div>
        </div>
        <footer>
            © Thushanthy Thillainathan 
        </footer>

    </body>
</html>