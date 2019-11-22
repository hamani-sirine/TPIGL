
<html>
    <body>
    <title> Add User </title>
    <h1> Add User </h1>
        <form method="get" action="{{url('/cr')}}">
                {{ csrf_field() }}
                <label for="login">Login:</label>
                <input name="login" type="text" >
                </br>
                </br>
                <label for="nom">nom:</label>
                <input name="nom" type="text">
                </br>
                </br>
                <label for="prenom">prenom:</label>
                <input name="prenom" type="text">
                </br>
                </br>
                <label for="email">email:</label>
                <input name="email" type="text" >
                </br>
                </br>
                <label for="mdp">MotDePass:</label>
                <input name="mdp" type="text" >
                </br>
                </br>
                <label for="Promo">Promo:</label>
                <input name="Promo" type="text" >
                </br>
                </br>
                <label for="groupe">groupe:</label>
                <input name="groupe" type="text" >
                </br>
                </br>
                <label for="fonction">fonction:</label>
                <input name="fonction" type="fonction">
                </br>
                </br>
                <input name="button" type="submit" value="envoyer !" >
        </form>         
    </body>
</html>




