<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        #chartdiv {
            width: 1000px;
            height: 700px;
        }
        .content_gird{
            height: 100%;
            width: 100%;
            display: grid;
            grid-template-areas:
                    "t1 t1 c1 c1 c1 c1 c1"
                    "t1 t1 c1 c1 c1 c1 c1"
                    "t2 t2 t2 t2 t2 t2 t2"
                    "t2 t2 t2 t2 t2 t2 t2";
        }
        .table-body{
            grid-area: t1;
            height: 60vh;
            border: solid 1px;
        }
        .chart-body{
            grid-area: c1;
            height: 60vh;
            border: solid 1px;
        }
        .table-body2{
            grid-area: t2;
            height: 39vh;
            border: solid 1px;
        }
        .table-grid-col-4{
            height: 85%;
            display: grid;
            box-sizing: border-box;
            grid-template-columns: repeat(6,1fr);
            list-style-type: none;
            margin:0;
            padding: 0;
            grid-auto-rows: minmax(30px,auto);
        }
        .table-grid-col-2{
            height: 15%;
            display: grid;
            box-sizing: border-box;
            grid-template-columns: repeat(2,1fr);
            list-style-type: none;
            margin:0;
            padding: 0;
            grid-auto-rows: minmax(51.5px,auto);
        }
        .table-body2 > table{
            /* width: 100%; */
            height: 100%;
        }
        .table-grid-col-4 > li,
        .table-grid-col-2 > li{
            border: solid 1px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            width: 50px;
            font-size: 8px;
        }
        th {
            text-align: left;
        }
        #chartdiv {
            width: 100%;
            height: 500px;
        }
        input {
            width: 100%;
        }
    </style>

    <!-- amchart script -->
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

</head>
<body>
<div class="full-height">
    <div class="content content_gird">
        <div class="table-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>烘焙日期</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>溫濕度</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>產區</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>處理法</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>生豆重</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>熟豆重</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>生豆含水</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>熟豆含水</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>失重量</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>失重比</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>表面焙度</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>磨粉焙度</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>進豆溫度</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>下豆溫度</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>回溫點</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>回溫時間</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>一爆溫度</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>二爆溫度</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>一爆時間</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>二爆時間</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>一爆送風</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>二爆送風</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                <tr>
                    <th>下豆時間</th>
                    <td>
                        <input type="text" value="">
                    </td>
                    <th>杯測風味</th>
                    <td>
                        <input type="text" value="">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="chart-body">
            <div id="chartdiv"></div>
        </div>
        <div class="table-body2">
            {{--<table>--}}
            {{--<tr>--}}
            {{--<th>時間</th>--}}
            {{--<th>1</th>--}}
            {{--<th>2</th>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>豆溫</td>--}}
            {{--<td></td>--}}
            {{--<td></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>風門</td>--}}
            {{--<td></td>--}}
            {{--<td></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>火力</td>--}}
            {{--<td></td>--}}
            {{--<td></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>一分中內上升</td>--}}
            {{--<td></td>--}}
            {{--<td></td>--}}
            {{--</tr>--}}
            {{--</table>--}}
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>時間（分）</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>豆溫</td>
                    @for($i = 1; $i <= 15; $i++)
                        <td>
                            <input type="number" name="temp[]" value="" onchange="setTemp()">
                        </td>
                    @endfor
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<input type="number" name="temp[]" value="" onchange="setTemp()">--}}
                    {{--</td>--}}
                </tr>
                <tr>
                    <td>風門</td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                </tr>
                <tr>
                    <td>火力</td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                    <td>
                        <input type="number" value="">
                    </td>
                </tr>
                <tr>
                    <td>一分鐘上升</td>
                    <td>
                        <input type="number" name="per_temp[0]" value="0" readonly>
                    </td>
                    @for($i = 1; $i <=14; $i++)
                        <td>
                            <input type="number" name="per_temp[{{ $i }}]" value="">
                        </td>
                    @endfor
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{asset('/')}}js/chart.js"></script>
</body>
</html>