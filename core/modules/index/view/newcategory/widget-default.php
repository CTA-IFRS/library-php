<div class="row">
	<div class="col-md-12">
	<h1><?php echo L::titles_new_category; ?></h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="./index.php?action=addcategory" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label"><?php echo L::fields_name; ?> *</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="<?php echo L::fields_name; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary"><?php echo L::buttons_add_category; ?></button>
    </div>
  </div>
</form>
	</div>
</div>
