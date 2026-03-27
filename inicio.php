<?php include $_SERVER["DOCUMENT_ROOT"] . "/includes/php/menu.php"; ?>

<main>
 <div id="carouselSlidesOnly" class="carousel carousel-fade slide" data-bs-ride="carousel" data-bs-interval="15000">
  <div class="carousel-inner">
   <div class="carousel-item active">
    <?php banner("/imagens/banners/banner-home-1.mp4", "Aprender no<br />Século XXI", 2); ?>
   </div>
   <div class="carousel-item">
    <?php banner("/imagens/banners/banner-home-2.mp4", "É ter Liberdade<br />para Escolher", 2); ?>
   </div>
   <div class="carousel-item">
    <?php banner("/imagens/banners/banner-home-3.mp4", "Porque o Saber<br />está no Mundo", 2); ?>
   </div>
  </div>
 </div>

 <!-- bem vindo -->
 <div class="container-fluid">
  <div class="row">
   <div class="col-md">
    <h1 class="titulo-claro text-center">Bem vindo ao Clube!</h1>
    <hr />
   </div>
  </div>
 </div>

 <div class="container-fluid">
  <div class="row pb-4">
   <div class="col-4">
    <img class="d-flex mx-auto w-75 shadow rounded rounded-3" src="/imagens/banners/img-bemvindo.png" alt="clube">
   </div>
   <div class="col">
    <p>Queremos ressignificar o conceito de aprendizagem para além dos sistemas formais de ensino,
     construindo uma <b class="titulo-claro text-danger h5">Rede de Educadores</b> interessados em
     compartilhar aquilo que sabem com quem deseja aprender.</p>
    <p>Nossa comunidade, que chamamos de <b class="titulo-claro text-primary h5">Clube do Saber</b> desde
     2018, atua de forma <b class="titulo-claro text-danger h5">descentralizada e colaborativa</b> –
     virtual ou presencial – promovendo a troca de saberes coletivos para uma educação significativa,
     liderada por pessoas, de forma autônoma, transformadora e participativa.</p>
    <p>Valorizamos o conhecimento, não apenas pelos diplomas ou credenciais obtidas, mas, pelas <b class="titulo-claro text-danger h5">competências e experiências</b> que cada pessoa possui e
     compartilha, permitindo que todos possam viver com dignidade e alcançar melhores oportunidades numa
     sociedade marcada pela desigualdade.</p>
    <p><b class="titulo-claro text-danger h5">Construímos parcerias</b> e, através de um ativismo consciente
     e responsável, <b class="titulo-claro text-danger h5">aproximamos pessoas e instituições</b>,
     oferecendo uma <b class="titulo-claro text-primary h5">Curadoria de Aprendizagem</b> personalizada
     para cada necessidade e objetivo. Este é o nosso desafio!</p>
   </div>
  </div>
 </div>

 <!-- Associe-se -->
 <div class="container-fluid bg-secondary">
  <div class="row">
   <div class="col-md">
    <h1 class="titulo-escuro text-center">Seja um Associado</h1>
    <hr />
   </div>
  </div>
 </div>

 <div class="container-fluid bg-secondary text-white">
  <div class="row pb-4">
   <div class="col-8">
    <p>Para participar como <b class="titulo-escuro h5">Associado</b> você precisa <b class="titulo-escuro h5">ter
      experiência docente</b> e fazer o upload dos seus dados cadastrados
     na <a href="https://buscatextual.cnpq.br/buscatextual/busca.do?metodo=apresentar" target="_blank"><b class="titulo-escuro h5">Plataforma do Currículo Lattes</b></a>.</p>
    <p>Nossa comunidade de educadores fará uma análise da sua formação acadêmica, experiência, áreas de
     interesse, produção e, se aprovado, receberá uma confirmação para acompanhar as demandas no seu <a href="/associados/login.php"><b class="titulo-escuro h5">Painel de Associado</b></a>.</p>
    <p>A partir deste momento, você poderá se inscrever, ofertar e apoiar nossos <b class="titulo-escuro h5">Projetos de
      Curadoria</b>, experimentando uma nova forma de ensinar e
     ser reconhecido pela comunidade.</p>
    <h2 class="titulo-escuro text-center text-danger">
     <b style="color:#66CD7A">Faça o seu cadastro. É grátis!</b>
     <a class="btn btn-primary" href="/associados/lattes/lattes.php">Clique aqui!</a>
    </h2>
    <?php
    # limpa variáveis do cadastro
    $_SESSION["passo2"] = "";
    $_SESSION["passo3"] = "";
    ?>
   </div>

   <div class="col">
    <img class="d-flex mx-auto shadow w-75 rounded rounded-3" src="/imagens/banners/img-associado.png">
   </div>
  </div>
 </div>

 <!-- seja um parceiro -->
 <div class="container-fluid bg-light">
  <div class="row">
   <div class="col-md">
    <h1 class="titulo-claro text-center">Seja um Parceiro</h1>
    <hr />
   </div>
  </div>
 </div>

 <div class="container-fluid bg-light">
  <div class="row pb-4">
   <div class="col">
    <img class="d-flex mx-auto shadow w-75 rounded rounded-3" src="/imagens/banners/img-parceiro.png">
   </div>
   <div class="col-8">
    <p>Nossos <b class="titulo-claro h5">Parceiros</b> são instituições de ensino, fundações, ONGs, empresas
     e comunidades que entendem que a Curadoria de Aprendizagem irá capacitar de forma efetiva seus
     alunos, colaboradores e outros grupos interessados numa aprendizagem significativa, autodirigida e
     autônoma.</p>
    <p>Para participar, basta preencher um cadastro, indicar as suas necessidades e interesses de
     aprendizagem para que um <b class="titulo-claro h5">Curador</b>, na área de conhecimento, entre em
     contato.</p>
    <p>Esta primeira etapa é gratuita, visando dirimir dúvidas e questões referentes aos métodos e
     estratégias adotadas para ajudá-lo na melhoria da qualidade da educação.</p>
    <h2 class="titulo-claro text-center text-danger">
     <b>Venha para o Clube!</b>
     <a class="btn btn-primary" href="/parceiros/cadastrar.php">Clique aqui!</a>
    </h2>
   </div>
  </div>
 </div>

 <!-- estilo de aprendizagem -->
 <div class="container-fluid bg-secondary">
  <div class="row">
   <div class="col-md">
    <h1 class="titulo-escuro text-center">Você conhece o seu Estilo de Aprendizagem?</h1>
    <hr />
   </div>
  </div>
  <div class="row pb-4">
   <div class="col-8 text-white">
    <p>Cada pessoa aprende de um jeito e o primeiro passo para experimentar a <b class="titulo-escuro h5">Desescolarização</b> é descobrir o seu <b class="titulo-escuro h5">Estilo de
      Aprendizagem</b>. Você se surpreenderá com o resultado do
     teste e encontrará a “chave” que faltava para
     acionar o seu potencial, gerando mais e melhores resultados, descobrindo assim, a resposta para
     aquele desconforto sentido durante anos no sistema de ensino formal.</p>
   </div>
   <div class="col">
    <h2 class="titulo-escuro text-center">
     <b style="color:#66CD7A">Faça o teste, é grátis!</b><br />
    </h2>
    <div class="d-flex mx-auto justify-content-md-center pt-3">
     <a class="btn btn-primary" href="/competencia/kolb.php">Clique aqui!</a>
    </div>
    <?php
    if ($_SESSION["kolb"] <> "") {
     echo "<div class='text-center p-2'>" . $_SESSION["kolb"] . "</div>";
     $_SESSION["kolb"] = "";
    }
    ?>
   </div>
  </div>
 </div>

 <!-- nossos parceiros -->
 <div class="container-fluid bg-light">
  <div class="row">
   <div class="col-md">
    <h1 class="card-title titulo-claro text-center" id="contato">Nossos Parceiros</h1>
    <hr />
    <p>Cada empresa parceira representa a integração de ideias e serviços prestados pelo Clube do Saber.
     Sempre comprometidas com a melhoria da qualidade da Educação, buscam por soluções inovadoras,
     respeitando os valores e princípios de cada cliente, comunidade ou indivíduo, fazendo assim a
     diferença no momento da tomada de decisão.
    </p>
   </div>
  </div>

  <div class="row pb-4">
   <div class="col-3">
    <div class="card rounded shadow" style="height: 100%;">
     <div class="card-header">
      <h5 class="card-title titulo-claro text-center">ASDE</h5>
     </div>
     <div class="card-body">
      <a href="https://www.self-directed.org/" target="_blank">
       <img class="card-img-top mx-auto d-block rounded shadow w-100" src="/imagens/parceiros/logo-asde.png"></a>
      <p class="card-text pt-3">Organização sem fins lucrativos dedicada a aumentar a acessibilidade e
       a consciência da Educação Autodirigida como uma forma de viver e aprender.</p>
     </div>
    </div>
   </div>

   <div class="col-3">
    <div class="card rounded shadow" style="height: 100%;">
     <div class="card-header">
      <h5 class="card-title titulo-claro text-center">School&CollegeListings</h5>
     </div>
     <div class="card-body">
      <a href="https://www.schoolandcollegelistings.com/BR/S%C3%A3o-Paulo/1682175458737408/Clube-do-Saber" target="_blank">
       <img class="card-img-top mx-auto d-block rounded shadow w-100" src="/imagens/parceiros/logo-scl.png"></a>
      <p class="card-text pt-3">Plataforma que conecta estudantes, pais e indivíduos em busca de
       oportunidades educacionais em educação primária, ensino superior ou formação profissional
       com instituições renomadas.</p>
     </div>
    </div>
   </div>

   <div class="col-3">
    <div class="card rounded shadow" style="height: 100%;">
     <div class="card-header">
      <h5 class="card-title titulo-claro text-center">Murano Design</h5>
     </div>
     <div class="card-body">
      <a href="https://www.muranodesign.com.br/" target="_blank">
       <img class="card-img-top mx-auto d-blockrounded shadow" src="/imagens/parceiros/logo-murano.png"></a>
      <p class="card-text pt-3">Especializada na aplicação de Objetos de Aprendizagem, nos ajuda na
       metodologia ágil quando o assunto é curadoria.</p>
     </div>
    </div>
   </div>

   <div class="col-3">
    <div class="card rounded shadow" style="height: 100%;">
     <div class="card-header">
      <h5 class="card-title titulo-claro text-center">Schoolastic</h5>
     </div>
     <div class="card-body">
      <a href="https://schoolastic-app.com/" target="_blank">
       <img class="card-img-top mx-auto d-block rounded shadow" src="/imagens/parceiros/logo-schoolastic.png"></a>
      <p class="card-text pt-3">Realiza o mapeamento do perfil sócio emocional através de uma
       plataforma própria, prestando consultoria para a implantação das BNCCs.</p>
     </div>
    </div>
   </div>

  </div>
 </div>

 <!-- newsletter -->
 <div class="container-fluid" style="background-color:#1A2B3C;">
  <div class="row">
   <div class="col-md">
    <h1 class="titulo-escuro text-center">Assine a nossa newsletter</h1>
   </div>
  </div>

  <div class="row pb-4">
   <div class="col-6">
    <div class="d-flex mx-auto justify-content-md-center">
     <a href="https://clubedosaber.substack.com" target="_blank">
      <img class="rounded shadow w-100 img-center" src="/imagens/banners/img-substack.png" alt="">
     </a>
    </div>
   </div>
   <div class="col-6">
    <h4 class="titulo-escuro text-center px-3" style="color:#66CD7A">Cadastre o seu e-mail para receber
     nossos posts!</h4>
    <div class="d-flex mx-auto justify-content-md-center">
     <p><iframe src="https://clubedosaber.substack.com/embed" width="480" height="320" style="background:white;" frameborder="0" scrolling="no"></iframe></p>
    </div>
   </div>
  </div>
 </div>

 <!-- doações
 <div class="container-fluid">
  <div class="row">
   <div class="col-md">
    <h1 class="titulo-claro text-center">Campanhas e Doações</h1>
    <hr />
   </div>
  </div>
  <div class="row pb-4">
   <div class="col-3">
    <div class="card rounded shadow" style="height: 100%;">
     <div class="card-header">
      <h5 class="card-title titulo-claro text-center">Clube do Saber</h5>
     </div>
     <div class="card-body">
      <a href="https://buy.stripe.com/fZe6po5pw3tNeOI4gh" target="_blank">
       <img class="card-img-top mx-auto d-block rounded shadow w-75" src="/imagens/logos/logo-coruja.png"></a>
      <p class="card-text pt-3">Considere fazer uma doação única ou mensal, apoiando a independência
       do nosso trabalho.</p>
     </div>
    </div>
   </div>

   <div class="col-3">
    <div class="card rounded shadow" style="height: 100%;">
     <div class="card-header">
      <h5 class="card-title titulo-claro text-center">Rio Grande do Sul</h5>
     </div>
     <div class="card-body">
      <a href="https://paraquemdoar.com.br/" target="_blank">
       <img class="card-img-top mx-auto d-block rounded shadow" src="/imagens/banners/img-bandeira-rs.png"></a>
      <p class="card-text pt-3">O Rio Grande do Sul precisa da sua ajuda, pois continua sofrendo após as enchentes precisando reconstruir
       casas, ruas e fábricas que foram afetadas pelas chuvas.</p>
     </div>
    </div>
   </div>

   <div class="col-3">
    <div class="card rounded shadow" style="height: 100%;">
     <div class="card-header">
      <h5 class="card-title titulo-claro text-center">CUFA</h5>
     </div>
     <div class="card-body">
      <a href="https://cufa.org.br/doar/" target="_blank">
       <img class="card-img-top mx-auto d-block rounded shadow" src="/imagens/banners/img-cufa.png"></a>
      <p class="card-text pt-3">A Central Única das Favelas (CUFA) se notabiliza pelas ações de impacto social nacional que causa na sociedade nas mais diversas áreas, dando protagonismo à população das favelas e comunidades.</p>
     </div>
    </div>
   </div>

   <div class="col-3">
    <div class="card rounded shadow" style="height: 100%;">
     <div class="card-header">
      <h5 class="card-title titulo-claro text-center">Ucrânia</h5>
     </div>
     <div class="card-body">
      <a href="https://stand-with-ukraine.pp.ua/" target="_blank">
       <img class="card-img-top mx-auto d-block rounded shadow" src="/imagens/banners/img-ucrania.png"></a>
      <p class="card-text pt-3">A Ucrânia está precisando da nossa ajuda para lutar contra o
       autoritarismo e violência contra um povo de forma desigual pela Rússia.</p>
     </div>
    </div>
   </div>
  </div>
 </div>
  -->

</main>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/includes/php/footer.php"; ?>