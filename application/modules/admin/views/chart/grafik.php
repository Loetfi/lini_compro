<div class="page-title text-center">
    <h2 class="title"><?php echo @$title; ?></h2> 
</div>
<div class="breadcrumbs">
    <?php echo $this->breadcrumbs->show(); ?>
</div>

<!-- script src="https://code.highcharts.com/highcharts.js"></script -->
<!-- script src="https://code.highcharts.com/modules/exporting.js"></script --> 
<script src="<?php echo base_url('assets/front/plugins/highcharts/highcharts.js'); ?>"></script>
<script src="<?php echo base_url('assets/front/plugins/highcharts/exporting.js'); ?>"></script>

<br><br>
<div class="table-responsive">

    <div class="col-md-12" style="padding-bottom: 50px">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Tahunan</h3> 
            </div>
            <div class="panel-body">
				<select class="form-control" id="tahunTahunan">
                    <?php for($i=date('Y'); $i>2015; $i--){ ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <div id="grafikTahunan"></div>
            </div>
        </div>
    </div>

    <div class="col-md-6" style="padding-bottom: 50px">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Tindakan</h3> 
            </div>
            <div class="panel-body">
				<form class="form" action="#"> 
                    <div class="form-group">
                        <select class="form-control" id="bulanTindakan">
							<?php for($i=1; $i<=12; $i++){ ?>
                            <option value="<?php echo $i; ?>" <?php echo (int)date('m')-1 == $i ? 'selected':''; ?>><?php echo date('F', mktime(0, 0, 0, $i, 10)); ?></option>
							<?php } ?>
                        </select>
                    </div> 
                </form>
                <div id="pieTindakan" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div> 

    <div class="col-md-6" style="padding-bottom: 50px">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Pesebaran Terusan Unit</h3> 
            </div>
            <div class="panel-body">
                <form class="form" action="#"> 
                    <div class="form-group">
                        <select class="form-control" id="bulanTerusan">
							<?php for($i=1; $i<=12; $i++){ ?>
                            <option value="<?php echo $i; ?>" <?php echo (int)date('m')-1 == $i ? 'selected':''; ?>><?php echo date('F', mktime(0, 0, 0, $i, 10)); ?></option>
							<?php } ?>
                        </select>
                    </div> 
                </form>
                
                <div id="pieTerusan" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div> 

	<div class="col-md-6" style="padding-bottom: 50px">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Sumber Permohonan</h3> 
            </div>
            <div class="panel-body">
                <form class="form" action="#"> 
                    <div class="form-group">
                        <select class="form-control" id="bulanSumber">
							<?php for($i=1; $i<=12; $i++){ ?>
                            <option value="<?php echo $i; ?>" <?php echo (int)date('m')-1 == $i ? 'selected':''; ?>><?php echo date('F', mktime(0, 0, 0, $i, 10)); ?></option>
							<?php } ?>
                        </select>
                    </div> 
                </form>
				
                <div id="pieSumber" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </div> 

    
<script type="text/javascript">
    
    Highcharts.setOptions({
        colors: ['#FFDA44', '#000000']
    });

    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: '.....'
        },
        subtitle: {
            text: '.....'
        },
        xAxis: {
            categories: <?php echo json_encode($ataskiri); ?>,
            crosshair: true 
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: <?php echo json_encode($dataataskiri,JSON_NUMERIC_CHECK); ?>
        // [{
        //     name: 'Tokyo',
        //     data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        // }, {
        //     name: 'New York',
        //     data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        // } ]
    });

     Highcharts.chart('kananatas', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
            ],
            crosshair: true 
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        } ]
    });
</script>



    <script type="text/javascript">
    // Build the chart
    



</script>






</div> 
<script>

// $('#grafikTahunan').highcharts(function(){
    
// });

$('#bulanTindakan').change(function(){
	$.ajax({
        method: 'POST',
        type: 'json',
        url: '<?php echo site_url('admin/chart/getDiagramPieTindakan'); ?>',
        data: {
            tahun: tahun,
            bulan: $('#bulanTindakan').val(),
        },
        beforeSend: function( ) {
            // $('.card-loading').css('display','block');
        },
        success: function(data) {
            
            $('#pieTindakan').highcharts({
                credits: { enabled: false },
                chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Tindakan'
				},
				tooltip: {
					pointFormat: '{point.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				series: [{
					name: 'Tindakan',
					colorByPoint: true,
					data: data.series
				}]
            });

        },
        error: function() {
            // alert('Some Error. Please Try Again');
        },
        complete: function(){
            // $('.card-loading').css('display','none');
        }
    });
});
$('#bulanTerusan').change(function(){
	$.ajax({
        method: 'POST',
        type: 'json',
        url: '<?php echo site_url('admin/chart/getDiagramPieTerusan'); ?>',
        data: {
            tahun: tahun,
			bulan: $('#bulanTerusan').val(),
        },
        beforeSend: function( ) {
            // $('.card-loading').css('display','block');
        },
        success: function(data) {
            
            $('#pieTerusan').highcharts({
                credits: { enabled: false },
                chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Pesebaran Terusan Unit'
				},
				tooltip: {
					pointFormat: '{point.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				series: [{
					name: 'Unit',
					colorByPoint: true,
					data: data.series
				}]
            });

        },
        error: function() {
            // alert('Some Error. Please Try Again');
        },
        complete: function(){
            // $('.card-loading').css('display','none');
        }
    });

});
$('#bulanSumber').change(function(){
	$.ajax({
        method: 'POST',
        type: 'json',
        url: '<?php echo site_url('admin/chart/getDiagramPieSumber'); ?>',
        data: {
            tahun: tahun,
            bulan: $('#bulanSumber').val(),
        },
        beforeSend: function( ) {
            // $('.card-loading').css('display','block');
        },
        success: function(data) {
            
            $('#pieSumber').highcharts({
                credits: { enabled: false },
                chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				title: {
					text: 'Sumber Permohonan'
				},
				tooltip: {
					pointFormat: '{point.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				series: [{
					name: 'Sumber',
					colorByPoint: true,
					data: data.series
				}]
            });

        },
        error: function() {
            // alert('Some Error. Please Try Again');
        },
        complete: function(){
            // $('.card-loading').css('display','none');
        }
    });
	
});

$('#tahunTahunan').change(function(){
    tahun = $(this).val();
    $.ajax({
        method: 'POST',
        type: 'json',
        url: '<?php echo site_url('admin/chart/getDiagramBatang'); ?>',
        data: {
            tahun: tahun
        },
        beforeSend: function( ) {
            // $('.card-loading').css('display','block');
        },
        success: function(data) {
            // console.log(data);
            
            // Highcharts.chart('grafikTahunan', {})
            $('#grafikTahunan').highcharts({
                chart: { type: 'column' },
                credits: { enabled: false },
                title: { text: 'Rekap Tahunan ' },
                // subtitle: { text: 'Source: WorldClimate.com' },
                xAxis: {
                    categories: data.categories,
                    crosshair: true 
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Terhitung'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f} permohonan</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: data.series
            });

        },
        error: function() {
            // alert('Some Error. Please Try Again');
        },
        complete: function(){
            // $('.card-loading').css('display','none');
        }
    });
	
	$('#bulanTindakan').change();
	$('#bulanTerusan').change();
	$('#bulanSumber').change();
	
	
	
});


$('#tahunTahunan').change();
</script>
