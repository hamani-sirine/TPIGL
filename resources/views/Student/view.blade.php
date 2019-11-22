<html>

<table>
<tr>
    <td> Login  </td>
    <td> Email  </td>
    <td> Nom    </td>
    <td> Prenom </td>
    <td> Fonction </td>
    

</tr>
    
@foreach($data as $value)
<tr>
    <td>{{$value->login}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->nom}}</td>
    <td>{{$value->prenom}}</td>
    <td>{{$value->fonction}}</td>
    </br>

    
</tr>
</table>

@endforeach 
</html>
