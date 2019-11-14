  <?php 
  include('templates/header.php');?>
  <?php 
  include('templates/side_menubar1.php');
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1>Vehicle Information</h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Users</li>
  </ol>
  </section>
  <section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
  <div class="col-md-12 col-xs-12">


  <div class="box">
  <div class="box-header">
  <h3 class="box-title">Add Vehicle Information</h3>
  </div>
  <form role="form" action="<?php echo base_url('User_dashboard/');?>" method="post">
  <div class="box-body">


   <div class="form-group">

  
  <div class="row">
    <div class="col-sm-4">

  <label>Vehicle Number</label>
 <input type="text" class="form-control" name="vehicle_number">
  </div>
   
    <div class="col-sm-4">
    <label>Model No. </label>
    <input type="text" class="form-control" name="model_no">
  </div>
    <div class="col-sm-4">
     <label>Colour</label>
    <input type="text" class="form-control" name="color">
  </div>
 
  </div>
  </div>
   <div class="form-group">
  <div class="row">
    <div class="col-sm-4">

  <label>Owner Name</label>
 <input type="text" class="form-control" name="owner_name">
  </div>
   
    <div class="col-sm-4">
    <label>Capacity</label>
    <input type="text" class="form-control" name="capacity">
  </div>
    <div class="col-sm-4">
     <label>Year of Manufacture</label>
    <input type="text" class="form-control" name="year">
  </div>
 
  </div>
</div>

 

  

   

  </div>
  <!-- /.box-body -->

  <div class="box-footer">
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="" class="btn btn-warning">Cancel</a>
  </div>
  </form>
  </div>
  <!-- /.box -->
  </div>
  <!-- col-md-12 -->
  </div>
  <!-- /.row -->
  </div>


  <?php 
  include('templates/footer.php');
  ?>