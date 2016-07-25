<div id="logo"></div>
<div style="width: 240px; height: 20px; float: right; margin-top: 2px;">
    
    <?php
		if (isset($_SESSION['is_logged_in'])) {
			echo '<a href="/member/out">Log Out</a>';
		}
		elseif (isset($_SESSION['admin_logged_in'])) {
			echo '<a href="/member/out">Log Out</a>';
		}
		else{
            echo '<a href="/login">Log In</a>';
		}
	?>
     | <a href="/contact">Contact Us</a><br /><br />
</div>
<script type="text/javascript">
	function clearValue(theField){
		if(theField.defaultValue == theField.value){
			theField.value = '';	
		}
	}
	function replaceValue(theField){
		if(theField.value == ''){
			theField.value = theField.defaultValue;	
		}
	}
</script>
    <div id="search">
        <form id="site-search" method="post" action="/assets/scripts/search.php">
            <input id="seach-box" type="text" name="q" value="Search Designer / Style / Listing ID" onfocus="clearValue(this);" onblur="replaceValue(this);"/>
            
            <input type="hidden" name="form_submitted" value="1"/>
            <input id="submit" type="submit" value=" " />
        </form>
    </div>