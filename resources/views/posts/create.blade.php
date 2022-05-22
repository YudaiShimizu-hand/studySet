<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力フォーム</title>
</head>
<body>
    <div>
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div>
                <h2>入力フォーム</h2>
            </div>
            <div>
                <label for="title">タイトル</label></br>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="day">日付</label></br>
                <input type="date" name="day" id="day">
            </div>
            <div>
                <label for="time">学習時間</label></br>
                <input type="number" name="time" id="time">
            </div>
            <div>
                <label for="score">自己評価(1~5)</label></br>
                <input type="number" name="score" id="score">
            </div>
            <div>
                <label for="body">学習アウトプット</label></br>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="登録">
        </form>
        <a href="{{route('posts.index')}}">戻る</a>
    </div>
</body>
</html>
