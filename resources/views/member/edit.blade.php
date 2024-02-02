<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員編集</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="mx-auto text-center w-50">
    <h2>会員編集 会員ID:{{$member->id}}</h2>
    <form action="{{route('member.update', $member->id)}}" method="post">
    @csrf
    @method('patch')
        <input type="text" name="id" value="{{$member->id}}" hidden>
        <input type="text" name="name" value="{{$member->name}}" class="form-control" >
        <br>
        <input type="tel" name="tel" value="{{$member->tel}}" class="form-control">
        <br>
        <input type="email" name="email" value="{{$member->email}}" class="form-control">
        <br>
        <button type="submit" class="btn btn-dark w-100">編集</button>
        <br>
    </form>
    <!-- 削除フォーム -->
    <form action="{{ route('member.destroy', $member->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mt-3 w-100">削除</button>
    </form>
</div>
</body>
</html>