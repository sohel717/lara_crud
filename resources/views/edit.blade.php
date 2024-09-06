<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>form</title>
</head>
<body>
    <div class="container">
    <h1 class="text-primary"> create student</h1>
    <form action="{{route('update',$student->id)}}" method="POST">
      @csrf
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input name="name" type="text" class="form-control" value="{{$student->name}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input name="email" type="email" class="form-control"  value="{{$student->email}}">  
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control" value="{{$student->password}}">
          </div>

        <div class="mb-3">
          <labe class="form-label">Age</label>
          <input name="age" type="text" class="form-control"  value="{{$student->age}}">
         
        </div>
        <div class="mb-3">
          <labe class="form-label">Course</label>
          <input name="course" type="text" class="form-control"  value="{{$student->course}}">
         
        </div>
        <div class="mb-3">
          <label class="form-label">City</label>
          <input name="city" type="text" class="form-control"  value="{{$student->city}}">
         
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
</body>
</html>