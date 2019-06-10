<!DOCTYPE html>
<html>
    <head>
        <title>Update Info</title>
        <style>
            .updateform{
                
                padding:15%;
            }

            .formshadow{

                width:400px;
                margin: auto;
                background-color:white;
                
                margin-top: 5px;

                border: 1px solid #77aaff;
                box-shadow: -7px 7px 8px #77aaff;

            }

            .blurform{

                width:400px;
                margin: auto;
                box-shadow: -7px 7px 300px #77aaff;
                
            }

            h1{
                text-align: center;
                color:#77aaff;
            }

            .submitbtn{
                border:none;
                height:40px;
                width:100px;
                margin-bottom: 20px;
                margin-top: 40px;
                background-color: #77aaff;
                color: white;
            }
        </style>
    </head>

    <body>
        <h1>Update your record</h1><br>

        <?php
        $sn=$_GET['SN'];

        $host='localhost';
        $username='root';
        $password='vijay';
        $database='crud';
    
        $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
        //echo "successfully connnected";
        $sql="select * from info where SN=".$sn;
        $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($result==true)
        {
            $row=mysqli_fetch_assoc($result);
            $name=$row['Name'];
            $address=$row['Address'];
        }
        ?>
        <div class="blurform">
            <div class="formshadow">
                <form action="edit_action.php" method="Post">
                    <div class="updateform" align="center">
                    <label>Name</label>
                    <input type="text" name="sname" value="<?php echo $name; ?>"><br><br><br>
                    <label>Address</label>
                    <input type="text" name="add" value="<?php echo $address; ?>"><br><br>
                    <input type="hidden" name="sn" value="<?php echo $sn ?>">
                    <input class="submitbtn" type="submit" name="update" value="Update"><br>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html>