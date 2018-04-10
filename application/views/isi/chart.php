<section id="chart" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                	<div id="container"></div>
                    <script type="text/javascript">
						Highcharts.chart('container', {
						    title: {
						        text: 'Statistik'
						    },

						    subtitle: {
						        text: 'Pengisi Buku Tamu dalam Seminggu terakhir'
						    },

						    yAxis: {
						        title: {
						            text: 'Jumlah Pengisi Buku Tamu'
						        }
						    },
						    xAxis: {
						        title: {
						            text: 'X Hari sebelum hari ini'
						        }
						    },
						    legend: {
						        layout: 'vertical',
						        align: 'right',
						        verticalAlign: 'middle'
						    },

						    plotOptions: {
						        series: {
						            label: {
						                connectorAllowed: false
						            },
						            pointStart: 0
						        }
						    },

						    series: [{
						        name: 'Jumlah Pengisi',
						        data: [<?php echo $dataChart[0][0]['count(ID)'];?>, <?php echo $dataChart[1][0]['count(ID)'];?>, 
						        <?php echo $dataChart[2][0]['count(ID)'];?>, <?php echo $dataChart[3][0]['count(ID)'];?>, 
						        <?php echo $dataChart[4][0]['count(ID)'];?>, <?php echo $dataChart[5][0]['count(ID)'];?>, 
						        <?php echo $dataChart[6][0]['count(ID)'];?>]
						    }],

						    responsive: {
						        rules: [{
						            condition: {
						                maxWidth: 500
						            },
						            chartOptions: {
						                legend: {
						                    layout: 'horizontal',
						                    align: 'center',
						                    verticalAlign: 'bottom'
						                }
						            }
						        }]
						    }

						});
					</script>
                </div>
            </div>
</section>