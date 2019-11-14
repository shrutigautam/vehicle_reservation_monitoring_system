  <?php 
  include('templates/header.php');?>
  <?php 
  include('templates/side_menubar1.php');
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1>Parking</h1>
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
  <h3 class="box-title">Book Parking</h3>
  </div>
  <form role="form" action="<?php echo base_url('User_dashboard/book_parking');?>" method="post">
  <div class="box-body">

<div class="form-group">
   
        <label for="groups">Name:</label>
 <input type="text" class="form-control" name="name">
      
      
  </div>
  

   <div class="form-group">

  
  <div class="row">
    <div class="col-sm-4">

  <label>Date</label>
 <input type="date" class="form-control" name="booking_date">
  </div>
   
    <div class="col-sm-4">
    <label> Time (From)</label>
    <input type="time" class="form-control" name="booking(from)">
  </div>
    <div class="col-sm-4">
     <label>Time (To)</label>
    <input type="time" class="form-control" name="booking(to)">
  </div>
 
  </div>
</div>

  <div class="form-group">
    <div class="row">
    <div class="col-sm-6">
  <label>Select Parking</label>
  <select class="form-control" name="parking_name">
    <option value="none">Select</option>
    <?php
    $q=$this->db->get('slots');
    $data = $q->result_array();
    foreach($data as $row)
    {


    echo "<option value=".$row['slot_name'].">".$row['slot_name']."</option>"; 
  }
    ?>

  </select>
</div>
 <div class="col-sm-6">
  <label for="groups">Amount to pay</label>
 <input type="number" class="form-control" name="amount">
</div>
 
</div>
  </div>

  

   
<div class="form-group">
  <label for="groups">Transaction Detail (By Card Only)</label>
  <div class="row">
   <div class="col-sm-3">
    <label> Card Holder Name</label>
    <input type="text" class="form-control" name="card_name">
  </div>
    <div class="col-sm-3">
     <label>Card No.</label>
    <input type="number" class="form-control" name="card_no">
  </div>
  <div class="col-sm-3">
     <label>Expire date</label>
    <input type="date" class="form-control" name="exp_date">
  </div>
  <div class="col-sm-3">
     <label>CVV</label>
    <input type="number" class="form-control" name="cvv">
  </div>
 
  </div>

  
</div>
  </div>
  <!-- /.box-body -->

  <div class="box-footer">
  <button type="submit" class="btn btn-primary">Book Now</button>
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