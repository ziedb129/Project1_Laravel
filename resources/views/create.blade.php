<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel 9 CRUD</title>
</head>
<body>
    <div class="container mt-5">

        <a href="{{ route('home') }}" class="form-label">To List</a>
        <br>
        <h1>Create user</h1>
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            @method('post')

            
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="name">
        @error('name')
            <span class="text text-danger">{{ $message }}</span>
        @enderror  
        </div>
        <div class="mb-3">
            <label class="form-label">Contact</label>
            <input type="text" class="form-control" name="contact" placeholder="name@example.com">
            @error('contact')
            <span class="text text-danger">{{ $message }}</span>                
            @enderror

          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Sexe</label>
            <select name="sexe" id="" class="form-control">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
            @error('sexe')
            <span class="text text-danger">{{ $message }}</span>                
            @enderror

          </div>

          <button class="btn btn-info btn-sm" type="submit">Save</button>
    </div>
</form>
    </div>
    
</body>
</html>