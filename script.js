function ajoutLigne(numLigne) {
    var table = document.getElementById("lignes");
    var rowCount = table.rows.length;
    if (rowCount < 10) {
      var row = table.insertRow(rowCount);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      cell1.innerHTML = '<input type="text" name="FRA_AUT_DAT' + numLigne + '" size="12" class="input-zone">';
      cell2.innerHTML = '<input type="text" name="FRA_AUT_LIB' + numLigne + '" size="30" class="input-zone">';
      cell3.innerHTML = '<input type="text" name="FRA_AUT_MONT' + numLigne + '" size="3" class="input-zone">';
      cell4.innerHTML = '<input type="button" value="-" onclick="supprLigne(this)" class="delete-button">';
    } else {
      alert("Vous avez atteint le nombre maximum de lignes pour les frais hors forfait (10).");
    }
  }
  
  function supprLigne(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
  }
  