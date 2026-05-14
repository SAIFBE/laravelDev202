<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>liste des categories</h1>
    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>description</th>
            <th>action</th>
        </tr>
        @foreach($categories as $cat)
          <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->nom}}</td>
            <td>{{$cat->description}}</td>
            <td><a href="/category/{{$cat->id}}">Detail</a></td>
          </tr>
        @endforeach
    </table>
</body>
</html>