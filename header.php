<header>
    <div class="container">
        <div class="logo hidden-xs col-sm-2">
            <a href="#">
                <img src="images/logo.png" alt="GypaNews" title="GypaNews">
            </a>
        </div>
        <div class="ad col-xs-12 col-sm-10">
            <a href="#">
                <img src="http://placehold.it/728x90" alt="Anuncia Aqui" title="Anuncie Aqui">
            </a>
        </div>
    </div>
    <nav class="col-xs-12">
        <div class="container">
            <div class="hidden-sm hidden-md hidden-lg mobile-menu">
                <div class="logo col-xs-8">
                    <a href="#" class="pull-left">
                        <img src="images/logo-white.png" alt="GypaNews" title="GypaNews">
                        <p>GypaNews Online</p>
                    </a>
                </div>
                <div class="menu col-xs-4">
                    <p class="pull-right">Menu <i class="fa fa-bars"></i></p>
                </div>
            </div>
            <ul>
                <li><a href="#">Página Inicial</a></li>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Social</a></li>
                <li><a href="#">Dicas</a></li>
                <li><a href="#">Entrevistas</a></li>
                <li><a href="#">Reportagens</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Guia</a></li>
            </ul>
        </div>
    </nav>
    <div class="featured col-xs-12">
        <div class="container">
            <p class="hidden-xs">Nesta Edição</p>
            <ul>
                <?php for($i = 1; $i < 4; $i++){ ?>
                    <li><a href="#">20/10/2015 - Conheça o novo restaurante da Rua bla bla <?php echo $i; ?></a></li>
                <?php } ?>
            </ul>
            <div class="hidden-xs buttons">
                <div class="prev"></div>
                <div class="next"></div>
            </div>
        </div>
    </div>
</header>