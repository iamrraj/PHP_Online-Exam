<?php include 'includes/check_user.php'; 
include 'includes/fetch_records.php';
?>

<!DOCTYPE html>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer1", {
	theme: "light1", 
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Piechart presentation of students assessments in FAIL and PASS"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 14,
		indexLabel: "{label} - {y}",
		dataPoints: [
			{ y: <?php echo "$std_pass"; ?>, label: "Student Passing Exams" },
            { y: <?php echo "$std_fails"; ?>, label: "Student Failing Exams" },
            { y: <?php echo "$departments"; ?>, label: "Student Passing Exams" },
            { y: <?php echo "$students"; ?>, label: "Student Failing Exams" },
            { y: <?php echo "$subjects"; ?>, label: "Student Passing Exams" },
            { y: <?php echo "$categories"; ?>, label: "Student Failing Exams" },
            { y: <?php echo "$notice"; ?>, label: "Student Failing Exams" },
            { y: <?php echo "$questions"; ?>, label: "Student Passing Exams" },
            { y: <?php echo "$banned_students"; ?>, label: "Student Failing Exams" }

		]
	}]
});
chart.render();

}
</script>
</head>
<body>


<div id="chartContainer1"  style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                            </div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>