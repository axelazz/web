<?php
  const HOST = 'localhost';
  const USERNAME = 'root';
  const PASSWORD = '';
  const DATABASE = 'blog';
  function createDBConnection(): mysqli {
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
  
  function closeDBConnection(mysqli $conn): void {
    $conn->close();
  }
  $conn = createDBConnection();
  try {
    $sql = "SELECT * FROM posts";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $posts = $result->fetch_all(MYSQLI_ASSOC);
    }
  }
  catch(Exception $errror) {
    echo $errror->getMessage();
  }
  closeDBConnection($conn)
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Oxygen&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style/main_style_st.css" />
  <title>Let's do it together.</title>
</head>

<body>
  <header>
    <div class="header-wrapper">
      <div class="header-logo">
        <img src="img/logo-escape.svg" alt="logo escape" />
      </div>
      <div class="navigation-list">
        <ul class="list-style">
          <li><a class="navigation__item" href="#">home</a></li>
          <li><a class="navigation__item" href="#">categories</a></li>
          <li><a class="navigation__item" href="#">about</a></li>
          <li><a class="navigation__item" href="#">contact</a></li>
        </ul>
      </div>
    </div>
    <div class="header-title">Let's do it together.</div>
    <div class="sub-title">
      We travel the world in search of stories. Come along for the ride.
    </div>
    <div class="lastpost__button">View Latest Posts</div>
  </header>
  <div class="main-menu">
    <div class="main-categories">
      <ul class="categories-list">
        <li><a class="categories__item" href="#">Nature</a></li>
        <li><a class="categories__item" href="#">Photography</a></li>
        <li><a class="categories__item" href="#">Relaxation</a></li>
        <li><a class="categories__item" href="#">Vacation</a></li>
        <li><a class="categories__item" href="#">Travel</a></li>
        <li><a class="categories__item" href="#">Adventure</a></li>
      </ul>
    </div>
  </div>
  <main>
    <div class="main-cards">
        <div class="main-cards__conteiner1">
            <div class="feature-posts__conteiner1__title">
                <p>Featured Posts</p>
                <hr class="line">
            </div>
            <nav class="feature-posts-cards">
                <?php 
                    foreach ($posts as $post) {
                        if($post['featured'] == 1){
                            include 'featured_posts.php';
                        }        
                    }
                ?>

            </nav>
        </div>
        <div class="main-cards__conteiner2">
            <div class="most-recent_conteiner2__title">
                <p>Most Recent</p>
                <hr class="line">
            </div>
            <nav class="most-recent_cards">
                <?php
                    foreach ($posts as $post) {
                        if($post['featured'] != 1){
                            include 'recent.php';
                        }        
                    }
                ?>
            </nav>
        </div>
    </div>
  </main>
  <footer>
    <div class="footer-wrapper">
      <div class="footer-logo">
        <img src="img/logo-escape.svg" alt="logo escape" />
      </div>
      <div class="footer-navigation__list">
        <ul class="footer-list__style">
          <li><a class="navigation__link" href="#">home</a></li>
          <li><a class="navigation__link" href="#">categories</a></li>
          <li><a class="navigation__link" href="#">about</a></li>
          <li><a class="navigation__link" href="#">contact</a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>

</html>