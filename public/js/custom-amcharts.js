am5.ready(function () {

    var continents = {
        "AF": 0,
        "AN": 1,
        "AS": 2,
        "EU": 3,
        "NA": 4,
        "OC": 5,
        "SA": 6
    }

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([am5themes_Animated.new(root)]);

    // Create the map chart
    // https://www.amcharts.com/docs/v5/charts/map-chart/
    var chart = root.container.children.push(
        am5map.MapChart.new(root, {
            panX: "rotateX",
            panY: "translateY",
            projection: am5map.geoMercator()
        })
    );

    var cont = chart.children.push(
        am5.Container.new(root, {
            layout: root.horizontalLayout,
            x: 20,
            y: 40
        })
    );

    // Add labels and controls
    cont.children.push(
        am5.Label.new(root, {
            centerY: am5.p50,
            text: "Map"
        })
    );

    var switchButton = cont.children.push(
        am5.Button.new(root, {
            themeTags: ["switch"],
            centerY: am5.p50,
            icon: am5.Circle.new(root, {
                themeTags: ["icon"]
            })
        })
    );

    switchButton.on("active", function () {
        if (!switchButton.get("active")) {
            chart.set("projection", am5map.geoMercator());
            chart.set("panY", "translateY");
            chart.set("rotationY", 0);
            backgroundSeries.mapPolygons.template.set("fillOpacity", 0);
        } else {
            chart.set("projection", am5map.geoOrthographic());
            chart.set("panY", "rotateY");

            backgroundSeries.mapPolygons.template.set("fillOpacity", 0.1);
        }
    });

    cont.children.push(
        am5.Label.new(root, {
            centerY: am5.p50,
            text: "Globe"
        })
    );

    // Create series for background fill
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
    var backgroundSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {}));
    backgroundSeries.mapPolygons.template.setAll({
        fill: root.interfaceColors.get("alternativeBackground"),
        fillOpacity: 0,
        strokeOpacity: 0
    });

    // Add background polygon
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
    backgroundSeries.data.push({
        geometry: am5map.getGeoRectangle(90, 180, -90, -180)
    });

    // Create main polygon series for countries
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var polygonSeries = chart.series.push(
        am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldLow
        })
    );

    // Create line series for trajectory lines
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-line-series/
    var lineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
    lineSeries.mapLines.template.setAll({
        stroke: root.interfaceColors.get("alternativeBackground"),
        strokeOpacity: 0.3
    });

    // Create point series for markers
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
    var pointSeries = chart.series.push(am5map.MapPointSeries.new(root, {}));
    var colorset = am5.ColorSet.new(root, {});

    pointSeries.bullets.push(function () {
        var container = am5.Container.new(root, {
            tooltipText: "{title}",
            cursorOverStyle: "pointer"
        });

        container.events.on("click", (e) => {
            window.location.href = e.target.dataItem.dataContext.url;
        });



        var circle = container.children.push(
            am5.Circle.new(root, {
                radius: 4,
                tooltipY: 0,
                fill: colorset.next(),
                strokeOpacity: 0
            })
        );


        var circle2 = container.children.push(
            am5.Circle.new(root, {
                radius: 4,
                tooltipY: 0,
                fill: colorset.next(),
                strokeOpacity: 0,
                tooltipText: "{title}"
            })
        );

        circle.animate({
            key: "scale",
            from: 1,
            to: 5,
            duration: 600,
            easing: am5.ease.out(am5.ease.cubic),
            loops: Infinity
        });
        circle.animate({
            key: "opacity",
            from: 1,
            to: 0.1,
            duration: 600,
            easing: am5.ease.out(am5.ease.cubic),
            loops: Infinity
        });

        return am5.Bullet.new(root, {
            sprite: container
        });
    });

    var cities = [{
        title: "Kuala Lumpur",
        latitude: 3.1289,
        longitude: 101.7216,
        url: "https://currenttech.pro/en/homepage/"
    }];

    for (var i = 0; i < cities.length; i++) {
        var city = cities[i];
        addCity(city.longitude, city.latitude, city.title, city.url);
    }

    function addCity(longitude, latitude, title, url) {
        pointSeries.data.push({
            url: url,
            geometry: {
                type: "Point",
                coordinates: [longitude, latitude]
            },
            title: title
        });
    }

    // Make stuff animate on load
    chart.appear(1000, 100);


}); // end am5.ready()
