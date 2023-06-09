<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--Bootsrap css v5.3-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <!--Bootstrap js v5.3-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <!--Bootstrap icons v5.3-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

     <!--custom css-->
     <link href="custom.css" rel="stylesheet">
     <!--custom js-->
     <script defer src="fade-in.js"></script>
    <title>Portfolio v2</title>

    <!--Google Fonts begin-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!--Google Fonts end-->



    <link href="navbar.css" rel="stylesheet"><!--styling voor begin pagina-->
</head>
<body class="d-flex vh-100 text-center text-bg-dark">

    


<div class="container d-flex w-100 h-100 p-5 mx-auto flex-column">
  <header class="mb-5">
    <div>
      <h1 class="float-md-start mb-0"><a class="bi bi-code-slash" href="index.html" style="color: white;"></a></h1>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-10" href="index.html">Home <i class="bi bi-house"></i></a>
        <a class="nav-link fw-bold py-1 px-10" href="projects.html">Projects <i class="bi bi-folder"></i></a>
        <a class="nav-link fw-bold py-1 px-10" href="AboutMe.html">About <i class="bi bi-person"></i></a>
        <a class="nav-link fw-bold py-1 px-10 active" aria-current="page" href="Contact.php">Contact <i class="bi bi-envelope"></i></a>
      </nav>
    </div>
  </header>


  <!--delete vh-100 om te kijken wat er gebeurt-->
  <main>
    <h1 class="text-style-ubuntu">Je bevind je op de <i class="text-warning">Contact</i> pagina</h1>
    <p class="lead p-3">Hier kan je me een email sturen</p>
    <p class="lead p-3"></p>
   <div class="p-5 rounded-4 project-banner" style="background-image: url(jpegs/email-i-hope-this-finds-you-well.jpeg);">
        <div class="container-fluid py-5">
        </div>
      </div>
  <!---->    

  <hr class="featurette-divider">

  <a class="btn btn-warning p-3" href="mailto:info@larsvanholland.com?subject=Ik zag je bootstrap site en vond hem ... &body=Gegroet mijn naam is [naam]"><i class="bi bi-arrow-right"></i> Stuur me een e-mail <i class="bi bi-arrow-left"></i></a> 
  


<!--Footer-->
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Lars van Holland</p>
  
      <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <i class="bi bi-arrow-up-circle"></i>
      </a>
  
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="projects.html" class="nav-link px-2 text-body-secondary">Projects</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        <li class="nav-item"><a href="Contact.php" class="nav-link px-2 text-body-secondary">Contact</a></li>
        <li class="nav-item"><a href="https://www.linkedin.com/in/lars-van-holland-754a7b269/" class="nav-link px-2 text-body-secondary"><i class="bi bi-linkedin"></i></a></li>
      </ul>
    </footer>
  </div>
<!--Footer-->