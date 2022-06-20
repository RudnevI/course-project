<style>

    #map {
        height: 100vh;
        width: 80%;
        margin: auto
    }
</style>

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

 function add_map_point(lat, lng) {
      var vectorLayer = new ol.layer.Vector({
        source:new ol.source.Vector({
          features: [new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
            })]
        }),
        style: new ol.style.Style({
          image: new ol.style.Icon({
            anchor: [0.5, 0.5],
            anchorXUnits: "fraction",
            anchorYUnits: "fraction",
            src: "https://upload.wikimedia.org/wikipedia/commons/e/ec/RedDot.svg"
          })
        })
      });
    }
    var coordinates = {!! json_encode($coordinates->toArray(), JSON_HEX_TAG) !!};

    Array.from(coordinates).forEach((coordinate => {
        add_map_point(coordinate['latitude'], coordinate['longitude']);
    }))
    console.log(coordinates);



  </script>
