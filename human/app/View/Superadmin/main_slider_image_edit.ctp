<?php 

	App::import('Controller', 'Superadmins');
	$Superadmin = new SuperadminController;
	//$department_id = 4 ; // put here department ID as per your need
?>
<script src="<?php echo $this->webroot."plugins/jQuery/jQuery-2.1.4.min.js"; ?>"></script>
<script>
                        
	$(document).ready(function(){
		
		$('#att_select').change(function(){
		
		var cat_type_data = $('#att_select').val();
		
		$.post("<?=$this->webroot?>Superadmin/product_attribute_change_edit", {
												 cat_id : cat_type_data ,
												 product_id : '<?php echo $page_id; ?>'},
		
												 function(result){
 				$('#att_one').html(result);			 
			});
		});
	});

</script>

<!-- form start -->
  <?=$this->Form->create('Slider_image', array('role'=>'form', 'enctype'=>'multipart/form-data'));?>
	
    <div class="box-body form_box">
    <?=$this->Form->input('id',array('type'=>'hidden','class'=>'form-control','required'=>'required','label'=>'','div'=>false, 'placeholder'=>'Enter Image Heading', 'value'=>$slider_images_data['Slider_image']['id']));?>

   <div class="form-group">
      <label for="exampleInputEmail1">Image Heading </label>
      <?=$this->Form->input('heading',array('type'=>'text','class'=>'form-control','required'=>'required','label'=>'','div'=>false, 'placeholder'=>'Enter Image Heading', 'value'=>$slider_images_data['Slider_image']['heading']));?>
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Image Short Description</label>
      <?=$this->Form->input('short_desc',array('type'=>'text','class'=>'form-control','required'=>'required','label'=>'','div'=>false,  'placeholder'=>'Enter Image Short Desription', 'value'=>$slider_images_data['Slider_image']['short_desc']));?>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Image Long Description</label>
      <?=$this->Form->input('long_desc',array('type'=>'textarea','class'=>'form-control','required'=>'required','label'=>'','div'=>false,  'placeholder'=>'Enter Image Long Description', 'value'=>$slider_images_data['Slider_image']['long_desc']));?>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Slider Images</label><!-- 'class'=>'form-control', -->
      <?=$this->Form->input('image_path',array('type'=>'file','label'=>'','div'=>false,  'placeholder'=>'Select Slider Images', 'name'=>'data[Slider_image][image]'));?>
	<?php
		
		echo $slider_images_data['Slider_image']['image_path'];
		
	?>
	</div>
	<div style="float:left; width:100%">
	<?php
		
	if($slider_images_data['Slider_image']['cat_id'] !='')
	{
		?>
		<div class="form-group">
		  <label for="exampleInputEmail1">Category</label><!-- 'class'=>'form-control', -->
		  <?=$this->Form->input('Category',array('id'=>'category_click','type'=>'checkbox','checked'=>'checked', 'label'=>'','div'=>false));?>
		</div>
		<?php
	}
	else
	{
		?>
		<div class="form-group">
		  <label for="exampleInputEmail1">Category</label><!-- 'class'=>'form-control', -->
		  <?=$this->Form->input('Category',array('id'=>'category_click','type'=>'checkbox','label'=>'','div'=>false));?>
		</div>
		<?php
	}
	if($slider_images_data['Slider_image']['product_id'] !='')
	{
		?>
		<div class="form-group">
		  <label for="exampleInputEmail1">Product</label><!-- 'class'=>'form-control', -->
		  <?=$this->Form->input('Product',array('id'=>'product_click','type'=>'checkbox','checked'=>'checked','label'=>'','div'=>false));?>
		</div>
		<?php
	}
	else
	{
		?>
		<div class="form-group">
		  <label for="exampleInputEmail1">Product</label><!-- 'class'=>'form-control', -->
		  <?=$this->Form->input('Product',array('id'=>'product_click','type'=>'checkbox','label'=>'','div'=>false));?>
		</div>
		<?php	
	}
	?>
    </div>
    
    
	<div class="form-group" id="categories_dropdown_div">
      <label for="exampleInputEmail1">Categories</label>
	  <select class ="form-control" name="data[Slider_image][category_id]">
	  <?php 
	  
	  foreach($categories_dropdown as $key=>$category)
	  {
		  if($slider_images_data['Slider_image']['cat_id'] == $key)
		  {
			?>
			<option selected="selected" value="<?php echo $key; ?>"><?php echo $category ?></option>
			<?php
		  }
		  else
		  {
			?>
			<option value="<?php echo $key; ?>"><?php echo $category ?></option>
			<?php
		  }
	  }	
	  
	  ?>
	  </select>
      <?php //echo $this->Form->input('category_id',array('type'=>'select', 'options'=>$categories_dropdown, 'class'=>'form-control','required'=>'required','label'=>'','div'=>false));?>
    </div>
	
	<div class="form-group" id="products_dropdown_div">
      <label for="exampleInputEmail1">Products</label>
	  
      <?php //echo $this->Form->input('product_id',array('type'=>'select', 'options'=>$products_dropdown, 'class'=>'form-control','required'=>'required','label'=>'','div'=>false));?>
	  <select class ="form-control" name="data[Slider_image][product_id]">
	  <?php 
	  
	  foreach($products_dropdown as $key=>$product)
	  {
		  if($slider_images_data['Slider_image']['product_id'] == $key)
		  {
			?>
			<option selected="selected" value="<?php echo $key; ?>"><?php echo $product; ?></option>
			<?php
		  }
		  else
		  {
			?>
			<option value="<?php echo $key; ?>"><?php echo $product; ?></option>
			<?php
		  }
	  }	
	  
	  ?>
	</select>
	</div>
	
	<div class="form-group" style="clear:both">
      <label for="exampleInputEmail1">Priority</label>
		<?=$this->Form->input('picture_order',array('type'=>'select', 'options'=>$count_slider, 'class'=>'form-control','required'=>'required','label'=>'','div'=>false,'default'=>$slider_images_data['Slider_image']['picture_order']));?>	
	</div><!-- /.box-body -->
	
    <div class="form-group" style="clear:both">
      <label for="exampleInputEmail1">Status</label>
      <?=$this->Form->input('del_status',array('type'=>'select', 'options'=>array(0=>'Active', 1=>'Inactive'), 'class'=>'form-control','required'=>'required','label'=>'','div'=>false));?>
    </div>
  
  </div><!-- /.box-body -->

  
  <div class="input_box">
    <?=$this->Form->button('Saved',array('class'=>'login_button'))?>
  </div>
  <?=$this->Form->end()?>
  
<script>

	$(document).ready(function(){
		
		$("#categories_dropdown_div").hide();				
		$("#products_dropdown_div").hide();								
		
		if($('#category_click').prop("checked") == true)
				$("#categories_dropdown_div").show();					
			
		if($('#product_click').prop("checked") == true)
				$("#products_dropdown_div").show();						
		
		
		$('#category_click').click(function(){
			
			if($('#category_click').prop("checked") == true)
				$("#categories_dropdown_div").show();					
			else if($('#category_click').prop("checked") == false)
				$("#categories_dropdown_div").hide();				
		});
		
		$('#product_click').click(function(){
			
			if($('#product_click').prop("checked") == true)
				$("#products_dropdown_div").show();						
			else if($('#product_click').prop("checked") == false)
				$("#products_dropdown_div").hide();				
		});		
	});
	
</script>