<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">

// perform JavaScript after the document is scriptable.
$(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	$("ul.tabs").tabs("div.panes > div");
});
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
        </div>
        
        <div id="main_body">
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-m">
                	<?php include("includes/gen-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-msi">
                        <p>PreOwnedGowns Sitemap</p>
                    </div>
                    <div id="main-frame-hiw">
                    <div style="float: left; width: 300px;">
                    <p><span>How it Works</span></p><br />
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks" >About POG</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/sizingguide" >Street Sizing Guide</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/gowns101" >Gowns 101</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/gowncleaning" >Gown Cleaning</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/onlinetransactiontips" >Online Transaction Tips</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/testimonials" >Testimonials</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/faqs" >FAQs</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/sellwithpog" >Why SELL with POG</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/member" >Sell a Gown</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/optimizelisting" >Optimize a Listing</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/managelisting" >Managing a Listing</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/sellingsafety" >Selling Safely</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/buywithpog" >Why BUY with POG</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/searchgown" >Search for a Gown</a></p>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="/howitworks/contactseller" >Contacting a Seller</a></p>
                    </div>
                    <div style="float: left; width: 300px;">
         
                    <p><span>General Information</span></p><br />
                    		<p style="margin-left: 25px; font-size: 12px;"><a href="/contact" >Contact Us</a><br />
                   			<p style="margin-left: 25px; font-size: 12px;"><a href="" >Privacy Policy</a>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="" >Terms &amp; Conditions </a>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="" >Advertise With Us</a>
                            <p style="margin-left: 25px; font-size: 12px;"><a href="" >Copyright Notices</a>
                    
                    </div>
                    
                    <div class="clear"></div>
                    <br />
                    <p><span><a href="/gowns">Gowns</a></span></p><br />
						<?php
							include('connect.php');
							$query = mysql_query ( "SELECT * FROM gowns ORDER BY GownType DESC" );
							$row = mysql_fetch_assoc ( $query );
						?>
						<?php
							############# BEGIN LOOP ############
							do {
							
							$link = '<a href="http://www.preownedgowns.com/gowns/look?Designer='.$row['Designer'].'&id='.$row['ID'].'">'.$row['GownType'].' '.$row['Designer'].' '.$row['StyleNumber'].' '.$row['GownCondition'].' Size '.$row['Labelsize'].'</a> <br />';
							
						?>		
								<?php echo '<li style="margin-left: 25px; font-size: 12px;">'.$link.'</li>'; ?>
						<?php
							} while ( $row = mysql_fetch_assoc ( $query ) );
							############# END LOOP ############
						?>
						<?php
							mysql_close($conn);
						?>
                        <br />
                        <br />
                        
                        <p><span><a href="/accessories">Accessories</a></span></p><br />
						<?php
							include('connect.php');
							$query = mysql_query ( "SELECT * FROM accessories ORDER BY ID DESC" );
							$row = mysql_fetch_assoc ( $query );
						?>
						<?php
							############# BEGIN LOOP ############
							do {
							
							$link = '<a href="http://www.preownedgowns.com/accessories/look?accessory='.$row['AccessoryType'].'&id='.$row['ID'].'">'.$row['AccessoryType'].'</a> <br />';
							
						?>		
								<?php echo '<li style="margin-left: 25px; font-size: 12px;">'.$link.'</li>'; ?>
						<?php
							} while ( $row = mysql_fetch_assoc ( $query ) );
							############# END LOOP ############
						?>
						<?php
							mysql_close($conn);
						?>

                       
                    </div>
                    <?php include("includes/seals.php"); ?>
                    
                </div><div class="clear"></div>
            </div>
            <?php include("includes/ads2.php"); ?>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>