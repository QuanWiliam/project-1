<?php
$dataPoints1 = array(
    array("label"=> "Food + Drinks", "y"=> 590),
    array("label"=> "Activities and Entertainments", "y"=> 261),
    array("label"=> "Health and Fitness", "y"=> 158),
    array("label"=> "Shopping & Misc", "y"=> 72),
    array("label"=> "Transportation", "y"=> 191),
    array("label"=> "Rent", "y"=> 573),
    array("label"=> "Travel Insurance", "y"=> 126)
);

$dataPoints2 = array(
    array("label"=> "WordPress", "y"=> 60.0),
    array("label"=> "Joomla", "y"=> 6.5),
    array("label"=> "Drupal", "y"=> 4.6),
    array("label"=> "Magento", "y"=> 2.4),
    array("label"=> "Blogger", "y"=> 1.9),
    array("label"=> "Shopify", "y"=> 1.8),
    array("label"=> "Bitrix", "y"=> 1.5),
    array("label"=> "Squarespace", "y"=> 1.5),
    array("label"=> "PrestaShop", "y"=> 1.3),
    array("label"=> "Wix", "y"=> 0.9),
    array("label"=> "OpenCart", "y"=> 0.8)
);
?>

<!DOCTYPE HTML>
<html>
<head>  
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
window.onload = function () {
    var chart1 = new CanvasJS.Chart("chartContainer1", {
        animationEnabled: true,
        exportEnabled: true,
        title:{
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

    var chart2 = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "CMS Market Share - 2017"
        },
        axisY: {
            suffix: "%",
            scaleBreaks: {
                autoCalculate: true
            }
        },
        data: [{
            type: "column",
            yValueFormatString: "#,##0\"%\"",
            indexLabel: "{y}",
            indexLabelPlacement: "inside",
            indexLabelFontColor: "white",
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart2.render();
}
</script>
</head>
<body>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
<div id="chartContainer2" style="height: 370px; width: 100%; margin-top: 50px;"></div>
</body>
</html>
