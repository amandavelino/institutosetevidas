<!DOCTYPE html>
<html lang="pt-BR">
<?php include("./incs/head.php"); ?>
<body class="pg-blog">

    <div class="ss-wrapper">

        <?php include("./incs/header.php"); ?>

        <main>
            
            <section class="sessao ss-topo">
                <img src="./imgs/como-ajudar-principal.jpg" border="0">
            </section>
            <!-- end .ss-topo -->

            <section class="sessao ss-interna ss-blog ss-single">

                <div class="container">

                    <header class="hd-topo">
                        <h2>Blog</h2>
                    </header>

                    <section class="noticias">

                        <article class="noticias-container">

                            <article class="noticia">

                                <figure>
                                    <img src="./imgs/temp/new-temp.jpg" border="0">
                                </figure>

                                <header class="hd-noticia">
                                    <div class="hd-info">
                                        <p><time datetime="2013-11-15">15.11.2013</time> | in Design | by Admin | 0 Comments</p>
                                    </div>
                                    <!-- end .hd-info -->
                                    <h3>Standard Post With Image</h3>
                                </header>

                                <div class="conteudo-noticia">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer feugiat neque, elementum posuere purus.  Nam vitae convallis ipsum. Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum erat tempor nec. Suspendisse lectus massa, consequat at pellentesque sed, aliquam ullamcorper orci.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <!-- end .conteudo-noticia -->

                                <footer class="ft-single">
                                    <p>Tags:</p>
                                    <ul class="lista-tags">
                                        <li><a href="#">Web</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Business</a></li>
                                    </ul>                                    
                                </footer>
                                

                            </article>
                            <!-- end .noticia -->

                            <div class="nav-posts">
                                <a href="#" class="nav-link-posts link-prev">
                                    <i class="fa fa-angle-left fa-4x" aria-hidden="true"></i>
                                    <span>Post Anterior</span>
                                </a>
                                <a href="#" class="nav-link-posts link-next">
                                    <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i> 
                                    <span>Próximo Post</span>
                                </a>
                            </div>
                            <!-- end .nav-posts -->

                            <section class="comentarios">

                                <h4>Comentários</h4>

                                <div class="box-comentario">

                                    <div class="box-interna">
                                        <figure>
                                            <img src="http://via.placeholder.com/60x60" width="60" border="0">
                                        </figure>
                                        <div class="txt-autor">
                                            <header>
                                                <h5>Designer</h5>
                                                <time datetime="2015-02-02 03:21"><p>15.11.2013 at 3:21 pm</p></time>
                                            </header>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                        </div>
                                        <!-- end .txt-autor -->
                                    </div>
                                    <!-- end .box-interna -->

                                    <div class="box-comentario box-resposta">

                                        <figure>
                                            <img src="http://via.placeholder.com/60x60" width="60" border="0">
                                        </figure>
                                        <div class="txt-autor">
                                            <header>
                                                <h5>Designer</h5>
                                                <time datetime="2015-02-02 03:21"><p>15.11.2013 at 3:21 pm</p></time>
                                            </header>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                        </div>
                                        <!-- end .txt-autor -->

                                    </div>
                                    <!-- end .box-comentario -->

                                </div>
                                <!-- end .box-comentario -->

                                <div class="box-comente">
                                    <h4>Deixe seu comentário</h4>

                                    <form action="#" class="form-comente">

                                        <label for="nome-comente">
                                            <input type="text" name="nome-comente" class="input" placeholder="Nome*">
                                        </label>

                                        <label for="email-comente">
                                            <input type="email" name="email-comente" class="input" placeholder="Email*">
                                        </label>   
                                        
                                        <label for="url-comente">
                                            <input type="url" name="url-comente" class="input" placeholder="Website">
                                        </label>   
                                        
                                        <label for="textarea-comente">
                                            <textarea name="textarea-comente" class="input" placeholder="Comentário"></textarea>
                                        </label>   
                                        
                                        <input type="submit" class="btn-submit" value=" Enviar Comentário ">

                                    </form>
                                    <!-- end .form-comente -->

                                </div>
                                <!-- end .box-comentario -->

                            </section>

                        </article>                            

                    </section>
                    <!-- end .noticias -->                

                    <?php include("./incs/sidebar.php"); ?>

                </div>
                <!-- end .container -->

            </section>
            <!-- end .ss-blog -->              

            <?php include("./incs/ajude-footer.php"); ?> 
            <?php include("./incs/footer.php"); ?>      

        </main>

    </div>
    <!-- end .ss-wrapper -->
    <?php include("./incs/madeby.php"); ?>
    <?php include("./incs/scripts.php"); ?>

</body>
</html>