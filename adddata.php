<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add data</title>
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
                border: 1px solid teal;
                box-shadow: -7px 7px 8px teal;

            }

            .h2{
                color: teal;
                text-align: center;
                font-size: 30px;
            }

            .button {
                background-color: teal;
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
                background-color: teal;
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
                outline: 1px teal;
                box-shadow: 4px 4px 4px  teal;
            }

        </style>
    </head>

    <body>
   
        <h2 class="h2">Add New Record</h2><br>
        <div >
           
            <form class="formshadow" action="add_action.php" method="Post"  enctype="multipart/form-data">
                <div class="insert">
                    <div>
                    <table>
                        <tr>
                            <td><label>Player Name</label></td>
                            <td><input id="name" class="min-max-input" type="text" name="playername"
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></td>
                        </tr>
                        <tr>
                            <td><label>Born</label></td>
                            <td><input class="min-max-input" type="date" name="born"
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></td>
                        </tr>
                        <tr>
                            <td><label>Birthplace</label></td>
                            <td><input class="min-max-input" type="text" name="birthplace"
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></td>
                        </tr>
                        <tr>
                            <td><label>Country</label></td>
                            <td>
                            <select name="country">
                                <option value="Australia">Australia</option>
                                <option value="England">England</option>
                                <option value="India">India</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="South Africa">South Africa</option>
                                <option value="West Indies">West Indies</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Srilanka">Srilanka</option>
                                <option selected="selected" value="Nepal">Nepal</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Netherland">Netherland</option>
                                <option value="Scotland">Scotland</option>
                                
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Role</label></td>
                            <td>
                            <select name="role">
                                <option selected="selected" value="Batsman">Batsman</option>
                                <option value="Bowler">Bowler</option>
                                <option value="Allrounder">Allrounder</option>
                                
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Batting Style</label></td>
                            <td>
                                <select name="battingstyle">
                                    <option selected="selected" value="-">--------</option>
                                    <option value="Right handed batsman">Right handed batsman</option>
                                    <option value="Left handed batsman">Left handed batsman</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Bowling Style</label></td>
                            <td>
                                <select name="bowlingstyle">
                                    <option selected="selected" value="-">--------</option>
                                    <option value="Right-arm fast">Right-arm fast </option>
                                    <option value="Right-arm fast medium">Right-arm fast medium </option>
                                    <option value="Right-arm medium fast">Right-arm medium fast</option>
                                    <option value="Right-arm medium">Right-arm medium </option>
                                    <option value="Left-arm fast">Left-arm fast</option>
                                    <option value="Left-arm fast medium">Left-arm fast medium </option>
                                    <option value="Left-arm medium fast">Left-arm medium fast</option>
                                    <option value="Left-arm medium">Left-arm medium </option>

                                    <option value="Off break (right-arm)">Off break (right-arm)</option>
                                    <option value="Leg break (right-arm)">Leg break (right-arm)</option>
                                    <option value="Slow left-arm orthodox">Slow left-arm orthodox</option>
                                    <option value="Slow left-arm chinaman">Slow left-arm chinaman</option>
                                </select>
                        </td>
                        </tr>

                        <tr>
                            <td><label>Teams</label></td>
                            <td><textarea style="height:100px; " rows="50" cols="100" class="min-max-input" name="teams"
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></textarea></td>
                        </tr>

                        <tr>
                            <td><label>Description</label></td>
                            <td><textarea style="height:300px; " rows="400" cols="100" class="min-max-input" name="description"
                            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
                            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></textarea></td>
                        </tr>
                        
                    </table>
                    <div class="buttonclass">
                        <input style=" border-radius:12px;" class="button" type="submit" name="submit" value="Add Record">
                      
                    </div>
                    </div>

                    <div>
                        <img style="padding-top:15px; border-radius:50%;" src="" width="250px" height="250px" id="profile-img-tag" onerror="if (this.src != 'img/upload3.png') this.src = 'img/upload3.png';" /><br>
                        <input style=" border-radius:12px;" type="file" name="file" id="profile-img" class="uploadbtn"><br>
                        
                        <a  href="uploadmultipleimage.php" target="_blank"><label  style="cursor:pointer; color:teal;">Upload multiple images to gallery</label></a>
                       
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