<?php require_once 'header.php'; ?>

<main class="PageConnexion">
    <div class="CardConnection">
        <h2 class="TitreConnection">Connexion</h2>

        <form action="" method="POST" class="FormConnection">
            <div class="ChampConnection">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="exemple@agirabcd.com">
            </div>
            <div class="ChampConnection">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="Mot de passe">
            </div>
            <button type="submit" class="btnConnection">
                Se connecter
            </button>
            <a href="#" class="MdpOublie">Mot de passe oublié ?</a>
        </form>
    </div>
</main>


<?php require_once "footer.php" ?>