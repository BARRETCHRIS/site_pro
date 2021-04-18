<div class="row">
                  <div class="img-card">
                    <img src="medias/images/logo-flat-desolation-finitions.svg" alt="drawn portrait of christelle Barret by Crypto Beasty">
                  </div>
                  <div class="card-body">
                    <form action="" name="contact-form" method="POST">
                      <fieldset>
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" value="<?php if(isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>">
                      
                        <label for="prenom">Prénom </label>
                        <input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>">
                      </fieldset>
                    </form>
                    <!--
                    <section>
                      <div class="typewriter tw1"><h1>christelle</h1></div>
                      <div class="typewriter tw2"><h2>Barret</h2></div>
                      <div class="typewriter tw3"><h4>Crypto&nbspBeasty</h4></div>
                      <div class="typewriter tw4"><h3>web</h3></div>
                      <div class="typewriter tw5"><h3>Developpeur</h3></div>
                      <div class="typewriter tw6"><h3>Designer</h3></div>
                    </section>
                    -->
                  </div>
              </div>