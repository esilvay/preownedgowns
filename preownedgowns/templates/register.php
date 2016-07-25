<?php
	session_start();
	if (isset($_SESSION['is_logged_in'])) {
		header("location:/member");
	}
	else{
		
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
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-s">
                	<div class="left-heading-s">
                        <p>Step 1. Who Are You</p>
                    </div>
                    <br />
                    <br />
                    <br />
                    <!--<h1>Register</h1>-->
                    <div id="r-form">
            <form id="register" action="/assets/scripts/verify.php" method="post" name="register">
            
            	<p><span>First Name:</span> <input type="text" name="firstname" value="<?php print isset($_SESSION['model']['params']['firstname'])?$_SESSION['model']['params']['firstname']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['firstname']) ? $_SESSION['model']['errormsg']['firstname'] : '';?></p><br />
                
    			<p><span>Last Name:</span><input type="text" name="lastname" value="<?php print isset($_SESSION['model']['params']['lastname'])?$_SESSION['model']['params']['lastname']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['lastname']) ? $_SESSION['model']['errormsg']['lastname'] : '';?></p><br />
                
                <div class="left-heading-s">
                        <p>Step 2. Account Information</p>
                    </div>
                    <br />
                    <br />
                    <br />
                
                <p><span>Email:</span> <input type="text" name="email" value="<?php print isset($_SESSION['model']['params']['email'])?$_SESSION['model']['params']['email']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['email']) ? $_SESSION['model']['errormsg']['email'] : '';?><?php print isset($_SESSION['model']['errormsg']['bemail']) ? $_SESSION['model']['errormsg']['bemail'] : '';?></p><br />
                
                <p><span>Confirm Email:</span> <input type="text" name="cemail" value="<?php print isset($_SESSION['model']['params']['cemail'])?$_SESSION['model']['params']['cemail']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['cemail']) ? $_SESSION['model']['errormsg']['cemail'] : '';?><?php print isset($_SESSION['model']['errormsg']['bemail']) ? $_SESSION['model']['errormsg']['bemail'] : '';?></p><br />
                
                <p><span>Password:</span> <input type="password" name="password" value="<?php print isset($_SESSION['model']['params']['password'])?$_SESSION['model']['params']['password']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['password']) ? $_SESSION['model']['errormsg']['password'] : '';?><?php print isset($_SESSION['model']['errormsg']['bpassword']) ? $_SESSION['model']['errormsg']['bpassword'] : '';?><?php print isset($_SESSION['model']['errormsg']['lpassword']) ? $_SESSION['model']['errormsg']['lpassword'] : '';?></p><br />
                
                <p><span>Confirm Password:</span> <input type="password" name="cpassword" value="<?php print isset($_SESSION['model']['params']['cpassword'])?$_SESSION['model']['params']['cpassword']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['cpassword']) ? $_SESSION['model']['errormsg']['cpassword'] : '';?><?php print isset($_SESSION['model']['errormsg']['bpassword']) ? $_SESSION['model']['errormsg']['bpassword'] : '';?></p><br />
                
                <div class="left-heading-s">
                        <p>Step 3. Mailing Address</p>
                    </div>
                    <br />
                    <br />
                    <br />
                
                <p><span>Address 1:</span> <input type="text" name="address1" value="<?php print isset($_SESSION['model']['params']['address1'])?$_SESSION['model']['params']['address1']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['address1']) ? $_SESSION['model']['errormsg']['address1'] : '';?></p><br />
                
                <p><span>Address 2:</span> <input type="text" name="address2" /></p><br />
                
                <p><span>City:</span> <input type="text" name="city" value="<?php print isset($_SESSION['model']['params']['city'])?$_SESSION['model']['params']['city']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['city']) ? $_SESSION['model']['errormsg']['city'] : '';?></p><br />
                
                <span>State:</span><select name="state" >
                        <option value="">--Select--</option> 
                        <option value="AL" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'AL' ? print 'selected="selected"' : ''; ?>>Alabama</option> 
                        <option value="AK" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'AK' ? print 'selected="selected"' : ''; ?>>Alaska</option> 
                        <option value="AZ" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'AZ' ? print 'selected="selected"' : ''; ?>>Arizona</option> 
                        <option value="AR" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'AR' ? print 'selected="selected"' : ''; ?>>Arkansas</option>
                         
                        <option value="CA" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'CA' ? print 'selected="selected"' : ''; ?>>California</option> 
                        <option value="CO" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'CO' ? print 'selected="selected"' : ''; ?>>Colorado</option> 
                        <option value="CT" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'CT' ? print 'selected="selected"' : ''; ?>>Connecticut</option> 
                        
                        <option value="DE" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'DE' ? print 'selected="selected"' : ''; ?>>Delaware</option> 
                        <option value="DC" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'DC' ? print 'selected="selected"' : ''; ?>>District Of Columbia</option> 
                        
                        <option value="FL" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'FL' ? print 'selected="selected"' : ''; ?>>Florida</option> 
                        
                        <option value="GA" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'GA' ? print 'selected="selected"' : ''; ?>>Georgia</option> 
                        
                        <option value="HI" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'HI' ? print 'selected="selected"' : ''; ?>>Hawaii</option> 
                        
                        <option value="ID" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'ID' ? print 'selected="selected"' : ''; ?>>Idaho</option> 
                        <option value="IL" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'IL' ? print 'selected="selected"' : ''; ?>>Illinois</option> 
                        <option value="IN" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'IN' ? print 'selected="selected"' : ''; ?>>Indiana</option> 
                        <option value="IA" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'IA' ? print 'selected="selected"' : ''; ?>>Iowa</option> 
                        
                        <option value="KS" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'KS' ? print 'selected="selected"' : ''; ?>>Kansas</option> 
                        <option value="KY" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'KY' ? print 'selected="selected"' : ''; ?>>Kentucky</option> 
                        
                        <option value="LA" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'LA' ? print 'selected="selected"' : ''; ?>>Louisiana</option> 
                        
                        <option value="ME" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'ME' ? print 'selected="selected"' : ''; ?>>Maine</option> 
                        <option value="MD" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'MD' ? print 'selected="selected"' : ''; ?>>Maryland</option> 
                        <option value="MA" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'MA' ? print 'selected="selected"' : ''; ?>>Massachusetts</option> 
                        <option value="MI" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'MI' ? print 'selected="selected"' : ''; ?>>Michigan</option> 
                        <option value="MN" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'MN' ? print 'selected="selected"' : ''; ?>>Minnesota</option> 
                        <option value="MS" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'MS' ? print 'selected="selected"' : ''; ?>>Mississippi</option> 
                        <option value="MO" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'MO' ? print 'selected="selected"' : ''; ?>>Missouri</option> 
                        <option value="MT" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'MT' ? print 'selected="selected"' : ''; ?>>Montana</option> 
                        
                        <option value="NE" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'NE' ? print 'selected="selected"' : ''; ?>>Nebraska</option> 
                        <option value="NV" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'NV' ? print 'selected="selected"' : ''; ?>>Nevada</option> 
                        <option value="NH" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'NH' ? print 'selected="selected"' : ''; ?>>New Hampshire</option> 
                        <option value="NJ" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'NJ' ? print 'selected="selected"' : ''; ?>>New Jersey</option> 
                        <option value="NM" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'NM' ? print 'selected="selected"' : ''; ?>>New Mexico</option> 
                        <option value="NY" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'NY' ? print 'selected="selected"' : ''; ?>>New York</option> 
                        <option value="NC" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'NC' ? print 'selected="selected"' : ''; ?>>North Carolina</option> 
                        <option value="ND" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'ND' ? print 'selected="selected"' : ''; ?>>North Dakota</option>
                         
                        <option value="OH" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'OH' ? print 'selected="selected"' : ''; ?>>Ohio</option> 
                        <option value="OK" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'OK' ? print 'selected="selected"' : ''; ?>>Oklahoma</option> 
                        <option value="OR" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'OR' ? print 'selected="selected"' : ''; ?>>Oregon</option> 
                        
                        <option value="PA" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'PA' ? print 'selected="selected"' : ''; ?>>Pennsylvania</option>
                         
                        <option value="RI" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'RI' ? print 'selected="selected"' : ''; ?>>Rhode Island</option> 
                        
                        <option value="SC" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'SC' ? print 'selected="selected"' : ''; ?>>South Carolina</option> 
                        <option value="SD" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'SD' ? print 'selected="selected"' : ''; ?>>South Dakota</option> 
                        
                        <option value="TN" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'TN' ? print 'selected="selected"' : ''; ?>>Tennessee</option> 
                        <option value="TX" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'TX' ? print 'selected="selected"' : ''; ?>>Texas</option> 
                        
                        <option value="UT" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'UT' ? print 'selected="selected"' : ''; ?>>Utah</option> 
                        
                        <option value="VT" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'VT' ? print 'selected="selected"' : ''; ?>>Vermont</option> 
                        <option value="VA" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'VA' ? print 'selected="selected"' : ''; ?>>Virginia</option> 
                        
                        <option value="WA" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'WA' ? print 'selected="selected"' : ''; ?>>Washington</option> 
                        <option value="WV" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'WV' ? print 'selected="selected"' : ''; ?>>West Virginia</option> 
                        <option value="WI" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'WI' ? print 'selected="selected"' : ''; ?>>Wisconsin</option> 
                        <option value="WY" <?php isset($_SESSION['model']['params']['state']) && $_SESSION['model']['params']['state'] == 'WY' ? print 'selected="selected"' : ''; ?>>Wyoming</option>
                        </select><?php print isset($_SESSION['model']['errormsg']['state']) ? $_SESSION['model']['errormsg']['state'] : '';?>
                        <br /><br />
                <p><span>Zip:</span> <input type="text" name="zip" value="<?php print isset($_SESSION['model']['params']['zip'])?$_SESSION['model']['params']['zip']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['zip']) ? $_SESSION['model']['errormsg']['zip'] : '';?></p><br />
                
                <p><span>Telephone:</span> <input type="text" name="telephone" value="<?php print isset($_SESSION['model']['params']['telephone'])?$_SESSION['model']['params']['telephone']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['telephone']) ? $_SESSION['model']['errormsg']['telephone'] : '';?></p><br />
                
                
                <input type="hidden" name="form_submitted" value="1"/><br />
                <!--<a href="/" style="margin: 0 0 0 680px;"><img src="../images/cancel.png" style="border: none; width: 96px; height: 34px;" alt="cancel create account"/></a>
     -->           <input id="submit-r" type="submit" value=" " />
           </form>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--<div id="right-column-r">
                        <div id="right-heading-r">
                        </div>
                	</div>
                <div class="clear"></div>
                
                <div id="featured-gowns">
                    <div id="fg-heading">
                    </div>
                        <div id="featured-scroller">
                        </div>
                </div>-->
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
<?php
	if(isset($_SESSION['model'])) unset($_SESSION['model']);
?>