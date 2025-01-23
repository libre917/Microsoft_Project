<?php
require_once './php/general.php';
require_once './php/general-index.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/256/732/732221.png" type="image/x-icon">
    <title>Microsoft</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php menu($itens_menu); ?>
    <main>
        <section class="section_1">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        

  <div class="carousel-inner" >
    <div class="carousel-item active" data-bs-interval="10000">
      
    <img  style="width:1366px;height:409.8px" src="https://s.zst.com.br/cms-assets/2020/11/xbox-series-x-capa-2.jpg" alt="">
        <div class="descricao">
            <div class="descricao_content">
               <h1><span style="color: var(--xbox_green);text-shadow: 0px 0px 10px var(--xbox_green);">Xbox</span> series X</h1>
               Aventure-se em novos mundos com o Xbox mais potente de todos os tempos.  
          <a href="xbox.php"><button  class="descricao_button"> Compre seu Xbox series X</button></a>                      
            </div>
        </div>

    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img  style="width:1366px;height:409.8px;filter: brightness(80%) contrast(150%)" src="https://s.zst.com.br/cms-assets/2024/03/showcase-5669967.jpg" alt="...">
      <div class="descricao" style="left: 900px;">
            <div class="descricao_content" style="color: black;" >
               <h1><span style="color: var(--xbox_green);text-shadow: 0px 0px 10px var(--xbox_green);">Xbox</span> series S</h1>
               Aventure-se em novos mundos com o Xbox mais elegante de todos os tempos.  
          <a href="xbox.php"><div class="descricao_button"> Compre seu Xbox series S</div></a>                      
            </div>
        </div>
    </div>
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
  </div>
</div>
        </section>
        <section class="section_2">
          
<?php foreach ( $itens_card as $number => $item ){
  if ($number == 'Conjunto1'){
 foreach ( $item as $title => $content ){
  echo '<div class="contents"><img src="'.$content['imagem'].'"><h1>'.$title.'</h1><p>'.$content['descricao'].'</p><div class="button">'.$content['botao'].'</div></div>';
};};}
?>
        </section>
        <section class="section_3">
        <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" style="height: 441px;width=1524px">
    <div class="carousel-item active" data-bs-interval="6000">
      <div class="descricao_content2"><h2>Microsoft Edge</h2>Desempenho excepcional com mais privacidade, mais velocidade e mais qualidade durante a navegação<br><button class="button" style="padding-top: 30px 20px">Instale agora</button></div>
      <img style="height:441px;width=1524px" src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/gldn-MSFT-hero-Edge:VP5-1596x600" alt="Microsoft Edge">
    
    </div>
    <div class="carousel-item" data-bs-interval="6000">
      <div class="descricao_content2" style="left:3vw;background-color:rgba(0, 0, 0, 0.582);color:white"><h2 style="color:white">Indiana Jones e o Grande Circulo</h2>Jogue no PC Game Pass ou Ultimate<br><button class="button" style="padding-top: 25px 20px">Jogue agora</button></div>
      <img style="height:520px;width=1424px" src="https://pbs.twimg.com/media/GEJ0inXXsAAA84q.jpg:large" alt="Indiana jones and the great circle">
      
    </div>
    
  </div>
  
  <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>-->
</div>
        </section>
        <section class="section_4">
          <h1 style="font-size: 1.7rem;text-align:left;margin:auto;">Para negócios</h1>
          <?php foreach ( $itens_card as $number => $item ){
  if ($number == 'Conjunto2'){
 foreach ( $item as $title => $content ){
  echo '<div class="contents"><img src="'.$content['imagem'].'"><h1>'.$title.'</h1><p>'.$content['descricao'].'</p><div class="button">'.$content['botao'].'</div></div>';
};};}
?>

        </section>

    </main>
    <footer>
      
    </footer>
</body>
</html>