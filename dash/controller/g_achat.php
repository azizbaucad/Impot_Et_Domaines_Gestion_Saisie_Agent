<!--?php include'db_connect.php' ?-->
<?php
          session_start();
       ?>
<?php if(isset($_POST['rr'])) { ?>
<?php 
$conn= new mysqli('localhost','root','','positronx_db')or die("Could not connect to mysql".mysqli_error($con));
?>

</br>
<div class="col-lg-12">
	<div class="card card-inline"  >
		<div class="card-header card-fixed" style="background-color :#987654;color:white;"><p style="font-size:16px;font-weight:normal;">Liste des marchés</p>
		<div class="card-tools">
	  <a style="color:white;font-size:14px;font-weight:normal;" class="btn btn-info" title="Ajouter" href="menu.php?page=d_marche"><i class="fa fa-plus"></i>Ajouter un nouveau marché</a>   
    </div>
	</div>
    <div class="card-body">
    <style>
        .thead {
  position: fixed;
}
#list{}
#list th, td {
white-space: nowrap;

}
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
table,th,td {
     
}
    </style>
    <!-- <div>
        Toggle column: <option><a class="toggle-vis" data-column="0">#</a> - <a class="Centre" data-column="1">Position</a> - <a class="toggle-vis" data-column="2">Office</a> - <a class="toggle-vis" data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis" data-column="5">Salary</a></option>
    </div> -->
    <div class="col-md-4 mb-3">
						Filtrer les colonnes
						<select class="form-control" id="type_ppoi" style="width: 45%;">
 						 <option>Selectionner les colonnes</option>
 						 <option class="toggle-vis" data-column="0">#</option>
 						 <option class="toggle-vis" data-column="1">Centre</option>
 						 <option class="toggle-vis" data-column="2">Numéro Agent</option>
                         
                         <option class="toggle-vis" data-column="3">Intitulé Marché</option>
                         <option class="toggle-vis" data-column="4">Date approbation</option>
 						 <option class="toggle-vis" data-column="5">Date enregistrement</option>
 						 <option class="toggle-vis" data-column="6">Montant Marché HT</option>
                         <option class="toggle-vis" data-column="7">Montant Marché TTC</option>
                         <option class="toggle-vis" data-column="8">NINEA</option>
                         <option class="toggle-vis" data-column="9">Date attribution</option>
                         <option class="toggle-vis" data-column="10">Adresse</option>
                         <option class="toggle-vis" data-column="11">Type CNI</option>
 						 <option class="toggle-vis" data-column="12">CNI</option>
 						 <option class="toggle-vis" data-column="13">Date enregistrement CNI</option>
                          
                         <option class="toggle-vis" data-column="14">Passeport</option>
                         <option class="toggle-vis" data-column="15">Date enregistrement passeport</option>
                         <option class="toggle-vis" data-column="16">Téléphone1</option>
                         <option class="toggle-vis" data-column="17">Téléphone2</option>
 						 <option class="toggle-vis" data-column="18">Rib1</option>
 						 <option class="toggle-vis" data-column="19">Rib2</option>
                         <option class="toggle-vis" data-column="20">Commentaires</option>
                         <option class="toggle-vis" data-column="21">Actions</option>
						</select></div>
		 
			<table id="list" class="display" width="100%">
				<thead class="alert-info">
					<tr>
						 
						<th style="font-size: 16px;font-family:normal; text-align:center;">#</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Centre</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Numéro Agent</th>
						 
						<th style="font-size: 16px;font-family:normal; text-align:center;">Intitulé Marché</th>
						 
						<th style="font-size: 16px;font-family:normal; text-align:center;">Date approbation</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Date enregistrement</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Montant Marché HT</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Montant Marché TTC</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">NINEA</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Date attribution</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Adresse</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Type CNI</th>
						 
						<th style="font-size: 16px;font-family:normal; text-align:center;">CNI</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Date enregistrement CNI</th>
                         
						<th style="font-size: 16px;font-family:normal; text-align:center;">Passeport</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Date enregistrement passeport</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Telephone 1</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Telephone 2</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Rib 1</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Rib 2</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Commentaires</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Action</th>
					</tr>
				</thead>
				<tbody>
				
					<?php
					$i = 1;
                    $num_agent = $_SESSION['num_agent'] ;
					//$type = array('',"Admin","User");
					$qry = $conn->query("SELECT * from d_br where agent = '$num_agent'");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
					 
					  <style>.text{
						  font-family:;
						  font-weight: normal;
                          height:1px ;
					  }
					  .tab{
						  table-layout: fixed;
					  }
                      .fix {
  background: white;
  position: sticky;
  top: 0;
}
					  </style>
						 
						<th style="font-size: 16px;font-family:normal; text-align:center;" id="fix" class="text"><?php echo $i++ ?></th>
						<td style="font-size: 16px;font-family:normal; text-align:center;"><h6 style="font-size: 16px;font-family:normal; text-align:center;"><?php echo ucwords($row['centre']) ?></h6></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="fw-normal"><p class="fw-normal"><?php echo $row['agent'] ?></p></td>
						 
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['im'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['dap'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['den'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['mmht'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['mmttc'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['nin'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['dat'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['adr'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php if($row['cni'] == null): echo '' ;  ?>
						<?php endif; ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['cnie'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['ddcni'] ?></td>
                        
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['ppo'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['ddppo'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['tel1'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['tel2'] ?></td>
                        <td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['rib1'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['rib2'] ?></td>
                        <td style="font-size: 16px;font-family:normal; text-align:center;" class="text"><?php echo $row['cmt'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text-center">   
					<div class="btn-group">
                               <a style="font-size: 16px;font-family:normal; text-align:center;" onclick="javascript:edit_marche(<?php  echo $row['id_d_br']; ?>)" title="Modifier" class="btn btn-primary btn-flat">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <!-- <a  onclick="javascript:edit0(<!?php  echo $row['id_d_br']; ?>)"  class="btn btn-info btn-flat">
		                          <i class="fas fa-eye"></i>
		                        </a> -->
								<a style="font-size: 16px;font-family:normal; text-align:center;"  onclick="javascript:deletA(<?php  echo $row['id_d_br'];; ?>)" title="Supprimer"  class="btn btn-danger btn-flat">
		                          <i class="fas fa-trash"></i>
		                        </a>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
 
</div>
<?php } ?>

<!-**************************************************La suppression  Achat*************************************->
    
    
     <?php if(isset($_POST['supp'])){
     
     include('../Model/achat.class.php');
       
		 
		 Achat::DeByIdA($_POST['supp']);
		 
			echo "<script>location.href='../view/menu.php?page=achat';</script>";
    
 } ?>

 <!--Afficher La fonction Modi-->
 

<?php

if(isset($_POST['modi_marche'])){
			  
		
	include('../include/modmarche.php');
   
	   }
 ?>
 <!-- La fonction Modification de compte -->
<?php 
    
	if(isset($_POST['ModCpt'])){
	
	include_once '../Model/d_marche.class.php';
	
	$cpt = new D_Marche($_POST['idd'],$_POST['imi'],$_POST['dapi']);
	
	$ok=$cpt->Edit();

    echo '<script language="javascript">';
    echo 'alert("Modification réussi !!!")';
    echo '</script>';
	 
	echo "<script>location.href='../view/menu.php?page=achat';</script>";
	
	 } 
?>


 <!-- La fonction Delet-->
 <?php
   if(isset($_POST['delet'])){
	
	include_once '../Model/compte.class.php';
	
	 
	 Compte::delet($_POST['delet']);
	  
	   echo "<script>location.href='../view/menu.php?page=compte';</script>";
	 
	 
	 }
     
  ?>
    
<style>
    .pull-right{float:left!important;position: center;}
.pull-left{float:right!important;}
</style>










<script type="text/javascript">
	$(document).ready(function() {
		var table = $('#list').DataTable({

            "columnDefs": [
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 3 ],
                "visible": false
            }
        ],

            //scrollX: true, //Scrollen in der x-Achse ist möglich
                   // paging: false, //Es ist möglich die Einträge der Tabelle auf mehrere Seiten zu packen, aber das ist hier unnötig.
                    //"scrollY": "80%", //Scrollen in der y-Achse ist ebenfalls möglich -> Statt paging.
                    
      
                    "scrollX": true,
                    "scrollY":        '50vh',
                    "scrollCollapse": true,
        
			 
                     "dom": '<"pull-right"f><"pull-left"l>Brtip',
        buttons: [
             
            'excelHtml5'
              
        ],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tout"]],
          




          "language" : {

			"emptyTable": "Aucune donnée disponible dans le tableau",
    "lengthMenu": "Afficher _MENU_ éléments",
    "loadingRecords": "Chargement...",
    "processing": "Traitement...",
    "zeroRecords": "Aucun élément correspondant trouvé",
    "paginate": {
        "first": "Premier",
        "last": "Dernier",
        "previous": "Précédent",
        "next": "Suivant"
    },
    "aria": {
        "sortAscending": ": activer pour trier la colonne par ordre croissant",
        "sortDescending": ": activer pour trier la colonne par ordre décroissant"
    },
    "select": {
        "rows": {
            "_": "%d lignes sélectionnées",
            "1": "1 ligne sélectionnée"
        },
        "cells": {
            "1": "1 cellule sélectionnée",
            "_": "%d cellules sélectionnées"
        },
        "columns": {
            "1": "1 colonne sélectionnée",
            "_": "%d colonnes sélectionnées"
        }
    },
    "autoFill": {
        "cancel": "Annuler",
        "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
        "fillHorizontal": "Remplir les cellules horizontalement",
        "fillVertical": "Remplir les cellules verticalement"
    },
    "searchBuilder": {
        "conditions": {
            "date": {
                "after": "Après le",
                "before": "Avant le",
                "between": "Entre",
                "empty": "Vide",
                "equals": "Egal à",
                "not": "Différent de",
                "notBetween": "Pas entre",
                "notEmpty": "Non vide"
            },
            "number": {
                "between": "Entre",
                "empty": "Vide",
                "equals": "Egal à",
                "gt": "Supérieur à",
                "gte": "Supérieur ou égal à",
                "lt": "Inférieur à",
                "lte": "Inférieur ou égal à",
                "not": "Différent de",
                "notBetween": "Pas entre",
                "notEmpty": "Non vide"
            },
            "string": {
                "contains": "Contient",
                "empty": "Vide",
                "endsWith": "Se termine par",
                "equals": "Egal à",
                "not": "Différent de",
                "notEmpty": "Non vide",
                "startsWith": "Commence par"
            },
            "array": {
                "equals": "Egal à",
                "empty": "Vide",
                "contains": "Contient",
                "not": "Différent de",
                "notEmpty": "Non vide",
                "without": "Sans"
            }
        },
        "add": "Ajouter une condition",
        "button": {
            "0": "Recherche avancée",
            "_": "Recherche avancée (%d)"
        },
        "clearAll": "Effacer tout",
        "condition": "Condition",
        "data": "Donnée",
        "deleteTitle": "Supprimer la règle de filtrage",
        "logicAnd": "Et",
        "logicOr": "Ou",
        "title": {
            "0": "Recherche avancée",
            "_": "Recherche avancée (%d)"
        },
        "value": "Valeur"
    },
    "searchPanes": {
        "clearMessage": "Effacer tout",
        "count": "{total}",
        "title": "Filtres actifs - %d",
        "collapse": {
            "0": "Volet de recherche",
            "_": "Volet de recherche (%d)"
        },
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Pas de volet de recherche",
        "loadMessage": "Chargement du volet de recherche..."
    },
    "buttons": {
        "collection": "Collection",
        "colvis": "Visibilité colonnes",
        "colvisRestore": "Rétablir visibilité",
        "copy": "Copier",
        "copySuccess": {
            "1": "1 ligne copiée dans le presse-papier",
            "_": "%ds lignes copiées dans le presse-papier"
        },
        "copyTitle": "Copier dans le presse-papier",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Afficher toutes les lignes",
            "_": "Afficher %d lignes"
        },
        "pdf": "PDF",
        "print": "Imprimer",
        "copyKeys": "Appuyez sur ctrl ou u2318 + C pour copier les données du tableau dans votre presse-papier."
    },
    "decimal": ",",
    "info": "Affichage de _START_ à _END_ sur _TOTAL_ éléments",
    "infoEmpty": "Affichage de 0 à 0 sur 0 éléments",
    "infoThousands": ".",
    "search": "Rechercher:",
    "thousands": ".",
    "infoFiltered": "(filtrés depuis un total de _MAX_ éléments)",
    "datetime": {
        "previous": "Précédent",
        "next": "Suivant",
        "hours": "Heures",
        "minutes": "Minutes",
        "seconds": "Secondes",
        "unknown": "-",
        "amPm": [
            "am",
            "pm"
        ],
        "months": {
            "0": "Janvier",
            "2": "Mars",
            "3": "Avril",
            "4": "Mai",
            "5": "Juin",
            "6": "Juillet",
            "7": "Aout",
            "8": "Septembre",
            "9": "Octobre",
            "10": "Novembre",
            "1": "Février",
            "11": "Décembre"
        },
        "weekdays": [
            "Dim",
            "Lun",
            "Mar",
            "Mer",
            "Jeu",
            "Ven",
            "Sam"
        ]
    },
    "editor": {
        "close": "Fermer",
        "create": {
            "title": "Créer une nouvelle entrée",
            "submit": "Envoyer",
            "button": "Nouveau"
        },
        "edit": {
            "button": "Editer",
            "title": "Editer Entrée",
            "submit": "Modifier"
        },
        "remove": {
            "button": "Supprimer",
            "title": "Supprimer",
            "submit": "Supprimer",
            "confirm": {
                "_": "Êtes-vous sûr de vouloir supprimer %d lignes ?",
                "1": "Êtes-vous sûr de vouloir supprimer 1 ligne ?"
            }
        },
        "error": {
            "system": "Une erreur système s'est produite"
        },
        "multi": {
            "noMulti": "Ce champ peut être édité individuellement, mais ne fait pas partie d'un groupe. ",
            "info": "Les éléments sélectionnés contiennent différentes valeurs pour ce champ. Pour  modifier et ",
            "title": "Valeurs multiples",
            "restore": "Rétablir modification"
        }
    }

		  }
  




		});
        $('option.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    } );
        
        })
</script>