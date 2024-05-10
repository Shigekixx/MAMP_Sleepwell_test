<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><a href="{{ route('users.index') }}">Laravel News</a></h1> {{-- index.blade.phpへのリンク --}}
    <br>
    @foreach ($users as $user) {{-- UsersControllerのindexメソッド内の「$users」を受け取る --}}
        <h3>タイトル：{{ $user->name }}</h3>
        <p>内容：{{ $user->email }}</p>
        <br>
    @endforeach
</body>
</html>