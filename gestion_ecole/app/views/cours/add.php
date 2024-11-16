<!-- add.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Cours</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Ajouter un Cours</h2>

        <form action="/cours/store" method="POST">
            <div class="form-group">
                <label for="nom_cours">Nom du Cours</label>
                <input type="text" name="nom_cours" id="nom_cours" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="enseignant_id">Enseignant</label>
                <select name="enseignant_id" id="enseignant_id" class="form-control" required>
                    <option value="">Sélectionner un enseignant</option>
                    <?php foreach ($enseignants as $enseignant): ?>
                        <option value="<?= $enseignant->id ?>"><?= $enseignant->nom ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="horaire">Horaire</label>
                <input type="time" name="horaire" id="horaire" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</body>
</html>
