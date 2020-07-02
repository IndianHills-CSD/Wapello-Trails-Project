

// Create the script tag, set the appropriate attributes
var script = document.createElement('script');
script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAadkKOZhxlEPhmSs-1VV4QTBYnFeKiUyY&callback=initMap';
script.defer = true;
script.async = true;

// Attach your callback function to the `window` object
window.initMap = function() {
    // JS API is loaded and available
};

// Append the 'script' element to 'head'
document.head.appendChild(script);

var map;
function initMap() {
    // Initialize a map centered on Ottumwa
    map = new google.maps.Map(document.getElementsByClassName("map-thumb"), {
        center: {lat: 41.017678, lng:  -92.420191},
        zoom: 8
    });
}
