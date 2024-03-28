@extends('V1.Site.Stradie.defaults.template')

@section('content')
    <x-v1.site.sidebar />
    <section class="container-fluid section-one position-relative">
        <div class="container-content-section-one">
            <div class="container w-100 h-100 d-flex justify-content-center flex-column j-mobile-center">
                <h4 class="fw-300">Sua plataforma para</h4>
                <h1 class="display-2 lh-130 fw-600">comprar e vender<br>direitos creditórios</h1>
                <div class="d-flex mt-3">
                    <button type="button" class="btn btn-custom px-3 py-2">Entre em contato</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section-two pys-1 container">
        <div class="row align-items-center justify-content-center j-mobile-center">
            <div class="col-md-6">
                <p class="fs-4 m-0 m-sm-2">Grandes números para a Straddie.<strong> Resultados ainda maiores para
                        você</strong>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-center y-line secundary-color">
                <p class="display-1 lh-60 fw-600 m-0 mt-3 w-sm-75"><span
                        class="lh-xs-130 display-xs-1">+2.4B</span><br><span class="fs-4 fw-400">ativos judiciais
                        originados</span></p>
            </div>
        </div>
    </section>
    <section class="section-two pys-1 container-fluid bg-secundary-color">
        <div class="container primary-color my-2 mt-4">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-md-4 d-flex justify-content-start justify-content-md-center y-line align-items-center mb-5 mb-md-0">
                    <p class="display-2 lh-60 fw-600 me-3 display-xs-1">+120</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <p>parceiros<br> comerciais</p>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-start justify-content-md-center y-line align-items-center">
                    <p class="display-2 lh-60 fw-600 me-3 display-xs-1">+65</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <p>instituições financeiras<br> cadastradas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-tree pys-1 container-fluid bg-primary-color">
        <div class="container">
            <div class="row">
                <div class="col-md mb-4 mb-sm-0">
                    <img src="{{ Vite::asset('resources/icons/logo1.svg') }}" alt="" width="90%" height="90%"
                        style="object-fit: contain">
                </div>
                <div class="col-md">
                    <p>A revolução nas intermediações de direitos creditórios, ativos judiciais e ativos de baixa liquidez.
                        Isso é a Straddie Capital.</p>
                    <p>Um marketplace inovador altamente eficaz que promove o encontro entre compradores e vendedores.</p>
                    <p>Qualidades fundamentais para prover liquidez nas transações e soluções aos profissionais do ramo.</p>
                    <p class="fw-600">Tudo de forma simples e rápida. Afinal, Straddie é eficiência que gera resultado.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-four pys-1 secundary-color pb-0">
        <div class="container-fluid">
            <div class="container">
                <div class="row mb-4 text-center-mobile">
                    <div class="col-md p-4">
                        <h2 class="fw-600">Como funciona a<br>operação na Straddie?</h2>
                    </div>
                    <div class="col-md lh-150">
                        <p>Através de um processo estruturado, organizado e seguro você comercializa seu ativo com todo o
                            apoio de
                            especialistas e a garantia da Straddie.</p>
                    </div>
                </div>
            </div>
            <div class="container container-web">
                <div class="row">
                    <div class="col-md-3 card-custom">
                        <div class="p-4">
                            <h2>1º</h2>
                            <p>Inserção de documentos na plataforma;</p>
                        </div>
                    </div>
                    <div class="col-md-3 card-custom">
                        <div class="p-4">
                            <h2>2º</h2>
                            <p>Curadoria inicial dos títulos e atualização dos cálculos;</p>
                        </div>
                    </div>
                    <div class="col-md-3 card-custom">
                        <div class="p-4">
                            <h2>3º</h2>
                            <p>Assinatura de contrato de exclusividade entre cedente e Straddie;</p>
                        </div>
                    </div>
                    <div class="col-md-3 card-custom">
                        <div class="p-4">
                            <h2>4º</h2>
                            <p>Due Diligencie do título e inserção na plataforma;</p>
                        </div>
                    </div>
                    <div class="col-md-3 card-custom">
                        <div class="p-4">
                            <h2>5º</h2>
                            <p>Precificação e negociação entre partes;</p>
                        </div>
                    </div>
                    <div class="col-md-3 card-custom">
                        <div class="p-4">
                            <h2>6º</h2>
                            <p>Assinatura de contrato de compra e venda/assinatura de escritura pública;</p>
                        </div>
                    </div>
                    <div class="col-md-3 card-custom">
                        <div class="p-4">
                            <h2>7º</h2>
                            <p>Realização do pagamento via plataforma;</p>
                        </div>
                    </div>
                    <div class="col-md-3 card-custom">
                        <div class="p-4">
                            <h2>8º</h2>
                            <p>Conclusão de transferência de cessão de direito e liberação do pagamento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-mobile">
            <div id="base-padding">
                <div class="container-fluid">
                    <div class="container"></div>
                </div>
            </div>
            {{-- modelo para ajustar a margem --}}
            <!-- Slider main container -->
            <div class="swiper secundary-color" id="swiper-one" data-swippermargin>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card-custom">
                            <div class="p-4">
                                <h2 class="fw-bold fs-1">1º</h2>
                                <p class="content">Inserção de documentos na plataforma;</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-custom">
                            <div class="p-4 y-line-m">
                                <h2 class="fw-bold fs-1">2º</h2>
                                <p class="content">Curadoria inicial dos títulos e atualização dos cálculos;</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-custom">
                            <div class="p-4 y-line-m">
                                <h2 class="fw-bold fs-1">3º</h2>
                                <p class="content">Assinatura de contrato de exclusividade entre cedente e Straddie;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-five pys-1 container-fluid bg-secundary-color">
        <div class="container text-white">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <h2 class="fw-600 primary-color">Vendedor</h2>
                        <p class="text-center m-0 mt-3 mb-5 w-md-50">Mais que uma vitrine para seus ativos, <span
                                class="text-nowrap">
                                a Straddie é
                                segurança para
                                você.
                            </span></p>
                    </div>
                </div>
                <div class="col-md pb-4 pb-md-0">
                    <div class="card-pay p-4 p-md-5 h-100">
                        <p class="text-center">Venda seus ativos com uma série de vantagens exclusivas. De uma grande base
                            de compradores à seriedade e transparência nos processos, a plataforma oferece:</p>
                        <ul>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Acesso aos principais players do segmento</p>
                            </li>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Ambiente balcão de negociação seguro e formalizado</p>
                            </li>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Ausência de risco de crédito, uma vez que as transações são com intermédio e garantia da
                                    plataforma</p>
                            </li>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Acesso a múltiplas ofertas gerando liquidez no ativo</p>
                            </li>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Eliminação de intermediários indesejados</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pb-4 pb-md-0">
                    <div class="card-pay p-4 p-md-5 h-100">
                        <p class="text-center">Venda seus ativos com uma série de vantagens exclusivas. De uma grande base
                            de compradores à seriedade e transparência nos processos, a plataforma oferece:</p>
                        <ul>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Baixa base de compradores</p>
                            </li>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Negociações em ambiente informal</p>
                            </li>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Risco de crédito sem garantias para a operação</p>
                            </li>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Baixo número de ofertas no ativo</p>
                            </li>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Negociação realizada por intermediários nem sempre confiáveis</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-six pys-1 container-fluid bg-third-color">
        <div class="container text-white">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <h2 class="fw-600 primary-color">Comprador</h2>
                        <p class="text-center m-0 mt-3 mb-5 w-md-50">Straddie, as oportunidades têm algo a mais: <span
                                class="text-nowrap">credibilidade e exclusividade.</span></p>
                    </div>
                </div>
                <div class="col-md pb-4 pb-md-0">
                    <div class="card-pay h-100 p-4 p-md-5">
                        <p class="text-center">Utilizando nosso marketplace, quem busca a aquisição dos mais variados
                            ativos
                            conta com benefícios que só a Straddie pode oferecer:</p>
                        <ul>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Curadoria e due diligence dos ativos</p>
                            </li>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Negociação direta com cedentes dos créditos</p>
                            </li>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Ampla base de ativos para aquisição</p>
                            </li>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Maior eficiência na aquisição dos ativos e redução de custos com análise</p>
                            </li>
                            <li><i class="fas fa-check icon" style="color: #63e6be"></i>
                                <p>Ambiente seguro para negociações</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pb-4 pb-md-0">
                    <div class="card-pay h-100 p-4 p-md-5">
                        <p class="text-center">No mercado tradicional você encontra de tudo. Principalmente problemas:</p>
                        <ul>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Necessidade de realizar curadoria e due diligence dos ativos</p>
                            </li>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Negociação através de intermediários questionáveis</p>
                            </li>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Base de ativos para aquisição restrita</p>
                            </li>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Menor eficiência na aquisição dos ativos e aumento de custos com análise</p>
                            </li>
                            <li><i class="fas fa-times icon" style="color: red"></i>
                                <p>Ambiente informal e inseguro</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-seven pys-1 container secundary-color">
        <div class="row">
            <div class="col-md-4 mb-5 mb-sm-0">
                <div class="p-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ Vite::asset('resources/icons/users-plus.svg') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="text-black fs-4 fw-600 mb-3">Seja um parceiro comercial</h2>
                        <p class="fs-5">Seja um parceiro comercial da Straddie Capital. Aqui você pode indicar vendedores
                            e compradores. Cadastre-se e faça parte do nosso time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 mb-sm-0">
                <div class="p-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ Vite::asset('resources/icons/icon.svg') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="text-black fs-4 fw-600 mb-3">Seja um parceiro comercial</h2>
                        <p class="fs-5">Seja um parceiro comercial da Straddie Capital. Aqui você pode indicar vendedores
                            e compradores. Cadastre-se e faça parte do nosso time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 mb-sm-0">
                <div class="p-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ Vite::asset('resources/icons/icon1.svg') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h2 class="text-black fs-4 fw-600 mb-3">Seja um parceiro comercial</h2>
                        <p class="fs-5">Seja um parceiro comercial da Straddie Capital. Aqui você pode indicar vendedores
                            e compradores. Cadastre-se e faça parte do nosso time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-nine pys-1 container-fluid bg-third-color">
        <div class="container text-white">
            <div class="row flex-column justify-content-center align-items-center">
                <div class="col-md-10">
                    <h2 class="fw-600 mb-5">Perguntas Frequentes</h2>
                    <div class="container-draggable" id="questions">
                        <div class="dragable py-4">
                            <div class="d-flex justify-content-between" data-opendragable>
                                <h2 class="fs-5">O que a Stradie não faz?</h2>
                                <i class="fas fa-chevron-up"></i>
                            </div>
                            <div class="content">
                                <p class="fw-400 pt-4">Não atuamos com investidores pessoas físicas. Não somos uma empresa
                                    de consultoria jurídica.</p>
                            </div>
                        </div>
                        <div class="dragable py-4">
                            <div class="d-flex justify-content-between" data-opendragable>
                                <h2 class="fs-5">Como a Straddie é remunerada?</h2>
                                <i class="fas fa-chevron-up"></i>
                            </div>
                            <div class="content">
                                <p class="fw-400 pt-4">É preciso ter contrato de exclusividade com a Straddie?</p>
                            </div>
                        </div>
                        <div class="dragable py-4">
                            <div class="d-flex justify-content-between" data-opendragable>
                                <h2 class="fs-5">O que a Stradie não faz?</h2>
                                <i class="fas fa-chevron-up"></i>
                            </div>
                            <div class="content">
                                <p class="fw-400 pt-4">Não atuamos com investidores pessoas físicas. Não somos uma empresa
                                    de consultoria jurídica.</p>
                            </div>
                        </div>
                        <div class="dragable py-4">
                            <div class="d-flex justify-content-between" data-opendragable>
                                <h2 class="fs-5">Em quanto tempo recebo uma oferta pelo meu título?</h2>
                                <i class="fas fa-chevron-up"></i>
                            </div>
                            <div class="content">
                                <p class="fw-400 pt-4">Não atuamos com investidores pessoas físicas. Não somos uma empresa
                                    de consultoria jurídica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-ten section-ten position-relative text-black pys-2">
        <div class="container-content-section-ten">
            <div class="container w-100 d-flex justify-content-center flex-column">
                <div class="card-form p-5">
                    <h2 class="text-center mb-4">Formulário de cadastro</h2>
                    <form class="needs-validation" action="" id="form-register" action="{{ route('store') }}"
                        novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="inputName" class="form-label">Nome completo</label>
                                    <input type="text" class="form-control" id="inputName"
                                        aria-describedby="nameHelp" placeholder="Seu nome" name="name" data-toutlip
                                        required>
                                    <div class="tooltip-custom" role="tooltip">
                                        <div class="p-2">
                                            <p class="d-flex">Nome e sobrenome</p>
                                        </div>
                                        <div class="arrow"></div>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Forneça um nome e sobrenome válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputPhone" class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" id="inputPhone"
                                        placeholder="Seu telefone" name="phone" required data-toutlip>
                                    <div class="tooltip-custom" role="tooltip">
                                        <div class="p-2">
                                            <p class="d-flex">Telefone ex: (ddd) 9 0000-0000</p>
                                        </div>
                                        <div class="arrow"></div>
                                    </div>
                                    <div class="valid-feedback">
                                        Forneça um Telefone válido.
                                    </div>
                                    <div class="invalid-feedback">
                                        Forneça um Telefone válido.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Seu e-mail"
                                        name="email" data-toutlip required>
                                    <div class="tooltip-custom" role="tooltip">
                                        <div class="p-2">
                                            <p class="d-flex">Email ex: xxxxxxxxxx@gmail.com</p>
                                        </div>
                                        <div class="arrow"></div>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputAtivo_1" class="form-label">Categoria cliente</label>
                                    <input type="text" class="form-control" id="inputAtivo_1" placeholder="Selecione"
                                        name="active_one" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column">
                                <div class="mb-3">
                                    <label for="inputAtivo_2" class="form-label">Ativo disponível</label>
                                    <input type="text" class="form-control" id="inputAtivo_2"
                                        placeholder="Ativo disponível" name="active_two" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="mb-3 d-flex flex-column" style="flex: 1">
                                    <label for="inputFeedBack" class="form-label">Mensagem</label>
                                    <textarea type="text" class="form-control" id="inputFeedBack" rows="8" placeholder=""
                                        style="resize: none;flex: 1" name="message" required></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <button type="submit" class="btn btn-custom-nav px-4 w-100 w-md-50" data-toutlip>
                                Enviar formulário
                                <div class="spinner-border text-light spinner-grow-sm ms-2 spiner-primary-color"
                                    style="display: none" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>
                            <div class="tooltip-custom" role="tooltip">
                                My tooltip with more content
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="section-nine pys-1 container-fluid bg-secundary-color">
        <div class="container primary-color">
            <div class="row">
                <div class="col-md-2 align-self-start ajust-container-mobile-logo-2 pb-5 pb-md-0">
                    <img src="{{ Vite::asset('resources/icons/logo2.svg') }}" alt="" width="80%"
                        height="80%" style="object-fit: contain">
                </div>
                <div class="col-md-3">
                    <p>Straddie</p>
                    <p>Sobre</p>
                    <p>Diferenciais</p>
                    <p>Seja parceiro</p>
                    <p>Perguntas Frequentes</p>
                </div>
                <div class="col-md-4">
                    <p class="fw-600">Contato</p>
                    <div class="d-flex">
                        <img src="{{ Vite::asset('resources/icons/phone.svg') }}" alt="" class="icopn-footer">
                        <p>+55 1234-5678</p>
                    </div>
                    <div class="d-flex">
                        <img src="{{ Vite::asset('resources/icons/mail.svg') }}" alt="" class="icopn-footer">
                        <p>contato@straddiecapital.com.br</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <p class="fw-600">Rede Social</p>
                    <p class="d-flex">
                        <img src="{{ Vite::asset('resources/icons/linkedin.svg') }}" alt="" class="icon-fs-p">
                        straddiecapital
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
