

<?php


$server = "localhost";
$username = "root";
$password = "root";
$db = "jobfinder";
$port = 3306;

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// A function for general queries.
function query_to_db($conn, $sql){
    $result = mysqli_query($conn, $sql);
    return $result;
}

// Receving the submitted data
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];
$q9 = $_POST["q9"];
$q10 = $_POST["q10"];
$q11 = $_POST["q11"];
$q12 = $_POST["q12"];
$q13 = $_POST["q13"];
$q14 = $_POST["q14"];
$q15 = $_POST["q15"];
$q16 = $_POST["q16"];
$q17 = $_POST["q17"];
$q18 = $_POST["q18"];
$q19 = $_POST["q19"];
$q20 = $_POST["q20"];

$score =  $q1 + $q2 + $q3 + $q4 + $q5;
$score2 =  $q6 + $q7 + $q8 + $q9 + $q10;
$score3 =  $q11 + $q12 + $q13 + $q14 + $q15;
$score4 =  $q16 + $q17 + $q18 + $q19 + $q20;


//$save = "INSERT INTO userinfo (score, score1, score2, score3) VALUES ('$score', '$score2', '$score3','$score4');";
//query_to_db($conn, $save);

$totalScore = $score + $score2 + $score3 + $score4;
$query = "Select job_title From job_results where score = '$totalScore'";
$result = query_to_db($conn,$query);
$row = $result->fetch_array(MYSQLI_NUM);


echo "
<html>
<head>
  <style type='text/css'>
  .scoreResults{
    margin-top:150px;
  }
  </style>
</head>
<div class ='scoreResults'>
  <h1>Here we go!</h2>
  <p>Your Social score is " . $score . ".</p>
  <p>Your Technical score is " . $score2 . ".</p>
  <p>Your Management score is " . $score3 . ".</p>
  <p>Your Information Researcher score is " . $score4 . ".</p>
  <h3>Your recommended career is:". $row[0] . "<h3>
</div>
</html>";

echo "
<html>
<head>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://d3js.org/d3.v4.min.js'></script>

<script>

$(document).ready(function(){

  var score = $score;
  var score2 = $score2;
  var score3 = $score3;
  var score4 = $score4;
	// Pie Chart
	data = [
		{title: 'UX', score: score},
		{title: 'Front', score: score2},
		{title: 'Back', score: score3},
		{title: 'Analyst', score: score4},
	];

	var width = 500;
    var height = 500;
    var radius = Math.min(width, height) / 2;
	var color = d3.scaleOrdinal(['red', 'blue', 'grey', 'yellow']); // D3 way of defining an array

	var arc = d3.arc()
	    .outerRadius(radius - 10)
	    .innerRadius(radius - 90);

	var pie = d3.pie()
	    .sort(null)
	    .value(function(d) { return d.score; });

	var ppp = d3.select('.pie')
	  	.append('g')
	    .attr('transform', 'translate(' + width / 2 + ',' + height / 2 + ')');

	var g = ppp.selectAll('.arc')
	  .data(pie(data))
	  .enter().append('g')
	  .attr('class', 'arc');

	g.append('path')
	  .attr('d', arc)
	  .style('fill', function(d) {
	  	return color(d.data.title);
	  });

	g.append('text')
	  .attr('transform', function(d) { return 'translate(' + arc.centroid(d) + ')'; })
	  .attr('dx', '-0.7em')
	  .attr('dy', '.4em')
	  .text(function(d) { return d.data.title; });



	function dragstarted(d) {
		if (!d3.event.active) simulation.alphaTarget(0.3).restart();
		d.fx = d.x;
		d.fy = d.y;
	}

	function dragged(d) {
		d.fx = d3.event.x;
		d.fy = d3.event.y;
	}

	function dragended(d) {
		if (!d3.event.active) simulation.alphaTarget(0);
		d.fx = null;
		d.fy = null;
	}
});

</script>
</head>

<body>


<svg class='pie' width='500' height='500'> </svg>


</body>
</html>";
?>
