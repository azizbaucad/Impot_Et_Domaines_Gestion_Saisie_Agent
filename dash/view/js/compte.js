$(document).ready(function() {
	
	$("#Re").keyup(function(){
		
		afficher()
		})
     afficher()
});		
$(function(){
	 
$('<div id="ppp"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
$('<div id="pa"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
 $('<div id="add"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();

 $('<div id="dele"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
	 
 });	
		
	
	
function afficher(){
	
	var re  =$("#Re").val();
	$("#ppp").show();
	
	$.post('../controller/g_compte.php',{recherch:""+re+""},function(data){
	$("#ppp").hide();
	 $("#tbl").html(data);
	
	});
		
}





function pagination(pages){
		
		var re  = $("#Re").val();
	  
		$("#pa").show();
	
	$.post('../controller/g_compte.php',{page:pages,recherch:re},function(data){
	$("#pa").hide();
	 $("#tbl").html(data);
	
	});
		
	}
function cacher(){
		
		
			 $('#ctr').hide();
		
	}
	

	
	
	function affForm(){
		
	$("#add").show();
		 var ff =1;
		 
		$.post('../controller/g_compte.php',{cpt:""+ff+""},function(data){
	$("#add").hide();
	 $("#tbl").html(data);
	
	});
		
		
		
		
	}
	
	
	
	function edit(mod){
	    $('#ctr').hide();
	$("#dele").show();
		$.post('../controller/g_compte.php',{modi:""+mod+""},function(data){
			$("#dele").hide();		 
			$('#ctr').show();
	 $("#tbl").html(data);
	
	});	
}

function edit0(mod){
	$('#ctr').hide();
 
	$.post('../controller/g_compte.php',{vis:""+mod+""},function(data){
		 	 
		$('#ctr').show();
 $("#tbl").html(data);

});	
}
	
	
	
	
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
	$.post('../controller/g_compte.php',{delet:""+param+""},function(data){
			 
	    
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
	    
		$.post('../controller/g_compte.php',{delet:""+param+""},function(data){
	 $("#tbl").html(data);
	
	});
		
} 
 
	
}
	
	
	
	
	
	
	
	
	
	
	