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

<div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-header" style="width:100%; float:left">
                
                <a class="login_button" href="<?php echo $this->webroot.'superadmin/add_category' ?>">Add Category</a>
                
                <!--<a class="btn btn-primary" href="<?php //echo $this->webroot.'admin/add_sub_category' ?>">Add Sub Category</a>-->
                
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-striped" id="example1">
                    <thead>
                      <tr>
                        <th bgcolor="#00bcd4" class="text12_white">Id</th>
                        <th bgcolor="#00bcd4" class="text12_white">Name</th>
                        <th bgcolor="#00bcd4" class="text12_white">Description</th>
                        <th bgcolor="#00bcd4" class="text12_white">Image</th>
                        <th bgcolor="#00bcd4" class="text12_white">Parent_id</th>
                        <th bgcolor="#00bcd4" class="text12_white"><div style="width:84px">Url Aliase</div></th>
                        <th bgcolor="#00bcd4" class="text12_white"><div style="width:63px">Meta Title</div></th>
                        <th bgcolor="#00bcd4" class="text12_white"><div style="width:109px">Meta Description</div></th>
                        <th bgcolor="#00bcd4" class="text12_white"><div style="width:100px">Meta Keywords</div></th>
                        <th bgcolor="#00bcd4" class="text12_white"><div style="width:93px">Canonicle Url</div></th>                        
                        <th bgcolor="#00bcd4" class="text12_white">Status</th>                        
                        <th bgcolor="#00bcd4" class="text12_white"><div style="width:46px">Action</div></th>                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach($categories_data as $category)
                      {
						  $category_data = $category['Category'];
                      ?>
                        <tr>
                        <td><?php echo $category_data['id']; ?></td>
                        <td><?php echo $category_data['catname']; ?></td>
                        <td><?php echo $category_data['catdesc']; ?></td>
                        <td>
                        <img src="<?php echo $this->webroot.'img/category/thumb/small_images/'.$category_data['catimg']; ?>" style="max-width:100px"/>
                        </td>
                        <td><?php echo $category_data['parent_name']; ?></td>
                        <td><?php echo $category_data['url_alias']; ?></td>
                        <td><?php echo $category_data['catmtitle']; ?></td>
                        <td><?php echo $category_data['catmkeywords']; ?></td>
                        <td><?php echo $category_data['catmdesc']; ?></td>
                        <td>
						<?php 
			
							if($category_data['catcanonical']!='')
							echo $category_data['catcanonical']; 
							else
							echo "N/A";
						?>
                        </td>
                        <td><?php if($category_data['del_status'] == 0) echo "Active"; else echo "Inactive"; ?></td>
                        <td>&nbsp;&nbsp;&nbsp;<a title="Edit" href="<?php echo $this->webroot.'superadmin/category_edit/'.$category_data['id']; ?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a title="Status Change" href="<?php echo $this->webroot.'superadmin/category_status_change/'.$category_data['id']; ?>"><i class="fa fa-exchange"></i></a>
                        
                        <!--&nbsp;&nbsp;&nbsp;<a title="Delete" href="<?php //echo $this->webroot.'superadmin/user_delete/'.$category_data['id']; ?>"><i class="fa  fa-trash"></i></a>-->
                        </td>
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
