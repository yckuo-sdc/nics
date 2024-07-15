$(document).ready(function() {

    // Coordinates for Tawina (example coordinates, replace with actual if different)
    var tawinaCoords = [37.7749, -122.4194]; // Replace with actual coordinates
    var map = L.map('map') 
    var bounds = [
        [20.7, 119.5], // Southwest corner
        [25.3, 122.1]  // Northeast corner
    ];
    map.fitBounds(bounds);
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    var centralPoint = [23.7, 121.0]; // Approximate central point of Taiwan
    L.marker(centralPoint).addTo(map).bindPopup("<b>Taiwan</b><br>Central Point").openPopup();


    var taipeiCoords = [25.0330, 121.5654]; // Coordinates for Taipei
    var taipeiMarker = L.marker(taipeiCoords).addTo(map);
    taipeiMarker.bindPopup("<b>Taipei</b><br>Capital of Taiwan").openPopup();

});
