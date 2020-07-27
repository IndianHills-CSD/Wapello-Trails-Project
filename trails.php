
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/trail-styles.css">
	<link rel="stylesheet" href="css/masterstyle.css">
	<meta charset="UTF-8">
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js"></script>
	<link href="https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css" rel="stylesheet" />

	<title>Trails</title>
</head>

<body>
    <?php include 'nav.php'; ?>

<section class="head-container">
	<h1 class="page-title">Activities</h1>

	<h2 class="activities">Walking</h2>
	<div class="flex-container">
		<p class="p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .flex-container -->

	<h2 class="activities">Running</h2>
	<div class="flex-container">
		<p class="p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .flex-container -->

	<h2 class="activities">Biking</h2>
	<div class="flex-container">
		<p class="p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .flex-container -->
</section>  <!-- END .head-container -->

	<p class="instruct">Use the trail buttons below to toggle the maps off and on.</p>

<div id="map"></div>

<!-- Div for buttons on map -->
<div id="menu"></div>
<div id="menu"></div>
<h3 class="legend-head">Map Legend:</h3>
<!-- Legend for trail map -->
<div class="legend-container">
	<ul class="legend-box-1">
		<li class="square1 legend color-code"></li>
		<li class="square2 legend color-code"></li>
		<li class="square3 legend color-code"></li>
		<li class="square4 legend color-code"></li>
		<li class="square5 legend color-code"></li>
	</ul>
	<ul class="legend-box-2">
		<li class="legend trail-name">Trail 1: 3.2 Miles</li>
		<li class="legend trail-name">Trail 2: 2.5 Miles</li>
		<li class="legend trail-name">Trail 3: 1.6 Miles</li>
		<li class="legend trail-name">Trail 4: 0.9 Miles</li>
		<li class="legend trail-name">Trail 5: 1.1 Miles</li>
	</ul>
	<ul class="legend-box-1">
		<li class="square6 legend color-code"></li>
		<li class="square7 legend color-code"></li>
		<li class="square8 legend color-code"></li>
		<li class="icon legend"><img src="images/parking-15.svg"></li>
		<li class="icon legend"><img src="images/campsite-15.svg"></li>
	</ul>
	<ul class="legend-box-2">
		<li class="legend trail-name">Trail 6: 1.7 Miles</li>
		<li class="legend trail-name">Trail 7: 1.2 Miles</li>
		<li class="legend trail-name">Trail 8: 1.4 Miles</li>
		<li class="legend trail-name">Parking and Trailheads</li>
		<li class="legend trail-name">Shelters and Rest Stops</li>
	</ul>   <!-- END legend-box -->
</div>  <!-- END legend-container -->

<section class="body-container">

	<!--
		Area plan section. This portion of the page can be utilized to display the maps and possibly description and other information concerning the future expansions.
	-->

	<h2 class="plans-page-title">Future Plans</h2>
	<div class="area-plan-container">
		<div class="area-plan-img">
			<img src="images/future-plan-page1-1000x1500.jpg"/>
		</div>  <!-- END .areaPlanIMG -->
	</div>
	<h2 class="area-plan-heading">1st Priority - North Side</h2>
	<div class="flex-container">
		<p class="plan-p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .area-plan-container -->

	<div class="area-plan-container">
		<div class="area-plan-img">
			<img src="images/future-plan-page2-1000x1500.jpg"/>
		</div>  <!-- END .areaPlanIMG -->
	</div>  <!-- END .flex-container -->
	<h2 class="area-plan-heading">1st Priority - South Side</h2>
	<div class="flex-container">
		<p class="plan-p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .area-plan-container -->

	<div class="area-plan-container">
		<div class="area-plan-img">
			<img src="images/future-plan-page3-1000x1500.jpg"/>
		</div>  <!-- END .areaPlanIMG -->
	</div>  <!-- END .flex-container -->
	<h2 class="area-plan-heading">All Corridors - North Side</h2>
	<div class="flex-container">
		<p class="plan-p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .area-plan-container -->

	<div class="area-plan-container">
		<div class="area-plan-img">
			<img src="images/future-plan-page4-1000x1500.jpg"/>
		</div>  <!-- END .areaPlanIMG -->
	</div>  <!-- END .flex-container -->
	<h2 class="area-plan-heading">All Corridors - South Side</h2>
	<div class="flex-container">
		<p class="plan-p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .area-plan-container -->
</section>  <!-- END .body-container -->

