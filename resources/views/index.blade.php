<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            
            <th scope="col">prenom</th>
            <th scope="col">nom<t</th>
            <th scope="col">datecreation</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        @foreach ($apprenants as $eleve)
        <tbody>
          
        
          <tr>
            
            <th scope="row">{{$eleve->id}}</th>
            <td> {{$eleve->prenom}}</td>
            <td>{{$eleve->nom}}</td>
            <td>{{$eleve->created_at}}</td>
            <td></td>
            
          </tr>
         
        </tbody>
        @endforeach
      </table>
   
   
  
</body>
</html>