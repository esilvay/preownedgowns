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
                        <p>Selling Safely</p>
                    </div>
                    <div id="main-frame-hiw">
                    <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Two Important Rules</span></p>
						<p>Whenever you sell anything online, on any site, you should follow to important rules:</p><br />
                        <ul>
                        <li style="margin-left: 15px;">Never ship your item until full payment is received</li>
                        <li style="margin-left: 15px;">Only use a secure service like PayPal for payment</li>
                        </ul><br />
                        
                        <p>Following these two important rules will help ensure you sell your item safely. It will also ensure you do not fall victim to the scam attempts. Please make sure you are dealing with a direct Paypal page, and not a copy of one. Contact us if you are unsure.</p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Common Online Scams</span></p>
                        <p>The most popular scam is a "buyer" who wants to pay with a check in an amount higher than the sale price. He then asks you to cash the check, and forward the dress and the additional funds to him. The check used is counterfeit and will bounce - even if it clears your bank originally. You will then be held responsible for the funds by your bank.</p><br />
                        <p>These emails are recognized by a few common characteristics:</p><br />
                        
                        <ul>
                        <li style="margin-left: 15px;">Typically (but not always) sent from abroad</li>
                        <li style="margin-left: 15px;">Use of poor grammar and spelling</li>
                        <li style="margin-left: 15px;">Indicates urgency in purchasing your dress, but does not ask any specific questions about the dress other than price and how payment can be made</li>
                        <li style="margin-left: 15px;">Want to make payment via cashier's check, wire transfer or money order and want to use a shipper/ third party for sending the dress</li>
                        </ul><br />
                        
                        <p>The clearest way to identify the scam is via the excess payment and the use of a third party shipper. And usually the buyer seems interested in the purchase/price and a fast transaction, but does not ask specific questions about the item itself.</p><br />
                        
                        <p>If you ever receive an excess payment, you should NOT follow through with your transaction.</p><br />
                        
                        <p>PreOwnedGowns.com filters buyer emails to help prevent scams inquiries from ever reaching you. PLEASE CONTACT US IF YOU ARE UNSURE</p><br />
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