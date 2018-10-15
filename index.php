<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cloud Vision Demo</title>
        <style>
            body, html {
                height: 100%;
            }
            
            .bg {
                background-color: #000000;
                height: 100%;
            }
        </style>
    </head>
    <body class = "bg">
        <div class = "container">
            <br><br><br>
            <div class = "row" style ="background-color: #ffffff">
                <h2>Google Cloud Vision API</h2>
                <br>
                <form action = "check.php" method="post" enctype ="multipart/form-data">
                    <input type = "file" name = "image" accept="image/*" class = "form-control">
                    <br>
                    <button type = "submit" style = "border-radius: 0px;" class = "btn" >Analyse</button>                    
                </form>
            </div>
           
            
        
        </div>
        
    </body>
</html>