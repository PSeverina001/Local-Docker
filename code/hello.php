<?php
/**
 * @var array $advertisement
 * @var array $category
 */
?>
<main>
	<link rel="stylesheet" href="style.css">

	<div class="my_form">
		<form action="/" method="post">
			<input type="text" name="email" placeholder="email">
			<input type="text" name="title" placeholder="title">
			<input type="text" name="info" placeholder="info">
			<input type="text" name="description" placeholder="description">
			<select name="category">
				<option value="books">books</option>
				<option value="cars">cars</option>

			</select>
			<button type="submit">Добавить</button>
		</form>
	</div>
</main>

<main>
	<table style="border: 1px solid">
		<?php foreach ($advertisement as $advert): ?>
			<tr style="border: 1px solid">
				<?php foreach ($advert as $key=>$value): ?>
					<th style="border: 1px solid"><?=$value?></th>
				<?php endforeach;?>
			</tr>
		<?php endforeach;?>
	</table>
</main>


