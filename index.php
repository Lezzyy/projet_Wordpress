<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HOME</title>

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
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="périphérique.html" target="_blank">Périphériques</a></li>
              <li><a href="applications.html" target="_blank">Applications</a></li>
              <li><a href="nouvelle_tech.html" target="_blank">Nouvelles Tech</a></li>
              <li><a href="#" target="_blank">Contact</a></li>
            </ul>
          </nav>
      </div>
  </nav>
</header>
<!--end header-->

<!--logo-->
<section class="container-fluid logo">
  <div class="container">
    <div class="row">
      <article class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
        <h1><u>L'Actu de la Tech</u></h1>
      </article>
      <aside id="date" class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
        <p>Aujourd'hui, nous sommes le <?php echo date ('d/m/Y'); ?></p>
        <p>Il est :</p>
        <div id="div_horloge"></div>
        <script type="text/javascript">
        window.onload=function() {
          horloge('div_horloge');
        };

        function horloge(el) {
          if(typeof el=="string") { el = document.getElementById(el); }
          function actualiser() {
            var date = new Date();
            var str = date.getHours();
            str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
            str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
            el.innerHTML = str;
          }
          actualiser();
          setInterval(actualiser,1000);
        }
        </script>
      </aside>
    </section>


<!--end logo-->

<!--Article 1-->
 <section class="container-fluid article">
   <div class="container">
     <div class="row">
       <hr class="separator">
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <a href="#"><u>Périphériques</u></a>
          <img src="img/ordinateur.jpg" alt="ordinateur" id="ordinateur">
        </article>
        <article class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
          <h2>Après Microsoft, Apple, Xiaomi met à jour sa gamme d’ordinateurs Mi Notebook Air</h2>
          <p>
            Microsoft a récemment publié ses nouveaux ordinateurs Surface Pro et Surface Laptop avec du matériel de dernière génération, et maintenant d’autres fabricants modernisent leurs appareils avec de nouvelles puces, davantage de mémoire vive (RAM)...
          </p>
          <button class="btn btn-custom">Lire la suite</button>
        </article>
        <aside id="info" class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <h3>Les articles les plus consultés :</h3>
          <ul>
            <li>Le casque VR révolutionne les jeux vidéos</li>
            <li>Microsoft</li>
            <li>Apple</li>
          </ul>
     </div>
   </div>
 </section>

 <!--article 2-->
 <section class="container-fluid article">
   <div class="container">
     <div class="row">
       <hr class="separator">
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
          <a href="#"><u>Périphériques</u></a>
          <h2>Le HTC U11 échoue son test de durabilité avec un écran fissuré</h2>
          <p>
            Le HTC U11 a été officiellement annoncé au mois de mai, et l’appareil apporte beaucoup d’améliorations et de fonctionnalités à sa gamme de smartphones. Mais s’il excelle, le HTC U11 a récemment été soumis...
          </p>
            <button class="btn btn-custom">Lire la suite</button>
        </article>
        <article class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
          <img src="img/smartphone.jpg" alt="smartphone" id="smartphone">
        </article>
      </div>
    </div>
  </section>

  <!-- article 3 et 4 -->
  <section class="container-fluid article">
    <div class="container">
      <div class="row">
        <hr class="separator">
         <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
           <a href="#"><u>Nouvelles Tech</u></a>
           <img src="img/VR.jpg" alt="vr" id="vr">
           <h2>E3 2017 : Sony révèle de bonnes raisons d’acheter le PlayStation VR</h2>
           <p>
             La conférence lors de l’E3 2017 de Sony vient près de 8 mois après la sortie de son casque de réalité virtuelle (VR), le PlayStation VR. Cet évènement mondial dédié à tous les gamers...
           </p>
             <button class="btn btn-custom">Lire la suite</button>
         </article>
         <article class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
          <a href="#"><u>Applications</u></a>
           <img src="img/appli.jpg" alt="appli" id="appli" class="img-responsive center-block">
           <h2>Le programme Android Excellence met en exergue les meilleures apps Android</h2>
           <p>
             Google recherche de nouvelles façons de promouvoir et d’afficher des applications et des jeux qui offrent une expérience Android de haute qualité. Et, à cette fin, la société a lancé Android Excellence, un nouveau programme...
           </p>
            <button class="btn btn-custom">Lire la suite</button>
         </article>
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
