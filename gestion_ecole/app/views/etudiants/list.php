<!-- list.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Liste des Étudiants</h2>
        <a href="/etudiants/add" class="btn btn-success">Ajouter un Étudiant</a>

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
                <?php foreach ($etudiants as $etudiant): ?>
                    <tr>
                        <td><?= $etudiant->id ?></td>
                        <td><?= $etudiant->nom ?></td>
                        <td><?= $etudiant->prenom ?></td>
                        <td><?= $etudiant->email ?></td>
                        <td>
                            <a href="/etudiants/edit/<?= $etudiant->id ?>" class="btn btn-warning">Éditer</a>
                            <a href="/etudiants/delete/<?= $etudiant->id ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
