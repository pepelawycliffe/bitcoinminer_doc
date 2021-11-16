<?php
session_start();
include('includes/config.php');


$sql = "SELECT * from admin;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bitcoin Miner - Privacy Policy</title>
  <meta content="Bitcoin Miner App" name="descriptison">
  <meta content="Bitcoin Miner App" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">Bitcoin Miner</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#features">App Features</a></li>
          <li><a href="#faq">F.A.Q</a></li>
          <li><a href="#contact">Contact Us</a></li>

          <li class="get-started"><a href="<?php echo htmlentities($result->app_url);?>">Download App</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Privacy Policy</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Privacy Policy</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div>
        <h1 class="text-center">Privacy Policy</h1>
        <br />
        <h2>1. Definitions:</h2>
        <ul>
          <li>Manager is Bitcoin Miner who provides, manages and / or operates Bitcoin Miner services, either alone
            or in cooperation with third parties;</li>
          <li>User is any person, State organizer, business entity and / or public using Bitcoin Miner app services;</li>
          <li>Visitors shall be any person, State organizer, business entity and / or public who visit Bitcoin Miner
            applications and / or Bitcoin Miner networking sites;</li>
          <li>Accounts / Accounts are records of user names, passwords, and the right to access networks or systems
            online;</li>
          <li>Password / Password is a series of letters and / or numbers used as a password to access Bitcoin Miner
            accounts;</li>
          <li>Member / Member means any person, State administrator, business entity and / or public who register to
            use Bitcoin Miner services;</li>
          <li>Surveys are a research technique by giving a clear limit to the data through giving a series of questions
            to individual respondents in order to know: who they are, what they think, feel, or tend to an action;</li>
          <li>Content is information available in Bitcoin Miner and / or submitted by a Bitcoin Miner member;</li>
          <li>Reward is a gift of money, goods, services and so forth without any compensation to the eligible member;</li>
          <li>Daily Points / Points (pts) is a gift in the form of digital credit that is given once a day to the
            member after members check in;</li>
          <li>Event / event is a special event held by Bitcoin Miner to achieve certain goals and within a predetermined
            time;</li>
        </ul>
        <h2>2. Information Needed:</h2>
        <ul>
          <li>For the purposes of registration at Bitcoin Miner, we will require your personal data such as the following:
            Full name;
            Email address;
          </li>
          <li>In addition, you must choose to Register through the "Login with Email" to access Bitcoin Miner. By doing
            that means you give us permission to register your email
            address you use</li>
          <li>All the information you provide will be kept well and always safeguarded securely and confidentiality,
            unless otherwise noted in our terms and conditions.</li>
        </ul>
        <h2>3. General Terms of Use of the Application</h2>
        This page contains the terms of use which are the basis for the USER in using Bitcoin Miner. Bitcoin Miner is managed
        and owned by Money Rewrads. Any questions regarding Bitcoin Miner can be sent to contact@moneyrewards.xyz
        <ul>
          <li>Bitcoin Miner reserves the right to refuse registration or cancel the associated ACCOUNTS.</li>
          <li>You are responsible for maintaining the confidentiality of ACCOUNTS and passwords you have created.</li>
          <li>Bitcoin Miner will not ask for a password for any reason, therefore Bitcoin Miner appeals to MEMBER not to
            provide your password to any party, either to a third party or to a party acting on behalf of Bitcoin Miner.</li>
          <li>Bitcoin Miner is not responsible for any loss or damage arising from misuse of MEMBER account.</li>
          <li>Bitcoin Miner has no legal liability for the accuracy of the information content of MEMBER in Bitcoin Miner.</li>
          <li>You are solely responsible for the correctness of data / identity submitted to Bitcoin Miner in registering /
            registering.</li>
          <li>We shall not be liable for any losses arising from the unlawfulness of data / identities submitted to
            Bitcoin Miner or due to non-compliance with these registration terms.</li>
          <li>ACCOUNTS that have been made are owned by Bitcoin Miner. Bitcoin Miner reserves the right to the above ACCOUNTS.
            In the event of a dispute related to your ACCOUNT, we reserve the right to take the decision to resolve the
            dispute.</li>
          <li>We reserve the right to provide any information held about MEMBER in the event of legal matters caused by
            CONTENT penned and published by MEMBER. Please note that all activity data will be recorded for all
            CONTENTS written and published.</li>
          <li>Bitcoin Miner can not be sued for any statement, mistake, inaccuracy or lack of any CONTENT published by
            MEMBER in Bitcoin Miner.</li>
        </ul>
        By using Bitcoin Miner SERVICES, MEMBER agrees not to publish following type of CONTENT:
        <ul>
          <li>Promote / disseminate information that is found to be false, misleading or promote illegal activities or
            acts that abuse, threaten, obscene, profane or defame;</li>
          <li>Contains prejudice and hatred associated with ethnic, religious, racial, and interreligious, and
            advocates acts of violence;</li>
          <li>Discriminatory on the basis of sex and language differences, and not degrading the dignity of the weak,
            poor, sick, mentally disabled, or physically disabled;</li>
          <li>Sending SPAM;</li>
          <li>Showing pornography or any sexually explicit material, pornography and / or providing material that
            exploits people under the age of 18 by sexual or violent means;</li>
          <li>Contains violence both in physical and verbal form, contained in CONTENT as photos, videos, or writings
            aimed at harming others, not as news or positive information;</li>
          <li>Contains information or instructions regarding illegal activities such as making or purchasing illegal
            weapons, violating someone's privacy, or providing or creating computer viruses;</li>
          <li>Contains fraudulent elements such as pretending to be a person or a body, or improperly declaring or
            improperly identifying yourself, your age, or your affiliation with a person or body;</li>
          <li>Contains third party personal information including but not limited to photos, videos, audio, documents,
            addresses, phone numbers, e-mail addresses, Social Security numbers and credit card numbers;</li>
          <li>Contains software viruses or other computer codes, files or programs designed to disrupt, destroy or
            limit the functionality of any software or computer hardware or telecommunications equipment;</li>
          <li>MEMBER should ensure that any CONTENT published in Bitcoin Miner does not infringe any copyright, patent,
            trademark or other proprietary rights and other intellectual property of any third party, and is issued
            only by permission of such third party;</li>
          <li>MEMBER agrees that in compliance with applicable law, Bitcoin Miner may conduct examinations of certain
            CONTENT already submitted to us to determine whether the CONTENT is illegal or violates the terms of these
            terms and conditions. We may also modify, prevent access, remove, and / or refuse to display CONTENT that
            we consider to be in violation of the legal provisions and / or terms contained in these terms and
            conditions.</li>
        </ul>
        <h2>4. Disclaimer / Refusal of Responsibility:</h2>
        <ul>
          <li>Bitcoin Miner IS NOT RESPONSIBLE FOR ANY WAY TO ANY MEMBER OR ANY CONTENT INSTALLED ON THE SITE OR IN
            CONNECTION WITH Bitcoin Miner SERVICES, WHETHER CAUSED BY MEMBER, OR BY AN EQUIPMENT OR PROGRAMMING RELATED TO
            OR USE OF THE SERVICES.</li>
          <li>Bitcoin Miner PROVIDES RULES FOR MEMBER, WE CAN NOT FULLY CONTROL AND BY NO LIABILITY BE LIABLE FOR WHAT IS
            INCLUDED BY APPLYING ON THE SITE, AND NOT RESPONSIBLE FOR THE CONTENT / CONTENT NOT MORALLY ACCEPTABLE, NOT
            WORTHY, NOT VALID OR UNCOMFORTABLE WHICH YOU CAN APPLY ON THE SERVICE, SITE OR IN CONNECTION WITH THE
            CONTENT OF ANY MEMBER.</li>
          <li>Bitcoin Miner IS NOT RESPONSIBLE FOR DEVELOPMENT, WHETHER ONLINE OR OFFLINE, FROM ANY "USER".</li>
          <li>Bitcoin Miner IS NOT RESPONSIBLE FOR ANY ERRORS, REPRESENTATIONS, INTERRUPTIONS, DELETIONS, DISADVANTAGES,
            DELAY Bitcoin Miner OPERATION, FAILURE OF COMMUNICATION PATH, TERRITORY OR DAMAGE OR ACCESS WITHOUT AUTHORITY TO, OR
            CHANGE OF "USER" COMMUNICATIONS.</li>
          <li>Bitcoin Miner NOT LIABLE FOR ANY PROBLEMS OR FAILURE OF TECHNICAL OF A NETWORK OR LINES TELEPHONE SYSTEMS
            ONLINE COMPUTER SERVER OR PROVIDER, COMPUTER EQUIPMENT, SOFTWARE, E-MAIL FAILURE OR TECHNICAL ISSUE OR
            DENSITY OF TRAFFIC / TRAFFIC ON THE INTERNET OR IN AN WEBSITE, INCLUDING DAMAGES ON ANY "USER" AND / OR
            COMPUTER COMPUTER ASSOCIATED WITH OR INCREASED BY PARTICIPATION OR MATERIAL DOWNLOADING IN CONNECTION WITH
            THIS SITE AND / OR IN CONNECTION WITH THE SERVICE.</li>
          <li>IN ANY EVENT, Bitcoin Miner SHALL NOT BE LIABLE FOR ANY LOSS OR DAMAGE, INCLUDING PERSONAL INJURY OR DEATH
            OF, RESULTING FROM YOUR USE OF ANY OF THE SITE OR THE SERVICE, ANY CONTENT POSTED ON THE WEBSITE, INCLUDING
            THE CONTENT OF "MEMBER", OR TRANSMITTED INTO THE "USER "OR INTERACTIONS OF AN INTERACTIVE" USER "WEBSITE,
            GOOD ONLINE OR OFFLINE.</li>
        </ul>
        <h2>5. Purpose of Collecting Data</h2>
        Internally, we use your information, including your survey data but not limited to:
        <ul>
          <li>Supervise, manage and improve our services and features</li>
          <li>Improving our terms and conditions</li>
          <li>Preventing potential illegal activities</li>
          <li>Prevent unwanted or threatening security activities</li>
          <li>We use your survey and survey metadata for our internal purposes to creating and providing new services,
            features or content.</li>
          <li>We use the information that you provided to facilitate account creation and login process. If you decide
            to linked to a third-party account (such as your Google or Facebook account), we use the information that
            you authorize us to collect from third parties in order to facilitate account creation and login process.</li>
          <li>We use the information that you've provide us to contact you according to the service or accounts that
            you used.</li>
          <li>We use the information that you've provide us to contact you according to the offer that we provided to
            you.</li>
          <li>We use the information that you've provide for legal purposes and loss prevent. If we get a lawsuit or
            other legal request, we may check our data to decide how we will respond to the lawsuits or other legal
            requests.</li>
        </ul>
        <h2>6. Giving and Disclosure of Information to Other Parties:</h2>
        <p>Except for the purposes of data collection, we will not sell, transfer, distribute and / or disclose your
          personal information and data to other unauthenticated Third Parties and / or Unauthorized Persons.
          However, we may provide an information to those parties who is still relating to us in terms of condition
          that those parties are required to comply with this Privacy Policy. These parties are among others:
        </p>

        <h2>7. Modification:</h2>
        <p>We reserve the right to our sole discretion to change, add or remove any terms and conditions of these terms
          and conditions without your knowledge and consent. Any change to this Privacy Policy will effectively and
          directly following notification of changes in this site. You agree to review this Privacy Policy from time to
          time and agree that any subsequent use of the Site as a result of any changes to this Privacy Policy shall
          constitute your acceptance of all such changes without exception.
        </p>
      </div>
    </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Info</h3>
            <p>
                Bitcoin Miner, Inc <br>
              <strong>Email:</strong> <?php echo htmlentities($result->email);?><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy_policy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Social Networks</h4>
            <p>Follow us on</p>
            <div class="social-links mt-3">
              <a href="https://web.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Bitcoin Miner 2021</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>