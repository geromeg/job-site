<h1 class="page-heading">Reports</h1>
<div class="graph-container">
	<div class="graph-item-container"><canvas id="myChart" class="chart" width="35%" height="35%"></canvas></div>
	<div class="graph-item-container"><canvas id="myChart2" class="chart" width="35%" height="35%"></canvas></div>
</div>
<script type="text/javascript">

	var ctx = $("#myChart").get(0).getContext("2d");
	var ctx2 = $("#myChart2").get(0).getContext("2d");

	var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "#F89406",
            strokeColor: "#F89406",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#F89406",
            pointHighlightStroke: "rgba(20,20,20,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "#4183D7",
            strokeColor: "#4183D7",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ]
};
Chart.defaults.global.responsive = true;

	var myLineChart = new Chart(ctx).Line(data,  {bezierCurve: false});

	var myLineChart2 = new Chart(ctx2).Bar(data,  {bezierCurve: false});



</script>