function openPopup() {
    // Créer une nouvelle fenêtre
    var popup = window.open("", "", "width=300,height=200");
  
    // Écrire du contenu dans la fenêtre
    popup.document.write("<form>");
    popup.document.write("  <input type='text' name='name' placeholder='Votre nom'>");
    popup.document.write("  <input type='email' name='email' placeholder='Votre email'>");
    popup.document.write("  <input type='submit' value='Envoyer'>");
    popup.document.write("</form>");
  
    // Centrer la fenêtre
    popup.moveTo((screen.width / 2) - (popup.outerWidth / 2), (screen.height / 2) - (popup.outerHeight / 2));
  }