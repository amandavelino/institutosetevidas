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

            <section class="sessao ss-interna ss-blog">

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
                                </div>
                                <!-- end .conteudo-noticia -->

                                <a href="single.php" class="btn-leia-mais">Leia Mais</a>

                            </article>
                            <!-- end .noticia -->

                            <article class="noticia">

                                <header class="hd-noticia">
                                    <div class="hd-info">
                                        <p><time datetime="2013-11-15">10.02.2017</time> | in Design | by Admin | 3 Comments</p>
                                    </div>
                                    <!-- end .hd-info -->
                                    <h3>Gallery Post Without Image</h3>
                                </header>

                                <div class="conteudo-noticia">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer feugiat neque, elementum posuere purus.  Nam vitae convallis ipsum. Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum erat tempor nec. Suspendisse lectus massa, consequat at pellentesque sed, aliquam ullamcorper orci.</p>
                                </div>
                                <!-- end .conteudo-noticia -->

                                <a href="single.php" class="btn-leia-mais">Leia Mais</a>

                            </article>
                            <!-- end .noticia -->     
                            
                            <article class="noticia">

                                <figure>
                                    <img src="./imgs/temp/new-temp.jpg" border="0">
                                </figure>

                                <header class="hd-noticia">
                                    <div class="hd-info">
                                        <p><time datetime="2013-11-15">10.02.2017</time> | in Design | by Admin | 3 Comments</p>
                                    </div>
                                    <!-- end .hd-info -->
                                    <h3>Gallery Post With Image</h3>
                                </header>

                                <div class="conteudo-noticia">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer feugiat neque, elementum posuere purus.  Nam vitae convallis ipsum. Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum erat tempor nec. Suspendisse lectus massa, consequat at pellentesque sed, aliquam ullamcorper orci.</p>
                                </div>
                                <!-- end .conteudo-noticia -->

                                <a href="single.php" class="btn-leia-mais">Leia Mais</a>

                            </article>
                            <!-- end .noticia -->   

                        </article>                          

                        <div class="paginacao">
                            <ul class="lista-itens lista-paginacao">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                            </ul>
                            <!-- end .lista-itens -->
                        </div>
                        <!-- end .paginacao -->    

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