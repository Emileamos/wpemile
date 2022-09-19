<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="layout Auriz Barreira">
        <meta name="author" content="Emile">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>css/style.css">
        <title>Página inicial</title>
        <script src="<?php bloginfo(template_url); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <figure>
                <!-- imagem logo -->
                <img src="imagens/logo.png" alt="logo" id="logo_img">
            </figure>
        </header>
        <main>
            <section>
                <div class="container bg-light">
                    
                    <div class="col bg-light">
                        <h1>
                            <mark>
                                Registro de marca e o seu acompanhamento completo até o deferimento em 12 x de R$173,00 no cartão
                            </mark>
                        </h1>
                        <br>
                        <p>
                            Sem surpresas e taxas escondidas no meio do caminho.
                        </p>
                        <br>
                        <h2>
                            <mark>
                                condição especial por tempo limitado
                            </mark>
                        </h2>
                        <br>
                        <h3>
                            <mark>Faça agora a sua pesquisa grátis com a gente</mark>
                        e tenha mais chances de aprovar a sua marca no INPI! Registre e fique seguro.
                        </h3>
                        <br>
                        <p>
                            Fale conosco e ajudamos você a garantir o seu patrimônio com o nosso acompanhamento completo feito por especialistas.
                        </p>
                        <br>
                        <a href="#footer">Veja mais</a>
                    </div>
                    <div class="col bg-light">
                        <form class="form-box">
                            <p id="form_text">
                                <b>Ganhe a pesquisa prévia da sua marca grátis!</b> Basta preencher o cadastro.
                            </p>
                            <br>
                            <div class="input-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" placeholder="Nome" required>
                            </div>
                            <div class="input-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" placeholder="E-mail" required>
                            </div>
                            <div class="input-group">
                                <label for="telefone">Telefone</label>
                                <input type="tel" id="telefone" placeholder="Telefone" required>
                            </div>
                            <div class="input-group">
                                <button>QUERO A PESQUISA GRÁTIS</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="container">
                <article id="grid_container" class="grid-container">
                    <article class="grid-text">
                        <figure>
                            <img src="imagens/marca.jpg" alt="marca" id="conteudo">
                        </figure>
                        <br>
                        <h3>Marca</h3>
                        <br>
                        <p>
                            Marca, segundo a lei brasileira, é todo sinal distintivo, visualmente perceptível, que identifica e distingue produtos e serviços, bem como certifica a conformidade dos mesmos com determinadas normas ou especificações técnicas.
                            <br><br>
                            A marca registrada garante ao seu proprietário o direito de uso exclusivo no território nacional em seu ramo de atividade econômica.
                            <br><br>
                            Ao mesmo tempo, sua percepção pelo consumidor pode resultar em agregação de valor aos produtos ou serviços.(Fonte: INPI)
                        </p>
                    </article>
                    <article class="grid-text">
                        <figure>
                            <img src="imagens/patentes.jpg" alt="patentes">
                        </figure>
                        <br>
                        <h3>Patentes</h3>
                        <br>
                        <p>
                            Patente é um título de propriedade temporária sobre uma invenção ou modelo de utilidade, outorgado pelo Estado aos inventores ou autores ou outras pessoas físicas ou jurídicas detentoras de direitos sobre a criação.
                            <br><br>
                            Em contrapartida, o inventor se obriga a revelar detalhadamente todo o conteúdo técnico da matéria protegida pela patente.(Fonte: INPI)
                        </p>
                    </article>
                    <article class="grid-text">
                        <figure>
                            <img src="imagens/da.jpg" alt="direito autoral">
                        </figure>
                        <br>
                        <h3>Direito Autoral</h3>
                        <br>
                        <p>
                            Registro de proteção ao direito de autor de obras artísticas, literárias, musicais e cinematográficas junto a Escola de Belas Artes, Biblioteca Nacional, Escola de Música e consultas ao Conselho Nacional de Direitos Autorais - CNDA.
                        </p>
                    </article>
                    <article class="grid-text">
                        <figure>
                            <img src="imagens/pgdc.jpg" alt="programa de computador">
                        </figure>
                        <br>
                        <h3>Programa de Computador</h3>
                        <br>
                        <p>
                            O regime jurídico para a proteção aos Programas de Computador é o do Direito do Autor, disciplinado pela Lei de Software e, subsidiariamente, pela Lei de Direito Autoral.
                            <br><br>
                            A validade dos direitos para quem desenvolve um Programa de Computador é de 50 (cinquenta) anos, contados a partir de 1º de janeiro do ano subsequente ao da sua publicação ou, na ausência desta, da sua criação. (Fonte:INPI)
                        </p>
                    </article>
                    <article class="grid-text">
                        <figure>
                            <img src="imagens/di.jpg" alt="desenho industrial">
                        </figure>
                        <br>
                        <h3>Desenho Industrial</h3>
                        <br>
                        <p>
                            Além de proteger os seus ativos, é possível que você queira licenciá-los para uma empresa, ou então obter uma licença para impulsionar seu negócio.
                            <br><br>
                            Para que essas transações sejam seguras e permitam até o envio de royalties para o exterior, existem contratos que devem ser averbados/registrados no INPI.
                            <br><br>
                            Os contratos incluem desde licenciamento de patentes, desenhos industriais e uso de marca até assistência técnica e know-how.
                            <br><br>
                            Sem contar as franquias, cujo registro, embora seja opcional, garante um acordo seguro e confere validade perante terceiros. (Fonte:INPI)
                        </p>
                    </article>
                    <article class="grid-text">
                        <figure>
                            <img src="imagens/cdt.jpg" alt="contratos de tecnologia">
                        </figure>
                        <br>
                        <h3>Contratos de Tecnologia</h3>
                        <br>
                        <p>
                            Além de proteger os seus ativos, é possível que você queira licenciá-los para uma empresa. Ou então obter uma licença para impulsionar seu negócio.
                            Para que essas transações sejam seguras e permitam até o envio de royalties para o exterior, existem contratos que devem ser averbados/registrados no INPI.
                            Os contratos incluem desde licenciamento de patentes, desenhos industriais e uso de marca até assistência técnica e know-how.
                            Sem contar as franquias, cujo registro, embora seja opcional, garante um acordo seguro e confere validade perante terceiros. (Fonte:INPI)
                        </p>
                    </article>
                </article>
            </section>
        </main>
                <?php wp_footer(); ?>
    </body>
    <footer id="footer">
        <div class="container-fluid">
            <figure>
                <img src="imagens/logo_p.png" alt="logo" id="logo_imagem">
            </figure>
            <br>
            <hr>
            <div>
                <p id="text_inicial">
                    <br>
                    Rua Visconde de Mauá, 2151, Aldeota CEP 60125-161 Fortaleza - CE Brasil
                    <br>
                    Tel: 55 85 3261.6636 | Whatsapp:85 98800.0141 | escritorio@aurizbarreira.com.br
                </p>
            </div>
            <figure class="social_midia">
                <a href="https://api.whatsapp.com/send?phone=5585988000141"><img src="imagens/whatsapp.png" alt="whatsapp" id="logo_img"></a>
                <a href="https://m.facebook.com/aurizbarreiramarcasepatentes/"><img src="imagens/facebook.png" alt="facebook" id="logo_img"></a>
                <a href="https://www.instagram.com/Aurizbarreiramarcasepatentes/"><img src="imagens/instagram.png" alt="instagam" id="logo_img"></a>
                <a href="https://static.wixstatic.com/media/6ea5b4a88f0b4f9….01,enc_auto/6ea5b4a88f0b4f91945b40499aa0af00.png"><img src="imagens/linkdin.png" alt="linkdin" id="logo_img"></a>
            </figure>
            <div class="container-sm">
                <p id="text_final">
                    &copy;2022 Auriz Barreira. Todos os direitos reservados
                </p>
            </div>
        </footer>
    </html>