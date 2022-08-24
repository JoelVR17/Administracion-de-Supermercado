am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.PieChart);
    var chartp = am4core.create("chartp", am4charts.PieChart);

    // Delete am chart logo
    if (chart.logo && chartp.logo) {
        chart.logo.disabled = true;
        chartp.logo.disabled = true;
    }

    // Set title
    var title = chart.titles.create();
    title.text = "Productos Stock";
    title.fontSize = 22;
    //title.tooltipText = "Productos en el inventario";
    // Set text color
    chart.tooltip.getFillFromObject = false;
    chart.tooltip.background.fill = am4core.color("#003566");
    chart.tooltip.label.fill = am4core.color("#edf6f9");
    chart.tooltip.label.fontSize = 22;
    // Export data/graphic
    chart.exporting.menu = new am4core.ExportMenu();
    chart.exporting.menu.align = "right";
    chart.exporting.menu.items.align = "right";
    chart.exporting.menu.verticalAlign = "top";
    chart.exporting.menu.items = [{
        "label": "...",
        "menu": [
          { "type": "png", "label": "PNG" },
          { "type": "json", "label": "JSON" },
          { "type": "pdfdata", "label": "PDF" },
          { "type": "csv", "label": "CSV" }
        ]
      }];
    // Enabling annotation
    // var annotation = chart.plugins.push(new am4plugins_annotation.Annotation());

    // Set title second graphic
    var title = chartp.titles.create();
    title.text = "Categorias";
    title.fontSize = 22;
    //title.tooltipText = "Categoria de productos disponibles";
    // Set text color second graphic
    chartp.tooltip.getFillFromObject = false;
    chartp.tooltip.background.fill = am4core.color("#003566");
    chartp.tooltip.label.fill = am4core.color("#edf6f9");
    // Export data/graphic
    chartp.exporting.menu = new am4core.ExportMenu();
    chartp.exporting.menu.align = "right";
    chartp.exporting.menu.verticalAlign = "top";
    chartp.exporting.menu.items = [{
        "label": "...",
        "menu": [
          { "type": "png", "label": "PNG" },
          { "type": "json", "label": "JSON" },
          { "type": "pdfdata", "label": "PDF" },
          { "type": "csv", "label": "CSV" }
        ]
      }];
    // Enabling annotation
    // var annotation = chartp.plugins.push(new am4plugins_annotation.Annotation());

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
    
    
    // Set data
    let urlCategoria = 'http://localhost/GrupoUnoFinal/merca_super/database/categorias.php';
    fetch(urlCategoria)
        .then(response => response.json())
        .then(datos => mostrarCategoria(datos))
        .catch(error => console.log(error))
    const mostrarCategoria = (categorias) => {
        categorias.forEach(categoria => {
            chartp.data.push(categoria.nombre_categoria) // Tabla.Atributo
        });
        chartp.data = categorias;
        console.log(chartp.data);
    }


    // Second graphic
    var pieSeries2 = chartp.series.push(new am4charts.PieSeries());
    // pieSeries2.dataFields.value = "cantidad";
    pieSeries2.dataFields.category = "nombre";
    pieSeries2.slices.template.stroke = am4core.color("#fff");
    pieSeries2.slices.template.strokeOpacity = 1;
    pieSeries2.labels.template.disabled = true;
    pieSeries2.ticks.template.disabled = true;

    // This creates initial animation
    pieSeries2.hiddenState.properties.opacity = 1;
    pieSeries2.hiddenState.properties.endAngle = -90;
    pieSeries2.hiddenState.properties.startAngle = -90;

    chart.hiddenState.properties.radius = am4core.percent(0);

});

