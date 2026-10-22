<!DOCTYPE html>
<html lang="en">

<head>
  <?php // The header includes the head tag and start of body
  require "includes/head.php";
  ?>
  <meta name="twitter:title" content="<?php echo $META['shortName']; ?> paper submission" />

  <title>
    <?php echo $META['shortName']; ?> Paper Submission
  </title>
</head>

<body>
  <?php require "includes/nav.php"; ?>

  <main class="container-lg px-4 px-lg-0">
    <h2 class="indPageTitle">
      Paper Submission
    </h2>

    <!-- NOTE: when deadline has passed, uncomment this (can delete or
      comment out everything else) -->
    <!-- <div class="alert customAlert-warm">
        Unfortunately the deadline to submit a paper to
        <?php echo $META['shortName']; ?> has passed.
      </div>
      <p>
        You can still access the <a href="#">submission server</a>, should you
        need to make changes or upload a final paper version.
      </p>
      -->

    <!-- NOTE: below is standard placeholder text for when the page
      is under construction. please delete the <p> below when you
      finish editing the content. -->
    <!-- <p>
          This information is not yet available. Thank you for your patience.
      </p> -->

  <!--   <h5 class="text-center alert customAlert-cool my-3">
      The submission server is not yet open. Please check back later.
    </h5> -->

    <!-- NOTE: when the submission server is ready, supply the link in the
      button and remove the statement above. -->
      <p>
    <a href="https://easychair.org/conferences/?conf=pqcrypto2027" target="_blank" class="btn btn-lg blockBtn
      customBtn-warm mx-auto w-75" role="button">Submission Server (Easychair)</a>
