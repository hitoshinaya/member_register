<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員一覧画面</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>

<div class="container w-10 mx-auto">
    <p class="text-end"><a href="{{route('member.entry')}}">>>登録</a></p>
    <div>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>電話</th>
                    <th>メール</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->tel}}</td>
                    <td>{{$member->email}}</td>
                    <td><a href="{{route('member.edit', $member->id)}}">>>編集</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</div>

</body>
</html>