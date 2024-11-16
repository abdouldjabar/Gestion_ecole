<!-- list.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Liste des Cours</h2>
        <a href="/cours/add" class="btn btn-success">Ajouter un Cours</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom du Cours</th>
                    <th>Enseignant</th>
                    <th>Horaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cours as $course): ?>
                    <tr>
                        <td><?= $course->id ?></td>
                        <td><?= $course->nom_cours ?></td>
                        <td><?= $course->enseignant_id ?></td> <!-- Assumer que l'enseignant est une ID pour simplification -->
                        <td><?= $course->horaire ?></td>
                        <td>
                            <a href="/cours/edit/<?= $course->id ?>" class="btn btn-warning">Éditer</a>
                            <a href="/cours/delete/<?= $course->id ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
