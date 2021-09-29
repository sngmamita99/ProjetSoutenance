<?php
session_start();
$idConnected=$_SESSION['idConnected'];
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body background="./images/pattern2.jpg">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="inscrireD.css" rel="stylesheet"/>

    <div id="login-overlay" class="modal-dialog">
     
       
            <div class="modal-body">
              
            
                <form id="registerForm" method="POST" action="traitementDeclarationNaiss.php" enctype="multipart/form-data" >
<!---form--->           <div class="form-group">
<!---input width--->    <div class="col-xs-6">
                        <label for="InputName">Prénom du déclarant</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom" required>
                       
                        </div>
                        <br>
                       
                        <div class="input-group">
						 <label for="InputName">Nom du justificatif</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span  class="fa fa-user"></span></span>
                        <input type="text" class="form-control" name="libelle"  required>
						
                       
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                </div>
                </div>
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="InputName">Nom du déclarant</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="nom" placeholder="Entrer le nom de famille" required>
                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        </div>
                        <br>	
                       <label for="sexe">Sexe de l'enfant</label>
							<select class="form-control" name="sexe">
									<option value="masculin">masculin</option>
									<option value="feminin">feminin</option>	
									
							</select>
                    </div>
					 
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                     
                </div> 
			
		
                    <div class="form-group"> 
                        <div class="col-xs-12">
                        <label for="InputEmail">Date de Naissance</label>
                        <div class="input-group">
					
                        <input type="date" class="form-control" name="DateNaiss" placeholder="Entrez l'e-mail" required>
                       
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputStreetName">Lien de parente</label>
                        <div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>			
							<select class="form-control" name="parente">
									<option value="pére">pére</option>
									<option value="mére">mére</option>
									<option value="mére">parent proche</option>
									
							</select>
	
                     <!--   <input type="text" class="form-control" name="adresse" placeholder="Entrer votre adresse" required>-->
                        
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>   
					
                </div>
             
                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">Justificatif</label>
                        <div class="input-group">
						<input type="file"  class="form-control" name="photo" accept="image/*" multiple="multiple" required="required"/>

                       
                    </div>
 <br> 
                    </div>
                    </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        
                       
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>                     
                 
                </div>
                  <input type="submit" name="soumettre" id="soumettre" value="soumettre" class="btn btn-success pull-right">
                  
                  </div>
                </div>
                </form>
              </div><!---modal-body--->
          </div>
       </div>


<script type="text/javascript">

</script>
</body>
</html>