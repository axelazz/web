<div class="body-wrapper">
    <div class="body-conteiner">
        <div class="title-conteiner">
            <p class="title-text"><?= $row['title'] ?></p>
            <p class="subtitle-text"><?= $row['subtitle'] ?></p>
        </div>
        <img src="<?= $row['image_url'] ?>" alt="<?= $row['title'] ?>">
        <div class="text-block">
            <p><?= $row['content'] ?></p>
        </div>
    </div>
</div>