
document.addEventListener('DOMContentLoaded', function () {
    const formulaire = document.getElementById("formulaire");
    
    
    formulaire.addEventListener('submit', function (e) {
        {
            
            e.preventDefault();

            filtrealpha = new RegExp(/^[A-Za-z]+$/)
            filtrenum = new RegExp(/^(0|\+33 )[1-9]([-. ]?[0-9]{2} ){3}([-. ]?[0-9]{2})$/)
            filtremail = new RegExp(/^[a-z0-9.-]+@[a-z0-9.-]+.[a-z0-9]+$/)
            filtredate = new RegExp(/^[0-9]+-[0-9]+-[0-9]+$/)
            var nom = document.getElementById("nom").value
            var prenom = document.getElementById("prenom").value
            var email = document.getElementById("email").value
            var telephone = document.getElementById("telephone").value
            var demande = document.getElementById("demande").value
            
            resultat = filtrealpha.test(nom)
              if (resultat == false)
                {
                    valide = false
                    Swal.fire({
                        title: "Nom invalide",
                        text: "Veuillez entrer un nom valide",
                        icon: "error"
                      })
                }
                
            resultat = filtrealpha.test(prenom)
              if (resultat == false)
                {
                    valide = false
                    Swal.fire({
                        title: "Prénom invalide",
                        text: "Veuillez entrer un prénom valide",
                        icon: "error"
                      })
                }
                    
            resultat = filtremail.test(email)
              if (resultat == false)
                {
                    valide = false
                    Swal.fire({
                        title: "email invalide",
                        text: "Veuillez entrer un email valide",
                        icon: "error"
                      })
                }
                        
            resultat = filtrenum.test(telephone)
              if (resultat == false)
                {
                    valide = false
                    Swal.fire({
                        title: "Numéro de téléphone invalide",
                        text: "Veuillez saisir un autre numéro de téléphone",
                        icon: "error"
                      })
                }
                        
            resultat = filtrealpha.test(demande)
              if (resultat == false)
                {
                    valide = false
                    Swal.fire({
                        title: "Demande invalide",
                        text: "Veuillez entrer une demane valide",
                        icon: "error"
                      })
                }
      }
  })
})

