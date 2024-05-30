<?php
include '../koneksi.php';
function getData($conn, $id)
{
  $sql = "SELECT * FROM kudus WHERE id='$id'";
  $hasil = mysqli_query($conn, $sql);
  if ($hasil) {
    $data = mysqli_fetch_assoc($hasil);
    if ($data) {
      return $data;
    }
  }
}
?>
var data1 = <?php echo json_encode(getData($conn, 2415)); ?>;
var data2 = <?php echo json_encode(getData($conn, 2416)); ?>;
var data3 = <?php echo json_encode(getData($conn, 2417)); ?>;
var data4 = <?php echo json_encode(getData($conn, 2418)); ?>;
var data5 = <?php echo json_encode(getData($conn, 2419)); ?>;
var data6 = <?php echo json_encode(getData($conn, 2420)); ?>;
var data7 = <?php echo json_encode(getData($conn, 2421)); ?>;
var data8 = <?php echo json_encode(getData($conn, 2422)); ?>;
var data9 = <?php echo json_encode(getData($conn, 2423)); ?>;

var json_JumlahKematianIbuBayidanStuntingApril2024_0 = {
type: "FeatureCollection",
name: "JumlahKematianIbuBayidanStuntingApril2024_0",
crs: { type: "name", properties: { name: "urn:ogc:def:crs:OGC:1.3:CRS84" } },
features: [
{
type: "Feature",
properties: {
ID: "2415",
ID_Kec: "3319010",
Kecamatan: "Kaliwungu",
xcoord: 110.80516,
ycoord: -6.79717,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data1.jml_kematian_bayi,
stunting: data1.stunting,
jml_kematian_ibu: data1.jml_kematian_ibu,
jml_kematian_balita: data1.jml_kematian_balita,
jml_ttl: data1.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.794594, -6.839567],
[110.792404, -6.838905],
[110.791313, -6.830766],
[110.79068, -6.825744],
[110.787109, -6.822105],
[110.785553, -6.820518],
[110.782639, -6.819862],
[110.780937, -6.818278],
[110.776634, -6.815574],
[110.774452, -6.813182],
[110.771965, -6.810456],
[110.768852, -6.808193],
[110.769447, -6.804524],
[110.769623, -6.803016],
[110.769768, -6.801791],
[110.770012, -6.799207],
[110.770309, -6.796275],
[110.769875, -6.79484],
[110.768539, -6.793314],
[110.767159, -6.791838],
[110.766006, -6.790484],
[110.765419, -6.788578],
[110.765594, -6.78669],
[110.767799, -6.782293],
[110.768623, -6.780654],
[110.770531, -6.777881],
[110.772026, -6.775881],
[110.774864, -6.773421],
[110.777359, -6.771883],
[110.779091, -6.770981],
[110.782845, -6.769026],
[110.785271, -6.767687],
[110.786079, -6.767034],
[110.787338, -6.765954],
[110.789215, -6.764671],
[110.791115, -6.763659],
[110.793243, -6.762547],
[110.797981, -6.759399],
[110.804375, -6.755192],
[110.805992, -6.75478],
[110.807159, -6.755042],
[110.808647, -6.755976],
[110.805969, -6.75834],
[110.806656, -6.759796],
[110.806046, -6.760863],
[110.805336, -6.762045],
[110.804741, -6.76357],
[110.804214, -6.766154],
[110.804276, -6.769271],
[110.804733, -6.771433],
[110.80555, -6.773469],
[110.806374, -6.775162],
[110.807846, -6.777189],
[110.809875, -6.779748],
[110.811401, -6.78179],
[110.812294, -6.782997],
[110.814644, -6.785974],
[110.815475, -6.786681],
[110.818939, -6.788236],
[110.820511, -6.787783],
[110.820778, -6.788907],
[110.821762, -6.789314],
[110.823112, -6.792126],
[110.822601, -6.79574],
[110.822815, -6.797643],
[110.823647, -6.800565],
[110.825867, -6.801554],
[110.828087, -6.801656],
[110.831718, -6.799681],
[110.832779, -6.798874],
[110.833931, -6.798196],
[110.835251, -6.797476],
[110.836906, -6.796588],
[110.838799, -6.795515],
[110.839867, -6.79468],
[110.840714, -6.794014],
[110.841858, -6.794137],
[110.844894, -6.796418],
[110.844414, -6.798087],
[110.843796, -6.799684],
[110.842636, -6.800476],
[110.842094, -6.801373],
[110.841164, -6.800536],
[110.840126, -6.801015],
[110.840614, -6.802348],
[110.840378, -6.803661],
[110.840881, -6.804838],
[110.838554, -6.804577],
[110.837044, -6.803995],
[110.83535, -6.804711],
[110.833664, -6.806443],
[110.832634, -6.806893],
[110.83255, -6.808022],
[110.83194, -6.809332],
[110.831421, -6.810401],
[110.830696, -6.811811],
[110.830055, -6.813093],
[110.829132, -6.814473],
[110.828178, -6.815581],
[110.82682, -6.815742],
[110.825447, -6.815604],
[110.824257, -6.81581],
[110.823097, -6.816244],
[110.821877, -6.816864],
[110.819244, -6.820241],
[110.817863, -6.821338],
[110.816612, -6.822845],
[110.815742, -6.823739],
[110.814728, -6.824174],
[110.813179, -6.824449],
[110.811523, -6.824394],
[110.809387, -6.823664],
[110.808105, -6.822911],
[110.806938, -6.82223],
[110.805794, -6.821807],
[110.804245, -6.822854],
[110.803314, -6.824172],
[110.804474, -6.826175],
[110.806557, -6.828364],
[110.806877, -6.831394],
[110.806915, -6.832752],
[110.806404, -6.833749],
[110.805428, -6.834729],
[110.801346, -6.836986],
[110.798294, -6.838193],
[110.794594, -6.839567],
],
],
],
},
},
{
type: "Feature",
properties: {
ID: "2416",
ID_Kec: "3319020",
Kecamatan: "Kota Kudus",
xcoord: 110.8493,
ycoord: -6.80617,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data2.jml_kematian_bayi,
stunting: data2.stunting,
jml_kematian_ibu: data2.jml_kematian_ibu,
jml_kematian_balita: data2.jml_kematian_balita,
jml_ttl: data2.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.82682, -6.815742],
[110.828178, -6.815581],
[110.829132, -6.814473],
[110.830055, -6.813093],
[110.830696, -6.811811],
[110.831421, -6.810401],
[110.83194, -6.809332],
[110.83255, -6.808022],
[110.832634, -6.806893],
[110.833664, -6.806443],
[110.83535, -6.804711],
[110.837044, -6.803995],
[110.838554, -6.804577],
[110.840881, -6.804838],
[110.840378, -6.803661],
[110.840614, -6.802348],
[110.840126, -6.801015],
[110.841164, -6.800536],
[110.842094, -6.801373],
[110.842636, -6.800476],
[110.843796, -6.799684],
[110.844414, -6.798087],
[110.844894, -6.796418],
[110.84536, -6.793748],
[110.846268, -6.791324],
[110.847038, -6.789786],
[110.847672, -6.788876],
[110.84845, -6.788052],
[110.849815, -6.787561],
[110.85125, -6.789831],
[110.851601, -6.79265],
[110.852051, -6.793854],
[110.852829, -6.794846],
[110.854774, -6.79649],
[110.856094, -6.797617],
[110.858368, -6.799321],
[110.85984, -6.800974],
[110.86058, -6.801994],
[110.86187, -6.803233],
[110.862862, -6.80407],
[110.864815, -6.805271],
[110.867905, -6.806437],
[110.869904, -6.806538],
[110.870834, -6.807087],
[110.87178, -6.80831],
[110.870201, -6.811143],
[110.869873, -6.812256],
[110.870033, -6.814473],
[110.870796, -6.816995],
[110.870758, -6.818024],
[110.870323, -6.819236],
[110.867691, -6.820903],
[110.866661, -6.820924],
[110.865433, -6.820858],
[110.860916, -6.82051],
[110.858246, -6.820534],
[110.856491, -6.821965],
[110.855553, -6.822887],
[110.854576, -6.823152],
[110.851799, -6.823283],
[110.850327, -6.824493],
[110.849304, -6.824771],
[110.848366, -6.824293],
[110.848709, -6.82288],
[110.847664, -6.822772],
[110.847641, -6.821486],
[110.844818, -6.820735],
[110.842995, -6.820007],
[110.841911, -6.819399],
[110.840736, -6.818676],
[110.837936, -6.817783],
[110.836853, -6.817632],
[110.833656, -6.817237],
[110.831947, -6.817482],
[110.829872, -6.818024],
[110.827797, -6.816865],
[110.82682, -6.815742],
],
],
],
},
},
{
type: "Feature",
properties: {
ID: "2417",
ID_Kec: "3319030",
Kecamatan: "Jati",
xcoord: 110.84207,
ycoord: -6.83769,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data3.jml_kematian_bayi,
stunting: data3.stunting,
jml_kematian_ibu: data3.jml_kematian_ibu,
jml_kematian_balita: data3.jml_kematian_balita,
jml_ttl: data3.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.884407, -6.807588],
[110.887627, -6.812572],
[110.888023, -6.813606],
[110.889542, -6.817686],
[110.889244, -6.82159],
[110.889038, -6.82279],
[110.888359, -6.825287],
[110.887939, -6.82637],
[110.884499, -6.827403],
[110.883369, -6.82738],
[110.878349, -6.826071],
[110.876389, -6.825571],
[110.874435, -6.825284],
[110.871933, -6.82498],
[110.870316, -6.825312],
[110.868958, -6.825974],
[110.867706, -6.826336],
[110.866608, -6.831532],
[110.866356, -6.832888],
[110.862892, -6.835308],
[110.861816, -6.835457],
[110.860756, -6.835564],
[110.857628, -6.837471],
[110.856979, -6.839568],
[110.856995, -6.841841],
[110.856888, -6.845685],
[110.85714, -6.848761],
[110.85746, -6.851194],
[110.857773, -6.853458],
[110.859604, -6.860217],
[110.85936, -6.864003],
[110.858658, -6.866529],
[110.858345, -6.867799],
[110.85675, -6.867558],
[110.854996, -6.866959],
[110.853271, -6.866274],
[110.84964, -6.864532],
[110.847282, -6.863629],
[110.844849, -6.862925],
[110.842133, -6.862161],
[110.83963, -6.861257],
[110.834023, -6.859542],
[110.832428, -6.859116],
[110.831207, -6.858964],
[110.827278, -6.858593],
[110.826126, -6.858527],
[110.824577, -6.85853],
[110.822205, -6.858498],
[110.82029, -6.858427],
[110.818291, -6.858269],
[110.816681, -6.858143],
[110.815208, -6.858061],
[110.814064, -6.857966],
[110.812759, -6.858154],
[110.811615, -6.852863],
[110.806862, -6.845443],
[110.801003, -6.841205],
[110.797142, -6.840337],
[110.794594, -6.839567],
[110.798294, -6.838193],
[110.801346, -6.836986],
[110.805428, -6.834729],
[110.806404, -6.833749],
[110.806915, -6.832752],
[110.806877, -6.831394],
[110.806557, -6.828364],
[110.804474, -6.826175],
[110.803314, -6.824172],
[110.804245, -6.822854],
[110.805794, -6.821807],
[110.806938, -6.82223],
[110.808105, -6.822911],
[110.809387, -6.823664],
[110.811523, -6.824394],
[110.813179, -6.824449],
[110.814728, -6.824174],
[110.815742, -6.823739],
[110.816612, -6.822845],
[110.817863, -6.821338],
[110.819244, -6.820241],
[110.821877, -6.816864],
[110.823097, -6.816244],
[110.824257, -6.81581],
[110.825447, -6.815604],
[110.82682, -6.815742],
[110.827797, -6.816865],
[110.829872, -6.818024],
[110.831947, -6.817482],
[110.833656, -6.817237],
[110.836853, -6.817632],
[110.837936, -6.817783],
[110.840736, -6.818676],
[110.841911, -6.819399],
[110.842995, -6.820007],
[110.844818, -6.820735],
[110.847641, -6.821486],
[110.847664, -6.822772],
[110.848709, -6.82288],
[110.848366, -6.824293],
[110.849304, -6.824771],
[110.850327, -6.824493],
[110.851799, -6.823283],
[110.854576, -6.823152],
[110.855553, -6.822887],
[110.856491, -6.821965],
[110.858246, -6.820534],
[110.860916, -6.82051],
[110.865433, -6.820858],
[110.866661, -6.820924],
[110.867691, -6.820903],
[110.870323, -6.819236],
[110.870758, -6.818024],
[110.870796, -6.816995],
[110.870033, -6.814473],
[110.869873, -6.812256],
[110.870201, -6.811143],
[110.87178, -6.80831],
[110.875786, -6.80811],
[110.878372, -6.808529],
[110.884407, -6.807588],
],
],
],
},
},
{
type: "Feature",
properties: {
ID: "2418",
ID_Kec: "3319040",
Kecamatan: "Undaan",
xcoord: 110.82448,
ycoord: -6.91791,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data4.jml_kematian_bayi,
stunting: data4.stunting,
jml_kematian_ibu: data4.jml_kematian_ibu,
jml_kematian_balita: data4.jml_kematian_balita,
jml_ttl: data4.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.798096, -6.977856],
[110.798111, -6.976146],
[110.797791, -6.973732],
[110.796959, -6.971671],
[110.79612, -6.969264],
[110.792618, -6.965224],
[110.790115, -6.961574],
[110.789215, -6.960262],
[110.786697, -6.956785],
[110.780838, -6.952455],
[110.778168, -6.950857],
[110.774933, -6.949577],
[110.772095, -6.948349],
[110.769485, -6.94637],
[110.768448, -6.946028],
[110.769058, -6.944762],
[110.771843, -6.938046],
[110.774857, -6.93144],
[110.776718, -6.928432],
[110.77874, -6.925169],
[110.780464, -6.920712],
[110.780571, -6.919601],
[110.780815, -6.917137],
[110.781685, -6.915128],
[110.784386, -6.908912],
[110.78672, -6.906345],
[110.790329, -6.902382],
[110.792542, -6.900106],
[110.79406, -6.899144],
[110.795052, -6.898517],
[110.7976, -6.895661],
[110.798958, -6.893283],
[110.800522, -6.890554],
[110.802132, -6.886501],
[110.803635, -6.884326],
[110.804665, -6.882839],
[110.805351, -6.881748],
[110.807541, -6.878252],
[110.810974, -6.873252],
[110.813423, -6.871319],
[110.814629, -6.864515],
[110.813873, -6.861986],
[110.812759, -6.858154],
[110.814064, -6.857966],
[110.815208, -6.858061],
[110.816681, -6.858143],
[110.818291, -6.858269],
[110.82029, -6.858427],
[110.822205, -6.858498],
[110.824577, -6.85853],
[110.826126, -6.858527],
[110.827278, -6.858593],
[110.831207, -6.858964],
[110.832428, -6.859116],
[110.834023, -6.859542],
[110.83963, -6.861257],
[110.842133, -6.862161],
[110.844849, -6.862925],
[110.847282, -6.863629],
[110.84964, -6.864532],
[110.853271, -6.866274],
[110.854996, -6.866959],
[110.85675, -6.867558],
[110.858345, -6.867799],
[110.859268, -6.868592],
[110.860992, -6.869248],
[110.862007, -6.869598],
[110.863045, -6.870078],
[110.864273, -6.870773],
[110.868202, -6.872818],
[110.869888, -6.873244],
[110.871742, -6.873516],
[110.873627, -6.87363],
[110.874802, -6.873595],
[110.87796, -6.872823],
[110.87957, -6.87916],
[110.880508, -6.884962],
[110.879562, -6.891539],
[110.87973, -6.895682],
[110.878868, -6.899839],
[110.87748, -6.903485],
[110.876648, -6.905397],
[110.874886, -6.90686],
[110.869484, -6.907223],
[110.863983, -6.904305],
[110.858688, -6.903687],
[110.852661, -6.904],
[110.848869, -6.908715],
[110.846558, -6.911631],
[110.844574, -6.914129],
[110.84156, -6.91934],
[110.840645, -6.920919],
[110.840454, -6.923801],
[110.841927, -6.926889],
[110.842705, -6.928952],
[110.842384, -6.932846],
[110.840652, -6.93468],
[110.837906, -6.935409],
[110.835663, -6.935555],
[110.833832, -6.936103],
[110.831032, -6.936943],
[110.829208, -6.938465],
[110.826813, -6.939476],
[110.821693, -6.939662],
[110.817039, -6.939553],
[110.815422, -6.939419],
[110.811394, -6.943028],
[110.810722, -6.944057],
[110.809875, -6.945352],
[110.809273, -6.947663],
[110.808975, -6.950439],
[110.808716, -6.95291],
[110.809494, -6.955318],
[110.811371, -6.958228],
[110.812141, -6.960175],
[110.812103, -6.961385],
[110.811348, -6.96508],
[110.810471, -6.967971],
[110.809753, -6.970457],
[110.806816, -6.973951],
[110.804474, -6.975308],
[110.802361, -6.976201],
[110.800072, -6.977211],
[110.798096, -6.977856],
],
],
],
},
},
{
type: "Feature",
properties: {
ID: "2419",
ID_Kec: "3319050",
Kecamatan: "Mejobo",
xcoord: 110.88627,
ycoord: -6.84128,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data5.jml_kematian_bayi,
stunting: data5.stunting,
jml_kematian_ibu: data5.jml_kematian_ibu,
jml_kematian_balita: data5.jml_kematian_balita,
jml_ttl: data5.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.87796, -6.872823],
[110.874802, -6.873595],
[110.873627, -6.87363],
[110.871742, -6.873516],
[110.869888, -6.873244],
[110.868202, -6.872818],
[110.864273, -6.870773],
[110.863045, -6.870078],
[110.862007, -6.869598],
[110.860992, -6.869248],
[110.859268, -6.868592],
[110.858345, -6.867799],
[110.858658, -6.866529],
[110.85936, -6.864003],
[110.859604, -6.860217],
[110.857773, -6.853458],
[110.85746, -6.851194],
[110.85714, -6.848761],
[110.856888, -6.845685],
[110.856995, -6.841841],
[110.856979, -6.839568],
[110.857628, -6.837471],
[110.860756, -6.835564],
[110.861816, -6.835457],
[110.862892, -6.835308],
[110.866356, -6.832888],
[110.866608, -6.831532],
[110.867706, -6.826336],
[110.868958, -6.825974],
[110.870316, -6.825312],
[110.871933, -6.82498],
[110.874435, -6.825284],
[110.876389, -6.825571],
[110.878349, -6.826071],
[110.883369, -6.82738],
[110.884499, -6.827403],
[110.887939, -6.82637],
[110.888359, -6.825287],
[110.889038, -6.82279],
[110.889244, -6.82159],
[110.889542, -6.817686],
[110.888023, -6.813606],
[110.887627, -6.812572],
[110.889679, -6.812029],
[110.890869, -6.811138],
[110.891624, -6.810042],
[110.892876, -6.808922],
[110.894066, -6.809002],
[110.895134, -6.809453],
[110.896629, -6.810236],
[110.898598, -6.810923],
[110.900452, -6.811208],
[110.90155, -6.811159],
[110.90287, -6.810883],
[110.904114, -6.810591],
[110.907738, -6.810018],
[110.9123, -6.811609],
[110.913231, -6.812874],
[110.913704, -6.814336],
[110.913826, -6.815552],
[110.914383, -6.817272],
[110.914383, -6.818959],
[110.913658, -6.82227],
[110.912376, -6.823633],
[110.911163, -6.824868],
[110.909676, -6.82673],
[110.909012, -6.828069],
[110.908783, -6.829282],
[110.910637, -6.832241],
[110.912514, -6.833813],
[110.91407, -6.835512],
[110.914848, -6.838305],
[110.914268, -6.841403],
[110.913185, -6.844254],
[110.912346, -6.847608],
[110.912422, -6.850411],
[110.913361, -6.853163],
[110.914398, -6.855944],
[110.915054, -6.859194],
[110.915581, -6.863058],
[110.915642, -6.864192],
[110.911789, -6.865383],
[110.910309, -6.86584],
[110.904549, -6.866837],
[110.901993, -6.867279],
[110.89637, -6.867471],
[110.892807, -6.867695],
[110.890511, -6.86784],
[110.886894, -6.86812],
[110.884193, -6.868215],
[110.881897, -6.868361],
[110.878914, -6.869151],
[110.87796, -6.872823],
],
],
],
},
},
{
type: "Feature",
properties: {
ID: "2420",
ID_Kec: "3319060",
Kecamatan: "Jekulo",
xcoord: 110.92986,
ycoord: -6.79858,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data6.jml_kematian_bayi,
stunting: data6.stunting,
jml_kematian_ibu: data6.jml_kematian_ibu,
jml_kematian_balita: data6.jml_kematian_balita,
jml_ttl: data6.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.915642, -6.864192],
[110.915581, -6.863058],
[110.915054, -6.859194],
[110.914398, -6.855944],
[110.913361, -6.853163],
[110.912422, -6.850411],
[110.912346, -6.847608],
[110.913185, -6.844254],
[110.914268, -6.841403],
[110.914848, -6.838305],
[110.91407, -6.835512],
[110.912514, -6.833813],
[110.910637, -6.832241],
[110.908783, -6.829282],
[110.909012, -6.828069],
[110.909676, -6.82673],
[110.911163, -6.824868],
[110.912376, -6.823633],
[110.913658, -6.82227],
[110.914383, -6.818959],
[110.914383, -6.817272],
[110.913826, -6.815552],
[110.913704, -6.814336],
[110.913231, -6.812874],
[110.9123, -6.811609],
[110.907738, -6.810018],
[110.904114, -6.810591],
[110.90287, -6.810883],
[110.90155, -6.811159],
[110.900452, -6.811208],
[110.898598, -6.810923],
[110.896629, -6.810236],
[110.895134, -6.809453],
[110.894066, -6.809002],
[110.892876, -6.808922],
[110.891624, -6.810042],
[110.890869, -6.811138],
[110.889679, -6.812029],
[110.887627, -6.812572],
[110.886765, -6.811608],
[110.884926, -6.809035],
[110.884407, -6.807588],
[110.885147, -6.806807],
[110.886055, -6.805598],
[110.887344, -6.803063],
[110.887314, -6.80169],
[110.887413, -6.800447],
[110.887421, -6.799304],
[110.887291, -6.797501],
[110.887238, -6.795428],
[110.887321, -6.793198],
[110.888168, -6.790874],
[110.889168, -6.789638],
[110.889992, -6.788586],
[110.891335, -6.78668],
[110.892426, -6.784358],
[110.892761, -6.781944],
[110.892105, -6.77938],
[110.891579, -6.777617],
[110.890778, -6.77205],
[110.891853, -6.771887],
[110.893112, -6.771796],
[110.894203, -6.771432],
[110.895294, -6.770496],
[110.895744, -6.769456],
[110.896271, -6.768145],
[110.897034, -6.767293],
[110.898209, -6.766701],
[110.900017, -6.766442],
[110.903992, -6.766415],
[110.905205, -6.766581],
[110.907143, -6.767152],
[110.908081, -6.768017],
[110.90844, -6.769306],
[110.908585, -6.771194],
[110.908768, -6.77294],
[110.909134, -6.774144],
[110.911636, -6.777308],
[110.912659, -6.777071],
[110.913582, -6.776006],
[110.913956, -6.77498],
[110.91362, -6.772876],
[110.913353, -6.771558],
[110.913231, -6.769656],
[110.913872, -6.767374],
[110.914848, -6.766823],
[110.916283, -6.766462],
[110.918465, -6.76592],
[110.919899, -6.764873],
[110.920784, -6.763278],
[110.92131, -6.761467],
[110.921516, -6.759266],
[110.92131, -6.756734],
[110.921951, -6.754995],
[110.923492, -6.751389],
[110.923882, -6.749233],
[110.924339, -6.747821],
[110.92485, -6.746109],
[110.925323, -6.744268],
[110.925896, -6.742528],
[110.926582, -6.740375],
[110.927376, -6.73775],
[110.926781, -6.735896],
[110.928856, -6.73627],
[110.930626, -6.735612],
[110.935074, -6.73296],
[110.936974, -6.733049],
[110.938766, -6.734118],
[110.93988, -6.735391],
[110.941223, -6.741167],
[110.940842, -6.743014],
[110.94133, -6.744965],
[110.941605, -6.748301],
[110.941246, -6.751702],
[110.941216, -6.753603],
[110.941589, -6.755498],
[110.942818, -6.756978],
[110.944641, -6.757402],
[110.946373, -6.756353],
[110.947021, -6.753696],
[110.947388, -6.750985],
[110.947754, -6.748274],
[110.948204, -6.747346],
[110.950668, -6.746967],
[110.952751, -6.752408],
[110.95356, -6.756485],
[110.955917, -6.760253],
[110.959122, -6.768384],
[110.961594, -6.772841],
[110.962273, -6.77478],
[110.964401, -6.780862],
[110.967377, -6.783931],
[110.969749, -6.789999],
[110.970039, -6.79397],
[110.970566, -6.798684],
[110.970703, -6.800639],
[110.971298, -6.802128],
[110.974602, -6.804271],
[110.975113, -6.807545],
[110.974014, -6.811591],
[110.974091, -6.817174],
[110.974312, -6.820626],
[110.975304, -6.826485],
[110.973984, -6.830476],
[110.971313, -6.833219],
[110.965385, -6.836813],
[110.962738, -6.83862],
[110.961685, -6.839339],
[110.955734, -6.842031],
[110.954201, -6.842724],
[110.951378, -6.84573],
[110.947685, -6.849671],
[110.94474, -6.8527],
[110.941498, -6.85522],
[110.939499, -6.855989],
[110.937149, -6.856892],
[110.933212, -6.858961],
[110.929848, -6.86108],
[110.928207, -6.861446],
[110.922974, -6.862614],
[110.921394, -6.862859],
[110.918495, -6.863309],
[110.915642, -6.864192],
],
],
],
},
},
{
type: "Feature",
properties: {
ID: "2421",
ID_Kec: "3319070",
Kecamatan: "Bae",
xcoord: 110.86731,
ycoord: -6.78058,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data7.jml_kematian_bayi,
stunting: data7.stunting,
jml_kematian_ibu: data7.jml_kematian_ibu,
jml_kematian_balita: data7.jml_kematian_balita,
jml_ttl: data7.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.87178, -6.80831],
[110.870834, -6.807087],
[110.869904, -6.806538],
[110.867905, -6.806437],
[110.864815, -6.805271],
[110.862862, -6.80407],
[110.86187, -6.803233],
[110.86058, -6.801994],
[110.85984, -6.800974],
[110.858368, -6.799321],
[110.856094, -6.797617],
[110.854774, -6.79649],
[110.852829, -6.794846],
[110.852051, -6.793854],
[110.851601, -6.79265],
[110.85125, -6.789831],
[110.849815, -6.787561],
[110.84845, -6.788052],
[110.847672, -6.788876],
[110.847038, -6.789786],
[110.846268, -6.791324],
[110.84536, -6.793748],
[110.844894, -6.796418],
[110.841858, -6.794137],
[110.841919, -6.791407],
[110.842011, -6.78912],
[110.842011, -6.787218],
[110.842072, -6.784874],
[110.842201, -6.783216],
[110.842476, -6.782003],
[110.843002, -6.780864],
[110.84597, -6.778012],
[110.847145, -6.777177],
[110.848259, -6.776427],
[110.849388, -6.77565],
[110.850952, -6.773445],
[110.851921, -6.772165],
[110.852539, -6.771298],
[110.854095, -6.770366],
[110.856018, -6.769365],
[110.857246, -6.767558],
[110.857552, -6.76656],
[110.857681, -6.764688],
[110.857468, -6.762527],
[110.857254, -6.760953],
[110.857094, -6.759137],
[110.857285, -6.757437],
[110.857796, -6.755811],
[110.858521, -6.754686],
[110.859299, -6.753563],
[110.860367, -6.752627],
[110.862404, -6.7532],
[110.863029, -6.755777],
[110.86306, -6.757393],
[110.863182, -6.758481],
[110.864098, -6.759888],
[110.865395, -6.759969],
[110.866997, -6.759666],
[110.868546, -6.759978],
[110.8694, -6.761872],
[110.869926, -6.763534],
[110.87059, -6.764497],
[110.873024, -6.764228],
[110.87355, -6.763089],
[110.873856, -6.76199],
[110.874603, -6.760409],
[110.875381, -6.7596],
[110.876534, -6.759837],
[110.877571, -6.76053],
[110.878944, -6.762099],
[110.879623, -6.763262],
[110.880341, -6.765398],
[110.880508, -6.7677],
[110.880196, -6.769313],
[110.879852, -6.770741],
[110.88015, -6.77243],
[110.881493, -6.773098],
[110.882622, -6.773406],
[110.88517, -6.773038],
[110.887276, -6.772139],
[110.888435, -6.771919],
[110.890778, -6.77205],
[110.891579, -6.777617],
[110.892105, -6.77938],
[110.892761, -6.781944],
[110.892426, -6.784358],
[110.891335, -6.78668],
[110.889992, -6.788586],
[110.889168, -6.789638],
[110.888168, -6.790874],
[110.887321, -6.793198],
[110.887238, -6.795428],
[110.887291, -6.797501],
[110.887421, -6.799304],
[110.887413, -6.800447],
[110.887314, -6.80169],
[110.887344, -6.803063],
[110.886055, -6.805598],
[110.885147, -6.806807],
[110.884407, -6.807588],
[110.878372, -6.808529],
[110.875786, -6.80811],
[110.87178, -6.80831],
],
],
],
},
},
{
type: "Feature",
properties: {
ID: "2422",
ID_Kec: "3319080",
Kecamatan: "Gebog",
xcoord: 110.85044,
ycoord: -6.70945,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data8.jml_kematian_bayi,
stunting: data8.stunting,
jml_kematian_ibu: data8.jml_kematian_ibu,
jml_kematian_balita: data8.jml_kematian_balita,
jml_ttl: data8.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.808647, -6.755976],
[110.811111, -6.757709],
[110.81221, -6.758294],
[110.813858, -6.759172],
[110.817848, -6.758513],
[110.819382, -6.757878],
[110.820518, -6.756725],
[110.822357, -6.754523],
[110.824631, -6.752963],
[110.827362, -6.752465],
[110.830223, -6.753281],
[110.833672, -6.755432],
[110.836952, -6.757784],
[110.83947, -6.758554],
[110.841591, -6.757615],
[110.843094, -6.75621],
[110.846329, -6.751538],
[110.84726, -6.74999],
[110.847893, -6.748619],
[110.848549, -6.747148],
[110.849205, -6.74533],
[110.85006, -6.743659],
[110.850853, -6.741467],
[110.850822, -6.740226],
[110.849472, -6.739738],
[110.848183, -6.739606],
[110.846237, -6.739401],
[110.844131, -6.739347],
[110.841721, -6.739296],
[110.84005, -6.738692],
[110.839195, -6.738129],
[110.837868, -6.736975],
[110.837112, -6.735444],
[110.8368, -6.734056],
[110.836609, -6.732445],
[110.836563, -6.726882],
[110.8377, -6.72469],
[110.838242, -6.721583],
[110.837769, -6.718708],
[110.83638, -6.716487],
[110.834953, -6.714962],
[110.833145, -6.713614],
[110.831696, -6.712264],
[110.832268, -6.707592],
[110.833786, -6.707354],
[110.836266, -6.70733],
[110.83905, -6.707427],
[110.842178, -6.707248],
[110.845627, -6.70652],
[110.848068, -6.704908],
[110.849548, -6.703032],
[110.85067, -6.701086],
[110.850822, -6.699099],
[110.85041, -6.697514],
[110.849762, -6.694889],
[110.849655, -6.691514],
[110.85025, -6.688282],
[110.850891, -6.685347],
[110.851677, -6.681716],
[110.852364, -6.678483],
[110.853348, -6.67475],
[110.85582, -6.668848],
[110.856461, -6.667324],
[110.857582, -6.665178],
[110.85939, -6.665012],
[110.862267, -6.664239],
[110.864288, -6.662855],
[110.865913, -6.661077],
[110.867104, -6.658112],
[110.867355, -6.655777],
[110.866859, -6.653696],
[110.865967, -6.650726],
[110.865623, -6.648769],
[110.865662, -6.64512],
[110.865837, -6.640427],
[110.866295, -6.636253],
[110.86731, -6.632967],
[110.869019, -6.6295],
[110.870071, -6.62805],
[110.872398, -6.62495],
[110.874001, -6.623098],
[110.876015, -6.620895],
[110.880623, -6.617251],
[110.882813, -6.617703],
[110.884705, -6.617882],
[110.886719, -6.618086],
[110.889259, -6.618211],
[110.892212, -6.618381],
[110.895027, -6.618701],
[110.896675, -6.619182],
[110.895721, -6.620665],
[110.893494, -6.624273],
[110.892273, -6.627241],
[110.891174, -6.629922],
[110.890488, -6.632014],
[110.890038, -6.634216],
[110.88987, -6.637115],
[110.889931, -6.639683],
[110.890259, -6.643447],
[110.889954, -6.645177],
[110.889633, -6.646237],
[110.889091, -6.647513],
[110.888374, -6.648306],
[110.886826, -6.649138],
[110.885063, -6.649914],
[110.883942, -6.650669],
[110.88327, -6.651533],
[110.882362, -6.653256],
[110.882057, -6.654544],
[110.881813, -6.655617],
[110.880577, -6.657372],
[110.879272, -6.657944],
[110.87735, -6.658808],
[110.876373, -6.659519],
[110.875649, -6.660954],
[110.875656, -6.662766],
[110.874863, -6.664745],
[110.873756, -6.665485],
[110.87236, -6.665616],
[110.870964, -6.665731],
[110.869019, -6.66721],
[110.867668, -6.669608],
[110.86689, -6.671786],
[110.866196, -6.67355],
[110.865631, -6.675368],
[110.865364, -6.676827],
[110.865135, -6.677886],
[110.864899, -6.679715],
[110.86451, -6.681118],
[110.862968, -6.684875],
[110.862389, -6.686537],
[110.861176, -6.687707],
[110.861809, -6.690525],
[110.861809, -6.694207],
[110.862473, -6.696325],
[110.863869, -6.698079],
[110.864677, -6.70011],
[110.864685, -6.702351],
[110.864388, -6.704651],
[110.863724, -6.706857],
[110.862686, -6.70948],
[110.862228, -6.711041],
[110.861961, -6.712257],
[110.861572, -6.713503],
[110.861549, -6.715087],
[110.861336, -6.718943],
[110.861397, -6.720284],
[110.86161, -6.721765],
[110.863167, -6.724287],
[110.863472, -6.725425],
[110.863464, -6.730962],
[110.863327, -6.73299],
[110.863281, -6.735017],
[110.863235, -6.737658],
[110.863174, -6.739642],
[110.863121, -6.742069],
[110.863037, -6.743725],
[110.862732, -6.746026],
[110.862099, -6.74796],
[110.861763, -6.749505],
[110.861404, -6.75095],
[110.860367, -6.752627],
[110.859299, -6.753563],
[110.858521, -6.754686],
[110.857796, -6.755811],
[110.857285, -6.757437],
[110.857094, -6.759137],
[110.857254, -6.760953],
[110.857468, -6.762527],
[110.857681, -6.764688],
[110.857552, -6.76656],
[110.857246, -6.767558],
[110.856018, -6.769365],
[110.854095, -6.770366],
[110.852539, -6.771298],
[110.851921, -6.772165],
[110.850952, -6.773445],
[110.849388, -6.77565],
[110.848259, -6.776427],
[110.847145, -6.777177],
[110.84597, -6.778012],
[110.843002, -6.780864],
[110.842476, -6.782003],
[110.842201, -6.783216],
[110.842072, -6.784874],
[110.842011, -6.787218],
[110.842011, -6.78912],
[110.841919, -6.791407],
[110.841858, -6.794137],
[110.840714, -6.794014],
[110.839867, -6.79468],
[110.838799, -6.795515],
[110.836906, -6.796588],
[110.835251, -6.797476],
[110.833931, -6.798196],
[110.832779, -6.798874],
[110.831718, -6.799681],
[110.828087, -6.801656],
[110.825867, -6.801554],
[110.823647, -6.800565],
[110.822815, -6.797643],
[110.822601, -6.79574],
[110.823112, -6.792126],
[110.821762, -6.789314],
[110.820778, -6.788907],
[110.820511, -6.787783],
[110.818939, -6.788236],
[110.815475, -6.786681],
[110.814644, -6.785974],
[110.812294, -6.782997],
[110.811401, -6.78179],
[110.809875, -6.779748],
[110.807846, -6.777189],
[110.806374, -6.775162],
[110.80555, -6.773469],
[110.804733, -6.771433],
[110.804276, -6.769271],
[110.804214, -6.766154],
[110.804741, -6.76357],
[110.805336, -6.762045],
[110.806046, -6.760863],
[110.806656, -6.759796],
[110.805969, -6.75834],
[110.808647, -6.755976],
],
],
],
},
},
{
type: "Feature",
properties: {
ID: "2423",
ID_Kec: "3319090",
Kecamatan: "Dawe",
xcoord: 110.89732,
ycoord: -6.69825,
kode_prop: "33",
kode_kab: "3319",
jml_kematian_bayi: data9.jml_kematian_bayi,
stunting: data9.stunting,
jml_kematian_ibu: data9.jml_kematian_ibu,
jml_kematian_balita: data9.jml_kematian_balita,
jml_ttl: data9.jml_ttl,
},
geometry: {
type: "MultiPolygon",
coordinates: [
[
[
[110.890778, -6.77205],
[110.888435, -6.771919],
[110.887276, -6.772139],
[110.88517, -6.773038],
[110.882622, -6.773406],
[110.881493, -6.773098],
[110.88015, -6.77243],
[110.879852, -6.770741],
[110.880196, -6.769313],
[110.880508, -6.7677],
[110.880341, -6.765398],
[110.879623, -6.763262],
[110.878944, -6.762099],
[110.877571, -6.76053],
[110.876534, -6.759837],
[110.875381, -6.7596],
[110.874603, -6.760409],
[110.873856, -6.76199],
[110.87355, -6.763089],
[110.873024, -6.764228],
[110.87059, -6.764497],
[110.869926, -6.763534],
[110.8694, -6.761872],
[110.868546, -6.759978],
[110.866997, -6.759666],
[110.865395, -6.759969],
[110.864098, -6.759888],
[110.863182, -6.758481],
[110.86306, -6.757393],
[110.863029, -6.755777],
[110.862404, -6.7532],
[110.860367, -6.752627],
[110.861404, -6.75095],
[110.861763, -6.749505],
[110.862099, -6.74796],
[110.862732, -6.746026],
[110.863037, -6.743725],
[110.863121, -6.742069],
[110.863174, -6.739642],
[110.863235, -6.737658],
[110.863281, -6.735017],
[110.863327, -6.73299],
[110.863464, -6.730962],
[110.863472, -6.725425],
[110.863167, -6.724287],
[110.86161, -6.721765],
[110.861397, -6.720284],
[110.861336, -6.718943],
[110.861549, -6.715087],
[110.861572, -6.713503],
[110.861961, -6.712257],
[110.862228, -6.711041],
[110.862686, -6.70948],
[110.863724, -6.706857],
[110.864388, -6.704651],
[110.864685, -6.702351],
[110.864677, -6.70011],
[110.863869, -6.698079],
[110.862473, -6.696325],
[110.861809, -6.694207],
[110.861809, -6.690525],
[110.861176, -6.687707],
[110.862389, -6.686537],
[110.862968, -6.684875],
[110.86451, -6.681118],
[110.864899, -6.679715],
[110.865135, -6.677886],
[110.865364, -6.676827],
[110.865631, -6.675368],
[110.866196, -6.67355],
[110.86689, -6.671786],
[110.867668, -6.669608],
[110.869019, -6.66721],
[110.870964, -6.665731],
[110.87236, -6.665616],
[110.873756, -6.665485],
[110.874863, -6.664745],
[110.875656, -6.662766],
[110.875649, -6.660954],
[110.876373, -6.659519],
[110.87735, -6.658808],
[110.879272, -6.657944],
[110.880577, -6.657372],
[110.881813, -6.655617],
[110.882057, -6.654544],
[110.882362, -6.653256],
[110.88327, -6.651533],
[110.883942, -6.650669],
[110.885063, -6.649914],
[110.886826, -6.649138],
[110.888374, -6.648306],
[110.889091, -6.647513],
[110.889633, -6.646237],
[110.889954, -6.645177],
[110.890259, -6.643447],
[110.889931, -6.639683],
[110.88987, -6.637115],
[110.890038, -6.634216],
[110.890488, -6.632014],
[110.891174, -6.629922],
[110.892273, -6.627241],
[110.893494, -6.624273],
[110.895721, -6.620665],
[110.896675, -6.619182],
[110.898491, -6.620133],
[110.899445, -6.621141],
[110.900597, -6.622272],
[110.901985, -6.623217],
[110.901031, -6.625129],
[110.899925, -6.628311],
[110.895966, -6.632972],
[110.895409, -6.634418],
[110.895599, -6.635856],
[110.898987, -6.639724],
[110.900749, -6.642291],
[110.903488, -6.645362],
[110.906448, -6.651597],
[110.908272, -6.657044],
[110.909019, -6.659277],
[110.910339, -6.663001],
[110.912621, -6.666251],
[110.914368, -6.66784],
[110.916763, -6.670916],
[110.91864, -6.673423],
[110.918442, -6.676017],
[110.919357, -6.680248],
[110.919975, -6.683077],
[110.921982, -6.686965],
[110.924034, -6.689988],
[110.924912, -6.69107],
[110.926056, -6.692346],
[110.927307, -6.693743],
[110.929291, -6.695961],
[110.930489, -6.698472],
[110.932068, -6.701796],
[110.933556, -6.705748],
[110.934273, -6.70735],
[110.933891, -6.709255],
[110.933075, -6.712261],
[110.931908, -6.715328],
[110.929855, -6.716853],
[110.927132, -6.715164],
[110.924934, -6.712564],
[110.923767, -6.712619],
[110.923584, -6.71403],
[110.922981, -6.71856],
[110.922913, -6.726046],
[110.92408, -6.7315],
[110.926781, -6.735896],
[110.927376, -6.73775],
[110.926582, -6.740375],
[110.925896, -6.742528],
[110.925323, -6.744268],
[110.92485, -6.746109],
[110.924339, -6.747821],
[110.923882, -6.749233],
[110.923492, -6.751389],
[110.921951, -6.754995],
[110.92131, -6.756734],
[110.921516, -6.759266],
[110.92131, -6.761467],
[110.920784, -6.763278],
[110.919899, -6.764873],
[110.918465, -6.76592],
[110.916283, -6.766462],
[110.914848, -6.766823],
[110.913872, -6.767374],
[110.913231, -6.769656],
[110.913353, -6.771558],
[110.91362, -6.772876],
[110.913956, -6.77498],
[110.913582, -6.776006],
[110.912659, -6.777071],
[110.911636, -6.777308],
[110.909134, -6.774144],
[110.908768, -6.77294],
[110.908585, -6.771194],
[110.90844, -6.769306],
[110.908081, -6.768017],
[110.907143, -6.767152],
[110.905205, -6.766581],
[110.903992, -6.766415],
[110.900017, -6.766442],
[110.898209, -6.766701],
[110.897034, -6.767293],
[110.896271, -6.768145],
[110.895744, -6.769456],
[110.895294, -6.770496],
[110.894203, -6.771432],
[110.893112, -6.771796],
[110.891853, -6.771887],
[110.890778, -6.77205],
],
],
],
},
},
],
};