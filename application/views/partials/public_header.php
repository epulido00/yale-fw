<header>
    <div class = "header">
        <div class = "header-content">
            <div class = "logo">
                <a href = "<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo_yale.png" alt="" /></a>
            </div>
            <div class = "options-header">
                <div class = "login-links">
                    <ul>
                        <?php if($this->student): ?>
                        <li><a href = "#">Hola, <?= explode(' ', $this->student->nombre)[0]?></a></li>
                        <li><a href = "<?=base_url()?>inscripcion/logout">Cerrar sesión</a></li>
                        <?php else: ?>
                        <li><a href = "<?=base_url()?>ingresar">Ingresar</a></li>
                        <li><a href = "<?=base_url()?>inscribirse">Inscripciones</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class = "searcher">
                    <form action="<?=base_url()?>inicio/busqueda" method = "GET">
                        <input name = "q" class = "search-box" type = "input" placeholder = "Realiza tu búsqueda..." />
                        <button class = "search-button" type = "submit">
                            <svg width="12px" height="12px" viewBox="0 0 16 16" class="bi bi-search" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <nav class = "nav-bar">
        <div class = "nav-content">
            <ul>
                <li><a href = "<?=base_url()?>"><div class = "nav-option"><span>Inicio</span></div></a></li>
                <li><a href = "<?=base_url()?>noticias"><div class = "nav-option"><span>Noticias</span></div></a></li>
                <li><a href = "<?=base_url()?>foro"><div class = "nav-option"><span>Foro estudiantil</span></div></a></li>
                <li><a href = "<?=base_url()?>eventos"><div class = "nav-option"><span>Calendario de eventos</span></div></a></li>
            </ul>
        </div>
    </nav>
</header>