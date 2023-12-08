<?php
session_start();
if(empty($_SESSION["bhw-username"]) || $_SESSION["bhw-username"] == "") {
    header("location: ../../login-bhw.php");
    exit;
}
include "../../backend/bhw/_dashboard.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Vax-Care</title>
        <link rel="stylesheet" href="../assets/css/bhw-recipient.css">
        <link rel="icon" href="../assets/images/favicon.png">
    </head>

    <body>
        <input type="checkbox" id="menu-toggle">

        <?php
        $pageTitle = "Dashboard";
        include "../templates/sidebar-bhw.php";
        include "../templates/header.php";
        ?>

        <main>
            <section class="card-container grid">
                <a href="inventory.php" class="card">
                        <img src="../assets/images/vaccination-64px.png" alt="Vaccine icon">
                        <p>Vaccines Available</p>
                        <h2><?php if ($result){ echo $totalAvailable; } ?></h2>
                </a>
                <a href="schedules.php" class="card" alt="Decline icon">
                    <img src="../assets/images/decline-pink-64px.png">
                    <p>Pentavalent Dropout</p>
                    <h2><?php if ($result){ echo $pentaDropout; } ?></h2>
                </a>
                <a href="inventory.php" class="card" alt="Decline icon">
                    <img src="../assets/images/decline-64px.png">
                    <p>MCV Dropout</p>
                    <h2><?php if ($result){ echo $mcvDropout; } ?></h2>
                </a>
                <a href="../public/bhw-newborns.php" class="card" alt="Recipient icon">
                    <img src="../assets/images/maternal-64px.png">
                    <p>Immunization Coverage</p>
                    <h2><?php if ($result){ echo $immunization; } ?></h2>
                </a>
            </section>
            
            <div class="grid-2cols uneven">
                <section id="linechart-container" class="grid-item chart"></section>
                <section id="piechart-container" class="grid-item chart"></section>
            </div>

            <div class="grid-2cols uneven-reversed">
                <section id="piechart2-container" class="grid-item chart"></section>
                <section id="columnchart-container" class="grid-item chart"></section>
            </div>

            <div class="grid-2cols uneven">
                <section id="barchart-container" class="grid-item chart"></section>
                <section id="piechart3-container" class="grid-item chart"></section>
            </div>

            <script>
                window.addEventListener("resize", function(){
                    location.reload();
                })

                window.onload = function () {
                    CanvasJS.addColorSet("purpleShades",
                    ["#7365B0", "#9D93C7", "#B9B2D7"]
                    );

                    CanvasJS.addColorSet("pinkShades",
                    ["#EC79BE", "#B44981", "#864A69"]
                    );

                var lineChart = new CanvasJS.Chart("linechart-container", {
                    margin: 0,
                    padding: 0,
                    backgroundColor: "transparent",
                    animationEnabled: true,
                    title: {
                        text: "Total Vaccinations per Month in 2023",
                        fontFamily: "'Inter', sans-serif",
                        fontWeight: "bold",
                        fontSize: "18",
                        fontColor: "#7365B0",
                        padding: 10,
                    },
                    legend: {
                        horizontalAlign: "center",
                        verticalAlign: "top",
                        fontFamily: "'Inter', sans-serif",
                    },
                    axisX: {
                        margin: 50,
                        interval: 1,
                        intervalType: "month",
                        valueFormatString: "-",
                        maximum: 13,
                        lineThickness: 0,
                        tickThickness: 0,
                        labelFontSize: 11,
                    },
                    axisY: {
                        lineThickness: 0,
                        tickThickness: 0,
                        labelFontSize: 10,
                        gridColor: "#F1F0F7",
                    },
                    toolTip: {
                        shared: true,
                        fontFamily: "'Inter', sans-serif",
                    },
                    data: [{
                            type: "line",
                            name: "Newborn",
                            lineColor: "#7365B0",
                            showInLegend: true,
                            legendMarkerColor: "#7365B0",
                            dataPoints: <?php echo json_encode($lineData, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "line",
                            name: "Pregnant",
                            fontSize: "10",
                            lineColor: "#B44981",
                            showInLegend: true,
                            legendMarkerColor: "#B44981",
                            dataPoints: <?php echo json_encode($lineData2, JSON_NUMERIC_CHECK); ?>
                        }]
                });
                lineChart.render();

                var pieChart = new CanvasJS.Chart("piechart-container", {
                    backgroundColor: "transparent",
                    padding: 0,
                    animationEnabled: true,
                    colorSet: "purpleShades",
                    title: {
                        padding: 10,
                        text: "Immunization Status of Pregnant Women",
                        fontFamily: "'Inter', sans-serif",
                        fontWeight: "bold",
                        fontSize: "18",
                        fontColor: "#7365B0",
                    },
                    data: [{
                        type: "pie",
                        name: "",
                        radius: "90%",
                        startAngle: -5,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                        indexLabelPlacement: "outside",
                        indexLabelFontColor: "#36454F",
                        dataPoints: <?php echo json_encode($pregnantPieData, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                pieChart.render();

                var pieChart2 = new CanvasJS.Chart("piechart2-container", {
                    backgroundColor: "transparent",
                    padding: 0,
                    animationEnabled: true,
                    colorSet: "pinkShades",
                    title: {
                        padding: 10,
                        text: "Immunization Status of Newborns",
                        fontFamily: "'Inter', sans-serif",
                        fontWeight: "bold",
                        fontSize: "18",
                        fontColor: "#7365B0",
                    },
                    data: [{
                        type: "pie",
                        name: "",
                        radius: "90%",
                        startAngle: 85,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                        indexLabelPlacement: "outside",
                        indexLabelFontColor: "#36454F",
                        dataPoints: <?php echo json_encode($newbornPieData, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                pieChart2.render();

                var columnChart = new CanvasJS.Chart("columnchart-container", {
                    backgroundColor: "transparent",
                    margin: 0,
                    padding: 0,
                    animationEnabled: true,
                    dataPointWidth: 35,
                    colorSet: "purpleShades",
                    title: {
                        text: "Total Vaccines On Hand per Status",
                        fontFamily: "'Inter', sans-serif",
                        fontWeight: "bold",
                        fontSize: "18",
                        fontColor: "#7365B0",
                        padding: 10,
                    },
                    legend: {
                        horizontalAlign: "center",
                        verticalAlign: "top",
                    },
                    axisX: {
                        margin: 50,
                        lineThickness: 0,
                        tickThickness: 0,
                        labelFontSize: 12,
                    },
                    axisY: {
                        interval: 5,
                        maximum: 50,
                        lineThickness: 0,
                        tickThickness: 0,
                        labelFontSize: 12,
                        gridColor: "#F1F0F7"
                    },
                    toolTip: {
                        shared: true
                    },
                    data: [{
                            type: "column",
                            name: "Reserved",
                            indexLabel: "{y}",
                            showInLegend: true,
                            legendMarkerColor: "#7365B0", 
                            dataPoints: <?php echo json_encode($columnData, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "column",
                            name: "Available",
                            showInLegend: true,
                            indexLabel: "{y}",
                            legendMarkerColor: "#9D93C7", 
                            dataPoints: <?php echo json_encode($columnData2, JSON_NUMERIC_CHECK); ?>
                        }
                    ]
                });
                columnChart.render();

                var barChart = new CanvasJS.Chart("barchart-container", {
                    margin: 0,
                    padding: 0,
                    animationEnabled: true,
                    dataPointWidth: 25,
                    backgroundColor: "transparent",
                    colorSet: "purpleShades",
                    title: {
                        text: "Distribution of Newborn Status per Sitio",
                        fontFamily: "'Inter', sans-serif",
                        fontWeight: "bold",
                        fontSize: "18",
                        fontColor: "#7365B0",
                        padding: 10,
                    },
                    legend: {
                        horizontalAlign: "center",
                        verticalAlign: "top",
                    },
                    axisX: {
                        margin: 20,
                        lineThickness: 0,
                        tickThickness: 0,
                        labelFontSize: 12,
                    },
                    axisY: {
                        interval: 2,
                        minimum: 0,
                        lineThickness: 0,
                        tickThickness: 0,
                        labelFontSize: 12,
                        gridColor: "#F1F0F7"
                    },
                    toolTip: {
                        shared: true
                    },
                    data: [{
                            type: "stackedBar",
                            name: "NI",
                            showInLegend: true,
                            legendMarkerColor: "#7365B0",
                            dataPoints: <?php echo json_encode($barData1, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "stackedBar",
                            name: "PI",
                            showInLegend: true,
                            legendMarkerColor: "#9d93c7",
                            dataPoints: <?php echo json_encode($barData2, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "stackedBar",
                            name: "FI",
                            showInLegend: true,
                            legendMarkerColor: "#b9b2d7",
                            dataPoints: <?php echo json_encode($barData3, JSON_NUMERIC_CHECK); ?>
                        }
                    ]
                });
                barChart.render();

                var pieChart = new CanvasJS.Chart("piechart3-container", {
                    padding: 0,
                    animationEnabled: true,
                    backgroundColor: "transparent",
                    colorSet: "purpleShades",
                    title: {
                        text: "Sex Distribution of Newborns",
                        fontFamily: "'Inter', sans-serif",
                        fontWeight: "bold",
                        fontSize: "18",
                        fontColor: "#7365B0",
                        padding: 10,
                    },
                    data: [{
                        type: "pie",
                        name: "",
                        radius: "90%",
                        startAngle: 240,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                        indexLabelPlacement: "outside",
                        indexLabelFontColor: "#36454F",
                        dataPoints: <?php echo json_encode($sexPieData, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                pieChart.render();
            }
            </script>
            <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
        </main>
    </body>
</html>