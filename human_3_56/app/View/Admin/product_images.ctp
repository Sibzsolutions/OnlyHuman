<?php 		
?>
<script src="<?php echo $this->webroot."plugins/jQuery/jQuery-2.1.4.min.js"; ?>"></script>
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="<?php echo $this->webroot.'bootstrap/css/bootstrap.min.css';?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo $this->webroot.'plugins/datatables/dataTables.bootstrap.css';?>">
<!-- Theme style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-header">
                
                <a class="btn btn-primary" href="<?php echo $this->webroot.'admin/add_user' ?>">Add User</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Image Id</th>
                        <th>Product Name</th>
                        <th>Image Path</th>
                        <th>Image Alter</th>
                        <th>Is Default</th>
                        <th>Order</th>                        
                        <th>Status</th>                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach($product_images as $produc)
                      {
						  $product_image = $produc['Produc_image'];
                      ?>
                        <tr>
                        <td><?php echo $product_image['id']; ?></td>
                        <td><?php echo $product_image['prodname']; ?></td>
                        <td>
                        <img src="<?php echo $this->webroot.'img/product/thumb/small_images/'.$product_image['imagepath']; ?>" />
						</td>
                        <td><input type="text" id="saved_imgalt_text_<?php echo $product_image['id']; ?>" value="<?php echo $product_image['imgalt']; ?>" /><input type="button" id="saved_imgalt_button_<?php echo $product_image['id']; ?>" value="save" style="background-color:#0165a1; border:1px solid #0165a1; color: #fff; margin:0 0 0 -1px;"  />
                        
                        <div style="width:20px; height:20px; float:left">
                        <div id="saved_imgalt_button_data_<?php echo $product_image['id'];?>"></div>
                        </div>
                        
                        </td>
                        <td>
                        <?php //echo $this->Form->input('is_default',array('type'=>'select', 'options'=>array(1=>'Yes', 0=>'No'), 'class'=>'form-control','required'=>'required','label'=>'','div'=>false, 'id'=>'is_default_'.$product_image['id'].'' ,'default'=>$product_image['isdefault'] ));
						
						$data_arr = array(1=>'Yes', 0=>'No');

						?>
                        <select class="form-control select2" style="width: 100%;" id="is_default_<?php echo $product_image['id']; ?>">
                        <?php 
						
						foreach($data_arr as $key=>$first)
						{
							if($key == $product_image['isdefault'])
							{
							?>
							<option selected="selected" value="<?php echo $key; ?>"><?php echo $first; ?></option>
							<?php
							}
							else
							{
							?>
							<option value="<?php echo $key; ?>"><?php echo $first; ?></option>
							<?php	
							}
						}

						?>
                        </select>
                        
                        <div style="width:20px; height:20px; float:left">
                        <div id="is_default_data_<?php echo $product_image['id'];?>"></div>
                        </div>
                        
						<?php //echo $product_image['isdefault']; ?>
                        </td>
                        <td>
                        <?php //echo $this->Form->input('change_order',array('type'=>'select', 'class'=>'form-control select2', 'style'=>'width: 100%;', 'options'=>array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5), 'id'=>'change_order_'.$product_image['id'].'', 'class'=>'form-control','required'=>'required','label'=>'','div'=>false, 'default'=>$product_image['order']));
						
						//$data_arr = array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5);

						?>
                        
                        <select class="form-control select2" style="width: 100%;" id="change_order_<?php echo $product_image['id']; ?>">
                        <?php 
							foreach($total_order_number as $first)
							{
								if($first == $product_image['order'])
								{
								?>
                                <option selected="selected" value="<?php echo $first; ?>"><?php echo $first; ?></option>
                                <?php
								}
								else
								{
								?>
                                <option value="<?php echo $first; ?>"><?php echo $first; ?></option>
                                <?php	
								}
							}
						?>
                        </select>
                        
                        <div style="width:20px; height:20px; float:left">
                        <div id="change_order_data_<?php echo $product_image['id'];?>"></div>
                        </div>
                        
                        </td>
                        <td align="center">
						<?php //echo $this->Form->input('del_status',array('type'=>'select', 'options'=>array(1=>'Active', 0=>'Inactive'), 'class'=>'form-control', 'id'=>'del_status_'.$product_image['id'].'', 'required'=>'required','label'=>'','div'=>false));
						
						$data_arr = array(0=>'Active', 1=>'Inactive');

						?>
                        <select class="form-control select2" style="width: 100%;" id="del_status_<?php echo $product_image['id']; ?>">
                        <?php 
							
						foreach($data_arr as $key=>$first)
						{
							if($key == $product_image['del_status'])
							{
							?>
							<option selected="selected" value="<?php echo $key; ?>"><?php echo $first; ?></option>
							<?php
							}
							else
							{
							?>
							<option value="<?php echo $key; ?>"><?php echo $first; ?></option>
							<?php	
							}
						}

						?>
                        </select>
                        
                        <div style="width:20px; height:20px; float:left">
                        <div id="del_status_data_<?php echo $product_image['id'];?>"></div>
                        </div>
                        </td>
                        </tr>
                      
						<script>
                        
                            $(document).ready(function(){
                                
								$('#del_status_<?php echo $product_image['id']; ?>').change(function(){
								
								var type_data = $('#del_status_<?php echo $product_image['id']; ?>').val();
								
								$('#del_status_data_<?php echo $product_image['id']; ?>').html('<img src="http://propelle.co/images/loading_small.gif">');
								$.post("<?=$this->webroot?>Admin/change_status_image", {
																		 type_data : type_data,
																		 image_id : '<?php echo $product_image['id']; ?>' },
								
																		 function(result){
									 if(result=='Yes')
									 {
									  $('#del_status_data_<?php echo $product_image['id']; ?>').html('<img src="http://www.customotion.com/green_check_small.png">');
									  $('#del_status_data_<?php echo $product_image['id']; ?>').hide(2500);
									 }
									
									});
								});
								
								
								$('#change_order_<?php echo $product_image['id']; ?>').change(function(){
								
								var change_order_number = $('#change_order_<?php echo $product_image['id']; ?>').val();
								
								$('#change_order_data_<?php echo $product_image['id']; ?>').html('<img src="http://propelle.co/images/loading_small.gif">');
								$.post("<?=$this->webroot?>Admin/change_order_image", {
																		 change_order_number : change_order_number,
																		 image_id : '<?php echo $product_image['id']; ?>' },
								
																		 function(result){
									 if(result=='Yes')
									 {
									  $('#change_order_data_<?php echo $product_image['id']; ?>').html('<img src="http://www.customotion.com/green_check_small.png">');
									  $('#change_order_data_<?php echo $product_image['id']; ?>').hide(2500);
									 }
									
									});
								});
								
                                
								$('#is_default_<?php echo $product_image['id']; ?>').change(function(){
								
								var is_default = $('#is_default_<?php echo $product_image['id']; ?>').val();
								
								$('#is_default_data_<?php echo $product_image['id']; ?>').html('<img src="http://propelle.co/images/loading_small.gif">');
								$.post("<?=$this->webroot?>Admin/is_default_image", {
																		 is_default : is_default,
																		 image_id : '<?php echo $product_image['id']; ?>' },
								
																		 function(result){
									 if(result=='Yes')
									 {
									  $('#is_default_data_<?php echo $product_image['id']; ?>').html('<img src="http://www.customotion.com/green_check_small.png">');
									  $('#is_default_data_<?php echo $product_image['id']; ?>').hide(2500);
									 }
									
									});
								});
								
								
								$('#saved_imgalt_button_<?php echo $product_image['id']; ?>').click(function(){
								
								var saved_imgalt_text = $('#saved_imgalt_text_<?php echo $product_image['id']; ?>').val();
								
                                $('#saved_imgalt_button_data_<?php echo $product_image['id']; ?>').html('<img src="http://propelle.co/images/loading_small.gif">');
								$.post("<?=$this->webroot?>Admin/saved_imgalt", {
																		 saved_imgalt_text : saved_imgalt_text,
																		 image_id : '<?php echo $product_image['id']; ?>' },
								
																		 function(result){
									 if(result=='Yes')
									 {
									  $('#saved_imgalt_button_data_<?php echo $product_image['id']; ?>').html('<img src="http://www.customotion.com/green_check_small.png">');
									  $('#saved_imgalt_button_data_<?php echo $product_image['id']; ?>').hide(2500);
									 }
									
									});
								});
								
								
								
                            });
                        
                        </script>
                        
    				  <?php
                      }
                      ?>
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>
          
<script src="<?php echo $this->webroot.'plugins/jQuery/jQuery-2.1.4.min.js';?>"></script>
<!-- Bootstrap 3.3.5 -->
<!--<script src="<?php //echo $this->webroot.'bootstrap/js/bootstrap.min.js';?>"></script>-->
<!-- DataTables -->
<script src="<?php echo $this->webroot.'plugins/datatables/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo $this->webroot.'plugins/datatables/dataTables.bootstrap.min.js';?>"></script>
<!-- SlimScroll -->
<script src="<?php echo $this->webroot.'plugins/slimScroll/jquery.slimscroll.min.js';?>"></script>
<!-- FastClick -->
<script src="<?php echo $this->webroot.'plugins/fastclick/fastclick.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo $this->webroot.'dist/js/app.min.js';?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $this->webroot.'dist/js/demo.js';?>"></script>
<!-- page script -->

<script>
  $(function () {
	$("#example2").DataTable();
	$('#example1').DataTable({
	  "aaSorting": [],
	  "paging": true,
	  "lengthChange": true,
	  "searching": true,
	  "ordering": true,
	  "info": true,
	  "autoWidth": true
	});
  });
</script>
