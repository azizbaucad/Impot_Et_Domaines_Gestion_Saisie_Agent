
<?php include '../Model/achat.class.php' ?>
<!-- <!?php 
$conn= new mysqli('localhost','root','','positronx_db')or die("Could not connect to mysql".mysqli_error($con));
?> -->
<?php
  $nbr3=count(Achat::NbrBl());
?>
					
<br>
<div class="row">

<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
<div class="inner">
<h3>
<p style="font-size: 32px;font-family:normal; text-align:left top;"><?php echo $nbr3;?></p>
</h3>
 
<p style="font-size: 30px;font-family:normal;font-weight:normal; text-align:left top;">Les Marchés</p>
</div>
<div class="icon">
<i class="fa fa-shopping-cart"></i>
</div>
<a style="font-size:16px;color:white;font-weight:normal;" class="small-box-footer" href="?page=detail_marche">
Voir les details
<i class="fa fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-primary">
<div class="inner">
<h3>
<p style="font-size: 32px;font-family:normal; text-align:left top;"><?php echo $nbr3;?></p>
</h3>
 
<p style="font-size: 30px;font-family:normal;font-weight:normal; text-align:left top;">Les Locations</p>
</div>
<div class="icon">
<i class="fas fa-home"></i>
</div>
<a style="font-size:16px;color:white;font-weight:normal;" class="small-box-footer" href="?page=detail_marche">
Voir les details
<i class="fa fa-arrow-circle-right"></i>
</a>
</div>
</div>


<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-secondary">
<div class="inner">
<h3>
<p style="font-size: 32px;font-family:normal; text-align:left top;"><?php echo $nbr3;?></p>
</h3>
 
<p style="font-size: 30px;font-family:normal;font-weight:normal; text-align:left top;">Les Transactions</p>
</div>
<div class="icon">
<i class="fas fa-exchange-alt"></i>

</div>
<a style="font-size:16px;color:white;font-weight:normal;" class="small-box-footer" href="?page=detail_marche">
Voir les details
<i class="fa fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
<div class="inner">
<h3>
<p style="font-size: 32px;font-family:normal; text-align:left top;"><?php echo $nbr3;?></p>
</h3>
 
<p style="font-size: 30px;font-family:normal;font-weight:normal; text-align:left top;">Les Clients</p>
</div>
<div class="icon">
<i class="fas fa-users"></i>
</div>
<a style="font-size:16px;color:white;font-weight:normal;" class="small-box-footer" href="?page=detail_marche">
Voir les details
<i class="fa fa-arrow-circle-right"></i>
</a>
</div>
</div>





</div>



</div>



 



                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
</div>