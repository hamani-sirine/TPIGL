
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($data != null )
    
    <h3>Semestre 1 </h3>
   
        
    <ul>
   
    @for ($i = 0; $i < count($data); $i++)
    @if ($data[$i]["semestre"]==1)
    <li>
        <p>nom module : {{ $data[$i]["module"] }}</p>
        <p>note cc :{{ $data[$i]["cc"] }}</p>
        <p>note ci :{{ $data[$i]["ci"]  }}</p>
        <p>note cf :{{ $data[$i]["cf"]  }}</p>

    </li>
    @endif
    
    @endfor
    </ul>
   
    <h3>Semestre 2 </h3>
  

    <ul>
   
    @for ($i = 0; $i < count($data); $i++)
    @if ($data[$i]["semestre"]==2)
    <li>
        <p>nom module : {{ $data[$i]["module"] }}</p>
        <p>note cc :{{ $data[$i]["cc"] }}</p>
        <p>note ci :{{ $data[$i]["ci"]  }}</p>
        <p>note cf :{{ $data[$i]["cf"]  }}</p>

    </li>
    @endif
    @endfor
    </ul>
   
       
   @else
       <p> Aucune note a afficher </p>
   @endif
   
   
</body>
</html>