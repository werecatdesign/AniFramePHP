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

            var rainlines = document.querySelectorAll('.rainline');
            var rainTime = lineTime/3;

            image.addEventListener("mouseover", function(){                                                             
                var rainAnimation = anime({
                      targets: '.rainline',                    
                      strokeDashoffset: [anime.setDashoffset, 1],                      
                      duration: rainTime,                  
                      easing: 'linear',                        
                      loop: true
                })
            });

            image.addEventListener("mouseover", function(){                                                             
                var rainAnimation2 = anime({
                      targets: '.rainline',                  
                      stroke: [{value: 'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}],
                      duration: rainTime,                  
                      easing: 'linear',                        
                      loop: false
                })
            });

            image.addEventListener("mouseout", function(){                                                             
                var rainAnimation3 = anime({
                      targets: '.rainline',                  
                      stroke: [{value: 'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 0)'}],
                      duration: rainTime,                  
                      easing: 'linear',                        
                      loop: false
                })
            });