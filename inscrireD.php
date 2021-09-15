<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body background="./images/pattern2.jpg">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="inscrireD.css" rel="stylesheet"/>

    <div id="login-overlay" class="modal-dialog">
     
       
            <div class="modal-body">
              
            
                <form id="registerForm" method="POST" action="inscriptionAPI.php">
<!---form--->           <div class="form-group">
<!---input width--->    <div class="col-xs-6">
                        <label for="InputName">Prénom</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom" required>
                       
                        </div>
                        <br>
                        <label for="InputName">Nom d'utilisateur</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span  class="fa fa-user"></span></span>
                        <input type="text" class="form-control" name="lg" placeholder="Saisissez votre nom d'utilisateur" required>
                       
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                </div>
                </div>
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="InputName">Nom de famille</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="nom" placeholder="Entrer le nom de famille" required>
                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                        </div>
                    
                        <br>
			
						
                        <label for="profil">Profil</label>
						
							<select class="form-control" name="profil">
									<option selected=""> Selectionner un profil</option>
									<option value="officier">Officier</option>
									<option value="agent">Agent</option>
									<option  value="livreur">Livreur</option>
									<option  value="citoyen">Citoyen</option>
							</select>
	
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                     
                </div> 
			
		
                    <div class="form-group"> 
                        <div class="col-xs-12">
                        <label for="InputEmail">Enter Email</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span  class="fa fa-envelope"></span></span>
                        <input type="email" class="form-control" name="email" placeholder="Entrez l'e-mail" required>
                       
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputStreetName">Adresse</label>
                        <div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        <input type="text" class="form-control" name="adresse" placeholder="Entrer votre adresse" required>
                        
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
             
                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">Numéro de telephone</label>
                        <div class="input-group">
						 <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                        <input type="text" class="form-control" name="numtel" placeholder="vore numéro de téléphone" required>
                       
                    </div>
<!----------------------------break-------------------------------------------------------------> <br> 
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