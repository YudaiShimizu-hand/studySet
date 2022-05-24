<x-app-layout>
    <div class="container mt-5">
        <h1>詳細ページ</h1>
        <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$post->day}}</div>
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">
                  <p>学習時間： {{$post->time}}  ｜  自己評価： {{$post->score}}</p>
                  <p>[アウトプット内容]</p>
                  <p>{{$post->body}}</p>
              </p>
            </div>
          </div>
        <a href="{{route('posts.index')}}">戻る</a>
    </div>
</x-app-layout>
