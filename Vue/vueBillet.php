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
<form method="post" action="index.php?action=commenter">
    <div class="form-group">
    <label for="InputAuteur">Auteur</label>
    <input id="auteur" class="form-control" name="auteur" type="text" placeholder="Votre pseudo" 
           required />
    </div>
    <div class="form-group">
    <label for="InputAuteur">Commentaire</label>
    <textarea id="txtCommentaire" class="form-control" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    </div>
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Commenter" class="btn btn-default"/>
</form>
<hr>
