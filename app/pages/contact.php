          <div class="row">
                  <div class="img-form">
                    <img src="medias/images/logo_bleft.svg" alt="drawn portrait of christelle Barret by Crypto Beasty">
                  </div>
                  <div class="card-body-form">
                    <form action="" name="contact-form" method="POST">
                      <fieldset>
                        <label class="require" for="nom">Nom<span>*</span></label>
                        <input type="text" name="nom" value="<?php if(isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>" required>
                      
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>">

                        <label for="societe">Société</label>
                        <input type="text" name="societe" value="<?php if(isset($_POST['societe'])) echo htmlspecialchars($_POST['societe']);?>">

                        <label for="tel">Téléphone</label>
                        <input type="text" name="tel" value="<?php if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']);?>">

                        <label class="require" for="mail">Email<span>*</span></label>
                        <input type="text" name="mail" value="<?php if(isset($_POST['mail'])) echo htmlspecialchars($_POST['mail']);?>" required>

                        <label class="require" for="objet">Objet message<span>*</span></label>
                        <input type="text" name="objet" value="<?php if(isset($_POST['objet'])) echo htmlspecialchars($_POST['objet']);?>" required>

                        <label class="require" for="message">Message<span>*</span></label>
                        <textarea name="message" id="message" cols="30" rows="5" value="<?php if(isset($_POST['message'])) echo htmlspecialchars($_POST['message']);?>" required></textarea>

                        <input type="submit" value="Envoyer">
                        
                      </fieldset>
                    </form>
                  </div>
                  <div class="img-form">
                    <img src="medias/images/logo_bright.svg" alt="drawn portrait of christelle Barret by Crypto Beasty">
                  </div>
              </div>