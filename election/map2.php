<!DOCTYPE html>

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
		
<head>
	<title>Résultats élections présidentielles 2022 second tour</title>
	<meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
	

<link href="styles.css" rel="stylesheet">


<style>

#map2 { height: 600px;
margin-left:55%; 
margin-right:3%; 


}



.info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.info h4 {
    margin: 0 0 5px;
    color: #777;
}
.legend {
    line-height: 18px;
    color: #555;
}
.legend i {
    width: 18px;
    height: 18px;
    float: left;
    margin-right: 8px;
    opacity: 0.7;
}
</style>

</head>

<body >
<div class="container-fluid p-2 text-white text-center" style='background-color: #453e9d;'>
        <img id="drapeau" src="images/drapeau.webp" width=10% style="float:left; border: 2px solid" >
		<h1>Résultats élections présidentielles<br>
     		2022 second tour</h1>
    </div>
    <div id="barremenu">
		<ul>
			<li><a id="active" href="./election.php"> RESULTATS</a> </li>
			<li><a href="./information.php">INFORMATIONS</a></li>
			<li><a href="./connexion.php"> SE CONNECTER</a></li> 
			<li><a href="./forum.php"> FORUM</a></li>
			<li><a  href="./contactez-nous.php">CONTACTEZ-NOUS</a></li>
		</ul>
    </div>
    
<div id="map2"></div>


<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
     

     
<script> 

var map = L.map('map2').setView([46.833, 2.333], 6);

var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

L.geoJson(statesData).addTo(map);

function getColor(d) {
    return d == 0 ? '#2874A6' :
           
                      '#F1C40F';
}

function candi(c) {
    return c == 0 ? 'Marine Le Pen' :
           
                      'Emmanuel Macron';
}

function style(feature) {
    return {
        fillColor: getColor(feature.properties.vote),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

L.geoJson(statesData, {style: style}).addTo(map);

function highlightFeature(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
    });

    layer.bringToFront();
    info.update(layer.feature.properties);
}

function resetHighlight(e) {
    geojson.resetStyle(e.target);
    info.update();
}
function zoomToFeature(e) {
    map.fitBounds(e.target.getBounds());
}
function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeature
    });
}

geojson = L.geoJson(statesData, {
    style: style,
    onEachFeature: onEachFeature
}).addTo(map);


var info = L.control();

info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};

// method that we will use to update the control based on feature properties passed
info.update = function (props) {
    this._div.innerHTML = '<h4>Résultats élections par département</h4>' +  (props ?
        '<b>' + props.departement + '</b><br />' + 'Candidat élu : '+ candi(props.vote)
        : 'Survolez un département');
};

info.addTo(map);


</script>


	
</body>

</html>