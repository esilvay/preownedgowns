<?PHP
session_start();
include('connect.php');
$tableName="gowns";
$limit = 4; 

$query = "SELECT COUNT(*) as num FROM $tableName";
$total_pages = mysql_fetch_array(mysql_query($query));
$total_pages = $total_pages['num'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="canonical" href="http://www.preownedgowns.com" />
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
        	<div id="img_scroller">
            <?php include("includes/banner.php"); ?>
            </div>
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column">
                    <div id="buy-a-dress">
                        <div class="inner">
                            <a title="Buy a Wedding Gown" href="/gowns"><span>Buy A Gown</span></a><br /><br />
                            <p style="font-size: 12px;">Find the wedding gown your dream wedding gown!</p><br />
                            <a title="Check out the Wedding Gowns" href="/gowns">Take a Look »</a>
                        </div>
                    </div>
                    <br />
                    <div id="sell-a-dress">
                        <div class="inner">
                        	<?php
								if (isset($_SESSION['is_logged_in'])) {
									echo '<a title="Sell a Wedding Gown" href="/member/gownlisting"><span>Sell A Gown</span></a><br /><br />';
								}
								else{
									echo '<a title="Sell a Wedding Gown" href="/login"><span>Sell A Gown</span></a><br /><br />';
								}
							?>
                            <p style="font-size: 12px;">More brides are turning to POG everyday. <a title="Learn about POG" href="/howitworks"><i>Learn Why</i></a></p><br />
                            <?php
								if (isset($_SESSION['is_logged_in'])) {
									echo '<a title="List a Wedding Gown" href="/member/gownlisting">Sell a Gown »</a>';
								}
								else{
									echo '<a title="List a Wedding Gown" href="/login">Sell a Gown »</a>';
								}
							?>
                        </div>
                    </div>
                </div>
                <div id="right-column">
                    <div id="right-heading">
                        <p>FREE Wedding Gown Listings &amp; FREE Accessory Listings! <!--<span style="float: right;"> echo "$total_pages Gowns"</span>--></p>
                    </div>
                    <p><span>Be one of the first people to list your new or used wedding gown, bridal dress, bridesmaid dress, prom dress or evening wear on our website. Take advantage of the new FREE listing rate on wedding gowns and FREE wedding accessory listings. <br /> <br /> On PreOwnedGowns.com we make your wedding gown dreams come true. Our wedding gown website features remarkable designer wedding gowns at economical prices. <br /><br /> Find the wedding gown or bridal dress, bridesmaid dress, prom dress, or evening wear you fantasize about by searching through the most up to date designers and styles. PreOwnedGowns.com is dedicated to achieving happy wedding gown sellers and wedding gown happy buyers. We feature wedding gowns and wedding accessories not only for your wedding day but for every extravagant event in your life. Your wonderful day is just a wedding gown away.</span></p><br />
                    <?php
						if (isset($_SESSION['is_logged_in'])) {
							echo '<a href="/member"><span style="font-weight: bold; float: right; font-size: 16px;">Get Started Today! »</span></a>';
						}
						else{
							echo '<a title="Get Started Today" href="/login"><span style="font-weight: bold; float: right; font-size: 16px;">Get Started Today! »</span></a>';
						}
					?>
                    
                </div>
                <div class="clear"></div>
                
                <div id="featured-gowns">
                <?php
				$query1 = "SELECT * FROM $tableName ORDER BY ID DESC LIMIT $limit";
				$result = mysql_query($query1);
				
					echo '<div id="img_scroller-f">';
						echo '<div class="left-heading-s">';
							echo '<p>Most Recent Wedding Dress</p>';
						echo '</div>';
                        echo '<div id="holder-item-front">';
						while($row = mysql_fetch_array($result)){
							$aa = $row['AskingPrice'];
							$aafinal = number_format($aa, 0, '.', ',');
								echo '<div class="item-box-list-f" style="border: none;">';
								echo '<div class="sale-item-front" style="border:1px solid #CCCCCC;">';
									echo '<div class="img-holder-list" style="border: none;">';
									echo '<a href="/gowns/look?designer='.$row['Designer'].'&id='.$row['ID'].'"><img src="/assets/listimg/'.$row['Image1'].'" style="width:166px; height:200px; border: none;"/></a>';
									echo '</div>';
									echo '<div class="title-holder-list" style="border:none;">';
										echo $row ['Designer'], '<br />';
									echo '</div>';
									echo '<div class="gown-style-list" style="border:none;">';
										echo $row ['StyleNumber'];
									echo '</div>';
									echo '<div class="condition-holder-list" style="border:none;">';
										echo $row ['GownCondition'];
									echo '</div>';
									echo '<div class="gown-size-list" style="border:none;">';
										echo 'Size ', $row ['Labelsize'];
									echo '</div>';
									echo '<div class="price-holder-list" style="border:none;">';
										echo '<a href="/gowns/look?designer='.$row['Designer'].'&id='.$row['ID'].'">$ '.$aafinal.'</a>';
									echo '</div>';
								echo '</div>';
								echo '</div>';
								
							}
					echo '<div class="clear"></div>';
						echo '</div>';
                    echo '</div>';
                ?>    
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>