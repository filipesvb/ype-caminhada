<?php
    function renderCard($id, $titulo, $descricao, $imagem) {
?>

    <div class="card-single">
            <div class="card-rotate">
              <div class="card-hover">
                <div class="card-front">            
                  <div class="card-single-top">  
                    <span><?php echo $id; ?></span>
                    <img src="<?php echo $imagem ?>" />
                  </div>
                  <div class="card-single-bottom">
                    <span>
                      <?php echo $titulo ?>
                    </span>
                    <a><img src="./images/card-seta.svg" /></a>
                  </div>
                </div>
                <div class="card-back">
                  <div class="card-back-header">
                    <span><?php echo $id ?></span>
                    <h3><?php echo $titulo ?></h3>
                    <img src="./images/card-3.svg" />
                  </div>
                  <div class="card-back-body">
                    <p><?php echo $descricao ?></p>
                  </div>
                  <div class="card-back-footer">
                    <a>
                      <img src="./images/card-seta-azul.svg" />
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>

<?php
    }
?>