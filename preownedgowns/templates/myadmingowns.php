<?PHP
session_start();

if (isset($_SESSION['is_logged_in'])) {
     header("Location:/member");
     die();     // just to make sure no scripts execute
}

elseif (!isset($_SESSION['admin_logged_in'])) {
     header("Location:/login");
     die();     // just to make sure no scripts execute
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>

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

					<?php
						include('connect.php');
						
						$result = mysql_query("SELECT * FROM gowns WHERE UserID = ".$_SESSION['admin_logged_in']);
						$count = mysql_num_rows($result);
						//$results = mysql_fetch_array($result);
						//print_r($results);
					?>
            </div>
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-m">
                	<?php include("includes/admin-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-msi">
                        <p><?php echo "$count Gown(s) for Sale"?></p>
                    </div>
                    <div class="clear"></div>
                    <?php
						if($count == 0){
							echo "You do not have any gowns for sale...";
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
                <div class="clear"></div>  
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
    <?php
	mysql_close($conn);
?>
</body>
</html>