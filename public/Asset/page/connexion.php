<?php require_once 'header.php'; ?>

    <main class="PageConnexion">
        <div class="CardConnexion">
            <h2 class="TitreConnexion">Connexion</h2>

            <form action="" method="POST" class="FormConnexion">
                <div class="ChampConnexion">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="exemple@agirabcd.com">
                </div>
                <div class="ChampConnexion">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required placeholder="Mot de passe">
                </div>
                <button type="submit" class="btnConnexion">
                    Se connecter
                </button>
                <a href="#" class="MdpOublie">Mot de passe oublié ?</a>
            </form>
        </div>
    </main>


<?php require_once "footer.php" ?>