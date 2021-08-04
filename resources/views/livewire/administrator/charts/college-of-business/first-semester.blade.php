<div>
    <div id="chart" style="height: 300px;">
        {!! $chart->container() !!}
    </div>

    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
</div>
