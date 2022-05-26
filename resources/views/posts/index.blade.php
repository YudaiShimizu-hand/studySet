<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
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
            <div class="row">
                <div id="chart" style="height:500px;width:800px;"></div>
                <script>
                    google.charts.load('current', {packages: ['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart(){

                        var data = new google.visualization.DataTable();
                        // var data=google.visualization.arrayToDataTable();
                        data.addColumn('string', 'アイスの種類');
                        data.addColumn('number', '売上数');
                        data.addRows([
                            ['バニラ', 3],
                            ['チョコ', 5],
                            ['ストロベリー', 1],
                            ['抹茶', 2]
                        ]);
                            // [
                            // ['time'],

                        //     @php
                        //     foreach($posts as $post){
                        //         echo "['".$post->time."'],";
                        //     }
                        //     @endphp
                        // ]);
                        var options ={
                            title: '学習時間の統計',
                            is3D: true,
                        };
                        var chart = new google.visualization.PieChart(document.getElementById('chart'));

                        chart.draw(data, options);
                    }

                </script>
            </div>
        </div>
    </div>
</x-app-layout>
