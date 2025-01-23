
<?php 
$itens_menu = [
"index.php" => [
  "" => "  ",
  "Microsoft 365" => "microsoft_365.php",
  "Xbox" => "xbox.php",
  "Windows" => "windows.php",  
  "Copilot" => "https://copilot.microsoft.com/",
  "Suporte" => "suporte.php",
  "cintia" => "cintia.php"
],
"xbox.php" => [
  "<img style='width: 78px;height: auto;margin:0px 0px -5px 0px !important;' src='https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/uhfbanner-xboxlogo1?fmt=png-alpha&bfc=off&qlt=100,1'>" => " ",
  "Game Pass" => [
    "assine agora" => "",
    "PC Game Pass" => "",
    "Xbox Game Pass" => "",
  ],
  "Jogos" => [
    "Lista de jogos" => "",
  ],
  "Windows" => "windows.php",  
  "Copilot" => "copilot.php",
  "Suporte" => "suporte.php",
],
"microsoft_365.php" => [
  "Microsoft 365" => "",
  "Produtos" => [
    "Microsoft 365 Copilot" => "",
    "Microsoft Office" => "",
    "Excel" => "",
    "PowerPoint" => "",
    "Word" => "",
    "OneDrive" => "",
    "Outlook" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
  ],
  "Planos e preços" => "",
  "Recursos" => "",
  "Suporte" => "suporte.php"
],
"copilot.php" => [
  "Copilot" => "",
],
"suporte.php" => [
  "Suporte" => "",
  "oi" => "",
  "Produtos" => "",
],
"windows.php" => [
  "Windows" => "",
],
"cintia.php" => [
"cintia" => "",
"minha lerdeza" => "index.php",
"meus vicios" =>[
"lãs" => "",
"esmaltes" => "",
"sabatos" => "",

]
],
];


function menu($itens_menu) {
  $current_file = basename($_SERVER['PHP_SELF']);
  
  echo '<header>
      <nav class="navbar">
          <div class="logo">
              <a href="index.php">
                  <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/UHFbanner-MSlogo?fmt=png-alpha&bfc=off&qlt=100,1" 
                       alt="microsoft_logo" 
                       style="width: 140px; height: 28px; border-right: 2px solid #373737; padding-right: 6px; margin: auto;">
              </a>
          </div>
          <ul class="navbar-list">';

  foreach ($itens_menu as $nome => $content) {
      if ($nome == $current_file) {
          // Renderiza o título do menu
          $primeiro_item = array_key_first($content);
          echo '<h1 style="margin-top: 7px; font-size: 1.2rem; padding-left: 10px;">' . $primeiro_item . '</h1>';
          
          // Ignora o primeiro item (título do menu)
          $content_sem_primeiro = array_slice($content, 1, null, true);

          foreach ($content_sem_primeiro as $itens => $link) {
              echo '<li>';
              if (is_array($link)) {
                  // Renderiza dropdown para submenus
                  renderDropdown($itens, $link);
              } else {
                  // Renderiza link normal
                  echo '<a href="' . $link . '">' . $itens . '</a>';
              }
              echo '</li>';
          }
      }
  }

  echo '</ul>
      <ul class="navbar_actions">
          <li>Pesquisar <img src="https://cdn.iconscout.com/icon/free/png-256/free-lupa-5136281-4285441.png" style="width: 17px; height: 17px; padding-top: 2px; margin-left: 5px;"></li>
          <li>Carrinho <img src="https://cdn.iconscout.com/icon/free/png-256/free-carrinho-374-444556.png?f=webp" style="width: 17px; height: 17px; padding-top: 2px; margin-left: 5px;"></li>
          <li>Entrar <img src="https://static-00.iconduck.com/assets.00/profile-circle-icon-256x256-cm91gqm2.png" style="width: 17px; height: 17px; padding-top: 2px; margin-left: 5px;"></li>
      </ul>
      </nav>
  </header>';
}

function renderDropdown($title, $submenu) {
  echo '<div class="dropdown">
      <button class="button-produtos dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          ' . $title . '
      </button>
      <ul class="dropdown-menu">';
  
  foreach ($submenu as $subitem => $sublink) {
      echo '<li><a class="dropdown-produto" href="' . $sublink . '">' . $subitem . '</a></li>';
  }

  echo '</ul></div>';
}
