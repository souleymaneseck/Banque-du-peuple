<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestclient</title>
    <link rel ="stylesheet" type="text/css" media = "screen" href="main.css">
    
</head>
<body>
    <div>
        <ul>
            <li><a href="clients">Gestion des clients</a></li>
            <li><a href="comptes">Gestion des comptes</a></li>
        </ul>
    </div>
     
     <div>
          <div>
              <div>Listes des Clients</div>
              <div>
                   <table>
                          <tr>
                              <td>ID</td>
                              <td>nom</td>
                              <td>prenom</td>
                              <td>Numtel</td>
                              <td>adresse</td>
                          </tr>
                   </table>
              </div>
              <div>Banque du peuple</div>
          </div>
     </div>



     
     <div>
          <div>
              <div>Formulaire de gestion des clients</div>
              <div>
                   <form action="Gestclient" method="POST">
                        <div>
                             <label for="nom">le nom du client</label>
                             <input type="text" name="nom"id="nom" />
                        </div>      
                        <div>
                             <label for="prenom">Le prenom du client</label>
                             <input type="text" name="prenom"id="prenom" />
                        </div> 

                        <div>
                             <label for="adresse">L'adresse du client</label>
                             <input type="text" name="adresse"id="adresse" />
                        </div> 
                        <div>
                             <label for="Numtel">le numero du telephone</label>
                             <input type="Number" name="Numtel"id="Numtel" />
                        </div> 
                        <div>
                             <input type="submit" name="envoyer"id="envoyer" value="Envoyer"/>
                             <input type="reset" name="annuler"id="annuler" value="Annuler" />
                        </div> 
                   
                   </form> 
              </div>
              <div>Banque du peuple</div>
          </div>
     </div>

</body>
</html>