<a>
    <div class="card-conteiner">
        <div class="card-image">
            <img src="<?= $post['image_url'] ?>" alt="IMAGE">
        </div>
        <div class="card-line"></div>
        <div class="card-title">
            <p class="card-title__name"><?= $post['title'] ?></p>
            <p class="card-title__description"> <?= $post['subtitle'] ?></p>
        </div>
        <div class="card-line"></div>
        <div class="card-footer-conteiner">
            <img class="card-img" src="<?= $post['author_url'] ?>" alt="<?= $post['author'] ?>">
            <p class="card-name"><?= $post['author'] ?></p>
            <p class="card-date date1"><?= date("m/d/Y", $post['publish_date']) ?></p>
        </div>
    </div>
</a>