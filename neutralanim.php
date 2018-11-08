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


/*---------------------------HOVER-------------------------------------------------------------------------------------------------*/
            image.addEventListener("mouseover", function(){                                                             
                var Invis1 = anime({
                      targets: '.eyewhite',                  
                      stroke: [{value:'rgba( <?php echo $red2 ?>, <?php echo $green2 ?>, <?php echo $blue2 ?>, 0)'}                      
                      ],
                      fill: [{value:'rgba( <?php echo $red2 ?>, <?php echo $green2 ?>, <?php echo $blue2 ?>, 0)'}                        
                      ],
                      duration: 2000,                  
                      easing: 'linear',                        
                      loop: false
                })

                var Invis2 = anime({
                      targets: '.eyeblack',                  
                      stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 0)'}                      
                      ],
                      fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 0)'}                        
                      ],
                      duration: 2000,                  
                      easing: 'linear',                        
                      loop: false
                })

                var Invis3 = anime({
                      targets: '.beak',                  
                      stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 0)'}                      
                      ],
                      fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 0)'}                        
                      ],
                      duration: 2000,                  
                      easing: 'linear',                        
                      loop: false
                })

                var Invis4 = anime({
                      targets: '.foot',                  
                      stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 0)'}                      
                      ],
                      fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 0)'}                        
                      ],
                      duration: 2000,                  
                      easing: 'linear',                        
                      loop: false
                })

                var morphing1 = anime({
                        targets: '#owl1', 
                        d: [
                            {value: 'M50,30 50,30 50,30 150,30 250,30 250,30 250,30 250,30 250,30 250,30 150,230 150,230 150,230 150,230 150,230 150,230 150,230 150,230 150,230 150,230 150,230 50,30 50,30 50,30 50,30 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing2 = anime({
                        targets: '#owl2', 
                        d: [
                            {value: 'M50,240 50,240 50,240 150,240 250,240 250,240 250,240 250,240 250,240 250,240 150,440 150,440 150,440 150,440 150,440 150,440 150,440 150,440 150,440 150,440 150,440 50,240 50,240 50,240 50,240 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing3 = anime({
                        targets: '#owl3', 
                        d: [
                            {value: 'M50,450 50,450 50,450 150,450 250,450 250,450 250,450 250,450 250,450 250,450 150,650 150,650 150,650 150,650 150,650 150,650 150,650 150,650 150,650 150,650 150,650 50,450 50,450 50,450 50,450 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });


                var morphing4 = anime({
                        targets: '#owl4', 
                        d: [
                            {value: 'M1340,30 1340,30 1340,30 1440,30 1540,30 1540,30 1540,30 1540,30 1540,30 1540,30 1440,230 1440,230 1440,230 1440,230 1440,230 1440,230 1440,230 1440,230 1440,230 1440,230 1440,230 1340,30 1340,30 1340,30 1340,30 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing5 = anime({
                        targets: '#owl5', 
                        d: [
                            {value: 'M1340,240 1340,240 1340,240 1440,240 1540,240 1540,240 1540,240 1540,240 1540,240 1540,240 1440,440 1440,440 1440,440 1440,440 1440,440 1440,440 1440,440 1440,440 1440,440 1440,440 1440,440 1340,240 1340,240 1340,240 1340,240 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing6 = anime({
                        targets: '#owl6', 
                        d: [
                            {value: 'M1340,450 1340,450 1340,450 1440,450 1540,450 1540,450 1540,450 1540,450 1540,450 1540,450 1440,650 1440,650 1440,650 1440,650 1440,650 1440,650 1440,650 1440,650 1440,650 1440,650 1440,650 1340,450 1340,450 1340,450 1340,450 z' }                    
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });


            });

/*---------------------------UNDO HOVER-------------------------------------------------------------------------------------------------*/

                image.addEventListener("mouseout", function(){                                                             
                var Invis1 = anime({
                      targets: '.eyewhite',                  
                      stroke: [{value:'rgba( <?php echo $red2 ?>, <?php echo $green2 ?>, <?php echo $blue2 ?>, 1)'}                      
                      ],
                      fill: [{value:'rgba( <?php echo $red2 ?>, <?php echo $green2 ?>, <?php echo $blue2 ?>, 1)'}                        
                      ],
                      duration: 2000,                  
                      easing: 'linear',                        
                      loop: false
                })

                var Invis2 = anime({
                      targets: '.eyeblack',                  
                      stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                      
                      ],
                      fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                      duration: 2000,                  
                      easing: 'linear',                        
                      loop: false
                })

                var Invis3 = anime({
                      targets: '.beak',                  
                      stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                      
                      ],
                      fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                      duration: 2000,                  
                      easing: 'linear',                        
                      loop: false
                })

                var Invis4 = anime({
                      targets: '.foot',                  
                      stroke: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                      
                      ],
                      fill: [{value:'rgba( <?php echo $red3 ?>, <?php echo $green3 ?>, <?php echo $blue3 ?>, 1)'}                        
                      ],
                      duration: 2000,                  
                      easing: 'linear',                        
                      loop: false
                })

                var morphing1back = anime({
                        targets: '#owl1', 
                        d: [
                            {value: 'M50,30 L90,65 C125,45 175,45 210,65 L250,30 230,80 C235,90 245,110 245,135 C245,200 225,200 220,205 C190,230 160,230 150,230 C140,230 110,230 80,205 C75,200 55,200 55,135 C55,110 65,90 70,80 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing2back = anime({
                        targets: '#owl2', 
                        d: [
                            {value: 'M50,240 L90,275 C125,255 175,255 210,275 L250,240 230,290 C235,300 245,320 245,345 C245,410 225,410 220,415 C190,440 160,440 150,440 C140,440 110,440 80,415 C75,410 55,410 55,345 C55,320 65,300 70,290 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing3back = anime({
                        targets: '#owl3', 
                        d: [
                            {value: 'M50,450 L90,485 C125,465 175,465 210,485 L250,450 230,500 C235,510 245,530 245,555 C245,620 225,620 220,625 C190,650 160,650 150,650 C140,650 110,650 80,625 C75,620 55,620 55,555 C55,530 65,510 70,500 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing4back = anime({
                        targets: '#owl4', 
                        d: [
                            {value: 'M1340,30 L1380,65 C1415,45 1465,45 1500,65 L1540,30 1520,80 C1525,90 1535,110 1535,135 C1535,200 1515,200 1510,205 C1480,230 1450,230 1440,230 C1430,230 1400,230 1370,205 C1365,200 1345,200 1345,135 C1345,110 1355,90 1360,80 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing5back = anime({
                        targets: '#owl5', 
                        d: [
                            {value: 'M1340,240 L1380,275 C1415,255 1465,255 1500,275 L1540,240 1520,290 C1525,300 1535,320 1535,345 C1535,410 1515,410 1510,415 C1480,440 1450,440 1440,440 C1440,440 1400,440 1370,415 C1365,410 1345,410 1345,345 C1345,320 1355,300 1360,290 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });

                var morphing6back = anime({
                        targets: '#owl6', 
                        d: [
                            {value: 'M1340,450 L1380,485 C1415,465 1465,465 1500,485 L1540,450 1520,500 C1525,510 1535,530 1535,555 C1535,620 1515,620 1510,625 C1480,650 1450,650 1440,650 C1430,650 1400,650 1370,625 C1365,620 1345,620 1345,555 C1345,530 1355,510 1360,500 z' }                           
			                                                   
                        ],
                        easing: 'easeInSine',
                        duration: 2000,                        
                        loop: false
                });
            });