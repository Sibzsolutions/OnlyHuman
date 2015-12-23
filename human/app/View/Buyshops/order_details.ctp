<?php ?>
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

<br /><br />
<div class="width1220">
<div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <!--<h3 class="box-title">Data Table With Full Features</h3>-->
                </div><!-- /.box-header -->
                <div class="box-header" style="width:100%; float:left">
                
                <!--<a class="login_button" href="<?php //echo $this->webroot.'superadmin/add_user' ?>">Add User</a>-->

				<a class="button" href="<?php echo $this->webroot.'buyshops/myaccount' ?>" style="float: right; margin: 20px 0px;">Back</a>
				
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-striped" id="example1">
                    <thead>
                      <tr>
                        <!--<th bgcolor="#00bcd4" class="text14_white">Id</th>
                        <th bgcolor="#00bcd4" class="text14_white">Order Id</th>-->
                        <th width="17%" bgcolor="#00bcd4" class="text12_white">Product Name</th>
						<th width="17%" bgcolor="#00bcd4" class="text12_white">Product Image</th>						
                        <!--<th bgcolor="#00bcd4" class="text14_white">Product Attributes</th>-->
                        <th width="16%" bgcolor="#00bcd4" class="text12_white">Product Price</th>
						<th width="20%" bgcolor="#00bcd4" class="text12_white">Product Quantity</th>
                        <!--<th bgcolor="#00bcd4" class="text14_white">Sub Total</th>-->
						<th width="11%" bgcolor="#00bcd4" class="text12_white">Order Date</th>
						<!--<th bgcolor="#00bcd4" class="text14_white">Offer</th>-->
						<!--<th width="17%" bgcolor="#00bcd4" class="text12_white" style="width:20%">Comments</th>-->
						<!--<th bgcolor="#00bcd4" class="text14_white">Status</th>-->
						
                        <!--<th bgcolor="#00bcd4" class="text14_white">Action</th>-->                        

						</tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach($order_details as $order_detail)
                      {
						  $order_data = $order_detail['Order_detail'];
						  
						  $product_details = $order_detail['Product_details']['Produc_master'];						   
                      ?>
                        
						<tr class="text14_black">
                        <td><?php echo $product_details['prodname']; ?></td>
						<!--<td><?php //echo $order_data['id']; ?></td>
                        <td><?php //echo $order_data['orderid']; ?></td>-->
						<?php
							
							if(isset($product_details['images']['Default']))
							{
								?>
								<td><img style="max-width:100px;" src="<?php echo $this->webroot.'img/product/thumb/small_images/'.$product_details['images']['Default']['imagepath']; ?>"/></td>
								<?php
							}
							else
							{
								?>
								<td><img style="max-width:100px;" src="<?php echo $this->webroot.'img/product/thumb/small_images/'.$product_details['images']['all']['imagepath']; ?>"/></td>
								<?php
							}
						
						?>
						
                        <!--<td><?php //echo $order_data['pattid']; ?></td>-->
                        <!--<td><?php //echo $order_data['prodprice']; ?></td>-->
						<td><?php echo $order_data['subtotal']; ?></td>
                        <td><?php echo $order_data['prodqty']; ?></td>
                        <!--<td><?php //echo $order_data['subtotal']; ?></td>-->
						<td><?php echo $order_data['orderdate']; ?></td>
						<!--<td><?php //if(isset($order_data['offername'])) echo $order_data['offername']; else echo "N/A";?></td>-->
						<!--<td width="2%"><?php //echo $order_data['comments']; ?></td>-->
						
						<!--<td><?php //if($order_data['del_status'] == 0) echo "Active"; else echo "Inactive"; ?></td>-->
                        <!--<td>&nbsp;&nbsp;&nbsp;<a title="Edit" href="<?php //echo $this->webroot.'superadmin/order_details/'.$order_data['id']; ?>"><i class="fa fa-database"></i></a>&nbsp;&nbsp;&nbsp;<a title="Status Change" href="<?php echo $this->webroot.'superadmin/order_status_change/'.$user_data['id']; ?>"><i class="fa fa-exchange"></i></a>
                        
                        <!--&nbsp;&nbsp;&nbsp;<a title="Delete" href="<?php //echo $this->webroot.'superadmin/user_delete/'.$order_data['id']; ?>"><i class="fa  fa-trash"></i></a>-->
                        </tr>
                      
					  <?php
                      }
                      ?>
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>
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
