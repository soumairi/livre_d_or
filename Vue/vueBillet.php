<?php $titre = "Mon Blog - " . $billet['titre']; ?>
<div class="blog-post">
<h2 class="blog-post-title"><?= $billet['titre'] ?></h2>
<p class="blog-post-meta"><?= $billet['date'] ?></p>
<p><?= $billet['contenu'] ?></p>

<hr>
  <h3>Réponses à <?= $billet['titre'] ?></h3>
<hr>
<?php foreach ($commentaires as $commentaire): ?>
<blockquote>
<p>Auteur :<a href="#"><?= $commentaire['auteur'] ?> </a></p>
<p><?= $commentaire['contenu'] ?></p>
</blockquote>
<?php endforeach; ?>
</div>
