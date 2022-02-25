<?php include'../Model/db.php' ?>

 
<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "positronx_db";
$port = "3306";

$conn = mysqli_connect($hostname, $username, $password, $dbname,$port) or die("Database connection not established.");

$query = "SELECT centre, count(*) as number FROM d_br GROUP BY centre";  
$result = mysqli_query($conn, $query); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href='js/jquery-ui.min.css' rel='stylesheet' type='text/css'>

        <!-- Script -->
        <script src='js/jquery-3.3.1.js' type='text/javascript'></script>
        <script src='js/jquery-ui.min.js' type='text/javascript'></script>
        <script type='text/javascript'>
        $(document).ready(function(){
            $('.dateFilter').datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
        </script>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}">                    </script>

        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Centre', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["centre"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                    sliceVisibilityThreshold: .2,

                     //title: 'Pourcentage du centre par rapport aux nombres de saisie des marchés',  
                      //is3D:true,  
                      pieHole: 0.5,
                        pieSliceTextStyle: {
                            color: 'white',
                        },
                        legend: {
      enabled: true,
      floating: false,
      borderWidth: 0,
      align: 'right', // Moving the legend to the right of the donut chart
      layout: 'vertical', // Display in columns
      verticalAlign: 'middle',
      itemMarginTop: 5, // Space between each category in the legend
      itemMarginBottom: 5,
      itemStyle: {
        lineHeight: "40px" // Aligning icons and text
      },
      useHTML: true,
      labelFormatter: function() { // Includes cat & price in legend
        return '<span style="display:block; margin-top:-10px; position:relative; width:210px;border-bottom:1px solid #DCDCDC;"><image style="width:20px; height:20px;" src="' + this.icon + '" />&nbsp<span style="font-weight:normal; vertical-align:super;">' + this.name + ' </span><span style="font-weight:normal; vertical-align:super; position:absolute; right:0px;">€' + this.y + '<br/></span></span>'; // right:0px; pulls the number to the right and keeps the text to the left
      }
    }
                     };  
                     
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>
    </head>
    <body class="sb-nav-fixed">
         
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Details sur les marchés</h1>
                        <ol class="breadcrumb mb-4">
                            <hr>
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        </ol>
                        
                        </div>
                         


                        <!-- <div class="row">
                            <div class="">
                                <div class="card mb-4">
                                    <div class="card-header">
                                <h3><i class="fas fa-table me-2"></i>Saisie journalière par agent</h3>
                                    </div>
                                    <div class="card-body">
                                    <div class="card-body">
                                    <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered" width="100%">
                                    <style>th{font-weight:bold;}</style>
                                    <thead class="alert-info">
                                        <tr>
                                            
                                            <th style="font-weight:bold"><h5 style="font-weight:bold;text-align:center;">Date Saisie</h5></th>
                                            <th><h5 style="font-weight:bold;text-align:center;">Centre</h5></th>
                                            <th><h5 style="font-weight:bold;text-align:center;">Nombre de saisie</h5></th>
                                            <th><h5 style="font-weight:bold;text-align:center;">ID Agent</h5></th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
				                        	$i = 1;
					                         
				                        	$qry = $conn->query("SELECT agent , centre , date_saisie , count(id_d_br) as Nbre_de_saisie FROM d_br GROUP BY agent , centre , date_saisie ORDER BY date_saisie");
				                        	while($row= $qry->fetch_assoc()):
				                	?>
                                        <tr>
                                            <td style="font: size 1px;font-family:verdana;"><h5><?php echo $row['date_saisie'] ?></h5></td>
                                            <td style="font: size 1px;font-family:verdana;"><h5><?php echo $row['centre'] ?></h5></td>
                                            <td style="font: size 1px;font-family:verdana;"><h5><?php echo $row['Nbre_de_saisie'] ?></h5></td>
                                            <td style="font: size 1px;font-family:verdana;"><h5><?php echo $row['agent'] ?></h5></td>
                                            
                                        </tr>
                                         
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                                </div>
                            </div></div>
                            <div class="card-footer small text-muted">Derniere mise-à-jour</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Pourcentage du centre par rapport aux nombres de saisie des marchés
                                    </div>
                                    <style type="text/css">#chart_wrap {
                                            position: relative;
                                            padding-bottom: 40.5%;
                                            height: 0;
                                            overflow:hidden;
                                        }

                                        #piechart {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            width:auto;
                                            height:auto;
                                        }
                                    </style>
                                    <div class="card-body">
                                        <div id="chart_wrap">
                                            <div id="piechart"> </div>
                                        </div>
                                    </div>
                                    <div class="card-footer small text-muted">Derniere mise-à-jour</div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </main> -->
                <style type="text/css">
					  .nin{

						font-size: 16px;font-weight: normal;line-height: 30px;width: 100%;min-height: 32.5px;
						border-radius: 10px;
						outline-color: BLUE !important;
						background-color: rgb(255, 255, 255);
						box-shadow: blue 0px 0px 0px 0px;
						border: 10px solid blue !transparent ;
						 

					  }
