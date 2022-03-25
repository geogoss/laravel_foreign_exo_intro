1:Many
laravel_foreing_key_exo_2
Créez un système de rajout de voiture : marque et année de création avec une clef étrangère couleur_id
Créez un système de création de couleur 

Dans une page affichez toutes les voitures et leur couleur avec les moyens qu’on a vu 
Une voiture ne peut avoir qu’une couleur mais une couleur peut avoir plusieurs voitures, vous devrez utiliser voiture->couleur....

Dans une autre page affichez les voitures par sections , celles qui sont rouges, celle qui sont bleues ...vous devrez pour cette seconde page utilisez couleur->voiture...
**laravel_foreing_key_exo_3**
Dans un nouveau projet : effacez le model user de base et les fichiers migrations, ainsi que la blade welcome.
Créez deux tables : 
- users(id,email,nickname,profil_id)
- profils(id,name,age,phone)
Créez un model User et Profil
Créez un fichier migration user et profil
Créez un ficher controller pour User
Créez une blade pour pouvoir rajouter un user, sur le formulaire user il est possible de créer un user en remplissant a la fois la table user et la table profil
Créez une blade ou afficher tous les users 
- Premiere étape afficher leur email et nickname 
- Seconde étape créer une eloquente relationship dans le model User pour récuperer le profil de chaque user
- Dernière étape, afficher le reste des informations  sur la blade users grâce a la nouvelle méthode créée dans le model user.