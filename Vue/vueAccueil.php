<?php $this->titre = "Mon Blog"; ?>

<?php foreach ($billets as $billet):
    ?>
<div class="blog-post">
<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>"><h2 class="blog-post-title"><?= $billet['titre'] ?></h2></a>
<p class="blog-post-meta"><?= $billet['date'] ?></p>
<p><?= $billet['contenu'] ?></p>
</div>
<?php endforeach; ?>