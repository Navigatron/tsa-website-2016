<?php 
/****************************************************
#####################################################
##-------------------------------------------------##
##                 COVERLINE BLACK                 ##
##-------------------------------------------------##
## Copyright = globbersthemes.com- 2013            ##
## Date      = MARS 2014                           ##                     
## Author    = globbers                            ##
## Websites  = http://www.globbersthemes.com       ##
##                                                 ##
#####################################################
****************************************************/

defined('_JEXEC') or die('Restricted access');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<jdoc:include type="head" />
	<?php JHtml::_('behavior.framework', true);
	$app = JFactory::getApplication();	
     $csite_name	= $app->getCfg('sitename');
	 $path = $this->baseurl.'/templates/'.$this->template;
	?>

	<?php 
     $mod_right = $this->countModules( 'position-7' );
     if ( $mod_right ) { $width = '';
    } else { $width = '-full';}
     ?>
	 
	<?php 
        $image1	=	htmlspecialchars($this->params->get('bodybackground'));
		$sitename = $this->params->get("sitename", "coverline"); 
        $sloganweb = $this->params->get("sloganweb", "pro template for your website"); 	
    ?>
	 
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/defaut.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomlastyle.css" type="text/css" />
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script> 
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/nivo.slider.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/superfish.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>
	
	<link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Copse:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>  
	
	<script type="text/javascript">      
      var $j = jQuery.noConflict();       
      jQuery(document).ready(function ($){   
     $j("#slider").nivoSlider(          
         {effect: "sliceUpDown",            
 slices: 15,           
 boxCols: 8,         
 boxRows: 4,         
 animSpeed: 1000,    
 pauseTime: 5000,   
 captionOpacity: 1      
 }); });          
 </script>		
 
	

	<script type="text/javascript">	
	 var $j = jQuery.noConflict(); 
	$j(document).ready(function() {	        
	$j(' .navigation ul ').superfish({		         
	delay:       500,                            		        
	animation:   {opacity:'show',height:'show'},  		        
	speed:       'slow',                          		        
	autoArrows:  false,                           		        
	dropShadows: false                            	           
	});	      
	});        
	</script> 
	
	
	<script type="text/javascript">
	 var $j = jQuery.noConflict(); 
	$j(document).ready(function(){  
/* background resizable */     
function redimensionnement(){ 
    var image_width = $j('#background img').width();  
    var image_height = $j('#background img').height();      
    var over = image_width / image_height;  
    var under = image_height / image_width;  
    var body_width = $j(window).width();  
    var body_height = $j(window).height();  
    if (body_width / body_height >= over) {  
      $j('#background img').css({  
        'width': body_width + 'px',  
        'height': Math.ceil(under * body_width) + 'px',  
        'left': '0px',  
        'top': Math.abs((under * body_width) - body_height) / -2 + 'px'  
      });  
    }   
      
    else {  
      $j('background img').css({  
        'width': Math.ceil(over * body_height) + 'px',  
        'height': body_height + 'px',  
        'top': '0px',  
        'left': Math.abs((over * body_height) - body_width) / -2 + 'px'  
      });  
    }  
}  
          
    redimensionnement(); //onload  
    $j(window).resize(function(){  
        redimensionnement();  
    });  
  
});  

</script>


	</head>
<body> 
 <div id="background"> 
    <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($image1); ?>" alt="image1" />	
 </div>
     <div id="header">
	    <div id="top-h">
		    <div class="pagewidth">
			    <div id="top-t">
		            <div id="sitename">          	                     				                            
				        <?php echo $sitename ?>                                             
			         </div>
				</div>
				    <div id="top-c">
			            <div id="sloganweb">
						    <?php echo $sloganweb ?> 
			            </div>
					</div>
					    <div id="topmenu">
                	        <div class="navigation">          	                     				                            
						        <jdoc:include type="modules" name="position-1" />                                               
					        </div>
                        </div>					
			</div>    
		</div>
	 </div>
	    <?php $menu = JSite::getMenu(); ?>                
	    <?php $lang = JFactory::getLanguage(); ?>                
		<?php if ($menu->getActive() == $menu->getDefault($lang->getTag())) { ?>                
		<?php if ($this->params->get( 'slidedisable' )) : ?>   <?php include "slideshow.php"; ?><?php endif; ?>                
		<?php } ?>
		
		<div class="pagewidth">
			<div id="content">
                 <div id="main<?php echo $width ?>">				                                                               
     			     <jdoc:include type="component" />
                </div>
				    <div id="right">
	                    <jdoc:include type="modules" name="position-7" style="xhtml" />
	                </div>	
		    </div>
		</div>
		    <div id="ft">
			    <div class="pagewidth">
				    <div class="ftbl">
			            <?php echo date( 'Y' ); ?>&nbsp; <?php echo $csite_name; ?>&nbsp;&nbsp;<?php require("template.php"); ?>
                    </div>
                    <div id="top">
                        <div class="top_button">
                            <a href="#" onclick="scrollToTop();return false;">
                            <img src="templates/<?php echo $this->template ?>/images/top.jpg" width="30" height="30" alt="top" /></a>
                        </div>
                    </div>
			    </div>
			</div>
</body>
</html>