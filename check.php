<?php

        /*session_start(); // starts a new session
    
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
        
        $red3 = $properties->info()['dominantColors']['colors'][2]['color']['red'];
        $green3 = $properties->info()['dominantColors']['colors'][2]['color']['green'];
        $blue3 = $properties->info()['dominantColors']['colors'][2]['color']['blue'];*/

        // Since my Google Vision API project is disabled at the moment, I am using these values for the variables until it gets reactivated or I create a new project

        $photo = fopen($_FILES['image']['tmp_name'], 'r');
        $imagetoken = "yourimage";

        $target_dir = "uploads/";
        $target_file = $target_dir . "yourimage" . ".JPG";
        $uploadOk = 1;        
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Existing files are overwritten   

        // Check file size
        if ($_FILES['image']/*['tmp_name']*/["size"] > 500000) {
            echo "<p>Sorry, your file is too large.</p>";
            $uploadOk = 0;
        }

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
        

        $dominantEmotion = "NEUTRAL";

        $red1 = 255;
        $green1 = 0;
        $blue1 = 0;

        $red2 = 0;
        $green2 = 0;
        $blue2 = 255;

        $red3 = 0;
        $green3 = 255;
        $blue3 = 0;

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
        
    // -------------------------------------------------------- JOY ---------------------------------------------------------------------------
        
        if (imageEmotion == "JOY") {
            
            var joyGraphic = document.querySelector('#joygraphic'); 
            joyGraphic.setAttribute("style", "height: 100%");            
            
            var lineTime = 1000; // 1 second duration of each animation
            
            var joyLineDrawing = anime ({
                targets: "path", // all elements of the type 'path' are targeted. Since only one graphic is included, this works.
                strokeDashoffset: [anime.setDashoffset, 0], // no dashoffset so the line is not dotted
                easing: 'easeInOutQuad', // easing: at the beginning and the end a bit slower, in the middle a bit faster
                duration: lineTime, // each path takes 1 second to be drawn
                delay: function (el, i) { 
                    return lineTime * i; // each path animation has the delay of all previous path animations, so that all are played one after another
                },
                begin: function(anim) {
                    var branches = document.querySelectorAll("path"), i; // an array containing all paths - the branches of the drawn plant
                    
                    for (i=0; i<branches.length; i++) { // here the appearance of the branches is specified as they are hidden in the beginning
                        branches[i].setAttribute("visibility", "visible");
                        branches[i].setAttribute("stroke", "rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 1)");
                        branches[i].setAttribute("fill", "none");
                    }
                },
                autoplay: true // specifies that the animation will be triggered as soon as the page is loaded - played automatically
            })
            
        }
            
            
    // -------------------------------------------------------- ANGER -------------------------------------------------------------------------
            
        else if (imageEmotion == "ANGER") {
            var angerGraphic = document.querySelector('#angergraphic');            
            angerGraphic.setAttribute("style", "visibility: visible; fill: rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 1); height: 100%");
            
            
            var path1 = anime.path('#path1');
            var path2 = anime.path('#path2');
            var path3 = anime.path('#path3');
            var path4 = anime.path('#path4');
            var path5 = anime.path('#path5');
            var path6 = anime.path('#path6');
            var lineTime = 5000; // 5 seconds duration of each animation

            
                var motionPath1 = anime({
                  targets: '#lightning1',                      
                  translateX: path1('x'),
                  translateY: path1('y'),                                    
                  duration: lineTime,                    
                  elasticity: 2000,
                  loop: false
                });
            
                var motionPath2 = anime({
                  targets: '#lightning2',                      
                  translateX: path2('x'),
                  translateY: path2('y'),                                    
                  duration: lineTime,                  
                  elasticity: 2000,
                  loop: false
                });
            
                var motionPath3 = anime({
                  targets: '#lightning3',                      
                  translateX: path3('x'),
                  translateY: path3('y'),                                    
                  duration: lineTime,                  
                  elasticity: 2000,
                  loop: false
                });
            
                var motionPath4 = anime({
                  targets: '#lightning4',                      
                  translateX: path4('x'),
                  translateY: path4('y'),                                    
                  duration: lineTime,                  
                  elasticity: 2000,
                  loop: false
                });
            
                var motionPath5 = anime({
                  targets: '#lightning5',                      
                  translateX: path5('x'),
                  translateY: path5('y'),                                    
                  duration: lineTime,                  
                  elasticity: 2000,
                  loop: false
                });
           
                var motionPath6 = anime({
                  targets: '#lightning6',                      
                  translateX: path6('x'),
                  translateY: path6('y'),                                    
                  duration: lineTime,                  
                  elasticity: 2000,
                  loop: false
                });
            
        }    
    // -------------------------------------------------------- SORROW ------------------------------------------------------------------------
            
        else if (imageEmotion == "SORROW") {
            var sorrowGraphic = document.querySelector('#sorrowgraphic');            
            sorrowGraphic.setAttribute("style", "visibility: visible; height: 100vh; fill: rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 0)");
            
            var pathleft = anime.path('#pathleft');
            var pathright = anime.path('#pathright');
            var lineTime = 8000;
            
            var motionPathLeft = anime({
                  targets: '.cloudleft',                      
                  translateX: pathleft('x'),
                  translateY: pathleft('y'),
                  fill: [{value: 'rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 1)'}],
                  duration: lineTime,                  
                  easing: 'easeOutCubic',
                  loop: false
                });
            
            var motionPathLeft = anime({
                  targets: '.cloudright',                      
                  translateX: pathright('x'),
                  translateY: pathright('y'),
                  fill: [{value: 'rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 1)'}],
                  duration: lineTime,                  
                  easing: 'easeOutCubic',
                  loop: false
                });
            
            
        } 
            
    // -------------------------------------------------------- NEUTRAL -----------------------------------------------------------------------
            
        else {
            var neutralGraphic = document.querySelector('#neutralgraphic');            
            neutralGraphic.setAttribute("style", "visibility: visible; fill: rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 0); height: 100%");
            
            var fillTimeline = anime.timeline({                
                duration: 1500,
                easing: 'easeInOutSine'
            });
            
            fillTimeline 
                .add({
                    targets: '.owlpath',
                    strokeDashoffset: [anime.setDashoffset, 0],
                    stroke: [{value:'rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 1)'}                        
                      ],
                    offset: 0
                })
                .add({
                    targets: '.owlpath',                    
                    fill: [{value: 'rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 1)'}],                     
                    offset: 1500
                })
                .add({
                    targets: '.eyewhite', 
                    stroke: [{value:'rgba( <?php echo $red2 ?>, <?php echo $green2 ?>, <?php echo $blue2 ?>, 1)'}                        
                      ],
                    strokeDashoffset: [anime.setDashoffset, 0],                                       
                    offset: 3000
                })
                .add({
                    targets: '.eyewhite',                    
                    fill: [{value:'rgba( <?php echo $red2 ?>, <?php echo $green2 ?>, <?php echo $blue2 ?>, 1)'}                        
                      ],                    
                    offset: 4500
                })
                .add({
                    targets: '.eyeblack',
                    strokeDashoffset: [anime.setDashoffset, 0], 
                    stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                    offset: 6000
                })
                .add({
                    targets: '.eyeblack',                    
                    fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                    offset: 7500
                })
                .add({
                    targets: '.beak', 
                    strokeDashoffset: [anime.setDashoffset, 0],
                    stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                    offset: 9000
                })
                .add({
                    targets: '.beak',                     
                    fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                    offset: 10500
                })
                .add({
                    targets: '.foot',
                    stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                    strokeDashoffset: [anime.setDashoffset, 0],                    
                    offset: 12000
                })
                .add({
                    targets: '.foot',                    
                    fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                    offset: 13500
                });
            
        }
        
    </script>    
        
    </body>
     

</html>