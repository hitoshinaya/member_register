<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員編集</title>
    
</head>
<body>
    
    <h2>会員編集 会員ID:{{$member->id}}</h2>
    <form action="{{route('member.update', $member->id)}}" method="post">
    @csrf
    @method('patch')
        <input type="text" name="id" value="{{$member->id}}" hidden>
        <input type="text" name="name" value="{{$member->name}}">
        <br>
        <input type="tel" name="tel" value="{{$member->tel}}">
        <br>
        <input type="email" name="email" value="{{$member->email}}">
        <br>
        <button type="submit" >編集</button>
        <br>
    </form>
    <!-- 削除フォーム -->
<form action="{{ route('member.destroy', $member->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">削除</button>
</form>
</body>
</html>