<?PHP
session_start();

include('connect.php'); 
$id = mysql_real_escape_string($_REQUEST['id']);
$result = mysql_query("SELECT * FROM accessories WHERE ID=$id");
$result = mysql_fetch_assoc($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="css/basic.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/galleriffic-2.css" type="text/css" />

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo 'PreOwnedGowns.com offers top designer gowns at rock bottom prices, check out this '.$result['AccessoryType'].' only at PreOwnedGowns.com';?>"/>

<title><?php echo ''.$result['AccessoryType'].' | Accessory | New &amp; Used | Sample Gowns &amp; Dresses | PreOwnedGowns.com';?> </title>

<?php include("includes/head.php"); ?>

<script type="text/javascript">
// perform JavaScript after the document is scriptable.
$(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	$("ul.tabs").tabs("div.panes > div");
	$('#contact-seller-holder a').nyroModal({
		  debug: false, // Show the debug in the background
		  blocker: false, // Element which will be blocked by the modal
		  windowResize: true, // indicates if the modal should resize when the window is resized
		  modal: true, // Esc key or click backgrdound enabling or not
		  type: 'form', // nyroModal type (form, formData, iframe, image, etc...)
		  forceType: null, // Used to force the type
		  from: '', // Dom object where the call come from
		  hash: '', // Eventual hash in the url
		  processHandler: null, // Handler just before the real process
		  selIndicator: 'nyroModalSel', // Value added when a form or Ajax is sent with a filter content
		  formIndicator: 'nyroModal', // Value added when a form is sent
		  ajax: {}, // Ajax option (url, data, type, success will be overwritten for a form, url and success only for an ajax call)
		  handleError: null
		});

});
</script>
<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15780110-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	<div id="main">
    	<div id="top-holder">
    		<?php include("includes/heading.php"); ?>
            
            <div class="clear"></div>
            <?php include("includes/nav.php"); ?>
            <?php
           		
				$accesstype = $result['AccessoryType'];
				$a = $result['AskingPrice'];
				$afinal = number_format($a, 0, '.', ',');
			?>							   
        </div>
        
        <div id="main_body">
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-gr">
                	<!--<div class="left-heading-m">
                        <p>Information</p>
                    </div>-->
                    <?php
                    echo '<div class="dress-content">';
						echo '<p><strong><span>Listing #:</span></strong> '.$result['ID'].'</p><br />';
                        echo '<p><strong><span>Type:</span></strong> '.$result['AccessoryType'].'</p>';
						
						if($accesstype == 'Jewelry'){
							//if Jewelry
                        echo '<p><strong><span>Jewelry Type:</span></strong> '.$result['JewelryType'].'</p>';
                        echo '<p><strong><span>Condition:</span></strong> '.$result['JewelryCondition'].'</p>';
						echo '<br />';
						}
						elseif($accesstype == 'Wrap/Jacket/Shaw'){
							//if Warp
						echo '<p><strong><span>Wrap/Jacket/Shaw:</span></strong> '.$result['WrapJacketShaw'].'</p>';
                        echo '<p><strong><span>Length:</span></strong> '.$result['WrapLegnth'].'</p>';
						echo '<p><strong><span>Condition:</span></strong> '.$result['WrapCondition'].'</p>';
						echo '<br />';
						}
						elseif($accesstype == 'Shoes'){
						
							//if Shoes
						echo '<p><strong><span>Color:</span></strong> '.$result['ShoeColor'].'</p>';
                        echo '<p><strong><span>Size:</span></strong> '.$result['ShoeSize'].'</p>';
						echo '<p><strong><span>Condition:</span></strong> '.$result['ShoeCondition'].'</p>';
						echo '<br />';
						}
						elseif($accesstype == 'Veil'){
							//if Veil
						echo '<p><strong><span>Color:</span></strong> '.$result['VeilColor'].'</p>';
                        echo '<p><strong><span>Length:</span></strong> '.$result['VeilLength'].'</p>';
						echo '<p><strong><span>Condition:</span></strong> '.$result['VeilCondition'].'</p>';
						echo '<br />';
						}
						elseif($accesstype == 'Sash/Belt'){
							//if Sash
						echo '<p><strong><span>Color:</span></strong> '.$result['SashColor'].'</p>';
						echo '<p><strong><span>Condition:</span></strong> '.$result['SashCondition'].'</p>';
						echo '<br />';
						}
						elseif($accesstype == 'Crinoline/Slip'){
							//if Slip
						echo '<p><strong><span>Color:</span></strong> '.$result['SlipColor'].'</p>';
						echo '<p><strong><span>Size:</span></strong> '.$result['SlipSize'].'</p>';
						echo '<p><strong><span>Condition:</span></strong> '.$result['SlipCondition'].'</p>';
						echo '<br />';
						}
						elseif($accesstype == 'Tiara/Hair'){
							//if Tiara
						echo '<p><strong><span>Condition:</span></strong> '.$result['TiaraCondition'].'</p>';
						echo '<br />';
						}
						elseif($accesstype == 'Purse'){
							//if Purse
						echo '<p><strong><span>Color:</span></strong> '.$result['PurseColor'].'</p>';
						echo '<p><strong><span>Condition:</span></strong> '.$result['PurseCondition'].'</p>';
						echo '<br />';
						}
						
						echo '<p><strong><span>Asking Price:</span></strong> $'.$afinal.'</p>';
						echo '<br />';
                        echo '<p><strong><span>Seller Is:</span></strong> '.$result['TypeofSeller'].'</p>';
                        echo '<p><strong><span>Original Owner:</span></strong> '.$result['OriginalOwner'].'</p>';
                        echo '<p><strong><span>Has Receipt:</span></strong> '.$result['OriginalReceipt'].'</p><br />';
                    echo '</div>';
					echo '<br />';
					echo '<a href="#contact-seller-holder" class="nyroModal"><img src="/images/contact-seller.png" alt="Contact PreOwnedGowns Seller" style="border:none;"/></a>';
					echo '<br />';
                        echo '<div class="clear"></div>';
                echo '</div>';
                echo '<div id="right-column-gr">';
                    echo '<div id="right-heading-msi-bl">';
						echo '<p>'.$result['AccessoryType'].' | $'.$afinal.'</p>';
                    echo '</div>';
							echo '<div id="main-frame">';
								echo '<div id="gallery" class="content-image">';
										echo '<div class="slideshow-container">';
											echo '<div id="loading" class="loader"></div>';
											echo '<div id="slideshow" class="slideshow"></div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
							
							//Thumbnails begin here
                    	echo '<div id="thumb-side-bar" >';
							echo '<div id="thumbs" class="navigation">';
								echo '<ul class="thumbs noscript">';
									echo '<li>';
									echo '<a href="/assets/listimg/'.$result['Image1'].'" class="thumb"><img src="/assets/listimg/'.$result['Image1'].'" style="width:50px; border: none;"/></a>', '<br />', '<br />';
									echo '</li>';
									echo '<li>';
									echo '<a href="/assets/listimg/'.$result['Image2'].'" class="thumb"><img src="/assets/listimg/'.$result['Image2'].'" style="width:50px; border: none;"/></a>', '<br />', '<br />';
									echo '</li>';
									echo '<li>';
									echo '<a href="/assets/listimg/'.$result['Image3'].'" class="thumb"><img src="/assets/listimg/'.$result['Image3'].'" style="width:50px; border: none;"/></a>', '<br />', '<br />';
									echo '</li>';
									echo '<li>';
								echo '</ul>';
							echo '</div>';
                    	echo '</div>';
                echo '</div>';
                	echo '<div class="clear"></div>';
					echo '<div class="v-spacer1"></div>';
                echo '<div id="img_scroller">';
                	echo '<div id="featured-scroller">';
                        echo '<div id="holder-item">';
                                echo '<ul class="tabs">';
                                    echo '<li><a href="#">Details</a></li>';
                                    echo '<li><a href="#">Sale Details</a></li>';
                                echo '</ul>';
                                echo '<div class="panes">';
                                    echo '<div class="pannels">';
                                        //echo '<p><strong><span>Accessory Details:</span></strong> '.$result['AccessDescr'].'</p><br />';
										$file = $_SERVER['DOCUMENT_ROOT'] . "/assets/listtxt/".$result['AccessDescr']; //Path to your *.txt file
										$contents = file($file);
										$ad = implode($contents);
										$adtext = str_replace('\r\n', '<br />', $ad);
										$adtext = htmlspecialchars(str_replace('\\', '', $ad), ENT_QUOTES);
										
										echo '<p><strong><span>Accessory Details:</span></strong> '.$adtext.'</p><br />';
										
                                    echo '</div>';
                                    echo '<div class="pannels">';
										echo '<p><strong><span>Terms of Sale:</span></strong> '.$result['SaleTerms'].'</p><br />';
										echo '<p><strong><span>Location:</span></strong> '.$result['State'].'</p><br />';
										echo '<p><strong><span>Will Ship To:</span></strong> '.$result['WillShip'].'</p><br />';
										echo '<p><strong><span>Shipping Costs:</span></strong> '.$result['ShippingCost'].'</p><br />';
										echo '<p><strong><span>Accepted Payments:</span></strong> '.$result['AcceptPayment'].'</p><br />';
                                    echo '</div>';
                        echo '</div>';
                   echo '</div>';
            	echo '</div>';

							$accesstype = $result['AccessoryType'];
							$result1 = mysql_query("SELECT * FROM accessories WHERE AccessoryType='$accesstype' ORDER BY RAND() LIMIT 2");
							
						echo '<div id="similar-items">';
							echo '<div class="right-heading-m">';
								echo '<p>Similar Accessories</p>';
								echo '</div>';
								echo '<div class="clear"></div>';
								echo '<div id="rec-holder"';

								while($row = mysql_fetch_assoc($result1)){
									$aa = $row['AskingPrice'];
									$aafinal = number_format($aa, 0, '.', ',');
									//foreach($results as $result)
									echo '<div class="item-box-recommend">';
									echo '<div class="sale-item-list">';
										echo '<div class="img-holder-list">';
											echo '<a href="/accessories/look?accessory='.$row['AccessoryType'].'&id='.$row['ID'].'"><img src="/assets/listimg/'.$row['Image1'].'" style="width:166px; height:200px; border: none;"/></a>';	
										echo '<div class="title-holder-list">';
											echo $row ['AccessoryType'], '<br />';
										echo '</div>';
										echo '<div class="gown-style-list">';
											//echo $row ['StyleNumber'];
										echo '</div>';
										echo '<div class="condition-holder-list">';
											//echo $row ['GownCondition'];
										echo '</div>';
										echo '<div class="gown-size-list">';
											//echo 'Size ', $row ['Labelsize'];
										echo '</div>';
										echo '<div class="price-holder-list">';
											echo '<a href="/accessories/look?accessory='.$row['AccessoryType'].'&id='.$row['ID'].'">$ '.$aafinal.'</a>';
										echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									
								}
								echo '</div>';
							echo '</div>';
						echo '</div>';
              echo '</div><div class="clear"></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    include("includes/footer.php");
?>
<div id="contact-seller-holder" style="display: none; width: 600px;">
<br />
    <form id="contact-seller" action="/assets/scripts/contact-seller-a.php" method="post" class="nyroModal" >

       <p><span>Name:</span> <input type="text" name="name" value=""/></p><br />
       <p><span>Email:</span> <input type="text" name="inquiryemail" value=""</p><br />
       <p><span>Message:</span> <textarea id="message" name="message" rows="6" cols="30"></textarea></p><br />
       <p><span>Security Code:</span><input id="security_code" name="security_code" type="text" /></p><br />
        <p style="margin-left: 150px;"><span><img src="/assets/scripts/CaptchaSecurityImages.php?width=100&height=40&characters=5" alt="captcha" /></span></p>
        
        <input type="hidden" name="listingid" value="<?php echo ''.$result['ID'].'';?>" />
        <input type="hidden" name="form_submitted" value="1"/>
        <input id="submit-c" type="submit" value=" " />
    </form>
</div>
<?php
	mysql_close($conn);
?>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '60px', 'float' : 'left'});
				$('div.content-image').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 5,
					preloadAhead:              5,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>
</body>
</html>
<?php
	if(isset($_SESSION['model'])) unset($_SESSION['model']);
?>