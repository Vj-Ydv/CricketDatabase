<!DOCTYPE html>
<html>
    <head>
        <title>View data</title>
        <link rel="stylesheet" type="text/css" href="css/picgallery.css">
	    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
        <style>
        table, tr, th, td{
           /* border: 1px solid;
            border-collapse: collapse;
            border-spacing: 0px;
            
            text-align: center;
            */
            border-color: darkviolet;
            padding:8px;
        }

        #myInput {
            background-image: url('img/search.png');
            background-position: 8px 8px;
            background-repeat: no-repeat;
            
            font-size: 20px;
            padding: 12px 20px 12px 50px;
            border: 1px solid #ddd;
            margin-bottom: 40px;
        }

        #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 8px;
        }

        th{
            background-color: darkviolet;
            color:white;
        }
        #myTable tr {
            border-bottom: 1px solid #ddd;
            }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }

        input[type=text] {
            width: 250px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }

        /* When the input field gets focus, change its width to 100% */
        input[type=text]:focus {
            width: 50%;
        }

        h2{
            color:darkviolet;
            text-align: center;
            font-size: 30px;
        }
        .button {
            background-color: green;
            border: none;
            color: white;
            padding: 8px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .btndelete {
            background-color: brown;
            border: none;
            color: white;
            padding: 8px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .btngallery {
            background-color: darkgoldenrod;
            border: none;
            color: white;
            padding: 8px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .btnprofile {
            background-color:teal;
            border: none;
            color: white;
            padding: 8px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .innerdata{
            color:darkblue;
        }

        .innerdata1{
            font-weight:bold;
        }
        </style>
        
    </head>

    <body>
        <h2>VIEW ALL DATA</h2>

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search ..." title="Type in a name">
        <table id="myTable">
        <thead>
            <tr>
                <th>SN</th>
                <th>Image</th>
                <th>Players </th>
                <th>Country</th>
                <th>Profile Detail</th>
                <th>View Gallery</th>
                <th>Update</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                //include_once "connection.php";
               $host='db4free.net';
                $username='vijayyadav';
                $password='vijayyadav';
                $database='cricdatabase';

                $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
                //echo "successfully connnected";
                $sql="select * from info";
                $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                $snn=1;
                if($result==true)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $sn=$row['SN'];
                        $playername=$row['PlayerName'];
                        $born=$row['Born'];
                        $role=$row['Role'];
                        $battingstyle=$row['BattingStyle'];
                        $bowlingstyle=$row['BowlingStyle'];
                        $image=$row['Image'];
                        $country=$row['Country'];
                        $date1=date("Y-m-d");
                        $date2=$born;  
                        $diff = abs(strtotime($date2) - strtotime($date1));
                        $years = floor($diff / (365*60*60*24));
                        ?>
                        <tr>
                            <td><?php echo $snn++ ?></td>
                            <td>
                              <a href="img/<?php echo $image ?>" data-lightbox="MyGallery" data-title="<?php echo $image ?>"><img style="border-radius: 7px;" src="img/<?php echo $image ?>" height="150px" width="150px"></a>
                            </td>
                            <td>
                                <p class="innerdata"><span class="innerdata1">Name:</span> <?php echo $playername ?></p>
                                <p ><span class="innerdata1">Born: </span> <?php echo $born ?><span> (<?php echo $years ?> years)</span></p>
                                <p ><span class="innerdata1">Role:</span> <?php echo $role ?></p>
                                <p ><span class="innerdata1">Batting:</span> <?php echo $battingstyle ?></p>
                                <p ><span class="innerdata1">Bowling:</span> <?php echo $bowlingstyle ?></p>
                              
                                
                            </td>
                            <td><?php echo $country ?></td>
                            <td>
                                 <a href="detailprofile.php?PlayerName=<?php echo $playername ?>"><button class="btnprofile" type="button">View Detail</button></a><br>
                                 <!-- <a href="viewgallery.php?PlayerName=<?php echo $playername ?>"><button class="btngallery" type="button">View Gallery</button></a> -->

                            </td>
                            <td>
                                 <a href="viewgallery.php?PlayerName=<?php echo $playername ?>"><button class="btngallery" type="button">View Gallery</button></a>
                            </td>
                            <td>
                                <a href="edit.php?sno=<?php echo $sn ?>"><button class="button" type="button">Update</button></a>
                                
                            </td>
                            <td>
                                 <a href="delete.php?PlayerName=<?php echo $playername ?>"><button class="btndelete" type="button">Delete</button></a>
                            </td>
                            
                        </tr>
                        <?php
                    }

                }

            ?>
        </tbody>
        </table>

        <script>
            function filterTable(event) {
                var filter = event.target.value.toUpperCase();
                var rows = document.querySelector("#myTable tbody").rows;
                
                for (var i = 0; i < rows.length; i++) {
                    var firstCol = rows[i].cells[2].textContent.toUpperCase();
                    var secondCol = rows[i].cells[3].textContent.toUpperCase();
                    if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }      
                }
            }

            document.querySelector('#myInput').addEventListener('keyup', filterTable, false);
                    
        
        </script>   

        <!-- <script>
            function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            

            for (i = 0; i < tr.length; i++) {
                 td = tr[i].getElementsByTagName("td")[2];
                
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
            }
            }
        </script> -->

    </body>
</html>