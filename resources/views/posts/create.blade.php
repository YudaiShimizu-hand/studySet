<x-app-layout>
    <div class="container mt-5">
        <div class="create">
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <div class="create-title">
                    <h2>入力フォーム</h2>
                    <a href="{{route('posts.index')}}">戻る</a>
                </div>
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label">タイトル</label></br>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="day" class="form-label">日付</label></br>
                    <input type="date" name="day" id="day" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">学習時間</label></br>
                    <input type="number" name="time" id="time" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="score" class="form-label">自己評価(1~5)</label></br>
                    <input type="number" name="score" id="score" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">学習アウトプット</label></br>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" value="登録" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
