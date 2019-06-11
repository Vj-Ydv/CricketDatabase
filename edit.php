<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Record</title>
        <script src="jquery/jquery-3.4.1.js"></script>
        <style>
            body{
                background-image: url("img/whiteball.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-origin: center;
               
            }
            .insert{
            display: grid;
            grid-template-columns: 70% 30%;
            grid-column-gap: 10px;
            padding: 2%;
            border-color: red;
            }

            .formshadow{

                width:1000px;
                
                margin: auto;
                padding: 5%;
                border: 1px solid darkgoldenrod;
                box-shadow: -7px 7px 8px darkgoldenrod;

            }

            .h2{
                color: darkgoldenrod;
                text-align: center;
                font-size: 30px;
            }

            .button {
                background-color: darkgoldenrod;
                border: none;
                color: white;
                padding: 12px 30px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 20px 20px;
                cursor: pointer;
               
            }
            .buttongallery {
                background-color: green;
                border: none;
                color: white;
                padding: 12px 30px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 20px 20px;
                cursor: pointer;
                margin-left:20px;
            }
            .buttonclass{
                padding-left:12%;
            }
            .uploadbtn {
                background-color: darkgoldenrod;
                border: none;
                color: white;
                /* padding: 8px 20px; */
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12px;
                margin: 20px 2px;
                cursor: pointer;
                height:30px;
                width:250px;
                
            }
            td{
                padding-top: 15px;
                
                
            }
            input[type="text"], input[type="date"],select,textarea{
                font-size: 16px;
                height: 35px;
                width:400px;
                padding-left: 20px;

            }
            textarea{
                padding-top: 20px;
            }
            select{
                font-size: 16px;
                height: 40px;
                width:422px;
                padding-left: 20px;

            }
            
            .min-max-input:focus {
                outline: 1px darkgoldenrod;
                box-shadow: 4px 4px 4px  darkgoldenrod;
            }

        </style>
    </head>

    <body>
   
    <?php
    //    $playeredit=$_GET['sn'];
        $snn=$_GET['sno'];
        include('connection.php');
        // $host='localhost';
        // $username='root';
        // $password='vijay';
        // $database='crud';
    
        // $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
        //echo "successfully connnected";
        // $sql="select * from info where PlayerName='$playername'";
        $sql="select * from info where SN='$snn'";
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
        }
    ?>
        <h2 class="h2">Update Record</h2><br>
        <div >
           
            <form class="formshadow" action="edit_action.php" method="Post"  enctype="multipart/form-data">
                <div class="insert">
                    <div>
                    <table>
                        <tr>
                            <td><label>Player Name</label></td>
                            <td><input readonly id="name" class="min-max-input" type="text" name="playername" value="<?php echo $playername; ?>"
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></td>
                        </tr>
                        <tr>
                            <td><label>Born</label></td>
                            <td><input class="min-max-input" type="date" name="born" value="<?php echo $born; ?>"
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></td>
                        </tr>
                        <tr>
                            <td><label>Birthplace</label></td>
                            <td><input class="min-max-input" type="text" name="birthplace" value="<?php echo $birthplace; ?>"
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></td>
                        </tr>
                        <tr>
                            <td><label>Country</label></td>
                            <td>
                            <select name="country">
                            
                            
                                <option value="Australia" <?php if($country=="Australia") echo 'selected="selected"'; ?> >Australia</option>
                                <option value="England" <?php if($country=="England") echo 'selected="selected"'; ?> >England</option>
                                <option value="India" <?php if($country=="India") echo 'selected="selected"'; ?> >India</option>
                                <option value="Bangladesh" <?php if($country=="Bangladesh") echo 'selected="selected"'; ?> >Bangladesh</option>
                                <option value="South Africa" <?php if($country=="South Africa") echo 'selected="selected"'; ?> >South Africa</option>
                                <option value="West Indies" <?php if($country=="West Indies") echo 'selected="selected"'; ?> >West Indies</option>
                                <option value="Afghanistan" <?php if($country=="Afghanistan") echo 'selected="selected"'; ?> >Afghanistan</option>
                                <option value="New Zealand" <?php if($country=="New Zealand") echo 'selected="selected"'; ?> >New Zealand</option>
                                <option value="Pakistan" <?php if($country=="Pakistan") echo 'selected="selected"'; ?> >Pakistan</option>
                                <option value="Srilanka" <?php if($country=="Srilanka") echo 'selected="selected"'; ?> >Srilanka</option>
                                <option value="Nepal" <?php if($country=="Nepal") echo 'selected="selected"'; ?> >Nepal</option>
                                <option value="Ireland" <?php if($country=="Ireland") echo 'selected="selected"'; ?> >Ireland</option>
                                <option value="Netherland" <?php if($country=="Netherland") echo 'selected="selected"'; ?> >Netherland</option>
                                <option value="Scotland" <?php if($country=="Scotland") echo 'selected="selected"'; ?> >Scotland</option>
                                
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Role</label></td>
                            <td>
                            <select name="role">
                            <?php echo $country; ?>
                                <option value="Batsman" <?php if($role=="Batsman"){echo 'selected="selected"';} ?> >Batsman</option>
                                <option value="Bowler" <?php if($role=="Bowler"){echo 'selected="selected"';} ?> >Bowler</option>
                                <option value="Allrounder" <?php if($role=="Allrounder"){echo 'selected="selected"';} ?>>Allrounder</option>
                                
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Batting Style</label></td>
                            <td>
                                <select name="battingstyle">
                                    <option value="-">--------</option>
                                    <option value="Right handed batsman" <?php if($battingstyle=="Right handed batsman") echo 'selected="selected"'; ?> >Right handed batsman</option>
                                    <option value="Left handed batsman" <?php if($battingstyle=="Left handed batsman") echo 'selected="selected"'; ?> >Left handed batsman</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Bowling Style</label></td>
                            <td>
                                <select name="bowlingstyle">
                                    <option value="-">--------</option>
                                    <option value="Right-arm fast" <?php if($bowlingstyle=="Right-arm fast") echo 'selected="selected"'; ?> >Right-arm fast </option>
                                    <option value="Right-arm fast medium" <?php if($bowlingstyle=="Right-arm fast medium") echo 'selected="selected"'; ?> >Right-arm fast medium </option>
                                    <option value="Right-arm medium fast" <?php if($bowlingstyle=="Right-arm medium fast") echo 'selected="selected"'; ?> >Right-arm medium fast</option>
                                    <option value="Right-arm medium" <?php if($bowlingstyle=="Right-arm medium") echo 'selected="selected"'; ?> >Right-arm medium </option>
                                    <option value="Left-arm fast" <?php if($bowlingstyle=="Left-arm fast") echo 'selected="selected"'; ?> >Left-arm fast</option>
                                    <option value="Left-arm fast medium" <?php if($bowlingstyle=="Left-arm fast medium") echo 'selected="selected"'; ?> >Left-arm fast medium </option>
                                    <option value="Left-arm medium fast" <?php if($bowlingstyle=="Left-arm medium fast") echo 'selected="selected"'; ?> >Left-arm medium fast</option>
                                    <option value="Left-arm medium" <?php if($bowlingstyle=="Left-arm medium") echo 'selected="selected"'; ?> >Left-arm medium </option>

                                    <option value="Off break (right-arm)" <?php if($bowlingstyle=="Off break (right-arm)") echo 'selected="selected"'; ?> >Off break (right-arm)</option>
                                    <option value="Leg break (right-arm)" <?php if($bowlingstyle=="Leg break (right-arm)") echo 'selected="selected"'; ?> >Leg break (right-arm)</option>
                                    <option value="Slow left-arm orthodox" <?php if($bowlingstyle=="Slow left-arm orthodox") echo 'selected="selected"'; ?> >Slow left-arm orthodox</option>
                                    <option value="Slow left-arm chinaman" <?php if($bowlingstyle=="Slow left-arm chinaman") echo 'selected="selected"'; ?> >Slow left-arm chinaman</option>
                                </select>
                        </td>
                        </tr>

                        <tr>
                            <td><label>Teams</label></td>
                            <td ><textarea style="height:100px;" rows="500" cols="1000" class="min-max-input" name="teams" 
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"><?php echo $teams; ?></textarea></td>
                        </tr>

                        <tr>
                            <td><label>Description</label></td>
                            <td><textarea style="height:300px; " rows="4000" cols="1000" class="min-max-input" name="description" 
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"><?php echo $description; ?></textarea></td>
                        </tr>
                        
                    </table>
                    <div class="buttonclass">
                        <input type="hidden" name="sn" value="<?php echo $sn ?>" >
                        <input style=" border-radius:12px;" class="button" type="submit" name="submit" value="Update Record">
                       
                    </div>
                    </div>

                    <div>
                        <input type="hidden" name="oldimage" value="<?php echo $image ?>" >

                        <img style="padding-top:15px; border-radius:50%;" src="img/<?php echo $image ?>" width="250px" height="230px" id="profile-img-tag" onerror="if (this.src != 'img/upload3.png') this.src = 'img/upload3.png';" /><br>
                        <input style=" border-radius:12px;" type="file" name="file" id="profile-img" class="uploadbtn"><br>
                        
                        <!-- <a  href="uploadmultipleimage.php" target="_blank"><label  style="cursor:pointer; color:darkviolet;">Upload multiple images to gallery</label></a> -->
                       
                    </div>
                </div>

               
            </form>
            <div>
            
            </div>
        
        </div>

        
        <script type="text/javascript">

            function readURL(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#profile-img-tag').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);

                }

            }

            $("#profile-img").change(function(){

                readURL(this);

            });
        </script>    





    </body>
</html>