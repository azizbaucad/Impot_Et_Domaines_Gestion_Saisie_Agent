<script type="text/javascript">


jQuery(function(){
	
	
	var v =jQuery("#ff").validate({
		
		submitHandler:function(form){
			
			jQuery(form).ajaxSubmit({
				target:"#reponse"
				});
		}
		});


    
		
   
});


$(document).ready(function() {
	
	
	$('.form-control').keyup( function(){
		
		
		document.getElementById('AjCpt').disabled=false;
		
		});
		
		
		
		$('.form-control').change( function(){
		
		
		document.getElementById('AjCpt').disabled=false;
		});
		
		
		
		
	
    $('form').submit(function(){
		
		 $(':submit',this).attr('disabled','disabled');
			  $("#nom").val('');
			  $("#pre").val('');
			  $("#lg").val('');
			  $("#pass").val('');
        $("#ctre").val('');
			
		 
		 });
		 

			$('.form-control').keyup( function(){
				$("#al").hide(50);
				
				});
	
	
	
	
	
	
	
	
	
	
	
	

}); 
</script>





<h3>L'Ajout de Compte</h3>

<form align="center" class="form-horizontal" id="ff" action="../controller/g_compte.php" method="post">
<div id="reponse"></div>
  
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Login<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="lg" id="lg"  required="" placeholder="Login">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nom<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nom" id="nom"  required="" placeholder="Nom">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Prenom</label>
    <div class="col-xs-4">
      <input type="text" class="form-control "  name="pre" id="pre" placeholder="Prenom">
    </div>
  </div>
  
  
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control "  name="pass" id="pass" required="" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Centre<em>*</em></label>
    <div class="col-xs-4">
    
      <select name="ctre" id="ctre">
        <option value="PA">PA</option>
        <option value="GW">GW</option>
        <option value="DK">DK</option>
      </select>


    </div>
  </div>
  
  
  
  
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input align="center" type="submit" id="AjCpt" name="AjCpt"  class="btn btn-success" value="Ajouter"  />&ensp; <input type="reset"  class="btn btn-default" onClick="window.location.href='../view/index.php?page=compte'" value="Annuler" />
    </div>
  </div>
</form>


  
   
  
  
  
  
  
  
  
  