<?php

  include'../Model/db.php' ;

  $conn= new mysqli('localhost','root','','positronx_db')or die("Could not connect to mysql".mysqli_error($con));

  if(ISSET($_POST['search'])){
      $i=1;
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query=mysqli_query($conn, "SELECT date_saisie , count(id_d_br) as Nbre_de_saisie FROM `d_br` WHERE date(`date_saisie`) BETWEEN '$date1' AND '$date2' group by date_saisie order by date_saisie ") or die(mysqli_error());
    $row=mysqli_num_rows($query);
    if($row>0){

        while($fetch=mysqli_fetch_array($query)){
?>
<tr>
    <!-- <td><!?php echo $fetch['centre']?></td>
    <td><!?php echo $fetch['id_agent']?></td> -->
    <th style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $i++ ?></th>
    <td style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $fetch['date_saisie']?></td>
    <td style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $fetch['Nbre_de_saisie']?></td>
    <td style="font-size: 16px;font-family:normal; text-align:center;">   
		<div class="btn-group">
        <button  style="font-size:16px;font-family:normal;color:white;background-color:#00BFFF;" title="Détails des marchés" class="btn btn-info">Détails</button>                
	    </div>
    </td>
</tr> 
<?php
        }
    }else{
        echo'
        <tr>
            <td style="font-size:16px;font-weight:normal;" colspan = "4"><center>Aucune donnée saisie entre ces dates </center></td>
        </tr>';
    }
}else{
    $query=mysqli_query($conn, "SELECT  date_saisie , count(id_d_br) as Nbre_de_saisie FROM `d_br` group by  date_saisie order by date_saisie") or die(mysqli_error());
    while($fetch=mysqli_fetch_array($query)){
?>
<tr>


<!--     <td><!?php echo $fetch['centre']?></td>
    <td><!?php echo $fetch['id_agent']?></td> -->
    <th style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $i++ ?></th>
    <td style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $fetch['date_saisie']?></td>
    <td style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $fetch['Nbre_de_saisie']?></td>
    <td style="font-size: 16px;font-family:normal; text-align:center;">   
		<div class="btn-group">
        <button style="font-size:12px;color:white;" title="Détails des marchés" class="btn btn-info">Détails</button>                
	    </div>
    </td>
</tr>
<?php
    }
}
?>

