<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container text-center w-50 mx-auto">
    <form action="{{route('member.store')}}" method="post">
    @csrf
        <h2>会員登録</h2>
        <input type="text" name="name" placeholder="名前" class="form-control">
        <br>
        <input type="tel" name="tel" placeholder="電話番号" class="form-control">
        <br>
        <input type="email" name="email"  placeholder="メールアドレス" class="form-control">
        <br>
        <input type="submit" value="登録" class="btn btn-dark w-100">
    </form>
    </div>
</body>
</html>