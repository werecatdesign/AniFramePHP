            var joyGraphic = document.querySelector('#joygraphic'); 
            joyGraphic.setAttribute("style", "height: 100%");
            var branches = document.querySelectorAll(".branch"); // an array containing all branches of the drawn plant
            
            
            var lineTime = 750; // 1 second duration of each animation
            
            var joyLineDrawing = anime ({
                targets: ".branch", // all elements of the class 'branch' are targeted. Since only one graphic is included, this works.
                strokeDashoffset: [anime.setDashoffset, 0], // no dashoffset so the line is not dotted
                easing: 'easeInOutQuad', // easing: at the beginning and the end a bit slower, in the middle a bit faster
                duration: lineTime, // each path takes 1 second to be drawn
                delay: function (el, i) { 
                    return lineTime * i; // each path animation has the delay of all previous path animations, so that all are played one after another
                },
                begin: function(anim) {   
                    for (var i=0; i<branches.length; i++) { 
                        branches[i].setAttribute("visibility", "visible");
                        branches[i].setAttribute("stroke", "rgba( <?php echo $red1 ?>, <?php echo $green1 ?>, <?php echo $blue1 ?>, 1)");
                        branches[i].setAttribute("fill", "none");
                    }
                },
                autoplay: true // specifies that the animation will be triggered as soon as the page is loaded - played automatically
            });                                              
                                     
            var leaves = document.querySelectorAll(".leaf"); // an array containing all leaves of the drawn plant
            var leafTime = 150;            
            
                                                     
            image.addEventListener("mouseover", function(){
                
                var leavesAppear = anime ({
                    targets: ".leaf",
                    fill: [{value: 'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}],
                    duration: leafTime,                  
                    easing: 'easeOutCubic',
                    loop: false,
                    delay: function (el, i) { 
                        return leafTime * i; // each path animation has the delay of all previous path animations, so that all are played one after another
                    },
                    begin: function(anim) {
                           for (var i=0; i<leaves.length; i++) {           
                                leaves[i].setAttribute("visibility", "visible"); 
                            }
                    }
                });
                
            });

            image.addEventListener("mouseout", function(){
                var leavesDisappear = anime ({
                    
                    targets: ".leaf",
                    fill: [{value: 'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 0)'}],
                    duration: leafTime,                  
                    easing: 'easeOutCubic',
                    loop: false,
                    delay: function (el, i) { 
                        return leafTime * i; // each path animation has the delay of all previous path animations, so that all are played one after another
                    } 
                   
                });
                
            });
                                                    
                                                     
                                                     
                     
              
// 
// 

                                                 
            
           
            
                                                 
            