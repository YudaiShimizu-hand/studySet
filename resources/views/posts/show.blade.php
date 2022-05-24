<x-app-layout>
    <h1>詳細ページ</h1>
    <ul>
        <li>タイトル: {{$post->title}}</li>
        <li>日付: {{$post->day}}</li>
        <li>学習時間: {{$post->time}}</li>
        <li>自己評価: {{$post->score}}</li>
        <li>アウトプット内容: {{$post->body}}</li>
    </ul>
    <a href="{{route('posts.index')}}">戻る</a>
</x-app-layout>
