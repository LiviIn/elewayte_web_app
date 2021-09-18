<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/image/32.png">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/jquery.flipster.css">
   <!-- google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css"/>
  <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>
  <section class="nav-section">
   <!-- Header -->
   <header id="header" class="transparent-nav ">
    <div class="container ">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="index.php"><img src="assets/image/Component 4 – 1.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link li-hov active" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link li-hov" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle li-hov" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Courses
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item li-hov" href="web_development_internship.php">Web Development</a>
                <a class="dropdown-item li-hov" href="artificial_intelligence.php">Artificial Intelligence</a>
                <a class="dropdown-item li-hov" href="digital_marketing_internship.php">Digital Marketing</a>
                <a class="dropdown-item li-hov" href="python_internship_traning.php">Python</a>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link li-hov" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link li-hov" href="contact.php">Contact Us</a>
            </li>
             <li class="nav-item">
               <form class="form-inline">
                <a class="nav-link" href="login.php"><button type="button" class="btn btn-info">Login</button></a>
              </form>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- /Header -->
</section>
    <script type="text/javascript">
      $( '.nav-section .navbar-nav a' ).on( 'click', function () {
        $( '.nav-section .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
        $( this ).parent( 'li' ).addClass( 'active' );
      });
    </script>





