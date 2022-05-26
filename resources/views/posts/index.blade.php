<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
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
            <div class="col-sm-4">
                <div id="chart" style="height:500px;width:800px;"></div>
                <script>
                    google.charts.load('current', {packages: ['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart(){
                        var danger = @json($danger);
                        var careful = @json($careful);
                        var fight = @json($fight);
                        var soso = @json($soso);
                        var nice = @json($nice);
                        var great = @json($great);

                        var data = new google.visualization.DataTable();
                        // var data=google.visualization.arrayToDataTable();
                        data.addColumn('string', '満足度');
                        data.addColumn('number', '評価');
                        data.addRows([
                            ['満足度0', danger],
                            ['満足度1', careful],
                            ['満足度2', fight],
                            ['満足度3', soso],
                            ['満足度4', nice],
                            ['満足度5', great],
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
                            title: '学習の自己満足度',
                            is3D: true,
                            colors: ['#FF0000', '#FFFF00', '#C0C0C0', '#008000', '#00FFFF', '#0000FF' ]
                        };
                        var chart = new google.visualization.PieChart(document.getElementById('chart'));

                        chart.draw(data, options);
                    }

                </script>
            </div>
        </div>
    </div>
</x-app-layout>
