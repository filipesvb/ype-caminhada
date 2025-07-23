
    <?php 
      include 'header.php';
      include 'top.php';
      getHeader();
      renderTop('projeto');
    ?>
          <section class="hero">
            <img src="./images/banner-hero.png" />
            <a href="/" class="button-outline">
    
              <span>Faça já sua inscrição</span>
            </a>
          </section>
        </div>
    </div>
    <section class="mensagem">
      <div class="center flex">
        <div class="w50">
          <img src="./images/voce-e-a-paz-semfundo.png" />
        </div>
        <div class="w50">
          <p>
            <span>A paz é possível e todos unidos podemos alcançá-la.</span>
          </p>
          <br/>
          <p>
            Há alguns anos, ações que buscam promover a paz fazem parte das iniciativas da Ypê para ajudar na construção de um mundo melhor e de paz. Nós acreditamos que é por meio da união das pessoas que conseguiremos alcançar uma nova era, onde o bem prevalecerá.
          </p>
          <br/>
          <p>
            Inspirados pelo ODS 16, que tem por objetivo sensibilizar para a promoção da paz, da justiça e na busca por instituições eficazes, a Ypê quer trabalhar somando esforços com a comunidade, juntos contribuindo e assumindo a responsabilidade social que nos cabe.Esse é um chamado para celebrarmos a paz. Nosso propósito é engajar para o estímulo da renovação dos pensamentos e ampliar nossa consciência, incentivando a mudança de nossas atitudes e comportamentos, que refletem a sociedade que vivemos e somos. Acreditamos que sementes de paz florescem um mundo melhor.
          </p>
          <br/>
          <p>
            Venha fazer parte desse movimento e ser a diferença onde estiver plantado.
          </p>
        </div>
      </div>
    </section>

    <section class="o-movimento">
      <div class="center flex">
        <div class="w50">
          <h2 class="section-title">O Movimento</h2>
          <p>Inspirados pelo exemplo e legado de Divaldo Pereira Franco, fundador do Movimento Você e a Paz, vamos realizar uma edição especial do evento em Amparo/SP, reafirmando nosso compromisso com a construção de um mundo mais pacífico, justo e fraterno. Trabalhamos, com muito amor, por esse movimento que nos impulsiona na direção de uma sociedade mais consciente e harmoniosa, por meio de ações que inspirem a transformação interior e social. O Movimento Você e a Paz é uma iniciativa da Mansão do Caminho, instituição localizada em Salvador/BA. De caráter ecumênico e sem vínculos políticos, o movimento foi idealizado por Divaldo Franco e já alcançou mais de 75 cidades em 14 países, promovendo reflexões e atitudes que geram mudanças reais na vida das pessoas e da sociedade.</p>
          <br />
          <p>Convidamos você a fazer parte desta jornada, para que seja um embaixador da paz onde estiver plantado.</p>
          <br />
          <p>Juntos, podemos manter viva essa corrente do bem e continuar espalhando luz e esperança por onde passarmos.</p>
        </div>
        <div class="w50 movimento-imagens">
          <img src="./images/selo-movimento-2025.png"/>
          <img src="./images/logo-mansao-do-caminho.png"/>
        </div>
      </div>
    </section>

    <section class="a-caminhada">
      <img src="./images/caminhada.png" />
      <div class="center">
        <h2 class="section-title">Caminhada Pela Paz</h2>
        <div class="caminhada-mensagem-destaque">
          <img src="./images/coracao.png" />
          <p>No decorrer de treze edições em Amparo, as pessoas caminharam unidas pela paz, emanando sentimentos de amor e harmonia pelas ruas da cidade.</p>
        </div>
        <div class="flex">
          <div class="w50">
            <p>A edição de 2025 será:</p>
            <br />
            <span class="caminhada-data">
      <img src="./images/calendario.svg" />
    <p>Domingo, 17 de agosto, às 9h</p>
      </span>
            <br />
            <p>Como participar: <br/> Inscreva-se presencialmente nos pontos credenciados:</p>
            <ul>
              <li>SEPI;</li>
              <li>Recepção Ypê;</li>
              <li>Loja Ypê – Amparo;</li>
              <li>Academia ProCorpo;</li>
              <li>Prefeitura Municipal de Amparo;</li>
            </ul>
            <p>Ou acesse pelo botão abaixo:
              <br/>
            </p>
            <a href="https://forms.office.com/r/eFwjgcAmWK">Quero me inscrever</a>
            <br />
            <p>Período de inscrições de: 17/07 a 08/08. As inscrições são gratuitas e limitadas e podem se esgotar antes do prazo.</p>
            <br/>
            <p>
            Junte-se a nós e participe! Seja você também um embaixador da paz!
            </p>
          </div>
          <div class="w50">
            <div id="googleMap" style="width:100%;height:400px;"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="convite">
      <div class="center">
        <h2 class="section-title">Você é parte desse movimento!</h2>
        <p><strong>Convidamos você e sua família para juntos celebrarmos a paz.</strong></p>
        <br/>

        <p>
          Reforçamos anualmente o nosso compromisso com as pessoas e com a construção de um mundo melhor, de paz. Centenas de colaboradores da Ypê se voluntariam e nos ajudam a escrever a história das edições do Movimento Você e a Paz em Amparo/SP.
        </p>
        <br/>
        <p>
        Nesse ano, além da tradicional e tão aguardada Caminhada, teremos diversas atrações com a participação dos voluntários e de colaboradores e alunos do SEPI, além do Coral de Vozes Ypê. Mas esse evento só fica completo com sua participação! Junte-se a nós nas estações temáticas para toda a família, recheadas de experiências inspiradoras, atividades interativas e muita alegria.
        </p>
      </div>
    </section>

    <section class="secoes-tematicas">
      <div class="center">
        <h2 class="section-title">Seções Temáticas</h2>
        <div class="cards-container">
 
          <!-- CARD 01 -->
          <?php
          include 'card.php';

          renderCard(
            '01',
            'Estação<br/>Memória',
            'Uma viagem no tempo para reviver os maravilhosos momentos das edições do Movimento Você e a Paz desde 2013 e também para escrever mais um novo capítulo nessa história.',
            './images/card-1.svg'
          );
  
          renderCard(
            '03',
            'Estação<br/>Saúde',
            'A paz do mundo começa em mim e o cuidado também. Aqui você e sua família vão receber orientações para colocar a sua saúde em primeiro lugar.',
            './images/card-2.svg'
          );

          renderCard(
            '03',
            'Estação<br/>Contação de História',
            'Em um ambiente acolhedor, a imaginação vai rolar soltar para crianças de todas as idades. Venha viajar com a gente por vários lugares sem sair do lugar.',
            './images/card-3.svg'
          );
          ?>


        </div>
      </div>
    </section> 

    <script>
      function myMap() {
      var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd6xn088hH2gWSLi6oHLEEM1zG2XL40R8&callback=myMap"></script>
    <script src="./main.js"></script>
  </body>

</html>