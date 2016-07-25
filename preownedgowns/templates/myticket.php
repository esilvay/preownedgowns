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
	$(document).ready(function() { 
	   $('.messagesent').click(function() { 
		   $.growlUI('Message Received', 'Thank You!'); 
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
						
						$result = mysql_query("SELECT Email FROM User WHERE ID = ".$_SESSION['is_logged_in']);
						$count = mysql_num_rows($result);
						$result = mysql_fetch_assoc($result);
						?>
        
        <div id="main_body">
        <div id="img_scroller">
            	<?php include("includes/banner.php"); ?>
            </div>
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-m">
                	<?php include("includes/member-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-m">
                        <p>Submit a Ticket</p>
                    </div>
                    <p><span>For security purposes all Listing Changes and Sold Listings must be submited to our support team. Thank you.</span></p><br /><br />
                    <form id="contact" action="/assets/scripts/ticket.php" method="post" name="contact">
            	<p><span>Type:</span></p><select name="inquirytype">
                        <option value="1" selected="selected" <?php isset($_SESSION['model']['params']['inquirytype']) && $_SESSION['model']['params']['inquirytype'] == '1' ? print 'selected="selected"' : ''; ?>>Edit Listing</option> 
                        <option value="2" <?php isset($_SESSION['model']['params']['inquiry-type']) && $_SESSION['model']['params']['inquiry-type'] == '2' ? print 'selected="selected"' : ''; ?>>Sold Listing</option> 
                        </select><br /><br />
                        
            	<p><span>*Name:</span> <input type="text" name="name" value="<?php print isset($_SESSION['model']['params']['name'])?$_SESSION['model']['params']['name']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['name']) ? $_SESSION['model']['errormsg']['name'] : '';?></p><br />
                
                <p><span>*Email:</span> <input type="text" name="email" value="<?php echo $result ['Email'];?>" /><?php print isset($_SESSION['model']['errormsg']['email']) ? $_SESSION['model']['errormsg']['email'] : '';?></p><br />
                
                <p><span>*Listing Number:</span> <input type="text" name="listid" value="<?php print isset($_SESSION['model']['params']['listid'])?$_SESSION['model']['params']['listid']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['listid']) ? $_SESSION['model']['errormsg']['listid'] : '';?></p><br />
                
                	
                <p><span>*Comments:</span> <textarea id="message" name="message" rows="6" cols="30"><?php print isset($_SESSION['model']['params']['message'])?$_SESSION['model']['params']['message']:'';?></textarea><?php print isset($_SESSION['model']['errormsg']['message']) ? $_SESSION['model']['errormsg']['message'] : '';?></p><br /><br />
                
                <input type="hidden" name="form_submitted" value="1"/>
                <input id="submit-c" class="messagesent" type="submit" value=" " />
           </form>
           <br /><br />
                </div>
                <div class="clear"></div>
                
                <!--<div id="featured-gowns">
                	<div id="fg-heading">
                    	<span>Featured Gowns</span>
                    </div>
                    <div id="featured-scroller">
                   		  
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <?php mysql_close($conn); ?>
    <?php include("includes/footer.php"); ?>
</body>
</html>