<h1>Ajouter une Salle</h1>

<form method="POST" action="/salles/add">
    <div>
        <label for="nom">Nom de la salle:</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div>
        <label for="capacite">Capacité:</label>
        <input type="number" id="capacite" name="capacite" required>
    </div>
    <button type="submit">Ajouter</button>
</form>