<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoiam9zaHVhLWRlbG9uZyIsImEiOiJja2MzcHZ1a3owMDl2MnBrMDE5M3J4c3UxIn0.kFA68Avg1OaqG0QMq6f7dg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/joshua-delong/ckcfn77730anb1ilibata5gt6'
    });

    /*
**** The following code will create clickable boxes to show and hide the different trails on the map ****
	*/
    map.on('load', function() {
        // add source and layer for trail 1
        map.addSource('Trail_1', {
            type: 'vector',
            url: 'mapbox://joshua-delong.ckccuis8j0lvn24prl707kt0m-36b55'
        });
        map.addLayer({
            'id': '1',
            'type': 'line',
            'source': 'Trail_1',
	        'source-layer': 'Trail_1',
            'layout': {
                // make layer visible by default
                'visibility': 'none',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#f8ff33',
                'line-width': 4
            }
        });

        // add source and layer for trail 2
        map.addSource('Trail_2_-_2.5_Mile', {
            type: 'vector',
            url: 'mapbox://joshua-delong.ckccvqmm83ebt29nva5ffon5p-5mho1'
        });
        map.addLayer({
            'id': '2',
            'type': 'line',
            'source': 'Trail_2_-_2.5_Mile',
            'source-layer': 'Trail_2_-_2.5_Mile',
            'layout': {
                // make layer visible by default
                'visibility': 'none',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#ff9029',
                'line-width': 4
            }
        });

        // add source and layer for trail 3
        map.addSource('Trail_3_-_1.6_Mile', {
            type: 'vector',
            url: 'mapbox://joshua-delong.ckce8yd5p0qwk26qlxombf42j-52phz'
        });
        map.addLayer({
            'id': '3',
            'type': 'line',
            'source': 'Trail_3_-_1.6_Mile',
            'source-layer': 'Trail_3_-_1.6_Mile',
            'layout': {
                // make layer visible by default
                'visibility': 'none',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#21db00',
                'line-width': 4
            }
        });

        // add source and layer for trail 4
        map.addSource('Trail_4_-_0.9_Mile', {
            type: 'vector',
            url: 'mapbox://joshua-delong.ckce952in3woq2fnvkhlpyg3r-84s4q'
        });
        map.addLayer({
            'id': '4',
            'type': 'line',
            'source': 'Trail_4_-_0.9_Mile',
            'source-layer': 'Trail_4_-_0.9_Mile',
            'layout': {
                // make layer visible by default
                'visibility': 'none',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#ff2424',
                'line-width': 4
            }
        });

        // add source and layer for trail 5
        map.addSource('Trail_5_-_1.1_Mile', {
            type: 'vector',
            url: 'mapbox://joshua-delong.ckce9akfz0ng623o51n8sm7qb-30ltn'
        });
        map.addLayer({
            'id': '5',
            'type': 'line',
            'source': 'Trail_5_-_1.1_Mile',
            'source-layer': 'Trail_5_-_1.1_Mile',
            'layout': {
                // make layer visible by default
                'visibility': 'none',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#0206f2',
                'line-width': 4
            }
        });

        // add source and layer for trail 6
        map.addSource('Trail_6_-_1.7_Mile', {
            type: 'vector',
            url: 'mapbox://joshua-delong.ckce9p5nm0udd23py4dvq3tse-1nrg9'
        });
        map.addLayer({
            'id': '6',
            'type': 'line',
            'source': 'Trail_6_-_1.7_Mile',
            'source-layer': 'Trail_6_-_1.7_Mile',
            'layout': {
                // make layer visible by default
                'visibility': 'none',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#f8ff33',
                'line-width': 4
            }
        });

        // add source and layer for trail 7
        map.addSource('Trail_7_-_1.2_Mile', {
            type: 'vector',
            url: 'mapbox://joshua-delong.ckceaaowm0sux22pyxhsc3t9d-0l3nm'
        });
        map.addLayer({
            'id': '7',
            'type': 'line',
            'source': 'Trail_7_-_1.2_Mile',
            'source-layer': 'Trail_7_-_1.2_Mile',
            'layout': {
                // make layer visible by default
                'visibility': 'none',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#6800b3',
                'line-width': 4
            }
        });

        // add source and layer for trail 8
        map.addSource('Trail_8_-_1.4_Mile', {
            type: 'vector',
            url: 'mapbox://joshua-delong.ckcf6q2ht5drl29p5s4j4hraa-5xt9t'
        });
        map.addLayer({
            'id': '8',
            'type': 'line',
            'source': 'Trail_8_-_1.4_Mile',
            'source-layer': 'Trail_8_-_1.4_Mile',
            'layout': {
                // make layer visible by default
                'visibility': 'none',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#f8ff33',
                'line-width': 4
            }
        });
    });

    // enumerate ids of the layers
    var toggleableLayerIds = ['Trail 1', 'Trail 2', 'Trail 3', 'Trail 4', 'Trail 5', 'Trail 6', 'Trail 7', 'Trail 8'];

    // set up the corresponding toggle buttons for each layer
    for (var i = 0; i < toggleableLayerIds.length; i++) {
        var id = toggleableLayerIds[i];

        var link = document.createElement('a');
        link.href = '#';
        link.className = '';
        link.textContent = id;

        link.onclick = function(e) {
            var clickedLayer = this.textContent;
            e.preventDefault();
            e.stopPropagation();

            var visibility = map.getLayoutProperty(clickedLayer, 'visibility');

            // toggle layer visibility by changing the layout object's visibility property
            if (visibility === 'visible') {
                map.setLayoutProperty(clickedLayer, 'visibility', 'none');
                this.className = '';
            } else {
                this.className = 'active';
                map.setLayoutProperty(clickedLayer, 'visibility', 'visible');
            }   // END if/else
        };  // END onclick function

        var layers = document.getElementById('menu');
        layers.appendChild(link);
    }   // END for loop

</script>
</body>

<?php include 'footer.php'?>

<script>
    var mybutton = document.getElementById("myBtn");

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script src="js/master.js"></script>
</body>
</html>
