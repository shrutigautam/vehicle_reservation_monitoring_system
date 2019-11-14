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
  <h3 class="box-title">View Parking</h3>
  </div>
 <section class="content">
      
            

          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" >Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" >Time(From)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Time(To)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" >Parking Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th></tr>
                </thead>
                <tbody>
                <?php 
                $query=$this->db->get("book_parking");
                foreach ($query->result_array() as $row)
                  {
                  echo "<tr>";
                  echo "<td>".$row['name']."</td><td>".$row['date']."</td><td>".$row['time_from']."</td><td>".$row['time_to']."</td><td>".$row['parking']."</td><td>".$row['amount']."</td>";
                  echo "<td><a href='#' class='btn btn-default'><i class='fa fa-edit'></i></a></td>";
				  echo "</tr>";
                 
                }
               ?>
               </tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Date</th><th rowspan="1" colspan="1">Time(from)</th><th rowspan="1" colspan="1">Time(to)</th><th rowspan="1" colspan="1">Parking Name</th><th rowspan="1" colspan="1">Amount</th><th rowspan="1" colspan="1">Action</th></tr>
                </tfoot>
              </table></div></div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
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