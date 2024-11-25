<form action="" method="GET">
    <label for="prenom">Entrez votre Prénom</label>
    <input type="text" name="prenom" id="prenom">
    <input type="submit" name="submit">

</form>

<?php 

    if (isset($_GET["prenom"])) {
        $prenom = $_GET['prenom'];
        echo "Bienvenue $prenom";
    }else {
        echo "Veuillez entrer un prenom";
    }
