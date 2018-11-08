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

       


        image.addEventListener("mouseover", function(){
            var circleAnimation = anime({
                  targets: 'polygon',                      
                  fill: [{value: 'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}],
                    scale: 1.25,
                    translateX: -130,
                    translateY: -100,
                    elasticity: 1000,
                  duration: lineTime,
                  loop: false
                });
        });

        image.addEventListener("mouseout", function(){
            var circleAnimation = anime({
                  targets: 'polygon',                      
                  fill: [{value: 'rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 1)'}],
                    scale: 1.1,
                    translateX: -40,
                    translateY: -50,
                    elasticity: 500,
                    duration: lineTime,
                  loop: false
                });
        });