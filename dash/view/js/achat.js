//const cnii = document.getElement





$(document).ready(function() {
	
	
	$("#Re").keyup(function(){
		
		aff()
		})
    aff();
	
	affdM();
	AffMA();
	
	PosteAj();
	
	
	
	
	
});
$(function(){
	 
$('<div id="ppp"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
$('<div id="pa"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
 $('<div id="add"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();

 $('<div id="dele"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
	 
 });


function aff(){
	
	var rr = $("#Re").val();
		$("#ppp").show();
	
	$.post("../controller/g_achat.php",{rr:""+rr+""},function(data){
		
		$("#ppp").hide();
			
		$("#tbl").html(data);
		
		
		
		
		});
	
}
function affdM(){
	
	var g=$("#getid").val();
	var rr = 1;
	
	$.post("../controller/g_de_achat.php",{ent:""+rr+"",idd:""+g+""},function(data){
		
		
			
		$("#entet").html(data);
		
		
		
		
		});
}

function edit_marche(mod){
	$('#ctr').hide();
$("#dele").show();
	$.post('../controller/g_achat.php',{modi_marche:""+mod+""},function(data){
		$("#dele").hide();		 
		$('#ctr').show();
 $("#tbl").html(data);

});	
}



function AffMA(){
	
	var g=$("#getid").val();
	var rr = 1;
	
	$.post("../controller/g_de_achat.php",{tbl:""+rr+"",id:""+g+""},function(data){
		
		
			
		$("#tbll").html(data);
		
		
		
		
		});
	
}


function deletA(rr){
	
	let timerInterval

 var ok= Swal.fire({
	title: '<h3>Confirmer la suppression de ce marché ?</h3>',
	position:'top',
	width: 600,
	padding: '3em',
	icon: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	confirmButtonText: '<h4>Confirmer</h4>',
	cancelButtonText: '<h4>Annuler</h4>'
}).then((result) => {
  if (result.isConfirmed) {
	//start_load()
	$.post("../controller/g_achat.php",{supp:""+rr+""},function(data){
			 
	    
		swal.fire({
			position: 'top',
			icon: 'success',
			title: '<h3><b>La suppression est effectuée</h3>',
			//showConfirmButton: true,
			width: 600,
			  padding: '3em',
			showCancelButton: true,
			confirmButtonColor: 'white',
			cancelButtonColor: 'green',
			 cancelButtonText: '<h3>Ajouter un nouveau marché</h3>',
			confirmButtonText: '<a href="../view/menu.php?page=marche"><h3>Verifier les marchés</h3></a>',
			footer: '<a style="text-align: right;" href="../../logout.php"><h3 style="text-align:right;">Se deconnecter<h3></a>'
	}).then(function() {
		window.location = "../view/menu.php?page=marche";
	});
			
		 
	   
	   });
    
  }
});
		  $("#tbl").html(data);
if(ok){
	    
	$.post("../controller/g_achat.php",{supp:""+rr+""},function(data){
	 $("#tbl").html(data);
	
	});
		
} 
 
	
}


 
	







function delet(rr){
	
	var ok =confirm("vous-Etes sûr de vouloir supprimer cette entrée?");
	if(ok){
	
	var g=$("#getid").val();
	
	
	$.post("../controller/g_de_achat.php",{iddA:""+rr+"",idA:""+g+""},function(data){
		
		
			
		$("#tbll").html(data);
		
		
		
		
		});
	
	}
}


function PosteAj(){
	
	
	var rr=1;
	
	$.post("../controller/g_de_achat.php",{paj:""+rr+""},function(data){
		
		
			
		$("#ajou").html(data);
		
		
		
		
		});
	
}



function AjouDetBL(){
	
	var g=$("#getid").val();
    var dt=$("#dt").val();
	var ctri=$("#ctri").val();
	var agti=$("#agti").val();	
	var imi=$("#imi").val();
	var dapi=$("#dapi").val();
	var deni=$("#deni").val();
	var moi=$("#moi").val();
	var mmhti=$("#mmhti").val();
	var mmttci=$("#mmttci").val();
	var nini=$("#nini").val();
	var dati=$("#dati").val();

	var adri=$("#adri").val();
	var cnii=$("#cnii").val();
	var cniei=$("#cniei").val();
	var ddcnii=$("#ddcnii").val();
	
	var ppoi=$("#ppoi").val();
	var ddppoi=$("#ddppoi").val();
	var tel1i=$("#tel1i").val();
	var tel2i=$("#tel2i").val();
	var rib1i=$("#rib1i").val();

	var rib2i=$("#rib2i").val();
	var cmti=$("#cmti").val();
	
	//var conf = confirm("Are you sure")
	
	/* if(imi == '' || imi == null){
		document.getElementById("imiid").innerHTML =  "<span style='color: red;'><h5 style='font-size:12px;font-family:sans-serif;font-weight:normal;'>Ce champs est obligatoire</h5></span>";
	}

	else if (mmttci == '') {
		document.getElementById("mmttc").innerHTML = "<span style='color: red;'><h5 style='font-size:12px;font-family:sans-serif;font-weight:normal;'>Ce champs ne peut contenir que des valeurs numérque<BR></span>";
	  }
	
	 
	  else if (nini == '' || nini == null) {
		document.getElementById("ninea").innerHTML =  "<span style='color: red;'><h5 style='font-size:12px;font-family:sans-serif;font-weight:normal;'>Ce champs n'est pas correctement renseigner</h5></span>";
	  }
	else if(adri == '' || adri == null) {
		document.getElementById("adr").innerHTML = "<span style='color: red;'><h5 style='font-size:12px;font-family:sans-serif;font-weight:normal;'>Ce champs est obligatoire<br></h5></span>";	
	}
	else */ 
	  if (adri == '' || adri == null) {

		document.getElementById("adri").style.boxShadow = "0 0 5px red" ;
		document.getElementById("adri").style.borderColor = "none";
		document.getElementById("adr").style.boxShadow = "0 0 5px red";
		document.getElementById("adr").style.borderColor = "none";
		document.getElementById("adr").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("adr_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Ce champs est obligatoire</h5></span>";
	 

	  }

	 else if (imi == '' || imi == null) {

		document.getElementById("imi").style.boxShadow = "0 0 5px red" ;
		document.getElementById("imi").style.borderColor = "none";
		document.getElementById("imiid").style.boxShadow = "0 0 5px red";
		document.getElementById("imiid").style.borderColor = "none";
		document.getElementById("imiid").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("im_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Ce champs est obligatoire</h5></span>";
	 

	  }
	 
	 else if (tel2i != "" && tel2i.length != 9) {
		document.getElementById("tel2i").style.boxShadow = "0 0 5px red" ;
		document.getElementById("tel2i").style.borderColor = "none";
		document.getElementById("tel2").style.boxShadow = "0 0 5px red";
		document.getElementById("tel2").style.borderColor = "none";
		document.getElementById("tel2").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("tel2_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le numéro de téléphone doit comporter 9 chiffres et doit obligatoirement débuté par un opérateur téléphonique</h5></span>";
	 
	}
	else if (tel2i != '' && tel2i != null && tel2i.substr(0,2) != '77' && tel2i.substr(0,2) != '76' && tel2i.substr(0,2) != '70' && tel2i.substr(0,2) != '78' && tel2i.substr(0,2) != '33' && tel2i.substr(0,2) != '75') {
		document.getElementById("tel2i").style.boxShadow = "0 0 5px red" ;
		document.getElementById("tel2i").style.borderColor = "none";
		document.getElementById("tel2").style.boxShadow = "0 0 5px red";
		document.getElementById("tel2").style.borderColor = "none";
		document.getElementById("tel2").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("tel2_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le numéro de téléphone doit comporter 9 chiffres et doit obligatoirement débuté par un opérateur téléphonique</h5></span>";
	 
	  }
	  else if (tel1i != "" && tel1i.length != 9) {
		document.getElementById("tel1i").style.boxShadow = "0 0 5px red" ;
		document.getElementById("tel1i").style.borderColor = "none";
		document.getElementById("tel1").style.boxShadow = "0 0 5px red";
		document.getElementById("tel1").style.borderColor = "none";
		document.getElementById("tel1").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("tel1_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le numéro de téléphone doit comporter 9 chiffres et doit obligatoirement débuté par un opérateur téléphonique</h5></span>";
	 
	}
	else if (tel1i != '' && tel1i != null && tel1.substr(0,2) != '77' && tel1i.substr(0,2) != '76' && tel1i.substr(0,2) != '70' && tel1i.substr(0,2) != '78' && tel1i.substr(0,2) != '33' && tel1i.substr(0,2) != '75') {
		document.getElementById("tel1i").style.boxShadow = "0 0 5px red" ;
		document.getElementById("tel1i").style.borderColor = "none";
		document.getElementById("tel1").style.boxShadow = "0 0 5px red";
		document.getElementById("tel1").style.borderColor = "none";
		document.getElementById("tel1").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("tel1_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le numéro de téléphone doit comporter 9 chiffres et doit obligatoirement débuté par un opérateur téléphonique</h5></span>";
	 
	  }
	else if (nini != "" && nini.length != 9) {
		document.getElementById("nini").style.boxShadow = "0 0 5px red" ;
		document.getElementById("ninea").style.boxShadow = "0 0 5px red";
		document.getElementById("nini").style.borderColor = "none";
		document.getElementById("ninea").style.borderColor = "none";
		document.getElementById("ninea").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("ninea_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le NNEA doit comporter 9 chiffres et doit obligatoirement commencé par 00 </h5></span>";
	}
	else if(nini.substr(0,2) !== '00' && nini != "" )  {
		document.getElementById("nini").style.boxShadow = "0 0 5px red" ;
		document.getElementById("ninea").style.boxShadow = "0 0 5px red";
		document.getElementById("nini").style.borderColor = "none";
		document.getElementById("ninea").style.borderColor = "none";
		document.getElementById("ninea").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("ninea_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le NNEA doit comporter 9 chiffres et doit obligatoirement commencé par 00</h5></span>";
	}

	 
	 else if ((cnii == "SN" && cniei.length != 13) ) {
		document.getElementById("cniei").style.boxShadow = "0 0 5px red" ;
		document.getElementById("cniei").style.borderColor = "none";
		document.getElementById("cni").style.boxShadow = "0 0 5px red";
		document.getElementById("cni").style.borderColor = "none";
		document.getElementById("cni").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("cni_test").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le numéro CNI de type SN doit comporter comporter 13 chiffres</h5></span>";
	 }
	 else if (cnii == "CEDEAO" && cniei.length != 17) {
		document.getElementById("cniei").style.boxShadow = "0 0 5px red" ;
		document.getElementById("cniei").style.borderColor = "none";
		document.getElementById("cni").style.boxShadow = "0 0 5px red";
		document.getElementById("cni").style.borderColor = "none";
		document.getElementById("cni").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("cni_test").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le numéro CNI de type CEDEAO doit comporter comporter 17 chiffres</h5></span>";
	
	 }
	 else if ((ppoi!="" && ppoi.length != 9)) {

		document.getElementById("ppoi").style.boxShadow = "0 0 5px red" ;
		document.getElementById("ppo").style.boxShadow = "0 0 5px red";
		document.getElementById("ppoi").style.borderColor = "none";
		document.getElementById("ppo").style.borderColor = "none";
		document.getElementById("ppo").innerHTML = "<span style='color: red;FONT-size:15px;'><i class='fas fa-exclamation-circle'></i></span>";
		document.getElementById("ppo_reset").innerHTML =	"<span style='color: red;'><h5 style='font-size:12px;font-family : Arial, Helvetica, sans-serif;font-weight:bold;'>Le numéro de passeport doit comporter 9 chiffres </h5></span>";
		} 

	  else  if (nini == '' && cniei == '' && ppoi == '') {
		Swal.fire({
			//position: 'top',
			width: 400,
  			padding: '2em',
			icon: 'error',
			title: "<h5 fa exclamation-circle  style='color:red;font-size:16px'>&nbsp;&nbsp;" + "Veuillez entrer au moins un numéro d'identification (NINEA ou CNI ou Passeport) !!!" + "</h5>",
			//text: "<h5 fa exclamation-circle  style='color:red;font-size:16px'>&nbsp;&nbsp;" + "Veuillez entrer au moins un numéro de Téléphone" + "</h5>",
			showConfirmButton: true
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  }
	  else if (tel1i == '' && tel2i == '') {
		Swal.fire({
			//position: 'top',
			width: 400,
  			padding: '2em',
			icon: 'error',
			title: "<h5 fa exclamation-circle  style='color:red;font-size:16px'>&nbsp;&nbsp;" + "Veuillez entrer au moins un numéro de Téléphone !!!" + "</h5>",
			//text: "<h5 fa exclamation-circle  style='color:red;font-size:16px'>&nbsp;&nbsp;" + "Veuillez entrer au moins un numéro de Téléphone" + "</h5>",
			showConfirmButton: true
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  }
	  
	
	 

	 /* if (tel1i != '' && tel1i != null && tel1i.substr(0,2) != '77' && tel1i.substr(0,2) != '76' && tel1i.substr(0,2) != '70' && tel1i.substr(0,2) != '78' && tel1i.substr(0,2) != '33' && tel1i.substr(0,2) != '75') {
		Swal.fire({
			position: 'top',
			width: 250,
 		    padding: 10,
			//icon: 'error',
			title: "<i class='fa fa-exclamation ' style='font-size:12px;color:red'></i><h5 fa exclamation-circle  style='color:red'>&nbsp;&nbsp;" + "Veuillez entrer un bon numéro" + "</h5>",
			//text: 'Vous devez selectionner un NINEA !!!',
			showConfirmButton: false
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  } */
	  /* if (tel2i != '' && tel2i != null && tel2i.substr(0,2) != '77' && tel2i.substr(0,2) != '76' && tel2i.substr(0,2) != '70' && tel2i.substr(0,2) != '78' && tel2i.substr(0,2) != '33' && tel2i.substr(0,2) != '75') {
		Swal.fire({
			position: 'top',
			width: 250,
 		    padding: 10,
			//icon: 'error',
			title: "<i class='fa fa-exclamation ' style='font-size:12px;color:red'></i><h5 fa exclamation-circle  style='color:red'>&nbsp;&nbsp;" + "Veuillez entrer un bon numéro" + "</h5>",
			//text: 'Vous devez selectionner un NINEA !!!',
			showConfirmButton: false
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  } */

	 /* else if (tel1i == '' && tel2i == '') {
		Swal.fire({
			position: 'top',
			width: 250,
 		    padding: 10,
			//icon: 'error',
			title: "<i class='fa fa-exclamation ' style='font-size:12px;color:red'></i><h5 fa exclamation-circle  style='color:red'>&nbsp;&nbsp;" + "Veuillez entrer au moins un numéro" + "</h5>",
			//text: 'Vous devez selectionner un NINEA !!!',
			showConfirmButton: false
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  }
	  else if (cnii == "SN" && cniei.length != 13) {
		Swal.fire({
			position: 'top',
			width: 250,
 		    padding: 10,
			//icon: 'error',
			title: "<i class='fa fa-exclamation ' style='font-size:12px;color:red'></i><h5 fa exclamation-circle  style='color:red'>&nbsp;&nbsp;" + "Le cni senegalais doit comporter 13 chiffres " + "</h5>",
			//text: 'Vous devez selectionner un NINEA !!!',
			showConfirmButton: false
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  }
	  else if (cnii == "CEDEAO" && cniei.length != 17) {
		Swal.fire({
			position: 'top',
			width: 250,
 		    padding: 10,
			//icon: 'error',
			title: "<i class='fa fa-exclamation ' style='font-size:12px;color:red'></i><h5 fa exclamation-circle  style='color:red'>&nbsp;&nbsp;" + "Le cni CEDEAO doit comporter 17 chiffres " + "</h5>",
			//text: 'Vous devez selectionner un NINEA !!!',
			showConfirmButton: false
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  }
	  else if (nini != '' && nini != null && nini.substr(0,2) != '00') {
		Swal.fire({
			position: 'top',
			width: 250,
 		    padding: 10,
			//icon: 'error',
			title: "<i class='fa fa-exclamation ' style='font-size:12px;color:red'></i><h5 fa exclamation-circle  style='color:red'>&nbsp;&nbsp;" + "Veuillez entrer un bon ninea" + "</h5>",
			//text: 'Vous devez selectionner un NINEA !!!',
			showConfirmButton: false
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  } */

	  /* else if (cnii == 'Selectionner Type CNI') {

		Swal.fire({
			position: 'top',
			icon: 'error',
			title: 'Attention !!!',
			text: 'Vous devez selectionner un CNI !!!',
			showConfirmButton: true,
			//footer: '<a href="">Why do I have this issue?</a>'
		  })

	  } */

	 /*  else if (cnii == 'SN' && cniei.length < 9 ) {
		Swal.fire({
			position: 'top',
			icon: 'error',
			title: 'Attention !!!',
			text: 'Le CNI senegal doit etre egale à 9 char !!!',
			showConfirmButton: true,
			//footer: '<a href="">Why do I have this issue?</a>'
		  })
	  } */

	
else  
		

 var ok= Swal.fire({
  title: '<h3>Confirmer la saisie de ce marché ?</h3>',
  //position:'top-end',
  width: 600,
  padding: '3em',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '<h4>Confirmer</h4>',
  cancelButtonText: '<h4>Annuler</h4>'
}).then((result) => {
  if (result.isConfirmed) {
	//start_load()
	$.post("../controller/g_de_achat.php",{
		
		gid:""+g+"",
		dt:""+dt+"",
		ctri:""+ctri+"",
		agti:""+agti+"",
		imi:""+imi+"",
		dapi:""+dapi+"",
		deni:""+deni+"",
		moi:""+moi+"",
		mmhti:""+mmhti+"",
		mmttci:""+mmttci+"",
		nini:""+nini+"",
		dati:""+dati+"",
		adri:""+adri+"",
		cnii:""+cnii+"",
		cniei:""+cniei+"",
		ddcnii:""+ddcnii+"",
		ppoi:""+ppoi+"",
		ddppoi:""+ddppoi+"",
		tel1i:""+tel1i+"",
		tel2i:""+tel2i+"",
		rib1i:""+rib1i+"",
		rib2i:""+rib2i+"",
		cmti:""+cmti+""
	},function(data){
			 
	    
		swal.fire({
				//position: 'top',
				icon: 'success',
				title: '<h3><b>La sasie est effectué</h3>',
				//showConfirmButton: true,
				width: 600,
  				padding: '3em',
				showCancelButton: true,
				confirmButtonColor: 'white',
				cancelButtonColor: 'green',
 			    cancelButtonText: '<h3>Ajouter un nouveau marché</h3>',
				confirmButtonText: '<a href="../view/menu.php?page=marche"><h3>Verifier la saisie </h3></a>',
				footer: '<a style="text-align: right;" href="../../logout.php"><h3 style="text-align:right;">Se deconnecter<h3></a>'
		}).then(function() {
			window.location = "../view/menu.php?page=d_marche";
		});
			
			   
	   
	   });
	   
	   
    
  }
  
}) 
 
 
		 
}
function affdiv(){
	var rr=1;
	
	$.post("../controller/g_achat.php",{di:""+rr+""},function(data){
		
		
			
		$("#ajj").html(data);
		
		
		
		
		});
	
}

function addA(){
	
	var forni= $("#for").val();
	var dt= $("#dt").val();
	
	
	$.post("../controller/g_achat.php",{fo:""+forni+"",dt:""+dt+""},function(data){
		
		
			
		$("#tbl").html(data);
		
		
		
		
		});
	
	
	
}
function lookup(val){
	
	
	if(val.length==0){
		
		$("#divAll").hide();
		
	}else{
		
		$.post("../controller/g_de_achat.php",{vl:val},function(data){
			
			
			$("#divAll").show();
		     $("#aff").html(data);
			
			
			});
		
		
	}
	
	
	
	
}

function fill(idd,cdb,des,fo,fa,px){
	$("#idm").val(idd);
	$("#cb").val(cdb);
	$("#des").val(des);
	$("#fo").val(fo);
	$("#fam").val(fa);
	$("#pxu").val(px);
	
		$("#divAll").hide();
	
	
}





function pagination(pages){
	$("#pa").show();
		
		var rr  = $("#Re").val();
	
		
	
	$.post('../controller/g_achat.php',{page:pages,rr:""+rr+""},function(data){
	
	$("#pa").hide();
	
	 $("#tbl").html(data);
	
	});
		
	}

//les fonctions view delet edit
function delet(param){
	let timerInterval
	
	 var ok= Swal.fire({
	  title: 'Confirmer la suppression de cet agent ?',
	  position:'top',
	   
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Confirmer',
	  cancelButtonText: 'Annuler'
	}).then((result) => {
	  if (result.isConfirmed) {
		start_load()
		$.post('../controller/g_achat.php',{delet:""+param+""},function(data){
				 
			
			return	setTimeout(function(){
					location.reload()
				},6000,Swal.fire({
					position: 'top',
					icon: 'success',
					title: 'Votre suppression est effectué',
					showConfirmButton: false,
					//timer: 4000,
					//footer: '<a href="">Why do I have this issue?</a>'
				  }))
				
			 
		   
		   });
		
	  }
	});
			  $("#tbl").html(data);
	if(ok){
			
			$.post('../controller/g_achat.php',{delet:""+param+""},function(data){
		 $("#tbl").html(data);
		
		});
			
	} 
	 
		
	}

	




















