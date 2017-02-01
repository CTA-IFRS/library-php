
<?php if(isset($_GET["product"]) && $_GET["product"]!=""):?>
	<?php
$products = BookData::getLike($_GET["product"]);
if(count($products)>0){
	?>
<h2><?php echo L::titles_search_result; ?></h2>
<table id="datatable" class="table table-hover">
	<thead>
		<th><?php echo L::fields_isbn; ?></th>
		<th><?php echo L::fields_book; ?></th>
		<th><?php echo L::fields_quantity; ?></th>
	</thead>
	<?php
$products_in_cero=0;
	 foreach($products as $product):
	?>

	<tr>
		<td style="width:80px;"><?php echo $product->isbn; ?></td>
		<td><?php echo $product->title; ?></td>
		<td style="width:250px;">
			<form method="post" action="index.php?action=addtocart">
				<input type="hidden" name="book_id" value="<?php echo $product->id; ?>">
				<?php $items = ItemData::getAvaiableByBookId($product->id);?>
				<div class="input-group">
					<select class="form-control" name="item_id" required>
						<option value=""><?php echo L::fields_select_copy; ?></option>
						<?php foreach($items as $item):?>
						<option value="<?php echo $item->id; ?>"> <?php echo $item->code; ?></option>
						<?php endforeach; ?>
					</select>
				    <span class="input-group-btn">
						<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> <?php echo L::buttons_add; ?></button>
				    </span>
		    	</div>
			</form>
		</td>
	</tr>

	<?php endforeach;?>
</table>

	<?php
}else{
	echo "<br><p class='alert alert-danger'>" . L::messages_book_not_found . "</p>";
}
?>
<hr><br>
<?php else:
?>
<?php endif; ?>
