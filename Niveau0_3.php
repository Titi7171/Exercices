<form action="" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom">
    <br>

    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
    <br>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    <br>

    <input type="submit" name="submit">

</form>

<?php

$file = 'Exercice.txt';
if (isset($_POST['submit'])) {
    $tab = [
        'nom' => $_POST["nom"], 
        'age' => $_POST["age"],
        'email' => $_POST["email"],
        'separator' => ";"];
    
    $tab = implode(" ", $tab);
}
?>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Age</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php 
            file_put_contents($file, $tab, FILE_APPEND | LOCK_EX);

            $content = file_get_contents($file);
            $array = explode(";", $content);
            var_dump($array);
            
            
            for ($i = 0; $i < count($array); $i++) {
                $personne = explode(" ", $array[$i]);
                echo "<td> $personne[0] </td>";
                echo "<td> $personne[1] </td>";
                echo "<td> $personne[2] </td>"; 
                var_dump($personne);
                }?>
        </tr>
    </tbody>
</table>





