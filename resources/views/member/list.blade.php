<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員一覧画面</title>
    
</head>
<body>
    <a href="{{route('member.entry')}}">>>登録</a>
    <div>
        <table>
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

</body>
</html>