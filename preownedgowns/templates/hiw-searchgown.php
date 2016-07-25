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
                        <p>Searching for a Wedding Gown</p>
                    </div>
                    <div id="main-frame-hiw">
						<p>PreOwnedGowns.com wants you to be ecstatic on your special day. We offer a dependable search ranging from designers, styles, prices, and sizes. Our goal is to make everyone’s dreams come true. </p><br />
                        
                        <p>When you find a dress you’d like to purchase, besides following your gut, here is what we recommend:</p><br />
                        
                        <ul>
                        <li style="margin-left: 15px;">Do research! Know what the gown is selling for retail so you know how much of a discount you are getting</li>
                        
                        <li style="margin-left: 15px;">Ask questions! Ask for details! Ask for a complete disclosure!</li>
                        
                        <li style="margin-left: 15px;">Confirm that the gown is authentic to the designer and not a knock off. Look for labels, certificates of authenticity, and receipts</li>
                        
                        <li style="margin-left: 15px;">Ask for a receipt if possible!</li>
                        
                        <li style="margin-left: 15px;">Protect yourself during the money exchange. Paypal offers protection for buyers and sellers. Do not accept money orders or checks! </li>
                        </ul><br />
                        
                        <p>Ultimately, it comes down to trusting your instincts, being smart, and protecting yourself whenever and whatever you buy online.</p><br />
                        
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