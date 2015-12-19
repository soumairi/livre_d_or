<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />

        <link href="Contenu/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Contenu/css/blog.css" rel="stylesheet" type="text/css"/>
        <link href="Contenu/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css"/>
        <script src="Contenu/js/ie-emulation-modes-warning.js" type="text/javascript"></script>
        <title><?= $titre ?></title>   <!-- Élément spécifique -->
    </head>
    <body>
        <div class="blog-masthead">
            <div class="container">

                <nav class="blog-nav">
                    <a class="blog-nav-item active" href="#">Home</a>
                </nav>
            </div>
        </div>
        <div class="container">

            <div class="blog-header">
                <a href="index.php"><h1 class="blog-title">Mon Blog</h1></a>
                <p class="lead blog-description">Je vous souhaite la bienvenue sur ce modeste blog.</p>
            </div>

            <div class="row">

                <div class="col-sm-8 blog-main">


                    <?= $contenu ?>
                    <!-- /.blog-post -->



                    

                </div><!-- /.blog-main -->

                <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                    <div class="sidebar-module sidebar-module-inset">
                        <h4>Apropos</h4>
                        <p>C'est un exemple<em>de blog</em> réalisé avec PHP, HTML5 et Bootstrap.</p>

                    </div>
                    <div class="sidebar-module">
                        <!--<h4>Archives</h4>
                        <ol class="list-unstyled">
                          <li><a href="#">March 2014</a></li>
                          <li><a href="#">February 2014</a></li>
                          <li><a href="#">January 2014</a></li>
                          <li><a href="#">December 2013</a></li>
                          <li><a href="#">November 2013</a></li>
                          <li><a href="#">October 2013</a></li>
                          <li><a href="#">September 2013</a></li>
                          <li><a href="#">August 2013</a></li>
                          <li><a href="#">July 2013</a></li>
                          <li><a href="#">June 2013</a></li>
                          <li><a href="#">May 2013</a></li>
                          <li><a href="#">April 2013</a></li>
                        </ol>-->
                    </div>
                    <div class="sidebar-module">
                        <h4>Communiquez</h4>
                        <ol class="list-unstyled">
                            <li><a href="https://github.com/soumairi/livre_d_or">GitHub</a></li>

                        </ol>
                    </div>
                </div><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </div><!-- /.container -->

        <footer class="blog-footer">
            <p>Blog réalisé avec PHP, HTML5 et Bootstrap. Par <a href="soumairi@gmail.com">Soumairi Mouhssine</a>.</p>
            <p>
                <a href="#">En haut</a>
            </p>
        </footer>

        <!-- #global -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="Contenu/js/bootstrap.min.js" ></script>
    </body>
</html>