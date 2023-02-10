<form>
  <label for="prix_ht">Prix HT :</label>
  <input type="text" id="prix_ht" name="prix_ht" required>
  <br><br>
  <label for="taux_tva">Taux de TVA :</label>
  <input type="text" id="taux_tva" name="taux_tva" required>
  <br><br>
  <input type="button" value="Calculer" onclick="calculer();">
</form>
<br><br>
<div id="resultat"></div>

<script>
  function calculer() {
    var prixHT = parseFloat(document.querySelector("#prix_ht").value);
    var tauxTVA = parseFloat(document.querySelector("#taux_tva").value);
    var tva = prixHT * tauxTVA / 100;
    var prixTTC = prixHT + tva;
    document.querySelector("#resultat").innerHTML =
      "<label>Montant de la TVA :</label>" +
      "<input type='text' value='" + tva.toFixed(2) + "' readonly>" +
      "<br><br>" +
      "<label>Prix TTC :</label>" +
      "<input type='text' value='" + prixTTC.toFixed(2) + "' readonly>";
  }
</script>
