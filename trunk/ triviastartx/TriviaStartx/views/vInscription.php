
    <body>
        <div class="container">
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" action="/Trivia/cInscription/addNew/" autocomplete="on"> 
                                <h1>Inscription</h1> 
                                <p> 
                                    <label for="name" class="name" data-icon="u"> Nom </label>
                                    <input id="name" name="nom" required="required" type="text" placeholder="Entrez votre nom" /> 
                                </p>
                                <p> 
                                    <label for="surname" class="uname" data-icon="u"> Prenom </label>
                                    <input id="prenom" name="prenom" required="required" type="text" placeholder="Entrez votre prenom" /> 
                                </p>
                                <p> 
                                    <label for="email" class="mail" data-icon="e"> E-mail </label>
                                    <input id="mail" name="mail" required="required" type="email" placeholder="Entrez votre e-mail" /> 
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u"> Identifiant </label>
                                    <input id="username" name="login" required="required" type="text" placeholder="Entrez votre identifiant"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Mot de passe </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Entrez votre mot de passe" /> 
                                </p>
                                <p>
                                	<label for="monde" class="monde" data-icon="p"> Domaine </label>
                                	<select class="place_holder" name="idmonde">
                                		<option value="" disabled selected> Selectionnez votre domaine </option>
                                		<option value="1">
                                		<?php 
										$mondes =DAO::getAll("Monde");
		
										foreach ($mondes as $monde){
											echo Gui::select($monde);
										}
										?>
										</option>
                                	</select> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="s'inscrire"> 
								</p>
                              
                            </form>
                              <div id="resultat"></div>
                           
                        </div>
                    </div>
                </div>  
            </section>
             
        </div>
      
        
    </body>
</html>