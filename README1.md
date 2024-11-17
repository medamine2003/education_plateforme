Dans ce projet on a utilisé un token généré par JWT. Ce token est envoyé via les headers avec une clé secrète.
Pour la sécurité, nous avons utilisé un middleware qui vérifie si le token est valide avant de faire la connexion.
le client inclut le JWT dans chaque requete envoyée au serveur (dans le header Authorization:Bearer<AccessToken>).
le serveur vérifie le token en recalculant la signature et en la comparant à celle du JWT reçu.Si elle est valide le serveur peut peut extraire les informations contenues dans le payload pour authentifier l'utilisatuer et lui donner accès aux modules.
