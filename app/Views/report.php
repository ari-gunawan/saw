<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!--Page header-->
<!-- <div class="row">
	<div class="col-xl-12 col-md-6 mb-4">
		<div class="card d-flex">
			<div class="card-header">
				<h4 class="page-title mb-0 text-primary">Rata-rata Capaian RM Mantri RO Jakarta 2</h4>
			</div>
			<canvas id="myChart">

			</canvas>
		</div>
	</div>
</div> -->
<!-- End Row-1 -->
<div>
    <iframe width="100%" height="800" src="https://lookerstudio.google.com/embed/reporting/95dd7c6d-b926-4fe1-9562-9545620d86dd/page/DMDmD" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Kanca 1', 'Kanca 2', 'Kanca 3', 'Kanca 4', 'Kanca 5', 'Kanca 6', 'Kanca 7', 'Kanca 8', ],
            datasets: [{
                label: 'Penjualan',
                data: [100, 200, 300, 400, 500, 800, 400, 200, 100, 500, 460],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


<?= $this->endSection() ?>