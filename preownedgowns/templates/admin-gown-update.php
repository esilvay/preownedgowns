<?PHP
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
     header("Location:/login");
     die();     // just to make sure no scripts execute
}

elseif (isset($_SESSION['is_logged_in'])) {
     header("Location:/member");
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
						
						$id = mysql_real_escape_string($_REQUEST['id']);
						$result = mysql_query("SELECT * FROM gowns WHERE ID = $id");
						$count = mysql_num_rows($result);
						$result = mysql_fetch_assoc($result);
						?>
                    <!--<h1>Register</h1>-->
                    <div id="r-form">
            	<form id="gown-list" action="/assets/scripts/update-admin-gown.php" method="post" name="gown-list" enctype="multipart/form-data">
                
                		<div class="form-column-left">
                        	<div class="error_message" style="float: right; margin-right: 25px;">
                        		<?php print isset($_SESSION['model']['errormsg']['gowntype']) ? $_SESSION['model']['errormsg']['gowntype'] : '';?>
                            </div>
                        <p><span>* Gown Type:</span></p><select name="gowntype">
                        <option value="" selected="selected">-Select One-</option> 
                        <option value="Wedding Gown" <?php echo $result ['GownType'] == 'Wedding Gown' ? print 'selected="selected"' : ''; ?>>Wedding Gown</option>
                        <option value="Bridesmaid Dress" <?php echo $result ['GownType'] == 'Bridesmaid Dress' ? print 'selected="selected"' : ''; ?>>Bridesmaid Dress</option>
                        <option value="Prom Dress" <?php echo $result ['GownType'] == 'Prom Dress' ? print 'selected="selected"' : ''; ?>>Prom Dress</option>
                        <option value="Evening Gown" <?php echo $result ['GownType'] == 'Evening Gown' ? print 'selected="selected"' : ''; ?>>Evening Gown</option>
                        <option value="Other" <?php echo $result ['GownType'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                        </select>
                        <br />

                         <div class="error_message" style="float: right; margin-right: 25px;">	
							<?php print isset($_SESSION['model']['errormsg']['designer']) ? $_SESSION['model']['errormsg']['designer'] : '';?>
                        </div>
           				<p><span>* Designer:</span></p>
                        <select name="designer">
                        <option value="" selected="selected"></option> 
                        <option value="2 Be" <?php echo $result ['Designer'] == '2 Be' ? print 'selected="selected"' : ''; ?>>2 Be</option>
                        <option value="Adele Weschler" <?php echo $result ['Designer'] == 'Adele Weschler' ? print 'selected="selected"' : ''; ?>>Adele Weschler</option>
                        <option value="Alfred Angelo" <?php echo $result ['Designer'] == 'Alfred Angelo' ? print 'selected="selected"' : ''; ?>>Alfred Angelo</option>
                        <option value="Alfred Sung" <?php echo $result ['Designer'] == 'Alfred Sung' ? print 'selected="selected"' : ''; ?>>Alfred Sung</option>
                        <option value="Alisa Benay" <?php echo $result ['Designer'] == 'Alisa Benay' ? print 'selected="selected"' : ''; ?>>Alisa Benay</option>
                        <option value="Alita Graham" <?php echo $result ['Designer'] == 'Alita Graham' ? print 'selected="selected"' : ''; ?>>Alita Graham</option>
                        <option value="Allure" <?php echo $result ['Designer'] == 'Allure' ? print 'selected="selected"' : ''; ?>>Allure</option>
                        <option value="Alvina Valenta" <?php echo $result ['Designer'] == 'Alvina Valenta' ? print 'selected="selected"' : ''; ?>>Alvina Valenta</option>
                        
                        <option value="Amalia Carrara" <?php echo $result ['Designer'] == 'Amalia Carrara' ? print 'selected="selected"' : ''; ?>>Amalia Carrara</option>
                        <option value="Amelia Casablanca" <?php echo $result ['Designer'] == 'Amelia Casablanca' ? print 'selected="selected"' : ''; ?>>Amelia Casablanca</option>
                        <option value="Amsale" <?php echo $result ['Designer'] == 'Amsale' ? print 'selected="selected"' : ''; ?>>Amsale</option>
                        <option value="Amy Kuschel" <?php echo $result ['Designer'] == 'Amy Kuschel' ? print 'selected="selected"' : ''; ?>>Amy Kuschel</option>
                        <option value="Amy Michelson" <?php echo $result ['Designer'] == 'Amy Michelson' ? print 'selected="selected"' : ''; ?>>Amy Michelson</option>
                        <option value="Amy Robinson" <?php echo $result ['Designer'] == 'Amy Robinson' ? print 'selected="selected"' : ''; ?>>Amy Robinson </option>
                        <option value="Angel Sanchez" <?php echo $result ['Designer'] == 'Angel Sanchez' ? print 'selected="selected"' : ''; ?>>Angel Sanchez</option>
                        <option value="Angelina Faccenda" <?php echo $result ['Designer'] == 'Angelina Faccenda' ? print 'selected="selected"' : ''; ?>>Angelina Faccenda</option>
                        <option value="Anjolique" <?php echo $result ['Designer'] == 'Anjolique' ? print 'selected="selected"' : ''; ?>>Anjolique</option>
                        
                        <option value="Anne Barge" <?php echo $result ['Designer'] == 'Anne Barge' ? print 'selected="selected"' : ''; ?>>Anne Barge</option>
                        <option value="Atelier Aimee" <?php echo $result ['Designer'] == 'Atelier Aimee' ? print 'selected="selected"' : ''; ?>>Atelier Aimee</option>
                        <option value="Audrey Hart" <?php echo $result ['Designer'] == 'Audrey Hart' ? print 'selected="selected"' : ''; ?>>Audrey Hart</option>
                        <option value="Augusta Jones" <?php echo $result ['Designer'] == 'Augusta Jones' ? print 'selected="selected"' : ''; ?>>Augusta Jones</option>
                        <option value="Badgley Mischka" <?php echo $result ['Designer'] == 'Badgley Mischka' ? print 'selected="selected"' : ''; ?>>Badgley Mischka</option>
                        <option value="Baracci" <?php echo $result ['Designer'] == 'Baracci' ? print 'selected="selected"' : ''; ?>>Baracci</option>
                        <option value="Barbra Allin" <?php echo $result ['Designer'] == 'Barbra Allin' ? print 'selected="selected"' : ''; ?>>Barbra Allin </option>
                        <option value="BCBG MAXAZRIA" <?php echo $result ['Designer'] == 'BCBG MAXAZRIA' ? print 'selected="selected"' : ''; ?>>BCBG MAXAZRIA</option>
                        <option value="Bianchi" <?php echo $result ['Designer'] == 'Bianchi' ? print 'selected="selected"' : ''; ?>>Bianchi</option>
                        
                        <option value="Birnbaum Bullock" <?php echo $result ['Designer'] == 'Birnbaum Bullock' ? print 'selected="selected"' : ''; ?>>Birnbaum &amp; Bullock</option>
                        <option value="Bonny" <?php echo $result ['Designer'] == 'Bonny' ? print 'selected="selected"' : ''; ?>>Bonny</option>
                        <option value="Carmela Sutera" <?php echo $result ['Designer'] == 'Carmela Sutera' ? print 'selected="selected"' : ''; ?>>Carmela Sutera</option>
                        <option value="Carmen Marc Valvo" <?php echo $result ['Designer'] == 'Carmen Marc Valvo' ? print 'selected="selected"' : ''; ?>>Carmen Marc Valvo</option>
                        <option value="Carolina Herrera" <?php echo $result ['Designer'] == 'Carolina Herrera' ? print 'selected="selected"' : ''; ?>>Carolina Herrera</option>
                        <option value="Caroline DeVillo" <?php echo $result ['Designer'] == 'Caroline DeVillo' ? print 'selected="selected"' : ''; ?>>Caroline DeVillo</option>
                        <option value="Casablanca" <?php echo $result ['Designer'] == 'Casablanca' ? print 'selected="selected"' : ''; ?>>Casablanca</option>
                        <option value="Christina Wu" <?php echo $result ['Designer'] == 'Christina Wu' ? print 'selected="selected"' : ''; ?>>Christina Wu</option>
                        
                        <option value="Christos" <?php echo $result ['Designer'] == 'Christos' ? print 'selected="selected"' : ''; ?>>Christos</option>
                        <option value="Claire Pettibone" <?php echo $result ['Designer'] == 'Claire Pettibone' ? print 'selected="selected"' : ''; ?>>Claire Pettibone</option>
                        <option value="Cocoe Voci" <?php echo $result ['Designer'] == 'Cocoe Voci' ? print 'selected="selected"' : ''; ?>>Cocoe Voci</option>
                        <option value="Cymbeline" <?php echo $result ['Designer'] == 'Cymbeline' ? print 'selected="selected"' : ''; ?>>Cymbeline</option>
                        <option value="Da Vinci" <?php echo $result ['Designer'] == 'Da Vinci' ? print 'selected="selected"' : ''; ?>>Da Vinci</option>
                        <option value="Daniel Thompson" <?php echo $result ['Designer'] == 'Daniel Thompson' ? print 'selected="selected"' : ''; ?>>Daniel Thompson</option>
                        <option value="David&#039;s Bridal" <?php echo $result ['Designer'] == 'David&#039;s Bridal' ? print 'selected="selected"' : ''; ?>>David&#039;s Bridal</option>
                        <option value="Demetrios" <?php echo $result ['Designer'] == 'Demetrios' ? print 'selected="selected"' : ''; ?>>Demetrios</option>
                        
                        <option value="Diamond Bride" <?php echo $result ['Designer'] == 'Diamond Bride' ? print 'selected="selected"' : ''; ?>>Diamond Bride</option>
                        <option value="Dolce Gabbana" <?php echo $result ['Designer'] == 'Dolce Gabbana' ? print 'selected="selected"' : ''; ?>>Dolce Gabbana</option>
                        <option value="Domo Adami" <?php echo $result ['Designer'] == 'Domo Adami' ? print 'selected="selected"' : ''; ?>>Domo Adami</option>
                        <option value="Eavis Brown" <?php echo $result ['Designer'] == 'Eavis Brown' ? print 'selected="selected"' : ''; ?>>Eavis &amp; Brown</option>
                        <option value="Eden Bridals" <?php echo $result ['Designer'] == 'Eden Bridals' ? print 'selected="selected"' : ''; ?>>Eden Bridals</option>
                        <option value="Edgardo Bonilla" <?php echo $result ['Designer'] == 'Edgardo Bonilla' ? print 'selected="selected"' : ''; ?>>Edgardo Bonilla</option>
                        <option value="Elie Saab" <?php echo $result ['Designer'] == 'Elie Saab' ? print 'selected="selected"' : ''; ?>>Elie Saab</option>
                        <option value="Elizabeth Fillmore" <?php echo $result ['Designer'] == 'Elizabeth Fillmore' ? print 'selected="selected"' : ''; ?>>Elizabeth Fillmore</option>
                        
                        <option value="Emerald Bridal" <?php echo $result ['Designer'] == 'Emerald Bridal' ? print 'selected="selected"' : ''; ?>>Emerald Bridal</option>
                        <option value="Enzoani" <?php echo $result ['Designer'] == 'Enzoani' ? print 'selected="selected"' : ''; ?>>Enzoani</option>
                        <option value="Escada" <?php echo $result ['Designer'] == 'Escada' ? print 'selected="selected"' : ''; ?>>Escada</option>
                        <option value="Essense of Australia" <?php echo $result ['Designer'] == 'Essense of Australia' ? print 'selected="selected"' : ''; ?>>Essense of Australia</option>
                        <option value="Eugenia" <?php echo $result ['Designer'] == 'Eugenia' ? print 'selected="selected"' : ''; ?>>Eugenia</option>
                        <option value="Evalina Schmidtke" <?php echo $result ['Designer'] == 'Evalina Schmidtke' ? print 'selected="selected"' : ''; ?>>Evalina Schmidtke</option>
                        <option value="Eve of Milady" <?php echo $result ['Designer'] == 'Eve of Milady' ? print 'selected="selected"' : ''; ?>>Eve of Milady</option>
                        <option value="Exclusive Bridals" <?php echo $result ['Designer'] == 'Exclusive Bridals' ? print 'selected="selected"' : ''; ?>>Exclusive Bridals</option>
                        <option value="Forever Yours" <?php echo $result ['Designer'] == 'Forever Yours' ? print 'selected="selected"' : ''; ?>>Forever Yours</option>
                        
                        <option value="Galina" <?php echo $result ['Designer'] == 'Galina' ? print 'selected="selected"' : ''; ?>>Galina</option>
                        <option value="Givenchy" <?php echo $result ['Designer'] == 'Givenchy' ? print 'selected="selected"' : ''; ?>>Givenchy</option>
                        <option value="Helen Morley" <?php echo $result ['Designer'] == 'Helen Morley' ? print 'selected="selected"' : ''; ?>>Helen Morley</option>
                        <option value="Henry Roth" <?php echo $result ['Designer'] == 'Henry Roth' ? print 'selected="selected"' : ''; ?>>Henry Roth</option>
                        <option value="Ian Stuart" <?php echo $result ['Designer'] == 'Ian Stuart' ? print 'selected="selected"' : ''; ?>>Ian Stuart</option>
                        <option value="Impression" <?php echo $result ['Designer'] == 'Impression' ? print 'selected="selected"' : ''; ?>>Impression</option>
                        <option value="Indian Bridal Lehnga" <?php echo $result ['Designer'] == 'Indian Bridal Lehnga' ? print 'selected="selected"' : ''; ?>>Indian Bridal Lehnga</option>
                        <option value="Ines Di Santo" <?php echo $result ['Designer'] == 'Ines Di Santo' ? print 'selected="selected"' : ''; ?>>Ines Di Santo</option>
                        <option value="Inspired Gowns" <?php echo $result ['Designer'] == 'Inspired Gowns' ? print 'selected="selected"' : ''; ?>>Inspired Gowns</option>
                        
                        <option value="J. Crew" <?php echo $result ['Designer'] == 'J. Crew' ? print 'selected="selected"' : ''; ?>>J. Crew</option>
                        <option value="James Clifford" <?php echo $result ['Designer'] == 'James Clifford' ? print 'selected="selected"' : ''; ?>>James Clifford</option>
                        <option value="Jana-Marie" <?php echo $result ['Designer'] == 'Jana-Marie' ? print 'selected="selected"' : ''; ?>>Jana-Marie</option>
                        <option value="Janell Berte" <?php echo $result ['Designer'] == 'Janell Berte' ? print 'selected="selected"' : ''; ?>>Janell Berte</option>
                        <option value="Jasmine" <?php echo $result ['Designer'] == 'Jasmine' ? print 'selected="selected"' : ''; ?>>Jasmine</option>
                        <option value="Jenny Lee" <?php echo $result ['Designer'] == 'Jenny Lee' ? print 'selected="selected"' : ''; ?>>Jenny Lee</option>
                        <option value="Jenny Packham" <?php echo $result ['Designer'] == 'Jenny Packham' ? print 'selected="selected"' : ''; ?>>Jenny Packham</option>
                        <option value="Jenny Yoo" <?php echo $result ['Designer'] == 'Jenny Yoo' ? print 'selected="selected"' : ''; ?>>Jenny Yoo</option>
                        <option value="Jessica Iverson" <?php echo $result ['Designer'] == 'Jessica Iverson' ? print 'selected="selected"' : ''; ?>>Jessica Iverson</option>
                        
                        <option value="Jessica McClintock" <?php echo $result ['Designer'] == 'Jessica McClintock' ? print 'selected="selected"' : ''; ?>>Jessica McClintock</option>
                        <option value="Jim Hjelm" <?php echo $result ['Designer'] == 'Jim Hjelm' ? print 'selected="selected"' : ''; ?>>Jim Hjelm</option>
                        <option value="Jin Wang" <?php echo $result ['Designer'] == 'Jin Wang' ? print 'selected="selected"' : ''; ?>>Jin Wang</option>
                        <option value="Jorge Manuel" <?php echo $result ['Designer'] == 'Jorge Manuel' ? print 'selected="selected"' : ''; ?>>Jorge Manuel</option>
                        <option value="Judd Waddell" <?php echo $result ['Designer'] == 'Judd Waddell' ? print 'selected="selected"' : ''; ?>>Judd Waddell</option>
                        <option value="Junko Yoshioka" <?php echo $result ['Designer'] == 'Junko Yoshioka' ? print 'selected="selected"' : ''; ?>>Junko Yoshioka</option>
                        <option value="Justin Alexander" <?php echo $result ['Designer'] == 'Justin Alexander' ? print 'selected="selected"' : ''; ?>>Justin Alexander</option>
                        <option value="Justina McCaffrey" <?php echo $result ['Designer'] == 'Justina McCaffrey' ? print 'selected="selected"' : ''; ?>>Justina McCaffrey</option>
                        <option value="Kenneth Pool" <?php echo $result ['Designer'] == 'Kenneth Pool' ? print 'selected="selected"' : ''; ?>>Kenneth Pool</option>
                        
                        <option value="Kirstie Kelly" <?php echo $result ['Designer'] == 'Kirstie Kelly' ? print 'selected="selected"' : ''; ?>>Kirstie Kelly</option>
                        <option value="L&#039;ezu Atelier" <?php echo $result ['Designer'] == 'L&#039;ezu Atelier' ? print 'selected="selected"' : ''; ?>>L&#039;ezu Atelier</option>
                        <option value="La Sposa" <?php echo $result ['Designer'] == 'La Sposa' ? print 'selected="selected"' : ''; ?>>La Sposa</option>
                        <option value="Lara Helene Atelier" <?php echo $result ['Designer'] == 'Lara Helene Atelier' ? print 'selected="selected"' : ''; ?>>Lara Helene Atelier</option>
                        <option value="Lazaro" <?php echo $result ['Designer'] == 'Lazaro' ? print 'selected="selected"' : ''; ?>>Lazaro</option>
                        <option value="Le Spose Di Gio" <?php echo $result ['Designer'] == 'Le Spose Di Gio' ? print 'selected="selected"' : ''; ?>>Le Spose Di Gio</option>
                        <option value="Lea Ann Belter" <?php echo $result ['Designer'] == 'Lea Ann Belter' ? print 'selected="selected"' : ''; ?>>Lea Ann Belter</option>
                        <option value="Lela Rose" <?php echo $result ['Designer'] == 'Lela Rose' ? print 'selected="selected"' : ''; ?>>Lela Rose</option>
                        
                        <option value="Lian Carlo" <?php echo $result ['Designer'] == 'Lian Carlo' ? print 'selected="selected"' : ''; ?>>Lian Carlo</option>
                        <option value="Luci Di Bella" <?php echo $result ['Designer'] == 'Luci Di Bella' ? print 'selected="selected"' : ''; ?>>Luci Di Bella</option>
                        <option value="Maggie Sottero" <?php echo $result ['Designer'] == 'Maggie Sottero' ? print 'selected="selected"' : ''; ?>>Maggie Sottero</option>
                        <option value="Manale" <?php echo $result ['Designer'] == 'Manale' ? print 'selected="selected"' : ''; ?>>Manale</option>
                        <option value="Manuel Mota" <?php echo $result ['Designer'] == 'Manuel Mota' ? print 'selected="selected"' : ''; ?>>Manuel Mota</option>
                        <option value="Marisa" <?php echo $result ['Designer'] == 'Marisa' ? print 'selected="selected"' : ''; ?>>Marisa</option>
                        <option value="Martin McCrea" <?php echo $result ['Designer'] == 'Martin McCrea' ? print 'selected="selected"' : ''; ?>>Martin McCrea</option>
                        <option value="Martina Liana" <?php echo $result ['Designer'] == 'Martina Liana' ? print 'selected="selected"' : ''; ?>>Martina Liana</option>
                        <option value="Mary&#039;s Bridal" <?php echo $result ['Designer'] == 'Mary&#039;s Bridal' ? print 'selected="selected"' : ''; ?>>Mary&#039;s Bridal</option>
                        
                        <option value="Matthew Christopher" <?php echo $result ['Designer'] == 'Matthew Christopher' ? print 'selected="selected"' : ''; ?>>Matthew Christopher</option>
                        <option value="Max Mara" <?php echo $result ['Designer'] == 'Max Mara' ? print 'selected="selected"' : ''; ?>>Max Mara</option>
                        <option value="Melissa Sweet" <?php echo $result ['Designer'] == 'Melissa Sweet' ? print 'selected="selected"' : ''; ?>>Melissa Sweet</option>
                        <option value="Mia Solano" <?php echo $result ['Designer'] == 'Mia Solano' ? print 'selected="selected"' : ''; ?>>Mia Solano</option>
                        <option value="Michaelangelo" <?php echo $result ['Designer'] == 'Michaelangelo' ? print 'selected="selected"' : ''; ?>>Michaelangelo</option>
                        <option value="Michelle Roth" <?php echo $result ['Designer'] == 'Michelle Roth' ? print 'selected="selected"' : ''; ?>>Michelle Roth</option>
                        <option value="Mikaella" <?php echo $result ['Designer'] == 'Mikaella' ? print 'selected="selected"' : ''; ?>>Mikaella</option>
                        <option value="Modern Trousseau" <?php echo $result ['Designer'] == 'Modern Trousseau' ? print 'selected="selected"' : ''; ?>>Modern Trousseau</option>
                        <option value="Mon Cheri" <?php echo $result ['Designer'] == 'Mon Cheri' ? print 'selected="selected"' : ''; ?>>Mon Cheri</option>
                        
                        <option value="Monique Lhuillier" <?php echo $result ['Designer'] == 'Monique Lhuillier' ? print 'selected="selected"' : ''; ?>>Monique Lhuillier</option>
                        <option value="Monique Luo" <?php echo $result ['Designer'] == 'Monique Luo' ? print 'selected="selected"' : ''; ?>>Monique Luo</option>
                        <option value="Moonlight" <?php echo $result ['Designer'] == 'Moonlight' ? print 'selected="selected"' : ''; ?>>Moonlight</option>
                        <option value="Morgane Le Fay" <?php echo $result ['Designer'] == 'Morgane Le Fay' ? print 'selected="selected"' : ''; ?>>Morgane Le Fay</option>
                        <option value="Mori Lee" <?php echo $result ['Designer'] == 'Mori Lee' ? print 'selected="selected"' : ''; ?>>Mori Lee</option>
                        <option value="Nicole Miller" <?php echo $result ['Designer'] == 'Nicole Miller' ? print 'selected="selected"' : ''; ?>>Nicole Miller</option>
                        <option value="No Ordinary Bride" <?php echo $result ['Designer'] == 'No Ordinary Bride' ? print 'selected="selected"' : ''; ?>>No Ordinary Bride</option>
                        <option value="Oleg Cassini" <?php echo $result ['Designer'] == 'Oleg Cassini' ? print 'selected="selected"' : ''; ?>>Oleg Cassini</option>
                        <option value="Oscar de la Renta" <?php echo $result ['Designer'] == 'Oscar de la Renta' ? print 'selected="selected"' : ''; ?>>Oscar de la Renta</option>
                        
                        <option value="Other" <?php echo $result ['Designer'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                        <option value="Palazzo" <?php echo $result ['Designer'] == 'Palazzo' ? print 'selected="selected"' : ''; ?>>Palazzo</option>
                        <option value="Paloma Blanca" <?php echo $result ['Designer'] == 'Paloma Blanca' ? print 'selected="selected"' : ''; ?>>Paloma Blanca</option>
                        <option value="Paula Varsalona" <?php echo $result ['Designer'] == 'Paula Varsalona' ? print 'selected="selected"' : ''; ?>>Paula Varsalona</option>
                        <option value="Peter Langner" <?php echo $result ['Designer'] == 'Peter Langner' ? print 'selected="selected"' : ''; ?>>Peter Langner</option>
                        <option value="Piccione" <?php echo $result ['Designer'] == 'Piccione' ? print 'selected="selected"' : ''; ?>>Piccione</option>
                        <option value="Pnina Tornai" <?php echo $result ['Designer'] == 'Pnina Tornai' ? print 'selected="selected"' : ''; ?>>Pnina Tornai</option>
                        <option value="Priscilla of Boston" <?php echo $result ['Designer'] == 'Priscilla of Boston' ? print 'selected="selected"' : ''; ?>>Priscilla of Boston</option>
                        <option value="Private Label by G" <?php echo $result ['Designer'] == 'Private Label by G' ? print 'selected="selected"' : ''; ?>>Private Label by G</option>
                        
                        <option value="Pronovias" <?php echo $result ['Designer'] == 'Pronovias' ? print 'selected="selected"' : ''; ?>>Pronovias</option>
                        <option value="Qipao/Cheongsam" <?php echo $result ['Designer'] == 'Qipao/Cheongsam' ? print 'selected="selected"' : ''; ?>>Qipao/Cheongsam</option>
                        <option value="Ralph Lauren" <?php echo $result ['Designer'] == 'Ralph Lauren' ? print 'selected="selected"' : ''; ?>>Ralph Lauren</option>
                        <option value="Reem Acra" <?php echo $result ['Designer'] == 'Reem Acra' ? print 'selected="selected"' : ''; ?>>Reem Acra</option>
                        <option value="Rena Koh" <?php echo $result ['Designer'] == 'Rena Koh' ? print 'selected="selected"' : ''; ?>>Rena Koh</option>
                        <option value="Renella De Fina" <?php echo $result ['Designer'] == 'Renella De Fina' ? print 'selected="selected"' : ''; ?>>Renella De Fina</option>
                        <option value="Reva Mivasagar" <?php echo $result ['Designer'] == 'Reva Mivasagar' ? print 'selected="selected"' : ''; ?>>Reva Mivasagar</option>
                        <option value="Richard Glasgow" <?php echo $result ['Designer'] == 'Richard Glasgow' ? print 'selected="selected"' : ''; ?>>Richard Glasgow</option>
                        <option value="Richard Tyler" <?php echo $result ['Designer'] == 'Richard Tyler' ? print 'selected="selected"' : ''; ?>>Richard Tyler</option>
                        
                        <option value="Rina di Montella" <?php echo $result ['Designer'] == 'Rina di Montella' ? print 'selected="selected"' : ''; ?>>Rina di Montella </option>
                        <option value="Ristarose" <?php echo $result ['Designer'] == 'Ristarose' ? print 'selected="selected"' : ''; ?>>Ristarose</option>
                        <option value="Rivini" <?php echo $result ['Designer'] == 'Rivini' ? print 'selected="selected"' : ''; ?>>Rivini</option>
                        <option value="Romona Keveza" <?php echo $result ['Designer'] == 'Romona Keveza' ? print 'selected="selected"' : ''; ?>>Romona Keveza</option>
                        <option value="Rosa Clara" <?php echo $result ['Designer'] == 'Rosa Clara' ? print 'selected="selected"' : ''; ?>>Rosa Clara</option>
                        <option value="Saison Blanche" <?php echo $result ['Designer'] == 'Saison Blanche' ? print 'selected="selected"' : ''; ?>>Saison Blanche</option>
                        <option value="Sally Crew" <?php echo $result ['Designer'] == 'Sally Crew' ? print 'selected="selected"' : ''; ?>>Sally Crew</option>
                        <option value="San Patrick" <?php echo $result ['Designer'] == 'San Patrick' ? print 'selected="selected"' : ''; ?>>San Patrick</option>
                        <option value="Sarah Houston" <?php echo $result ['Designer'] == 'Sarah Houston' ? print 'selected="selected"' : ''; ?>>Sarah Houston</option>
                        
                        <option value="Sassi Holford" <?php echo $result ['Designer'] == 'Sassi Holford' ? print 'selected="selected"' : ''; ?>>Sassi Holford</option>
                        <option value="Selia Yang" <?php echo $result ['Designer'] == 'Selia Yang' ? print 'selected="selected"' : ''; ?>>Selia Yang</option>
                        <option value="Simone Carvalli" <?php echo $result ['Designer'] == 'Simone Carvalli' ? print 'selected="selected"' : ''; ?>>Simone Carvalli</option>
                        <option value="Siri" <?php echo $result ['Designer'] == 'Siri' ? print 'selected="selected"' : ''; ?>>Siri</option>
                        <option value="Sophia Tolli" <?php echo $result ['Designer'] == 'Sophia Tolli' ? print 'selected="selected"' : ''; ?>>Sophia Tolli</option>
                        <option value="Sottero &amp; Midgley" <?php echo $result ['Designer'] == 'Sottero &amp; Midgley' ? print 'selected="selected"' : ''; ?>>Sottero &amp; Midgley</option>
                        <option value="St. Pucchi" <?php echo $result ['Designer'] == 'St. Pucchi' ? print 'selected="selected"' : ''; ?>>St. Pucchi</option>
                        <option value="Stephen Yearick" <?php echo $result ['Designer'] == 'Stephen Yearick' ? print 'selected="selected"' : ''; ?>>Stephen Yearick</option>
                        
                        <option value="Suzanne Ermann" <?php echo $result ['Designer'] == 'Suzanne Ermann' ? print 'selected="selected"' : ''; ?>>Suzanne Ermann</option>
                        <option value="Tara Keely" <?php echo $result ['Designer'] == 'Tara Keely' ? print 'selected="selected"' : ''; ?>>Tara Keely</option>
                        <option value="Tomasina" <?php echo $result ['Designer'] == 'Tomasina' ? print 'selected="selected"' : ''; ?>>Tomasina</option>
                        <option value="Ulla-Maija" <?php echo $result ['Designer'] == 'Ulla-Maija' ? print 'selected="selected"' : ''; ?>>Ulla-Maija</option>
                        <option value="Valentino" <?php echo $result ['Designer'] == 'Valentino' ? print 'selected="selected"' : ''; ?>>Valentino</option>
                        <option value="Venus" <?php echo $result ['Designer'] == 'Venus' ? print 'selected="selected"' : ''; ?>>Venus</option>
                        <option value="Vera Wang" <?php echo $result ['Designer'] == 'Vera Wang' ? print 'selected="selected"' : ''; ?>>Vera Wang</option>
                        <option value="Vintage" <?php echo $result ['Designer'] == 'Vintage' ? print 'selected="selected"' : ''; ?>>Vintage</option>
                        <option value="Watters" <?php echo $result ['Designer'] == 'Watters' ? print 'selected="selected"' : ''; ?>>Watters</option>
                        
                        <option value="Wearkstatt" <?php echo $result ['Designer'] == 'Wearkstatt' ? print 'selected="selected"' : ''; ?>>Wearkstatt</option>
                        <option value="1Winnie Couture"<?php echo $result ['Designer'] == '1Winnie Couture' ? print 'selected="selected"' : ''; ?>>Winnie Couture</option>
                        <option value="Yolanda Couture" <?php echo $result ['Designer'] == 'Yolanda Couture' ? print 'selected="selected"' : ''; ?>>Yolanda Couture</option>
                        <option value="Yumi Katsura" <?php echo $result ['Designer'] == 'Yumi Katsura' ? print 'selected="selected"' : ''; ?>>Yumi Katsura</option>
                        </select><br />
                        
                         <div class="error_message" style="float: right; margin-right: 25px;">	
							<?php print isset($_SESSION['model']['errormsg']['gowncondition']) ? $_SESSION['model']['errormsg']['gowncondition'] : '';?>
                        </div>
                        
                        <p><span>* Condition:</span></p><select name="gowncondition">
                        <option value=""></option>
						<option value="Brand New with Tages" <?php echo $result ['GownCondition'] == 'Brand New with Tages' ? print 'selected="selected"' : ''; ?>>Brand New w/ Tags</option>
                        <option value="Sample" <?php echo $result ['GownCondition'] == 'Sample' ? print 'selected="selected"' : ''; ?>>Sample</option>
                        <option value="Used" <?php echo $result ['GownCondition'] == 'Used' ? print 'selected="selected"' : ''; ?>>Used</option>
						</select><br />
                        
                        <p><span>Silhouette:</span></p><select name="silhouette">
                        <option value=""></option>
                        <option value="A-line" <?php echo $result ['Silhouette'] == 'A-line' ? print 'selected="selected"' : ''; ?>>A-line</option>
                        <option value="Ball Gown" <?php echo $result ['Silhouette'] == 'Ball Gown' ? print 'selected="selected"' : ''; ?>>Ball Gown</option>
                        <option value="Mermaid" <?php echo $result ['Silhouette'] == 'Mermaid' ? print 'selected="selected"' : ''; ?>>Mermaid</option>
                        
                        <option value="Other" <?php echo $result ['Silhouette'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                        <option value="Sheath" <?php echo $result ['Silhouette'] == 'Sheath' ? print 'selected="selected"' : ''; ?>>Sheath</option>
                        <option value="Trumpet (Fit-and-Flare)" <?php echo $result ['Silhouette'] == 'Trumpet (Fit-and-Flare)' ? print 'selected="selected"' : ''; ?>>Trumpet (Fit-and-Flare)</option>
						</select><br />
                        
                        <p><span>Sleeve Style:</span></p><select name="sleevestyle">
                        <option value=""></option>
                        <option value="Strapless" <?php echo $result ['SleeveStyle'] == 'Strapless' ? print 'selected="selected"' : ''; ?>>Strapless</option>
                        <option value="Spaghetti Straps" <?php echo $result ['SleeveStyle'] == 'Spaghetti Straps' ? print 'selected="selected"' : ''; ?>>Spaghetti Straps</option>
                        
                        <option value="Straps" <?php echo $result ['SleeveStyle'] == 'Straps' ? print 'selected="selected"' : ''; ?>>Straps</option>
                        <option value="Sleeveless" <?php echo $result ['SleeveStyle'] == 'Sleeveless' ? print 'selected="selected"' : ''; ?>>Sleeveless</option>
                        <option value="Capped Sleeve" <?php echo $result ['SleeveStyle'] == 'Capped Sleeve' ? print 'selected="selected"' : ''; ?>>Capped Sleeve</option>
                        <option value="Short Sleeve" <?php echo $result ['SleeveStyle'] == 'Short Sleeve' ? print 'selected="selected"' : ''; ?>>Short Sleeve</option>
                        <option value="3/4 Sleeve" <?php echo $result ['SleeveStyle'] == '3/4 Sleeve' ? print 'selected="selected"' : ''; ?>>3/4 Sleeve</option>
                        <option value="Long Sleeve" <?php echo $result ['SleeveStyle'] == 'Long Sleeve' ? print 'selected="selected"' : ''; ?>>Long Sleeve</option>
                        <option value="Other" <?php echo $result ['SleeveStyle'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
						</select><br />
                        
                        <p><span>Style:</span></p><input type="text" name="stylenumber" value="<?php echo $result ['StyleNumber'];?>"/><?php print isset($_SESSION['model']['errormsg']['stylenumber']) ? $_SESSION['model']['errormsg']['stylenumber'] : '';?>
                        </div>
                        
                        <div class="form-column-right">
                        <div class="glspacer"></div>
                        <div class="glspacer"></div>
                        <p><span>Neckline:</span></p><select name="neckline">
                        <option value=""></option>
                        <option value="Bateau" <?php echo $result ['NeckLine'] == 'Bateau' ? print 'selected="selected"' : ''; ?>>Bateau</option>
                        <option value="Halter" <?php echo $result ['NeckLine'] == 'Halter' ? print 'selected="selected"' : ''; ?>>Halter</option>
                        <option value="High Neck" <?php echo $result ['NeckLine'] == 'High Neck' ? print 'selected="selected"' : ''; ?>>High Neck</option>
                        
                        <option value="Off the Shoulder" <?php echo $result ['NeckLine'] == 'Off the Shoulder' ? print 'selected="selected"' : ''; ?>>Off the Shoulder</option>
                        <option value="One Shoulder" <?php echo $result ['NeckLine'] == 'One Shoulder' ? print 'selected="selected"' : ''; ?>>One Shoulder</option>
                        <option value="Other" <?php echo $result ['NeckLine'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
                        <option value="Queen Ann" <?php echo $result ['NeckLine'] == 'Queen Ann' ? print 'selected="selected"' : ''; ?>>Queen Ann</option>
                        <option value="Scoop" <?php echo $result ['NeckLine'] == 'Scoop' ? print 'selected="selected"' : ''; ?>>Scoop</option>
                        <option value="Sheer" <?php echo $result ['NeckLine'] == 'Sheer' ? print 'selected="selected"' : ''; ?>>Sheer</option>
                        <option value="Square" <?php echo $result ['NeckLine'] == 'Square' ? print 'selected="selected"' : ''; ?>>Square</option>
                        <option value="Strapless (Slight Curve)" <?php echo $result ['NeckLine'] == 'Strapless (Slight Curve)' ? print 'selected="selected"' : ''; ?>>Strapless (Slight Curve)</option>
                        <option value="Strapless (Straight Across)" <?php echo $result ['NeckLine'] == 'Strapless (Straight Across)' ? print 'selected="selected"' : ''; ?>>Strapless (Straight Across)</option>
                        
                        <option value="Strapless (Sweetheart)" <?php echo $result ['NeckLine'] == 'Strapless (Sweetheart)' ? print 'selected="selected"' : ''; ?>>Strapless (Sweetheart)</option>
                        <option value="Sweetheart" <?php echo $result ['NeckLine'] == 'Sweetheart' ? print 'selected="selected"' : ''; ?>>Sweetheart</option>
                        <option value="V-neck" <?php echo $result ['NeckLine'] == 'V-neck' ? print 'selected="selected"' : ''; ?>>V-neck</option>
						</select><br />
                        
                        <p><span>Waistline:</span></p><select name="waistline">
                        <option value=""></option>
                        <option value="Asymmetrical" <?php echo $result ['WaistLine'] == 'Asymmetrical' ? print 'selected="selected"' : ''; ?>>Asymmetrical</option>
                        <option value="Basque Waist" <?php echo $result ['WaistLine'] == 'Basque Waist' ? print 'selected="selected"' : ''; ?>>Basque Waist</option>
                        <option value="Dropped Waist" <?php echo $result ['WaistLine'] == 'Dropped Waist' ? print 'selected="selected"' : ''; ?>>Dropped Waist</option>
                        
                        <option value="Empire Waist" <?php echo $result ['WaistLine'] == 'Empire Waist' ? print 'selected="selected"' : ''; ?>>Empire Waist</option>
                        <option value="Natural Waist" <?php echo $result ['WaistLine'] == 'Natural Waist' ? print 'selected="selected"' : ''; ?>>Natural Waist</option>
                        <option value="No Waist/Princess Seams" <?php echo $result ['WaistLine'] == 'No Waist/Princess Seams' ? print 'selected="selected"' : ''; ?>>No Waist/Princess Seams</option>
                        <option value="Other" <?php echo $result ['WaistLine'] == 'Other' ? print 'selected="selected"' : ''; ?>>Other</option>
						</select><br />
                        
                        <p><span>Dress Length:</span></p><select name="dresslength">
                        <option value=""></option>
                        <option value="Above the Knee" <?php echo $result ['DressLength'] == 'Above the Knee' ? print 'selected="selected"' : ''; ?>>Above the Knee</option>
                        <option value="Knee Length" <?php echo $result ['DressLength'] == 'Knee Length' ? print 'selected="selected"' : ''; ?>>Knee Length</option>
                        <option value="Tea Length" <?php echo $result ['DressLength'] == 'Tea Length' ? print 'selected="selected"' : ''; ?>>Tea Length</option>
                        <option value="Ankle Length" <?php echo $result ['DressLength'] == 'Ankle Length' ? print 'selected="selected"' : ''; ?>>Ankle Length</option>
                        <option value="Floor Length" <?php echo $result ['DressLength'] == 'Floor Length' ? print 'selected="selected"' : ''; ?>>Floor Length</option>
						</select><br />
                        
                        <p><span>Color:</span></p><input type="text" name="color" value="<?php echo $result ['Color'];?>"/>
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
                        <option value="2010" <?php echo $result ['PurchaseDate'] == '2010' ? print 'selected="selected"' : ''; ?>>2010</option>
                        
                        <option value="2009" <?php echo $result ['PurchaseDate'] == '2009' ? print 'selected="selected"' : ''; ?>>2009</option>
                        <option value="2008" <?php echo $result ['PurchaseDate'] == '2008' ? print 'selected="selected"' : ''; ?>>2008</option>
                        <option value="2007" <?php echo $result ['PurchaseDate'] == '2007' ? print 'selected="selected"' : ''; ?>>2007</option>
                        <option value="2006" <?php echo $result ['PurchaseDate'] == '2006' ? print 'selected="selected"' : ''; ?>>2006</option>
                        <option value="2005" <?php echo $result ['PurchaseDate'] == '2005' ? print 'selected="selected"' : ''; ?>>2005</option>
                        <option value="2004" <?php echo $result ['PurchaseDate'] == '2004' ? print 'selected="selected"' : ''; ?>>2004</option>
                        <option value="2003" <?php echo $result ['PurchaseDate'] == '2003' ? print 'selected="selected"' : ''; ?>>2003</option>
                        <option value="2002" <?php echo $result ['PurchaseDate'] == '2002' ? print 'selected="selected"' : ''; ?>>2002</option>
                        <option value="2001" <?php echo $result ['PurchaseDate'] == '2001' ? print 'selected="selected"' : ''; ?>>2001</option>
                        
                        <option value="2000" <?php echo $result ['PurchaseDate'] == '2000' ? print 'selected="selected"' : ''; ?>>2000</option>
                        <option value="1999" <?php echo $result ['PurchaseDate'] == '1999' ? print 'selected="selected"' : ''; ?>>1999</option>
                        <option value="1998" <?php echo $result ['PurchaseDate'] == '1998' ? print 'selected="selected"' : ''; ?>>1998</option>
                        <option value="1997" <?php echo $result ['PurchaseDate'] == '1997' ? print 'selected="selected"' : ''; ?>>1997</option>
                        <option value="1996" <?php echo $result ['PurchaseDate'] == '1996' ? print 'selected="selected"' : ''; ?>>1996</option>
                        <option value="1995" <?php echo $result ['PurchaseDate'] == '1995' ? print 'selected="selected"' : ''; ?>>1995</option>
                        <option value="1994" <?php echo $result ['PurchaseDate'] == '1994' ? print 'selected="selected"' : ''; ?>>1994</option>
                        <option value="1993" <?php echo $result ['PurchaseDate'] == '1993' ? print 'selected="selected"' : ''; ?>>1993</option>
                        <option value="1992" <?php echo $result ['PurchaseDate'] == '1992' ? print 'selected="selected"' : ''; ?>>1992</option>
                        
                        <option value="1991" <?php echo $result ['PurchaseDate'] == '1991' ? print 'selected="selected"' : ''; ?>>1991</option>
                        <option value="1990" <?php echo $result ['PurchaseDate'] == '1990' ? print 'selected="selected"' : ''; ?>>1990</option>
                        <option value="1989" <?php echo $result ['PurchaseDate'] == '1989' ? print 'selected="selected"' : ''; ?>>1989</option>
                        <option value="1988" <?php echo $result ['PurchaseDate'] == '1988' ? print 'selected="selected"' : ''; ?>>1988</option>
                        <option value="1987" <?php echo $result ['PurchaseDate'] == '1987' ? print 'selected="selected"' : ''; ?>>1987</option>
                        <option value="1986" <?php echo $result ['PurchaseDate'] == '1986' ? print 'selected="selected"' : ''; ?>>1986</option>
                        <option value="1985" <?php echo $result ['PurchaseDate'] == '1985' ? print 'selected="selected"' : ''; ?>>1985</option>
                        <option value="1984" <?php echo $result ['PurchaseDate'] == '1984' ? print 'selected="selected"' : ''; ?>>1984</option>
                        <option value="1983" <?php echo $result ['PurchaseDate'] == '1983' ? print 'selected="selected"' : ''; ?>>1983</option>
                        
                        <option value="1982" <?php echo $result ['PurchaseDate'] == '1982' ? print 'selected="selected"' : ''; ?>>1982</option>
                        <option value="1981" <?php echo $result ['PurchaseDate'] == '1981' ? print 'selected="selected"' : ''; ?>>1981</option>
                        <option value="1980" <?php echo $result ['PurchaseDate'] == '1980' ? print 'selected="selected"' : ''; ?>>1980</option>
                        <option value="1979" <?php echo $result ['PurchaseDate'] == '1979' ? print 'selected="selected"' : ''; ?>>1979</option>
                        <option value="1978" <?php echo $result ['PurchaseDate'] == '1978' ? print 'selected="selected"' : ''; ?>>1978</option>
                        <option value="1977" <?php echo $result ['PurchaseDate'] == '1977' ? print 'selected="selected"' : ''; ?>>1977</option>
                        <option value="1976" <?php echo $result ['PurchaseDate'] == '1976' ? print 'selected="selected"' : ''; ?>>1976</option>
                        <option value="1975" <?php echo $result ['PurchaseDate'] == '1975' ? print 'selected="selected"' : ''; ?>>1975</option>
                        <option value="1974" <?php echo $result ['PurchaseDate'] == '1974' ? print 'selected="selected"' : ''; ?>>1974</option>
                        
                        <option value="1973" <?php echo $result ['PurchaseDate'] == '1973' ? print 'selected="selected"' : ''; ?>>1973</option>
                        <option value="1972" <?php echo $result ['PurchaseDate'] == '1972' ? print 'selected="selected"' : ''; ?>>1972</option>
                        <option value="1971" <?php echo $result ['PurchaseDate'] == '1971' ? print 'selected="selected"' : ''; ?>>1971</option>
                        <option value="1970" <?php echo $result ['PurchaseDate'] == '1970' ? print 'selected="selected"' : ''; ?>>1970</option>
                        <option value="1969" <?php echo $result ['PurchaseDate'] == '1969' ? print 'selected="selected"' : ''; ?>>1969</option>
                        <option value="1968" <?php echo $result ['PurchaseDate'] == '1968' ? print 'selected="selected"' : ''; ?>>1968</option>
                        <option value="1967" <?php echo $result ['PurchaseDate'] == '1967' ? print 'selected="selected"' : ''; ?>>1967</option>
                        <option value="1966" <?php echo $result ['PurchaseDate'] == '1966' ? print 'selected="selected"' : ''; ?>>1966</option>
                        <option value="1965" <?php echo $result ['PurchaseDate'] == '1965' ? print 'selected="selected"' : ''; ?>>1965</option>
                        
                        <option value="1964" <?php echo $result ['PurchaseDate'] == '1964' ? print 'selected="selected"' : ''; ?>>1964</option>
                        <option value="1963" <?php echo $result ['PurchaseDate'] == '1963' ? print 'selected="selected"' : ''; ?>>1963</option>
                        <option value="1962" <?php echo $result ['PurchaseDate'] == '1962' ? print 'selected="selected"' : ''; ?>>1962</option>
                        <option value="1961" <?php echo $result ['PurchaseDate'] == '1961' ? print 'selected="selected"' : ''; ?>>1961</option>
                        <option value="1960" <?php echo $result ['PurchaseDate'] == '1960' ? print 'selected="selected"' : ''; ?>>1960</option>
                        <option value="1959" <?php echo $result ['PurchaseDate'] == '1959' ? print 'selected="selected"' : ''; ?>>1959</option>
                        <option value="1958" <?php echo $result ['PurchaseDate'] == '1958' ? print 'selected="selected"' : ''; ?>>1958</option>
                        <option value="1957" <?php echo $result ['PurchaseDate'] == '1957' ? print 'selected="selected"' : ''; ?>>1957</option>
                        <option value="1956" <?php echo $result ['PurchaseDate'] == '1956' ? print 'selected="selected"' : ''; ?>>1956</option>
                        
                        <option value="1955" <?php echo $result ['PurchaseDate'] == '1955' ? print 'selected="selected"' : ''; ?>>1955</option>
                        <option value="1954" <?php echo $result ['PurchaseDate'] == '1954' ? print 'selected="selected"' : ''; ?>>1954</option>
                        <option value="1953" <?php echo $result ['PurchaseDate'] == '1953' ? print 'selected="selected"' : ''; ?>>1953</option>
                        <option value="1952" <?php echo $result ['PurchaseDate'] == '1952' ? print 'selected="selected"' : ''; ?>>1952</option>
                        <option value="1951" <?php echo $result ['PurchaseDate'] == '1951' ? print 'selected="selected"' : ''; ?>>1951</option>
                        <option value="1950" <?php echo $result ['PurchaseDate'] == '1950' ? print 'selected="selected"' : ''; ?>>1950</option>
                        <option value="1949" <?php echo $result ['PurchaseDate'] == '1949' ? print 'selected="selected"' : ''; ?>>1949</option>
                        <option value="1948" <?php echo $result ['PurchaseDate'] == '1948' ? print 'selected="selected"' : ''; ?>>1948</option>
                        <option value="1947" <?php echo $result ['PurchaseDate'] == '1947' ? print 'selected="selected"' : ''; ?>>1947</option>
                        
                        <option value="1946" <?php echo $result ['PurchaseDate'] == '1946' ? print 'selected="selected"' : ''; ?>>1946</option>
                        <option value="1945" <?php echo $result ['PurchaseDate'] == '1945' ? print 'selected="selected"' : ''; ?>>1945</option>
                        <option value="1944" <?php echo $result ['PurchaseDate'] == '1944' ? print 'selected="selected"' : ''; ?>>1944</option>
                        <option value="1943" <?php echo $result ['PurchaseDate'] == '1943' ? print 'selected="selected"' : ''; ?>>1943</option>
                        <option value="1942" <?php echo $result ['PurchaseDate'] == '1942' ? print 'selected="selected"' : ''; ?>>1942</option>
                        <option value="1941" <?php echo $result ['PurchaseDate'] == '1941' ? print 'selected="selected"' : ''; ?>>1941</option>
                        <option value="1940" <?php echo $result ['PurchaseDate'] == '1940' ? print 'selected="selected"' : ''; ?>>1940</option>
                        </select>
                        
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['paid']) ? $_SESSION['model']['errormsg']['paid'] : '';?>
                        </div>
                        <p><span>Price Paid:</span></p><input type="text" name="paid" value="<?php echo $result ['Paid'];?>"/>
                        </div>
                        
                        <div class="form-column-right">
                        <div class="glspacer"></div>
                        <div class="error_message" style="float: right; margin-right: 25px;">
                        	<?php print isset($_SESSION['model']['errormsg']['askingprice']) ? $_SESSION['model']['errormsg']['askingprice'] : '';?>
                        </div>
                        <p><span>* Asking Paid:</span></p><input type="text" name="askingprice" value="<?php echo $result ['AskingPrice'];?>"/>
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
                        <option value="O" <?php echo $result ['Labelsize'] == 'O' ? print 'selected="selected"' : ''; ?>>Size 0</option>
                        <option value="2" <?php echo $result ['Labelsize'] == '2' ? print 'selected="selected"' : ''; ?>>Size 2</option>
                        <option value="4" <?php echo $result ['Labelsize'] == '4' ? print 'selected="selected"' : ''; ?>>Size 4</option>
                        <option value="6" <?php echo $result ['Labelsize'] == '6' ? print 'selected="selected"' : ''; ?>>Size 6</option>
                        <option value="8" <?php echo $result ['Labelsize'] == '8' ? print 'selected="selected"' : ''; ?>>Size 8</option>
                        <option value="10" <?php echo $result ['Labelsize'] == '10' ? print 'selected="selected"' : ''; ?>>Size 10</option>
                        
                        <option value="12" <?php echo $result ['Labelsize'] == '12' ? print 'selected="selected"' : ''; ?>>Size 12</option>
                        <option value="14" <?php echo $result ['Labelsize'] == '14' ? print 'selected="selected"' : ''; ?>>Size 14</option>
                        <option value="16" <?php echo $result ['Labelsize'] == '16' ? print 'selected="selected"' : ''; ?>>Size 16</option>
                        <option value="18" <?php echo $result ['Labelsize'] == '18' ? print 'selected="selected"' : ''; ?>>Size 18</option>
                        <option value="20" <?php echo $result ['Labelsize'] == '20' ? print 'selected="selected"' : ''; ?>>Size 20</option>
                        <option value="22" <?php echo $result ['Labelsize'] == '22' ? print 'selected="selected"' : ''; ?>>Size 22</option>
                        <option value="24" <?php echo $result ['Labelsize'] == '24' ? print 'selected="selected"' : ''; ?>>Size 24</option>
                        <option value="26" <?php echo $result ['Labelsize'] == '26' ? print 'selected="selected"' : ''; ?>>Size 26</option>
                        </select>
                        
                        <div class="error_message" style="float: right; margin-right: 10px;">
                        	<?php print isset($_SESSION['model']['errormsg']['streetsize']) ? $_SESSION['model']['errormsg']['streetsize'] : '';?>
                        </div>
                        <p><span>* Street Size:</span></p><select name="streetsize" style="width: 100px;">
                        
                        <option value=""></option>
                        <option value="O" <?php echo $result ['StreetSize'] == 'O' ? print 'selected="selected"' : ''; ?>>Size 0</option>
                        <option value="2" <?php echo $result ['StreetSize'] == '2' ? print 'selected="selected"' : ''; ?>>Size 2</option>
                        <option value="4" <?php echo $result ['StreetSize'] == '4' ? print 'selected="selected"' : ''; ?>>Size 4</option>
                        <option value="6" <?php echo $result ['StreetSize'] == '6' ? print 'selected="selected"' : ''; ?>>Size 6</option>
                        
                        <option value="8" <?php echo $result ['StreetSize'] == '8' ? print 'selected="selected"' : ''; ?>>Size 8</option>
                        <option value="10" <?php echo $result ['StreetSize'] == '10' ? print 'selected="selected"' : ''; ?>>Size 10</option>
                        <option value="12" <?php echo $result ['StreetSize'] == '12' ? print 'selected="selected"' : ''; ?>>Size 12</option>
                        <option value="14" <?php echo $result ['StreetSize'] == '14' ? print 'selected="selected"' : ''; ?>>Size 14</option>
                        <option value="16" <?php echo $result ['StreetSize'] == '16' ? print 'selected="selected"' : ''; ?>>Size 16</option>
                        <option value="18" <?php echo $result ['StreetSize'] == '18' ? print 'selected="selected"' : ''; ?>>Size 18</option>
                        <option value="20" <?php echo $result ['StreetSize'] == '20' ? print 'selected="selected"' : ''; ?>>Size 20</option>
                        <option value="22" <?php echo $result ['StreetSize'] == '22' ? print 'selected="selected"' : ''; ?>>Size 22</option>
                        <option value="24" <?php echo $result ['StreetSize'] == '24' ? print 'selected="selected"' : ''; ?>>Size 24</option>
                        <option value="26" <?php echo $result ['StreetSize'] == '26' ? print 'selected="selected"' : ''; ?>>Size 26</option>
                        </select>
                        </div>
                        <div class="vspacing"></div>
                        
                        
                        <div class="form-column-left-1">
           				<p><span>Bust Size:</span></p><select name="bustsize" style="width: 100px;">
                        <option value=""></option>
                        <option value="32" <?php echo $result ['BustSize'] == '32' ? print 'selected="selected"' : ''; ?>>32</option>
                        <option value="32.5" <?php echo $result ['BustSize'] == '32.5' ? print 'selected="selected"' : ''; ?>>32.5</option>
                        <option value="33" <?php echo $result ['BustSize'] == '33' ? print 'selected="selected"' : ''; ?>>33</option>
                        <option value="33.5" <?php echo $result ['BustSize'] == '33.5' ? print 'selected="selected"' : ''; ?>>33.5</option>
                        <option value="34" <?php echo $result ['BustSize'] == '34' ? print 'selected="selected"' : ''; ?>>34</option>
                        <option value="34.5" <?php echo $result ['BustSize'] == '34.5' ? print 'selected="selected"' : ''; ?>>34.5</option>
                        <option value="35" <?php echo $result ['BustSize'] == '35' ? print 'selected="selected"' : ''; ?>>35</option>
                        
                        <option value="35.5" <?php echo $result ['BustSize'] == '35.5' ? print 'selected="selected"' : ''; ?>>35.5</option>
                        <option value="36" <?php echo $result ['BustSize'] == '36' ? print 'selected="selected"' : ''; ?>>36</option>
                        <option value="36.5" <?php echo $result ['BustSize'] == '36.5' ? print 'selected="selected"' : ''; ?>>36.5</option>
                        <option value="37" <?php echo $result ['BustSize'] == '37' ? print 'selected="selected"' : ''; ?>>37</option>
                        <option value="37.5" <?php echo $result ['BustSize'] == '37.5' ? print 'selected="selected"' : ''; ?>>37.5</option>
                        <option value="38" <?php echo $result ['BustSize'] == '38' ? print 'selected="selected"' : ''; ?>>38</option>
                        <option value="38.5" <?php echo $result ['BustSize'] == '38.5' ? print 'selected="selected"' : ''; ?>>38.5</option>
                        <option value="39" <?php echo $result ['BustSize'] == '39' ? print 'selected="selected"' : ''; ?>>39</option>
                        <option value="39.5" <?php echo $result ['BustSize'] == '39.5' ? print 'selected="selected"' : ''; ?>>39.5</option>
                        
                        <option value="40" <?php echo $result ['BustSize'] == '40' ? print 'selected="selected"' : ''; ?>>40</option>
                        <option value="40.5" <?php echo $result ['BustSize'] == '40.5' ? print 'selected="selected"' : ''; ?>>40.5</option>
                        <option value="41" <?php echo $result ['BustSize'] == '41' ? print 'selected="selected"' : ''; ?>>41</option>
                        <option value="41.5" <?php echo $result ['BustSize'] == '41.5' ? print 'selected="selected"' : ''; ?>>41.5</option>
                        <option value="42" <?php echo $result ['BustSize'] == '42' ? print 'selected="selected"' : ''; ?>>42</option>
                        <option value="42.5" <?php echo $result ['BustSize'] == '42.5' ? print 'selected="selected"' : ''; ?>>42.5</option>
                        <option value="43" <?php echo $result ['BustSize'] == '43' ? print 'selected="selected"' : ''; ?>>43</option>
                        <option value="43.5" <?php echo $result ['BustSize'] == '43.5' ? print 'selected="selected"' : ''; ?>>43.5</option>
                        <option value="44" <?php echo $result ['BustSize'] == '44' ? print 'selected="selected"' : ''; ?>>44</option>
                        
                        <option value="44.5" <?php echo $result ['BustSize'] == '44.5' ? print 'selected="selected"' : ''; ?>>44.5</option>
                        <option value="45" <?php echo $result ['BustSize'] == '45' ? print 'selected="selected"' : ''; ?>>45</option>
                        <option value="45.5" <?php echo $result ['BustSize'] == '45.5' ? print 'selected="selected"' : ''; ?>>45.5</option>
                        <option value="46" <?php echo $result ['BustSize'] == '46' ? print 'selected="selected"' : ''; ?>>46</option>
                        <option value="46.5" <?php echo $result ['BustSize'] == '46.5' ? print 'selected="selected"' : ''; ?>>46.5</option>
                        <option value="47" <?php echo $result ['BustSize'] == '47' ? print 'selected="selected"' : ''; ?>>47</option>
                        <option value="47.5" <?php echo $result ['BustSize'] == '47.5' ? print 'selected="selected"' : ''; ?>>47.5</option>
                        <option value="48" <?php echo $result ['BustSize'] == '48' ? print 'selected="selected"' : ''; ?>>48</option>
                        <option value="48.5" <?php echo $result ['BustSize'] == '48.5' ? print 'selected="selected"' : ''; ?>>48.5</option>
                        
                        <option value="49" <?php echo $result ['BustSize'] == '49' ? print 'selected="selected"' : ''; ?>>49</option>
                        <option value="49.5" <?php echo $result ['BustSize'] == '49.5' ? print 'selected="selected"' : ''; ?>>49.5</option>
                        <option value="50" <?php echo $result ['BustSize'] == '50' ? print 'selected="selected"' : ''; ?>>50</option>
                        <option value="50.5" <?php echo $result ['BustSize'] == '50.5' ? print 'selected="selected"' : ''; ?>>50.5</option>
                        </select>
                        
                        <p><span>Waist Size:</span></p><select name="waistsize" style="width: 100px;">
                        <option value=""></option>
                        <option value="22" <?php echo $result ['WaistSize'] == '22' ? print 'selected="selected"' : ''; ?>>22</option>
                        <option value="22.5" <?php echo $result ['WaistSize'] == '22.5' ? print 'selected="selected"' : ''; ?>>22.5</option>
                        <option value="23" <?php echo $result ['WaistSize'] == '23' ? print 'selected="selected"' : ''; ?>>23</option>
                        <option value="23.5" <?php echo $result ['WaistSize'] == '23.5' ? print 'selected="selected"' : ''; ?>>23.5</option>
                        <option value="24" <?php echo $result ['WaistSize'] == '24' ? print 'selected="selected"' : ''; ?>>24</option>
                        
                        <option value="24.5" <?php echo $result ['WaistSize'] == '24.5' ? print 'selected="selected"' : ''; ?>>24.5</option>
                        <option value="25" <?php echo $result ['WaistSize'] == '25' ? print 'selected="selected"' : ''; ?>>25</option>
                        <option value="25.5" <?php echo $result ['WaistSize'] == '25.5' ? print 'selected="selected"' : ''; ?>>25.5</option>
                        <option value="26" <?php echo $result ['WaistSize'] == '26' ? print 'selected="selected"' : ''; ?>>26</option>
                        <option value="26.5" <?php echo $result ['WaistSize'] == '26.5' ? print 'selected="selected"' : ''; ?>>26.5</option>
                        <option value="27" <?php echo $result ['WaistSize'] == '27' ? print 'selected="selected"' : ''; ?>>27</option>
                        <option value="27.5" <?php echo $result ['WaistSize'] == '27.5' ? print 'selected="selected"' : ''; ?>>27.5</option>
                        <option value="28" <?php echo $result ['WaistSize'] == '28' ? print 'selected="selected"' : ''; ?>>28</option>
                        <option value="28.5" <?php echo $result ['WaistSize'] == '28.5' ? print 'selected="selected"' : ''; ?>>28.5</option>
                        
                        <option value="29" <?php echo $result ['WaistSize'] == '29' ? print 'selected="selected"' : ''; ?>>29</option>
                        <option value="29.5" <?php echo $result ['WaistSize'] == '29.5' ? print 'selected="selected"' : ''; ?>>29.5</option>
                        <option value="30" <?php echo $result ['WaistSize'] == '30' ? print 'selected="selected"' : ''; ?>>30</option>
                        <option value="30.5" <?php echo $result ['WaistSize'] == '30.5' ? print 'selected="selected"' : ''; ?>>30.5</option>
                        <option value="31" <?php echo $result ['WaistSize'] == '31' ? print 'selected="selected"' : ''; ?>>31</option>
                        <option value="31.5" <?php echo $result ['WaistSize'] == '31.5' ? print 'selected="selected"' : ''; ?>>31.5</option>
                        <option value="32" <?php echo $result ['WaistSize'] == '32' ? print 'selected="selected"' : ''; ?>>32</option>
                        <option value="32.5" <?php echo $result ['WaistSize'] == '32.5' ? print 'selected="selected"' : ''; ?>>32.5</option>
                        <option value="33" <?php echo $result ['WaistSize'] == '33' ? print 'selected="selected"' : ''; ?>>33</option>
                        
                        <option value="33.5" <?php echo $result ['WaistSize'] == '33.5' ? print 'selected="selected"' : ''; ?>>33.5</option>
                        <option value="34" <?php echo $result ['WaistSize'] == '34' ? print 'selected="selected"' : ''; ?>>34</option>
                        <option value="34.5" <?php echo $result ['WaistSize'] == '34.5' ? print 'selected="selected"' : ''; ?>>34.5</option>
                        <option value="35" <?php echo $result ['WaistSize'] == '35' ? print 'selected="selected"' : ''; ?>>35</option>
                        <option value="35.5" <?php echo $result ['WaistSize'] == '35.5' ? print 'selected="selected"' : ''; ?>>35.5</option>
                        <option value="36" <?php echo $result ['WaistSize'] == '36' ? print 'selected="selected"' : ''; ?>>36</option>
                        <option value="36.5" <?php echo $result ['WaistSize'] == '36.5' ? print 'selected="selected"' : ''; ?>>36.5</option>
                        <option value="37" <?php echo $result ['WaistSize'] == '37' ? print 'selected="selected"' : ''; ?>>37</option>
                        <option value="37.5" <?php echo $result ['WaistSize'] == '37.5' ? print 'selected="selected"' : ''; ?>>37.5</option>
                        
                        <option value="38" <?php echo $result ['WaistSize'] == '38' ? print 'selected="selected"' : ''; ?>>38</option>
                        <option value="38.5" <?php echo $result ['WaistSize'] == '38.5' ? print 'selected="selected"' : ''; ?>>38.5</option>
                        <option value="39" <?php echo $result ['WaistSize'] == '39' ? print 'selected="selected"' : ''; ?>>39</option>
                        <option value="39.5" <?php echo $result ['WaistSize'] == '39.5' ? print 'selected="selected"' : ''; ?>>39.5</option>
                        <option value="40" <?php echo $result ['WaistSize'] == '40' ? print 'selected="selected"' : ''; ?>>40</option>
                        <option value="40.5" <?php echo $result ['WaistSize'] == '40.5' ? print 'selected="selected"' : ''; ?>>40.5</option>
                        </select>
                        </div>
                        <div class="vspacing"></div>
                        
                        
                        <div class="form-column-left-1">
           				<p><span>Hip Size:</span></p><select name="hipsize" style="width: 100px;">
                        <option value=""></option>
                        <option value="32" <?php echo $result ['HipSize'] == '32' ? print 'selected="selected"' : ''; ?>>32</option>
                        <option value="32.5" <?php echo $result ['HipSize'] == '32.5' ? print 'selected="selected"' : ''; ?>>32.5</option>
                        <option value="33" <?php echo $result ['HipSize'] == '33' ? print 'selected="selected"' : ''; ?>>33</option>
                        <option value="33.5" <?php echo $result ['HipSize'] == '33.5' ? print 'selected="selected"' : ''; ?>>33.5</option>
                        <option value="34" <?php echo $result ['HipSize'] == '34' ? print 'selected="selected"' : ''; ?>>34</option>
                        <option value="34.5" <?php echo $result ['HipSize'] == '34.5' ? print 'selected="selected"' : ''; ?>>34.5</option>
                        <option value="35" <?php echo $result ['HipSize'] == '35' ? print 'selected="selected"' : ''; ?>>35</option>
                        
                        <option value="35.5" <?php echo $result ['HipSize'] == '35.5' ? print 'selected="selected"' : ''; ?>>35.5</option>
                        <option value="36" <?php echo $result ['HipSize'] == '36' ? print 'selected="selected"' : ''; ?>>36</option>
                        <option value="36.5" <?php echo $result ['HipSize'] == '36.5' ? print 'selected="selected"' : ''; ?>>36.5</option>
                        <option value="37" <?php echo $result ['HipSize'] == '37' ? print 'selected="selected"' : ''; ?>>37</option>
                        <option value="37.5" <?php echo $result ['HipSize'] == '37.5' ? print 'selected="selected"' : ''; ?>>37.5</option>
                        <option value="38" <?php echo $result ['HipSize'] == '38' ? print 'selected="selected"' : ''; ?>>38</option>
                        <option value="38.5" <?php echo $result ['HipSize'] == '38.5' ? print 'selected="selected"' : ''; ?>>38.5</option>
                        <option value="39" <?php echo $result ['HipSize'] == '39' ? print 'selected="selected"' : ''; ?>>39</option>
                        <option value="39.5" <?php echo $result ['HipSize'] == '39.5' ? print 'selected="selected"' : ''; ?>>39.5</option>
                        
                        <option value="40" <?php echo $result ['HipSize'] == '40' ? print 'selected="selected"' : ''; ?>>40</option>
                        <option value="40.5" <?php echo $result ['HipSize'] == '40.5' ? print 'selected="selected"' : ''; ?>>40.5</option>
                        <option value="41" <?php echo $result ['HipSize'] == '41' ? print 'selected="selected"' : ''; ?>>41</option>
                        <option value="41.5" <?php echo $result ['HipSize'] == '41.5' ? print 'selected="selected"' : ''; ?>>41.5</option>
                        <option value="42" <?php echo $result ['HipSize'] == '42' ? print 'selected="selected"' : ''; ?>>42</option>
                        <option value="42.5" <?php echo $result ['HipSize'] == '42.5' ? print 'selected="selected"' : ''; ?>>42.5</option>
                        <option value="43" <?php echo $result ['HipSize'] == '43' ? print 'selected="selected"' : ''; ?>>43</option>
                        <option value="43.5" <?php echo $result ['HipSize'] == '43.5' ? print 'selected="selected"' : ''; ?>>43.5</option>
                        <option value="44" <?php echo $result ['HipSize'] == '44' ? print 'selected="selected"' : ''; ?>>44</option>
                        
                        <option value="44.5" <?php echo $result ['HipSize'] == '44.5' ? print 'selected="selected"' : ''; ?>>44.5</option>
                        <option value="45" <?php echo $result ['HipSize'] == '45' ? print 'selected="selected"' : ''; ?>>45</option>
                        <option value="45.5" <?php echo $result ['HipSize'] == '45.5' ? print 'selected="selected"' : ''; ?>>45.5</option>
                        <option value="46" <?php echo $result ['HipSize'] == '46' ? print 'selected="selected"' : ''; ?>>46</option>
                        <option value="46.5" <?php echo $result ['HipSize'] == '46.5' ? print 'selected="selected"' : ''; ?>>46.5</option>
                        <option value="47" <?php echo $result ['HipSize'] == '47' ? print 'selected="selected"' : ''; ?>>47</option>
                        <option value="47.5" <?php echo $result ['HipSize'] == '47.5' ? print 'selected="selected"' : ''; ?>>47.5</option>
                        <option value="48" <?php echo $result ['HipSize'] == '48' ? print 'selected="selected"' : ''; ?>>48</option>
                        <option value="48.5" <?php echo $result ['HipSize'] == '48.5' ? print 'selected="selected"' : ''; ?>>48.5</option>
                        
                        <option value="49" <?php echo $result ['HipSize'] == '49' ? print 'selected="selected"' : ''; ?>>49</option>
                        <option value="49.5" <?php echo $result ['HipSize'] == '49.5' ? print 'selected="selected"' : ''; ?>>49.5</option>
                        <option value="50" <?php echo $result ['HipSize'] == '50' ? print 'selected="selected"' : ''; ?>>50</option>
                        <option value="50.5" <?php echo $result ['HipSize'] == '50.5' ? print 'selected="selected"' : ''; ?>>50.5</option>
                        
                        </select>
                        
                        <p><span>Height with Shoes:</span></p><select name="heightwshoes" style="width: 100px;">
                        <option value=""></option>

                        <option value="49" <?php echo $result ['HeightwShoes'] == '49' ? print 'selected="selected"' : ''; ?>>4&#039;1&quot;</option>
                        <option value="50" <?php echo $result ['HeightwShoes'] == '50' ? print 'selected="selected"' : ''; ?>>4&#039;2&quot;</option>
                        <option value="51" <?php echo $result ['HeightwShoes'] == '51' ? print 'selected="selected"' : ''; ?>>4&#039;3&quot;</option>
                        <option value="52" <?php echo $result ['HeightwShoes'] == '52' ? print 'selected="selected"' : ''; ?>>4&#039;4&quot;</option>
                        <option value="53" <?php echo $result ['HeightwShoes'] == '53' ? print 'selected="selected"' : ''; ?>>4&#039;5&quot;</option>
                        <option value="54" <?php echo $result ['HeightwShoes'] == '54' ? print 'selected="selected"' : ''; ?>>4&#039;6&quot;</option>
                        
                        <option value="55" <?php echo $result ['HeightwShoes'] == '55' ? print 'selected="selected"' : ''; ?>>4&#039;7&quot;</option>
                        <option value="56" <?php echo $result ['HeightwShoes'] == '56' ? print 'selected="selected"' : ''; ?>>4&#039;8&quot;</option>
                        <option value="57" <?php echo $result ['HeightwShoes'] == '57' ? print 'selected="selected"' : ''; ?>>4&#039;9&quot;</option>
                        <option value="58" <?php echo $result ['HeightwShoes'] == '58' ? print 'selected="selected"' : ''; ?>>4&#039;10&quot;</option>
                        <option value="59" <?php echo $result ['HeightwShoes'] == '59' ? print 'selected="selected"' : ''; ?>>4&#039;11&quot;</option>
                        <option value="60" <?php echo $result ['HeightwShoes'] == '60' ? print 'selected="selected"' : ''; ?>>5&#039;</option>
                        
                        <option value="61" <?php echo $result ['HeightwShoes'] == '61' ? print 'selected="selected"' : ''; ?>>5&#039;1&quot;</option>
                        <option value="62" <?php echo $result ['HeightwShoes'] == '62' ? print 'selected="selected"' : ''; ?>>5&#039;2&quot;</option>
                        <option value="63" <?php echo $result ['HeightwShoes'] == '63' ? print 'selected="selected"' : ''; ?>>5&#039;3&quot;</option>
                        <option value="64" <?php echo $result ['HeightwShoes'] == '64' ? print 'selected="selected"' : ''; ?>>5&#039;4&quot;</option>
                        <option value="65" <?php echo $result ['HeightwShoes'] == '65' ? print 'selected="selected"' : ''; ?>>5&#039;5&quot;</option>
                        <option value="66" <?php echo $result ['HeightwShoes'] == '66' ? print 'selected="selected"' : ''; ?>>5&#039;6&quot;</option>
                        
                        <option value="67" <?php echo $result ['HeightwShoes'] == '67' ? print 'selected="selected"' : ''; ?>>5&#039;7&quot;</option>
                        <option value="68" <?php echo $result ['HeightwShoes'] == '68' ? print 'selected="selected"' : ''; ?>>5&#039;8&quot;</option>
                        <option value="69" <?php echo $result ['HeightwShoes'] == '69' ? print 'selected="selected"' : ''; ?>>5&#039;9&quot;</option>
                        <option value="70" <?php echo $result ['HeightwShoes'] == '70' ? print 'selected="selected"' : ''; ?>>5&#039;10&quot;</option>
                        <option value="71" <?php echo $result ['HeightwShoes'] == '71' ? print 'selected="selected"' : ''; ?>>5&#039;11&quot;</option>
                        <option value="72" <?php echo $result ['HeightwShoes'] == '72' ? print 'selected="selected"' : ''; ?>>6&#039;</option>
                        
                        <option value="73" <?php echo $result ['HeightwShoes'] == '73' ? print 'selected="selected"' : ''; ?>>6&#039;1&quot;</option>
                        <option value="74" <?php echo $result ['HeightwShoes'] == '74' ? print 'selected="selected"' : ''; ?>>6&#039;2&quot;</option>
                        <option value="75" <?php echo $result ['HeightwShoes'] == '75' ? print 'selected="selected"' : ''; ?>>6&#039;3&quot;</option>
                        <option value="76" <?php echo $result ['HeightwShoes'] == '76' ? print 'selected="selected"' : ''; ?>>6&#039;4&quot;</option>
                        <option value="77" <?php echo $result ['HeightwShoes'] == '77' ? print 'selected="selected"' : ''; ?>>6&#039;5&quot;</option>
                        <option value="78" <?php echo $result ['HeightwShoes'] == '78' ? print 'selected="selected"' : ''; ?>>6&#039;6&quot;</option>
                        
                        <option value="79" <?php echo $result ['HeightwShoes'] == '79' ? print 'selected="selected"' : ''; ?>>6&#039;7&quot;</option>
                        <option value="80" <?php echo $result ['HeightwShoes'] == '80' ? print 'selected="selected"' : ''; ?>>6&#039;8&quot;</option>
                        <option value="81" <?php echo $result ['HeightwShoes'] == '81' ? print 'selected="selected"' : ''; ?>>6&#039;9&quot;</option>
                        <option value="82" <?php echo $result ['HeightwShoes'] == '82' ? print 'selected="selected"' : ''; ?>>6&#039;10&quot;</option>
                        <option value="83" <?php echo $result ['HeightwShoes'] == '83' ? print 'selected="selected"' : ''; ?>>6&#039;11&quot;</option>
                        <option value="84" <?php echo $result ['HeightwShoes'] == '84' ? print 'selected="selected"' : ''; ?>>7&#039;</option>
                        
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
						
                        <?php 
                        $file = $_SERVER['DOCUMENT_ROOT'] . "/assets/listtxt/".$result['GownDescr']; //Path to your *.txt file
                        $contents = file($file);
                        $gd = implode($contents);
						?>
                        <p><span>File Name:</span></p><?php echo $result ['GownDescr'];?>
                        <input type="hidden" name="gdname" value="<?php echo $result ['GownDescr'];?>" />
                        <p><span>Gown Description:</span></p><textarea id="gowndescr" name="gowndescr" class="text_area_input" rows="6" cols="30"><?php echo $gd;?></textarea><br /><br />
                        
                        <div id="barbox1">
                          <div class="progressbar1"></div>
                        </div>
                        <div class="count1">1200</div>
                        <br />
                        
                        <?php 
                        $file1 = $_SERVER['DOCUMENT_ROOT'] . "/assets/listtxt/".$result['AltDescr']; //Path to your *.txt file
                        $contents = file($file1);
                        $ad = implode($contents);
						?>
                        <p><span>File Name:</span></p><?php echo $result ['AltDescr'];?>
                        <input type="hidden" name="adname" value="<?php echo $result ['AltDescr'];?>" />
                        <p><span>Alterations Description:</span></p><textarea id="altdescr" class="text_area_input1" name="altdescr" rows="6" cols="30"><?php echo $ad;?></textarea><br /><br />
                        
                        <div id="barbox2">
                          <div class="progressbar2"></div>
                        </div>
                        <div class="count2">1200</div>
                        <br />
                        
                        <?php 
                        $file2 = $_SERVER['DOCUMENT_ROOT'] . "/assets/listtxt/".$result['VeilDescr']; //Path to your *.txt file
                        $contents = file($file2);
                        $vd = implode($contents);
						?>
                        <p><span>File Name:</span></p><?php echo $result ['VeilDescr'];?>
                        <input type="hidden" name="vdname" value="<?php echo $result ['VeilDescr'];?>" />
                        <p><span>Veil/Headpiece Description:</span></p><textarea id="veildescr" class="text_area_input2" name="veildescr" rows="6" cols="30"><?php echo $vd;?></textarea><br /><br />
                        
                        <div id="barbox3">
                          <div class="progressbar3"></div>
                        </div>
                        <div class="count3">1200</div>
                        <br />
                        
                        <?php 
                        $file3 = $_SERVER['DOCUMENT_ROOT'] . "/assets/listtxt/".$result['PresMethod']; //Path to your *.txt file
                        $contents = file($file3);
                        $pm = implode($contents);
						?>
                        <p><span>File Name:</span></p><?php echo $result ['PresMethod'];?>
                        <input type="hidden" name="pmname" value="<?php echo $result ['PresMethod'];?>" />
                        <p><span>Preservation Method:</span></p><textarea id="presmethod" class="text_area_input3" name="presmethod" rows="6" cols="30"><?php echo $pm;?></textarea><br /><br />


            <p><span>Photos</span></p><br /><br />
                        <p><span>Image 1:(main)</span></p><?php echo $result ['Image1'];?><br />
                        <a href="/assets/scripts/delete-image.php?id=<?php echo $result ['Image1'];?>&gl=<?php echo $result ['ID'];?>">delete</a><br /><br />
                        
                        <p><span>Image 2:</span></p><?php echo $result ['Image2'];?><br />
                        <a href="/assets/scripts/delete-image.php?id=<?php echo $result ['Image2'];?>&gl=<?php echo $result ['ID'];?>">delete</a><br /><br />
                        
                        <p><span>Image 3:</span></p><?php echo $result ['Image3'];?><br />
                        <a href="/assets/scripts/delete-image.php?id=<?php echo $result ['Image3'];?>&gl=<?php echo $result ['ID'];?>">delete</a><br /><br />
                        
                        <p><span>Image 4:</span></p><?php echo $result ['Image4'];?><br />
                        <a href="/assets/scripts/delete-image.php?id=<?php echo $result ['Image4'];?>&gl=<?php echo $result ['ID'];?>">delete</a><br /><br />
                        
                        <p><span>Image 5:</span></p><?php echo $result ['Image5'];?><br />
                        <a href="/assets/scripts/delete-image.php?id=<?php echo $result ['Image5'];?>&gl=<?php echo $result ['ID'];?>">delete</a><br /><br />
                <!--<div id="add-image">
                	<a id="add_img" href="">Add Another Image</a>
                </div>-->
                <br />
                <div class="clear"></div>
                <br />
                <br />

                        
                        <p><span style="width: 894px;">Your pictures will really help buyers see the beauty of your dress. Ideal images include pictures of the front, back and detail of your gown on a person or mannequin. Your listing includes 5 images.</span></p><br />
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
                        <option value="Individual (Gown purchased for personal use)" <?php echo $result ['TypeofSeller'] == 'Individual (Gown purchased for personal use)' ? print 'selected="selected"' : ''; ?>>Individual (Gown purchased for personal use)</option>
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
                        <select name="shippingcosts">
                        <option value=""></option> 
                        <option value="To Be Paid By Seller" <?php echo $result ['ShippingCosts'] == 'To Be Paid By Seller' ? print 'selected="selected"' : ''; ?>>To Be Paid By Seller</option>
                        <option value="To Be Paid By Buyer" <?php echo $result ['ShippingCosts'] == 'To Be Paid By Buyer' ? print 'selected="selected"' : ''; ?>>To Be Paid By Buyer</option>
                        <option value="To Be Negotiated" <?php echo $result ['ShippingCosts'] == 'To Be Negotiated' ? print 'selected="selected"' : ''; ?>>To Be Negotiated</option>
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
                    <input type="hidden" name="gownlistingid" value="<?php echo $result ['ID'];?>"/><br />
                    <a href="/admin/home" style="margin: 0 0 0 550px;"><img src="../images/cancel.png" style="border: none; width: 96px; height: 34px;" alt="cancel gown listing"/></a>
                    <a href="/assets/scripts/delete-gown.php?id=<?php echo $result ['ID'];?>&img1=<?php echo $result ['Image1'];?>&img2=<?php echo $result ['Image2'];?>&img3=<?php echo $result ['Image3'];?>&img4=<?php echo $result ['Image4'];?>&img5=<?php echo $result ['Image5'];?>&gd=<?php echo $result ['GownDescr'];?>&ad=<?php echo $result ['AltDescr'];?>&vd=<?php echo $result ['VeilDescr'];?>&pm=<?php echo $result ['PresMethod'];?>" style="margin: 0 0 0 22px;"><img src="../images/delete.png" style="border: none; width: 96px; height: 34px;" alt="delete gown listing"/></a>
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