<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cloud Vision Demo</title> 
        <link rel = "stylesheet" href = "stylesheet1.css">
    </head>
    <body class = "bg">
        <div class = "container">
            <br><br><br>
            <div class = "uploadbox" style ="background-color: #ffffff">
                <h2>AniFrame - The Animated Digital Picture Frame</h2>
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