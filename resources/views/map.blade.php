<!-- resources/views/map.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Quaincallerie localisation</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Ma Carte avec Laravel et Leaflet</h1>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Coordinates for Fianarantsoa, Madagascar
        var lat = -21.4527;
        var lng = 47.0859;

        var map = L.map('map').setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Adding a marker at the specified address
        var marker = L.marker([lat, lng]).addTo(map);
        marker.bindPopup("<b>Antarandolo</b><br>Fianarantsoa, Madagascar.").openPopup();
    </script>
</body>
</html>
