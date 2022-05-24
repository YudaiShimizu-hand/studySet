<x-app-layout>
    {{Auth::user()->name}}
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>日付</th>
                    <th>タイトル</th>
                    <th>自己評価</th>
                </tr>
            </thead>
            <tbody>
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
                    <td>
                        @switch($post->score)
                            @case(0)
                                <p>カス</p>
                                @break
                            @case(1)
                                <p>ゴミ</p>
                                @break
                            @case(2)
                                <p>まあまあ</p>
                                @break
                            @case(3)
                                <p>ぼちぼち</p>
                                @break
                            @case(4)
                                <p>やるやん</p>
                                @break
                            @case(5)
                                <p>グレート</p>
                                @break
                        @endswitch

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
