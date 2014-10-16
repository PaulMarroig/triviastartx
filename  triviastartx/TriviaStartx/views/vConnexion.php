
    <body>
        <div class="container">
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post" action="/Trivia/CConnexion/login/" autocomplete="on"> 
                                <h1>Login</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Identifiant </label>
                                    <input id="username" name="login" required="required" type="text" placeholder="Entrez votre identifiant"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Mot de passe </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Entrez votre mot de passe" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Garder ma session active</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Pas encore membre ?
									<a href="cInscription" class="to_register" >Inscrivez-vous</a>
								</p>
                            </form>
                           
                        </div>
                    </div>
                </div>  
            </section>
             
        </div>
        
        
    </body>
</html>

<?php 


?>