<a href="/post?id=<?= $post['id'] ?>">
    <div class="big-card">
        <img src="<?= $post['image_url'] ?>" alt="<?= $post['title'] ?>">
        <div class="big-card_conteiner">
            <p class="big-card__title"><?= $post['title'] ?></p>
            <p class="big-card__title__under">
                <?= $post['subtitle'] ?>
            </p>
            <div class="big-card__footer__conteiner">
                <img class="big-card-img" src=<?= $post['author_url'] ?> alt="<?= $post['author'] ?>">
                <div class="big-card-footer_block">
                    <p class="big-card-name"><?= $post['author'] ?></p>
                    <p class="big-card-date"><?= date("F d, Y", $post['publish_date']) ?></p>
                </div>
            </div>
        </div>

    </div>
</a>