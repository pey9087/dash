$(function() {
    $("#datepicker").datepicker({
        dateFormat: 'yy년 mm월 dd일'
        ,showOtherMonths: true
        ,showMonthAfterYear: true
        ,yearSuffix: "년 "
        ,changeYear: true
        ,changeMonth: true
        ,showOn: "focus"
        ,monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월']
        ,monthNames: ['01 <span>/</span>','02 <span>/</span>','03 <span>/</span>','04 <span>/</span>','05 <span>/</span>',
            '06 <span>/</span>','07 <span>/</span>','08 <span>/</span>','09 <span>/</span>','10 <span>/</span>','11 <span>/</span>','12 <span>/</span>']
        ,dayNamesMin: ['일','월','화','수','목','금','토']
        ,dayNames: ['일요일','월요일','화요일','수요일','목요일','금요일','토요일']
        ,minDate: "-5Y"
        ,maxDate: "today"
        ,closeText: "닫기"
        ,prevText: "이전 달"
        ,nextText: "다음 달"
        ,showButtonPanel: true
    });
});

// 일별 앱사용자 그래프
function chart1() {
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create("user_number", am4charts.XYChart);

    // Add data
    chart.data = [{
        "date": "28",
        "visits": 132
    }, {
        "date": "29",
        "visits": 146
    }, {
        "date": "30",
        "visits": 151
    }, {
        "date": "31",
        "visits": 187
    }, {
        "date": "1",
        "visits": 194
    }, {
        "date": "2",
        "visits": 231
    }, {
        "date": "3",
        "visits": 220
    }, {
        "date": "4",
        "visits": 224
    }, {
        "date": "5",
        "visits": 194
    }, {
        "date": "6",
        "visits": 209
    }, {
        "date": "7",
        "visits": 199
    }, {
        "date": "8",
        "visits": 216
    }, {
        "date": "9",
        "visits": 267
    }, {
        "date": "10",
        "visits": 255
    }, {
        "date": "11",
        "visits": 249
    }, {
        "date": "12",
        "visits": 241
    }, {
        "date": "13",
        "visits": 223
    }, {
        "date": "14",
        "visits": 230
    }, {
        "date": "15",
        "visits": 259
    }, {
        "date": "16",
        "visits": 267
    }, {
        "date": "17",
        "visits": 299
    }, {
        "date": "18",
        "visits": 356
    }, {
        "date": "19",
        "visits": 389
    }, {
        "date": "20",
        "visits": 409
    }, {
        "date": "21",
        "visits": 463
    }, {
        "date": "22",
        "visits": 488
    }, {
        "date": "23",
        "visits": 523
    }, {
        "date": "24",
        "visits": 567
    }, {
        "date": "25",
        "visits": 555
    }, {
        "date": "26",
        "visits": 537
    }];
    chart.padding(10, 0, 0, 5);

    // Create axes
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "date";
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.grid.template.disabled = true;
    categoryAxis.renderer.minGridDistance = 30;
    categoryAxis.tooltip.disabled = true;
    categoryAxis.renderer.minGridDistance = 22;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.renderer.minWidth = 20;
    valueAxis.renderer.labels.template.disabled = true;

    // Create series
    var series = chart.series.push(new am4charts.ColumnSeries());
    series.sequencedInterpolation = true;
    series.dataFields.valueY = "visits";
    series.dataFields.categoryX = "date";
    series.tooltip.pointerOrientation = "vertical";
    series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
    series.columns.template.strokeWidth = 0;
    series.columns.template.column.cornerRadiusTopLeft = 10;
    series.columns.template.column.cornerRadiusTopRight = 10;
    series.columns.template.column.fillOpacity = 0.8;

    // on hover, make corner radiuses bigger
    var hoverState = series.columns.template.column.states.create("hover");
    hoverState.properties.cornerRadiusTopLeft = 0;
    hoverState.properties.cornerRadiusTopRight = 0;
    hoverState.properties.fillOpacity = 1;

    series.columns.template.adapter.add("fill", function(fill, target) {
        return chart.colors.getIndex(target.dataItem.index);
    });

    // Cursor
    chart.cursor = new am4charts.XYCursor();
}

