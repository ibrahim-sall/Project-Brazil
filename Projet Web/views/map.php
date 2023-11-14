<!DOCTYPE html>
<head>
    <title>Leaflet</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="crossorigin=""></script>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            margin : 5px;          
            padding: 5px;
            display: flex;
            height: 97vh;
            background-color: #92D77A;
        }

        #map {
            flex :1;
            background-color: #f0f0f0;
            margin : 5px;  
            padding: 40px;
            height: 718px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /*overflow-y: auto;*/
            border: 4px solid #333; 
            border-radius: 10px; 
            font-family: 'Caslon', sans-serif; 
        }

        #inventory {
            background-color: #f0f0f0;
            margin : 5px;  
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            border: 4px solid #333; 
            border-radius: 10px; 
            font-family: 'Caslon', sans-serif; 
        }

        h2 {
            text-align: center;
            color: #333; 
        }

        #inventory-list {
            list-style: none;
            padding: 0;
        }

        .selected {
            border: 2px solid #ffcc00; /* Bordure jaune pour indiquer la sélection */
            box-shadow: 0 0 5px rgba(255, 204, 0, 0.7); /* Ombre jaune */
        }

    </style>
    </head>
    <body>
        <div id="map"></div>
        <div id="inventory">
            <h2>Inventaire</h2>
            <ul id="inventory-list"></ul>
            <div id="inventory-image"></div>
        </div>
        

        <script src="assets/map.js"></script>
    </body>
</html>