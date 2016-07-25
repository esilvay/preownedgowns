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
                        <p>Step 1 - Dress Details</p>
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
            	<!--<form id="gown-list" action="/assets/scripts/list-gown-trans.php" method="post" name="gown-list" enctype="multipart/form-data">-->
                <form id="gown-list" action="/assets/scripts/list-gown.php" method="post" name="gown-list" enctype="multipart/form-data">

                		<div class="form-column-left">
                        	<div class="error_message" style="float: right; margin-right: 25px;">
                        		<?php print isset($_SESSION['model']['errormsg']['gowntype']) ? $_SESSION['model']['errormsg']['gowntype'] : '';?>
                            </div>
                        <p><span>* Gown Type:</span></p><select name="gowntype">
                        <option value="" selected="selected">-Select One-</option> 
                        <option value="Wedding Gown" <?php isset($_SESSION['model']['params']['gowntype']) && $_SESSION['model']['params']['gowntype'] == 'Wedding Gown' ? print 'selected="selected"' : ''; ?>>Wedding Gown</option>
                        <option value="Bridesmaid Dress" <?php isset($_SESSION['model']['params']['gowntype']) && $_SESSION['model']['params']['gowntype'] == 'Bridesmaid Dress' ? print 'selected="selected"' : ''; ?>>Bridesmaid Dress</option>
                        <option value="Prom Dress" <?php isset($_SESSION['model']['params']['gowntype']) && $_SESSION['model']['params']['gowntype'] == 'Prom Dress' ? print 'selected="selected"' : ''; ?>>Prom Dress</option>
                        <option value="Evening Gown" <?php isset($_SESSION['model']['params']['gowntype']) && $_SESSION['model']['params']['gowntype'] == 'Evening Gown' ? print 'selected="selected"' : ''; ?>>Evening Gown</option>
                        <option value="Other" <?php isset($_SESSION['model']['params']['gowntype']) && $_SESSION['model']['params']['gowntype'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                        </select>
                        <br />

                         <div class="error_message" style="float: right; margin-right: 25px;">	
							<?php print isset($_SESSION['model']['errormsg']['designer']) ? $_SESSION['model']['errormsg']['designer'] : '';?>
                        </div>
           				<p><span>* Designer:</span></p>
                        <select name="designer">
                        <option value="" selected="selected"></option> 
                        <option value="2 Be" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == '2 Be' ? print 'selected="selected"' : ''; ?>>2 Be</option>
                        <option value="Adele Weschler" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Adele Weschler' ? print 'selected="selected"' : ''; ?>>Adele Weschler</option>
                        <option value="Alfred Angelo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Alfred Angelo' ? print 'selected="selected"' : ''; ?>>Alfred Angelo</option>
                        <option value="Alfred Sung" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Alfred Sung' ? print 'selected="selected"' : ''; ?>>Alfred Sung</option>
                        <option value="Alisa Benay" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Alisa Benay' ? print 'selected="selected"' : ''; ?>>Alisa Benay</option>
                        <option value="Alita Graham" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Alita Graham' ? print 'selected="selected"' : ''; ?>>Alita Graham</option>
                        <option value="Allure" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Allure' ? print 'selected="selected"' : ''; ?>>Allure</option>
                        <option value="Alvina Valenta" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Alvina Valenta' ? print 'selected="selected"' : ''; ?>>Alvina Valenta</option>
                        
                        <option value="Amalia Carrara" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Amalia Carrara' ? print 'selected="selected"' : ''; ?>>Amalia Carrara</option>
                        <option value="Amelia Casablanca" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Amelia Casablanca' ? print 'selected="selected"' : ''; ?>>Amelia Casablanca</option>
                        <option value="Amsale" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Amsale' ? print 'selected="selected"' : ''; ?>>Amsale</option>
                        <option value="Amy Kuschel" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Amy Kuschel' ? print 'selected="selected"' : ''; ?>>Amy Kuschel</option>
                        <option value="Amy Michelson" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Amy Michelson' ? print 'selected="selected"' : ''; ?>>Amy Michelson</option>
                        <option value="Amy Robinson" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Amy Robinson' ? print 'selected="selected"' : ''; ?>>Amy Robinson </option>
                        <option value="Angel Sanchez" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Angel Sanchez' ? print 'selected="selected"' : ''; ?>>Angel Sanchez</option>
                        <option value="Angelina Faccenda" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Angelina Faccenda' ? print 'selected="selected"' : ''; ?>>Angelina Faccenda</option>
                        <option value="Anjolique" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Anjolique' ? print 'selected="selected"' : ''; ?>>Anjolique</option>
                        
                        <option value="Anne Barge" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Anne Barge' ? print 'selected="selected"' : ''; ?>>Anne Barge</option>
                        <option value="Atelier Aimee" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Atelier Aimee' ? print 'selected="selected"' : ''; ?>>Atelier Aimee</option>
                        <option value="Audrey Hart" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Audrey Hart' ? print 'selected="selected"' : ''; ?>>Audrey Hart</option>
                        <option value="Augusta Jones" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Augusta Jones' ? print 'selected="selected"' : ''; ?>>Augusta Jones</option>
                        <option value="Badgley Mischka" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Badgley Mischka' ? print 'selected="selected"' : ''; ?>>Badgley Mischka</option>
                        <option value="Baracci" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Baracci' ? print 'selected="selected"' : ''; ?>>Baracci</option>
                        <option value="Barbra Allin" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Barbra Allin' ? print 'selected="selected"' : ''; ?>>Barbra Allin </option>
                        <option value="BCBG MAXAZRIA" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'BCBG MAXAZRIA' ? print 'selected="selected"' : ''; ?>>BCBG MAXAZRIA</option>
                        <option value="Bianchi" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Bianchi' ? print 'selected="selected"' : ''; ?>>Bianchi</option>
                        
                        <option value="Birnbaum Bullock" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Birnbaum Bullock' ? print 'selected="selected"' : ''; ?>>Birnbaum &amp; Bullock</option>
                        <option value="Bonny" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Bonny' ? print 'selected="selected"' : ''; ?>>Bonny</option>
                        <option value="Carmela Sutera" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Carmela Sutera' ? print 'selected="selected"' : ''; ?>>Carmela Sutera</option>
                        <option value="Carmen Marc Valvo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Carmen Marc Valvo' ? print 'selected="selected"' : ''; ?>>Carmen Marc Valvo</option>
                        <option value="Carolina Herrera" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Carolina Herrera' ? print 'selected="selected"' : ''; ?>>Carolina Herrera</option>
                        <option value="Caroline DeVillo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Caroline DeVillo' ? print 'selected="selected"' : ''; ?>>Caroline DeVillo</option>
                        <option value="Casablanca" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Casablanca' ? print 'selected="selected"' : ''; ?>>Casablanca</option>
                        <option value="Christina Wu" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Christina Wu' ? print 'selected="selected"' : ''; ?>>Christina Wu</option>
                        
                        <option value="Christos" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Christos' ? print 'selected="selected"' : ''; ?>>Christos</option>
                        <option value="Claire Pettibone" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Claire Pettibone' ? print 'selected="selected"' : ''; ?>>Claire Pettibone</option>
                        <option value="Cocoe Voci" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Cocoe Voci' ? print 'selected="selected"' : ''; ?>>Cocoe Voci</option>
                        <option value="Cymbeline" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Cymbeline' ? print 'selected="selected"' : ''; ?>>Cymbeline</option>
                        <option value="Da Vinci" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Da Vinci' ? print 'selected="selected"' : ''; ?>>Da Vinci</option>
                        <option value="Daniel Thompson" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Daniel Thompson' ? print 'selected="selected"' : ''; ?>>Daniel Thompson</option>
                        <option value="David&#039;s Bridal" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'David&#039;s Bridal' ? print 'selected="selected"' : ''; ?>>David&#039;s Bridal</option>
                        <option value="Demetrios" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Demetrios' ? print 'selected="selected"' : ''; ?>>Demetrios</option>
                        
                        <option value="Diamond Bride" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Diamond Bride' ? print 'selected="selected"' : ''; ?>>Diamond Bride</option>
                        <option value="Dolce Gabbana" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Dolce Gabbana' ? print 'selected="selected"' : ''; ?>>Dolce Gabbana</option>
                        <option value="Domo Adami" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Domo Adami' ? print 'selected="selected"' : ''; ?>>Domo Adami</option>
                        <option value="Eavis Brown" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Eavis Brown' ? print 'selected="selected"' : ''; ?>>Eavis &amp; Brown</option>
                        <option value="Eden Bridals" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Eden Bridals' ? print 'selected="selected"' : ''; ?>>Eden Bridals</option>
                        <option value="Edgardo Bonilla" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Edgardo Bonilla' ? print 'selected="selected"' : ''; ?>>Edgardo Bonilla</option>
                        <option value="Elie Saab" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Elie Saab' ? print 'selected="selected"' : ''; ?>>Elie Saab</option>
                        <option value="Elizabeth Fillmore" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Elizabeth Fillmore' ? print 'selected="selected"' : ''; ?>>Elizabeth Fillmore</option>
                        
                        <option value="Emerald Bridal" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Emerald Bridal' ? print 'selected="selected"' : ''; ?>>Emerald Bridal</option>
                        <option value="Enzoani" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Enzoani' ? print 'selected="selected"' : ''; ?>>Enzoani</option>
                        <option value="Escada" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Escada' ? print 'selected="selected"' : ''; ?>>Escada</option>
                        <option value="Essense of Australia" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Essense of Australia' ? print 'selected="selected"' : ''; ?>>Essense of Australia</option>
                        <option value="Eugenia" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Eugenia' ? print 'selected="selected"' : ''; ?>>Eugenia</option>
                        <option value="Evalina Schmidtke" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Evalina Schmidtke' ? print 'selected="selected"' : ''; ?>>Evalina Schmidtke</option>
                        <option value="Eve of Milady" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Eve of Milady' ? print 'selected="selected"' : ''; ?>>Eve of Milady</option>
                        <option value="Exclusive Bridals" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Exclusive Bridals' ? print 'selected="selected"' : ''; ?>>Exclusive Bridals</option>
                        <option value="Forever Yours" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Forever Yours' ? print 'selected="selected"' : ''; ?>>Forever Yours</option>
                        
                        <option value="Galina" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Galina' ? print 'selected="selected"' : ''; ?>>Galina</option>
                        <option value="Givenchy" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Givenchy' ? print 'selected="selected"' : ''; ?>>Givenchy</option>
                        <option value="Helen Morley" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Helen Morley' ? print 'selected="selected"' : ''; ?>>Helen Morley</option>
                        <option value="Henry Roth" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Henry Roth' ? print 'selected="selected"' : ''; ?>>Henry Roth</option>
                        <option value="Ian Stuart" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Ian Stuart' ? print 'selected="selected"' : ''; ?>>Ian Stuart</option>
                        <option value="Impression" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Impression' ? print 'selected="selected"' : ''; ?>>Impression</option>
                        <option value="Indian Bridal Lehnga" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Indian Bridal Lehnga' ? print 'selected="selected"' : ''; ?>>Indian Bridal Lehnga</option>
                        <option value="Ines Di Santo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Ines Di Santo' ? print 'selected="selected"' : ''; ?>>Ines Di Santo</option>
                        <option value="Inspired Gowns" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Inspired Gowns' ? print 'selected="selected"' : ''; ?>>Inspired Gowns</option>
                        
                        <option value="J. Crew" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'J. Crew' ? print 'selected="selected"' : ''; ?>>J. Crew</option>
                        <option value="James Clifford" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'James Clifford' ? print 'selected="selected"' : ''; ?>>James Clifford</option>
                        <option value="Jana-Marie" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jana-Marie' ? print 'selected="selected"' : ''; ?>>Jana-Marie</option>
                        <option value="Janell Berte" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Janell Berte' ? print 'selected="selected"' : ''; ?>>Janell Berte</option>
                        <option value="Jasmine" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jasmine' ? print 'selected="selected"' : ''; ?>>Jasmine</option>
                        <option value="Jenny Lee" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jenny Lee' ? print 'selected="selected"' : ''; ?>>Jenny Lee</option>
                        <option value="Jenny Packham" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jenny Packham' ? print 'selected="selected"' : ''; ?>>Jenny Packham</option>
                        <option value="Jenny Yoo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jenny Yoo' ? print 'selected="selected"' : ''; ?>>Jenny Yoo</option>
                        <option value="Jessica Iverson" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jessica Iverson' ? print 'selected="selected"' : ''; ?>>Jessica Iverson</option>
                        
                        <option value="Jessica McClintock" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jessica McClintock' ? print 'selected="selected"' : ''; ?>>Jessica McClintock</option>
                        <option value="Jim Hjelm" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jim Hjelm' ? print 'selected="selected"' : ''; ?>>Jim Hjelm</option>
                        <option value="Jin Wang" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jin Wang' ? print 'selected="selected"' : ''; ?>>Jin Wang</option>
                        <option value="Jorge Manuel" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Jorge Manuel' ? print 'selected="selected"' : ''; ?>>Jorge Manuel</option>
                        <option value="Judd Waddell" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Judd Waddell' ? print 'selected="selected"' : ''; ?>>Judd Waddell</option>
                        <option value="Junko Yoshioka" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Junko Yoshioka' ? print 'selected="selected"' : ''; ?>>Junko Yoshioka</option>
                        <option value="Justin Alexander" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Justin Alexander' ? print 'selected="selected"' : ''; ?>>Justin Alexander</option>
                        <option value="Justina McCaffrey" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Justina McCaffrey' ? print 'selected="selected"' : ''; ?>>Justina McCaffrey</option>
                        <option value="Kenneth Pool" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Kenneth Pool' ? print 'selected="selected"' : ''; ?>>Kenneth Pool</option>
                        
                        <option value="Kirstie Kelly" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Kirstie Kelly' ? print 'selected="selected"' : ''; ?>>Kirstie Kelly</option>
                        <option value="L&#039;ezu Atelier" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'L&#039;ezu Atelier' ? print 'selected="selected"' : ''; ?>>L&#039;ezu Atelier</option>
                        <option value="La Sposa" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'La Sposa' ? print 'selected="selected"' : ''; ?>>La Sposa</option>
                        <option value="Lara Helene Atelier" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Lara Helene Atelier' ? print 'selected="selected"' : ''; ?>>Lara Helene Atelier</option>
                        <option value="Lazaro" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Lazaro' ? print 'selected="selected"' : ''; ?>>Lazaro</option>
                        <option value="Le Spose Di Gio" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Le Spose Di Gio' ? print 'selected="selected"' : ''; ?>>Le Spose Di Gio</option>
                        <option value="Lea Ann Belter" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Lea Ann Belter' ? print 'selected="selected"' : ''; ?>>Lea Ann Belter</option>
                        <option value="Lela Rose" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Lela Rose' ? print 'selected="selected"' : ''; ?>>Lela Rose</option>
                        
                        <option value="Lian Carlo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Lian Carlo' ? print 'selected="selected"' : ''; ?>>Lian Carlo</option>
                        <option value="Luci Di Bella" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Luci Di Bella' ? print 'selected="selected"' : ''; ?>>Luci Di Bella</option>
                        <option value="Maggie Sottero" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Maggie Sottero' ? print 'selected="selected"' : ''; ?>>Maggie Sottero</option>
                        <option value="Manale" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Manale' ? print 'selected="selected"' : ''; ?>>Manale</option>
                        <option value="Manuel Mota" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Manuel Mota' ? print 'selected="selected"' : ''; ?>>Manuel Mota</option>
                        <option value="Marisa" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Marisa' ? print 'selected="selected"' : ''; ?>>Marisa</option>
                        <option value="Martin McCrea" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Martin McCrea' ? print 'selected="selected"' : ''; ?>>Martin McCrea</option>
                        <option value="Martina Liana" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Martina Liana' ? print 'selected="selected"' : ''; ?>>Martina Liana</option>
                        <option value="Mary&#039;s Bridal" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Mary&#039;s Bridal' ? print 'selected="selected"' : ''; ?>>Mary&#039;s Bridal</option>
                        
                        <option value="Matthew Christopher" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Matthew Christopher' ? print 'selected="selected"' : ''; ?>>Matthew Christopher</option>
                        <option value="Max Mara" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Max Mara' ? print 'selected="selected"' : ''; ?>>Max Mara</option>
                        <option value="Melissa Sweet" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Melissa Sweet' ? print 'selected="selected"' : ''; ?>>Melissa Sweet</option>
                        <option value="Mia Solano" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Mia Solano' ? print 'selected="selected"' : ''; ?>>Mia Solano</option>
                        <option value="Michaelangelo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Michaelangelo' ? print 'selected="selected"' : ''; ?>>Michaelangelo</option>
                        <option value="Michelle Roth" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Michelle Roth' ? print 'selected="selected"' : ''; ?>>Michelle Roth</option>
                        <option value="Mikaella" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Mikaella' ? print 'selected="selected"' : ''; ?>>Mikaella</option>
                        <option value="Modern Trousseau" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Modern Trousseau' ? print 'selected="selected"' : ''; ?>>Modern Trousseau</option>
                        <option value="Mon Cheri" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Mon Cheri' ? print 'selected="selected"' : ''; ?>>Mon Cheri</option>
                        
                        <option value="Monique Lhuillier" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Monique Lhuillier' ? print 'selected="selected"' : ''; ?>>Monique Lhuillier</option>
                        <option value="Monique Luo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Monique Luo' ? print 'selected="selected"' : ''; ?>>Monique Luo</option>
                        <option value="Moonlight" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Moonlight' ? print 'selected="selected"' : ''; ?>>Moonlight</option>
                        <option value="Morgane Le Fay" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Morgane Le Fay' ? print 'selected="selected"' : ''; ?>>Morgane Le Fay</option>
                        <option value="Mori Lee" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Mori Lee' ? print 'selected="selected"' : ''; ?>>Mori Lee</option>
                        <option value="Nicole Miller" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Nicole Miller' ? print 'selected="selected"' : ''; ?>>Nicole Miller</option>
                        <option value="No Ordinary Bride" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'No Ordinary Bride' ? print 'selected="selected"' : ''; ?>>No Ordinary Bride</option>
                        <option value="Oleg Cassini" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Oleg Cassini' ? print 'selected="selected"' : ''; ?>>Oleg Cassini</option>
                        <option value="Oscar de la Renta" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Oscar de la Renta' ? print 'selected="selected"' : ''; ?>>Oscar de la Renta</option>
                        
                        <option value="Other" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                        <option value="Palazzo" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Palazzo' ? print 'selected="selected"' : ''; ?>>Palazzo</option>
                        <option value="Paloma Blanca" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Paloma Blanca' ? print 'selected="selected"' : ''; ?>>Paloma Blanca</option>
                        <option value="Paula Varsalona" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Paula Varsalona' ? print 'selected="selected"' : ''; ?>>Paula Varsalona</option>
                        <option value="Peter Langner" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Peter Langner' ? print 'selected="selected"' : ''; ?>>Peter Langner</option>
                        <option value="Piccione" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Piccione' ? print 'selected="selected"' : ''; ?>>Piccione</option>
                        <option value="Pnina Tornai" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Pnina Tornai' ? print 'selected="selected"' : ''; ?>>Pnina Tornai</option>
                        <option value="Priscilla of Boston" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Priscilla of Boston' ? print 'selected="selected"' : ''; ?>>Priscilla of Boston</option>
                        <option value="Private Label by G" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Private Label by G' ? print 'selected="selected"' : ''; ?>>Private Label by G</option>
                        
                        <option value="Pronovias" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Pronovias' ? print 'selected="selected"' : ''; ?>>Pronovias</option>
                        <option value="Qipao/Cheongsam" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Qipao/Cheongsam' ? print 'selected="selected"' : ''; ?>>Qipao/Cheongsam</option>
                        <option value="Ralph Lauren" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Ralph Lauren' ? print 'selected="selected"' : ''; ?>>Ralph Lauren</option>
                        <option value="Reem Acra" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Reem Acra' ? print 'selected="selected"' : ''; ?>>Reem Acra</option>
                        <option value="Rena Koh" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Rena Koh' ? print 'selected="selected"' : ''; ?>>Rena Koh</option>
                        <option value="Renella De Fina" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Renella De Fina' ? print 'selected="selected"' : ''; ?>>Renella De Fina</option>
                        <option value="Reva Mivasagar" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Reva Mivasagar' ? print 'selected="selected"' : ''; ?>>Reva Mivasagar</option>
                        <option value="Richard Glasgow" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Richard Glasgow' ? print 'selected="selected"' : ''; ?>>Richard Glasgow</option>
                        <option value="Richard Tyler" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Richard Tyler' ? print 'selected="selected"' : ''; ?>>Richard Tyler</option>
                        
                        <option value="Rina di Montella " <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Rina di Montella' ? print 'selected="selected"' : ''; ?>>Rina di Montella </option>
                        <option value="Ristarose" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Ristarose' ? print 'selected="selected"' : ''; ?>>Ristarose</option>
                        <option value="Rivini" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Rivini' ? print 'selected="selected"' : ''; ?>>Rivini</option>
                        <option value="Romona Keveza" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Romona Keveza' ? print 'selected="selected"' : ''; ?>>Romona Keveza</option>
                        <option value="Rosa Clara" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Rosa Clara' ? print 'selected="selected"' : ''; ?>>Rosa Clara</option>
                        <option value="Saison Blanche" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Saison Blanche' ? print 'selected="selected"' : ''; ?>>Saison Blanche</option>
                        <option value="Sally Crew" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Sally Crew' ? print 'selected="selected"' : ''; ?>>Sally Crew</option>
                        <option value="San Patrick" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'San Patrick' ? print 'selected="selected"' : ''; ?>>San Patrick</option>
                        <option value="Sarah Houston" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Sarah Houston' ? print 'selected="selected"' : ''; ?>>Sarah Houston</option>
                        
                        <option value="Sassi Holford" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Sassi Holford' ? print 'selected="selected"' : ''; ?>>Sassi Holford</option>
                        <option value="Selia Yang" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Selia Yang' ? print 'selected="selected"' : ''; ?>>Selia Yang</option>
                        <option value="Simone Carvalli" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Simone Carvalli' ? print 'selected="selected"' : ''; ?>>Simone Carvalli</option>
                        <option value="Siri" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Siri' ? print 'selected="selected"' : ''; ?>>Siri</option>
                        <option value="Sophia Tolli" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Sophia Tolli' ? print 'selected="selected"' : ''; ?>>Sophia Tolli</option>
                        <option value="Sottero &amp; Midgley" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Sottero &amp; Midgley' ? print 'selected="selected"' : ''; ?>>Sottero &amp; Midgley</option>
                        <option value="St. Pucchi" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'St. Pucchi' ? print 'selected="selected"' : ''; ?>>St. Pucchi</option>
                        <option value="Stephen Yearick" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Stephen Yearick' ? print 'selected="selected"' : ''; ?>>Stephen Yearick</option>
                        
                        <option value="Suzanne Ermann" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Suzanne Ermann' ? print 'selected="selected"' : ''; ?>>Suzanne Ermann</option>
                        <option value="Tara Keely" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Tara Keely' ? print 'selected="selected"' : ''; ?>>Tara Keely</option>
                        <option value="Tomasina" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Tomasina' ? print 'selected="selected"' : ''; ?>>Tomasina</option>
                        <option value="Ulla-Maija" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Ulla-Maija' ? print 'selected="selected"' : ''; ?>>Ulla-Maija</option>
                        <option value="Valentino" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Valentino' ? print 'selected="selected"' : ''; ?>>Valentino</option>
                        <option value="Venus" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Venus' ? print 'selected="selected"' : ''; ?>>Venus</option>
                        <option value="Vera Wang" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Vera Wang' ? print 'selected="selected"' : ''; ?>>Vera Wang</option>
                        <option value="Vintage" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Vintage' ? print 'selected="selected"' : ''; ?>>Vintage</option>
                        <option value="Watters" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Watters' ? print 'selected="selected"' : ''; ?>>Watters</option>
                        
                        <option value="Wearkstatt" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Wearkstatt' ? print 'selected="selected"' : ''; ?>>Wearkstatt</option>
                        <option value="1Winnie Couture" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == '1Winnie Couture' ? print 'selected="selected"' : ''; ?>>Winnie Couture</option>
                        <option value="Yolanda Couture" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Yolanda Couture' ? print 'selected="selected"' : ''; ?>>Yolanda Couture</option>
                        <option value="Yumi Katsura" <?php isset($_SESSION['model']['params']['designer']) && $_SESSION['model']['params']['designer'] == 'Yumi Katsura' ? print 'selected="selected"' : ''; ?>>Yumi Katsura</option>
                        </select><br />
                        
                         <div class="error_message" style="float: right; margin-right: 25px;">	
							<?php print isset($_SESSION['model']['errormsg']['gowncondition']) ? $_SESSION['model']['errormsg']['gowncondition'] : '';?>
                        </div>
                        
                        <p><span>* Condition:</span></p><select name="gowncondition">
                        <option value=""></option>
						<option value="Brand New with Tages" <?php isset($_SESSION['model']['params']['gowncondition']) && $_SESSION['model']['params']['gowncondition'] == 'Brand New with Tages' ? print 'selected="selected"' : ''; ?>>Brand New w/ Tags</option>
                        <option value="Sample" <?php isset($_SESSION['model']['params']['gowncondition']) && $_SESSION['model']['params']['gowncondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                        <option value="Used" <?php isset($_SESSION['model']['params']['gowncondition']) && $_SESSION['model']['params']['gowncondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option>
						</select><br />
                        
                        <p><span>Silhouette:</span></p><select name="silhouette">
                        <option value=""></option>
                        <option value="A-line" <?php isset($_SESSION['model']['params']['silhouette']) && $_SESSION['model']['params']['silhouette'] == 'A-line' ? print 'selected="selected"' : ''; ?>>A-line</option>
                        <option value="Ball Gown" <?php isset($_SESSION['model']['params']['silhouette']) && $_SESSION['model']['params']['silhouette'] == 'Ball Gown' ? print 'selected="selected"' : ''; ?>>Ball Gown</option>
                        <option value="Mermaid" <?php isset($_SESSION['model']['params']['silhouette']) && $_SESSION['model']['params']['silhouette'] == 'Mermaid' ? print 'selected="selected"' : ''; ?>>Mermaid</option>
                        
                        <option value="Other" <?php isset($_SESSION['model']['params']['silhouette']) && $_SESSION['model']['params']['silhouette'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                        <option value="Sheath" <?php isset($_SESSION['model']['params']['silhouette']) && $_SESSION['model']['params']['silhouette'] == 'Sheath' ? print 'selected="selected"' : ''; ?>>Sheath</option>
                        <option value="Trumpet (Fit-and-Flare)" <?php isset($_SESSION['model']['params']['silhouette']) && $_SESSION['model']['params']['silhouette'] == 'Trumpet (Fit-and-Flare)' ? print 'selected="selected"' : ''; ?>>Trumpet (Fit-and-Flare)</option>
						</select><br />
                        
                        <p><span>Sleeve Style:</span></p><select name="sleevestyle">
                        <option value=""></option>
                        <option value="Strapless" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == 'Strapless' ? print 'selected="selected"' : ''; ?>>Strapless</option>
                        <option value="Spaghetti Straps" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == 'Spaghetti Straps' ? print 'selected="selected"' : ''; ?>>Spaghetti Straps</option>
                        
                        <option value="Straps" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == 'Straps' ? print 'selected="selected"' : ''; ?>>Straps</option>
                        <option value="Sleeveless" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == 'Sleeveless' ? print 'selected="selected"' : ''; ?>>Sleeveless</option>
                        <option value="Capped Sleeve" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == 'Capped Sleeve' ? print 'selected="selected"' : ''; ?>>Capped Sleeve</option>
                        <option value="Short Sleeve" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == 'Short Sleeve' ? print 'selected="selected"' : ''; ?>>Short Sleeve</option>
                        <option value="3/4 Sleeve" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == '3/4 Sleeve' ? print 'selected="selected"' : ''; ?>>3/4 Sleeve</option>
                        <option value="Long Sleeve" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == 'Long Sleeve' ? print 'selected="selected"' : ''; ?>>Long Sleeve</option>
                        <option value="Other" <?php isset($_SESSION['model']['params']['sleevestyle']) && $_SESSION['model']['params']['sleevestyle'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
						</select><br />
                        
                        <p><span>Style:</span></p><input type="text" name="stylenumber" value="<?php print isset($_SESSION['model']['params']['stylenumber'])?$_SESSION['model']['params']['stylenumber']:'';?>"/><?php print isset($_SESSION['model']['errormsg']['stylenumber']) ? $_SESSION['model']['errormsg']['stylenumber'] : '';?>
                        </div>
                        
                        <div class="form-column-right">
                        <div class="glspacer"></div>
                        <div class="glspacer"></div>
                        <p><span>Neckline:</span></p><select name="neckline">
                        <option value=""></option>
                        <option value="Bateau" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Bateau' ? print 'selected="selected"' : ''; ?>>Bateau</option>
                        <option value="Halter" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Halter' ? print 'selected="selected"' : ''; ?>>Halter</option>
                        <option value="High Neck" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'High Neck' ? print 'selected="selected"' : ''; ?>>High Neck</option>
                        
                        <option value="Off the Shoulder" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Off the Shoulder' ? print 'selected="selected"' : ''; ?>>Off the Shoulder</option>
                        <option value="One Shoulder" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'One Shoulder' ? print 'selected="selected"' : ''; ?>>One Shoulder</option>
                        <option value="Other" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                        <option value="Queen Ann" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Queen Ann' ? print 'selected="selected"' : ''; ?>>Queen Ann</option>
                        <option value="Scoop" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Scoop' ? print 'selected="selected"' : ''; ?>>Scoop</option>
                        <option value="Sheer" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Sheer' ? print 'selected="selected"' : ''; ?>>Sheer</option>
                        <option value="Square" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Square' ? print 'selected="selected"' : ''; ?>>Square</option>
                        <option value="Strapless (Slight Curve)" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Strapless (Slight Curve)' ? print 'selected="selected"' : ''; ?>>Strapless (Slight Curve)</option>
                        <option value="Strapless (Straight Across)" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Strapless (Straight Across)' ? print 'selected="selected"' : ''; ?>>Strapless (Straight Across)</option>
                        
                        <option value="Strapless (Sweetheart)" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Strapless (Sweetheart)' ? print 'selected="selected"' : ''; ?>>Strapless (Sweetheart)</option>
                        <option value="Sweetheart" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'Sweetheart' ? print 'selected="selected"' : ''; ?>>Sweetheart</option>
                        <option value="V-neck" <?php isset($_SESSION['model']['params']['neckline']) && $_SESSION['model']['params']['neckline'] == 'V-neck' ? print 'selected="selected"' : ''; ?>>V-neck</option>
						</select><br />
                        
                        <p><span>Waistline:</span></p><select name="waistline">
                        <option value=""></option>
                        <option value="Asymmetrical" <?php isset($_SESSION['model']['params']['waistline']) && $_SESSION['model']['params']['waistline'] == 'Asymmetrical' ? print 'selected="selected"' : ''; ?>>Asymmetrical</option>
                        <option value="Basque Waist" <?php isset($_SESSION['model']['params']['waistline']) && $_SESSION['model']['params']['waistline'] == 'Basque Waist' ? print 'selected="selected"' : ''; ?>>Basque Waist</option>
                        <option value="Dropped Waist" <?php isset($_SESSION['model']['params']['waistline']) && $_SESSION['model']['params']['waistline'] == 'Dropped Waist' ? print 'selected="selected"' : ''; ?>>Dropped Waist</option>
                        
                        <option value="Empire Waist" <?php isset($_SESSION['model']['params']['waistline']) && $_SESSION['model']['params']['waistline'] == 'Empire Waist' ? print 'selected="selected"' : ''; ?>>Empire Waist</option>
                        <option value="Natural Waist" <?php isset($_SESSION['model']['params']['waistline']) && $_SESSION['model']['params']['waistline'] == 'Natural Waist' ? print 'selected="selected"' : ''; ?>>Natural Waist</option>
                        <option value="No Waist/Princess Seams" <?php isset($_SESSION['model']['params']['waistline']) && $_SESSION['model']['params']['waistline'] == 'No Waist/Princess Seams' ? print 'selected="selected"' : ''; ?>>No Waist/Princess Seams</option>
                        <option value="Other" <?php isset($_SESSION['model']['params']['waistline']) && $_SESSION['model']['params']['waistline'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
						</select><br />
                        
                        <p><span>Dress Length:</span></p><select name="dresslength">
                        <option value=""></option>
                        <option value="Above the Knee" <?php isset($_SESSION['model']['params']['dresslength']) && $_SESSION['model']['params']['dresslength'] == 'Above the Knee' ? print 'selected="selected"' : ''; ?>>Above the Knee</option>
                        <option value="Knee Length" <?php isset($_SESSION['model']['params']['dresslength']) && $_SESSION['model']['params']['dresslength'] == 'Knee Length' ? print 'selected="selected"' : ''; ?>>Knee Length</option>
                        <option value="Tea Length" <?php isset($_SESSION['model']['params']['dresslength']) && $_SESSION['model']['params']['dresslength'] == 'Tea Length' ? print 'selected="selected"' : ''; ?>>Tea Length</option>
                        <option value="Ankle Length" <?php isset($_SESSION['model']['params']['dresslength']) && $_SESSION['model']['params']['dresslength'] == 'Ankle Length' ? print 'selected="selected"' : ''; ?>>Ankle Length</option>
                        <option value="Floor Length" <?php isset($_SESSION['model']['params']['dresslength']) && $_SESSION['model']['params']['dresslength'] == 'Floor Length' ? print 'selected="selected"' : ''; ?>>Floor Length</option>
						</select><br />
                        
                        <p><span>Color:</span></p><input type="text" name="color" value="<?php print isset($_SESSION['model']['params']['color'])?$_SESSION['model']['params']['color']:'';?>"/>
                        </div>
                        <div class="clear"></div>
                        <br />
                        <div class="divider-line"></div>
                        <br />
                        
                        <div class="form-column-left">
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['purchasedate']) ? $_SESSION['model']['errormsg']['purchasedate'] : '';?>
                        </div>
                        <p><span>* Year Purchased:</span></p><select name="purchasedate">
                        <option value=""></option>
                        <option value="2012" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2012' ? print 'selected="selected"' : ''; ?>>2012</option>
                        <option value="2011" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2011' ? print 'selected="selected"' : ''; ?>>2011</option>
                        <option value="2010" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2010' ? print 'selected="selected"' : ''; ?>>2010</option>
                        
                        <option value="2009" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2009' ? print 'selected="selected"' : ''; ?>>2009</option>
                        <option value="2008" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2008' ? print 'selected="selected"' : ''; ?>>2008</option>
                        <option value="2007" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2007' ? print 'selected="selected"' : ''; ?>>2007</option>
                        <option value="2006" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2006' ? print 'selected="selected"' : ''; ?>>2006</option>
                        <option value="2005" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2005' ? print 'selected="selected"' : ''; ?>>2005</option>
                        <option value="2004" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2004' ? print 'selected="selected"' : ''; ?>>2004</option>
                        <option value="2003" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2003' ? print 'selected="selected"' : ''; ?>>2003</option>
                        <option value="2002" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2002' ? print 'selected="selected"' : ''; ?>>2002</option>
                        <option value="2001" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2001' ? print 'selected="selected"' : ''; ?>>2001</option>
                        
                        <option value="2000" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '2000' ? print 'selected="selected"' : ''; ?>>2000</option>
                        <option value="1999" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1999' ? print 'selected="selected"' : ''; ?>>1999</option>
                        <option value="1998" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1998' ? print 'selected="selected"' : ''; ?>>1998</option>
                        <option value="1997" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1997' ? print 'selected="selected"' : ''; ?>>1997</option>
                        <option value="1996" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1996' ? print 'selected="selected"' : ''; ?>>1996</option>
                        <option value="1995" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1995' ? print 'selected="selected"' : ''; ?>>1995</option>
                        <option value="1994" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1994' ? print 'selected="selected"' : ''; ?>>1994</option>
                        <option value="1993" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1993' ? print 'selected="selected"' : ''; ?>>1993</option>
                        <option value="1992" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1992' ? print 'selected="selected"' : ''; ?>>1992</option>
                        
                        <option value="1991" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1991' ? print 'selected="selected"' : ''; ?>>1991</option>
                        <option value="1990" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1990' ? print 'selected="selected"' : ''; ?>>1990</option>
                        <option value="1989" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1989' ? print 'selected="selected"' : ''; ?>>1989</option>
                        <option value="1988" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1988' ? print 'selected="selected"' : ''; ?>>1988</option>
                        <option value="1987" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1987' ? print 'selected="selected"' : ''; ?>>1987</option>
                        <option value="1986" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1986' ? print 'selected="selected"' : ''; ?>>1986</option>
                        <option value="1985" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1985' ? print 'selected="selected"' : ''; ?>>1985</option>
                        <option value="1984" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1984' ? print 'selected="selected"' : ''; ?>>1984</option>
                        <option value="1983" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1983' ? print 'selected="selected"' : ''; ?>>1983</option>
                        
                        <option value="1982" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1982' ? print 'selected="selected"' : ''; ?>>1982</option>
                        <option value="1981" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1981' ? print 'selected="selected"' : ''; ?>>1981</option>
                        <option value="1980" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1980' ? print 'selected="selected"' : ''; ?>>1980</option>
                        <option value="1979" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1979' ? print 'selected="selected"' : ''; ?>>1979</option>
                        <option value="1978" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1978' ? print 'selected="selected"' : ''; ?>>1978</option>
                        <option value="1977" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1977' ? print 'selected="selected"' : ''; ?>>1977</option>
                        <option value="1976" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1976' ? print 'selected="selected"' : ''; ?>>1976</option>
                        <option value="1975" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1975' ? print 'selected="selected"' : ''; ?>>1975</option>
                        <option value="1974" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1974' ? print 'selected="selected"' : ''; ?>>1974</option>
                        
                        <option value="1973" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1973' ? print 'selected="selected"' : ''; ?>>1973</option>
                        <option value="1972" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1972' ? print 'selected="selected"' : ''; ?>>1972</option>
                        <option value="1971" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1971' ? print 'selected="selected"' : ''; ?>>1971</option>
                        <option value="1970" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1970' ? print 'selected="selected"' : ''; ?>>1970</option>
                        <option value="1969" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1969' ? print 'selected="selected"' : ''; ?>>1969</option>
                        <option value="1968" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1968' ? print 'selected="selected"' : ''; ?>>1968</option>
                        <option value="1967" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1967' ? print 'selected="selected"' : ''; ?>>1967</option>
                        <option value="1966" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1966' ? print 'selected="selected"' : ''; ?>>1966</option>
                        <option value="1965" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1965' ? print 'selected="selected"' : ''; ?>>1965</option>
                        
                        <option value="1964" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1964' ? print 'selected="selected"' : ''; ?>>1964</option>
                        <option value="1963" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1963' ? print 'selected="selected"' : ''; ?>>1963</option>
                        <option value="1962" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1962' ? print 'selected="selected"' : ''; ?>>1962</option>
                        <option value="1961" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1961' ? print 'selected="selected"' : ''; ?>>1961</option>
                        <option value="1960" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1960' ? print 'selected="selected"' : ''; ?>>1960</option>
                        <option value="1959" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1959' ? print 'selected="selected"' : ''; ?>>1959</option>
                        <option value="1958" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1958' ? print 'selected="selected"' : ''; ?>>1958</option>
                        <option value="1957" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1957' ? print 'selected="selected"' : ''; ?>>1957</option>
                        <option value="1956" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1956' ? print 'selected="selected"' : ''; ?>>1956</option>
                        
                        <option value="1955" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1955' ? print 'selected="selected"' : ''; ?>>1955</option>
                        <option value="1954" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1954' ? print 'selected="selected"' : ''; ?>>1954</option>
                        <option value="1953" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1953' ? print 'selected="selected"' : ''; ?>>1953</option>
                        <option value="1952" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1952' ? print 'selected="selected"' : ''; ?>>1952</option>
                        <option value="1951" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1951' ? print 'selected="selected"' : ''; ?>>1951</option>
                        <option value="1950" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1950' ? print 'selected="selected"' : ''; ?>>1950</option>
                        <option value="1949" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1949' ? print 'selected="selected"' : ''; ?>>1949</option>
                        <option value="1948" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1948' ? print 'selected="selected"' : ''; ?>>1948</option>
                        <option value="1947" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1947' ? print 'selected="selected"' : ''; ?>>1947</option>
                        
                        <option value="1946" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1946' ? print 'selected="selected"' : ''; ?>>1946</option>
                        <option value="1945" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1945' ? print 'selected="selected"' : ''; ?>>1945</option>
                        <option value="1944" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1944' ? print 'selected="selected"' : ''; ?>>1944</option>
                        <option value="1943" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1943' ? print 'selected="selected"' : ''; ?>>1943</option>
                        <option value="1942" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1942' ? print 'selected="selected"' : ''; ?>>1942</option>
                        <option value="1941" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1941' ? print 'selected="selected"' : ''; ?>>1941</option>
                        <option value="1940" <?php isset($_SESSION['model']['params']['purchasedate']) && $_SESSION['model']['params']['purchasedate'] == '1940' ? print 'selected="selected"' : ''; ?>>1940</option>
                        </select>
                        
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['paid']) ? $_SESSION['model']['errormsg']['paid'] : '';?>
                        </div>
                        <p><span>Price Paid:</span></p><input type="text" name="paid" value="<?php print isset($_SESSION['model']['params']['paid'])?$_SESSION['model']['params']['paid']:'';?>"/>
                        </div>

                        <div class="form-column-right">
                        <div class="glspacer"></div>
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['askingprice']) ? $_SESSION['model']['errormsg']['askingprice'] : '';?>
                        </div>
                        <p><span>* Asking Paid:</span></p><p><span style="margin-left: 15px; width: 300px; font-size: 12px;"><i>Example $1500</i></span><input type="text" name="askingprice" value="<?php print isset($_SESSION['model']['params']['askingprice'])?$_SESSION['model']['params']['askingprice']:'';?>"/>
                        </div>
                        <div class="clear"></div>
                        <br />
                        <div class="divider-line"></div>
                        <br />
                        
                        <div class="form-column-left-1">
                        <div class="error_message" style="float: right; margin-right: 10px;">
                        	<?php print isset($_SESSION['model']['errormsg']['labelsize']) ? $_SESSION['model']['errormsg']['labelsize'] : '';?>
                        </div>    
           				<p><span>* Label Size:</span></p><select name="labelsize" style="width: 100px;">
                        <option value=""></option>
                        <option value="O" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == 'O' ? print 'selected="selected"' : ''; ?>>Size 0</option>
                        <option value="2" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '2' ? print 'selected="selected"' : ''; ?>>Size 2</option>
                        <option value="4" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '4' ? print 'selected="selected"' : ''; ?>>Size 4</option>
                        <option value="6" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '6' ? print 'selected="selected"' : ''; ?>>Size 6</option>
                        <option value="8" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '8' ? print 'selected="selected"' : ''; ?>>Size 8</option>
                        <option value="10" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '10' ? print 'selected="selected"' : ''; ?>>Size 10</option>
                        
                        <option value="12" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '12' ? print 'selected="selected"' : ''; ?>>Size 12</option>
                        <option value="14" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '14' ? print 'selected="selected"' : ''; ?>>Size 14</option>
                        <option value="16" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '16' ? print 'selected="selected"' : ''; ?>>Size 16</option>
                        <option value="18" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '18' ? print 'selected="selected"' : ''; ?>>Size 18</option>
                        <option value="20" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '20' ? print 'selected="selected"' : ''; ?>>Size 20</option>
                        <option value="22" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '22' ? print 'selected="selected"' : ''; ?>>Size 22</option>
                        <option value="24" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '24' ? print 'selected="selected"' : ''; ?>>Size 24</option>
                        <option value="26" <?php isset($_SESSION['model']['params']['labelsize']) && $_SESSION['model']['params']['labelsize'] == '26' ? print 'selected="selected"' : ''; ?>>Size 26</option>
                        </select>
                        
                        <div class="error_message" style="float: right; margin-right: 10px;">
                        	<?php print isset($_SESSION['model']['errormsg']['streetsize']) ? $_SESSION['model']['errormsg']['streetsize'] : '';?>
                        </div>
                        <p><span>* Street Size:</span></p><select name="streetsize" style="width: 100px;">
                        
                        <option value=""></option>
                        <option value="O" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == 'O' ? print 'selected="selected"' : ''; ?>>Size 0</option>
                        <option value="2" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '2' ? print 'selected="selected"' : ''; ?>>Size 2</option>
                        <option value="4" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '4' ? print 'selected="selected"' : ''; ?>>Size 4</option>
                        <option value="6" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '6' ? print 'selected="selected"' : ''; ?>>Size 6</option>
                        
                        <option value="8" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '8' ? print 'selected="selected"' : ''; ?>>Size 8</option>
                        <option value="10" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '10' ? print 'selected="selected"' : ''; ?>>Size 10</option>
                        <option value="12" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '12' ? print 'selected="selected"' : ''; ?>>Size 12</option>
                        <option value="14" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '14' ? print 'selected="selected"' : ''; ?>>Size 14</option>
                        <option value="16" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '16' ? print 'selected="selected"' : ''; ?>>Size 16</option>
                        <option value="18" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '18' ? print 'selected="selected"' : ''; ?>>Size 18</option>
                        <option value="20" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '20' ? print 'selected="selected"' : ''; ?>>Size 20</option>
                        <option value="22" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '22' ? print 'selected="selected"' : ''; ?>>Size 22</option>
                        <option value="24" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '24' ? print 'selected="selected"' : ''; ?>>Size 24</option>
                        <option value="26" <?php isset($_SESSION['model']['params']['streetsize']) && $_SESSION['model']['params']['streetsize'] == '26' ? print 'selected="selected"' : ''; ?>>Size 26</option>
                        </select>
                        </div>
                        <div class="vspacing"></div>
                        
                        
                        <div class="form-column-left-1">
           				<p><span>Bust Size:</span></p><select name="bustsize" style="width: 100px;">
                        <option value=""></option>
                        <option value="32" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '32' ? print 'selected="selected"' : ''; ?>>32</option>
                        <option value="32.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '32.5' ? print 'selected="selected"' : ''; ?>>32.5</option>
                        <option value="33" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '33' ? print 'selected="selected"' : ''; ?>>33</option>
                        <option value="33.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '33.5' ? print 'selected="selected"' : ''; ?>>33.5</option>
                        <option value="34" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '34' ? print 'selected="selected"' : ''; ?>>34</option>
                        <option value="34.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '34.5' ? print 'selected="selected"' : ''; ?>>34.5</option>
                        <option value="35" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '35' ? print 'selected="selected"' : ''; ?>>35</option>
                        
                        <option value="35.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '35.5' ? print 'selected="selected"' : ''; ?>>35.5</option>
                        <option value="36" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '36' ? print 'selected="selected"' : ''; ?>>36</option>
                        <option value="36.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '36.5' ? print 'selected="selected"' : ''; ?>>36.5</option>
                        <option value="37" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '37' ? print 'selected="selected"' : ''; ?>>37</option>
                        <option value="37.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '37.5' ? print 'selected="selected"' : ''; ?>>37.5</option>
                        <option value="38" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '38' ? print 'selected="selected"' : ''; ?>>38</option>
                        <option value="38.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '38.5' ? print 'selected="selected"' : ''; ?>>38.5</option>
                        <option value="39" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '39' ? print 'selected="selected"' : ''; ?>>39</option>
                        <option value="39.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '39.5' ? print 'selected="selected"' : ''; ?>>39.5</option>
                        
                        <option value="40" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '40' ? print 'selected="selected"' : ''; ?>>40</option>
                        <option value="40.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '40.5' ? print 'selected="selected"' : ''; ?>>40.5</option>
                        <option value="41" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '41' ? print 'selected="selected"' : ''; ?>>41</option>
                        <option value="41.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '41.5' ? print 'selected="selected"' : ''; ?>>41.5</option>
                        <option value="42" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '42' ? print 'selected="selected"' : ''; ?>>42</option>
                        <option value="42.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '42.5' ? print 'selected="selected"' : ''; ?>>42.5</option>
                        <option value="43" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '43' ? print 'selected="selected"' : ''; ?>>43</option>
                        <option value="43.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '43.5' ? print 'selected="selected"' : ''; ?>>43.5</option>
                        <option value="44" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '44' ? print 'selected="selected"' : ''; ?>>44</option>
                        
                        <option value="44.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '44.5' ? print 'selected="selected"' : ''; ?>>44.5</option>
                        <option value="45" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '45' ? print 'selected="selected"' : ''; ?>>45</option>
                        <option value="45.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '45.5' ? print 'selected="selected"' : ''; ?>>45.5</option>
                        <option value="46" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '46' ? print 'selected="selected"' : ''; ?>>46</option>
                        <option value="46.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '46.5' ? print 'selected="selected"' : ''; ?>>46.5</option>
                        <option value="47" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '47' ? print 'selected="selected"' : ''; ?>>47</option>
                        <option value="47.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '47.5' ? print 'selected="selected"' : ''; ?>>47.5</option>
                        <option value="48" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '48' ? print 'selected="selected"' : ''; ?>>48</option>
                        <option value="48.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '48.5' ? print 'selected="selected"' : ''; ?>>48.5</option>
                        
                        <option value="49" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '49' ? print 'selected="selected"' : ''; ?>>49</option>
                        <option value="49.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '49.5' ? print 'selected="selected"' : ''; ?>>49.5</option>
                        <option value="50" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '50' ? print 'selected="selected"' : ''; ?>>50</option>
                        <option value="50.5" <?php isset($_SESSION['model']['params']['bustsize']) && $_SESSION['model']['params']['bustsize'] == '50.5' ? print 'selected="selected"' : ''; ?>>50.5</option>
                        </select>
                        
                        <p><span>Waist Size:</span></p><select name="waistsize" style="width: 100px;">
                        <option value=""></option>
                        <option value="22" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '22' ? print 'selected="selected"' : ''; ?>>22</option>
                        <option value="22.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '22.5' ? print 'selected="selected"' : ''; ?>>22.5</option>
                        <option value="23" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '23' ? print 'selected="selected"' : ''; ?>>23</option>
                        <option value="23.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '23.5' ? print 'selected="selected"' : ''; ?>>23.5</option>
                        <option value="24" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '24' ? print 'selected="selected"' : ''; ?>>24</option>
                        
                        <option value="24.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '24.5' ? print 'selected="selected"' : ''; ?>>24.5</option>
                        <option value="25" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '25' ? print 'selected="selected"' : ''; ?>>25</option>
                        <option value="25.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '25.5' ? print 'selected="selected"' : ''; ?>>25.5</option>
                        <option value="26" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '26' ? print 'selected="selected"' : ''; ?>>26</option>
                        <option value="26.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '26.5' ? print 'selected="selected"' : ''; ?>>26.5</option>
                        <option value="27" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '27' ? print 'selected="selected"' : ''; ?>>27</option>
                        <option value="27.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '27.5' ? print 'selected="selected"' : ''; ?>>27.5</option>
                        <option value="28" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '28' ? print 'selected="selected"' : ''; ?>>28</option>
                        <option value="28.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '28.5' ? print 'selected="selected"' : ''; ?>>28.5</option>
                        
                        <option value="29" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '29' ? print 'selected="selected"' : ''; ?>>29</option>
                        <option value="29.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '29.5' ? print 'selected="selected"' : ''; ?>>29.5</option>
                        <option value="30" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '30' ? print 'selected="selected"' : ''; ?>>30</option>
                        <option value="30.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '30.5' ? print 'selected="selected"' : ''; ?>>30.5</option>
                        <option value="31" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '31' ? print 'selected="selected"' : ''; ?>>31</option>
                        <option value="31.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '31.5' ? print 'selected="selected"' : ''; ?>>31.5</option>
                        <option value="32" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '32' ? print 'selected="selected"' : ''; ?>>32</option>
                        <option value="32.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '32.5' ? print 'selected="selected"' : ''; ?>>32.5</option>
                        <option value="33" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '33' ? print 'selected="selected"' : ''; ?>>33</option>
                        
                        <option value="33.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '33.5' ? print 'selected="selected"' : ''; ?>>33.5</option>
                        <option value="34" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '34' ? print 'selected="selected"' : ''; ?>>34</option>
                        <option value="34.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '34.5' ? print 'selected="selected"' : ''; ?>>34.5</option>
                        <option value="35" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '35' ? print 'selected="selected"' : ''; ?>>35</option>
                        <option value="35.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '35.5' ? print 'selected="selected"' : ''; ?>>35.5</option>
                        <option value="36" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '36' ? print 'selected="selected"' : ''; ?>>36</option>
                        <option value="36.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '36.5' ? print 'selected="selected"' : ''; ?>>36.5</option>
                        <option value="37" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '37' ? print 'selected="selected"' : ''; ?>>37</option>
                        <option value="37.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '37.5' ? print 'selected="selected"' : ''; ?>>37.5</option>
                        
                        <option value="38" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '38' ? print 'selected="selected"' : ''; ?>>38</option>
                        <option value="38.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '38.5' ? print 'selected="selected"' : ''; ?>>38.5</option>
                        <option value="39" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '39' ? print 'selected="selected"' : ''; ?>>39</option>
                        <option value="39.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '39.5' ? print 'selected="selected"' : ''; ?>>39.5</option>
                        <option value="40" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '40' ? print 'selected="selected"' : ''; ?>>40</option>
                        <option value="40.5" <?php isset($_SESSION['model']['params']['waistsize']) && $_SESSION['model']['params']['waistsize'] == '40.5' ? print 'selected="selected"' : ''; ?>>40.5</option>
                        </select>
                        </div>
                        <div class="vspacing"></div>
                        
                        
                        <div class="form-column-left-1">
           				<p><span>Hip Size:</span></p><select name="hipsize" style="width: 100px;">
                        <option value=""></option>
                        <option value="32" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '32' ? print 'selected="selected"' : ''; ?>>32</option>
                        <option value="32.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '32.5' ? print 'selected="selected"' : ''; ?>>32.5</option>
                        
                        <option value="33" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '33' ? print 'selected="selected"' : ''; ?>>33</option>
                        <option value="33.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '33.5' ? print 'selected="selected"' : ''; ?>>33.5</option>
                        <option value="34" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '34' ? print 'selected="selected"' : ''; ?>>34</option>
                        <option value="34.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '34.5' ? print 'selected="selected"' : ''; ?>>34.5</option>
                        <option value="35" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '35' ? print 'selected="selected"' : ''; ?>>35</option>
                        <option value="35.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '35.5' ? print 'selected="selected"' : ''; ?>>35.5</option>
                        <option value="36" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '36' ? print 'selected="selected"' : ''; ?>>36</option>
                        <option value="36.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '36.5' ? print 'selected="selected"' : ''; ?>>36.5</option>
                        <option value="37" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '37' ? print 'selected="selected"' : ''; ?>>37</option>
                        
                        <option value="37.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '37.5' ? print 'selected="selected"' : ''; ?>>37.5</option>
                        <option value="38" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '38' ? print 'selected="selected"' : ''; ?>>38</option>
                        <option value="38.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '38.5' ? print 'selected="selected"' : ''; ?>>38.5</option>
                        <option value="39" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '39' ? print 'selected="selected"' : ''; ?>>39</option>
                        <option value="39.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '39.5' ? print 'selected="selected"' : ''; ?>>39.5</option>
                        <option value="40" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '40' ? print 'selected="selected"' : ''; ?>>40</option>
                        <option value="40.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '40.5' ? print 'selected="selected"' : ''; ?>>40.5</option>
                        <option value="41" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '41' ? print 'selected="selected"' : ''; ?>>41</option>
                        <option value="41.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '41.5' ? print 'selected="selected"' : ''; ?>>41.5</option>
                        
                        <option value="42" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '42' ? print 'selected="selected"' : ''; ?>>42</option>
                        <option value="42.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '42.5' ? print 'selected="selected"' : ''; ?>>42.5</option>
                        <option value="43" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '43' ? print 'selected="selected"' : ''; ?>>43</option>
                        <option value="43.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '43.5' ? print 'selected="selected"' : ''; ?>>43.5</option>
                        <option value="44" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '44' ? print 'selected="selected"' : ''; ?>>44</option>
                        <option value="44.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '44.5' ? print 'selected="selected"' : ''; ?>>44.5</option>
                        <option value="45" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '45' ? print 'selected="selected"' : ''; ?>>45</option>
                        <option value="45.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '45.5' ? print 'selected="selected"' : ''; ?>>45.5</option>
                        <option value="46" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '46' ? print 'selected="selected"' : ''; ?>>46</option>
                        
                        <option value="46.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '46.5' ? print 'selected="selected"' : ''; ?>>46.5</option>
                        <option value="47" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '47' ? print 'selected="selected"' : ''; ?>>47</option>
                        <option value="47.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '47.5' ? print 'selected="selected"' : ''; ?>>47.5</option>
                        <option value="48" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '48' ? print 'selected="selected"' : ''; ?>>48</option>
                        <option value="48.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '48.5' ? print 'selected="selected"' : ''; ?>>48.5</option>
                        <option value="49" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '49' ? print 'selected="selected"' : ''; ?>>49</option>
                        <option value="49.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '49.5' ? print 'selected="selected"' : ''; ?>>49.5</option>
                        <option value="50" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '50' ? print 'selected="selected"' : ''; ?>>50</option>
                        <option value="50.5" <?php isset($_SESSION['model']['params']['hipsize']) && $_SESSION['model']['params']['hipsize'] == '50.5' ? print 'selected="selected"' : ''; ?>>50.5</option>
                        
                        </select>
                        
                        <p><span>Height with Shoes:</span></p><select name="heightwshoes" style="width: 100px;">
                        <option value=""></option>

                        <option value="49" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '49' ? print 'selected="selected"' : ''; ?>>4&#039;1&quot;</option>
                        <option value="50" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '50' ? print 'selected="selected"' : ''; ?>>4&#039;2&quot;</option>
                        <option value="51" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '51' ? print 'selected="selected"' : ''; ?>>4&#039;3&quot;</option>
                        <option value="52" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '52' ? print 'selected="selected"' : ''; ?>>4&#039;4&quot;</option>
                        <option value="53" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '53' ? print 'selected="selected"' : ''; ?>>4&#039;5&quot;</option>
                        <option value="54" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '54' ? print 'selected="selected"' : ''; ?>>4&#039;6&quot;</option>
                        
                        <option value="55" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '55' ? print 'selected="selected"' : ''; ?>>4&#039;7&quot;</option>
                        <option value="56" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '56' ? print 'selected="selected"' : ''; ?>>4&#039;8&quot;</option>
                        <option value="57" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '57' ? print 'selected="selected"' : ''; ?>>4&#039;9&quot;</option>
                        <option value="58" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '58' ? print 'selected="selected"' : ''; ?>>4&#039;10&quot;</option>
                        <option value="59" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '59' ? print 'selected="selected"' : ''; ?>>4&#039;11&quot;</option>
                        <option value="60" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '60' ? print 'selected="selected"' : ''; ?>>5&#039;</option>
                        
                        <option value="61" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '61' ? print 'selected="selected"' : ''; ?>>5&#039;1&quot;</option>
                        <option value="62" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '62' ? print 'selected="selected"' : ''; ?>>5&#039;2&quot;</option>
                        <option value="63" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '63' ? print 'selected="selected"' : ''; ?>>5&#039;3&quot;</option>
                        <option value="64" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '64' ? print 'selected="selected"' : ''; ?>>5&#039;4&quot;</option>
                        <option value="65" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '65' ? print 'selected="selected"' : ''; ?>>5&#039;5&quot;</option>
                        <option value="66" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '66' ? print 'selected="selected"' : ''; ?>>5&#039;6&quot;</option>
                        
                        <option value="67" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '67' ? print 'selected="selected"' : ''; ?>>5&#039;7&quot;</option>
                        <option value="68" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '68' ? print 'selected="selected"' : ''; ?>>5&#039;8&quot;</option>
                        <option value="69" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '69' ? print 'selected="selected"' : ''; ?>>5&#039;9&quot;</option>
                        <option value="70" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '70' ? print 'selected="selected"' : ''; ?>>5&#039;10&quot;</option>
                        <option value="71" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '71' ? print 'selected="selected"' : ''; ?>>5&#039;11&quot;</option>
                        <option value="72" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '72' ? print 'selected="selected"' : ''; ?>>6&#039;</option>
                        
                        <option value="73" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '73' ? print 'selected="selected"' : ''; ?>>6&#039;1&quot;</option>
                        <option value="74" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '74' ? print 'selected="selected"' : ''; ?>>6&#039;2&quot;</option>
                        <option value="75" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '75' ? print 'selected="selected"' : ''; ?>>6&#039;3&quot;</option>
                        <option value="76" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '76' ? print 'selected="selected"' : ''; ?>>6&#039;4&quot;</option>
                        <option value="77" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '77' ? print 'selected="selected"' : ''; ?>>6&#039;5&quot;</option>
                        <option value="78" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '78' ? print 'selected="selected"' : ''; ?>>6&#039;6&quot;</option>
                        
                        <option value="79" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '79' ? print 'selected="selected"' : ''; ?>>6&#039;7&quot;</option>
                        <option value="80" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '80' ? print 'selected="selected"' : ''; ?>>6&#039;8&quot;</option>
                        <option value="81" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '81' ? print 'selected="selected"' : ''; ?>>6&#039;9&quot;</option>
                        <option value="82" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '82' ? print 'selected="selected"' : ''; ?>>6&#039;10&quot;</option>
                        <option value="83" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '83' ? print 'selected="selected"' : ''; ?>>6&#039;11&quot;</option>
                        <option value="84" <?php isset($_SESSION['model']['params']['heightwshoes']) && $_SESSION['model']['params']['heightwshoes'] == '84' ? print 'selected="selected"' : ''; ?>>7&#039;</option>
                        
                        </select>
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

                        <p><span>Gown Description:</span></p><textarea id="gowndescr" name="gowndescr" class="text_area_input" rows="6" cols="30"><?php print isset($_SESSION['model']['params']['gowndescr'])?$_SESSION['model']['params']['gowndescr']:'';?></textarea><br /><br />
                        
                        <div id="barbox1">
                          <div class="progressbar1"></div>
                        </div>
                        <div class="count1">1200</div>
                        <br />
                        
                        <p><span>Alterations Description:</span></p><textarea id="altdescr" class="text_area_input1" name="altdescr" rows="6" cols="30"><?php print isset($_SESSION['model']['params']['altdescr'])?$_SESSION['model']['params']['altdescr']:'';?></textarea><br /><br />
                        
                        <div id="barbox2">
                          <div class="progressbar2"></div>
                        </div>
                        <div class="count2">1200</div>
                        <br />
                        
                        <p><span>Veil/Headpiece Description:</span></p><textarea id="veildescr" class="text_area_input2" name="veildescr" rows="6" cols="30"><?php print isset($_SESSION['model']['params']['veildescr'])?$_SESSION['model']['params']['veildescr']:'';?></textarea><br /><br />
                        
                        <div id="barbox3">
                          <div class="progressbar3"></div>
                        </div>
                        <div class="count3">1200</div>
                        <br />
                        
                        <p><span>Preservation Method:</span></p><textarea id="presmethod" class="text_area_input3" name="presmethod" rows="6" cols="30"><?php print isset($_SESSION['model']['params']['presmethod'])?$_SESSION['model']['params']['presmethod']:'';?></textarea><br /><br /><br />
                        
                        <div class="divider-line"></div>
                        <br />


            <p><span>Photos</span></p><br />
                        
            	<p><span style="width: 400px; font-size: 12px;"><i>Acceptable file types: .jpg .png. gif</i></span><br />
				<?php print isset($_SESSION['model']['errormsg']['image1']) ? $_SESSION['model']['errormsg']['image1'] : '';?></p><br />
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
                		<?php print isset($_SESSION['model']['errormsg']['image3']) ? $_SESSION['model']['errormsg']['image3'] : '';?>
                        <?php print isset($_SESSION['model']['errormsg']['filetype']) ? $_SESSION['model']['errormsg']['filetype'] : '';?>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                        <input name="image3" type="file" size="30">
                        <br />
                		<br />
                <!--</div>
                <div class="left-img" style="float:left; margin-left: 150px;">-->
            			<?php print isset($_SESSION['model']['errormsg']['image4']) ? $_SESSION['model']['errormsg']['image4'] : '';?>
                        <?php print isset($_SESSION['model']['errormsg']['filetype']) ? $_SESSION['model']['errormsg']['filetype'] : '';?>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                        <input name="image4" type="file" size="30">
						<br />
                        <br />
                		<?php print isset($_SESSION['model']['errormsg']['image5']) ? $_SESSION['model']['errormsg']['image5'] : '';?>
                        <?php print isset($_SESSION['model']['errormsg']['filetype']) ? $_SESSION['model']['errormsg']['filetype'] : '';?>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                        <input name="image5" type="file" size="30">
                </div>
                <div class="clear"></div>
                <br />
                <br />

                        
                        <div><p><span style="width: 894px;">Images <strong>can NOT exceed 2mb</strong> and <strong>dimensions can not exceed 1000 pixels wide by 1000 pixels tall</strong><br /><br />Your pictures will really help buyers see the beauty of your dress. Ideal images include pictures of the front, back and detail of your gown on a person or mannequin. Your listing includes 5 images.</span></p></div><br /><br /><br /><br /><br />
                        
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
                        <option value="Individual (Gown purchased for personal use)" <?php isset($_SESSION['model']['params']['typeofseller']) && $_SESSION['model']['params']['typeofseller'] == 'Individual (Gown purchased for personal use)' ? print 'selected="selected"' : ''; ?>>Individual (Gown purchased for personal use)</option>
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
                        <select name="shippingcosts">
                        <option value=""></option> 
                        <option value="To Be Paid By Seller" <?php isset($_SESSION['model']['params']['shippingcosts']) && $_SESSION['model']['params']['shippingcosts'] == 'To Be Paid By Seller' ? print 'selected="selected"' : ''; ?>>To Be Paid By Seller</option>
                        <option value="To Be Paid By Buyer" <?php isset($_SESSION['model']['params']['shippingcosts']) && $_SESSION['model']['params']['shippingcosts'] == 'To Be Paid By Buyer' ? print 'selected="selected"' : ''; ?>>To Be Paid By Buyer</option>
                        <option value="To Be Negotiated" <?php isset($_SESSION['model']['params']['shippingcosts']) && $_SESSION['model']['params']['shippingcosts'] == 'To Be Negotiated' ? print 'selected="selected"' : ''; ?>>To Be Negotiated</option>
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
                    
                    
                   <!-- <input type="hidden" name="cmd" value="_s-xclick">
            		<input type="hidden" name="hosted_button_id" value="YUDA25KY8JD2L">-->  
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