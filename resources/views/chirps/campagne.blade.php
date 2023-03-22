<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach($users as $user)

    {{-- <p><strong>{{ $comment->user->name }}</strong> a réagi :</p> --}}
    {{-- <p>{{ $comment->comment }}</p> --}}
    
    <h1>Bonjour {{ $user->name }} !</h1>
    {{-- <p><small>{{ $comment->created_at->diffForHumans() }}</small></p> --}}
    @endforeach

 {{-- {{foreach ($users as $user) {
            echo $user->name . " " . $user->email;
        }
    }} --}}
</body>
</html>