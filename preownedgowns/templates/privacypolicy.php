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
                        <p>Privacy Policy</p>
                    </div>
                    <div id="main-frame-hiw">
<p>PreOwnedGowns.com (“we, us or our”) specializes in connecting sellers and buyers of wedding dresses (the “Business”).  In conducting the Business, we may collect Personal Information about sellers and buyers (collectively, “Customers”), but we only collect Personal Information that you submit voluntarily when you provide your name, address and any other contact information.</p><br />

<p>We collect Personal Information to assist in selecting and delivering the products, promotions, offers, publications, events, opportunities, invitations and updates (collectively, “Offerings”) most suited to our Customers.  For example, we add Customers’ names and contact information to our mailing list to inform them of Offerings that may interest them. </p><br />

<p>By providing us with your Personal Information, you consent to the collection and use of such information in accordance with this Privacy Policy.</p><br />

<p>We may use Personal Information: to provide Offerings; and other Customer contact and service; to manage and develop the Business; to learn about the needs of Customers, to develop and deliver Offerings tailored to those needs and to communicate with Customers about Offerings; to follow up on Customer comments and suggestions; and to report illegal, unethical or other serious or unacceptable Customer misconduct.  From time to time, we may use Personal Information for new, unanticipated uses not previously disclosed in this Privacy Policy.  We will only disclose Personal Information of a Customer to third parties with the express consent of such Customer, or as required or authorized by law.</p><br />

<p>Some Customers may enjoy a series of Offerings over a period of months or years, and it can be useful for their Personal Information to be kept on file.  We therefore retain a Customer’s Personal Information for up to two years after their last contact with us.  Inactive Customer files are destroyed after two years, unless we receive a request to destroy it earlier.</p><br />

<p>Since we use a person’s Personal Information to provide him or her with Offerings, it is important that such information be accurate.  If any of your information is not accurate, please let us know so that we can make any necessary changes.  We use appropriate security measures to protect against loss, theft, unauthorized access, disclosure, use or modification of Personal Information.  Customers should be aware, however, that we cannot ensure the security of Personal Information transmitted by regular email.</p><br />

<p>Google places interest-based advertisements “Google Ads” on our website.  When you visit our website and view or click on a Google Ad, a cookie may be dropped on your Internet browser. This cookie will gather data about your visits to this and other websites that will be used to select other ads about goods and services of interest to you.  You may opt out of the use of the cookie by visiting the Google ad and content network privacy policy.</p><br />

<p>Our website may contain links to other sites which are not governed by this Privacy Policy.  On our website, as with most other commercial websites, we may monitor traffic patterns, site usage and related site information in order to optimize our web service.  We may provide aggregated information to third parties, but these statistics do not include any identifiable Personal Information.</p><br />

<p>As part of our regular review of all of our policies and procedures, we may change this Privacy Policy from time to time.  If you have any questions or concerns, wish to access your Personal Information or wish to change your preferences regarding our use of your information, please let us know via our contact us form.</p><br />
                       
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