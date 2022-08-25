am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.PieChart);

    // Delete am chart logo
    if (chart.logo) {
        chart.logo.disabled = true;
    }

    // Set title
    var title = chart.titles.create();
    title.text = "Productos en Inventario";
    title.fontSize = 25;
    //title.tooltipText = "Productos en el inventario";
    // Set text color
    chart.tooltip.getFillFromObject = false;
    chart.tooltip.background.fill = am4core.color("#003566");
    chart.tooltip.label.fill = am4core.color("#edf6f9");
    chart.tooltip.label.fontSize = 40;
    // Export data/graphic
    chart.exporting.menu = new am4core.ExportMenu();
    chart.exporting.menu.align = "right";
    chart.exporting.menu.items.align = "right";
    chart.exporting.menu.verticalAlign = "top";
    chart.exporting.menu.items = [{
        "label": "...",
        "menu": [
          { "type": "pdfdata", "label": "PDF" },
          { "type": "csv", "label": "CSV" }
        ]
      }];
    // Enabling annotation
    // var annotation = chart.plugins.push(new am4plugins_annotation.Annotation());

    // Set data
    let url = 'http://localhost/GrupoUnoFinal/merca_super/database/productos.php';
    fetch(url)
        .then(response => response.json())
        .then(datos => mostrar(datos))
        .catch(error => console.log(error))
    const mostrar = (productos) => {
        productos.forEach(element => {
            chart.data.push(element.nombre)
        });
        chart.data = productos;
        console.log(chart.data)
    }


    // Add and configure Series for first graphic
    var pieSeries = chart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "cantidad";
    pieSeries.dataFields.category = "nombre";
    pieSeries.slices.template.stroke = am4core.color("#fff");
    pieSeries.slices.template.strokeOpacity = 1;
    pieSeries.labels.template.disabled = true;
    pieSeries.ticks.template.disabled = true;

    // This creates initial animation
    pieSeries.hiddenState.properties.opacity = 1;
    pieSeries.hiddenState.properties.endAngle = -90;
    pieSeries.hiddenState.properties.startAngle = -90;

    chart.hiddenState.properties.radius = am4core.percent(0);
});

