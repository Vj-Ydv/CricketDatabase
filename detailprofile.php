<!DOCTYPE html>
<html>
    <head>

        <style>
            body{
                background-color:white ;
            }
            .container{
               
               padding:20px 20px 20px 20px;
               
            }
            .bottompart{
                display:grid;
                grid-template-columns: 35% 64.5%;
                grid-column-gap: 5px;
                padding-top: 5px;
                
            }
            .column1{
                border-radius: 7px;
                padding:20px 20px 20px 20px; 
                background-color: #E9E9E9;
                
            }
            .column2{
                border-radius: 7px;
                padding:20px 30px 20px 30px; 
                background-color: whitesmoke;
            }
            .topheader{
                border-radius: 7px;
                display: grid;
                grid-template-columns: 16% 84%;
                
                height:200px;
                background-color: darkkhaki;
            }
            .topcolumn1{
                padding:20px 20px 20px 20px;
            }
            .topcolumn2{
                padding:70px 20px 20px 20px;
            }
            img{
                border-radius: 13px;
            }
            .playername{
                
                font-size: 50px;
                font-weight: bold;
            }
            .countryname{
                
                font-size: 30px;
                font-weight: bold;
                color:white;
            }
            .personalinfo{
                font-size: 23px;
                font-weight: bold;
                padding-left: 15px;
            }
            .personalinfo1{
                
                font-weight: bold;
            }
            tr,td{
                padding:10px;
                font-size: 18px;
            }
            .fullprofileheading{
                font-size: 23px;
                font-weight: bold;
                font-family: 'Times New Roman', Times, serif;
                font-style: normal;
               
            }
            .description{
                font-size: 20px;
            }
            .footer{
                border-radius: 7px;
                height:30px;
                background-color: darkkhaki;
                color:white;
                padding-top:1%;
                text-align: center;
                font-size: 20px;
                
               
            }
            .image{
                padding-top: 9px;
                padding-left: 9px;
            }
            .playercountry{
                width: 600px;
            }
            
        </style>

    </head>

    <body>

    <?php
        $playername=$_GET['PlayerName'];
        include('connection.php');
        // $host='localhost';
        // $username='root';
        // $password='vijay';
        // $database='crud';
    
        // $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
        //echo "successfully connnected";
        $sql="select * from info where PlayerName='$playername'";
        $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($result==true)
        {
            $row=mysqli_fetch_assoc($result);
            $sn=$row['SN'];
            $playername=$row['PlayerName'];
            $born=$row['Born'];
            $role=$row['Role'];
            $battingstyle=$row['BattingStyle'];
            $bowlingstyle=$row['BowlingStyle'];
            $image=$row['Image'];
            $country=$row['Country'];
            $birthplace=$row['BirthPlace'];
            $teams=$row['Teams'];
            $description=$row['Description'];
            $date1=date("Y-m-d");
            $date2=$born;  
            $diff = abs(strtotime($date2) - strtotime($date1));
            $years = floor($diff / (365*60*60*24));
        }
    ?>

        <div class="container">
            <div class="topheader">
               <table>
                   <tr>
                       <td class="img" >
                        <img class="image" src="img/<?php echo $image ?>" height="160px" width="160px">
                       </td>

                       <td>
                         <div class="playercountry">
                            <span class=playername> <?php echo $playername ?></span><br>
                            <span class="countryname"> <?php echo $country ?></span>
                         </div>
                       </td>
                   </tr>
               </table>
                <!-- <div class="topcolumn1">
                    <img src="img/<?php echo $image ?>" height="160px" width="160px">
                </div>
                <div class="topcolumn2">
                    
                   <span class=playername> <?php echo $playername ?></span><br>
                   <span class="countryname"> <?php echo $country ?></span>
                </div> -->
            </div>

            <div class="bottompart">
                <div class="column1">
                    <span class="personalinfo">Personal Information</span><br><br>
                    <table>
                        <tr><td><span class="personalinfo1">Born:</span></td> <td><?php echo $born ?><span> (<?php echo $years ?> years)</span></td></tr>
                        <tr><td><span class="personalinfo1">Birthplace:</span></td> <td> <?php echo $birthplace ?></td></tr>
                        <tr><td><span class="personalinfo1">Role:</span></span></td> <td> <?php echo $role ?></td></tr>
                        <tr><td><span class="personalinfo1"> Batting Style:</span></td> <td> <?php echo $battingstyle ?></td></tr>
                        <tr><td><span class="personalinfo1"> Bowling Style:</span> </td> <td><?php echo $bowlingstyle ?></td></tr>
                        <tr><td><span class="personalinfo1"> Teams:</span> </td> <td><?php echo $teams ?></td></tr>

                    </table>
                </div>

                <div class="column2">
                    <span class="fullprofileheading">Full Profile</span><br>
                   <p class="description"><span><?php echo $description ?></span></p>
                </div>
            </div>
            <div style="padding-top:5px;">
                <div class="footer">
                    All rights reserved . &COPY; 2019 Vijay Yadav
                </div>
            </div>
        </div>
        
    </body>
</html>