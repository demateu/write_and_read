/**
 * @author Victor
 * validació estrelles
 */


function Validate() {
	var puntuacio = document.forms['vform']['puntuacio'];
  // validar radio
  if (puntuacio.value == 0 || puntuacio.value == NULL) {
    document.getElementById('error').innerHTML = "<p style='color:red;'>Has de fer click a alguna estrella</p>";
    return false;
  }
 }