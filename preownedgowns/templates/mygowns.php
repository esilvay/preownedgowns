<?PHP
session_start();

if (!isset($_SESSION['is_logged_in'])) {
     header("Location:/login");
     die();     // just to make sure no scripts execute
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>
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

					<?php
						include('connect.php');
						
						$result = mysql_query("SELECT * FROM gowns WHERE UserID = ".$_SESSION['is_logged_in']);
						$count = mysql_num_rows($result);
						//$results = mysql_fetch_array($result);
						//print_r($results);
					?>
            </div>
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-m">
                	<?php include("includes/member-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-msi">
                        <p><?php echo "$count Gown(s) for Sale"?></p>
                    </div>
                    <div class="clear"></div>
                    <?php
						if($count == 0){
							echo 'You do not have any gowns for sale... <a href="/member/gownlisting">Get Started Now!</a>';
						}
						if($count >= 1){
							while($results = mysql_fetch_array($result)){
							//foreach($results as $result)
								echo '<div class="item-box-list-m">';
									echo '<div class="sale-item-list">';
										echo '<div class="img-holder-list">';
											echo '<img src="/assets/listimg/'.$results['Image1'].'" style="width:166px; height:200px;"/>';
										echo '</div>';
										echo '<div class="title-holder-list">';
											echo $results ['Designer'];
										echo '</div>';
										echo '<div class="gown-style-list">';
											echo $results ['StyleNumber'];
										echo '</div>';
										echo '<div class="condition-holder-list">';
											echo $results ['GownCondition'];
										echo '</div>';
										echo '<div class="gown-size-list">';
											echo 'Size ', $results ['Labelsize'];
										echo '</div>';
										echo '<div class="price-holder-list">';
											echo '$', $results ['AskingPrice'];
										echo '</div><br />';
									echo '</div>';
										echo '<div class="edit-listing">';
											echo '<p style="font-size: 12px;"><a href="/gowns/look&designer='.$results['Designer'].'&id='.$results['ID'].'">View </a></p>';
										echo '</div>';
								echo '</div>';
							}
						}
                    ?>
                </div>
                
                <br />
                	<?php
						$result1 = mysql_query("SELECT * FROM tempg WHERE UserID = ".$_SESSION['is_logged_in']);
						$count = mysql_num_rows($result1);
						
						if(!$count == 0){
							echo '<div id="right-column-m1">';
							echo '<div id="right-heading-msi1">';
							echo '<p>'.$count.' Gown(s) Pending or have Recently Ended</p>';
							echo '</div>';
							echo '<div class="clear"></div>';
                                //if($count == 0){
                                    //echo "You do not have any pending gowns...";
                                //}
								function getDays($start, $end) {
									// Vars
									$day = 86400; // Day in seconds
									$format = 'Y-m-d'; // Output format (see PHP date funciton)
									$sTime = strtotime($start); // Start as time
									$eTime = strtotime($end); // End as time
									$numDays = round(($eTime - $sTime) / $day) + 1;
									$days = $numDays;
									// Return days
									return $days;
								} 
                                    if($count >= 1){
                                        while($results = mysql_fetch_array($result1)){
											$gID = $results['ID'];
											$sdate = $results['ListingDate'];
											$edate = date("Y-m-d");
											$days = getDays($sdate, $edate);
											$daysleft = (8 - $days);
                                        //foreach($results as $result)
                                            echo '<div class="item-box-list-m">';
												if($days < 7){
													echo '<p style="text-align:center; color:#ff0000; font-weight:bold;">Expires in ' . $daysleft . ' Days</p>';
													echo '<div class="sale-item-list">';
                                                    echo '<div class="img-holder-list">';
                                                        echo '<img src="/assets/listimg/'.$results['Image1'].'" style="width:166px; height:200px;"/>';
                                                    echo '</div>';
                                                    echo '<div class="title-holder-list">';
                                                        echo $results ['Designer'];
                                                    echo '</div>';
                                                    echo '<div class="gown-style-list">';
                                                        echo $results ['StyleNumber'];
                                                    echo '</div>';
                                                    echo '<div class="condition-holder-list">';
                                                        echo $results ['GownCondition'];
                                                    echo '</div>';
                                                    echo '<div class="gown-size-list">';
                                                        echo 'Size ', $results ['Labelsize'];
                                                    echo '</div>';
                                                    echo '<div class="price-holder-list">';
                                                        echo '$', $results ['AskingPrice'];
                                                    echo '</div><br />';
                                                echo '</div>';
                                                    echo '<div class="edit-listing">';
                                                        echo '<p style="font-size: 12px;"><a href="https://www.paypal.com/cgi-bin/webscr&cmd=_s-xclick&hosted_button_id=YUDA25KY8JD2L&custom='.$gID.'"><img src="/images/listit.png"  style="border:none; margin-left: -40px; padding-top: 8px;"></a></p>';
                                                    echo '</div>';
                                            echo '</div>';
												}
												elseif($days == 7){
													echo '<p style="text-align:center; color:#ff0000; font-weight:bold;">Expires Tomorrow</p>';
													echo '<div class="sale-item-list">';
                                                    echo '<div class="img-holder-list">';
                                                        echo '<img src="/assets/listimg/'.$results['Image1'].'" style="width:166px; height:200px;"/>';
                                                    echo '</div>';
                                                    echo '<div class="title-holder-list">';
                                                        echo $results ['Designer'];
                                                    echo '</div>';
                                                    echo '<div class="gown-style-list">';
                                                        echo $results ['StyleNumber'];
                                                    echo '</div>';
                                                    echo '<div class="condition-holder-list">';
                                                        echo $results ['GownCondition'];
                                                    echo '</div>';
                                                    echo '<div class="gown-size-list">';
                                                        echo 'Size ', $results ['Labelsize'];
                                                    echo '</div>';
                                                    echo '<div class="price-holder-list">';
                                                        echo '$', $results ['AskingPrice'];
                                                    echo '</div><br />';
                                                echo '</div>';
                                                    echo '<div class="edit-listing">';
                                                        echo '<p style="font-size: 12px;"><a href="https://www.paypal.com/cgi-bin/webscr&cmd=_s-xclick&hosted_button_id=YUDA25KY8JD2L&custom='.$gID.'"><img src="/images/listit.png"  style="border:none; margin-left: -40px; padding-top: 8px;"></a></p>';
                                                    echo '</div>';
                                            echo '</div>';
												}
												
                                    }
                                }
                			echo '</div>';
						}
						else{
						}
				?>
                <?php mysql_close($conn); ?>
                <div class="clear"></div>  
                <br />
                <br />         
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>