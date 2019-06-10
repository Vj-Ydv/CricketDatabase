<!DOCTYPE html>
<html>
    <head>
        <title>Cricket database</title>

        <style>
            *{
                 
            }
            .header{
                height:90px;
                background-color: darkviolet;
                color:white;
                padding-top: 10px;
               
               
            }

            .footer{
                height:40px;
                background-color: darkviolet;
                color:white;
                padding-top:1%;
                text-align: center;
                font-size: 20px;
               
            }


            table, tr, th, td{
                border: 1px solid;
                border-collapse: collapse;
                border-spacing: 0px;
                text-align: center;
                border-color: darkviolet;
                padding:8px;
            }
            /*
            tr:nth-child(even){
                background-color: darkgrey;
            }
            */

            .h2{
                text-align: center;
            }

            .form{
                margin-left: 40%;
            }

            .menu{
                height: 60px;
                padding-top: 1px;
                background-color: white;
                font-family: sans-serif;
                text-shadow: 5px 5px 10px orange;

            }

            .menu li{
                display: inline;
                padding-right: 15px;
            }

            ul a{
                text-decoration: none;
            }

            ul a:hover{
                
                font-size: 30px;
                color: lime;
            }

            .maincontent{
                height:430px;
                background-image: url(img/home.jpg);
                background-repeat: no-repeat;
				background-size:300px 300px;
            }


            .divideheader{
                display:grid;
                grid-template-columns: 10% 70%;
                grid-column-gap: 10px;
                background-color: darkviolet;
            }

            .homeicon{
                padding-left: 25px;
                padding-top: 10px;
            }
            .maincontent1{
               position: relative;
            }

            .imagetext{
                position: absolute;
                top:5%;
                left:75%;
                font-size: 50px;
                color:white;
                font-weight: bold;
            }
        </style>

    </head>

    <div class="divideheader">
        <div class="homeicon">
            <img src="img/cricket2.png" alt="Home" style="width:80px;height:80px;"   />
        </div>

        <div class="header">
            <h1>CRICKET DATABASE</h1>
        </div>
    </div>
  
    <div class="menu">
        <ul >
            <li class="menulist"><a href="index.php">Home</a></li>
            <li class="menulist"><a href="adddata.php">Add data</a></li>
            <li class="menulist"><a href="viewdata.php" target="_blank">View data</a></li>
            <li class="menulist"><a href="http://vizayyadav.blogspot.com" target="_blank">My blog</a></li>
            <!-- <li class="menulist"><a href="feedbackform.html" target="_blank">Send feedback</a></li> -->
		</ul>
    </div>
    
    <div class="maincontent1">
        <img src="img/jadeja.jpg" alt="Home" style="width:100%;height:100%;"   />
        <div class="imagetext">Sr. Ravindra Jadeja</div>
    </div>

    <div class="footer">
       All rights reserved . &COPY; 2019 Vijay Yadav
    </div>

</html>
