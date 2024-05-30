var wms_layers = [];

var format_JumlahKematianIbuBayidanStuntingApril2024_0 =
  new ol.format.GeoJSON();
var features_JumlahKematianIbuBayidanStuntingApril2024_0 =
  format_JumlahKematianIbuBayidanStuntingApril2024_0.readFeatures(
    json_JumlahKematianIbuBayidanStuntingApril2024_0,
    { dataProjection: "EPSG:4326", featureProjection: "EPSG:3857" }
  );
var jsonSource_JumlahKematianIbuBayidanStuntingApril2024_0 =
  new ol.source.Vector({
    attributions: " ",
  });
jsonSource_JumlahKematianIbuBayidanStuntingApril2024_0.addFeatures(
  features_JumlahKematianIbuBayidanStuntingApril2024_0
);
var lyr_JumlahKematianIbuBayidanStuntingApril2024_0 = new ol.layer.Vector({
  declutter: false,
  source: jsonSource_JumlahKematianIbuBayidanStuntingApril2024_0,
  style: style_JumlahKematianIbuBayidanStuntingApril2024_0,
  popuplayertitle: "Jumlah Kematian Bayi April 2024",
  interactive: true,
  title:
    'Jumlah Kematian Bayi April 2024<br />\
    <img src="styles/legend/JumlahKematianIbuBayidanStuntingApril2024_0_0.png" /> 0 - 107<br />\
    <img src="styles/legend/JumlahKematianIbuBayidanStuntingApril2024_0_1.png" /> 108 - 188<br />\
    <img src="styles/legend/JumlahKematianIbuBayidanStuntingApril2024_0_2.png" /> 189 - 237<br />\
    <img src="styles/legend/JumlahKematianIbuBayidanStuntingApril2024_0_3.png" /> 238 - 580<br />\
    <img src="styles/legend/JumlahKematianIbuBayidanStuntingApril2024_0_4.png" /> 581 - 720<br />',
});

lyr_JumlahKematianIbuBayidanStuntingApril2024_0.setVisible(true);
var layersList = [lyr_JumlahKematianIbuBayidanStuntingApril2024_0];
lyr_JumlahKematianIbuBayidanStuntingApril2024_0.set("fieldAliases", {
  ID: "ID",
  ID_Kec: "ID_Kec",
  Kecamatan: "Kecamatan",
  xcoord: "xcoord",
  ycoord: "ycoord",
  kode_prop: "kode_prop",
  kode_kab: "kode_kab",
  jml_kematian_bayi: "jml_kematian_bayi",
  stunting: "stunting",
  jml_kematian_ibu: "jml_kematian_ibu",
  jml_kematian_balita: "jml_kematian_balita",
  jml_ttl: "jml_ttl",
});
lyr_JumlahKematianIbuBayidanStuntingApril2024_0.set("fieldImages", {
  ID: "TextEdit",
  ID_Kec: "TextEdit",
  Kecamatan: "TextEdit",
  xcoord: "TextEdit",
  ycoord: "TextEdit",
  kode_prop: "TextEdit",
  kode_kab: "TextEdit",
  jml_kematian_bayi: "Range",
  stunting: "TextEdit",
  jml_kematian_ibu: "CheckBox",
  jml_kematian_balita: "Range",
  jml_ttl: "TextEdit",
});
lyr_JumlahKematianIbuBayidanStuntingApril2024_0.set("fieldLabels", {
  ID: "hidden field",
  ID_Kec: "hidden field",
  Kecamatan: "inline label - visible with data",
  xcoord: "hidden field",
  ycoord: "hidden field",
  kode_prop: "hidden field",
  kode_kab: "hidden field",
  jml_kematian_bayi: "inline label - visible with data",
  stunting: "inline label - visible with data",
  jml_kematian_ibu: "inline label - visible with data",
  jml_kematian_balita: "inline label - visible with data",
  jml_ttl: "inline label - visible with data",
});
lyr_JumlahKematianIbuBayidanStuntingApril2024_0.on(
  "precompose",
  function (evt) {
    evt.context.globalCompositeOperation = "normal";
  }
);
