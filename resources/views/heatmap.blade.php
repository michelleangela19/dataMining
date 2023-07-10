<div id="container"></div>

<script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-heatmap.min.js"></script>

<script>
  anychart.onDocumentReady(function () {

    // create the data
    var data = [
      { x: "2010", y: "Arab States", heat: 0.676 },
      { x: "2010", y: "East Asia and the Pacific", heat: 0.691 },
      { x: "2010", y: "Europe and Central Asia", heat: 0.735 },
      { x: "2010", y: "Latin America and the Caribbean", heat: 0.731 },
      { x: "2010", y: "South Asia", heat: 0.585 },
      { x: "2010", y: "Sub-Saharan Africa", heat: 0.498 },
      { x: "2011", y: "Arab States", heat: 0.681 },
      { x: "2011", y: "East Asia and the Pacific", heat: 0.700 },
      { x: "2011", y: "Europe and Central Asia", heat: 0.744 },
      { x: "2011", y: "Latin America and the Caribbean", heat: 0.737 },
      { x: "2011", y: "South Asia", heat: 0.593 },
      { x: "2011", y: "Sub-Saharan Africa", heat: 0.505 },
      { x: "2012", y: "Arab States", heat: 0.687 },
      { x: "2012", y: "East Asia and the Pacific", heat: 0.707 },
      { x: "2012", y: "Europe and Central Asia", heat: 0.750 },
      { x: "2012", y: "Latin America and the Caribbean", heat: 0.740 },
      { x: "2012", y: "South Asia", heat: 0.601 },
      { x: "2012", y: "Sub-Saharan Africa", heat: 0.512 },
      { x: "2013", y: "Arab States", heat: 0.688 },
      { x: "2013", y: "East Asia and the Pacific", heat: 0.714 },
      { x: "2013", y: "Europe and Central Asia", heat: 0.759 },
      { x: "2013", y: "Latin America and the Caribbean", heat: 0.748 },
      { x: "2013", y: "South Asia", heat: 0.607 },
      { x: "2013", y: "Sub-Saharan Africa", heat: 0.521 },
      { x: "2014", y: "Arab States", heat: 0.691 },
      { x: "2014", y: "East Asia and the Pacific", heat: 0.721 },
      { x: "2014", y: "Europe and Central Asia", heat: 0.766 },
      { x: "2014", y: "Latin America and the Caribbean", heat: 0.752 },
      { x: "2014", y: "South Asia", heat: 0.617 },
      { x: "2014", y: "Sub-Saharan Africa", heat: 0.527 },
      { x: "2015", y: "Arab States", heat: 0.695 },
      { x: "2015", y: "East Asia and the Pacific", heat: 0.727 },
      { x: "2015", y: "Europe and Central Asia", heat: 0.770 },
      { x: "2015", y: "Latin America and the Caribbean", heat: 0.754 },
      { x: "2015", y: "South Asia", heat: 0.624 },
      { x: "2015", y: "Sub-Saharan Africa", heat: 0.532 },
      { x: "2016", y: "Arab States", heat: 0.699 },
      { x: "2016", y: "East Asia and the Pacific", heat: 0.733 },
      { x: "2016", y: "Europe and Central Asia", heat: 0.772 },
      { x: "2016", y: "Latin America and the Caribbean", heat: 0.756 },
      { x: "2016", y: "South Asia", heat: 0.634 },
      { x: "2016", y: "Sub-Saharan Africa", heat: 0.535 },
      { x: "2017", y: "Arab States", heat: 0.699 },
      { x: "2017", y: "East Asia and the Pacific", heat: 0.733 },
      { x: "2017", y: "Europe and Central Asia", heat: 0.771 },
      { x: "2017", y: "Latin America and the Caribbean", heat: 0.758 },
      { x: "2017", y: "South Asia", heat: 0.638 },
      { x: "2017", y: "Sub-Saharan Africa", heat: 0.537 },
      { x: "2018", y: "Arab States", heat: 0.703 },
      { x: "2018", y: "East Asia and the Pacific", heat: 0.741 },
      { x: "2018", y: "Europe and Central Asia", heat: 0.779 },
      { x: "2018", y: "Latin America and the Caribbean", heat: 0.759 },
      { x: "2018", y: "South Asia", heat: 0.642 },
      { x: "2018", y: "Sub-Saharan Africa", heat: 0.541 },
    ];

    // create the chart and set the data
    chart = anychart.heatMap(data);

    // set the chart title
    chart.title("Human Development Index by region (2010-2018)");

    // create and configure the color scale.
    var customColorScale = anychart.scales.linearColor();
    customColorScale.colors(["#ACE8D4", "#00726A"]);

    // set the color scale as the color scale of the chart
    chart.colorScale(customColorScale);

    // set the container id
    chart.container("container");

    // initiate drawing the chart
    chart.draw();

  });
</script>

