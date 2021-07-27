<footer>
	<div class = "footer-content">
		<div class = "col">
			<a href="mailto:info@sailhousingsolutions.com">info@sailhousingsolutions.com</a>
		</div>
		<div class = "col">
			<div>c/o SAIL</div>
			<div>1669 W Maple Road</div>
			<div>Birmingham, MI 48009</div>
		</div>
		<div class = "col">
			<!--<?php
				dynamic_sidebar( "footer-bar" )
			;?>-->
			<?php
				get_template_part( "template-parts/footer/footer", "menu");
			;?>
		</div>

	</div>
</footer>

</body>
</html>
