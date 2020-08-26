<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Galada&family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/contact.css">

  <script src="https://kit.fontawesome.com/e0362e83aa.js" crossorigin="anonymous"></script>

  <title>Lorem - Contact</title>
</head>

<body>
  <header>
    <h1>Lorem</h1>
    <nav>
      <!-- Menu Classique -->
      <ul class="nav-menu">
        <li><a href="index.html">Welcome</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="picture1.html">Photos</a></li>
        <li><a href="restaurant.html">Restaurants</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <!-- Menu Mobile -->
      <div class="btn-group dropleft list-menu">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bars fa-2x"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="index.html">Welcome</a></li>
          <li><a class="dropdown-item" href="menu.html">Menu</a></li>
          <li><a class="dropdown-item" href="picture1.html">Photos</a></li>
          <li><a class="dropdown-item" href="restaurant.html">Restaurants</a></li>
          <li><a class="dropdown-item" href="contact.html">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="container-fluid">
    <h2 class="text-center">Nous contacter</h2>
    <form action="contacte">
      <div class="row">
        <div class="form-group col col-lg lg-12 col-md md-6">
          <label for="name">Nom</label>
          <input type="text" name="name" id="userName" class="form-control" placeholder="Nom" aria-describedby="helpId">
        </div>
        <div class="form-group col col-lg lg-12 col-md md-6">
          <label for="firstName">Prénom :</label>
          <input type="text" name="firstName" id="userFirst" class="form-control" placeholder="Prénom"
            aria-describedby="helpId">
        </div>
      </div>
      <div class="row">
        <div class="form-group col col-lg lg-12 col-md md-6">
          <label for="tel">Téléphone :</label>
          <input type="number" name="tel" id="user_tel" class="form-control" placeholder="+32 00 000 000"
            aria-describedby="helpId">
        </div>
        <div class="form-group col col-lg lg-12 col-md md-6">
          <label for="email">E-mail :</label>
          <input type="email" class="form-control" id="email" placeholder="azerty@xxx.zz" aria-describedby="helpId">
        </div>
      </div>
    </form>
    <form>
      <div class="row">
        <div class="form-group col-12 lg-12 md-12">
          <label for="selection">Choissisez la ville</label>
          <select id="selection" class="form-control">
            <option value="">Charleroi</option>
            <option value="">Bruxelles</option>
            <option value="">Anvers</option>
          </select>
        </div>
        <div class="form-group col-12 col-lg lg-12 col-md md-12">
          <label for="bio">Votre message</label>
          <textarea class="message col col-12 col-lg lg-12 col-md md-12" id="message"
            rows="7"> Votre message ici</textarea>
        </div>
      </div>
      <div class="form-group row justify-content-center justify-content-lg-center justify-content-md-center">
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </form>
  </main>
  <footer>
    <div class="social">
      <i class="fab fa-facebook-square fa-3x"></i>
      <i class="fab fa-instagram-square fa-3x"></i>
      <i class="fab fa-twitter-square fa-3x"></i>
    </div>
    <p>&copy; <a href="https://becode.org/">BeCode</a> -
      <a href="https://github.com/riizbae/restaurant-css-framework">Groupe 5</a></p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>