<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lara_crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
   <button class="btn btn-dark m-5 "><a class="text-light text-decoration-none" href="{{route('home')}}"> Back </a></button>
    <h1 class=" m-5"> STUDENT DATA</h1>
    
    <table class="table">
        <thead>
         
        <tr> <th scope="col">Id</th> <th>{{$student->id}}</th></tr>
        <tr>  <th scope="col">Name</th> <td>{{$student->name}}</td> </tr>
        <tr> <th scope="col">Email</th>  <td>{{$student->email}}</td> </tr>
        <tr> <th scope="col">Password</th> <td>{{$student->password}}</td> </tr>
        <tr> <th scope="col">Age</th><td>{{$student->age}}</td> </tr>
        <tr>  <th scope="col">City</th>  <td>{{$student->city}}</td> </tr>
        <tr> <th scope="col">Course</th><td>{{$student->course}}</td> </tr>
           
          
        </thead>
      
      </table>

    </div>

    
</body>
</html>