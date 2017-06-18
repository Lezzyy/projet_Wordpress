<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CONTACT</title>

  <!--font-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

  <!--css-->
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  </head>

  <!--contenu du site-->
  <body>

  <!--header-->
  <header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <nav>
              <ul class="nav navbar-nav">
                <li><a href="index.html" target="_blank">Home</a></li>
                <li><a href="périphérique.html" target="_blank">Périphériques</a></li>
                <li><a href="applications.html">Applications</a></li>
                <li><a href="nouvelle_tech.html" target="_blank">Nouvelles Tech</a></li>
                <li class="active"><a href="#" target="_blank">Contact</a></li>
              </ul>
            </nav>
        </div>
    </nav>
  </header>
  <!--end header-->

  <!--logo-->
  <div id="logo">
    <h1><u>L'Actu de la Tech</u></h1>
  </div>
  <!--end logo-->

  <!--formulaire-->
  <section class="container-fluid contact">
    <div class="container">
      <div class="row">
        <h3> Pour nous contacter :</h3>
        <p>
          lactudelatech@gmail.com
        </p>
      <div class="container">
          <div class="controls controls-row">
            <form method="post">
              <fieldset>
                <input type="text" name="nom" class="span6" placeholder="Nom"></br>
                <input type="email" name="email" class="span6" placeholder="Email"></br>
                <textarea name="message" rows="8" cols="80" class="span6" placeholder="Votre message"></textarea>
              </fieldset>
            </form>
            <div class="bouton">
              <button type="submit" class="btn btn-custom">Envoyer</button>
            </div>
          </div>
      </div>
      </div>
    </div>
  </section>

  <!--footer-->
  <footer class="container-fluid footer">
    <div class="container">
      <h1>L'Actu de la Tech</h1>
    </div>
  </footer>



</body>
</html>