</style>
		
                
                <div class="row">
                <div class="">
                    <div  style="border-color:#00BFFF;" class="card mb-3">
                    <div style="background-color:#00BFFF;" class="card-header">
                    <p style="font-size: 18px;font-family:normal;color:white;"><i class="fas fa-table me-2"></i>Le nombre de saisies par interval de date</p>
                    </div>
                    <div class="card-body"><div class="card-body">
		<form method="POST" action="">
        <div class="container">
  <div class="row">
    <div class="col-sm">
     
			<label style="font-size:16px;font-weight:normal;">Date début</label><input type="text" style="width:auto;font-size:16px;height:50%;border= 10px solid blue !transparent ;" class="form-control dateFilter" placeholder="Date début"  name="date1" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>" />
    </div>
    <div class="col-sm">
    <label style="font-size:16px;font-weight:normal;">Date fin</label>
			<input type="text" style="width:auto;font-size:16px;height:50%;border= 10px solid blue !transparent ;" class="form-control dateFilter" placeholder="Date Fin"  name="date2" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>"/>
    </div>
    <div class="col-sm">
    <label style="font-size:16px;font-weight:normal;">Action</label>
    <div>
    <button class="btn btn-primary" title="Rechercher" name="search"><span  class="glyphicon glyphicon-search"></span></button> <a href="?page=detail_marche" type="button" title="Synchroniser" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
    </div>
  </div>
</div>	</form>
		<br /><br />
		<div class="table-responsive">	
			<table id="data" class="table table-bordered ">
				<thead style="background-color:#00BFFF; color:white;broder-color:white;">
					<tr>
						<!-- <th>Centre</th>
						<th>ID Agent</th> -->
                        <th style="font-size: 16px;font-family:normal; text-align:center;">#</th>
                        <th style="font-size: 16px;font-family:normal; text-align:center;">Date de saisie</th>
                        <th style="font-size: 16px;font-family:normal; text-align:center;">Nombre de Saisie</th>
                        <th style="font-size: 16px;font-family:normal; text-align:center;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php include'range.php'?>	
				</tbody>
			</table>
		</div>	
	</div>
    </div>
    </div>
    <div class="card-footer small text-muted">Derniere mise-à-jour</div>
                              
         </div>
        
        </div>
         

        <div class="">
        <div  style="border-color:#00BFFF;" class="card mb-3">
                    <div style="background-color:#00BFFF;" class="card-header">
                    <p style="font-size: 18px;font-family:normal;color:white;"><i class="fas fa-chart-pie me-1"></i>Le pourcentage de sasie realisé par un centre</p>
                                    </div>
                                    <style type="text/css">#chart_wrap {
                                            position: relative;
                                            padding-bottom: 40.5%;
                                            height: 0;
                                            overflow:hidden;
                                        }

                                        
                                    </style>
                                    <div class="card-body">
                                       
                                            <div id="piechart" style="width: 900px; height: 400px;align:center;"> </div>
                                        

                                    </div>
                                    <div class="card-footer small text-muted">Derniere mise-à-jour</div>
                                </div>

                            </div>
                            
                        </div>
                    </div>

        </div>

        <script>
  	$(document).ready(function(){
  		var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		if($('.nav-link.nav-'+page).length > 0){
  			$('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
      $('.manage_account').click(function(){
        uni_modal('Manage Account','manage_user.php?id='+$(this).attr('data-id'))
      })
  	})
  </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script src="js/date_pag.js"></script>
    </body>
</html>
