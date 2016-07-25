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
<script type="text/javascript" src="/assets/js/charcheck.js"></script>
	
<script type="text/javascript">
$(function(){
	$('input[name=accessorytype]').click(function(){ 
     var html = '<div id="jewelry"><p><span>* Jewelry Type:</span></p><select name="jewelrytype"><option value="">Select One</option><option value="Bracelet">Bracelet</option><option value="Brooch">Brooch</option><option value="Earrings">Earrings</option><option value="Necklace">Necklace</option><option value="Other">Other</option><option value="Ring">Ring</option><option value="Unknown">Unknown</option></select><p><span>* Condition:</span></p><select name="jewelrycondition"><option value="">Select One</option><option value="New With Tags">New With Tags</option><option value="Sample">Sample</option><option value="Used">Used</option></select></div>'; 
     var $this = $(this); 
     if($this.attr('class').toLowerCase() == 'jewelry'){ 
          $('#jewelry').remove(); 
          $(html).insertAfter('#insert'); 
     } 
     else if($this.attr('class').toLowerCase() == 'wrapjacketshaw', 'shoes', 'veil', 'sashbelt', 'crinolineslip', 'tiarahairaccessory', 'purse'){ 
          $('#jewelry').remove(); 
     } 
	});
	
	$('input[name=accessorytype]').click(function(){ 
     var html = '<div id="wrapjacketshaw"><p><span>* Wrap Color:</span></p><select name="wrapcolor"><option value="">Select One</option><option value="Champagne">Champagne</option><option value="Cream">Cream</option><option value="Diamond White">Diamond White</option><option value="Ivory">Ivory</option><option value="Off White">Off White</option><option value="Other">Other</option><option value="Unknown">Unknown</option><option value="White">White</option></select><p><span>* Wrap Length:</span></p><select name="wraplegnth"><option value="">Select One</option><option value="02">02</option><option value="04">04</option><option value="06">06</option><option value="08">08</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="16">16</option><option value="18">18</option><option value="20">20</option><option value="22">22</option><option value="24">24</option><option value="26">26</option><option value="28">28</option><option value="L">L</option><option value="M">M</option><option value="S">S</option><option value="XL">XL</option><option value="XS">XS</option></select><p><span>* Wrap Condition:</span></p><select name="wrapcondition"><option value="">Select One</option><option value="New With Tags">New With Tags</option><option value="Sample" >Sample</option><option value="Used">Used</option></select></div>';
	 var $this = $(this); 
     if($this.attr('class').toLowerCase() == 'wrapjacketshaw'){ 
          $('#wrapjacketshaw').remove(); 
          $(html).insertAfter('#insert'); 
     } 
     else if($this.attr('class').toLowerCase() == 'shoes', 'veil', 'sashbelt', 'crinolineslip', 'tiarahairaccessory', 'purse', 'jewelrytype'){ 
          $('#wrapjacketshaw').remove(); 
     } 
	});
	
	$('input[name=accessorytype]').click(function(){ 
     var html = '<div id="shoes"><p><span>* Shoe Color:</span></p><select name="shoecolor"><option value="">Select One</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Champagne">Champagne</option><option value="Cream">Cream</option><option value="Diamond White">Diamond White</option><option value="Ivory">Ivory</option><option value="Off White">Off White</option><option value="Other">Other</option><option value="Red">Red</option><option value="Unknown">Unknown</option><option value="White">White</option></select><p><span>* Shoe Size:</span></p><select name="shoesize"><option value="">Select One</option><option value="5">Size 5</option><option value="5.5">Size 5 1/2</option><option value="6">Size 6</option><option value="6.5">Size 6 1/2</option><option value="7">Size 7</option><option value="7.5">Size 7 1/2</option><option value="8">Size 8</option><option value="8.5">Size 8 1/2</option><option value="9">Size 9</option><option value="9.5">Size 9 1/2</option><option value="10">Size 10</option><option value="10.5">Size 10 1/2</option><option value="11">Size 11</option><option value="11.5">Size 11 1/2</option><option value="12">Size 12</option><option value="12.5">Size 12 1/2</option></select><p><span>* Condition:</span></p><select name="shoecondition"><option value="">Select One</option><option value="New With Tags">New With Tags</option><option value="sample">Sample</option><option value="used">Used</option></select></div>'; 
     var $this = $(this); 
     if($this.attr('class').toLowerCase() == 'shoes'){ 
          $('#shoes').remove(); 
          $(html).insertAfter('#insert'); 
     } 
     else if($this.attr('class').toLowerCase() == 'wrapjacketshaw', 'veil', 'sashbelt', 'crinolineslip', 'tiarahairaccessory', 'purse', 'jewelrytype'){ 
          $('#shoes').remove(); 
     } 
	});
	
	$('input[name=accessorytype]').click(function(){ 
     var html = '<div id="veil"><p><span>* Veil Color:</span></p><select name="veilcolor"><option value="">Select One</option><option value="Champagne">Champagne</option><option value="Cream">Cream</option><option value="Diamond White">Diamond White</option><option value="Ivory">Ivory</option><option value="Off White">Off White</option><option value="Other">Other</option><option value="Unknown">Unknown</option><option value="White">White</option></select><p><span>* Veil Length:</span></p><select name="veillength"><option value="">Select One</option><option value="Blusher">Blusher</option><option value="Cathedral">Cathedral</option><option value="Chapel">Chapel</option><option value="Double Tier">Double Tier</option><option value="Elbow">Elbow</option><option value="Finger Tip">Finger Tip</option><option value="Mantilla">Mantilla</option><option value="Other">Other</option><option value="Unknown">Unknown</option></select><p><span>* Condition:</span></p><select name="veilcondition"><option value="">Select One</option><option value="New With Tags">New With Tags</option><option value="Sample">Sample</option><option value="Used">Used</option> </select></div>'; 
     var $this = $(this); 
     if($this.attr('class').toLowerCase() == 'veil'){ 
          $('#veil').remove(); 
          $(html).insertAfter('#insert'); 
     } 
     else if($this.attr('class').toLowerCase() == 'wrapjacketshaw', 'shoes', 'sashbelt', 'crinolineslip', 'tiarahairaccessory', 'purse', 'jewelrytype'){ 
          $('#veil').remove(); 
     } 
	});
	
	$('input[name=accessorytype]').click(function(){ 
     var html = '<div id="sashbelt"><p><span>* Sash Color:</span></p><select name="sashcolor"><option value="">Select One</option><option value="Black">Black</option><option value="Blue">Blue</option><option value="Brown">Brown</option><option value="Champagne">Champagne</option><option value="Cream">Cream</option><option value="Gold">Gold</option><option value="Green">Green</option><option value="Ivory">Ivory</option><option value="Other">Other</option><option value="Pink">Pink</option><option value="Purple">Purple</option><option value="Red">Red</option><option value="Sable">Sable</option><option value="Silver">Silver</option><option value="Unknown">Unknown</option><option value="White">White</option></select><p><span>* Condition:</span></p><select name="sashcondition"><option value="">Select One</option><option value="New With Tags">New With Tags</option><option value="Sample">Sample</option><option value="Used">Used</option></select></div>'; 
     var $this = $(this); 
     if($this.attr('class').toLowerCase() == 'sashbelt'){ 
          $('#sashbelt').remove(); 
          $(html).insertAfter('#insert'); 
     } 
     else if($this.attr('class').toLowerCase() == 'wrapjacketshaw', 'shoes', 'veil', 'crinolineslip', 'tiarahairaccessory', 'purse', 'jewelrytype'){ 
          $('#sashbelt').remove(); 
     } 
	});
	
	$('input[name=accessorytype]').click(function(){ 
     var html = '<div id="crinolineslip"><p><span>* Slip Color:</span></p><select name="slipcolor"><option value="">Select One</option><option value="Other">Other</option><option value="Unknown">Unknown</option><option value="White/Ivory">White / Ivory</option></select><p><span>* Slip Size:</span></p><select name="slipsize"><option value="">Select One</option><option value="25/26">25/26</option><option value="27/28">27/28</option><option value="29/30">29/30</option><option value="31/32">31/32</option><option value="33/34">33/34</option><option value="35/36">35/36</option><option value="37/38">37/38</option><option value="39/40">39/40</option><option value="41/42">41/42</option><option value="43/44">43/44</option><option value="45/46">45/46</option><option value="47/48">47/48</option><option value="49/50">49/50</option><option value="Extra Large">Extra Large</option><option value="Other">Other</option><option value="Regular">Regular</option><option value="Unknown">Unknown</option></select><p><span>* Condition:</span></p><select name="slipcondition"><option value="">Select One</option><option value="New With Tags">New With Tags</option><option value="Sample">Sample</option><option value="Used">Used</option></select></div>'; 
     var $this = $(this); 
     if($this.attr('class').toLowerCase() == 'crinolineslip'){ 
          $('#crinolineslip').remove(); 
          $(html).insertAfter('#insert'); 
     } 
     else if($this.attr('class').toLowerCase() == 'wrapjacketshaw', 'shoes', 'veil', 'sashbelt', 'tiarahairaccessory', 'purse', 'jewelrytype'){ 
          $('#crinolineslip').remove(); 
     } 
	});
	
	$('input[name=accessorytype]').click(function(){ 
     var html = '<div id="tiarahairaccessory"><p><span>* Condition:</span></p><select name="tiaracondition"><option value="">Select One</option><option value="New With Tags">New With Tags</option><option value="Sample">Sample</option><option value="Used">Used</option></select></div>'; 
     var $this = $(this); 
     if($this.attr('class').toLowerCase() == 'tiarahairaccessory'){ 
          $('#tiarahairaccessory').remove(); 
          $(html).insertAfter('#insert'); 
     } 
     else if($this.attr('class').toLowerCase() == 'wrapjacketshaw', 'shoes', 'veil', 'sashbelt', 'crinolineslip', 'purse', 'jewelrytype'){ 
          $('#tiarahairaccessory').remove(); 
     } 
	});
	
	$('input[name=accessorytype]').click(function(){ 
     var html = '<div id="purse"><p><span>* Purse Color:</span></p><select name="pursecolor"><option value="">Select One</option><option value="Champagne">Champagne</option><option value="Cream">Cream</option><option value="Diamond White">Diamond White</option><option value="Ivory">Ivory</option><option value="Off White">Off White</option><option value="Other">Other</option><option value="Unknown">Unknown</option><option value="White">White</option></select><p><span>* Condition:</span></p><select name="pursecondition"><option value="">Select One</option><option value="New With Tags">New With Tags</option><option value="Sample">Sample</option><option value="Used">Used</option></select></div>'; 
     var $this = $(this); 
     if($this.attr('class').toLowerCase() == 'purse'){ 
          $('#purse').remove(); 
          $(html).insertAfter('#insert'); 
     } 
     else if($this.attr('class').toLowerCase() == 'wrapjacketshaw', 'shoes', 'veil', 'sashbelt', 'crinolineslip', 'tiarahairaccessory', 'jewelrytype'){ 
          $('#purse').remove(); 
     } 
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
        
        <div id="main_body">
            <div class="spacer"></div>
            <div id="content">
                <div id="left-column-s">
                	<div class="left-heading-gl">
                        <p>Step 1 - Accessory Details</p>
                    </div>
                    <br />
                    <br />
                    <br />
                     <?php
						include('connect.php');
						
						$result = mysql_query("SELECT Email FROM User WHERE ID = ".$_SESSION['is_logged_in']);
						$count = mysql_num_rows($result);
						$result = mysql_fetch_assoc($result);
						?>
                    <!--<h1>Register</h1>-->
                    <div id="r-form">
            	<!--<form id="gown-list" action="/assets/scripts/list-accessory-trans.php" method="post" name="accessory-list" enctype="multipart/form-data">-->
                <form id="gown-list" action="/assets/scripts/list-accessory.php" method="post" name="accessory-list" enctype="multipart/form-data">
                
                		<div class="form-column-left">
                        	<div class="error_message" style="float: right; margin-right: 25px;">
                        		<?php print isset($_SESSION['model']['errormsg']['accessorytype']) ? $_SESSION['model']['errormsg']['accessorytype'] : '';?>
                            </div>
                        <!--<p><span>* Accessory Type:</span></p><br />-->
                        
                        <p><span>Jewelry</span></p><input type="radio" name="accessorytype" class="jewelry" value="Jewelry" <?php isset($_SESSION['model']['params']['accessorytype']) && $_SESSION['model']['params']['accessorytype'] == 'Jewelry' ? print 'selected="selected"' : ''; ?>/>
                        
                        <p><span>Wrap/Jacket/Shaw</span></p><input type="radio" name="accessorytype" class="wrapjacketshaw" value="Wrap/Jacket/Shaw" <?php isset($_SESSION['model']['params']['accessorytype']) && $_SESSION['model']['params']['accessorytype'] == 'Wrap/Jacket/Shaw' ? print 'selected="selected"' : ''; ?>/>
                        
                        <p><span>Shoes</span></p><input type="radio" name="accessorytype" class="shoes" value="Shoes" <?php isset($_SESSION['model']['params']['accessorytype']) && $_SESSION['model']['params']['accessorytype'] == 'Shoes' ? print 'selected="selected"' : ''; ?>/>
                        
                        <p><span>Veil</span></p><input type="radio" name="accessorytype" class="veil" value="Veil" <?php isset($_SESSION['model']['params']['accessorytype']) && $_SESSION['model']['params']['accessorytype'] == 'Veil' ? print 'selected="selected"' : ''; ?>/>
                        </div>
                        
                        <div class="form-column-right">
                        <p><span>Sash/Belt</span></p><input type="radio" name="accessorytype" class="sashbelt" value="Sash/Belt" <?php isset($_SESSION['model']['params']['accessorytype']) && $_SESSION['model']['params']['accessorytype'] == 'Sash/Belt' ? print 'selected="selected"' : ''; ?>/>
                        
                        <p><span>Crinoline/Slip</span></p><input type="radio" name="accessorytype" class="crinolineslip" value="Crinoline/Slip" <?php isset($_SESSION['model']['params']['accessorytype']) && $_SESSION['model']['params']['accessorytype'] == 'Crinoline/Slip' ? print 'selected="selected"' : ''; ?>/>
                        
                        <p><span>Tiara/Hair</span></p><input type="radio" name="accessorytype" class="tiarahairaccessory" value="Tiara/Hair"<?php isset($_SESSION['model']['params']['accessorytype']) && $_SESSION['model']['params']['accessorytype'] == 'Tiara/Hair' ? print 'selected="selected"' : ''; ?> />
                        
                        <p><span>Purse</span></p><input type="radio" name="accessorytype" class="purse" value="Purse" <?php isset($_SESSION['model']['params']['accessorytype']) && $_SESSION['model']['params']['accessorytype'] == 'Purse' ? print 'selected="selected"' : ''; ?>/>
                        </div>
                        <div class="clear"></div>
                        <br />
                        <div class="divider-line"></div>
                        <br />
                        
                        <div class="form-column-left">

                        <div id="insert"></div>
                        
                       <!-- MIGICAL INSERT APPEARS HERE WHEN ABOVE IS SELECTED -->
                       
                       </div>   
                        <div class="form-column-right">
                        <!--<div class="glspacer"></div>-->
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['askingprice']) ? $_SESSION['model']['errormsg']['askingprice'] : '';?>
                        </div>
                        <p><span>* Asking Paid:</span></p><input type="text" name="askingprice" value="<?php print isset($_SESSION['model']['params']['askingprice'])?$_SESSION['model']['params']['askingprice']:'';?>"/>
                        </div>
                        <div class="clear"></div>
                        <br />
                        <div class="divider-line"></div>
                        <br />
                        
                        <div id="barbox">
                          <div class="progressbar"></div>
                        </div>
                        <div class="count">1200</div>
                        <br />

                        <p><span>Accessory Description:</span></p><textarea id="accessdescr" name="accessdescr" class="text_area_input" rows="6" cols="30"><?php print isset($_SESSION['model']['params']['accessdescr'])?$_SESSION['model']['params']['accessdescr']:'';?></textarea><br /><br />
						
                        <br />
                        <br />
                        <div class="divider-line"></div>
                        <br />
            <p><span>Photos</span></p><br />
            	<p><span style="width: 400px; font-size: 12px;"><i>Acceptable file types: .jpg .png. gif </i></span><?php print isset($_SESSION['model']['errormsg']['image1']) ? $_SESSION['model']['errormsg']['image1'] : '';?></p><br />
            	<div class="uploadimage">
                        <?php print isset($_SESSION['model']['errormsg']['filetype']) ? $_SESSION['model']['errormsg']['filetype'] : '';?>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                        <input name="image1" type="file" size="30">
                        <p>Main Image</p>
                </div>
                <!--<div id="add-image">
                	<a id="add_img" href="">Add Another Image</a>
                </div>-->
                <br />
                <div class="left-img" style="float:left; margin-left: 150px;">
               			<?php print isset($_SESSION['model']['errormsg']['image2']) ? $_SESSION['model']['errormsg']['image2'] : '';?>
                        <?php print isset($_SESSION['model']['errormsg']['filetype']) ? $_SESSION['model']['errormsg']['filetype'] : '';?>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                        <input name="image2" type="file" size="30">
                        <br />
                        <br />
            			<?php print isset($_SESSION['model']['errormsg']['image4']) ? $_SESSION['model']['errormsg']['image4'] : '';?>
                        <?php print isset($_SESSION['model']['errormsg']['filetype']) ? $_SESSION['model']['errormsg']['filetype'] : '';?>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                        <input name="image3" type="file" size="30">
						<br />
                </div>
                <div class="clear"></div>
                <br />
                <br />
            <!--<p><a href="/assets/listingimages/image-uploader.php?height=300&width=300" class="thickbox"><img src="../images/uploadimage.png" style="border: none;"/></a></p><br />-->
                        
                        <div><p><span style="width: 894px;">Images <strong>can NOT exceed 2mb</strong> and <strong>dimensions can not exceed 2000 pixels wide by 2000 pixels tall</strong><br /><br />Your pictures will really help buyers see the beauty of your accessory. Ideal images include pictures of the front, back and detail of your accessory on a person or mannequin. Your listing includes 3 images.</span></p></div><br /><br /><br />
                        <br /><br />
                        
                        <div class="left-heading-gl">
                        	<p>Step 2 - Sales Conditions</p>
                    	</div>
                        <br />
                        <br />
                        <br />
                        
                        <div class="form-column-left">
                        <div class="error_message" style="float: right; margin-right: 25px;">
							<?php print isset($_SESSION['model']['errormsg']['typeofseller']) ? $_SESSION['model']['errormsg']['typeofseller'] : '';?>
                        </div>
           				<p><span>* Type of Seller</span></p>
                        <select name="typeofseller">
                        <option value=""></option>
                        <option value="Designer/Manufacturer" <?php isset($_SESSION['model']['params']['typeofseller']) && $_SESSION['model']['params']['typeofseller'] == 'Designer/Manufacturer' ? print 'selected="selected"' : ''; ?>>Designer/Manufacturer</option>
                        <option value="Salon" <?php isset($_SESSION['model']['params']['typeofseller']) && $_SESSION['model']['params']['typeofseller'] == 'Salon' ? print 'selected="selected"' : ''; ?>>Salon</option>
                        <option value="Consignment Shop" <?php isset($_SESSION['model']['params']['typeofseller']) && $_SESSION['model']['params']['typeofseller'] == 'Consignment Shop' ? print 'selected="selected"' : ''; ?>>Consignment Shop</option>
                        <option value="Reseller" <?php isset($_SESSION['model']['params']['typeofseller']) && $_SESSION['model']['params']['typeofseller'] == 'Reseller' ? print 'selected="selected"' : ''; ?>>Reseller</option>
                        <option value="Individual (Personal Use)" <?php isset($_SESSION['model']['params']['typeofseller']) && $_SESSION['model']['params']['typeofseller'] == 'Individual (Personal Use)' ? print 'selected="selected"' : ''; ?>>Individual (Personal Use)</option>
                        </select><br />
                        
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['originalreceipt']) ? $_SESSION['model']['errormsg']['originalreceipt'] : '';?>
                        </div>
                        <p><span>* Have original receipt</span></p>
                        <select name="originalreceipt">
                        <option value=""></option>
                        <option value="Yes" <?php isset($_SESSION['model']['params']['originalreceipt']) && $_SESSION['model']['params']['originalreceipt'] == 'Yes' ? print 'selected="selected"' : ''; ?>>Yes</option>
                        <option value="No" <?php isset($_SESSION['model']['params']['originalreceipt']) && $_SESSION['model']['params']['originalreceipt'] == 'No' ? print 'selected="selected"' : ''; ?>>No</option>
                        </select><br />
                        </div>
                        
                        <div class="form-column-right">
                        <div class="glspacer"></div>
						<div class="error_message" style="float: right; margin-right: 25px;">
							<?php print isset($_SESSION['model']['errormsg']['originalowner']) ? $_SESSION['model']['errormsg']['originalowner'] : '';?>
                        </div>
                        <p><span>* Are you the original owner</span></p>
                        <select name="originalowner">
                        <option value=""></option>
                        <option value="Yes" <?php isset($_SESSION['model']['params']['originalowner']) && $_SESSION['model']['params']['originalowner'] == 'Yes' ? print 'selected="selected"' : ''; ?>>Yes</option>
                        <option value="No" <?php isset($_SESSION['model']['params']['originalowner']) && $_SESSION['model']['params']['originalowner'] == 'No' ? print 'selected="selected"' : ''; ?>>No</option>
                        </select>
                        </div>
                        <div class="clear"></div>
                        <br />
                        <div class="divider-line"></div>
                        <br />
                        
                        <div class="form-column-left">
						<div class="error_message" style="float: right; margin-right: 25px;">
							<?php print isset($_SESSION['model']['errormsg']['state']) ? $_SESSION['model']['errormsg']['state'] : '';?>
                        </div>
           				<p><span>* State</span></p>
                        <select name="state">
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
                        </select><br />
                        
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['city']) ? $_SESSION['model']['errormsg']['city'] : '';?>
                        </div>    
                         <p><span>City:</span></p><input type="text" name="city" value="<?php print isset($_SESSION['model']['params']['city'])?$_SESSION['model']['params']['city']:'';?>"/>
                        </div>
                        
                        <div class="form-column-right">
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['zip']) ? $_SESSION['model']['errormsg']['zip'] : '';?>
                        </div>    
                        <p><span>* Zip:</span></p><input type="text" name="zip" value="<?php print isset($_SESSION['model']['params']['zip'])?$_SESSION['model']['params']['zip']:'';?>"/>
         
                        <p><span>Shipping Costs</span></p>
                        <select name="shippingcost">
                        <option value=""></option> 
                        <option value="To Be Paid By Seller" <?php isset($_SESSION['model']['params']['shippingcost']) && $_SESSION['model']['params']['shippingcost'] == 'To Be Paid By Seller' ? print 'selected="selected"' : ''; ?>>To Be Paid By Seller</option>
                        <option value="To Be Paid By Buyer" <?php isset($_SESSION['model']['params']['shippingcost']) && $_SESSION['model']['params']['shippingcost'] == 'To Be Paid By Buyer' ? print 'selected="selected"' : ''; ?>>To Be Paid By Buyer</option>
                        <option value="To Be Negotiated" <?php isset($_SESSION['model']['params']['shippingcost']) && $_SESSION['model']['params']['shippingcost'] == 'To Be Negotiated' ? print 'selected="selected"' : ''; ?>>To Be Negotiated</option>
                        </select><br />
                        </div>
                        <div class="clear"></div>
                        <br />
                        <div class="divider-line"></div>
                        <br />
                        
                        <div id="barbox4">
                          <div class="progressbar4"></div>
                        </div>
                        <div class="count4">255</div>
                        <br />

                        <p><span>Terms Of Sale:</span><textarea id="saleterms" name="saleterms" class="text_area_input4" rows="5" cols="10" style="width: 712px;"><?php print isset($_SESSION['model']['params']['saleterms'])?$_SESSION['model']['params']['saleterms']:'';?></textarea></p><br />
                        
                        <div id="barbox5">
                          <div class="progressbar5"></div>
                        </div>
                        <div class="count5">255</div>
                        <br />
                        
                        <p><span>Will Ship To:</span><textarea id="willship" name="willship" class="text_area_input5" rows="5" cols="10" style="width: 712px;"><?php print isset($_SESSION['model']['params']['willship'])?$_SESSION['model']['params']['willship']:'';?></textarea></p><br />
                        
                        <div id="barbox6">
                          <div class="progressbar6"></div>
                        </div>
                        <div class="count6">255</div>
                        <br />
                        
                        <p><span>Accepted Payment Methods:</span><textarea id="acceptpayment" class="text_area_input6" name="acceptpayment" rows="5" cols="10" style="width: 712px;"><?php print isset($_SESSION['model']['params']['acceptpayment'])?$_SESSION['model']['params']['acceptpayment']:'';?></textarea></p><br />
                        
                        <div class="divider-line"></div>
                        
						<div class="error_message" style="float: right; margin-right: 25px;">
							<?php print isset($_SESSION['model']['errormsg']['contactemail']) ? $_SESSION['model']['errormsg']['contactemail'] : '';?>
                        </div>
                        <br />
                        <p><span>Contact Email:</span><input type="text" name="contactemail" value="<?php echo $result ['Email'];?>"/></p><br />
                        
                        <br />
                        
                        <p><span>How did you hear about us?</span><input type="text" name="hearaboutpog" value="<?php print isset($_SESSION['model']['params']['hearaboutpog'])?$_SESSION['model']['params']['hearaboutpog']:'';?>"/></p><br />
                        
                        <div class="left-heading-gl">
                        	<p>Step 3 - Almost Done</p>
                    	</div>
                        <br />
                        <br />
                        <br />
                        <p>I affirm that all submitted information is accurate and is a fair representation of my dress (including details on any stains, tears or defects) and that no details regarding the condition of the gown have been omitted.</p><br />

