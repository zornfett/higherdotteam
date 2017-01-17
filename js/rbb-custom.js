
// Google pie chart gen
google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

	$.ajax({
		url: 'incl/db-header.php',
		data: "",
		dataType: 'json',
		success: function(data) {
			var sex = data[3];
			// $('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);
			console.log(sex);
		} 
	});

	var data = google.visualization.arrayToDataTable([
		['Task', 'Hours per Day'],
		['Work',     11],
		['Eat',      2],
		['Commute',  2],
		['Watch TV', 2],
		['Sleep',    7]
	]);

	var options = {
		title: 'My Daily Activities',
		is3D: true,
	};

	var chart = new google.visualization.PieChart(document.getElementById('pie-chart-letters'));
	chart.draw(data, options);
}
