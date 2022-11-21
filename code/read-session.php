<?php

session_start();

if(isset($_SESSION['USER'])):?>
<main>
	<ul>
		<?php foreach ($_SESSION['USER'] as $key=>$value): ?>
		<li><?php echo "{$key} = {$value}"; ?></li>
		<?php endforeach;?>
	</ul>
</main>
<?php endif;?>