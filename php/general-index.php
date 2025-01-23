<?php
/* IDEIA FALHA DE CAROUSEL EM PHP 
 
$itens_carousel = [
  "Produto_1" => [
    "situation"=> "item active",
    "img" => "https://s.zst.com.br/cms-assets/2020/11/xbox-series-x-capa-2.jpg",
  "titulo" => "Xbox series X",
  "descricao" => "  Aventure-se em novos mundos com o Xbox mais potente de todos os tempos.",
  "botao" => "Comprar Xbox series X"
],

  "Produto_2" => [
    "situation" => "item",
    "img" => "https://s.zst.com.br/cms-assets/2020/09/c4jsh7f.jpg",
  "titulo" => "Xbox series S",
  "descricao" => "Aventure-se em novos mundos com o Xbox mais elegante de todos os tempos.",
  "botao" => "Comprar Xbox series S"
],
];

function carousel($itens_carousel) {
  echo '<div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">';
      
      foreach ($itens_carousel as $produto => $conteudo) {
          echo '
          <div class="carousel-'.$conteudo['situation'].'">
            
          <img class="center" src="'.$conteudo['img'].'" class="d-block w-100" alt="">
              <div class="card">
                  <div class="card_content">
                     <h1>'.$conteudo['titulo'].'</h1>
                     '.$conteudo['descricao'].' 
                <a href="#"><div class="card_button">'.$conteudo['botao'].'</div></a>                      
                  </div>
              </div>
      
          ';
      };
      
         echo '</div>
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
        ';
};*/

$itens_card = [
    'Conjunto1'=>[ 
      "Game Pass" => [
        "descricao" => "Jogue novos jogos desde o primeiro dia. Além disso, aproveite centenas de jogos de alta qualidade com amigos no console e no PC.",
        "imagem" => "./img/game-pass_img.avif",
        "botao" => "Inscreva-se agora",
      ],
      "Microsoft 365" => [
        "descricao" => "Obtenha proteção online, armazenamento seguro na nuvem e aplicativos inovadores desenvolvidos para atender às suas necessidades, tudo em um único plano.",
        "imagem" => "./img/microsoft-365.avif",
        "botao"=> "Participe da Microsoft 365"
      ],
      "Copilot" => [
        "descricao" => "Sempre ao seu lado, pronto para apoiá-lo quando e onde você precisar.",
        "imagem" => "./img/copilot.avif",
        "botao" => "Baixe seu Copilot",
      ],
    
      ],
    
      "Conjunto2" => [
        "Visual Studio 2022" => [
          "descricao" => "Tenha o IDE mais abrangente para desenvolvedores .NET e C++ no Windows para criar aplicativos, serviços e jogos para web, nuvem, desktop e dispositivos",
          "imagem" => "https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/Content-Card-Visual-Studio-Icon?wid=297&hei=167&fit=crop",
          "botao" => "Compre seu Xbox series X",
        ],
        "Microsoft Teams" => [
          "descricao" => "Reuniões, chat, colaboração em tempo real e armazenamento em nuvem compartilhado.",
          "imagem" => "https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/Content-Card-Microsoft-Teams-Commercial-Meeting?wid=297&hei=167&fit=crop",
          "botao" => "Compre seu Xbox series S",
        ],
        "Windows 11 para empresas" => [
          "descricao" => "Reuniões, chat, colaboração em tempo real e armazenamento em nuvem compartilhado.",
          "imagem" => "https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/Content-Card-Windows-11-Business?wid=297&hei=167&fit=crop",
          "botao" => "Compre seu Xbox series X",
        ],
      ],
    ];