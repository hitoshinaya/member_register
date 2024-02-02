<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    
</head>
<body>
    <form action="{{route('member.store')}}" method="post">
    @csrf
        <h2>会員登録</h2>
        <input type="text" name="name" placeholder="名前">
        <br>
        <input type="tel" name="tel" placeholder="電話番号">
        <br>
        <input type="email" name="email"  placeholder="メールアドレス">
        <br>
        <input type="submit" value="登録">
    </form>
</body>
</html>