</p>
    <!-- NOTE: below is placeholder content derived from a past conference.
      Please uncomment and replace contents with your own content when ready.
      -->
    <div class="alert customAlert-cool">
      Starting in 2026, PQCrypto has implemented <a href="aipolicy.php">a policy on the use of AI tools by authors</a>.
    </div>

    <div class="row">
      <div class="col-lg-6 col-12 mt-3">
        <h3 class="pageSubtitle">
          Instructions for authors
        </h3>
        <p>
          Submissions must be at most 30 pages appendices and 
        references, and using the Springer LNCS format (in
          particular,  and must be in a single column format in 10pt fonts using the
default llncs class without adjustments. Details on the Springer LNCS format can be
          obtained <a href="https://www.springer.com/gp/computer-science/lncs/conference-proceedings-guidelines">here</a>.
          Additional material (datasets, code, long machine proofs, etc.) can be submitted
as separate file.
Reviewers are not required to read appendices
and additional material,
and submissions are expected to be intelligible and complete without
them.
        </p>
        <p>
          <b>The review process is double-blinded.</b> The submission should begin with a title, a short abstract, and a list of key
words. Its introduction should summarize the contributions of the paper at a
level appropriate for a non-specialist reader. Submissions ignoring these
guidelines may be rejected without further consideration.

All papers must be submitted with a meaningful
abstract by the initial submission deadline.
This is a firm deadline.
Papers not registered by this
deadline will not be considered.
Authors may update or withdraw their submission
at any time between the initial and final submission deadline.
        </p>
        <p class="alert customAlert-warm">
          <img src="images/icons/alert-triangle.svg" class="icon" alt="alert icon" />
          Submissions not meeting these guidelines risk rejection
          without consideration of their merits.
        </p>
      </div>
      <div class="col-lg-6 col-12 mt-4">
        <?php require "includes/important_dates.php"; ?>
      </div>
    </div>

    <p>
      For papers that are accepted, the length of the proceedings
      version will be at most 35 pages using Springer’s standard
      fonts, font sizes, and margins, <b>excluding</b> references. The additional material will not be part of the conference proceedings.

    </p>
    <p>
     Submissions must not substantially duplicate work that any of the authors has
published in a journal or a conference/workshop with proceedings, or has
submitted/is planning to submit before the author notification deadline to a
journal or other conferences/workshops that have proceedings.
    </p>
    <p>
      Articles will not be reviewed by reviewers who have a conflict
      of interest with at least one author of the submission. Submissions
      must adhere to the <a href="https://www.iacr.org/docs/conflicts.pdf" target="_blank">
        IACR Policy on Conflicts of Interest</a>.
    </p>

    <h3 class="pageSubtitle mt-4">
      Conflicts of interest
    </h3>
    <p>
      Authors, program committee members, and reviewers must
      follow the IACR Policy on Conflicts of Interest, available from
      <a href="https://www.iacr.org/docs/conflicts.pdf" target="_blank">
        https://www.iacr.org/docs/conflicts.pdf</a>.
    </p>
    <p>
      In particular, the authors of each submission are asked during the
      submission process to identify all members of the Program Committee who
      have an automatic conflict of interest (COI) with the submission. A reviewer<sup>1</sup> has an automatic COI with an author if:
    </p>
    <ul>
      <li>
        one is or was the thesis advisor to the other, no matter how long ago;
      </li>
      <li>
        they shared an institutional affiliation within the prior two
        years<sup>2</sup>;
      </li>
      <li>
        they published two or more jointly authored works in the last three years<sup>3</sup>; or
      </li>
      <li>
        they are immediate family members<sup>4</sup>
      </li>
    </ul>
    <p>
      A reviewer has an automatic COI with a submission if:
    </p>
    <ul>
      <li>
        the reviewer has an automatic COI with any of its authors;
      </li>
      <li>
        the reviewer is authoring a paper (in submission<sup>5</sup> or in
        preparation) whose content substantially overlaps with that of the
        submission;
      </li>
      <li>
        the reviewer has made a contribution to the submission (i.e. the
        submission is the result of a collaboration that did not result in
        the reviewer's authorship)
      </li>
    </ul>
    <p>
      Any further COIs of importance should be separately disclosed. It is
      the responsibility of all authors to ensure correct reporting of COI
      information. Submissions with incorrect or incomplete COI information
      may be rejected without consideration of their merits.
    </p>
    <p>
      COIs are not restricted to automatic ones, others
      being possible. COIs beyond automatic COIs could involve financial,
      intellectual, or personal interests. Examples include closely
      related technical work, cooperation in the form of joint projects
      or grant applications, business relationships, close personal
      friendships, instances of personal enmity. Full transparency is of
      utmost importance, authors and reviewers must disclose to the
      chairs or editor any circumstances that they think may create bias,
      even if it does not raise to the level of a COI. The editor or
      program chair will decide if such circumstances should be treated
      as a COI.
    </p>

    <div class="row">
      <div class="col-lg-4 mb-3 mb-lg-1">
        <small>
          <sup>1</sup> Reviewers include program committee members for
          conference publications, editorial board members for journal
          publications (Journal of Cryptology) and journal-conference hybrid
          publications (ToSC and TCHES), sub-reviewers, referees for journal
          publications, and individuals doing ad hoc reviews for a program
          chair or editor
        </small>
      </div>
      <div class="col-lg-4 mb-3 mb-lg-1">
        <small>
          <sup>2</sup> Sharing an institutional affiliation means working at
          the same location/campus of the same company/university. It does
          not include separate universities of the same system nor distant
          locations of the same company.
        </small>
      </div>
      <div class="col-lg-4 mb-3 mb-lg-1">
        <small>
          <sup>3</sup> Jointly authored work refers to jointly authored
          papers and books, whether formally published or just posted online,
          resulting from collaboration on a scientific problem. It usually
          does not include joint editorial functions, like a jointly edited
          proceedings volume. For online publication, the first posting (not
          revisions) is the relevant date. Multiple versions of a paper
          (conference, ePrint, journal) count as a single paper.
        </small>
      </div>
      <div class="col-lg-4 mb-3 mb-lg-1">
        <small>
          <sup>4</sup> Immediate family members include at least parents,
          children, siblings, spouse, or significant other.
        </small>
      </div>
      <div class="col-lg-4 mb-3 mb-lg-1">
        <small>
          <sup>5</sup> The date relevant for a paper in submission is the
          date when it was submitted.
        </small>
      </div>
    </div>

  </main>

  <?php include "includes/footer.php"; ?>
</body>

</html>