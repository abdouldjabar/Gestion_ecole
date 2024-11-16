<!-- edit.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Cours</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Modifier un Cours</h2>

        <form action="/cours/update/<?= $course->id ?>" method="POST">
            <div class="form-group">
                <label for="nom_cours">Nom du Cours</label>
                <input type="text" name="nom_cours" id="nom_cours" class="form-control" value="<?= $course->nom_cours ?>" required>
            </div>

            <div class="form-group">
                <label for="enseignant_id">Enseignant</label>
                <select name="enseignant_id" id="enseignant_id" class="form-control" required>
                    <option value="">Sélectionner un enseignant</option>
                    <?php foreach ($enseignants as $enseignant): ?>
                        <option value="<?= $enseignant->id ?>" <?= $course->enseignant_id == $enseignant->id ? 'selected' : '' ?>>
                            <?= $enseignant->nom ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="horaire">Horaire</label>
                <input type="time" name="horaire" id="horaire" class="form-control" value="<?= $course->horaire ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
