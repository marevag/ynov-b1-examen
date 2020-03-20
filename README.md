#    Quelles sont les 2 méthodes HTTP utilisables dans un formulaire en PHP ?
    
Il y a 2 méthodes : HTTP GET et HTTP POST
La méthode HTTP GET fait circuler les informations en clair dans l'url.
La méthode HTTP POST fait circuler les infomations de manière caché mais pas cryptée.
    
#    Quelle est la différence entre include, include_once, require et require_once ?
    
Include : inclut et execute le fichier donné
Include_once : inclut et évalue le fichier donné pendant l'execution du script
Require : pareil que include sauf quand il y a une erreur il stop le script
Require_once : pareil que require sauf que PHP vérifie si le fichier n'a pas deja été inclut
    
#    Quelle fonction devez-vous appeler pour utiliser les sessions dans votre application ?
    
Nous devons appeler la fonction session_start()    
    
#    Qu'est-ce qu'un DSN et à quoi sert-il dans le cadre de PDO ?
    
Un DNS est le data source name, c'est ici qu'on renseigne les infos de connexion a la database    
    
#    Quelle est la différence entre une requête préparée et une requête non préparée ?
    
La différence entre une requete préparée et une non préparée est que ca permet d'optimiser le chargement de la requête    
    
#    Quelle est la différence entre la méthode GET et la méthode POST ?
    
GET injecte dans d'autres pages PHP et POST récupere les données    
    
