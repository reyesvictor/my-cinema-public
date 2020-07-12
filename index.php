<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name http-equiv='X-UA-Compatible' content='ie=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>My_cinema | Welcome</title>
  <meta name='description' content='Welcome Page'>
  <meta name='keywords' content=''>
  <meta name='copyright' content=''>
  <meta name='author' content='Victor Reyes'>
  <!-- <link rel='icon' href='./images/favicon.ico' type='image/x-icon'> -->
  <link rel='stylesheet' type='text/css' href='js/jquery-ui-1.12.1.custom/jquery-ui.css' media='screen' />
  <link rel='stylesheet' type='text/css' href='css/style.css' media='screen' />
  <link href='https://fonts.googleapis.com/css?family=Oswald|Droid+Sans|Droid+Serif|Roboto' rel='stylesheet'>
</head>

<body>
  <!-- MENU -->
  <header>
    <nav class="navbar, container-style">
      <img src="img/logo.png" id='logo' alt="My_cinema Beautiful Logo">
      <ul>
        <li><a id='home'>HOME</a></li>
        <li><a id='member'>LOOK FOR MEMBERS</a></li>
        <li id='subscription-li-menu'><a id='member-sub'>SUBSCRIPTIONS</a></li>
        <li><a href="#/"></a></li>
      </ul>
    </nav>
  </header>

  <!-- SEARCH BAR -->
  <div id='search-bg'>
    <div id='search-container' class='container-style'>
      <img src="img/search-icon.png" id="search-icon" alt="Research Icon">
      <input type='search' name='search' id='search' placeholder='Search for movies from title, genre or distributor...'>
      <select id="filter">
        <option value="film">Movies</option>
        <option value="genre">Genre</option>
        <option value="distrib">Distributor</option>
      </select>
    </div>
  </div>

  <!-- NEWS -->
  <div id="uppernews-container">
  </div>

  <!-- RESULTS AND CONTENT -->
  <div id="main-container" class='container-style'>
  </div>

  <!-- FOOTER` -->
  <footer id='footer'>
    <div id="footer-inf" class='container-style'>
      <h3>The Website in under construction. More info soon.</h3>
    </div>
  </footer>
</body>
<!-- SCRIPTS -->
<script type='text/javascript' src='js/jquery.uncompressed.3.4.1.js'></script>
<script type='text/javascript' src='js/jquery-ui-1.12.1.custom/jquery-ui.js'></script>
<script type='text/javascript' src='js/script.js'></script>
</html>