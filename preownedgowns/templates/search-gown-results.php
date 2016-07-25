<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
jQuery(document).ready( function ($) {
	$("#adv-search").expandable();
	$("#adv-search1").expandable();
	$("#adv-search2").expandable();
	$("#adv-search3").expandable();
	$("#adv-search4").expandable();
	$("#adv-search5").expandable();
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
        <?php	
				$q = mysql_escape_string($_REQUEST['q']);
				$sortby = mysql_escape_string($_REQUEST['sortby']);
				include('connect.php');
				$tableName="gowns";
				
				
				
				$targetpage = "/search&q=$q"; 	
				$limit = 50; 
	
				$query = "SELECT COUNT(*) as num FROM $tableName WHERE Designer LIKE '$q' OR ID LIKE '$q' OR StyleNumber LIKE '$q' ORDER BY id DESC";
				$total_pages = mysql_fetch_array(mysql_query($query));
				$total_pages = $total_pages['num'];

				$stages = 3;
				$page = mysql_escape_string($_GET['page']);
				if($page){
					$start = ($page - 1) * $limit; 
				}else{
					$start = 0;	
					}
					//print $page;
			?>
           
        
        <div id="main_body">
            <div class="spacer"></div>
            <div id="content">
            	<div id="left-column-s">
                	<div class="left-heading-s">
                    	<div class="left" style="float: left;">
                        	<p>Find your Dream Gown Today!</p>
                        </div>
                        <div class="right" style="float: right;">
							<!--Text for Top Bar Right Side-->
                        </div>
                    </div>
                    <div class="clear"></div>
                    </div>
            
            	<div class="search-holder">
            	<p><span>If you are looking for a new, sample or used wedding gown, bridesmaid dress, prom dress, or evening wear you've come to the right place! PreOwnedGowns.com has thousands of wedding dresses listed for sale, all at a fraction of the retail price.</span></p><br />
                <p><span>Search all wedding dresses by designer, by size, or with our advanced search below.</span></p><br />
                
                <p><span>Enter as many or as few criterion as you would like and then click "Start Search". You can also use the search box in the upper right to add keywords to your search.</span></p><br />
                
            			<!--Advanced Search Here -->
						<?php //include('includes/advanced-search.php'); ?>
                        </div>
                        <br />
                <div id="left-column-s">
                	<div class="left-heading-s">
                    	<div class="left" style="float: left;">
                        	<p><?php echo "$total_pages Gown (s)"?></p>
                        </div>
                        <div class="right" style="float: right;">
                            <form id="sortby" action="" method="post" name="sortby">
                                <select name="sortby" onChange="window.location.href='<?php echo $HTTP_SERVER_VARS['PHP_SELF']; ?><?php echo $targetpage; ?>?sortby='+this.options[this.selectedIndex].value;">
                                
                                	<option value="1" <?php isset($_SESSION['model']['params']['sortby']) && $_SESSION['model']['params']['sortby'] == '1' ? print 'selected="selected"' : ''; ?>>Sort By</option>
                                    
                                    <option value="2" <?php isset($_SESSION['model']['params']['sortby']) && $_SESSION['model']['params']['sortby'] == '2' ? print 'selected="selected"' : ''; ?>>Most Recent</option> 
                                    
                                    <option value="3" <?php isset($_SESSION['model']['params']['sortby']) && $_SESSION['model']['params']['sortby'] == '3' ? print 'selected="selected"' : ''; ?>>Price Low to High</option>
                                    
                                    <option value="4" <?php isset($_SESSION['model']['params']['sortby']) && $_SESSION['model']['params']['sortby'] == '4' ? print 'selected="selected"' : ''; ?>>Price High to Low</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <br />
                     
                      <?php include('includes/paginate-s.php'); ?>
                     
            		<br />
						<?php 
						while($row = mysql_fetch_array($result)){
							$aa = $row['AskingPrice'];
							$aafinal = number_format($aa, 0, '.', ',');
							echo '<div class="item-box-list">';
							echo '<div class="sale-item-list">';
								echo '<div class="img-holder-list">';
									echo '<a href="/gowns/look?designer='.$row['Designer'].'&id='.$row['ID'].'"><img src="/assets/listimg/'.$row['Image1'].'" style="width:166px; height:200px; border: none;"/></a>';	
								echo '<div class="title-holder-list">';
									echo $row ['Designer'], '<br />';
								echo '</div>';
								echo '<div class="gown-style-list">';
									echo $row ['StyleNumber'];
								echo '</div>';
								echo '<div class="condition-holder-list">';
									echo $row ['GownCondition'];
								echo '</div>';
								echo '<div class="gown-size-list">';
									echo 'Size ', $row ['Labelsize'];
								echo '</div>';
								echo '<div class="price-holder-list">';
									echo '<a href="/gowns/look?designer='.$row['Designer'].'&id='.$row['ID'].'">$'.$aafinal.'</a>';
								echo '</div>';
							echo '</div>';
							echo '</div>';
							echo '</div>';
						}
							
							?>
                    
                    <!--<div class="left-heading-s">
                    	<div class="left" style="text-align:center;">
                        	<p></p>
                        </div>
                    </div>-->
                    <div class="clear"></div>
                    		<div class="left">
                        		Page <?php echo $page; ?> of <?php echo $lastpage; ?>
                        	</div>
                </div>
            </div>
			
            <div class="clear"></div>
        </div>
    </div>
    <?php include("includes/footer.php"); 
    mysql_close($conn);?>
</body>
</html>
<?php
	if(isset($_SESSION['model'])) unset($_SESSION['model']);
?>