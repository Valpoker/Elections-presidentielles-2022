<!DOCTYPE html>

		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
		
<head>
	<title>Résultats élections présidentielles 2022 second tour</title>
	<meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
	

<link href="styles.css" rel="stylesheet">


<style>




#map2, #map {
  height: 600px;
  display: inline-block; /* or display: flex; */
  width: 49%; /* adjust the width as needed */
  vertical-align: middle; /* align them to the top of the container */
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
    
    
<div style='text-align:center; margin:20px;' id="rechdep">
    <form action="resultat.php" method="GET">
        <?php 
            include 'bd.php';
            $bdd = getBD();
        ?>
        <select style='border-radius:30px' name="rechdep" id="listrechdep" size="1">
            <?php
             $result = $bdd->query('SELECT codedep, nom FROM departement');
             while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
        <option value="<?php echo $ligne['codedep']; ?>">
            <?php echo $ligne['codedep'] . ' - ' . $ligne['nom']; ?>
        </option>

        <?php
        }
        ?>
        </select>

        <input type='hidden' name='nom' id='nom' value=''>
        <input type="hidden" name="codedep" id="codedep" value=''>

        <script>
        document.getElementById("listrechdep").addEventListener("change", function() {
        var select = this;
        var inputNom = document.getElementById("nom");
        var inputCodeDep = document.getElementById("codedep");
        var option = select.options[select.selectedIndex];
        inputNom.value = option.text.split(' - ')[1]; // assigne le nom du département à "nom"
        inputCodeDep.value = option.text.split(' - ')[0]; // assigne le code département à "codedep"
        });
        </script>
        <input style='border-radius:30px' type="submit" value="Chercher">
    </form>
</div>
<div id="map"></div>
<div id="map2"></div>


<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
     
<script> 
var map = L.map('map').setView([46.833, 2.333], 6);

var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

L.geoJson(statesData).addTo(map);

function getColor(d) {
    return d > 2500000  ? '#BD0026' :
           d > 2000000  ? '#E31A1C' :
           d > 1500000   ? '#FC4E2A' :
           d > 1000000   ? '#FD8D3C' :
           d > 500000   ? '#FEB24C' :
                      '#FED976';
}

function style(feature) {
    return {
        fillColor: getColor(feature.properties.population),
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
        //click: zoomToFeature
		click: function(e) {
            var nom = feature.properties.departement;
            var codedep = feature.properties.code_departement;
            window.location.href = "resultat.php?nom=" + nom + "&codedep=" + codedep;
        }
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
    this._div.innerHTML = '<h4>Population de la France</h4>' +  (props ?
        '<b>' + props.departement + '</b><br />' + 'Population : '+props.population 
        : 'Survolez un département');
};

info.addTo(map);

var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend'),
        grades = [0, 500000, 1000000, 1500000, 2000000, 2500000],
        labels = [];

    // loop through our density intervals and generate a label with a colored square for each interval
    for (var i = 0; i < grades.length; i++) {
        div.innerHTML +=
            '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
            grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
    }

    return div;
};

legend.addTo(map);


</script>

<script>

var map2 = L.map('map2').setView([46.833, 2.333], 6);

var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map2);

L.geoJson(elecData).addTo(map2);

function getColor2(h) {
    return h == 0 ? 'fuchsia' :
           			'lime';
}

function candi(c) {
    return c == 0 ? 'Marine Le Pen' :
           
                      'Emmanuel Macron';
}

function style2(feature) {
    return {
        fillColor: getColor2(feature.properties.vote),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 1
    };
}

L.geoJson(elecData, {style: style2}).addTo(map2);

function highlightFeature2(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
    });

    layer.bringToFront();
    info2.update(layer.feature.properties);
}

function resetHighlight2(e) {
    geojson.resetStyle(e.target);
    info2.update();
}

function zoomToFeature2(e) {
    map.fitBounds(e.target.getBounds());
}

function onEachFeature2(feature, layer) {
    layer.on({
        mouseover: highlightFeature2,
        mouseout: resetHighlight2,
        //click: zoomToFeature2
        click: function(e) {
            var nom = feature.properties.departement;
            var codedep = feature.properties.code_departement;
            window.location.href = "resultat.php?nom=" + nom + "&codedep=" + codedep;
        }
    });
}

geojson = L.geoJson(elecData, {
    style: style,
    onEachFeature: onEachFeature2
}).addTo(map2);

var info2 = L.control();


info2.onAdd = function (map2) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};


info2.update = function (props) {
    this._div.innerHTML = '<h4>Résultats élections par département</h4>' +  (props ?
        '<b>' + props.departement + '</b><br />' + 'Candidat élu : '+ candi(props.vote)
        : 'Survolez un département');
};

info2.addTo(map2);



</script>

	
</body>

</html>