<p>I understand that I am solely responsible for all information and images posted as part of my listing - and certify that I have the rights/permission to use the images submitted. I understand that if my contact information becomes out of date, my listing can be suspended, without notice, until updated information is provided. I understand that PreOwnedGowns.com is a listing service only and has no direct or indirect involvement with a sale of the item.</p><br />

<p>I will notify PreOwnedGowns.com within 15 days of my dress selling so that it can be removed from the site.</p><br />
                            <div class="error_message" style="margin-left: 30px;">
                                <?php print isset($_SESSION['model']['errormsg']['termsagree']) ? $_SESSION['model']['errormsg']['termsagree'] : '';?>
                            </div>
<p>* I agree to the terms <a onclick="window.open('/terms', 'bwindow', 'width=420, height=475, toolbar=no, directories=no, menubar=no, copyhistory=no, scrollbars=yes'); return false;" href="/terms">Terms &amp; Conditions</a><input type="checkbox" name="termsagree" value="1" id="termsagree" style="border:none;"/></p>
                    
                    
                       
                    <input type="hidden" name="form_submitted" value="1"/><br />
                    <a href="/member" style="margin: 0 0 0 680px;"><img src="../images/cancel.png" style="border: none; width: 96px; height: 34px;" alt="cancel gown listing"/></a>
                    <input id="submit-gl" type="submit" value=" " />
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
    <?php
	mysql_close($conn);
?>
</body>
</html>
<?php
	if(isset($_SESSION['model'])) unset($_SESSION['model']);
?>