<header id="hd-principal">
    <div class="sessao ss-container hd-container">

        <nav class="navbar navbar-default ss-navbar">
            <div class="container-fluid ss-ct-nav">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo-ct">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-mobile" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo-img" href="index.php">
                        <?php //se não for contato, usar a logo white ?>
                        <?php if($pagina != $www . "contato.php"): ?>
                            <img src="./imgs/setevidas.png" alt="Instituto Sete Vidas" border="0">
                        <?php else: ?>
                            <?php //se for contato mudar a logo para versão black ?>
                            <img src="./imgs/setevidas-blk.png" alt="Instituto Sete Vidas" border="0">
                        <?php endif; ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-ct" id="menu-mobile">

                    <ul class="nav nav-principal">
                        <li class="active"><a href="index.php">Inicío<span class="sr-only">(current)</span></a></li>
                        <li><a href="quem-somos.php">Quem Somos</a></li>
                        <li><a href="como-ajudar.php">Como Ajudar</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                    
                    <?php //se não for contato, aparece o busca no topo ?>
                    <?php if($pagina != $www . "contato.php"): ?>
                    <ul class="nav navbar-nav navbar-right icons-hd-ct">
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                    <?php endif; ?>
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>
    <!-- end .hd-container -->
</header>
<!-- end #hd-principal -->