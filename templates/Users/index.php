<div class="container">
	<div class="content">
		<h1> User Home </h1>
		<h2>
			<?php
			echo "Hello " . $this->request->getSession()->read('Auth')->username;
			?>
		</h2>
	</div>
</div>