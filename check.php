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

        //var_dump($result); // show the result on the php page_
        echo '<pre>';
        // print_r ($result); // prints the array on the php page
        echo '</pre>';
    
        if ($result) { // if the array has been created
            $imagetoken = "yourimage"; // The filename that shall be used for the uploaded image
            move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/uploads/' . $imagetoken . ".jpg"); // the image is moved from its current                                                                                                          temporary location via the upload form to                                                                                                    the uploads folder and receives the name                                                                                                      "yourimage.jpg"
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
        
        echo $joyCount . '<br>';
        echo $angerCount . '<br>';
        echo $sorrowCount . '<br>';
        
        $dominantEmotion = 'TEST';
        
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

        echo 'Dominant Emotion: ' . $dominantEmotion . '<br>';

        $properties = $result->imageProperties();

        $red1 = $properties->info()['dominantColors']['colors'][0]['color']['red'];
        $green1 = $properties->info()['dominantColors']['colors'][0]['color']['green'];
        $blue1 = $properties->info()['dominantColors']['colors'][0]['color']['blue'];

        $red2 = $properties->info()['dominantColors']['colors'][1]['color']['red'];
        $green2 = $properties->info()['dominantColors']['colors'][1]['color']['green'];
        $blue2 = $properties->info()['dominantColors']['colors'][1]['color']['blue'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cloud Vision Demo</title>
    <link rel = "stylesheet" href = "stylesheet.css">    
</head>    
	
    <body class = "bg">
        <div class = "imagecontainer" style = "max-width: 1080px;">            
                    <img src = "uploads/yourimage.jpg" alt = "yourimage" style = "max-width: 500px">             
         
        
        
        </div>
        
    </body>
     

</html>