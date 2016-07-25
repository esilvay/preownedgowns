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
                        <p>Recommended Payment</p>
                    </div>
                    <div id="main-frame-hiw">
						<p>PreOwnedGowns.com recommends that buyers and sellers use Escrow.com for transactions.  Here’s why.</p><br />
                        
                        <p>Simply put, escrow.com acts as an intermediary within the transaction process. And offers protection for both sides.</p><br />
                        
                        <p>The Escrow.com (an accredited escrow company) process works like this:</p>
                        <ul>
                        <li>Buyer and Seller Agree to Terms: Both parties agree to terms of the transaction, which includes a description of the merchandise, sale price, number of days for the Buyer’s inspection, and any shipping information.</li>
                        
                        <li>Buyer Pays Escrow.com: The Buyer submits an available payment option. Escrow.com verifies the payment.</li>
                        
                        <li>Seller Ships Merchandise: Upon payment verification, the Seller is authorized to ship merchandise and submit tracking information. Escrow.com verifies that the Buyer receives the shipment.</li>
                        <li>Buyer Accepts the Merchandise: The Buyer has a set number of days for an inspection and the option to accept or reject the merchandise.</li>
                        
                        <li>Escrow.com Pays the Seller: Escrow.com pays the Seller by the method selected by the Seller. The transaction is complete.</li>
						</ul><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">How Buyers are Protected:</span></p><br />
                        
                        <ul>
                        <li>Escrow.com tracks the shipped merchandise and verifies it was delivered (assuring the wedding dress will ship before the seller receives the money).</li>
                        
                        <li>The Seller isn’t paid until the Buyer accepts the merchandise, or the inspection period expires (assuring that the item is as described).</li>
                        </ul><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">How Sellers are Protected:</span></p><br />
                        
                        <ul>
                        <li>Escrow.com confirms when the Buyer receives merchandise.</li>
                        
                        <li>The Seller is authorized to ship only after Escrow.com verifies good funds (assuring the seller will get her money).</li>
                        </ul>
                        <p>Know that for wedding dress purchases, Escrow.com requires that the buyer pay via a wire transfer (essentially a transfer from your bank account to them) or check. They do not accept not paypal or credit cards.</p><br />
                        
                        <p><span style="color: #5FC9EC; font-family:Georgia; font-size:18px; font-weight:bold;">Why We Recommend Escrow.com over Paypal</span></p><br />
                        
                        <p>Paypal offers its best protection for ebay purchases.  Ebay purchases are protected under the Paypal Buyer Protection Policy. But non- ebay purchases are protected only under the Paypal Buyer Complaint Policy.</p><br />
                        
                        <p>Under the Paypal Buyer Complaint Policy, Paypal generally will make a ruling for item not received. But generally will not make a ruling for an item not as described.</p><br />
                        <p>And</p><br />
                        
                        <p>Even if paypal does rule in your favor, if the seller has already transferred the funds from her account, paypal will not be able to return your money.</p><br />
                        
                        <p>So essentially, Paypal does provide a fast, safe, and secure transfer of funds, but it does offer any meaningful buyer protection.</p><br />
                        
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