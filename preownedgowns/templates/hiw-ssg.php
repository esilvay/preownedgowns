<?PHP
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">

// perform JavaScript after the document is scriptable.
$(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	$("ul.tabs").tabs("div.panes > div");
});
</script>
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
                <div id="left-column-m">
                	<?php include("includes/hiw-bar.php"); ?>
                </div>
                <div id="right-column-m">
                    <div id="right-heading-msi">
                        <p>Street Sizing Guide</p>
                    </div>
                    <div id="main-frame-hiw">
						<p>There are two sizes that describe a gown. There is a label on the back of the dress, and then a street size. The street size is the size the person would try on in a store. </p><br />
                        
                        <p>Designer gowns all fit differently. The label on the back of the dress could run smaller or bigger. Make sure you pay close attention to the street size. We recommend searching and buying on the street size. We also recommend buying one or two sizes bigger so that it may be altered down.</p><br />
                       
                        
                        <table class="sizechart" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                <td>
                                <p>Size</p>
                                
                                </td>
                                <td>
                                <p>Bust</p>
                                </td>
                                <td>
                                <p>Waist</p>
                                </td>
                                <td>
                                <p>Hips</p>
                                </td>
                                </tr>
                                <tr>
                                <td class="odd">2</td>
                                
                                <td class="odd">33</td>
                                <td class="odd">24.5</td>
                                <td class="odd">35</td>
                                </tr>
                                <tr>
                                <td>4</td>
                                <td>34</td>
                                <td>25.5</td>
                                <td>36</td>
                                </tr>
                                
                                <tr>
                                <td class="odd">6</td>
                                <td class="odd">35</td>
                                <td class="odd">26.5</td>
                                <td class="odd">37</td>
                                </tr>
                                <tr>
                                <td>8</td>
                                <td>36</td>
                                <td>27.5</td>
                                
                                <td>38</td>
                                </tr>
                                <tr>
                                <td class="odd">10</td>
                                <td class="odd">37</td>
                                <td class="odd">28.5</td>
                                <td class="odd">39</td>
                                </tr>
                                <tr>
                                <td>12</td>
                                <td>38.5</td>
                                
                                <td>30</td>
                                <td>40.5</td>
                                </tr>
                                <tr>
                                <td class="odd">14</td>
                                <td class="odd">40</td>
                                <td class="odd">31.5</td>
                                <td class="odd">42</td>
                                </tr>
                                <tr>
                                <td>16</td>
                                
                                <td>41.5</td>
                                <td>33</td>
                                <td>43.5</td>
                                </tr>
                                <tr>
                                <td class="odd">18</td>
                                <td class="odd">43</td>
                                <td class="odd">34</td>
                                <td class="odd">45</td>
                                </tr>
                                
                                <tr>
                                <td>20</td>
                                <td>44.5</td>
                                <td>35.5</td>
                                <td>46.5</td>
                                </tr>
                                <tr>
                                <td class="odd">22</td>
                                <td class="odd">46</td>
                                <td class="odd">37</td>
                                
                                <td class="odd">48</td>
                                </tr>
                                <tr>
                                <td>24</td>
                                <td>47.5</td>
                                <td>39.5</td>
                                <td>49.5</td>
                                </tr>
                                <tr>
                                <td class="odd">26</td>
                                <td class="odd">48</td>
                                
                                <td class="odd">41</td>
                                <td class="odd">51</td>
                                </tr>
                                </tbody>
                                </table>		
                    </div>
                    <?php include("includes/seals.php"); ?>
                    <?php include("includes/ads.php"); ?>
                </div>
                	<div class="clear"></div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>