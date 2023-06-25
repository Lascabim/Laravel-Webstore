<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="/assets/style.css">
  <link rel="stylesheet" href="/assets/global.css">
  <link rel="stylesheet" href="/assets/about.css">

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" referrerpolicy="no-referrer" />
  <title>TASMAVAC</title>
</head>
<body>

  <section id="header">
    <a href="{{ route('welcome') }}">
      <img src="/assets/img/logo.png" class="mainlogo" alt="Logo Image">
    </a>

    <div>
        <ul id="navbar">
          <img id="close" class="card-logo" src="/assets/img/close.png" alt="">
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li><a href="{{ route('loja') }}">Loja</a></li>
          <li><a href="{{ route('sobre') }}">Sobre</a></li>
          <!-- <li><a href="card.html"><img src="/assets/img/cart.png" class="card-logo" alt="Cart Image"></a></li> -->
        </ul>
    </div>
    <div id="mobile">
      <!-- <a href="card.html"><img src="/assets/img/cart.png" class="card-logo" alt="Cart Image"/></a> -->
      <img id="bar" src="/assets/img/hamburger.png" class="card-logo"/>
    </div>
  </section>

  {{ $slot }}

  <script src="/assets/script.js"></script>
</body>
</html>