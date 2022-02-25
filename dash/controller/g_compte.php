<!--?php include'db_connect.php' ?-->
<?php if(isset($_POST['recherch'])) { ?>
<?php 
$conn= new mysqli('localhost','root','','positronx_db')or die("Could not connect to mysql".mysqli_error($con));
?>
<div class="col-lg-12">
	<div class="card card-inline card-primary">
		<div style="background-color:#987654;" class="main card-header"><b><h5>Liste des comptes</h5></b>
			<!--div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="index.php?page=d_achat"><i class="fa fa-plus"></i> Add New User</a>
			</div-->
		</div>
		<div class="card-body">
			<table class="table table-hover table-bordered table-responsive-sm table-striped" id="list">
				<thead style="background-color:#00BFFF; color:white;broder-color:white;">
					<tr class="text-center">
						 
						<th style="font-size: 16px;font-family:normal; text-align:center;">#</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Date création</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Prenom</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Nom</th>
						<!-- <th>Telephone</th> -->
						<th style="font-size: 16px;font-family:normal; text-align:center;">Centre</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Status</th>
						<th style="font-size: 16px;font-family:normal; text-align:center;">Action</th>
					</tr>
				</thead>
				<tbody>
				
					<?php
					$i = 1;
					//$type = array('',"Admin","User");
					$qry = $conn->query("SELECT * from users");
					while($row= $qry->fetch_assoc()):
					 
						 
					?>
					<tr align="center">
					 
						<th style="font-size: 16px;font-family:normal; text-align:center;"  class="text-center"><?php echo $i++ ?></th>
						<td style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $row['date_time'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $row['firstname'] ?> </td>
						<td style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $row['lastname'] ?></td>
						<!-- <td><!?php echo $row['mobilenumber'] ?></td> -->
						<td style="font-size: 16px;font-family:normal; text-align:center;"><?php echo $row['centre'] ?></td>
						<td style="font-size: 16px;font-family:normal; text-align:center;"><?php if($row['is_active'] == 1): echo '<button style="font-size: 16px;font-family:normal; text-align:center;" class="btn btn-success">Actif</button>'  ?>
						<?php else : echo '<button style="font-size: 16px;font-family:normal; text-align:center;" class="btn btn-danger">Désactif</button>'  ?><?php endif; ?></td>
					</td>
						<td style="font-size: 16px;font-family:normal; text-align:center;" class="text-center">   
					<div class="btn-group">
		                        <a style="font-size: 16px;font-family:normal; text-align:center;"  onclick="javascript:edit(<?php  echo $row['id']; ?>)" id="pop" title="Modifier" class="btn btn-primary btn-flat">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <a style="font-size: 16px;font-family:normal; text-align:center;" onclick="javascript:edit0(<?php  echo $row['id']; ?>)" title="Voir"  class="btn btn-info btn-flat">
		                          <i class="fas fa-eye"></i>
		                        </a>
								<a style="font-size: 16px;font-family:normal; text-align:center;"  onclick="javascript:delet(<?php  echo $row['id'];; ?>)" title="Supprimer"  class="btn btn-danger btn-flat">
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
						<!-- La fonction Ajout-->
<?php if(isset($_POST['AjCpt'])){
	
	include('../Model/compte.class.php');
		
		$cpt = new Compte(0,$_POST['lg'],$_POST['nom'],$_POST['pre'],$_POST['pass']);
		
		$ok=$cpt->Add();
		
		 echo '<div id="al">Bien Ajouter</div>';
		
	
		} ?>
		<!--Afficher La fonction Modi-->
<?php

if(isset($_POST['modi'])){
			  
		
	include('../include/ModCpt.php');
   
	   }
 ?>
<!-- La fonction Modification de compte -->
<?php 
    
	if(isset($_POST['ModCpt'])){
	
	include_once '../Model/compte.class.php';
	
	$cpt = new compte($_POST['idd'],$_POST['lg'],$_POST['nom']);
	
	$ok=$cpt->Edit();

    echo '<script language="javascript">';
    echo 'alert("Modification réussi !!!")';
    echo '</script>';
	 
	echo "<script>location.href='../view/menu.php?page=compte';</script>";
	
	 } 
?>

 <!-- La fonction Visualiser compte-->

 <?php

if(isset($_POST['vis'])){
			  
		
	include('../include/view.php');
   
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
<script>
	$(document).ready(function(){
		$('#list').dataTable({

          




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
  




		}) })
</script>

		