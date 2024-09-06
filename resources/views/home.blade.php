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
   <button class="btn btn-success m-5 "><a class="text-light text-decoration-none" href="{{route('create')}}"> Add Student </a></button>
    <h1 class="text-center m-5"> STUDENTS LIST</h1>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Age</th>
            <th scope="col">City</th>
            <th scope="col">Course</th>
            <th scope="col">Action</th>
            <th scope="col">DELETE</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
              
         
          <tr>
            <th>{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->password}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->course}}</td>
            <td>
              <button class="btn btn-primary"><a class="text-light text-decoration-none" href="{{route('show',$student->id)}}"> view </a> </button>
              <button class="btn btn-dark"><a class="text-light text-decoration-none" href="{{route('edit',$student->id)}}"> edit </a></button>
            </td>
            <td>
              <form action="{{route('destroy',$student->id)}}" method="post">
                @csrf
                @method('delete') 
                 <button type="submit" class ="text-light text-decoration-none btn btn-danger"> delete </button>
              </form>
            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>

    </div>

    
</body>
</html>