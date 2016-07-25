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
                        <p>PreOwnedGowns.com FAQs</p>
                    </div>
                    <div id="main-frame-hiw">
                    	<p style="font-size: 12px;"><a href="#1" >Why do women sell their gowns?</a></p>
                        <p style="font-size: 12px;"><a href="#2" >How often is your site updated?</a></p>
                        <p style="font-size: 12px;"><a href="#3" >I really want this gown, but it is not listed!</a></p>
                        <p style="font-size: 12px;"><a href="#4" >What happens if I cannot reach the seller of a gown I'm interested in?</a></p>
                        <p style="font-size: 12px;"><a href="#5" >On average, how long does it take a gown to sell?</a></p>
                        <p style="font-size: 12px;"><a href="#6" >What does it cost to list a dress?</a></p>
                        <p style="font-size: 12px;"><a href="#9" >What does it cost to list an accessory?</a></p>
                        <p style="font-size: 12px;"><a href="#7" >How do I choose pictures for my listing?</a></p>
                        <p style="font-size: 12px;"><a href="#8" >What about a return policy?</a></p>
                        <p style="font-size: 12px;"><a href="#9" >What do I do when I have an interested buyer? </a></p><br /><br />
						
                        <p id="1"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Why do women sell their gowns?</span></p>
                        <p><span>Generally, a used gown in good condition is worth 50% of what was paid. Women want the experience of finding their own gowns, and less is wearing their family heirlooms. Selling your gown is a great way to pay off expenses, allowing you to enjoy your honeymoon more! </span></p><br />
                        
                        <p id="2"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">How often is your site updated?</span></p>
                        <p><span>We update our site hourly! </span></p><br />
                        
                        <p id="3"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">I really want this gown, but it is not listed!</span></p>
                        <p><span>PreOwnedGowns.com is dedicated to feature the most up to date and highest demanding gowns. If your dream gown is not listed, it may be listed soon. We have a Gown Alert that notifies you when a new dress is listed. </span></p><br />
                        
                        <p id="4"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">What happens if I cannot reach the seller of a gown I'm interested in?</span></p>
                        <p><span>If you've tried to reach a seller, but have not been able to make contact, please contact us. We will attempt to contact them ourselves. Please provide all the information in the contact us box.</span></p><br />
                        
                        <p id="5"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">On average, how long does it take a gown to sell?</span></p>
                        <p><span>The length of time required for a gown to sell depends on the demand. New and modern gowns may sell faster than older gowns. Size, style, designer, and price are all factors in how fast a gown may sell. Great pictures will help a gown sell faster!</span></p><br />

                        
                         <p id="6"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">What does it cost to list a dress?</span></p>
                        <p><span>It is $2 dollars to list a dress for one year. There are no added fees. There is no extra fee for pictures.</span></p><br />
                        <p id="6"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">What does it cost to list an accessory?</span></p>
                        <p><span>It is $1 dollars to list an accessory for one year. There are no added fees. There is no extra fee for pictures.</span></p><br />
                        
                        <p id="7"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">How do I choose pictures for my listing?</span></p>
                        <p><span>Pictures speak a thousand words. Pictures need to be clear and show detailing. The front, back, and sides should be shown. Added features should also be shown. Remember these gowns are for the most important day of someone’s life. They need to see EXACTLY what they are buying. Please keep in mind your images must be under 2mb, and the ideal dimensions are 498px wide by 725px tall.</span></p><br />
                        
                        <p id="7"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">How do I edit my listing?</span></p>
                        <p><span>There is an option to edit when you log into your account. By pressing the edit button you can submit a ticket saying what you want to edit and we will edit it for you. You can also tell us your listing sold and we will take it down for you. Make sure your item is really sold before contacting us to take your listing down. We ask you to submit a ticket in order to protect your listing from fraud. </span></p><br />
                        
                        <p id="8"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">What about a return policy?</span></p>
                        <p><span>Offering a return policy is recommended, but completely up to the seller. By offering a return policy, buyers feel more confident in purchasing. There are certain things you can do to protect yourself from deceptive buyers:</span></p><br />
                        
                        <ul>
                        <li style="margin-left: 15px;">Offer a limited time return policy. You can make the policy as limited as 24 hours.</li><br />
                        <li style="margin-left: 15px;">Offer a 5% penalty. On a $2,000 gown, that is enough to reimburse you for cleaning, shipping, and insurance. </li>
                        </ul><br />
                        
                        <p id="9"><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">What do I do when I have an interested buyer? </span></p>
                        <p><span>If the buyer agrees to the terms of your gown, you are able to send them an invoice from a secure website such as PayPal. </span></p><br />
                        <p><span>It is important to be precise and accurate. All details need to be discussed honestly. PreOwnedGowns.com is not involved or liable in any transaction. Please do not ship a gown until all funds has been transferred into your account. </span></p><br />
                        
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