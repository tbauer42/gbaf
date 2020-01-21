
<div id="corps">

    <form method="post" action="cible.php">

    <p> 
        <h1 class="">FORMULAIRE D'INSCRIPTION</h1>

            <div class="champs">
                <label for="Nom"> Nom :</label> 
                <input type = "text" name= "nom" id = "nom" autocomplete="off" /> </br>
            </div></br>

            <div class="champs"></div>
                <label for="Prénom"> Prénom :</label> 
                <input type = "text" name= "prénom" id = "prénom" autocomplete="off" /> </br>
            </div></br>

            <div class="champs">
                <label for="Username"> Username :</label> 
                <input type = "text" name= "username" id = "username" autocomplete="off" /> </br>
            </div></br>

            <div class="champs">
                <label for="Password">Votre mot de passe :</label>
                <input type="password" name="password" id="password" autocomplete="off"/> </br>
            </div></br>

            <div class="champs">
                <label for="Question_secrète">Question secrète :</label>
                <select name="secret" id="secret">

                    <option value="ville">Quelle est votre ville favorite?</option>
                    <option value="école">Quel était le nom de votre école primaire?</option>
                    <option value="maman">Quel est le nom de jeune fille de votre mère?</option>
               
                </select> </br>
                </div></br>

            <div class="champs">
                <label for="Réponse"> Réponse</label> 
                <input type = "text" name= "réponse" id = "réponse" autocomplete="off" /> </br>
            </div></br>

            <div class="champs">
                <input type="submit" id="submit" value="Envoyer" />
            </div></br>

    </form>

    <aside id="lien">
        <a href=""> Avez-vous déjà un compte? </a>
    </aside>

    </p>
    
</div>