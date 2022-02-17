<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Bill</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
	<script src="manage_bill.js"></script>
	
  </head>
  <body style="max-height: 100%;">
    <!-- including side navigations -->
    <?php include("sidenav.html"); ?>

    <div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
          require "header.php";
          createHeader('server', 'Manage Existing Bill', 'Delete and search date');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">
          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search:&emsp;</label>
            <input type="text" class="form-control" id="" placeholder="Search" onkeyup="searchBILL(this.value);">
          </div>
          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
            		<th style="width: 2%;">No</th>
					<th style="width: 2%;">ID</th>
                    <th style="width: 10%;">Date</th>
            		<th style="width: 10%;">Current</th>
                    <th style="width: 10%;">Previous</th>
                    <th style="width: 10%;">Amount</th>
					<th style="width: 6%;">Action</th>
            			</tr>
            		</thead>
            		<tbody id="bills_div">
                  <?php
                    require 'manage_bill2.php';
                    showBILL(0);
                  ?>
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <br>
		
      </div>
    </div>
  </body>
</html>
