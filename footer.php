<footer>
	<div class = "footer-content">
		<div class = "col">
			<a href="mailto:info@sailhousingsolutions.com">info@sailhousingsolutions.com</a>
			<?php
				get_template_part( "template-parts/footer/footer", "menu");
			;?>
		</div>
		<div class = "col">
			<div>1669 Maple Road</div>
			<div>Birmingham, MI 48009</div>
		</div>
		<div class = "col">
			<?php
				dynamic_sidebar( "footer-bar" )
			;?>
		</div>

	</div>
</footer>

</body>
</html>
