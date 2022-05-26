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
        <form action={{route('posts.destroy', $post)}} method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">削除</button>
        </form>
        <a href="{{route('posts.index')}}">
            <button class="btn btn-primary">戻る</button>
        </a>
    </div>
</x-app-layout>
