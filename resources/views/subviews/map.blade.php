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
