<?php
$posts = [
 [
   'title' => 'The Road Ahead',
   'subtitle' => 'The road ahead might be paved - it might not be.',
   'img_modifier' => 'img/mat-avatar.svg',
   'author' => 'Mat Vogels',
   'date' => 'September 25, 2015',
   'button_text' => 'Photography',
   'img-back' => 'img-backgroung_The_road_ahead',
   'button_color' => 'button_The_road_ahead',


   
   // другие свойства этого поста
 ],
 [
   'title' => 'From Top Down',
   'subtitle' => 'Once a year, go someplace you’ve never been before.',
   'img_modifier' => 'img/Will-avatar.svg',
   'author' => 'William Wong',
   'date' => 'September 25, 2015',
   'button_text' => 'Adventure',
   'img-back' => 'img-backgroung_From_Top_Down',
   'button_color' => 'button_From_Top_Down',
   
 ],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Oxygen&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style/main_style.css" />
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
    <h1 class="main-title">Featured Posts</h1>
    <div class="title-underline"></div>
    <div class="main-content">
      <ul class="main-cardlist">
        <?php
        foreach ($posts as $post) {
          include 'featured_posts.php';
        }
        ?>

      </ul>
    </div>
    <h1 class="main-title">Most Recent</h1>
    <div class="title-underline"></div>
    <div class="add-content">
      <div class="small-card">
        <div class="card-image">
          <img src="/img/card-balloon.jpg" alt="balloon-image" />
        </div>
        <div class="small-card__title">Still Standing Tall</div>
        <div class="small-card__subtitle">
          Life begins at the end of your comfort zone.
        </div>
        <div class="small-title__underline"></div>
        <div class="small-card__author">
          <div class="small-card__list">
            <div class="small-card__author__image">
              <img src="img/Will-avatar.svg" alt="avatar" />
            </div>
            <div class="small-card__footer">
              <div class="small-card__name">William Wong</div>
              <div class="small-card__date">9/25/2015</div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-card">
        <div class="card-image">
          <img src="/img/card-bridge.png" alt="bridge-image" />
        </div>
        <div class="small-card__title">Sunny Side Up</div>
        <div class="smal-card__subtitle">
          No place is ever as bad as they tell you it’s going to be.
        </div>
        <div class="small-title__underline"></div>
        <div class="small-card__author">
          <div class="small-card__list">
            <div class="small-card__author__image">
              <img src="img/mat-avatar.svg" alt="avatar" />
            </div>
            <div class="small-card__footer">
              <div class="small-card__name">Mat Vogels</div>
              <div class="small-card__date">9/25/2015</div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-card">
        <div class="card-image">
          <img src="/img/card-sunrise.png" alt="sunrise-image" />
        </div>
        <div class="small-card__title">Water Falls</div>
        <div class="smal-card__subtitle">
          We travel not to escape life, but for life not to escape us.
        </div>
        <div class="small-title__underline"></div>
        <div class="small-card__author">
          <div class="small-card__list">
            <div class="small-card__author__image">
              <img src="img/mat-avatar.svg" alt="avatar" />
            </div>
            <div class="small-card__footer">
              <div class="small-card__name">Mat Vogels</div>
              <div class="small-card__date">9/25/2015</div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-card">
        <div class="card-image">
          <img src="/img/card-sea.png" alt="sea-image" />
        </div>
        <div class="small-card__title">Through the Mist</div>
        <div class="smal-card__subtitle">
          Travel makes you see what a tiny place you occupy in the world.
        </div>
        <div class="small-title__underline"></div>
        <div class="small-card__author">
          <div class="small-card__list">
            <div class="small-card__author__image">
              <img src="img/Will-avatar.svg" alt="avatar" />
            </div>
            <div class="small-card__footer">
              <div class="small-card__name">William Wong</div>
              <div class="small-card__date">9/25/2015</div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-card">
        <div class="card-image">
          <img src="/img/card-funicular.png" alt="funicular-image" />
        </div>
        <div class="small-card__title">Awaken Early</div>
        <div class="small-card__subtitle">
          Not all those who wander are lost.
        </div>
        <div class="small-title__underline"></div>
        <div class="small-card__author">
          <div class="small-card__list">
            <div class="small-card__author__image">
              <img src="img/mat-avatar.svg" alt="avatar" />
            </div>
            <div class="small-card__footer">
              <div class="small-card__name">Mat Vogels</div>
              <div class="small-card__date">9/25/2015</div>
            </div>
          </div>
        </div>
      </div>
      <div class="small-card">
        <div class="card-image">
          <img src="/img/card-waterfall.png" alt="waterfall-image" />
        </div>
        <div class="small-card__title">Try it Always</div>
        <div class="smal-card__subtitle">
          The world is a book, and those who do not travel read only one page.
        </div>
        <div class="small-title__underline"></div>
        <div class="small-card__author">
          <div class="small-card__list">
            <div class="small-card__author__image">
              <img src="img/mat-avatar.svg" alt="avatar" />
            </div>
            <div class="small-card__footer">
              <div class="small-card__name">Mat Vogels</div>
              <div class="small-card__date">9/25/2015</div>
            </div>
          </div>
        </div>
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