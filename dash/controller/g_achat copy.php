<!--?php include'db_connect.php' ?-->
<?php 
$conn= new mysqli('localhost','root','','positronx_db')or die("Could not connect to mysql".mysqli_error($con));
?>
<div class="col-lg-12">
	<div class="card card-inline card-info">
		<div class="card-header card-fixed"><h3>Liste des marchés</h3>
		<div class="card-tools">
	  <a class="btn btn-primary" href="menu.php?page=d_achat"><i class="fa fa-plus"></i>Ajouter un nouveau marché</a>   
    </div>
	</div>
     
		 
			<table  id="customer_data" style="width:100%" class="display nowrap" >
				<thead class="tab" style="background-color:#E8E8E8;">
					<tr>
						 
						<th class="text-center">#</th>
						<th>Centre</th>
						<th>N Agent</th>
						<th>ID Agent</th>
						<th>Intitulé Marché</th>
						 
						<th>Date approbation</th>
						<th>Date enregistrement</th>
						<th>Montant Marché HT</th>
						<th>Montant Marché TTC</th>
						<th>NINEA</th>
						<th>Date attribution</th>
						<th>Adresse</th>
						<th>Type CNI</th>
						 
						<th>CNI</th>
						<th>Date enregistrement CNI</th>
						<th>Passeport</th>
						<th>Date enregistrement passeport</th>
						<th>Telephone 1</th>
						<th>Telephone 2</th>
						<th>Rib 1</th>
						<th>Rib 2</th>
						<th>Commentaires</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				
					<?php
					$i = 1;
					//$type = array('',"Admin","User");
					$qry = $conn->query("SELECT * from d_br");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
					 
					  <style>.text{
						  font-family:verdana;
						  font-weight: normal;
					  }
					  #tab{
						  table-layout: fixed;
					  }
					  </style>
						 
						<th class="text"><?php echo $i++ ?></th>
						<td style="font-family:lucida"><h6 style="font-family:verdana"><?php echo ucwords($row['centre']) ?></h6></td>
						<td class="fw-normal"><p class="fw-normal"><?php echo $row['agent'] ?></p></td>
						<td class="text"><?php echo $row['id_agent'] ?></td>
						<td class="text"><?php echo $row['dap'] ?></td>
						<td class="text"><?php echo ucwords($row['centre']) ?></td>
						<td class="text"><?php echo $row['id_agent'] ?></td>
						<td class="text"><?php echo $row['im'] ?></td>
						<td class="text"><?php echo $row['dap'] ?></td>
						<td class="text"><?php echo ucwords($row['centre']) ?></td>
						<td class="text"><?php echo $row['id_agent'] ?></td>
						<td class="text"><?php echo $row['im'] ?></td>
						<td class="text"><?php echo $row['dap'] ?></td>
						<td class="text"><?php echo ucwords($row['centre']) ?></td>
						<td class="text"><?php echo $row['id_agent'] ?></td>
						<td class="text"><?php echo $row['im'] ?></td>
						<td class="text"><?php echo $row['dap'] ?></td>
						<td class="text"><?php echo ucwords($row['centre']) ?></td>
						<td class="text"><?php echo $row['id_agent'] ?></td>
						<td class="text"><?php echo $row['im'] ?></td>
						<td class="text"><?php echo $row['dap'] ?></td>
						<td class="text"><?php echo ucwords($row['centre']) ?></td>
						<td class="text-center">   
					<div class="btn-group">
					            <a  onclick="javascript:edit(<?php  echo $row['id_d_br']; ?>)" id="pop" class="btn btn-primary btn-flat">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <a  onclick="javascript:edit0(<?php  echo $row['id_d_br']; ?>)"  class="btn btn-info btn-flat">
		                          <i class="fas fa-eye"></i>
		                        </a>
								<a  onclick="javascript:deletA(<?php  echo $row['id_d_br'];; ?>)"  class="btn btn-danger btn-flat">
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


<!-**************************************************La suppression  Achat*************************************->
    
    
     <?php if(isset($_POST['supp'])){
     
     include('../Model/achat.class.php');
       
		 
		 Achat::DeByIdA($_POST['supp']);
		 
			echo "<script>location.href='../view/menu.php?page=achat';</script>";
    
 } ?>
    











<script type="text/javascript">
	$(document).ready(function() {
	 var table =	$('#customer_data').DataTable({
			 
            dom: 'lBfrtip',
        buttons: [
             'csv', 'excel' 
        ],
          




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
  




		})  ;
        new $.fn.dataTable.FixedHeader( table, {

        "fixedHeader": true
} );
         
        })
</script>