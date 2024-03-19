<a class="main-link__card" href="../post.php">
  <div class="big-card  <?= $post['img-back'] ?>">
    <p class="card-button <?= $post['button_color'] ?> "><?= $post['button_text'] ?></p>
    <div class="big-card__text">
      <div class="big-card__title"><?= $post['title'] ?></div>
      <div class="big-card__subtitle">
        <?= $post['subtitle'] ?>
      </div>
      <div class="big-card__author">
        <div class="big-card__list">
          <div class="big-card__author__image">
            <img src="<?= $post['img_modifier'] ?>" alt="avatar" />
          </div>
          <div class="big-card__footer">
            <div class="big-card__name"><?= $post['author'] ?></div>
            <div class="big-card__date"><?= $post['date'] ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</a>