<?php 	foreach($notes as $note)
		{	?>
		<div class='note'>
			<h3><?= $note['title'] ?></h3>
			<form class='delete' role='form' action='/notes/destroy' method='post'>
				<input type='hidden' name='id' value="<?= $note['id'] ?>">
				<input type='submit' class='btn btn-default pull-right' value='delete'>
			</form>
			<form class='update' role='form' action='/notes/update' method='post'>
				<input type='hidden' name='id' value="<?= $note['id'] ?>">
				<textarea class='form-control' name='description' placeholder="Enter description here" rows='6'><?= $note['description'] ?></textarea>
			</form>
		</div>
<?php 	}	?>	