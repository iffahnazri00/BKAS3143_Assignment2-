<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/restrict.js"></script>
  </head>
  <body>

<?php include "sidenav.html"; ?>
<div class="container-fluid">
      <div class="container">
        <!-- header section -->
        <?php
          require "header.php";
          createHeader('home', 'Home', '');
        ?>

<!--script src="/assets/js/	"></script-->
		<script src="/assets/js/jquery-1.12.4.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="row">
<div id="content" class="col-md-8 col-md-offset-1 col-xs-12">


<div id="chartContainer1" style="width: 100%; height: 500px;display: inline-block;"></div>
<br /><br />


<?php
	require "db_connection.php";
 
	$query_1 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-01-01' AND '2020-01-31' ";
    $result_1 = mysqli_query($con, $query_1);
	$row_1 = mysqli_fetch_assoc($result_1);
    $sum_1 = $row_1['value_sum'];
	
	$query_2 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-02-01' AND '2020-02-29' ";
    $result_2 = mysqli_query($con, $query_2);
	$row_2 = mysqli_fetch_assoc($result_2);
    $sum_2 = $row_2['value_sum'];
	
	$query_3 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-03-01' AND '2020-03-31' ";
    $result_3 = mysqli_query($con, $query_3);
	$row_3 = mysqli_fetch_assoc($result_3);
    $sum_3 = $row_3['value_sum'];
	
	$query_4 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-04-01' AND '2020-04-31' ";
    $result_4 = mysqli_query($con, $query_4);
	$row_4= mysqli_fetch_assoc($result_4);
    $sum_4 = $row_4['value_sum'];
	
	$query_5 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-05-01' AND '2020-05-31' ";
    $result_5 = mysqli_query($con, $query_5);
	$row_5 = mysqli_fetch_assoc($result_5);
    $sum_5 = $row_5['value_sum'];
	
	$query_6 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-06-01' AND '2020-06-31' ";
    $result_6 = mysqli_query($con, $query_6);
	$row_6 = mysqli_fetch_assoc($result_6);
    $sum_6 = $row_6['value_sum'];
	
	$query_7 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-07-01' AND '2020-07-31' ";
    $result_7 = mysqli_query($con, $query_7);
	$row_7 = mysqli_fetch_assoc($result_7);
    $sum_7 = $row_7['value_sum'];
	
	$query_8 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-08-01' AND '2020-08-31' ";
    $result_8 = mysqli_query($con, $query_8);
	$row_8= mysqli_fetch_assoc($result_8);
    $sum_8 = $row_8['value_sum'];
	
	$query_9 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-09-01' AND '2020-09-31' ";
    $result_9 = mysqli_query($con, $query_9);
	$row_9 = mysqli_fetch_assoc($result_9);
    $sum_9 = $row_9['value_sum'];
	
	$query_10 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-10-01' AND '2020-10-31' ";
    $result_10 = mysqli_query($con, $query_10);
	$row_10 = mysqli_fetch_assoc($result_10);
    $sum_10 = $row_10['value_sum'];
	
	$query_11 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-11-01' AND '2020-11-31' ";
    $result_11 = mysqli_query($con, $query_11);
	$row_11 = mysqli_fetch_assoc($result_11);
    $sum_11 = $row_11['value_sum'];
	
	$query_12 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2020-12-01' AND '2020-12-31' ";
    $result_12 = mysqli_query($con, $query_12);
	$row_12= mysqli_fetch_assoc($result_12);
    $sum_12 = $row_12['value_sum'];

    $query_13 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-01-01' AND '2021-01-31' ";
    $result_13 = mysqli_query($con, $query_13);
	$row_13 = mysqli_fetch_assoc($result_13);
    $sum_13 = $row_13['value_sum'];
	
	$query_14 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-02-01' AND '2021-02-28' ";
    $result_14 = mysqli_query($con, $query_14);
	$row_14 = mysqli_fetch_assoc($result_14);
    $sum_14 = $row_14['value_sum'];
	
	$query_15 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-03-01' AND '2021-03-31' ";
    $result_15 = mysqli_query($con, $query_15);
	$row_15 = mysqli_fetch_assoc($result_15);
    $sum_15 = $row_15['value_sum'];
	
	$query_16 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-04-01' AND '2021-04-31' ";
    $result_16 = mysqli_query($con, $query_16);
	$row_16= mysqli_fetch_assoc($result_16);
    $sum_16 = $row_16['value_sum'];
	
	$query_17 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-05-01' AND '2021-05-31' ";
    $result_17 = mysqli_query($con, $query_17);
	$row_17 = mysqli_fetch_assoc($result_17);
    $sum_17 = $row_17['value_sum'];
	
	$query_18 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-06-01' AND '2021-06-31' ";
    $result_18 = mysqli_query($con, $query_18);
	$row_18 = mysqli_fetch_assoc($result_18);
    $sum_18 = $row_18['value_sum'];
	
	$query_19 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-07-01' AND '2021-07-31' ";
    $result_19 = mysqli_query($con, $query_19);
	$row_19 = mysqli_fetch_assoc($result_19);
    $sum_19 = $row_19['value_sum'];
	
	$query_20 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-08-01' AND '2021-08-31' ";
    $result_20 = mysqli_query($con, $query_20);
	$row_20 = mysqli_fetch_assoc($result_20);
    $sum_20 = $row_20['value_sum'];
	
	$query_21 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-09-01' AND '2021-09-31' ";
    $result_21 = mysqli_query($con, $query_21);
	$row_21 = mysqli_fetch_assoc($result_21);
    $sum_21 = $row_21['value_sum'];
	
	$query_22 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-10-01' AND '2021-10-31' ";
    $result_22 = mysqli_query($con, $query_22);
	$row_22 = mysqli_fetch_assoc($result_22);
    $sum_22 = $row_22['value_sum'];
	
	$query_23 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-11-01' AND '2021-11-31' ";
    $result_23 = mysqli_query($con, $query_23);
	$row_23 = mysqli_fetch_assoc($result_23);
    $sum_23 = $row_23['value_sum'];
	
	$query_24 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2021-12-01' AND '2021-12-31' ";
    $result_24 = mysqli_query($con, $query_24);
	$row_24= mysqli_fetch_assoc($result_24);
    $sum_24 = $row_24['value_sum'];

    $query_25 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-01-01' AND '2022-01-31' ";
    $result_25 = mysqli_query($con, $query_25);
	$row_25 = mysqli_fetch_assoc($result_25);
    $sum_25 = $row_25['value_sum'];
	
	$query_26 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-02-01' AND '2022-02-28' ";
    $result_26 = mysqli_query($con, $query_26);
	$row_26 = mysqli_fetch_assoc($result_26);
    $sum_26 = $row_26['value_sum'];
	
	$query_27 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-03-01' AND '2022-03-31' ";
    $result_27 = mysqli_query($con, $query_27);
	$row_27 = mysqli_fetch_assoc($result_27);
    $sum_27 = $row_27['value_sum'];
	
	$query_28 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-04-01' AND '2022-04-31' ";
    $result_28 = mysqli_query($con, $query_28);
	$row_28 = mysqli_fetch_assoc($result_28);
    $sum_28 = $row_28['value_sum'];
	
	$query_29 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-05-01' AND '2022-05-31' ";
    $result_29 = mysqli_query($con, $query_29);
	$row_29 = mysqli_fetch_assoc($result_29);
    $sum_29 = $row_29['value_sum'];
	
	$query_30 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-06-01' AND '2022-06-31' ";
    $result_30 = mysqli_query($con, $query_30);
	$row_30 = mysqli_fetch_assoc($result_30);
    $sum_30 = $row_30['value_sum'];
	
	$query_31 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-07-01' AND '2022-07-31' ";
    $result_31 = mysqli_query($con, $query_31);
	$row_31 = mysqli_fetch_assoc($result_31);
    $sum_31 = $row_31['value_sum'];
	
	$query_32 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-08-01' AND '2022-08-31' ";
    $result_32 = mysqli_query($con, $query_32);
	$row_32 = mysqli_fetch_assoc($result_32);
    $sum_32 = $row_32['value_sum'];
	
	$query_33 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-09-01' AND '2022-09-31' ";
    $result_33 = mysqli_query($con, $query_33);
	$row_33 = mysqli_fetch_assoc($result_33);
    $sum_33 = $row_33['value_sum'];
	
	$query_34 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-10-01' AND '2022-10-31' ";
    $result_34 = mysqli_query($con, $query_34);
	$row_34 = mysqli_fetch_assoc($result_34);
    $sum_34 = $row_34['value_sum'];
	
	$query_35 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-11-01' AND '2022-11-31' ";
    $result_35 = mysqli_query($con, $query_35);
	$row_35 = mysqli_fetch_assoc($result_35);
    $sum_35 = $row_35['value_sum'];
	
	$query_36 = "SELECT SUM(amount) AS value_sum FROM assignment2 WHERE date BETWEEN '2022-12-01' AND '2022-12-31' ";
    $result_36 = mysqli_query($con, $query_36);
	$row_36 = mysqli_fetch_assoc($result_36);
    $sum_36 = $row_36['value_sum'];
	
    $dataPoints1 = array(
	array("y" => $sum_1, "label" => "Jan"),
	array("y" => $sum_2, "label" => "Feb"),
	array("y" => $sum_3, "label" => "Mac"),
	array("y" => $sum_4, "label" => "Apr"),
	array("y" => $sum_5, "label" => "May"),
	array("y" => $sum_6, "label" => "Jun"),
	array("y" => $sum_7, "label" => "Jul"),
	array("y" => $sum_8, "label" => "Aug"),
	array("y" => $sum_9, "label" => "Sep"),
	array("y" => $sum_10, "label" => "Oct"),
	array("y" => $sum_11, "label" => "Nov"),
	array("y" => $sum_12, "label" => "Dec"),
    );

    $dataPoints2 = array(
    array("y" => $sum_13, "label" => "Jan"),
	array("y" => $sum_14, "label" => "Feb"),
	array("y" => $sum_15, "label" => "Mac"),
	array("y" => $sum_16, "label" => "Apr"),
	array("y" => $sum_17, "label" => "May"),
	array("y" => $sum_18, "label" => "Jun"),
	array("y" => $sum_19, "label" => "Jul"),
	array("y" => $sum_20, "label" => "Aug"),
	array("y" => $sum_21, "label" => "Sep"),
	array("y" => $sum_22, "label" => "Oct"),
	array("y" => $sum_23, "label" => "Nov"),
	array("y" => $sum_24, "label" => "Dec"),
    );

    $dataPoints3 = array(
        array("y" => $sum_25, "label" => "Jan"),
        array("y" => $sum_26, "label" => "Feb"),
        array("y" => $sum_27, "label" => "Mac"),
        array("y" => $sum_28, "label" => "Apr"),
        array("y" => $sum_29, "label" => "May"),
        array("y" => $sum_30, "label" => "Jun"),
        array("y" => $sum_31, "label" => "Jul"),
        array("y" => $sum_32, "label" => "Aug"),
        array("y" => $sum_33, "label" => "Sep"),
        array("y" => $sum_34, "label" => "Oct"),
        array("y" => $sum_35, "label" => "Nov"),
        array("y" => $sum_36, "label" => "Dec"),
        );
?>

<script type="text/javascript">

    $(function () {
        var chart1 = new CanvasJS.Chart("chartContainer1",{
        theme: "light3",
        animationEnabled: true,
        title: {
            text: "Monthly Electricity Bill Overview"
        },

        axisY: {
            title: "Total Amount (RM)"
        },

        data: [{
            type: "spline",
            name: 2020,
            showInLegend: true,
            legendColor: "blue",
            legendText: "2020",
            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
        },{
            type: "spline",
            name: 2021,
            showInLegend: true,
            legendColor: "red",
            legendText: "2021",
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        },{
            type: "spline",
            name: 2022,
            showInLegend: true,
            legendColor: "green",
            legendText: "2022",
            dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>

        }]
    });

    chart1.render();

    });
</script>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>