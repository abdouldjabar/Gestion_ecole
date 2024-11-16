<h1>Modifier une Salle</h1>

<form method="POST" action="/salles/edit/<?= $salle['id_salle']; ?>">
    <div>
        <label for="nom">Nom de la salle:</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($salle['nom']); ?>" required>
    </div>
    <div>
        <label for="capacite">Capacité:</label>
        <input type="number" id="capacite" name="capacite" value="<?= htmlspecialchars($salle['capacite']); ?>" required>
    </div>
    <button type="submit">Modifier</button>
</form>
