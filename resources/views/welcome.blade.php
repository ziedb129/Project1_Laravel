<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gestion Contact</title>
    
</head>
<body>
    <div class="container mt-4">
        <a href="{{ route('user.create') }}" class="btn btn-info">New user</a>
        @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Sexe</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @forelse ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->contact }}</td>
                        <td>{{ $item->sexe }}</td>
                        <td>
                            <a href="{{ route('user.edit', $item) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('user.delete', $item) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" href="" class="btn btn-danger btn-sm" >Delete</button>
                        </form>
                            
                        </td>
                    </tr>                        
                    @empty
                        <tr>
                            No data found !
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>