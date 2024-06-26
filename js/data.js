OrgChart.templates.myTemplate = Object.assign({}, OrgChart.templates.ana);

var chart = new OrgChart(document.getElementById("tree"), {
  template: "diva",
  scaleInitial: OrgChart.match.boundary,

  nodeBinding: {
    field_0: "name",
    field_1: "title",
    img_0: "img",
  },
  nodes: [
    {
      id: 1,
      name: "Agung Karyanto",
      title: "Kepala Dinas",
      img: "https://cdn.balkan.app/shared/1.jpg",
    },
    {
      id: 2,
      pid: 1,
      name: "Mustianik S.E",
      title: "Sekretaris Dinas",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 3,
      pid: 1,
      name: "Noor Khasan S.E",
      title: "Kabid Pelayanan Rehabilitas Sosial",
      img: "https://cdn.balkan.app/shared/1.jpg",
    },
    {
      id: 4,
      pid: 1,
      name: "Darwati S.H",
      title: "Kabid Pemberdayaan Kelembagaan Sosial",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 5,
      pid: 1,
      name: "Any Wilianti S.KM",
      title: "Kabid Pemberdayaan Perempuan",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 6,
      pid: 1,
      name: "Mukhamad Nasiban S.KM. MM",
      title: "Kabid Pengendalian Penduduk",
      img: "https://cdn.balkan.app/shared/1.jpg",
    },
    {
      id: 7,
      pid: 2,
      name: "Any Saptaria Rahayu S.Sos",
      title: "Kepala Subagian Umum",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 8,
      pid: 2,
      name: "Mimik Yuani Astutik S.E",
      title: "Subkor Perencana Ahli Muda",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 9,
      pid: 2,
      name: "Hari Yulianti S.E",
      title: "Kepala Subagian Keuangan",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 10,
      pid: 3,
      name: "Endang Setyaningsih S.KM M,Kes",
      title: "Subkor Pekerja Sosial Ahli Muda",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 11,
      pid: 3,
      name: "Dra. Chumayah",
      title: "Subkor Pekerja Sosial Ahli Muda",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 12,
      pid: 4,
      name: "Ida Kurnia S.Pd",
      title: "Subkor Penyuluh Sosial Ahli Muda",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 13,
      pid: 4,
      name: "Heni Febriana S.KM F.Kes",
      title: "Subkor Penyuluh Sosial Ahli Muda",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 14,
      pid: 5,
      name: "Dra. Murti Santi MM",
      title: "Subkor Analisis Kebijakan Ahli Muda",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 15,
      pid: 5,
      name: "Sri Pudjiastutik S.H MM",
      title: "Subkor Analisis Kebijakan Ahli Muda",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
    {
      id: 14,
      pid: 6,
      name: "Umi Widiyanti S.KM",
      title: "Subkor Penata Kependudukan",
      img: "https://cdn.balkan.app/shared/2.jpg",
    },
  ],
});
