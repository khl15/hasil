<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
    var auto_refresh = setInterval(
        function() {
            $.ajax({
                type: 'POST',
                url: 'showHES.php',
                success: function(data) {
                    var dt = data.split("@");
                    var chart1 = new CanvasJS.Chart("chartContainer1", {
                        animationEnabled: true,
                        data: [{
                            type: "pie",
                            startAngle: 240,
                            yValueFormatString: "##0.00\"%\"",
                            indexLabel: "{label} {y}",
                            dataPoints: [{
                                    y: dt[3],
                                    label: "Merlin Dwiningtyas ("+dt[0]+" Suara)"
                                },
                                {
                                    y: dt[4],
                                    label: "Mahasin ("+dt[1]+" Suara)"
                                },
                                {
                                    y: dt[5],
                                    label: "Golput/Belum Memilih ("+dt[2]+" Suara)"
                                }
                            ]
                        }]
                    });
                    chart1.render();
                }
            })
        }, 30000);
</script>
<div id="chartContainer1" style="height: 300px; max-width: 920px; margin: 0px auto;"></div>