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
<script type="text/javascript" src="/assets/js/charcheck.js"></script>

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
						
						$id = mysql_real_escape_string($_REQUEST['id']);
						$result = mysql_query("SELECT * FROM accessories WHERE ID = $id");
						$count = mysql_num_rows($result);
						$result = mysql_fetch_assoc($result);
						?>
                    <!--<h1>Register</h1>-->
                    <div id="r-form">
            	<form id="gown-list" action="/assets/scripts/update-admin-accessory.php" method="post" name="accessory-list" enctype="multipart/form-data">
                
                		<div class="form-column-left">
                        	<div class="error_message" style="float: right; margin-right: 25px;">
                        		<?php print isset($_SESSION['model']['errormsg']['accessorytype']) ? $_SESSION['model']['errormsg']['accessorytype'] : '';?>
                            </div>
                        <!--<p><span>* Accessory Type:</span></p><br />-->
                       <select name="accessorytype">
                       <option value=""> </option>
                       <option value="Jewelry" <?php echo $result ['AccessoryType'] == 'Jewelry' ? print 'selected="selected"' : ''; ?>>Jewelry</option>
                       <option value="Wrap/Jacket/Shaw" <?php echo $result ['AccessoryType'] == 'Wrap/Jacket/Shaw' ? print 'selected="selected"' : ''; ?>>Wrap/Jacket/Shaw</option>
                       <option value="Shoes" <?php echo $result ['AccessoryType'] == 'Shoes' ? print 'selected="selected"' : ''; ?>>Shoes</option>
                       <option value="Veil" <?php echo $result ['AccessoryType'] == 'Veil' ? print 'selected="selected"' : ''; ?>>Veil</option>
                       <option value="Sash/Belt" <?php echo $result ['AccessoryType'] == 'Sash/Belt' ? print 'selected="selected"' : ''; ?>>Sash/Belt</option>
                       <option value="Crinoline/Slip" <?php echo $result ['AccessoryType'] == 'Crinoline/Slip' ? print 'selected="selected"' : ''; ?>>Crinoline/Slip</option>
                       <option value="Tiara/Hair" <?php echo $result ['AccessoryType'] == 'Tiara/Hair' ? print 'selected="selected"' : ''; ?>>Tiara/Hair</option>
                       <option value="Purse" <?php echo $result ['AccessoryType'] == 'Purse' ? print 'selected="selected"' : ''; ?>>Purse</option>
                       </select>
                        <div class="clear"></div>
                        <br />
                        <div class="divider-line"></div>
                        <br />
                        
                        <div class="form-column-left">

                        <div id="insert"></div>
                        
                       <div id="jewelry">
                       <p><span>* Jewelry Type:</span></p>
                       <select name="jewelrytype">
                       <option value=""> </option>
                       <option value="Bracelet" <?php echo $result ['JewelryType'] == 'Bracelet' ? print 'selected="selected"' : ''; ?>>Bracelet</option>
                       <option value="Brooch" <?php echo $result ['JewelryType'] == 'Brooch' ? print 'selected="selected"' : ''; ?>>Brooch</option>
                       <option value="Earrings" <?php echo $result ['JewelryType'] == 'Earrings' ? print 'selected="selected"' : ''; ?>>Earrings</option>
                       <option value="Necklace" <?php echo $result ['JewelryType'] == 'Necklace' ? print 'selected="selected"' : ''; ?>>Necklace</option>
                       <option value="Other" <?php echo $result ['JewelryType'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Ring" <?php echo $result ['JewelryType'] == 'Ring' ? print 'selected="selected"' : ''; ?>>Ring</option>
                       <option value="Unknown" <?php echo $result ['JewelryType'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       </select>
                       
                       <p><span>* Condition:</span></p>
                       <select name="jewelrycondition">
                       <option value=""> </option>
                       <option value="New With Tags" <?php echo $result ['JewelryCondition'] == 'New With Tags' ? print 'selected="selected"' : ''; ?>>New With Tags</option>
                       <option value="Sample" <?php echo $result ['JewelryCondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                       <option value="Used" <?php echo $result ['JewelryCondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option></select></div>
                       </div>
                       
                       <div id="wrapjacketshaw">
                       <p><span>* Wrap Color:</span></p>
                       <select name="wrapcolor">
                       <option value=""> </option>
                       <option value="Champagne" <?php echo $result ['WrapColor'] == 'Champagne' ? print 'selected="selected"' : ''; ?>>Champagne</option>
                       <option value="Cream" <?php echo $result ['WrapColor'] == 'Cream' ? print 'selected="selected"' : ''; ?>>Cream</option>
                       <option value="Diamond White" <?php echo $result ['WrapColor'] == 'Diamond White' ? print 'selected="selected"' : ''; ?>>Diamond White</option>
                       <option value="Ivory" <?php echo $result ['WrapColor'] == 'Ivory' ? print 'selected="selected"' : ''; ?>>Ivory</option>
                       <option value="Off White" <?php echo $result ['WrapColor'] == 'Off White' ? print 'selected="selected"' : ''; ?>>Off White</option>
                       <option value="Other" <?php echo $result ['WrapColor'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Unknown" <?php echo $result ['WrapColor'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       <option value="White" <?php echo $result ['WrapColor'] == 'White' ? print 'selected="selected"' : ''; ?>>White</option>
                       </select>
                       
                       <p><span>* Wrap Length:</span></p>
                       <select name="wraplegnth">
                       <option value=""> </option>
                       <option value="02" <?php echo $result ['WrapLegnth'] == '02' ? print 'selected="selected"' : ''; ?>>02</option>
                       <option value="04" <?php echo $result ['WrapLegnth'] == '04' ? print 'selected="selected"' : ''; ?>>04</option>
                       <option value="06" <?php echo $result ['WrapLegnth'] == '06' ? print 'selected="selected"' : ''; ?>>06</option>
                       <option value="08" <?php echo $result ['WrapLegnth'] == '08' ? print 'selected="selected"' : ''; ?>>08</option>
                       <option value="10" <?php echo $result ['WrapLegnth'] == '10' ? print 'selected="selected"' : ''; ?>>10</option>
                       <option value="12" <?php echo $result ['WrapLegnth'] == '12' ? print 'selected="selected"' : ''; ?>>12</option>
                       <option value="14" <?php echo $result ['WrapLegnth'] == '14' ? print 'selected="selected"' : ''; ?>>14</option>
                       <option value="16" <?php echo $result ['WrapLegnth'] == '16' ? print 'selected="selected"' : ''; ?>>16</option>
                       <option value="18" <?php echo $result ['WrapLegnth'] == '18' ? print 'selected="selected"' : ''; ?>>18</option>
                       <option value="20" <?php echo $result ['WrapLegnth'] == '20' ? print 'selected="selected"' : ''; ?>>20</option>
                       <option value="22" <?php echo $result ['WrapLegnth'] == '22' ? print 'selected="selected"' : ''; ?>>22</option>
                       <option value="24" <?php echo $result ['WrapLegnth'] == '24' ? print 'selected="selected"' : ''; ?>>24</option>
                       <option value="26" <?php echo $result ['WrapLegnth'] == '26' ? print 'selected="selected"' : ''; ?>>26</option>
                       <option value="28" <?php echo $result ['WrapLegnth'] == '28' ? print 'selected="selected"' : ''; ?>>28</option>
                       <option value="L" <?php echo $result ['WrapLegnth'] == 'L' ? print 'selected="selected"' : ''; ?>>L</option>
                       <option value="M" <?php echo $result ['WrapLegnth'] == 'M' ? print 'selected="selected"' : ''; ?>>M</option>
                       <option value="S" <?php echo $result ['WrapLegnth'] == 'S' ? print 'selected="selected"' : ''; ?>>S</option>
                       <option value="XL" <?php echo $result ['WrapLegnth'] == 'XL' ? print 'selected="selected"' : ''; ?>>XL</option>
                       <option value="XS" <?php echo $result ['WrapLegnth'] == 'XS' ? print 'selected="selected"' : ''; ?>>XS</option>
                       </select>
                       
                       <p><span>* Wrap Condition:</span></p>
                       <select name="wrapcondition">
                       <option value=""> </option>
                       <option value="New With Tags" <?php echo $result ['WrapCondition'] == 'New With Tags' ? print 'selected="selected"' : ''; ?>>New With Tags</option>
                       <option value="Sample" <?php echo $result ['WrapCondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                       <option value="Used" <?php echo $result ['WrapCondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option></select>
                       </div> 
                       
                       <div id="shoes">
                       <p><span>* Shoe Color:</span></p>
                       <select name="shoecolor">
                       <option value=""> </option>
                       <option value="Black" <?php echo $result ['ShoeColor'] == 'Black' ? print 'selected="selected"' : ''; ?>>Black</option>
                       <option value="Blue" <?php echo $result ['ShoeColor'] == 'Blue' ? print 'selected="selected"' : ''; ?>>Blue</option>
                       <option value="Champagne" <?php echo $result ['ShoeColor'] == 'Champagne' ? print 'selected="selected"' : ''; ?>>Champagne</option>
                       <option value="Cream" <?php echo $result ['ShoeColor'] == 'Cream' ? print 'selected="selected"' : ''; ?>>Cream</option>
                       <option value="Diamond White" <?php echo $result ['ShoeColor'] == 'Diamond White' ? print 'selected="selected"' : ''; ?>>Diamond White</option>
                       <option value="Ivory" <?php echo $result ['ShoeColor'] == 'Ivory' ? print 'selected="selected"' : ''; ?>>Ivory</option>
                       <option value="Off White" <?php echo $result ['ShoeColor'] == 'Off White' ? print 'selected="selected"' : ''; ?>>Off White</option>
                       <option value="Other" <?php echo $result ['ShoeColor'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Red" <?php echo $result ['ShoeColor'] == 'Red' ? print 'selected="selected"' : ''; ?>>Red</option>
                       <option value="Unknown" <?php echo $result ['ShoeColor'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       <option value="White" <?php echo $result ['ShoeColor'] == 'White' ? print 'selected="selected"' : ''; ?>>White</option>
                       </select>
                       
                       <p><span>* Shoe Size:</span></p>
                       <select name="shoesize">
                       <option value=""> </option>
                       <option value="5" <?php echo $result ['ShoeSize'] == '5' ? print 'selected="selected"' : ''; ?>>Size 5</option>
                       <option value="5.5" <?php echo $result ['ShoeSize'] == '5.5' ? print 'selected="selected"' : ''; ?>>Size 5 1/2</option>
                       <option value="6" <?php echo $result ['ShoeSize'] == '6' ? print 'selected="selected"' : ''; ?>>Size 6</option>
                       <option value="6.5" <?php echo $result ['ShoeSize'] == '6.5' ? print 'selected="selected"' : ''; ?>>Size 6 1/2</option>
                       <option value="7" <?php echo $result ['ShoeSize'] == '7' ? print 'selected="selected"' : ''; ?>>Size 7</option>
                       <option value="7.5" <?php echo $result ['ShoeSize'] == '7.5' ? print 'selected="selected"' : ''; ?>>Size 7 1/2</option>
                       <option value="8" <?php echo $result ['ShoeSize'] == '8' ? print 'selected="selected"' : ''; ?>>Size 8</option>
                       <option value="8.5" <?php echo $result ['ShoeSize'] == '8.5' ? print 'selected="selected"' : ''; ?>>Size 8 1/2</option>
                       <option value="9" <?php echo $result ['ShoeSize'] == '9' ? print 'selected="selected"' : ''; ?>>Size 9</option>
                       <option value="9.5" <?php echo $result ['ShoeSize'] == '9.5' ? print 'selected="selected"' : ''; ?>>Size 9 1/2</option>
                       <option value="10" <?php echo $result ['ShoeSize'] == '10' ? print 'selected="selected"' : ''; ?>>Size 10</option>
                       <option value="10.5" <?php echo $result ['ShoeSize'] == '10.5' ? print 'selected="selected"' : ''; ?>>Size 10 1/2</option>
                       <option value="11" <?php echo $result ['ShoeSize'] == '11' ? print 'selected="selected"' : ''; ?>>Size 11</option>
                       <option value="11.5" <?php echo $result ['ShoeSize'] == '11.5' ? print 'selected="selected"' : ''; ?>>Size 11 1/2</option>
                       <option value="12" <?php echo $result ['ShoeSize'] == '12' ? print 'selected="selected"' : ''; ?>>Size 12</option>
                       <option value="12.5" <?php echo $result ['ShoeSize'] == '12.5' ? print 'selected="selected"' : ''; ?>>Size 12 1/2</option>
                       </select>
                       
                       <p><span>* Condition:</span></p>
                       <select name="shoecondition">
                       <option value=""> </option>
                       <option value="New With Tags" <?php echo $result ['ShoeCondition'] == 'New With Tags' ? print 'selected="selected"' : ''; ?>>New With Tags</option>
                       <option value="sample" <?php echo $result ['ShoeCondition'] == 'sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                       <option value="used" <?php echo $result ['ShoeCondition'] == 'used' ? print 'selected="selected"' : ''; ?>>Used</option></select>
                       </div>
                       
                       <div id="veil">
                       <p><span>* Veil Color:</span></p>
                       <select name="veilcolor">
                       <option value=""> </option>
                       <option value="Champagne" <?php echo $result ['VeilColor'] == 'Champagne' ? print 'selected="selected"' : ''; ?>>Champagne</option>
                       <option value="Cream" <?php echo $result ['VeilColor'] == 'Cream' ? print 'selected="selected"' : ''; ?>>Cream</option>
                       <option value="Diamond White" <?php echo $result ['VeilColor'] == 'Diamond White' ? print 'selected="selected"' : ''; ?>>Diamond White</option>
                       <option value="Ivory" <?php echo $result ['VeilColor'] == 'Ivory' ? print 'selected="selected"' : ''; ?>>Ivory</option>
                       <option value="Off White" <?php echo $result ['VeilColor'] == 'Off White' ? print 'selected="selected"' : ''; ?>>Off White</option>
                       <option value="Other" <?php echo $result ['VeilColor'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Unknown" <?php echo $result ['VeilColor'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       <option value="White" <?php echo $result ['VeilColor'] == 'White' ? print 'selected="selected"' : ''; ?>>White</option>
                       </select>
                       
                       <p><span>* Veil Length:</span></p>
                       <select name="veillength">
                       <option value=""> </option>
                       <option value="Blusher" <?php echo $result ['VeilLength'] == 'Blusher' ? print 'selected="selected"' : ''; ?>>Blusher</option>
                       <option value="Cathedral" <?php echo $result ['VeilLength'] == 'Cathedral' ? print 'selected="selected"' : ''; ?>>Cathedral</option>
                       <option value="Chapel" <?php echo $result ['VeilLength'] == 'Chapel' ? print 'selected="selected"' : ''; ?>>Chapel</option>
                       <option value="Double Tier" <?php echo $result ['VeilLength'] == 'Double Tier' ? print 'selected="selected"' : ''; ?>>Double Tier</option>
                       <option value="Elbow" <?php echo $result ['VeilLength'] == 'Elbow' ? print 'selected="selected"' : ''; ?>>Elbow</option
                       ><option value="Finger Tip" <?php echo $result ['VeilLength'] == 'Finger Tip' ? print 'selected="selected"' : ''; ?>>Finger Tip</option>
                       <option value="Mantilla" <?php echo $result ['VeilLength'] == 'Mantilla' ? print 'selected="selected"' : ''; ?>>Mantilla</option>
                       <option value="Other" <?php echo $result ['VeilLength'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Unknown" <?php echo $result ['VeilLength'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       </select>
                       
                       <p><span>* Condition:</span></p>
                       <select name="veilcondition">
                       <option value=""> </option>
                       <option value="New With Tags" <?php echo $result ['VeilCondition'] == 'New With Tags' ? print 'selected="selected"' : ''; ?>>New With Tags</option>
                       <option value="Sample" <?php echo $result ['VeilCondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                       <option value="Used" <?php echo $result ['VeilCondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option> 
                       </select>
                       </div>
                       
                       <div id="sashbelt">
                       <p><span>* Sash Color:</span></p>
                       <select name="sashcolor">
                       <option value=""> </option>
                       <option value="Black" <?php echo $result ['SashColor'] == 'Black' ? print 'selected="selected"' : ''; ?>>Black</option>
                       <option value="Blue" <?php echo $result ['SashColor'] == 'Blue' ? print 'selected="selected"' : ''; ?>>Blue</option>
                       <option value="Brown" <?php echo $result ['SashColor'] == 'Brown' ? print 'selected="selected"' : ''; ?>>Brown</option>
                       <option value="Champagne" <?php echo $result ['SashColor'] == 'Champagne' ? print 'selected="selected"' : ''; ?>>Champagne</option>
                       <option value="Cream" <?php echo $result ['SashColor'] == 'Cream' ? print 'selected="selected"' : ''; ?>>Cream</option>
                       <option value="Gold" <?php echo $result ['SashColor'] == 'Gold' ? print 'selected="selected"' : ''; ?>>Gold</option>
                       <option value="Green" <?php echo $result ['SashColor'] == 'Green' ? print 'selected="selected"' : ''; ?>>Green</option>
                       <option value="Ivory" <?php echo $result ['SashColor'] == 'Ivory' ? print 'selected="selected"' : ''; ?>>Ivory</option>
                       <option value="Other" <?php echo $result ['SashColor'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Pink" <?php echo $result ['SashColor'] == 'Pink' ? print 'selected="selected"' : ''; ?>>Pink</option>
                       <option value="Purple" <?php echo $result ['SashColor'] == 'Purple' ? print 'selected="selected"' : ''; ?>>Purple</option>
                       <option value="Red" <?php echo $result ['SashColor'] == 'Red' ? print 'selected="selected"' : ''; ?>>Red</option>
                       <option value="Sable" <?php echo $result ['SashColor'] == 'Sable' ? print 'selected="selected"' : ''; ?>>Sable</option>
                       <option value="Silver" <?php echo $result ['SashColor'] == 'Silver' ? print 'selected="selected"' : ''; ?>>Silver</option>
                       <option value="Unknown" <?php echo $result ['SashColor'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       <option value="White" <?php echo $result ['SashColor'] == 'White' ? print 'selected="selected"' : ''; ?>>White</option>
                       </select>
                       
                       <p><span>* Condition:</span></p>
                       <select name="sashcondition">
                       <option value=""> </option>
                       <option value="New With Tags" <?php echo $result ['SashCondition'] == 'New With Tags' ? print 'selected="selected"' : ''; ?>>New With Tags</option>
                       <option value="Sample" <?php echo $result ['SashCondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                       <option value="Used"  <?php echo $result ['SashCondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option>
                       </select>
                       </div>
                       
                       <div id="crinolineslip">
                       <p><span>* Slip Color:</span></p>
                       <select name="slipcolor">
                       <option value=""> </option>
                       <option value="Other" <?php echo $result ['SlipColor'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Unknown" <?php echo $result ['SlipColor'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       <option value="White/Ivory" <?php echo $result ['SlipColor'] == 'White/Ivory' ? print 'selected="selected"' : ''; ?>>White / Ivory</option>
                       </select>
                       
                       <p><span>* Slip Size:</span></p>
                       <select name="slipsize">
                       <option value=""> </option>
                       <option value="25/26" <?php echo $result ['SlipSize'] == '25/26' ? print 'selected="selected"' : ''; ?>>25/26</option>
                       <option value="27/28" <?php echo $result ['SlipSize'] == '27/28' ? print 'selected="selected"' : ''; ?>>27/28</option>
                       <option value="29/30" <?php echo $result ['SlipSize'] == '29/30' ? print 'selected="selected"' : ''; ?>>29/30</option>
                       <option value="31/32" <?php echo $result ['SlipSize'] == '31/32' ? print 'selected="selected"' : ''; ?>>31/32</option>
                       <option value="33/34" <?php echo $result ['SlipSize'] == '33/34' ? print 'selected="selected"' : ''; ?>>33/34</option>
                       <option value="35/36" <?php echo $result ['SlipSize'] == '35/36' ? print 'selected="selected"' : ''; ?>>35/36</option>
                       <option value="37/38" <?php echo $result ['SlipSize'] == '37/38' ? print 'selected="selected"' : ''; ?>>37/38</option>
                       <option value="39/40" <?php echo $result ['SlipSize'] == '39/40' ? print 'selected="selected"' : ''; ?>>39/40</option>
                       <option value="41/42" <?php echo $result ['SlipSize'] == '41/42' ? print 'selected="selected"' : ''; ?>>41/42</option>
                       <option value="43/44" <?php echo $result ['SlipSize'] == '43/44' ? print 'selected="selected"' : ''; ?>>43/44</option>
                       <option value="45/46" <?php echo $result ['SlipSize'] == '45/46' ? print 'selected="selected"' : ''; ?>>45/46</option>
                       <option value="47/48" <?php echo $result ['SlipSize'] == '47/48' ? print 'selected="selected"' : ''; ?>>47/48</option>
                       <option value="49/50" <?php echo $result ['SlipSize'] == '49/50' ? print 'selected="selected"' : ''; ?>>49/50</option>
                       <option value="Extra Large" <?php echo $result ['SlipSize'] == 'Extra Large' ? print 'selected="selected"' : ''; ?>>Extra Large</option>
                       <option value="Other" <?php echo $result ['SlipSize'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Regular" <?php echo $result ['SlipSize'] == 'Regular' ? print 'selected="selected"' : ''; ?>>Regular</option>
                       <option value="Unknown" <?php echo $result ['SlipSize'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       </select>
                       
                       <p><span>* Condition:</span></p>
                       <select name="slipcondition">
                       <option value=""> </option>
                       <option value="New With Tags" <?php echo $result ['SlipCondition'] == 'New With Tags' ? print 'selected="selected"' : ''; ?>>New With Tags</option>
                       <option value="Sample" <?php echo $result ['SlipCondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                       <option value="Used" <?php echo $result ['SlipCondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option>
                       </select>
                       </div>
                       
                       <div id="tiarahairaccessory">
                       <p><span>* Condition:</span></p>
                       <select name="tiaracondition">
                       <option value=""> </option>
                       <option value="New With Tags" <?php echo $result ['TiaraCondition'] == 'New With Tags' ? print 'selected="selected"' : ''; ?>>New With Tags</option
                       ><option value="Sample" <?php echo $result ['TiaraCondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                       <option value="Used" <?php echo $result ['TiaraCondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option>
                       </select>
                       </div>
                       
                       <div id="purse">
                       <p><span>* Purse Color:</span></p>
                       <select name="pursecolor">
                       <option value=""> </option>
                       <option value="Champagne" <?php echo $result ['PurseColor'] == 'Champagne' ? print 'selected="selected"' : ''; ?>>Champagne</option>
                       <option value="Cream" <?php echo $result ['PurseColor'] == 'Cream' ? print 'selected="selected"' : ''; ?>>Cream</option>
                       <option value="Diamond White" <?php echo $result ['PurseColor'] == 'Diamond White' ? print 'selected="selected"' : ''; ?>>Diamond White</option>
                       <option value="Ivory" <?php echo $result ['PurseColor'] == 'Ivory' ? print 'selected="selected"' : ''; ?>>Ivory</option>
                       <option value="Off White" <?php echo $result ['PurseColor'] == 'Off White' ? print 'selected="selected"' : ''; ?>>Off White</option>
                       <option value="Other" <?php echo $result ['PurseColor'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                       <option value="Unknown" <?php echo $result ['PurseColor'] == 'Unknown' ? print 'selected="selected"' : ''; ?>>Unknown</option>
                       <option value="White" <?php echo $result ['PurseColor'] == 'White' ? print 'selected="selected"' : ''; ?>>White</option>
                       </select>
                       
                       <p><span>* Condition:</span></p>
                       <select name="pursecondition">
                       <option value=""> </option>
                       <option value="New With Tags" <?php echo $result ['PurseCondition'] == 'New With Tags' ? print 'selected="selected"' : ''; ?>>New With Tags</option>
                       <option value="Sample" <?php echo $result ['PurseCondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                       <option value="Used" <?php echo $result ['PurseCondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option>
                       </select>
                       </div>
                       </div>
                       
                        <div class="form-column-right">
                        <!--<div class="glspacer"></div>-->
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['askingprice']) ? $_SESSION['model']['errormsg']['askingprice'] : '';?>
                        </div>
                        <p><span>* Asking Paid:</span></p><input type="text" name="askingprice" value="<?php echo $result ['AskingPrice'];?>"/>
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
						
                         <?php 
                        $file = $_SERVER['DOCUMENT_ROOT'] . "/assets/listtxt/".$result['AccessDescr']; //Path to your *.txt file
                        $contents = file($file);
                        $ad = implode($contents);
						?>
                        <p><span>File Name:</span></p><?php echo $result ['AccessDescr'];?>
                        <input type="hidden" name="adname" value="<?php echo $result ['AccessDescr'];?>" />
                        <p><span>Accessory Description:</span></p><textarea id="accessdescr" name="accessdescr" class="text_area_input" rows="6" cols="30"><?php echo $ad;?></textarea><br /><br />

            <p><span>Photos</span></p><br /><br />
                        <p><span>Image 1:(main)</span></p><?php echo $result ['Image1'];?><br />
                        <a href="/assets/scripts/delete-acess-image.php?id=<?php echo $result ['Image1'];?>&gl=<?php echo $result ['ID'];?>">delete</a><br /><br />
                        <p><span>Image 2:</span></p><?php echo $result ['Image2'];?><br />
                        <a href="/assets/scripts/delete-acess-image.php?id=<?php echo $result ['Image2'];?>&gl=<?php echo $result ['ID'];?>">delete</a><br /><br />
                        <p><span>Image 3:</span></p><?php echo $result ['Image3'];?><br />
                        <a href="/assets/scripts/delete-acess-image.php?id=<?php echo $result ['Image3'];?>&gl=<?php echo $result ['ID'];?>">delete</a><br /><br />
                <div class="clear"></div>
                <br />
                <br />
            <!--<p><a href="/assets/listingimages/image-uploader.php?height=300&width=300" class="thickbox"><img src="../images/uploadimage.png" style="border: none;"/></a></p><br />-->
                        
                        <p><span style="width: 894px;">Your pictures will really help buyers see the beauty of your accessory. Ideal images include pictures of the front, back and detail of your accessory on a person or mannequin. Your listing includes 3 images.</span></p><br />
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
                        <option value="Designer/Manufacturer" <?php echo $result ['TypeofSeller'] == 'Designer/Manufacturer' ? print 'selected="selected"' : ''; ?>>Designer/Manufacturer</option>
                        <option value="Salon" <?php echo $result ['TypeofSeller'] == 'Salon' ? print 'selected="selected"' : ''; ?>>Salon</option>
                        <option value="Consignment Shop" <?php echo $result ['TypeofSeller'] == 'Consignment Shop' ? print 'selected="selected"' : ''; ?>>Consignment Shop</option>
                        <option value="Reseller" <?php echo $result ['TypeofSeller'] == 'Reseller' ? print 'selected="selected"' : ''; ?>>Reseller</option>
                        <option value="Individual (Personal Use)" <?php echo $result ['TypeofSeller'] == 'Individual (Personal Use)' ? print 'selected="selected"' : ''; ?>>Individual (Personal Use)</option>
                        </select><br />
                        
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['originalreceipt']) ? $_SESSION['model']['errormsg']['originalreceipt'] : '';?>
                        </div>
                        <p><span>* Have original receipt</span></p>
                        <select name="originalreceipt">
                        <option value=""></option>
                        <option value="Yes" <?php echo $result ['OriginalReceipt'] == 'Yes' ? print 'selected="selected"' : ''; ?>>Yes</option>
                        <option value="No" <?php echo $result ['OriginalReceipt'] == 'No' ? print 'selected="selected"' : ''; ?>>No</option>
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
                        <option value="Yes" <?php echo $result ['OriginalOwner'] == 'Yes' ? print 'selected="selected"' : ''; ?>>Yes</option>
                        <option value="No" <?php echo $result ['OriginalOwner'] == 'No' ? print 'selected="selected"' : ''; ?>>No</option>
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
                        </select><br />
                        
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['city']) ? $_SESSION['model']['errormsg']['city'] : '';?>
                        </div>    
                         <p><span>City:</span></p><input type="text" name="city" value="<?php echo $result ['City'];?>"/>
                        </div>
                        
                        <div class="form-column-right">
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['zip']) ? $_SESSION['model']['errormsg']['zip'] : '';?>
                        </div>    
                        <p><span>* Zip:</span></p><input type="text" name="zip" value="<?php echo $result ['Zip'];?>"/>
         
                        <p><span>Shipping Costs</span></p>
                        <select name="shippingcost">
                        <option value=""></option> 
                        <option value="To Be Paid By Seller" <?php echo $result ['ShippingCost'] == 'To Be Paid By Seller' ? print 'selected="selected"' : ''; ?>>To Be Paid By Seller</option>
                        <option value="To Be Paid By Buyer" <?php echo $result ['ShippingCost'] == 'To Be Paid By Buyer' ? print 'selected="selected"' : ''; ?>>To Be Paid By Buyer</option>
                        <option value="To Be Negotiated" <?php echo $result ['ShippingCost'] == 'To Be Negotiated' ? print 'selected="selected"' : ''; ?>>To Be Negotiated</option>
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

                        <p><span>Terms Of Sale:</span><textarea id="saleterms" name="saleterms" class="text_area_input4" rows="5" cols="10" style="width: 712px;"><?php echo $result ['SaleTerms'];?></textarea></p><br />
                        
                        <div id="barbox5">
                          <div class="progressbar5"></div>
                        </div>
                        <div class="count5">255</div>
                        <br />
                        
                        <p><span>Will Ship To:</span><textarea id="willship" name="willship" class="text_area_input5" rows="5" cols="10" style="width: 712px;"><?php echo $result ['WillShip'];?></textarea></p><br />
                        
                        <div id="barbox6">
                          <div class="progressbar6"></div>
                        </div>
                        <div class="count6">255</div>
                        <br />
                        
                        <p><span>Accepted Payment Methods:</span><textarea id="acceptpayment" class="text_area_input6" name="acceptpayment" rows="5" cols="10" style="width: 712px;"><?php echo $result ['AcceptPayment'];?></textarea></p><br />
                        
                        <div class="divider-line"></div>
                        
						<div class="error_message" style="float: right; margin-right: 25px;">
							<?php print isset($_SESSION['model']['errormsg']['contactemail']) ? $_SESSION['model']['errormsg']['contactemail'] : '';?>
                        </div>
                        <br />
                        <p><span>Contact Email:</span><input type="text" name="contactemail" value="<?php echo $result ['ContactEmail'];?>"/></p><br />
                        
                        <br />
                        
                        <p><span>How did you hear about us?</span><input type="text" name="hearaboutpog" value="<?php echo $result ['HearAboutpog'];?>"/></p><br />
                        
                        <div class="left-heading-gl">
                        	<p>Step 3 - Cancel | Delete | Update</p>
                    	</div>
                       
                    <input type="hidden" name="form_submitted" value="1"/><br />
                    <input type="hidden" name="accessorylistingid" value="<?php echo $result ['ID'];?>"/><br />
                    <a href="/admin/home" style="margin: 0 0 0 550px;"><img src="../images/cancel.png" style="border: none; width: 96px; height: 34px;" alt="cancel gown listing"/></a>
                    <a href="/assets/scripts/delete-accessory.php?id=<?php echo $result ['ID'];?>&img1=<?php echo $result ['Image1'];?>&img2=<?php echo $result ['Image2'];?>&img3=<?php echo $result ['Image3'];?>&ad=<?php echo $result ['AccessDescr'];?>" style="margin: 0 0 0 22px;"><img src="../images/delete.png" style="border: none; width: 96px; height: 34px;" alt="delete accessory listing"/></a>
                    <input id="submit-update-gowns" type="submit" value=" " />
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