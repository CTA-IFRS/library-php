<?php
if (isset($_GET["id"])) {
	$item = ItemData::getById($_GET["id"]);
	$book = $item->getBook();
}
else
 	header("Location: index.php?view=books");
?>
<div class="row">
	<div class="col-md-12">
		<h2><i class='fa fa-clock-o'></i> <?php echo $item->code." - ".$book->title; ?> </h2>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="itemhistory">
<input type="hidden" name="id" value="<?php echo $item->id; ?>">
  <div class="form-group">
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><?php echo L::fields_start; ?></span>
		  <input type="date" name="start_at" required value="<?php if(isset($_GET["start_at"]) && $_GET["start_at"]!=""){ echo $_GET["start_at"]; } ?>" class="form-control" placeholder="<?php echo L::fields_start_date; ?>">
		</div>
    </div>
    <div class="col-lg-3">
		<div class="input-group">
		  <span class="input-group-addon"><?php echo L::fields_end; ?></span>
		  <input type="date" name="finish_at" required value="<?php if(isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){ echo $_GET["finish_at"]; } ?>" class="form-control" placeholder="<?php echo L::fields_finish_date; ?>">
		</div>
    </div>
    <div class="col-lg-6">
    <button class="btn btn-primary btn-block"><?php echo L::buttons_execute; ?></button>
    </div>

  </div>
</form>
<?php
$products = array();
if(isset($_GET["start_at"]) && $_GET["start_at"]!="" && isset($_GET["finish_at"]) && $_GET["finish_at"]!=""){
if($_GET["start_at"]<$_GET["finish_at"]){
$products = OperationData::getAllByItemIdAndRange($item->id,$_GET["start_at"],$_GET["finish_at"]);
}
}else{
$products = OperationData::getAllByItemId($item->id);

}
if(count($products)>0){
?>
<br>
 <table id="datatable" class="table  table-hover	">
	<thead>
		<th><?php echo L::fields_copie; ?></th>
		<th><?php echo L::fields_book; ?></th>
		<th><?php echo L::fields_client; ?></th>
		<th><?php echo L::fields_start; ?></th>
		<th><?php echo L::fields_end; ?></th>
		<th><?php echo L::fields_devolution; ?></th>
	</thead>
	<?php foreach($products as $sell):
$item = $sell->getItem();
$book = $item->getBook();
$client = $sell->getClient();
	?>
	<tr>
		<td style="width:30px;">
		<?php echo $item->code; ?>
		</td>
		<td>
		<?php echo $book->title; ?>
		</td>
		<td>
		<?php echo $client->name." ".$client->lastname; ?>
		</td>
		<td><?php echo $sell->start_at; ?></td>
		<td><?php echo $sell->finish_at; ?></td>
		<td><?php echo $sell->returned_at; ?></td>
	</tr>
<?php endforeach; ?>
</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<p class="alert alert-danger"><?php echo L::messages_no_loan; ?></p>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
