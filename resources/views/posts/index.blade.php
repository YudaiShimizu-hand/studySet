<x-app-layout>
    <div class="container mt-5">
        <a href="{{route('posts.create')}}" class="btn btn-primary">新しい登録</a>
        <table class="table table-secondary table-striped-columns mt-3">
            <thead>
                <tr>
                    <th>日付</th>
                    <th>タイトル</th>
                    <th>自己評価</th>
                </tr>
            </thead>
            <tbody>
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
                                <p class="p-3 mb-2 bg-danger text-white">DANGER</p>
                                @break
                            @case(1)
                                <p class="p-3 mb-2 bg-warning text-white">CAREFUL</p>
                                @break
                            @case(2)
                                <p class="p-3 mb-2 bg-secondary text-white">FIGHT</p>
                                @break
                            @case(3)
                                <p class="p-3 mb-2 bg-success text-white">SOSO</p>
                                @break
                            @case(4)
                                <p class="p-3 mb-2 bg-info text-white">NICE</p>
                                @break
                            @case(5)
                                <p class="p-3 mb-2 bg-primary text-white">GREAT</p>
                                @break
                        @endswitch

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
</x-app-layout>
