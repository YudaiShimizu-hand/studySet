<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Study</title>
</head>
<body>
    <h1>ハロー</h1>
    <table>
        <thead>
            <tr>
                <th>日付</th>
                <th>タイトル</th>
            </tr>
        </thead>
        <tbody>
            {{Auth::user()->name}}
            <a href="{{route('posts.create')}}">新しい登録</a>
            @foreach($posts as $post)
            <tr>
                {{-- {{dd($posts)}} --}}
                <td>
                    <a href="{{ route('posts.show', $post)}}">
                        <p>{{ $post->day }}</p>
                    </a>
                </td>
                <td>{{ $post->title }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
