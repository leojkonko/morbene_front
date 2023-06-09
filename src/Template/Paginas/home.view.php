<main id="home">
    <section class="banner position-relative">
        <div class="row">
            <div class="col-lg-7 col-12 p-0 bg-index">
                <div class="ratio ratio-16x9 text-center d-none d-lg-flex z-index-background bg-custom-h">
                        <!--<img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">-->
                        <!--<div class="d-flex align-items-center conteudo">
                            <h2 class="h2 text-white text-start pt-4 mt-1">Serviço de distribuição para grandes marcas</h2>
                        </div>-->
                </div>
                <div class="ratio ratio-6x9 text-center d-flex d-lg-none">
                        <!--<img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">-->
                        <div class="d-flex align-items-center conteudo px-4">
                            <h2 class="h2 text-white text-center pt-4 mt-1">Serviço de distribuição para grandes marcas</h2>
                            <img class="eng-mobile position-absolute d-flex d-lg-none" src="<?= asset('images/banners/eng.png') ?>" alt="">
                        </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 p-0 text-center pt-2 sombra">
                <a href="#contato">
                    <button class="btn btn-outline-danger text-primary mb-1">Entre em contato</button>
                </a>
                <!--<div class="marcas-banner z-index-background w-100 h-100">
                </div>-->
               <div class="sombra-swiper">
                    <!-- Swiper -->
                    <div class="swiper banner-vertical-swiper">
                            <div class="swiper-wrapper">
                                <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide">
                                    <div class="ratio ratio-1x1">
                                        <img class="" src="<?= asset('images/icones/nivea.png') ?>" alt="">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        <!--<div class="swiper-pagination"></div>-->
                    </div>
               </div>
            </div>
        </div>
        <img class="eng position-absolute d-none d-lg-flex" src="<?= asset('images/banners/eng.png') ?>" alt="">
    </section>
    <section id="empresa" class="saiba-mais bg-cinza ">
        <div class="row g-0">
            <div class="col-12">
                <div class="container container-fluid-right">
                    <div class="row g-0 ">
                            <div class="col-lg d-flex justify-content-center align-items-center flex-column conteudo-texto-morbene py-4 py-xxl-0 px-1 px-lg-0 text-lg-start text-center">
                            <h2 class="h2 text-primary w-100">Saiba mais sobre a <span class="h2 text-danger">Morbene</span></h2>
                            <p class="p pt-2 pe-lg-4 me-lg-4">
                            A Morbene iniciou seus serviços de distribuição em maio de 1983, na cidade de Novo Hamburgo/RS, trabalhando com exclusividade com a Rayovac. Após algum tempo, 
                            outras grandes marcas como Bic, Ferrero, Nivea, Perfetti e Fini somaram-se ao quadro, <span>que hoje conta com 6.900 clientes ativos, nos mais diversos ramos de atividade.</span>
                            </p>
                        </div>
                        <div class="col-lg-auto">
                            <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                                <img id="setWidth" class="object-fit-cover w-100 h-100 br-sup-dir d-none d-lg-flex" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 bg-cinza" id="getWidth">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100 br-inf-esq" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 d-none d-lg-flex">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 d-flex d-lg-none">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
            
                <div class="mais-fotos">
                
                    <a href="<?= asset('images/banners/fotos2.png') ?>" class="a-ratio" data-fancybox="gallery">
                    <a href="" class="mais-numeros">+4</a>
                        <div class="ratio ratio-1x1">
                            <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                            <a href="<?= asset('images/banners/fotos.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                            <a href="<?= asset('images/banners/fotos1.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="regioes" class="numeros bg-cinza py-lg-4 py-2">
        <img class="img-mapa" src="<?= asset('images/backgrounds/numeros.png') ?>" alt="">
        <div class="row">
            <div class="col-xl-8 col-12 flex-column conteudo-texto p-0 text-center text-xl-start position-relative z-index-1">
                <h2 class="h2 text-primary">Nossos <span class="h2 text-danger">Números</span></h2>
                <p class="p pt-3 pb-2">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, 
                    quando uma misturou os caracteres de um texto para criar um espécime de livro.</p>
                    <div class="w-100 d-flex justify-content-center">
                        <img class="d-flex d-xl-none w-100 h-100 object-fit-cover" src="<?= asset('images/backgrounds/numeros.png') ?>" alt="">
                    </div>
                    <div class="dados d-none d-lg-flex">
                        <div class="d-flex item align-items-center bg-light flex-column">
                            <h2 class="h2 text-primary w-100 pt-0-50">6895</h2>
                            <h2 class="p-dados pt-0-50">Clientes ativos</h2>
                        </div>
                        <div class="d-flex item align-items-center bg-light flex-column">
                            <h2 class="h2 text-primary w-100 pt-0-50">7045</h2>
                            <h2 class="p-dados pt-0-50">Pedidos entregues ao mês</h2>
                        </div>
                        <div class="d-flex item align-items-center bg-light flex-column">
                            <h2 class="h2 text-primary w-100 pt-0-50">R$ 2 bilhões</h2>
                            <h2 class="p-dados pt-0-50">Movimentados ao ano</h2>
                        </div>
                        <div class="d-flex item align-items-center bg-light flex-column">
                            <h2 class="h2 text-primary w-100 pt-0-50">21</h2>
                            <h2 class="p-dados pt-0-50">Cidades</h2>
                        </div>
                    </div>
                    <div class="swiper numeros-swiper d-flex d-xl-none p-2 p-lg-0">
                        <div class="swiper-wrapper mb-lg-4 mb-1 mb-sm-4 pt-1">
                            <?php //foreach(range(0) as $i) : ?>
                                <div class="swiper-slide d-flex justify-content-center dados">
                                    <div class="d-flex item align-items-center bg-light flex-column">
                                        <h2 class="h2 text-primary w-100 pt-0-50">6895</h2>
                                        <h2 class="p-dados pt-0-50">Clientes ativos</h2>
                                    </div>
                                </div>
                                <div class="swiper-slide d-flex justify-content-center dados">
                                    <div class="d-flex item align-items-center bg-light flex-column">
                                        <h2 class="h2 text-primary w-100 pt-0-50">7045</h2>
                                        <h2 class="p-dados pt-0-50">Pedidos entregues ao mês</h2>
                                    </div>
                                </div>
                                <div class="swiper-slide d-flex justify-content-center dados">
                                    <div class="d-flex item align-items-center bg-light flex-column">
                                        <h2 class="h2 text-primary w-100 pt-0-50">R$ 2 bilhões</h2>
                                        <h2 class="p-dados pt-0-50">Movimentados ao ano</h2>
                                    </div>
                                </div>
                                <div class="swiper-slide d-flex justify-content-center dados">
                                    <div class="d-flex item align-items-center bg-light flex-column">
                                        <h2 class="h2 text-primary w-100 pt-0-50">21</h2>
                                        <h2 class="p-dados pt-0-50">Cidades</h2>
                                    </div>
                                </div>
                            <?php //endforeach; ?>
                                </div>
                            <div class="swiper-pagination pagination-style"></div> 
                        </div>

                    <a href="#contato">
                        <button class="btn btn-outline-danger text-primary mt-3">Entre em contato</button>
                    </a>
            </div>
        </div>
    </section>
    <section class="diferenciais py-4">
        <div class="container">
        <h2 class="h2 text-white w-100 text-center mt-2">Diferenciais</h2>
            <div class="swiper diferenciais-swiper">
                    <div class="swiper-wrapper my-4">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide d-flex justify-content-center flex-column">
                                <div class="ratio ratio-1x1 m-auto">
                                    <img class="" src="<?= asset('images/icones/diferenciais.png') ?>" alt="">
                                </div>
                                <p class="p text-white text-center pt-1">
                                    Estoque vertical
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <div class="swiper-pagination"></div> 
            </div>
        </div>
    </section>
    <section id="marcas" class="marcas py-4">
    <h2 class="h2 text-primary w-100 text-center"><span class="h2 text-danger">Marcas</span> que confiam</h2>
        <div class="container position-relative">
            <div class="swiper marcas-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide d-flex justify-content-center img_<?=$i?>">
                                <div class="ratio ratio-1x1">
                                    <img id="texto" class="img_<?=$i?>" onclick="mudarTexto('img_<?=$i?>')" src="<?= asset('images/icones/nivea.png') ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <div class="swiper-button-prev"></div> 
                <div class="swiper-button-next"></div> 
                <div class="swiper-pagination d-block d-lg-none"></div> 
            </div>                  
        </div>
        <div class="container">
            <div class="row p-0">
                <div class="col-lg-9 col-12 p-0 m-auto">
                    <div class="row row2 p-0 m-lg-0 m-2">
                        <div class="col-lg-6 col-12 p-0 col-img position-relative">
                            <img class="w-100 h-100 object-fit-cover" src="<?= asset('images/banners/marca-nivea.png') ?>" alt="">
                                <div class="autoplay-progress" slot="container-start">
                                    <svg viewBox="0 0 48 48">
                                        <circle cx="24" cy="24" r="20"></circle>
                                    </svg>
                                    <span></span>
                                </div>
                        </div>
                        <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center flex-column p-lg-4 p-2 text-lg-start text-center">
                             <h2 class="h2 text-dark pb-2 w-100 ps-0-25" id="titulo">
                                titulo 1
                             </h2>
                             <p class="p" id="conteudo">
                             Texto para a primeira imagem!Texto para a primeira imagem!Texto para a primeira imagem!Texto para a primeira imagem!Texto para a primeira imagem!
                             </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="contato py-4" id="contato">
    <div class="container px-2 px-lg-0">
        <div class="row">
            <h2 class="w-100 text-center h2 text-light mb-4">Entre em contato</h2>
            <div class="col-12 bg-white p-1">
                <form action="">
                    <div class="d-lg-flex d-block">
                        <input type="text" class="form-select mb-1 mb-sm-0 m-sm-1" placeholder="Nome">
                        <input type="text" class="form-select mb-1 mb-sm-0 m-sm-1 mask-telefone" placeholder="Telefone">
                        <input type="email" class="form-select mb-1 mb-sm-0 m-sm-1" placeholder="E-mail">
                    </div>
                    <textarea class="form-select mb-1 mb-sm-0 m-sm-1" name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                    <div class="d-lg-flex d-block my-2 m-1 align-items-center">
                    <label class="checkbox-round mt-1">
                        <input type="checkbox">
                        <span class="checkmark mt-0-25"></span>
                        <p class="p ms-1">Li e aceito a <span>Política de privacidade</span> da Morbene distribuidora</p>
                    </label>
                        <button class="btn-outline-danger bg-light text-primary ms-lg-auto d-flex ml-auto">Entre em contato</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</main>