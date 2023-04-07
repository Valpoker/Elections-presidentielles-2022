<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

session_start();

$datay=array($_SESSION['vote_macron'],$_SESSION['vote_lepen']);

// Create the graph. These two calls are always required
$graph = new Graph(450,320,'auto');
$graph->SetScale("textlin");


// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0,10,20,30,40,50,60), array(5,15,15,35,45,55));
$graph->SetBox(false);


$graph->xaxis->SetTickLabels(array('Macron','Lepen',));
$graph->xaxis->HideLine(true);
$graph->yaxis->HideTicks(true,true);
$graph->yaxis->HideLine(false);

// Create the bar plots
$b1plot = new BarPlot($datay);

// ...and add it to the graph
$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetWidth(60);
$graph->title->Set($_SESSION['nomDep']);

// Display the graph
$graph->Stroke();
?>