
function drawChart(temp_arr, per_temp_arr) {
    // Themes begin
    am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
    var chart = am4core.create("chartdiv", am4charts.XYChart);

// Increase contrast by taking evey second color
    chart.colors.step = 3;

// Add data
    chart.data = generateChartData(temp_arr, per_temp_arr);

// Create axes
// var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
// dateAxis.renderer.minGridDistance = 50;
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "time";
    categoryAxis.renderer.minGridDistance = 1;



    createAxisAndSeries("per_temp", "溫度變化", false, "rectangle", chart);
    createAxisAndSeries("temp", "溫度", false, "triangle", chart);

// Add legend
    chart.legend = new am4charts.Legend();

// Add cursor
    chart.cursor = new am4charts.XYCursor();
}


// 新增值
function generateChartData(temp_arr, per_temp_arr) {
    var chartData = [];
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() - 100);
    firstDate.setHours(0, 0, 0, 0);

    // var visits = 1600;
    // var hits = 2900;
    // var views = 8700;
    // var per_temp = 10;
    // var temp = 100;
    var time = 0;

    for (var i = 0; i < 15; i++) {
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        // var newDate = new Date(firstDate);
        // newDate.setDate(newDate.getDate() + i);
        //
        // visits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);
        // hits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);
        // views += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);
        // per_temp += Math.round((Math.random()<0.5?1:-1)*Math.random()*5);
        // temp += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);
        time += 1;

        if(temp_arr[i] != 0) {
            chartData.push({
                // date: newDate,
                // visits: visits,
                // hits: hits,
                // views: views,
                // per_temp: per_temp,
                // temp: temp,
                per_temp: per_temp_arr[i],
                temp: temp_arr[i],
                time: time
            });
        }

    }


    return chartData;
}

// Create series 畫線
function createAxisAndSeries(field, name, opposite, bullet, chart) {
    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

    var series = chart.series.push(new am4charts.LineSeries());
    series.dataFields.valueY = field;
    // series.dataFields.dateX = "date";
    series.dataFields.categoryX = "time";
    series.strokeWidth = 1;
    series.yAxis = valueAxis;
    series.name = name;
    series.tooltipText = "{name}: [bold]{valueY}[/]";
    series.tensionX = 0.8;

    var interfaceColors = new am4core.InterfaceColorSet();

    switch(bullet) {
        case "triangle":
            var bullet = series.bullets.push(new am4charts.Bullet());
            bullet.width = 12;
            bullet.height = 12;
            bullet.horizontalCenter = "middle";
            bullet.verticalCenter = "middle";

            var triangle = bullet.createChild(am4core.Triangle);
            triangle.stroke = interfaceColors.getFor("background");
            triangle.strokeWidth = 1;
            triangle.direction = "top";
            triangle.width = 12;
            triangle.height = 12;
            break;
        case "rectangle":
            var bullet = series.bullets.push(new am4charts.Bullet());
            bullet.width = 10;
            bullet.height = 10;
            bullet.horizontalCenter = "middle";
            bullet.verticalCenter = "middle";

            var rectangle = bullet.createChild(am4core.Rectangle);
            rectangle.stroke = interfaceColors.getFor("background");
            rectangle.strokeWidth = 1;
            rectangle.width = 9;
            rectangle.height = 9;
            break;
        default:
            var bullet = series.bullets.push(new am4charts.CircleBullet());
            bullet.circle.stroke = interfaceColors.getFor("background");
            bullet.circle.strokeWidth = 2;
            break;
    }

    valueAxis.renderer.line.strokeOpacity = 1;
    valueAxis.renderer.line.strokeWidth = 1;
    valueAxis.renderer.line.stroke = series.stroke;
    valueAxis.renderer.labels.template.fill = series.stroke;
    valueAxis.renderer.opposite = opposite;
    valueAxis.renderer.grid.template.disabled = true;
}


function setTemp() {
    var temp_arr = $("input[name='temp[]']")
        .map(function(){return $(this).val();}).get();
    // console.log(temp_arr);
    temp_arr = setArrEmptyToZero(temp_arr);
    console.log(temp_arr);
    var per_temp_arr = setPerTempArr(temp_arr, []);
    console.log(per_temp_arr);
    setPerTempValue(per_temp_arr);
    // $("input[name='per_temp[1]']").val(100);
    drawChart(temp_arr, per_temp_arr);

}

function setPerTempValue(PerTempArr) {
    PerTempArr.forEach(function (value, index) {
        if(index > 0) {
            $("input[name='per_temp["+index+"]']").val(value);
        }

    })
}

function setArrEmptyToZero(Arr) {
    Arr.forEach(function (value, index) {
        if(value == '') {
            console.log('empty');
            Arr[index] = 0;
        }
    });
    return Arr;
}

function setPerTempArr(TempArr, PerTempArr) {
    PerTempArr[0] = 0;
    TempArr.forEach(function (value, index) {
        if(TempArr[index+1] == 0) {
            PerTempArr[index+1] = 0;
        } else {
            PerTempArr[index+1] = TempArr[index+1] - TempArr[index];
        }

    });
    return PerTempArr;
}