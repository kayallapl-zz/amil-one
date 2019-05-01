<?php
/**
* The main template file
*/

get_header();
?>
    <header>
        <nav class="navbar">
            <div class="wrapper">
                <a href="http://planodesaudeamilone.com"><img src="http://planodesaudeamilone.com/wp-content/uploads/2019/04/logo.png" class="logo" alt="logo Amil One"></a>
                <ul class="menu">
                    <li class="menu-item"><a href="#sobre">Sobre a Amil One</a></li>
                    <li class="menu-item"><a href="#diferenciais">Diferenciais</a></li>
                    <li class="menu-item"><a href="#beneficios">Benefícios Exclusivos</a></li>
                    <li class="menu-item"><a href="#contato">Fale Conosco</a></li>
                </ul>
            </div>
        </nav>
        <nav class="navbar-responsive">
            <div class="wrapper">
                <a href="http://planodesaudeamilone.com"><img src="http://planodesaudeamilone.com/wp-content/uploads/2019/04/logo.png" class="logo" alt="logo Amil One"></a>
                <div class="hamburger" onclick="myFunction()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <ul class="menu" id="menuToggle">
                <li class="menu-item"><a href="#sobre">Sobre a Amil One</a></li>
                <li class="menu-item"><a href="#diferenciais">Diferenciais</a></li>
                <li class="menu-item"><a href="#beneficios">Benefícios Exclusivos</a></li>
                <li class="menu-item"><a href="#contato">Fale Conosco</a></li>
            </ul>
        </nav>
        <div class="intro">
            <div class="wrapper">
                <div class="form-card">
                    <p class="form-card-title">Simulação Online</p>
                    <?php echo do_shortcode( '[contact-form-7 id="22" title="Formulário"]' ); ?>
                </div>
                <div class="header-text-1">
                    <h1>Amil One</h1>
                    <p>O Plano <i>Premium</i> da<br>
                    Amil pra você <b>viver</b><br>
                    o seu <b>melhor</b>.</p>
                </div>
                <div class="header-text-2">
                    <p>O melhor <b>Plano</b><br>
                    de Saúde para <b>você</b><br>
                    e sua <b>família!</b></p>
                </div>
            </div>
        </div>
    </header>
    <section id="sobre">
        <div class="wrapper">
            <div class="content">
                <h1 class="content-title">Amil One</h1>
                <p class="content-paragraph">
                    Líder do segmento, a Amil One oferece o que há de mais sofisticado em planos médicos para um público que quer sempre
                    o melhor. São planos que unem conveniência a exclusividade em atendimento moderno e ideal para você ter o cuidado
                    certo, na hora certa e no lugar certo, para você viver o seu melhor.
                </p>
                <p class="content-paragraph">
                    O Plano médico premium da Amil conta com produtos de abrangência nacional, combinando a mais alta tecnologia e
                    qualidade.
                </p>
                <p class="content-paragraph">
                    A Amil One é a solução perfeita para clientes que possuem um alto nível de exigência e que apreciam um serviço
                    exclusivo.
                </p>
            </div>
        </div>
    </section>
    <section id="redecredenciada">
        <div class="wrapper">
            <div class="content">
                <p class="content-title">Rede Credenciada</p>
                <p class="content-paragraph">
                    A Amil se preocupa em selecionar criteriosamente a sua rede credenciada. Por isso, todos os clientes possuem acesso a
                    serviços com médicos renomados e referências no segmento de atuação, trazendo mais tranquilidade e garantia de serviços
                    exclusivos para todos os seus beneficiários.
                </p>
                <p class="content-paragraph">
                    Os clientes Amil One podem contar com alguns dos melhores especialistas do país, sempre à sua disposição em hospitais,
                    laboratórios e clínicas, em todo território nacional.
                </p>
            </div>
        </div>
    </section>
    <section id="diferenciais">
        <div class="wrapper">
            <div class="content">
                <h1 class="content-title">Diferenciais</h1>
                <div class="cards">
                    <div class="card">
                        <img src="http://planodesaudeamilone.com/wp-content/uploads/2019/04/icon-place.png" alt="Icon Retaguarda">
                        <p class="card-title">Retaguarda Completa</p>
                        <p class="card-paragraph">A linha de produtos Black tem como diferencial o corpo clínico que compõe a retaguarda dos hospitais Albert Einstein e
                        Sírio Libanês. Oferecer esse diferencial é traduzir todo o cuidado e o carinho que temos com nosso cliente.</p>
                    </div>
                    <div class="card">
                        <img src="http://planodesaudeamilone.com/wp-content/uploads/2019/04/icon-hand.png" alt="Icon Reembolso">
                        <p class="card-title">Reembolso</p>
                        <p class="card-paragraph">Reembolsos de forma 100% digital para consultas médicas de até R$1.200,00, com aprovação em 24h. Os comprovantes poderão
                        ser enviados por link (da nota fiscal eletrônica) ou em anexo.</p>
                    </div>
                    <div class="card">
                        <img src="http://planodesaudeamilone.com/wp-content/uploads/2019/04/icon-heart.png" alt="Icon Transplante">
                        <p class="card-title">Transplante além do RoI</p>
                        <p class="card-paragraph">Ampla cobertura para transplantes. Além dos recomendados pela ANS (medula, rins e córneas), cobrimos também os
                        transplantes de fígado, pâncreas, coração e pulmão.</p>
                    </div>
                    <div class="card">
                        <img src="http://planodesaudeamilone.com/wp-content/uploads/2019/04/icon-heli.png" alt="Icon Resgate">
                        <p class="card-title">Amil Resgate</p>
                        <p class="card-paragraph">Sistema completo de transporte inter-hospitalar que conta com unidades que são verdadeiras UTI’s móveis. (Ambulâncias,
                        helicópteros e jatos aparelhados com a mais avançada tecnologia médica).</p>
                    </div>
                    <div class="card">
                        <img src="http://planodesaudeamilone.com/wp-content/uploads/2019/04/icon-paper.png" alt="Icon Check-Up">
                        <p class="card-title">Check-Up Anual</p>
                        <p class="card-paragraph">Cobertura anual para o titular e dependentes com mais de 30 anos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="beneficios">
        <div class="wrapper">
            <div class="content">
                <p class="content-title"><span>Seguro Viagem</span><br>Internacional</p>
                <p class="content-paragraph">
                    Cobertura para urgência e emergência médica e odontológica no exterior;<br>
                    Cobertura para acidentes decorrentes de práticas esportivas;<br>
                    Permanência de 180 dias.<br>
                    <i class="fas fa-plus"></i><br>
                    Auxílio financeiro para extravio de bagagem;<br>
                    Acompanhamento no embarque de menores;<br>
                    Assessoria empresarial, cultural e turística.<br>
                </p>
            </div>
        </div>
    </section>
    <section id="coachsaude">
        <div class="wrapper">
            <div class="content">
                <p class="content-title">Coach em Saúde</p>
                <p class="content-subtitle">Uma equipe de especialistas em saúde.</p>
                <img src="http://planodesaudeamilone.com/wp-content/uploads/2019/04/coach-saude.png" alt="Coach Saúde">
            </div>
        </div>
    </section>
    <section id="embaixadas">
        <div class="wrapper">
            <div class="content">
                <p class="content-title">Embaixadas Amil One</p>
                <p class="content-subtitle">Deixe que a Amil One cuide de todo o procedimento administrativo para você.</p>
                <div class="cards">
                    <div class="card">
                        <p class="card-title">Hospital Albert Einstein - São Paulo</p>
                        <p class="card-paragraph">
                            Av. Albert Einstein, 627 - Bloco A - São Paulo<br>
                            Atendimento 24 horas.
                        </p>
                    </div>
                    <div class="card">
                        <p class="card-title">Hospital Santa Cruz - Paraná</p>
                        <p class="card-paragraph">
                            Av. do Baatel, 1.889 - Batel - Curitiba<br>
                            Atendimento no horário comercial:<br>
                            De segunda-feira a quinta-feira - das 8h às 18h;<br>
                            Sexta-feira - das 8h às 17h.
                        </p>
                    </div>
                    <div class="card">
                        <p class="card-title">Hospital Sírio-Libanês - São Paulo</p>
                        <p class="card-paragraph">
                            R.Dona Adma Jafet, 91 - Térreo - São Paulo<br>
                            Atendimento no horário comercial:<br>
                            De segunda-feira a quinta-feira - das 8h às 18h;<br>
                            Sexta-feira - das 8h às 17h.
                        </p>
                    </div>
                    <div class="card">
                        <p class="card-title">Hospital Mater Dei - Minas Gerais</p>
                        <p class="card-paragraph">
                            Av. do Contorno, 9.000 - Barro Preto - Belo Horizonte<br>
                            Atendimento no horário comercial:<br>
                            De segunda-feira a quinta-feira - das 8h às 18h;<br>
                            Sexta-feira - das 8h às 17h.
                        </p>
                    </div>
                    <div class="card">                            
                        <p class="card-title">Edifício Total Care - Distrito Federal</p>
                        <p class="card-paragraph">
                            Setor Hoteleiro Sul - Quadra 4 - Brasília<br>
                            Atendimento no horário comercial:<br>
                            De segunda-feira a quinta-feira - das 8h às 18h;<br>
                            Sexta-feira - das 8h às 17h.
                        </p>
                    </div>
                    <div class="card">
                        <p class="card-title"><span>NOVA</span> Hospital Samaritano - Rio de Janeiro</p>
                        <p class="card-paragraph">
                            Endereço: Rua Bambina, 98 - Botafogo - Rio de Janeiro<br>
                            Atendimento no horário comercial:<br>
                            De segunda-feira a sexta-feira - das 8h às 17h.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aplicativo">
        <div class="wrapper">
            <div class="content">
                <p class="content-title">Aplicativo Amil Saúde</p>
                <p class="content-subtitle">
                    Uma agência de atendimento portátil que trabalha para sua comodidade 7 dias por semana, 24h por dia, em tablets e
                    smartphones, nas plataformas Android e iOS.
                </p>
            </div>
        </div>
    </section>

<?php
get_footer();