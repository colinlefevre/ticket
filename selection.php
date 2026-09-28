<?php
if (isset($_POST['code'])) {
    $code = (int)$_POST['code'];
    if ($code == 0) {
        echo "Le code zéro est un cas particulier !<br>"
    } elseif ($code >= 1 && $code <= 999) {
        echo "Le code " . $code . " est correct<br>"
    } else {
        echo "Le code est incorrect, trop grand !<br>"
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ticket</title>
</head>
<body>
    <form action="" method="POST">
        <label for="code">Entrez votre code :</label>
        <input type="number" id="code" name="code" required>
        <button type="submit">Valider</button>
    </form>
</body>
</html>