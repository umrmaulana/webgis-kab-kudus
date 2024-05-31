var size = 0;
var placement = "point";

var style_JumlahKematianIbuBayidanStuntingApril2024_0 = function (
  feature,
  resolution
) {
  var context = {
    feature: feature,
    variables: {},
  };
  var value = feature.get("jml_ttl");
  var labelText = "";
  size = 0;
  var labelFont = "14.3px 'Open Sans', sans-serif";
  var labelFill = "#323232";
  var bufferColor = "#fafafa";
  var bufferWidth = 1.5;
  var textAlign = "left";
  var offsetX = 8;
  var offsetY = 3;
  var placement = "point";
  if (feature.get("Kecamatan") !== null) {
    labelText = String(feature.get("Kecamatan"));
  }
  if (value >= 0 && value <= 107.0) {
    style = [
      new ol.style.Style({
        stroke: new ol.style.Stroke({
          color: "rgba(35,35,35,1.0)",
          lineDash: null,
          lineCap: "butt",
          lineJoin: "miter",
          width: 0.988,
        }),
        fill: new ol.style.Fill({ color: "rgba(247,251,255,1.0)" }),
        text: createTextStyle(
          feature,
          resolution,
          labelText,
          labelFont,
          labelFill,
          placement,
          bufferColor,
          bufferWidth
        ),
      }),
    ];
  } else if (value >= 107 && value <= 188) {
    style = [
      new ol.style.Style({
        stroke: new ol.style.Stroke({
          color: "rgba(35,35,35,1.0)",
          lineDash: null,
          lineCap: "butt",
          lineJoin: "miter",
          width: 0.988,
        }),
        fill: new ol.style.Fill({ color: "rgba(200,220,240,1.0)" }),
        text: createTextStyle(
          feature,
          resolution,
          labelText,
          labelFont,
          labelFill,
          placement,
          bufferColor,
          bufferWidth
        ),
      }),
    ];
  } else if (value >= 189 && value <= 237) {
    style = [
      new ol.style.Style({
        stroke: new ol.style.Stroke({
          color: "rgba(35,35,35,1.0)",
          lineDash: null,
          lineCap: "butt",
          lineJoin: "miter",
          width: 0.988,
        }),
        fill: new ol.style.Fill({ color: "rgba(115,178,216,1.0)" }),
        text: createTextStyle(
          feature,
          resolution,
          labelText,
          labelFont,
          labelFill,
          placement,
          bufferColor,
          bufferWidth
        ),
      }),
    ];
  } else if (value >= 238 && value <= 580) {
    style = [
      new ol.style.Style({
        stroke: new ol.style.Stroke({
          color: "rgba(35,35,35,1.0)",
          lineDash: null,
          lineCap: "butt",
          lineJoin: "miter",
          width: 0.988,
        }),
        fill: new ol.style.Fill({ color: "rgba(41,121,185,1.0)" }),
        text: createTextStyle(
          feature,
          resolution,
          labelText,
          labelFont,
          labelFill,
          placement,
          bufferColor,
          bufferWidth
        ),
      }),
    ];
  } else if (value >= 581) {
    style = [
      new ol.style.Style({
        stroke: new ol.style.Stroke({
          color: "rgba(35,35,35,1.0)",
          lineDash: null,
          lineCap: "butt",
          lineJoin: "miter",
          width: 0.988,
        }),
        fill: new ol.style.Fill({ color: "rgba(8,48,107,1.0)" }),
        text: createTextStyle(
          feature,
          resolution,
          labelText,
          labelFont,
          labelFill,
          placement,
          bufferColor,
          bufferWidth
        ),
      }),
    ];
  }

  return style;
};
