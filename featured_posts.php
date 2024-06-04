<a href="/post?id=<?= $row['id'] ?>">
    <div class="big-card">
        <img src="<?= $row['card_url'] ?>" alt="<?= $row['title'] ?>" class="image-block">
        <div class="big-card_conteiner">
            <p class="big-card__title"><?= $row['title'] ?></p>
            <p class="big-card__title__under">
                <?= $row['subtitle'] ?>
            </p>
            <div class="big-card__footer__conteiner">
                <img class="big-card-img" src=<?= $row['author_url'] ?> alt="<?= $row['author'] ?>">
                <div class="big-card-footer_block">
                    <p class="big-card-name"><?= $row['author'] ?></p>
                    <p class="card-date"><?= date("m/d/Y", 1443139200) ?></p>
                </div>
            </div>
        </div>
    </div>
</a>