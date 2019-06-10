<!DOCTYPE html>
<html>
    <head>
        <title>Container division</title>

        <style>
            .grid {
                display: grid;
                grid-template-columns: 50% 50%;
                height:100px;
                
            }

            .grid>div:nth-child(odd){
                background-color: black;
                color:white;
            }

            .grid>div:nth-child(even){
                background-color: red;
                color:black;
            }


        </style>
    </head>
    <body>
            <div class="grid">
                <div>1</div>
                <div>2</div>
                
            </div>
    </body>
</html>