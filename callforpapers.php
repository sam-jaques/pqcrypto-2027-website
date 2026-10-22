<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta property="og:title" content="<?php echo $META['shortName']; ?> call for papers" />
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> call for papers" />

  <title>
    <?php echo $META['shortName']; ?> Call for Papers
  </title>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Call for Papers
    </h2>

    <div class="row">
      <section class="col-lg-8">
        <h3 class="pageSubtitle">
          General information
        </h3>
        <p>
          <?php echo $META['shortName']; ?> will take place in
          <?php echo $META['location']; ?> on <?php echo $META['dates']; ?>.
           The proceedings will be published
          by Springer in the LNCS series.
        </p>
        <p>
          The aim of PQCrypto is to serve as a forum for researchers to present results
and exchange ideas on cryptography in an era with large-scale quantum computers.
Original research papers on all technical aspects of cryptographic research
related to post-quantum cryptography are solicited. Topics of interest include
(but are not restricted to):
        </p>
        <ul>
<li>Cryptosystems that have the potential to be safe against quantum computers such as: code-based, hash-based, isogeny-based, lattice-based,  multivariate-based and MPC-in-the-head constructions.</li>
<li> Cryptanalysis of post-quantum systems, and quantum cryptanalysis.</li>
<li> Implementations of, and side-channel attacks on, post-quantum cryptosystems.</li>
<li>  Integration of and migration to post-quantum cryptography.</li>
<li> Security models for the post-quantum era.</li>
        </ul>
      </section>
      <aside class="col-lg-4 ps-lg-5 text-center">
        <h3 class="pageSubtitle mt-4 mt-lg-0">
          How to submit
        </h3>
        <p class="text-center">
          Author instructions for paper submission may be found on the
          submission page. Don't forget to read
          <a href="aipolicy.php">our policy on the use of AI tools by authors</a>.
        </p>
        <a href="papersubmission.php" class="btn customBtn-warm blockBtn mb-5 mb-lg-0">
          Submit a paper
        </a>

        <!-- NOTE: once submissions are closed, uncomment below and comment
          out or remove the p and a above -->
        <!-- <p class="alert customAlert-warm text-center">
            Submissions are closed
          </p> -->
      </aside>
    </div>

    <div class="row">
      <div class="col-lg-7 mt-4">
        <?php require "includes/important_dates.php"; ?>
      </div>
      <section class="col-lg-5 mt-4">
        <h3 class="pageSubtitle">
          Schedule
        </h3>
        <p>
          <?php echo $META['shortName']; ?> will operate a two-round review
          system with rebuttal phase. In the first round, the program
          committee reviews the papers and writes reviews with comments and questions, and the authors receive the first
          round notification with review comments. The authors are invited to submit a text-based rebuttal
          letter to the review comments. Some submissions may be rejected in the first round.
        </p>
        <p>
          The submissions that have not been selected during the first round
          of reviews may be submitted in other conferences after the first
          round notification date.
        </p>
        <p>
          In the second round the program committee further reviews the
          selected submissions by taking into account their rebuttal letter.
          They then make the final decision of acceptance or rejection.
        </p>
      </section>
    </div>


    <h3 class="pageSubtitle mt-4">
      Program committee
    </h3>
<p> Full committee to be determined. Confirmed members:</p>
    <div id="errorBox"></div>

    <div id="committee" class="row">

      <!-- Handlebars import of PC members -->
      <script id="committee-member" type="text/x-handlebars-template">
        {{#each committee}}
          <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
            <h4 class="subSubtitle">
              {{name}}
            </h4>
            <h6>
              {{affiliation}}<br>
              <small>{{country}}</small>
            </h6>
          </article>
        {{/each}}
      </script>
    </div>

    <div id="areaChair" class="row">
      <script id="area-chair" type="text/x-handlebars-template">
        {{#if area_chairs}}
          <h3 class="pageSubtitle mt-4">
            Area chairs
          </h3>
          {{#each area_chairs}}
            <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
              <h4 class="subSubtitle">
                {{name}}
              </h4>
              <h5>
                <em>for</em> {{areaOf}}
              </h5>
              <h6>
                {{affiliation}}<br>
                <small>{{country}}</small>
              </h6>
            </article>
          {{/each}}
        {{/if}}
      </script>
    </div>

    <div id="artifactChair" class="row">
      <script id="artifact-chair" type="text/x-handlebars-template">
        {{#if artifact_chairs}}
          <h3 class="pageSubtitle mt-4">
            Artifact chair
          </h3>
          {{#each artifact_chairs}}
            <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
              <h4 class="subSubtitle">
                {{name}}
              </h4>
              <h5 class="affilTitle">
                {{affiliation}}<br>
                <small>{{country}}</small>
              </h5>
            </article>
          {{/each}}
        {{/if}}
      </script>
    </div>

    <!-- To add/edit contact information, please edit names and affiliations in
      json/metadata.json -->
    <h3 class="pageSubtitle text-center mt-4">
      Program co-chairs
    </h3>

    <div class="row mt-3 mt-md-4">
      <?php
      $theClass = count($META['PC_CHAIRS']) == 1 ? 'col-12' : 'col-12 col-sm-6';
      foreach ($META['PC_CHAIRS'] as $person) {
        $name = $person['name'];
        $affiliation = $person['affiliation'];
        $country = $person['country'];
        echo <<< EOR
            <aside class="$theClass text-center mb-2">
              <h4 class="subSubtitle">
                $name
              </h4>
              <h5 class="affilTitle">
                $affiliation<br>
                <small>$country</small>
              </h5>
            </aside>
            EOR;
      }
      ?>
    </div>

    <div class="row">
      <div class="col-12 text-center mb-5">
        <a href="mailto:pqcrypto2027@easychair.org" aria-label="Send mail to the program chair(s)">
          <img src="images/icons/mail.svg" class="icon" />
        </a> pqcrypto2027@easychair.org
      </div>
    </div>

    <!-- To add/edit contact information, please edit names and affiliations in
      json/metadata.json -->
    <h3 class="pageSubtitle text-center mt-4">
      General co-chairs
    </h3>

    <div class="row mt-3 mt-md-4">
      <?php
      $theClass = count($META['GENERAL_CHAIRS']) == 1 ? 'col-12' : 'col-12 col-sm-6';
      foreach ($META['GENERAL_CHAIRS'] as $person) {
        $name = $person['name'];
        $affiliation = $person['affiliation'];
        $country = $person['country'];
        echo <<< EOR
            <aside class="$theClass text-center mb-2">
              <h4 class="subSubtitle">
                $name
              </h4>
              <h5 class="affilTitle">
                $affiliation<br>
                <small>$country</small>
              </h5>
            </aside>
            EOR;
      }
      ?>
    </div>

    <div class="row">
      <div class="col-12 text-center mb-5">
        <a href="mailto:pqcryp27@uwaterloo.ca" aria-label="Send mail to the general chair(s)">
          <img src="images/icons/mail.svg" class="icon" />
        </a> pqcrypto2027@uwaterloo.ca
      </div>
    </div>

  </main>

  <?php include "includes/footer.php"; ?>

  <!-- Handlebars -->
  <script src="https://cdn.jsdelivr.net/npm/handlebars@4.7.10/dist/handlebars.min.js"  type="text/javascript" integrity="sha384-SoqWttrT0kCFnwAKU794AqlRj1nmM9VO+d76IkRVSwyEFTiq76rJQ72pG+gbRO7e" crossorigin="anonymous"></script>
  <!-- Personal scripts -->
  <script src="js/committee.js"></script>

</body>

</html>