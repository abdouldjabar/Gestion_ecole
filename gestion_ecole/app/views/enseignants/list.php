<!-- list.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Enseignants</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Liste des Enseignants</h2>
        <a href="/enseignants/add" class="btn btn-success">Ajouter un Enseignant</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enseignants as $enseignant): ?>
                    <tr>
                        <td><?= $enseignant->id ?></td>
                        <td><?= $enseignant->nom ?></td>
                        <td><?= $enseignant->prenom ?></td>
                        <td><?= $enseignant->email ?></td>
                        <td>
                            <a href="/enseignants/edit/<?= $enseignant->id ?>" class="btn btn-warning">Éditer</a>
                            <a href="/enseignants/delete/<?= $enseignant->id ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