// 시간대별 PM이용 현황
function chart2() {
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create("pm_number", am4charts.XYChart);
    chart.data = [{
        "time": "08",
        "income": 2
    }, {
        "time": "09",
        "income": 9
    }, {
        "time": "10",
        "income": 12
    }, {
        "time": "11",
        "income": 16
    }, {
        "time": "12",
        "income": 22
    }, {
        "time": "13",
        "income": 26
    }, {
        "time": "14",
        "income": 34
    }, {
        "time": "15",
        "income": 28
    }, {
        "time": "16",
        "income": 26
    }, {
        "time": "17",
        "income": 29
    }, {
        "time": "18",
        "income": 21
    }, {
        "time": "19",
        "income": 18
    }, {
        "time": "20",
        "income": 11
    }, {
        "time": "21",
        "income": 8
    }, {
        "time": "22",
        "income": 5
    }];

    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.ticks.template.disabled = true;
    categoryAxis.renderer.line.opacity = 0;
    categoryAxis.renderer.grid.template.disabled = true;
    categoryAxis.renderer.minGridDistance = 40;
    categoryAxis.dataFields.category = "time";
    categoryAxis.startLocation = 0.4;
    categoryAxis.endLocation = 0.6;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.tooltip.disabled = true;
    valueAxis.renderer.line.opacity = 0;
    valueAxis.renderer.ticks.template.disabled = true;
    valueAxis.min = 0;
    valueAxis.renderer.labels.template.disabled = true;

    var lineSeries = chart.series.push(new am4charts.LineSeries());
    lineSeries.dataFields.categoryX = "time";
    lineSeries.dataFields.valueY = "income";
    lineSeries.tooltipText = "{valueY.value}";
    lineSeries.fillOpacity = 0.2;
    lineSeries.strokeWidth = 1;
    lineSeries.fill = am4core.color("#a660ff");
    lineSeries.stroke = am4core.color("#a660ff");
    lineSeries.propertyFields.stroke = "lineColor";
    lineSeries.propertyFields.fill = "lineColor";

    var bullet = lineSeries.bullets.push(new am4charts.CircleBullet());
    bullet.circle.radius = 4.5;
    bullet.circle.fill = am4core.color("#a660ff");
    bullet.circle.stroke = am4core.color("#a660ff");
    bullet.circle.strokeWidth = 1;

    chart.cursor = new am4charts.XYCursor();
    chart.cursor.behavior = "panX";
    chart.cursor.lineX.opacity = 0;
    chart.cursor.lineY.opacity = 0;
}

// Day 패스 구매 현황
function chart3(A="4",B="3",C="0") {
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create("pass_sales", am4charts.XYChart);
    chart.padding(5,5,5,5);

    var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.dataFields.category = "network";
    categoryAxis.renderer.minGridDistance = 1;
    categoryAxis.renderer.inversed = true;
    categoryAxis.renderer.grid.template.disabled = true;

    var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
    valueAxis.min = 0;

    var series = chart.series.push(new am4charts.ColumnSeries());
    series.dataFields.categoryY = "network";
    series.dataFields.valueX = "MAU";
    series.tooltipText = "{valueX.value}"
    series.columns.template.strokeOpacity = 0;
    series.columns.template.column.cornerRadiusBottomRight = 5;
    series.columns.template.column.cornerRadiusTopRight = 5;

    var labelBullet = series.bullets.push(new am4charts.LabelBullet())
    labelBullet.label.horizontalCenter = "left";
    labelBullet.label.dx = 10;
    labelBullet.label.text = "{values.valueX.workingValue.formatNumber()}";
    labelBullet.locationX = 1;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
    series.columns.template.adapter.add("fill", function(fill, target){
        return chart.colors.getIndex(target.dataItem.index);
    });

    categoryAxis.sortBySeries = series;
    chart.data = [
        {
            "network": "스마트교통 패키지",
            "MAU": A
        },
        {
            "network": "삼성카드 패키지",
            "MAU": B
        },
        {
            "network": "KTX 패키지",
            "MAU": C
        }
    ]
}

