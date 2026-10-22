<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> travel and venue" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> travel and venue" />

  <style>
    div#venuemap {
      height: 400px;
      width: 100%;
      border: 1px solid #CCC;
    }

    .travelIcon {
      width: 1.3em;
      height: 1.3em;
      filter: brightness(0) saturate(100%) invert(31%) sepia(57%) saturate(2045%) hue-rotate(292deg) brightness(87%) contrast(87%);
      margin-right: 1rem;
      margin-top: 0.25rem;
    }
  </style>

  <title>
    <?php echo $META['shortName']; ?> Travel & Venue
  </title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" integrity="sha384-sHL9NAb7lN7rfvG5lfHpm643Xkcjzp4jFvuavGOndn6pjVqS6ny56CAt3nsEVT4H" crossorigin="anonymous" />
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Travel & Venue Information
    </h2>



    <!-- NOTE: below is placeholder content derived from the Crypto
      2019 conference. please uncomment and replace with your own
      content when ready. this code is here to give you an idea of
      what the structure of this page has looked like in the past -->
    <div class="row">
      <section class="col-md-8">
        <p>
          The conference will be held at the Center for International Governance and
          Innovation (CIGI) in Waterloo, Ontario, near the campus of the University of Waterloo (roughly a 25 minute walk, or 2 stops on the tram).
        </p>
        <p>
          Address: 67 Erb St. W, Waterloo, ON N2L 6C2
        </p>
        <p>
          Nearby tram ("Ion") stops: Waterloo public square (Northbound) and Willis Way (Southbound).
        </p>

      </section>

      <div class="col-md-4">
        <div class="alert customAlert-cool" role="alert">
          <img src="images/icons/alert-triangle.svg" class="icon" alt="alert icon" />
          <!-- NOTE: this could be a warning that hotels book up fast in the season -->
          Spring weather is unpredictable. May average high temperatures are 17°C and lows are 6°C. 
        </div>
      </div>
    </div>

    <div id="venuemap" class="mt-2">
    </div>

    <!-- an example of how to organize travel info follows from Asiacrypt 2026 -->
    <h3 class="pageSubtitle mt-4">
      Travel to Waterloo
    </h3>
     <p>
          The nearest major airport is Toronto Pearson International Airport (YYZ), with daily flights to most international locations.
        </p>
        <p>
          Waterloo itself is 100 km away from this airport, and there are several methods to get to Waterloo.
        </p>
    <div class="row">
      <article class="col-sm-6 col-xxl-3 mt-2 mt-xxl-1">
        <h4 class="subSubtitle mb-3">
          Air Canada Bus
        </h4>
        <div class="d-flex">
          <!-- <img src="images/icons/watch.svg" class="travelIcon" alt="wristwatch icon" /> -->
          <p>1 hour travel time</p>
        </div>
        <div class="d-flex">
          <!-- <img src="images/icons/currency.svg" class="travelIcon" alt="currency icon" /> -->
          <p>CAD$40 for local taxi</p>
        </div>
        <p>
          Air Canada runs a bus from Toronto Pearson airport to Waterloo airport (YKF), coded as a flight. This connection is free with an Air Canada flight to or from Toronto Pearson airport. Waterloo airport is itself about a 25 minute drive to the conference center, and taxis or ride apps are a good choice from there (roughly CAD$40).
        </p>
      </article>
      <article class="col-sm-6 col-xxl-3 mt-2 mt-xxl-1">
        <h4 class="subSubtitle mb-3">
          By car or taxi
        </h4>
        <div class="d-flex">
          <!-- <img src="images/icons/watch.svg" class="travelIcon" alt="wristwatch icon" /> -->
          <p>1 hour travel time</p>
        </div>
        <div class="d-flex">
          <!-- <img src="images/icons/currency.svg" class="travelIcon" alt="currency icon" /> -->
          <p>CAD$150-$200 total</p>
        </div>
        <p>
          Taxis and app-based services (Uber, Lyft) are available outside of the airport. Some drivers will not want to make the long journey to Waterloo, but many will.
        </p>
        <p>
          Prebooked services are also available (CityCabs, Waterloo Taxi, United Taxi, Airways Transit) but these must be scheduled ahead of your flight.
        </p>
        <p>
          Rental cars are available at Toronto Pearson airport. The route to Waterloo travels west on the 401 highway. While the 401 is North America's busiest highway, the busiest section is towards Toronto, the opposite side of the airport from Waterloo.
        </p>
      </article>
      <article class="col-sm-6 col-xxl-3 mt-3 mt-xxl-1">
        <h4 class="subSubtitle mb-3">
          By train
        </h4>
        <div class="d-flex">
          <!-- <img src="images/icons/watch.svg" class="travelIcon" alt="wristwatch icon" /> -->
          <p>2 or more hours</p>
        </div>
        <div class="d-flex">
          <!-- <img src="images/icons/currency.svg" class="travelIcon" alt="currency icon" /> -->
          <p>CAD$32</p>
        </div>
        <p>
          The Union Pearson Express (UP) train travels from Toronto Pearson to Union station, with stops at Weston, Mount Dennis, and Bloor. Then a GO transit train travels from any of these stations in the opposite direction to Kitchener (Waterloo and Kitchener are conjoined cities). From the Kitchener GO station, it is about a 10 minute walk to the nearest tram stop, which will take you to the conference hall or the university.
        </p>
        <p>
          The UP train runs every 15 minutes, but the GO train is less frequent and less predictable. Use the <a href="https://www.gotransit.com/en/plan-your-trip?fromTypeId=4&departureStopId=79901&toTypeId=4&arrivalStopId=14413&date=2026-10-01&time=08-00&adult=1&senior=0&dateType=departure&tripType=all&accessible=false">GO transit trip planner</a> to find schedules (be warned that it will also display bus routes if not filtered).
        </p>
      </article>
      <article class="col-sm-6 col-xxl-3 mt-3 mt-xxl-1">
        <h4 class="subSubtitle mb-3">
          By bus
        </h4>
        <div class="d-flex">
          <!-- <img src="images/icons/watch.svg" class="travelIcon" alt="wristwatch icon" /> -->
          <p>1 or more hours</p>
        </div>
        <div class="d-flex">
          <!-- <img src="images/icons/currency.svg" class="travelIcon" alt="currency icon" /> -->
          <p>CAD$25 total</p>
        </div>
        <p>
          Private bus services like Flixbus travel directly from Toronto Pearson to the University of Waterloo, for approximately CAD$20-$30.
        </p>
        <p>
          GO Transit offers buses from Bramalea GO station directly to the University of Waterloo. The number 112 Airport express bus travels to Bramalea GO from Pearson airport every 30 minutes. Tickets cannot be purchased on the bus and must be purchased online or in the airport prior to travel. This is also approximately CAD$20-30.
        </p>
      </article>
    </div>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js" integrity="sha384-cxOPjt7s7Iz04uaHJceBmS+qpjv2JkIHNVcuOrM+YHwZOmJGBXI00mdUXEq65HTH" crossorigin="anonymous"></script>
  <script>
    // You can recover latitude & longitude from this page:
    var mymap = L.map('venuemap').setView([<?php echo $META['longitude'] . ',' . $META['latitude']; ?>], 13);
    var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    tiles.addTo(mymap);

    var points = [{
        name: 'Conference venue',
        longitude: <?php echo $META['longitude']; ?>,
        latitude: <?php echo $META['latitude']; ?>
      },
      {
        name: 'Toronto Pearson Airport',
        longitude: 43.677128,
        latitude: -79.633453
      }
    ];

    for (let i = 0; i < points.length; i++) {
      let point = points[i];
      var marker = L.marker([point.longitude, point.latitude]).addTo(mymap);
      marker.bindPopup("<p>" + point.name + "</p>");
    }
  </script>

  <?php include "includes/footer.php"; ?>
</body>

</html>