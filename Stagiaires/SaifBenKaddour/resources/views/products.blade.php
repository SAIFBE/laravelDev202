<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>listes des produit de categorie {{$category->nom}}</h1>
    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>description</th>
            <th>prix</th>
        </tr>
        @foreach($category->products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nom}}</td>
            <td>{{$p->description}}</td>
            <td>{{$p->prix}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>