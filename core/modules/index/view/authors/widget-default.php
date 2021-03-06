<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newauthor" class="btn btn-default"><i class='fa fa-th-list'></i> <?php echo L::buttons_new_author; ?></a>
</div>
		<h2><?php echo L::titles_authors; ?></h2>
<br>
		<?php

		$users = AuthorData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table id="datatable" class="table  table-hover">
			<thead><tr>
<th><?php echo L::fields_name; ?></th>
			<th id="ops"><?php echo L::fields_operations; ?></tr></th>
</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td style="width:130px;"><a href="index.php?view=editauthor&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs"><?php echo L::buttons_edit; ?><span class="sr-only"><?php echo ' ' . L::fields_author . ' ' . $user->name." ".$user->lastname; ?></span></a> <a href="index.php?action=delauthor&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs"><?php echo L::buttons_delete; ?><span class="sr-only"><?php echo ' ' . L::fields_author . ' ' . $user->name." ".$user->lastname; ?></span></a></td>
				</tr>
				<?php

			}
?>
</table>
<?php
		}else{
			echo "<p class='alert alert-danger'>" . L::messages_no_authors . "</p>";
		}


		?>


	</div>
</div>
