<?php

        session_start(); // starts a new session
    
        require "vendor/autoload.php"; // Connect to autoload.php package - It is a package from composer that specifies that a class is only loaded when                                   it is needed. Instead of specifying all the classes on top of the script, so they will be loaded at each                                         request.
    
        
        use Google\Cloud\Vision\VisionClient; // using the Google Cloud Vision Client
        $vision = new VisionClient(['keyFile' => json_decode(file_get_contents("key.json"), true)]); // The personal key from Google Vision API is used

        $photo = fopen($_FILES['image']['tmp_name'], 'r');  // fopen() function is used to open a file or URL
                                                            // Opens the image that has been uploaded via the form.
                                                            // First the file name is specified in the fopen() function. 
                                                            // Then, the mode (type of access to the file) is specified. r = read only.
                                                            // A few more optional parameters could have been specified. Here, it's not the case.

        $image = $vision->image($photo, ['FACE_DETECTION', 'IMAGE_PROPERTIES']); // enter the parameters that should be analysed from the photo
        $result = $vision->annotate($image); // Creates the array with all the results from the API request
        
        if ($result) { // if the array has been created
            $imagetoken = "yourimage"; // The filename that shall be used for the uploaded image
            
            
            $target_dir = "uploads/";
            $target_file = $target_dir . "yourimage" . ".JPG";
            $uploadOk = 1;        
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Existing files are overwritten 

            // Allow certain file formats
            if($imageFileType != "jpg") {
                echo "<p>Sorry, only JPG files are allowed.</p>";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "<p>Sorry, your file was not uploaded.</p>";
                // if everything is ok, try to upload file
            } else {
               move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/uploads/' . $imagetoken . ".jpg");
            }
            
        } else {
            header("location: index.php"); // back to the first page
            die(); // The die is the same thing as the exit() function. Between the parentheses you could also write a message to be printed.
        }
    
        $faces = $result->faces(); // Extracts the face-related information from the results array

        $faceCount = count($faces);
        $joyCount = 0;
        $angerCount = 0;
        $sorrowCount = 0;

        for ($i = 0; $i < $faceCount; $i++) {
            $face = $faces[$i];
            $joy = $face->info()['joyLikelihood'];
            $anger = $face->info()['angerLikelihood'];
            $sorrow= $face->info()['sorrowLikelihood'];
            
            //Joy Count
            if($joy == 'VERY_LIKELY'){
                $joyCount += 2;
            }
            elseif($joy == 'LIKELY'){
                $joyCount++;
            }
            
            //Anger Count
            if($anger == 'VERY_LIKELY'){
                $angerCount += 2;
            }
            elseif($anger == 'LIKELY'){
                $angerCount++;
            }
            
            //Joy Count
            if($sorrow == 'VERY_LIKELY'){
                $sorrowCount += 2;
            }
            elseif($sorrow == 'LIKELY'){
                $sorrowCount++;
            }
            
        }
                      
            
        if($joyCount == $sorrowCount and $joyCount == $angerCount and $sorrowCount == $angerCount){
            $dominantEmotion = 'NEUTRAL';
        }
        elseif($joyCount >= $angerCount and $joyCount >= $sorrowCount){
            $dominantEmotion = 'JOY';    
        }
        elseif($angerCount > $joyCount and $angerCount > $sorrowCount){
            $dominantEmotion = 'ANGER';   
        }
        elseif($sorrowCount > $joyCount and $sorrowCount > $angerCount){
            $dominantEmotion = 'SORROW';   
        } else {
            $dominantEmotion = 'NEUTRAL';
        }

        //echo 'Dominant Emotion: ' . $dominantEmotion . '<br>';

        $properties = $result->imageProperties();

        $red1 = $properties->info()['dominantColors']['colors'][0]['color']['red'];
        $green1 = $properties->info()['dominantColors']['colors'][0]['color']['green'];
        $blue1 = $properties->info()['dominantColors']['colors'][0]['color']['blue'];

        $red2 = $properties->info()['dominantColors']['colors'][1]['color']['red'];
        $green2 = $properties->info()['dominantColors']['colors'][1]['color']['green'];
        $blue2 = $properties->info()['dominantColors']['colors'][1]['color']['blue'];
        
        $red3 = $properties->info()['dominantColors']['colors'][2]['color']['red'];
        $green3 = $properties->info()['dominantColors']['colors'][2]['color']['green'];
        $blue3 = $properties->info()['dominantColors']['colors'][2]['color']['blue'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cloud Vision Demo</title>
    <link rel = "stylesheet" href = "stylesheet2.css">    
</head>    
	
    <body class = "bg">
        <div class = "graphiccontainer">
            <?php
                if ($dominantEmotion == "JOY") {
                    include "joy.php";
                } elseif ($dominantEmotion == "ANGER") {
                    include "anger.php";
                } elseif ($dominantEmotion == "SORROW") {
                    include "sorrow.php";
                } else {
                    include "neutral.php";
                }                
            ?>         
                                    
            <div class = "resultcontainer">                
                <div class = "imagecontainer">            
                    <img src = "uploads/yourimage.jpg" alt = "yourimage">         
                </div>                
                 <a class = "reupload" href = "index.php">Reupload</a>                
            </div>
            
            
        </div>
        
    <script src = "anime.js"></script>    
        
    <script>
        
        
// ----------------------------------------------------------- Setting the colour of the page background -------------------------------------------
        
        var pageBackground = document.querySelector('.bg');
        pageBackground.setAttribute("style", "background-color: rgba(<?php echo $red2 ?>, <?php echo $green2 ?>, <?php echo $blue2 ?>, 1)") 
        
        
// ----------------------------------------------------------- JS variable for the dominant emotion ------------------------------------------------
        
        var image = document.querySelector ('img');
        var imageEmotion = "<?php echo $dominantEmotion ?>";
        console.log(imageEmotion);
        
        
// ------------------------------------------------------------ Animating the background graphic ---------------------------------------------------
        
   
        
        <?php
                if ($dominantEmotion == "JOY") {
                    include "joyanim.php";
                } elseif ($dominantEmotion == "ANGER") {
                    include "angeranim.php";
                } elseif ($dominantEmotion == "SORROW") {
                    include "sorrowanim.php";
                } else {
                    include "neutralanim.php";
                }                
        ?> 

        
    </script>    
        
    </body>
     

</html>