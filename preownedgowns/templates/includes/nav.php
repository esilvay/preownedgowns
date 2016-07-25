<div id="navigation">
    <ul class="sf-menu">
        <li>
            <a title="Pre Owned Gowns" href="/" style="text-decoration:none;">Home</a>
        </li>
        
        <li>
            <a title="Preowned Gowns" href="/gowns" style="text-decoration:none;">Gowns</a>
        </li>
        
        <li>
            <a title="Wedding Accessories" href="/accessories" style="text-decoration:none;">Accessories</a>
        </li>
        
        <li>
            <a title="How POG Works" href="/howitworks" style="text-decoration:none;">How It Works</a>
        </li>
        
        <li class="last">
        
        <?php 
		if (isset($_SESSION['is_logged_in'])) {
			echo '<a href="/member" style="text-decoration: none;">My Account</a>';
		}
		elseif (isset($_SESSION['admin_logged_in'])) {
			echo '<a href="/admin/home" style="text-decoration: none;">My Account</a>';
		}
		else{
            echo '<a href="/register" style="text-decoration: none;">Sign Up</a>';
		}
		?>
            <!--<a href="/register" style="text-decoration:none;">Sign-Up</a>-->
        </li>
    </ul>
</div>