// 이용자 성별/연령 현황
function chart4(A='14',B='43',C='19',D='18',E='50') {
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create("age_distribution", am4charts.XYChart);

    // Add data
    chart.data = [{
        "age": "10대",
        "visits": A
    }, {
        "age": "20대",
        "visits": B
    }, {
        "age": "30대",
        "visits": C
    }, {
        "age": "40대",
        "visits": D
    }, {
        "age": "50대",
        "visits": E
    }];

    // Create axes
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "age";
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.grid.template.disabled = true;
    categoryAxis.renderer.minGridDistance = 30;
    categoryAxis.tooltip.disabled = true;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.renderer.minWidth = 50;
    valueAxis.renderer.grid.template.disabled = true;
    valueAxis.renderer.labels.template.disabled = true;

    // Create series
    var series = chart.series.push(new am4charts.ColumnSeries());
    series.sequencedInterpolation = true;
    series.dataFields.valueY = "visits";
    series.dataFields.categoryX = "age";
    series.tooltip.pointerOrientation = "vertical";
    series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
    series.columns.template.strokeWidth = 0;
    series.columns.template.column.cornerRadiusTopLeft = 10;
    series.columns.template.column.cornerRadiusTopRight = 10;
    series.columns.template.column.fillOpacity = 0.8;

    // on hover, make corner radiuses bigger
    var hoverState = series.columns.template.column.states.create("hover");
    hoverState.properties.cornerRadiusTopLeft = 0;
    hoverState.properties.cornerRadiusTopRight = 0;
    hoverState.properties.fillOpacity = 1;

    series.columns.template.adapter.add("fill", function(fill, target) {
        return chart.colors.getIndex(target.dataItem.index);
    });

    // Cursor
    chart.cursor = new am4charts.XYCursor();
}

// 앱사용자 현황
function chart5(A="54",B="46") {
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create("user_device", am4charts.PieChart);

    // Add data
    chart.data = [ {
        "device": "Android",
        "user": A
    }, {
        "device": "iOS",
        "user": B
    }];

    // Add and configure Series
    var pieSeries = chart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "user";
    pieSeries.dataFields.category = "device";
    pieSeries.slices.template.stroke = am4core.color("#fff");
    pieSeries.slices.template.strokeOpacity = 1;

    // This creates initial animation
    pieSeries.hiddenState.properties.opacity = 1;
    pieSeries.hiddenState.properties.endAngle = -90;
    pieSeries.hiddenState.properties.startAngle = -90;

    pieSeries.colors.list = [
        am4core.color("#4099ff"),
        am4core.color("#5ad3e2"),
    ];

    chart.hiddenState.properties.radius = am4core.percent(0);
}

// 매장 예약 현황
function chart6(A="1",B="4",C="5",D="10",E="6",F="4",G="3",H="4",I="5",J="6",K="1",L="0",M="0") {
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create("time_booking", am4charts.XYChart);

    // Add data
    chart.data = [{
        "time": "10시",
        "value": A
    }, {
        "time": "11시",
        "value": B
    }, {
        "time": "12시",
        "value": C
    }, {
        "time": "13시",
        "value": D
    }, {
        "time": "14시",
        "value": E
    }, {
        "time": "15시",
        "value": F
    }, {
        "time": "16시",
        "value": G
    }, {
        "time": "17시",
        "value": H
    }, {
        "time": "18시",
        "value": I
    }, {
        "time": "19시",
        "value": J
    }, {
        "time": "20시",
        "value": K
    }, {
        "time": "21시",
        "value": L
    }, {
        "time": "22시",
        "value": M
    }];

    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.renderer.grid.template.location = 0;
    categoryAxis.renderer.ticks.template.disabled = true;
    categoryAxis.renderer.line.opacity = 0;
    categoryAxis.renderer.grid.template.disabled = true;
    categoryAxis.renderer.minGridDistance = 40;
    categoryAxis.dataFields.category = "time";
    categoryAxis.startLocation = 0.4;
    categoryAxis.endLocation = 0.6;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.tooltip.disabled = true;
    valueAxis.renderer.line.opacity = 0;
    valueAxis.renderer.ticks.template.disabled = true;
    valueAxis.min = 0;
    valueAxis.renderer.labels.template.disabled = true;

    var lineSeries = chart.series.push(new am4charts.LineSeries());
    lineSeries.dataFields.categoryX = "time";
    lineSeries.dataFields.valueY = "value";
    lineSeries.tooltipText = "{valueY.value}";
    lineSeries.fillOpacity = 0;
    lineSeries.strokeWidth = 1;
    lineSeries.stroke = am4core.color("#044684");
    lineSeries.propertyFields.stroke = "lineColor";
    lineSeries.propertyFields.fill = "lineColor";

    var bullet = lineSeries.bullets.push(new am4charts.CircleBullet());
    bullet.circle.radius = 4.5;
    bullet.circle.fill = am4core.color("#044684");
    bullet.circle.stroke = am4core.color("#0076e4");
    bullet.circle.strokeWidth = 1;

    chart.cursor = new am4charts.XYCursor();
    chart.cursor.behavior = "panX";
    chart.cursor.lineX.opacity = 0;
    chart.cursor.lineY.opacity = 0;
}

chart1();
chart2();
chart3();
chart4();
chart5();
chart6();