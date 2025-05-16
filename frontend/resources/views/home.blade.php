@extends('layouts.main')

@section('title', 'Bit Criativo | Empresa especializada em desenvolvimento de software')

@section('content')
<main class="container">
    <h1 class="sr-only">Bit Criativo</h1>
    <!-- HERO START -->
    <section id="inicio" class="row mt-5 mt-sm-0 section">
        <div class="col-12 col-md-6 hero__call-to-action">
            <h2 class="display">Seu Site Profissional Começa <span class="text-primary">Aqui</span></h2>
            <p class="text">A Bit Criativo cria sites modernos, rápidos e responsivos. Impressione seus clientes e conquiste mais
                vendas com tecnologia de verdade.</p>
            <a href="#servicos" class="btn btn-primary">Comece Agora</a>
        </div>
        <div class="col-12 col-md-6">
            <div class="hero__image">
                <img class="hero__image--1" src="{{ asset('assets/images/hero_1.png') }}" />
                <img class="hero__image--2" src="{{ asset('assets/images/hero_2.png') }}" />
            </div>
        </div>
        <div class="section__label">Tecnologia</div>
    </section>
    <!-- HERO END -->

    <!-- ABOUT US START -->
    <section id="sobre-nos" class="section row section__about-us mt-5">
        <div class="col-12 col-md-6">
            <h2 class="display">Sobre a Bit Criativo</h2>
            <p class="text">Somos uma equipe apaixonada por tecnologia e design, dedicada a ajudar pequenas e médias empresas a
                crescer no digital. Acreditamos que inovação não precisa ser cara — precisa ser inteligente.</p>
            <a href="#contato" class="btn btn-outline">Fale Conosco</a>
        </div>
        <div class="col-12 col-md-6 mt-3 mt-md-0">
            <img class="section__about-us__img" src="{{ asset('assets/images/about_us.png') }}" />
        </div>
        <div class="section__label">Sobre nós</div>
    </section>
    <!-- ABOUT US END -->

    <!-- FEATURES START -->
    <section class="section mt-5">
        <div class="m-auto">
            <div class="row text-center">
                <h2 class="display">Por que escolher nosso <span class="text-primary">desenvolvimento web?</span></h2>
                <p class="text--large">Criamos sites e lojas virtuais que geram resultados de verdade — com performance, design e
                estratégia.</p>
            </div>
            <div class="row">
            <!--Card Feature Start-->
            <div class="col-12 col-md-6 my-3 my-md-5">
                <div class="d-flex">
                    <i class="ph ph-check-circle card-features__icon"></i>
                    <div>
                        <div class="card-features__title">Design que Converte</div>
                        <div class="card-features__description">
                            Layouts modernos, responsivos e centrados na experiência do usuário para aumentar suas vendas e gerar
                            confiança instantânea.
                        </div>
                    </div>
                </div>
            </div>
            <!--Card Feature Start-->
            <div class="col-12 col-md-6 my-3 my-md-5">
                <div class="d-flex">
                    <i class="ph ph-check-circle card-features__icon"></i>
                    <div>
                        <div class="card-features__title">Performance Otimizada</div>
                        <div class="card-features__description">
                            Sites rápidos, leves e otimizados para mecanismos de busca (SEO), aumentando sua visibilidade e retenção
                            de usuários.
                        </div>
                    </div>
                </div>
            </div>
            <!--Card Feature Start-->
            <div class="col-12 col-md-6 my-3 my-md-5">
                <div class="d-flex">
                    <i class="ph ph-check-circle card-features__icon"></i>
                    <div>
                        <div class="card-features__title">E-commerce Sob Medida</div>
                        <div class="card-features__description">
                            Desenvolvemos lojas virtuais personalizadas, com gestão simples, integrações com meios de pagamento e foco
                            total na conversão.
                        </div>
                    </div>
                </div>
            </div>
            <!--Card Feature Start-->
            <div class="col-12 col-md-6 my-3 my-md-5">
                <div class="d-flex">
                    <i class="ph ph-check-circle card-features__icon"></i>
                    <div>
                        <div class="card-features__title">Segurança e Suporte</div>
                        <div class="card-features__description">
                            Seus dados e os de seus clientes protegidos com certificados SSL, backups automáticos e suporte técnico
                            sempre que precisar.
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="section__label">Benefícios</div>
        </div>
    </section>
    <!-- FEATURES END -->

    <!-- PORTFOLIO START -->
    <section class="section mt-5">
        <div>
            <div class="row section__portfolio">
                <h2 class="display">Nosso <span class="text-primary">Portfólio</span></h2>
                <p class="text--large">
                    Cada projeto que desenvolvemos é pensado para gerar resultados reais. Confira alguns dos nossos trabalhos e veja
                    como podemos transformar a presença digital da sua empresa com sites modernos, rápidos e eficazes.
                </p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!--CARD PORTFOLIO START-->
                    <div class="card card--portfolio mx-auto my-3" style="width: 18rem; height: 100%;">
                        <img src="{{ asset('assets/images/under_construction.png') }}" class="card-img-top" alt="Projeto em construção">
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title">Em breve: Site Institucional</h5>
                                <p class="card-text">Desenvolvimento de site moderno, responsivo e otimizado para conversão e autoridade
                                    digital.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-card--portfolio d-none">Visualizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!--CARD PORTFOLIO START-->
                    <div class="card card--portfolio mx-auto my-3" style="width: 18rem; height: 100%;">
                        <img src="{{ asset('assets/images/under_construction.png') }}" class="card-img-top" alt="Projeto em construção">
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title">Em breve: Loja Virtual</h5>
                                <p class="card-text">Plataforma de e-commerce completa, com integração a pagamentos, frete automático e
                                    painel de controle.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-card--portfolio d-none">Visualizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!--CARD PORTFOLIO START-->
                    <div class="card card--portfolio mx-auto my-3" style="width: 18rem; height: 100%;">
                        <img src="{{ asset('assets/images/under_construction.png') }}" class="card-img-top" alt="Projeto em construção">
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title">Em breve: Landing Page</h5>
                                <p class="card-text">Página de captura de leads com foco em campanhas de tráfego pago e conversão de
                                visitantes.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-card--portfolio d-none">Visualizar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5 d-none">
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-outline">Ver Mais</button>
                </div>
            </div>
            <div class="section__label">Portfólio</div>
        </div>
    </section>
    <!-- PORTFOLIO END -->

    <!-- SERVICES START -->
    <section id="servicos" class="section mt-5">
        <div>
            <div class="section__header">
                <h2 class="display">Nossos <span class="text-primary">Serviços</span></h2>
                <p class="text--large">Soluções digitais personalizadas para alavancar o seu negócio online.</p>
            </div>
            <div class="row">
                <!-- CARD: Desenvolvimento de Sites -->
                <div class="col-12 col-md-6 col-xl-4 my-3">
                    <div class="card mx-auto" style="width: 24rem; height: 100%;">
                        <i class="ph ph-globe card-icon"></i>
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title text--large-bold">Desenvolvimento de Sites</h5>
                                <p class="text--small">
                                <span class="text--bold">Sites personalizados para seu negócio</span>
                                <br />
                                Criamos sites modernos, responsivos e otimizados para resultados. Com foco em experiência do usuário
                                (UX) e SEO, garantimos que seu site seja não só bonito, mas também eficaz na conversão de visitantes em
                                clientes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD: Desenvolvimento de E-commerce -->
                <div class="col-12 col-md-6 col-xl-4 my-3">
                    <div class="card mx-auto" style="width: 24rem; height: 100%;">
                        <i class="ph ph-bag card-icon"></i>
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title text--large-bold">Desenvolvimento de E-commerce</h5>
                                <p class="text--small">
                                <span class="text--bold">Sua loja online pronta para vender</span>
                                <br />
                                Construímos e comissionamos e-commerces com a melhor tecnologia para garantir que sua loja seja fácil de
                                navegar, segura e escalável. Ajudamos você a expandir suas vendas com sistemas de pagamento, integração
                                de estoque e recursos avançados de gerenciamento.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD: Desenvolvimento de Landing Pages -->
                <div class="col-12 col-md-6 col-xl-4 my-3">
                    <div class="card mx-auto" style="width: 24rem; height: 100%;">
                        <i class="ph ph-pyramid card-icon"></i>
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title text--large-bold">Desenvolvimento de Landing Pages</h5>
                                <p class="text--small">
                                <span class="text--bold">Landing Pages para maximizar conversões</span>
                                <br />
                                    Criamos landing pages de alta conversão, totalmente focadas no seu objetivo de marketing. Seja para
                                    capturar leads, promover um produto ou realizar uma oferta exclusiva, nossas páginas são feitas para
                                    aumentar os resultados da sua campanha.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD: Gestão de Projetos Digitais -->
                <div class="col-12 col-md-6 col-xl-4 my-3">
                    <div class="card mx-auto" style="width: 24rem; height: 100%;">
                        <i class="ph ph-checks card-icon"></i>
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title text--large-bold">Gestão de Projetos Digitais</h5>
                                <p class="text--small">
                                    <span class="text--bold">Acompanhamento completo do seu projeto</span>
                                    <br />
                                    Oferecemos uma gestão estratégica e operacional de projetos digitais. Acompanhamos todas as etapas do
                                    seu projeto, garantindo a execução dentro dos prazos, com qualidade e alinhado aos objetivos de negócio.
                                    Desde o planejamento até a entrega final, estamos ao seu lado em cada fase.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD: Otimização e Performance de Sites -->
                <div class="col-12 col-md-6 col-xl-4 my-3">
                    <div class="card mx-auto" style="width: 24rem; height: 100%;">
                        <i class="ph ph-speedometer card-icon"></i>
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title text--large-bold">Otimização e Performance de Sites</h5>
                                <p class="text--small">
                                    <span class="text--bold">Melhore a performance do seu site</span>
                                    <br />
                                    Garantimos que o seu site funcione de maneira rápida e eficiente, com otimização para velocidade,
                                    desempenho e usabilidade. Melhoramos o tempo de carregamento e a navegação para proporcionar uma melhor
                                    experiência para os usuários e aumentar a taxa de conversão.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD: Suporte e Manutenção de Sites -->
                <div class="col-12 col-md-6 col-xl-4 my-3">
                    <div class="card mx-auto" style="width: 24rem; height: 100%;">
                        <i class="ph ph-wrench card-icon"></i>
                        <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <h5 class="card-title text--large-bold">Suporte e Manutenção de Sites</h5>
                                <p class="text--small">
                                    <span class="text--bold">Traga tranquilidade para o seu negócio</span>
                                    <br />
                                    Oferecemos suporte contínuo e manutenção para garantir que o seu site ou e-commerce esteja sempre
                                    atualizado, seguro e funcionando perfeitamente. Cuidamos de backups, atualizações e problemas técnicos
                                    para que você possa focar no que realmente importa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__label">Nossos Serviços</div>
        </div>
    </section>
    <!-- SERVICES END -->

    <!--TESTIMONIAL START-->
    <section class="section mt-5">
        <div>
            <div class="row section__header">
                <h2 class="display">O que dizem <span class="text-primary">sobre nós</span></h2>
                <p class="text--large">Empreendedores que confiaram na nossa equipe de TI e agora colhem os resultados. Veja como
                    ajudamos negócios como o seu a crescer com tecnologia acessível e eficiente.</p>
            </div>
            <div class="row my-5">
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <!--TESTIMONIAL START-->
                    <div class="card mx-auto" style="width: 25rem;">
                        <div class="card-body">
                            <p class="text">
                                <span class="text--large">"</span> Estávamos com um site desatualizado e sem presença digital. A equipe da
                                Bit Criativo redesenhou nosso site, e agora estamos recebendo mais visitantes e gerando mais vendas. <span
                                class="text--large">"</span>
                            </p>
                            <div class="card-info">
                                <div class="card-rate">
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                </div>
                                <div>
                                    <span class="card-info-client">Marcos Silva</span>
                                    <span class="card-info-profession">CEO da Loja Digital</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <!--TESTIMONIAL START-->
                    <div class="card mx-auto" style="width: 25rem;">
                        <div class="card-body">
                            <p class="text">
                                <span class="text--large">"</span> A Bit Criativo nos ajudou a lançar nossa loja online de forma rápida e
                                eficiente. Agora, conseguimos atender clientes em todo o Brasil com um sistema de e-commerce robusto e
                                fácil de usar. <span class="text--large">"</span>
                            </p>
                            <div class="card-info">
                                <div class="card-rate">
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                </div>
                                <div>
                                    <span class="card-info-client">Claudia Mendes</span>
                                    <span class="card-info-profession">Fundadora da loja online ShopTech</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <!--TESTIMONIAL START-->
                    <div class="card mx-auto" style="width: 25rem;">
                        <div class="card-body">
                            <p class="text">
                                <span class="text--large">"</span> Trabalhamos com a Bit Criativo para melhorar nossa presença digital.
                                Eles desenvolveram uma landing page de alta conversão que ajudou a aumentar nossa base de leads em 50%.
                                <span class="text--large">"</span>
                            </p>
                            <div class="card-info">
                                <div class="card-rate">
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                    <i class="ph ph-star"></i>
                                </div>
                                <div>
                                    <span class="card-info-client">Lucas Almeida</span>
                                    <span class="card-info-profession">Co-fundador da Agência WebLab</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__label">Depoimentos</div>
        </div>
    </section>
    <!--TESTIMONIAL END-->

    <!-- FORM CONTACT START -->
    <section id="contato" class="my-5 section" >
        <div>
            <div class="row section__header">
                <h2 class="display">Fale <span class="text-primary">Conosco</span></h2>
                <p class="text--large">Tem alguma dúvida ou quer saber mais sobre nossos serviços? Preencha o formulário abaixo e
                entraremos em contato!</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    @if(session('form_contact_success'))
                        <div class="alert alert-success">
                            {{ session('form_contact_success') }}
                        </div>
                    @endif

                    @if(session('form_contact_error'))
                        <div class="alert alert-danger">
                            {{ session('form_contact_error') }}
                        </div>
                    @endif
                    <form action="{{ route("forms.contact.submit") }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text--small">Nome</label>
                            <input name="name" value="{{ old('name') }}" id="input-contact-name" type="text" class="form-control input" placeholder="Seu nome">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text--small">Telefone</label>
                            <input name="phone_number" value="{{ old('phone_number') }}" id="input-contact-phone-number" type="text" class="form-control input-phone-number-mask" placeholder="(99) 99999-9999">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text--small">Email</label>
                            <input name="email" value="{{ old('email') }}" id="input-contact-email" type="email" class="form-control" placeholder="exemplo@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text--small">Mensagem</label>
                            <textarea name="message" value="{{ old('message') }}" id="input-contact-message" class="form-control" rows="3"
                                placeholder="Sua mensagem ..."></textarea>
                        </div>
                        <button id="btn-contact-submit" class="btn btn-primary newsletter__btn" type="submit">
                            Enviar
                            <span class="icon-spinner mx-2 d-none"></span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="section__label">Contato</div>
        </div>
    </section>
    <!-- FORM CONTACT END -->
</main>
@endsection
