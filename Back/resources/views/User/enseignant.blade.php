
<html>
    <body>
    <title> Ajouter Enseignant </title>
    <h1> Ajouter Enseignant </h1>
        <form method="get" action="{{url('/cr3')}}">
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
                <label for="fonction">Fonction:</label>
                <input name="fonction" type="text">
                </br>
                </br>
                <input name="button" type="submit" value="envoyer !" >
        </form>         
    </body>
</html>




