<?php
$dataPoints1 = array(
    array("label" => "Food + Drinks", "y" => 590),
    array("label" => "Activities and Entertainments", "y" => 261),
    array("label" => "Health and Fitness", "y" => 158),
    array("label" => "Shopping & Misc", "y" => 72),
    array("label" => "Transportation", "y" => 191),
    array("label" => "Rent", "y" => 573),
    array("label" => "Travel Insurance", "y" => 126)
);

?>

<!DOCTYPE HTML>
<html>

<head>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
    window.onload = function() {
        var chart1 = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            exportEnabled: true,
            title: {
                text: "Top 10 sản phẩm được mua nhiều nhất"
            },
            subtitles: [{
                text: "Currency Used: Thai Baht (฿)"
            }],
            data: [{
                type: "pie",
                showInLegend: true,
                legendText: "{label}",
                indexLabelFontSize: 20,
                indexLabel: "{label} - #percent%",
                yValueFormatString: "฿#,##0",
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart1.render();
    }
    </script>
</head>



</html>
<!-- h -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<span>Thống kê theo <b>
    </b> </span>
<form action="index.php?act=thongke" method="post">
    <select name="timeRange" id="">
        <option value="365day"> 365 ngày</option>
        <option value="28day"> 28 ngày</option>
        <option value="7day"> 7 ngày</option>

    </select>
    <input type="submit" name="submittk" value="change">
</form>
<canvas id="myChart" width="800px" height="200px"></canvas>
<?php

$doanhthu = [];
$time = [];
foreach ($thongke as $tk) {
    extract($tk);
    array_push($doanhthu, $total_amount);
    array_push($time, $month_year);
}
echo '<script>';
echo 'const phpData = ' . json_encode($doanhthu) . ';';
echo 'const phpLabels = ' . json_encode($time) . ';';
echo '</script>';
?>
<script>
// Move data definition above the config object
const labels = phpLabels;
const data = {
    labels: labels,
    datasets: [{
        label: 'My First Dataset',
        data: phpData,
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
    }]
};
// Global Options
const config = {
    type: 'line',
    data: data,
};

let myChart = document.getElementById('myChart').getContext('2d');
new Chart(myChart, config);
</script>

<body>
    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
</body>