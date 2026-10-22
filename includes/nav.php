<!-- stop nasty flash when dark mode loads -->
<!-- <script>
  const theme = localStorage.getItem('theme') || 'light';
  document.documentElement.dataset.appliedMode = theme;
</script> -->

<!-- BEGIN nav -->
<div id="pageTop">
  <header id="conf_id" class="headerImg">
    <div class="headerGradient">
      <div class="pageTopContainer">
        <div id="titlesLogoDiv" class="d-flex justify-content-between align-items-center">
          <!-- TODO: likely add .ms-md-3 after fixing layout -->
          <div class="headerConferenceName">
            <h1 class="headerTitle">
              <?php echo $META['shortName']; ?>
            </h1>
          </div>
          <div class="headerLogo">
            <a href="https://pqcrypto.org/conferences.html">
              <img id="logo" class="d-none d-lg-block mx-auto" src="images/pqc-logo.svg" title="PQCrypto Logo">
            </a>
          </div>
          <!-- TODO: likely add .me-md-3 after fixing layout -->
          <div class="headerInfo">
            <h3 class="headerInfoTop">
              <?php echo $META['dates']; ?>
            </h3>
            <h3 class="headerInfoBottom">
              <?php echo $META['location']; ?>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </header>

  <nav id="mainNavRow" class="navbar navbar-expand-md">
    <button class="navbar-toggler mt-1 ms-3 collapsed nofocus" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" role="navigation">
      <ul id="nav-ul" class="navbar-nav">
        <li class="nav-item mt-2 mt-md-0">
          <a class="nav-link" href="<?php echo rootPath(); ?>">
            Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            Technical program
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo rootPath() . 'callforpapers.php' ?>">
              Call for papers
            </a>
            <a class="dropdown-item" href="<?php echo rootPath() . 'aipolicy.php' ?>">
              AI tool policy
            </a>
            <a class="dropdown-item" href="<?php echo rootPath() . 'papersubmission.php' ?>">
              Paper submission
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
            Attend
          </a>
        <!-- TODO: this is apparently supposed to be a ul not a div for the dropdown menu. also why are they so far left?? -->
        <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo rootPath() . 'travel.php' ?>">
              Venue & travel
            </a>
        <a class="dropdown-item" href="<?php echo rootPath() . 'accommodations.php' ?>">
              Accommodations
            </a>
            <a class="dropdown-item" href="<?php echo rootPath() . 'tourism.php' ?>">
              Tourism
            </a>
            <a class="dropdown-item" href="<?php echo rootPath() . 'conduct.php' ?>">
              Code of conduct
            </a>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo rootPath() . 'contact.php' ?>">
            Contact
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<!-- END OF nav -->

<noscript>
  <div class="container">
    <h2>
      This site is designed for browsers with javascript.
    </h2>
    <h3>
      The dates, name, and location for the conference are
      <a href="json/metadata.json">in a json file.</a>
    </h3>
  </div>
</noscript>