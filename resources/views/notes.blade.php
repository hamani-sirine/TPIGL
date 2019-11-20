
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>{{$user->login}} {{$etudiant->promo}} G0{{$etudiant->groupe}}</h1>
    <h3>Semestre 1 </h3>
    
    <ul>
   
    @for ($i = 0; $i < count($notes_s1); $i++)
    <li>
            <p>nom module : {{ $modules_s1[$i] }}</p>
            <p>note cc :{{ $notes_s1[$i]->cc }}</p>
            <p>note ci :{{ $notes_s1[$i]->ci }}</p>
            <p>note cf :{{ $notes_s1[$i]->cf }}</p>

    </li>
    @endfor
    </ul>

    <h3>Semestre 2 </h3>
    
    <ul>
   
    @for ($i = 0; $i < count($notes_s2); $i++)
    <li>
            <p>nom module : {{ $modules_s2[$i] }}</p>
            <p>note cc :{{ $notes_s2[$i]->cc }}</p>
            <p>note ci :{{ $notes_s2[$i]->ci }}</p>
            <p>note cf :{{ $notes_s2[$i]->cf }}</p>

    </li>
    @endfor
    </ul>
</body>
</html>