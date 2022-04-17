<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Карта объектов культурного наследия</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js"></script>
    @include('subviews.head-content')
    <link rel='stylesheet' href="{{ asset('css/admin.css') }}">
    <style>
        #map {
            width: 80%;
            min-height: 100vmin;
            margin: auto;

        }

        .ol-viewport {
            overflow: visible !important
        }
    </style>
</head>
<body>
@include('subviews.nkn-navbar')
<div id="map">

</div>
<script type="text/javascript">
    var map = new ol.Map({
      target: 'map',
      layers: [
        new ol.layer.Tile({
          source: new ol.source.OSM()
        })
      ],
      view: new ol.View({
        center: ol.proj.fromLonLat([66.9045, 48.0053]),
        zoom: 5.5
      })
    });
    var layer = new ol.layer.Vector({
     source: new ol.source.Vector({
         features: [
             new ol.Feature({
                 geometry: new ol.geom.Point(ol.proj.fromLonLat([4.35247, 50.84673]))
             })
         ]
     })
 });
 map.addLayer(layer);
  </script>

</body>
</html>
