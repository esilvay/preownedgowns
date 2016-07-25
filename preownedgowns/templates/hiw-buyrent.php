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
                	<?php include("includes/hiw-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-msi">
                        <p>Wedding Gown Rental VS. PreOwnedGowns Purchase</p>
                    </div>
                    <div id="main-frame-hiw">
						<p>If you are considering renting a wedding dress to save money, consider buying a preowned gown instead. Buying preowned can actually be less expensive than renting (it’s true!) And there are many other benefits as well.</p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Wedding Dress Rental</span></p>
                        
                        <p>Wedding dress rentals typically range from $250 - $600. Gowns are often only delivered 1-3 days before the wedding, and usually must be returned 1 day after. A damage deposit of $200+ may also be required.</p><br />
                        
                        <p>Additionally, wedding dress rental stock is limited, only minimal alterations are allowed, and the gown may have already been worn multiple times.</p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Buying a PreOwned Gown</span></p>
                        
                        <p>If you buy your dress, not only will you have a larger selection of gowns to choose from, you will not have any time restrictions, and can alter it for a perfect fit.</p><br />
                        
                        <p>And, shudder the thought, if your groom’s crazy college roommate accidentally spills red wine on your dress, you will not face additional fees.</p>
                        
                    </div>
                    
                    <?php include("includes/seals.php"); ?>
                    <?php include("includes/ads.php"); ?>
                </div>
                	<div class="clear"></div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>