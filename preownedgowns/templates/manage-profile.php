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
            </div>
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-m">
                	<?php include("includes/member-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-m">
                        <p>Update Profile Information</p>
                    </div>
                    <br />
                    <?php print isset($_SESSION['model']['errormsg']['updatedsuccess']) ? $_SESSION['model']['errormsg']['updatedsuccess'] : '';?>
                    <br />
                    <br />

                    <div id="up-form">
                    
                    <?php
						include('connect.php');
						
						$result = mysql_query("SELECT * FROM Accounts WHERE UserID = ".$_SESSION['is_logged_in']);
						$count = mysql_num_rows($result);
						$result = mysql_fetch_assoc($result);
						
						?>
						<form id="update-profile" action="/assets/scripts/update-profile.php" method="post" name="update-profile">
								
				<p><span>First Name:</span> <input type="text" name="firstname" value="<?php echo $result ['FirstName'];?>"/><?php print isset($_SESSION['model']['errormsg']['firstname']) ? $_SESSION['model']['errormsg']['firstname'] : '';?></p><br />
                
    			<p><span>Last Name:</span><input type="text" name="lastname" value="<?php echo $result ['LastName'];?>"/><?php print isset($_SESSION['model']['errormsg']['lastname']) ? $_SESSION['model']['errormsg']['lastname'] : '';?></p><br />
                
                <p><span>Address 1:</span> <input type="text" name="address1" value="<?php echo $result ['Address1'];?>"/><?php print isset($_SESSION['model']['errormsg']['address1']) ? $_SESSION['model']['errormsg']['address1'] : '';?></p><br />
                
                <p><span>Address 2:</span> <input type="text" name="address2" value="<?php echo $result ['Address2'];?>"/></p><br />
                
                <p><span>City:</span> <input type="text" name="city" value="<?php echo $result ['City'];?>"/><?php print isset($_SESSION['model']['errormsg']['city']) ? $_SESSION['model']['errormsg']['city'] : '';?></p><br />
                
                <span>State:</span><select name="state" >
                        <option value="">--Select--</option> 
                        <option value="AL" <?php echo $result ['State'] == 'AL' ? print 'selected="selected"' : ''; ?>>Alabama</option> 
                        <option value="AK" <?php echo $result ['State'] == 'AK' ? print 'selected="selected"' : ''; ?>>Alaska</option> 
                        <option value="AZ" <?php echo $result ['State'] == 'AZ' ? print 'selected="selected"' : ''; ?>>Arizona</option> 
                        <option value="AR" <?php echo $result ['State'] == 'AR' ? print 'selected="selected"' : ''; ?>>Arkansas</option>
                         
                        <option value="CA" <?php echo $result ['State'] == 'CA' ? print 'selected="selected"' : ''; ?>>California</option> 
                        <option value="CO" <?php echo $result ['State'] == 'CO' ? print 'selected="selected"' : ''; ?>>Colorado</option> 
                        <option value="CT" <?php echo $result ['State'] == 'CT' ? print 'selected="selected"' : ''; ?>>Connecticut</option> 
                        
                        <option value="DE" <?php echo $result ['State'] == 'DE' ? print 'selected="selected"' : ''; ?>>Delaware</option> 
                        <option value="DC" <?php echo $result ['State'] == 'DC' ? print 'selected="selected"' : ''; ?>>District Of Columbia</option> 
                        
                        <option value="FL" <?php echo $result ['State'] == 'FL' ? print 'selected="selected"' : ''; ?>>Florida</option> 
                        
                        <option value="GA" <?php echo $result ['State'] == 'GA' ? print 'selected="selected"' : ''; ?>>Georgia</option> 
                        
                        <option value="HI" <?php echo $result ['State'] == 'HI' ? print 'selected="selected"' : ''; ?>>Hawaii</option> 
                        
                        <option value="ID" <?php echo $result ['State'] == 'ID' ? print 'selected="selected"' : ''; ?>>Idaho</option> 
                        <option value="IL" <?php echo $result ['State'] == 'IL' ? print 'selected="selected"' : ''; ?>>Illinois</option> 
                        <option value="IN" <?php echo $result ['State'] == 'IN' ? print 'selected="selected"' : ''; ?>>Indiana</option> 
                        <option value="IA" <?php echo $result ['State'] == 'IA' ? print 'selected="selected"' : ''; ?>>Iowa</option> 
                        
                        <option value="KS" <?php echo $result ['State'] == 'KS' ? print 'selected="selected"' : ''; ?>>Kansas</option> 
                        <option value="KY" <?php echo $result ['State'] == 'KY' ? print 'selected="selected"' : ''; ?>>Kentucky</option> 
                        
                        <option value="LA" <?php echo $result ['State'] == 'LA' ? print 'selected="selected"' : ''; ?>>Louisiana</option> 
                        
                        <option value="ME" <?php echo $result ['State'] == 'ME' ? print 'selected="selected"' : ''; ?>>Maine</option> 
                        <option value="MD" <?php echo $result ['State'] == 'MD' ? print 'selected="selected"' : ''; ?>>Maryland</option> 
                        <option value="MA" <?php echo $result ['State'] == 'MA' ? print 'selected="selected"' : ''; ?>>Massachusetts</option> 
                        <option value="MI" <?php echo $result ['State'] == 'MI' ? print 'selected="selected"' : ''; ?>>Michigan</option> 
                        <option value="MN" <?php echo $result ['State'] == 'MN' ? print 'selected="selected"' : ''; ?>>Minnesota</option> 
                        <option value="MS" <?php echo $result ['State'] == 'MS' ? print 'selected="selected"' : ''; ?>>Mississippi</option> 
                        <option value="MO" <?php echo $result ['State'] == 'MO' ? print 'selected="selected"' : ''; ?>>Missouri</option> 
                        <option value="MT" <?php echo $result ['State'] == 'MT' ? print 'selected="selected"' : ''; ?>>Montana</option> 
                        
                        <option value="NE" <?php echo $result ['State'] == 'NE' ? print 'selected="selected"' : ''; ?>>Nebraska</option> 
                        <option value="NV" <?php echo $result ['State'] == 'NV' ? print 'selected="selected"' : ''; ?>>Nevada</option> 
                        <option value="NH" <?php echo $result ['State'] == 'NH' ? print 'selected="selected"' : ''; ?>>New Hampshire</option> 
                        <option value="NJ" <?php echo $result ['State'] == 'NJ' ? print 'selected="selected"' : ''; ?>>New Jersey</option> 
                        <option value="NM" <?php echo $result ['State'] == 'NM' ? print 'selected="selected"' : ''; ?>>New Mexico</option> 
                        <option value="NY" <?php echo $result ['State'] == 'NY' ? print 'selected="selected"' : ''; ?>>New York</option> 
                        <option value="NC" <?php echo $result ['State'] == 'NC' ? print 'selected="selected"' : ''; ?>>North Carolina</option> 
                        <option value="ND" <?php echo $result ['State'] == 'ND' ? print 'selected="selected"' : ''; ?>>North Dakota</option>
                         
                        <option value="OH" <?php echo $result ['State'] == 'OH' ? print 'selected="selected"' : ''; ?>>Ohio</option> 
                        <option value="OK" <?php echo $result ['State'] == 'OK' ? print 'selected="selected"' : ''; ?>>Oklahoma</option> 
                        <option value="OR" <?php echo $result ['State'] == 'OR' ? print 'selected="selected"' : ''; ?>>Oregon</option> 
                        
                        <option value="PA" <?php echo $result ['State'] == 'PA' ? print 'selected="selected"' : ''; ?>>Pennsylvania</option>
                         
                        <option value="RI" <?php echo $result ['State'] == 'RI' ? print 'selected="selected"' : ''; ?>>Rhode Island</option> 
                        
                        <option value="SC" <?php echo $result ['State'] == 'SC' ? print 'selected="selected"' : ''; ?>>South Carolina</option> 
                        <option value="SD" <?php echo $result ['State'] == 'SD' ? print 'selected="selected"' : ''; ?>>South Dakota</option> 
                        
                        <option value="TN" <?php echo $result ['State'] == 'TN' ? print 'selected="selected"' : ''; ?>>Tennessee</option> 
                        <option value="TX" <?php echo $result ['State'] == 'TX' ? print 'selected="selected"' : ''; ?>>Texas</option> 
                        
                        <option value="UT" <?php echo $result ['State'] == 'UT' ? print 'selected="selected"' : ''; ?>>Utah</option> 
                        
                        <option value="VT" <?php echo $result ['State'] == 'VT' ? print 'selected="selected"' : ''; ?>>Vermont</option> 
                        <option value="VA" <?php echo $result ['State'] == 'VA' ? print 'selected="selected"' : ''; ?>>Virginia</option> 
                        
                        <option value="WA" <?php echo $result ['State'] == 'WA' ? print 'selected="selected"' : ''; ?>>Washington</option> 
                        <option value="WV" <?php echo $result ['State'] == 'WV' ? print 'selected="selected"' : ''; ?>>West Virginia</option> 
                        <option value="WI" <?php echo $result ['State'] == 'WI' ? print 'selected="selected"' : ''; ?>>Wisconsin</option> 
                        <option value="WY" <?php echo $result ['State'] == 'WY' ? print 'selected="selected"' : ''; ?>>Wyoming</option>
                        </select><?php print isset($_SESSION['model']['errormsg']['state']) ? $_SESSION['model']['errormsg']['state'] : '';?>
                        <br /><br />
                <p><span>Zip:</span> <input type="text" name="zip" value="<?php echo $result ['Zip'];?>"/><?php print isset($_SESSION['model']['errormsg']['zip']) ? $_SESSION['model']['errormsg']['zip'] : '';?></p><br />
                
                <p><span>Telephone:</span> <input type="text" name="telephone" value="<?php echo $result ['Telephone'];?>"/><?php print isset($_SESSION['model']['errormsg']['telephone']) ? $_SESSION['model']['errormsg']['telephone'] : '';?></p><br />
                
                <input type="hidden" name="form_submitted" value="1"/><br />
                <a href="/member" style="margin: 0 0 0 200px;"><img src="../images/cancel.png" style="border: none; width: 96px; height: 34px;" alt="cancel account update"/></a>
								<input id="submit-up" type="submit" value=" " />
						   </form>
                    
           </div>
           <div class="clear"></div>
                    
                  	<br />
                    <br />
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
    <?php include("includes/footer.php"); ?>
    <?php
	mysql_close($conn);
?>
</body>
</html>