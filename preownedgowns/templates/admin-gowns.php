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
<script type="text/javascript">
// perform JavaScript after the document is scriptable.
$(function() {
	$('#delete-gown a').nyroModal({
		  debug: false, // Show the debug in the background
		  blocker: false, // Element which will be blocked by the modal
		  windowResize: true, // indicates if the modal should resize when the window is resized
		  modal: true, // Esc key or click backgrdound enabling or not
		  type: 'form', // nyroModal type (form, formData, iframe, image, etc...)
		  forceType: null, // Used to force the type
		  from: '', // Dom object where the call come from
		  hash: '', // Eventual hash in the url
		  processHandler: null, // Handler just before the real process
		  selIndicator: 'nyroModalSel', // Value added when a form or Ajax is sent with a filter content
		  formIndicator: 'nyroModal', // Value added when a form is sent
		  ajax: {}, // Ajax option (url, data, type, success will be overwritten for a form, url and success only for an ajax call)
		  handleError: null
		});

});

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
				include('connect.php');
						
				$tableName="gowns";		
				$targetpage = "/admin/gowns"; 	
				$limit = 50; 
				
				$query = "SELECT COUNT(*) as num FROM $tableName";
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
            
            $query1 = "SELECT * FROM $tableName ORDER BY ID DESC LIMIT $start, $limit";
				$result = mysql_query($query1);
		
		
				// Initial page num setup
				if ($page == 0){$page = 1;}
				$prev = $page - 1;	
				$next = $page + 1;							
				$lastpage = ceil($total_pages/$limit);		
				$LastPagem1 = $lastpage - 1;			
			?>
        <div id="main_body">
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-m">
                	<?php include("includes/admin-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-m">
                    	<?php $today = date("Y-m-d"); ?>
                        <p><?php echo "$total_pages Gown (s)"?> | Today's Date: <?php echo $today ?></p>
                    </div>
                    
					<?php
				
				$paginate = '';
				if($lastpage > 1){	
					$paginate .= "<div class='paginate'>";
					// Previous
					if ($page > 1){
						$paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
					}else{
						$paginate.= "<span class='disabled'>previous</span>";	}
					// Pages	
					if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
					{	
						for ($counter = 1; $counter <= $lastpage; $counter++)
						{
							if ($counter == $page){
								$paginate.= "<span class='current'>$counter</span>";
							}else{
								$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
						}
					}
					elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
					{
						// Beginning only hide later pages
						if($page < 1 + ($stages * 2))		
						{
							for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
							{
								if ($counter == $page){
									$paginate.= "<span class='current'>$counter</span>";
								}else{
									$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
							}
							$paginate.= "...";
							$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
							$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
						}
						// Middle hide some front and some back
						elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
						{
							$paginate.= "<a href='$targetpage?page=1'>1</a>";
							$paginate.= "<a href='$targetpage?page=2'>2</a>";
							$paginate.= "...";
							for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
							{
								if ($counter == $page){
									$paginate.= "<span class='current'>$counter</span>";
								}else{
									$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
							}
							$paginate.= "...";
							$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
							$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
						}
						// End only hide early pages
						else
						{
							$paginate.= "<a href='$targetpage?page=1'>1</a>";
							$paginate.= "<a href='$targetpage?page=2'>2</a>";
							$paginate.= "...";
							for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
							{
								if ($counter == $page){
									$paginate.= "<span class='current'>$counter</span>";
								}else{
									$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
							}
						}
					}
								
							// Next
					if ($page < $counter - 1){ 
						$paginate.= "<a href='$targetpage?page=$next'>next</a>";
					}else{
						$paginate.= "<span class='disabled'>next</span>";
						}
						
					$paginate.= "</div>";		
				
				
			}
			 //echo $total_pages.' Results';
			 // pagination
			 echo $paginate;
			?>
            <br />
            		<div class="admin-title-bar">
                    	<span style="margin: 0 0 0 7px;">ID</span> <span style="margin: 0 0 0 45px;">User ID</span> <span style="margin: 0 0 0 25px;">Designer</span> <span style="margin: 0 0 0 95px;">Seller Email</span> <span style="margin: 0 0 0 140px;">Date Listed</span>
                    </div>
						<?php
						
						$total_pages = $total_pages['num'];
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
								
						while($row = mysql_fetch_array($result)){
							
							$sdate = $row['ListingDate'];
							$edate = date("Y-m-d");
							$days = getDays($sdate, $edate);
							$daysleft = (365 - $days);
							
							$sellerEmail = $row['ContactEmail'];
							$gID = $row['ID'];
							
							//$fullDays = floor($dateDiff/(60*60*24));

							echo '<div class="admin-list">';
								echo '<div class="id-number">';
									echo $row['ID'];
								echo '</div>';	
								echo '<div class="userid">';
									echo $row ['UserID'], '<br />';
								echo '</div>';
								echo '<div class="designer">';
									echo $row ['Designer'];
								echo '</div>';
								echo '<div class="stylenumber">';
									echo $row ['ContactEmail'];
								echo '</div>';
								echo '<div class="gowncondition">';

									if($days < 365){
										echo '' . $sdate . ' <br />';
										echo '<span style="font-weight: bold;">' . $daysleft . '</span> Remaining';
									}
									elseif($days == 365){
										echo '<p style="color:#ff0000;">' . $sdate . '</p>';
										echo '<p style="color:#ff0000;">Expires Tomorrow</p>';
									}
		
								echo '</div>';
								//echo '<div class="askingprice">';
									//echo '$', $row ['AskingPrice'];
								//echo '</div>';
								echo '<div class="edit-listing-admin">';
									echo '<p style="font-size: 12px;"><a href="/gowns/look&designer='.$row['Designer'].'&id='.$row['ID'].'">View </a>|<a href="/admin/updategown&id='.$row['ID'].'"> Edit </a></p>';
								echo '</div>';
							echo '</div>';
						}
							
							?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
<div id="delete-gown" style="display: none; width: 400px;">
        <form id="delete-gown" class="nyroModal" action="/assets/scripts/delete-gown.php" method="post">
            <span style="text-align:center;">Are you sure you would like to delete this gown?</span>
            <input type="hidden" name="listingid" value="<?php echo ''.$row['ID'].'';?>" />
            <input type="hidden" name="form_submitted" value="1"/>
            <input id="submit-c" type="submit" value="Yes" />
        </form>
</div>
    <?php include("includes/footer.php"); ?>
     <?php
	mysql_close($conn);
?>
</body>
</html>
