<?php
	include('/var/www/preownedgowns.com/assets/scripts/connect.php');
	
	$query = mysql_query ( "SELECT * FROM gowns ORDER BY ID DESC" );
	$row = mysql_fetch_assoc ( $query );

	echo '<?xml version="1.0" encoding="utf-8"?>' . "\n";
?>

<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
	
    <url>
		<loc>http://www.preownedgowns.com/</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>daily</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/gowns</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>daily</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/accessories</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>daily</changefreq>
	</url>
	<url>
		<loc>http://www.preownedgowns.com/howitworks</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/contact</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/privacypolicy</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/terms</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/sitemap</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/advertise</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/copyright</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/sizingguide</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/gowns101</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/gowncleaning</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/onlinetransactiontips</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/testimonials</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/faqs</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/sellwithpog</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/optimizelisting</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/managelisting</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/sellingsafety</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/buywithpog</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/searchgown</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    <url>
		<loc>http://www.preownedgowns.com/howitworks/contactseller</loc>
		<lastmod>2010-10-21</lastmod>
		<priority>0.5</priority>
		<changefreq>monthly</changefreq>
	</url>
    
<?php
	if($row >= 1){
	############# BEGIN LOOP ############
		do {
		
			$link = 'http://www.preownedgowns.com/gowns/look?Designer='.$row['Designer'].'&amp;id='.$row['ID'].'';
			$lastmod = ( $row['date_updated'] ) ? $row['date_updated'] : $row['ListingDate'];
			$priority = 0.5;
			$changefreq = 'daily';
		
	?>
			<url>
				<loc><?=$link?></loc>
				<lastmod><?=$lastmod?></lastmod>
				<priority><?=$priority?></priority>
				<changefreq><?=$changefreq?></changefreq>
			</url>
	<?php
		} while ( $row = mysql_fetch_assoc ( $query ) );
		############# END LOOP ############
	}else{
	}
	?>
<?php
	mysql_close($conn);
?>
</urlset>
