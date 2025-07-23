<?php
 function renderTop($activeMenu) {
?>  
    <div class="top">
      <div class="center">
     
        <header>
          <div class="center">
            <div class="logo-container">
              <img src="./images/logo-ype.png" />
              <img src="./images/logo-unidos-pela-paz.png" />
            </div>
            <nav class="menu-container">
              <ul class="menu">
                <li><a href="/" class="menu-item <?= $activeMenu == 'projeto' ? 'active' : '' ?>">O Projeto</a></li>
                <li><a href="/galeria.php" class="menu-item <?= $activeMenu == 'galeria' ? 'active' : '' ?>">Galeria</a></li>
                <li><a href="/contato" class="menu-item">Contato</a></li>
              </ul>
            </nav>
            <div class="icones-container">
              <ul class="icones">
                <li><a href="/"><img src="./images/icones/icone-facebook.png" /></a></li>
                <li><a href="/"><img src="./images/icones/icone-instagram.png" /></a></li>
                <li><a href="/"><img src="./images/icones/icone-youtube.png" /></a></li>
              </ul>
            </div>
            <div class="line-container">
              <div class="line"></div>
            </div>
          </div>

        </header>

<?php
 }
?>