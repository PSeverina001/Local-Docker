<?php

session_start();

if(isset($_SESSION['USER'])):?>
<main>
	<table>
		<tr>
			<?php foreach ($_SESSION['USER'] as $key=>$value): ?>
				<th><?php echo "{$key} = {$value}"; ?></th>
			<?php endforeach;?>
		</tr>
	</table>

</main>
<?php endif;?>