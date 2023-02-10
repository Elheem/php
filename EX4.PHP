<form action="process.php" method="post">
  <fieldset>
    <legend>Coordonnées patient</legend>
    <label for="num_secu">Numéro de sécurité sociale :</label>
    <input type="text" id="num_secu" name="num_secu" maxlength="8" required>
    <br><br>
    <label for="caisse">Caisse :</label>
    <select id="caisse" name="caisse">
      <option value="CNSS">CNSS</option>
      <option value="CNRPS">CNRPS</option>
    </select>
    <br><br>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <br><br>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <br><br>
    <label for="adresse">Adresse :</label>
    <textarea id="adresse" name="adresse" required></textarea>
    <br><br>
    <input type="submit" value="Envoyer">
  </fieldset>
</form>
