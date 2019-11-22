
<html>
    <body>
    <title> Ajouter Etudiant </title>
    <h1> Ajouter Etudiant </h1>
        <form method="get" action="{{url('/cr')}}">
                {{ csrf_field() }}
                <label for="login">Login:</label>
                <input name="login" type="text" >
                </br>
                </br>
                <label for="nom">Nom:</label>
                <input name="nom" type="text">
                </br>
                </br>
                <label for="prenom">Prenom:</label>
                <input name="prenom" type="text">
                </br>
                </br>
                <label for="email">Email:</label>
                <input name="email" type="text" >
                </br>
                </br>
                <label for="mdp">Mot De Pass:</label>
                <input name="mdp" type="text" >
                </br>
                </br>
                <label for="promo">Promo:</label>
                <input name="promo" type="text">
                </br>
                </br>
                <label for="groupe">Groupe:</label>
                <input name="groupe" type="text">
                </br>
                </br>
                <label for="option">Option:</label>
                <input name="option" type="text">
                </br>
                </br>
                
                <input name="button" type="submit" value="envoyer !" >
        </form>         
    </body>
</html>




