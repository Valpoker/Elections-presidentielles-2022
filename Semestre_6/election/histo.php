<?php 
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

session_start();

$datay=array($_SESSION['vote_macron'],$_SESSION['vote_lepen'], $_SESSION['abstention'] );

// Création du graph(dimensions et forme)
$graph = new Graph(550,420);
$graph->SetScale("textlin");

// nom des barres
$graph->xaxis->SetTickLabels(array('Macron','Lepen', 'Abstention'));

// Création des barres
$b1plot = new BarPlot($datay);
$graph->Add($b1plot);
$b1plot->SetFillColor(array('darkolivegreen2', 'lightpink', 'gray'));
$b1plot->SetColor("lightgray");

// Afficher les valeurs pour chaque barre
$b1plot->value->Show();

//titre du graph
$graph->title->Set($_SESSION['nomDep']);

// Display the graph
$graph->Stroke();
?>