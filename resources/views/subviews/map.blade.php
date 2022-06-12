<style>
    #map {
        height: 100vh;
        width: 100%
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
 let sites = {{Js::from($sites)}};
 sites.forEach(site => {
     if(site.map_coordinates.length !== 0) {
         site.map_coordinates.forEach(coordinate => layer.source.features[0].geometry.add())
     }
 });
 map.addLayer(layer);



  </script>
