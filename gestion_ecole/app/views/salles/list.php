<h1>Liste des Salles</h1>
<a href="/salles/add">Ajouter une salle</a>
<table>
    <tr>
        <th>Nom</th>
        <th>Capacité</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($salles as $salle): ?>
        <tr>
            <td><?= htmlspecialchars($salle['nom']); ?></td>
            <td><?= htmlspecialchars($salle['capacite']); ?></td>
            <td>
                <a href="/salles/edit/<?= $salle['id_salle']; ?>">Modifier</a>
                <a href="/salles/delete/<?= $salle['id_salle']; ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
