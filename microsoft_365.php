<?php
require_once './php/general.php';
require_once './php/general-microsoft_365.php'
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Animações em CSS (eu acho) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/microsoft_365.css">
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
         <div class="descricao">
            <h6>Microsoft 365 para uso doméstico</h6>
            <h1>Turbine sua produtividade com IA</h1>
            <p>Obtenha aplicativos de produtividade, segurança e armazenamento com o Microsoft 365. Em seguida, adicione poder da IA com o Copilot Pro. </p>
            <button>confira os Planos e Preços</button>
         </div>
         <div class="group">
            <ul class="group-list">
                <li class = "group-list-item active">Para uso doméstico</li>
                <li class = "group-list-item">Para pequenas e médias empresas</li>
                <li class = "group-list-item"> Para grandes empresas</li>
                <li class = "group-list-item">Para educação</li>
            </ul>
         </div>
        </section>
        
        <section class="section_2">
    <div class="section_2-nav-buttons">
        <div class="section_2-nav">
            <?php foreach ($sections as $index => $section): ?>
                <button 
                    class="nav-button <?= $index === 0 ? 'active' : ''; ?>"
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#<?= htmlspecialchars($section['id']); ?>" 
                    aria-expanded="<?= $index === 0 ? 'true' : 'false'; ?>" 
                    aria-controls="<?= htmlspecialchars($section['id']); ?>">
                    <?= htmlspecialchars($section['label']); ?>
                </button>
                
            <?php endforeach; ?>
        </div>
    </div>

    <div class="section_2-content">
    <?php foreach ($sections as $index => $section): ?>
        <div 
            class="collapse collapse-horizontal <?= $index === 0 ? 'show' : ''; ?> animate__animated animate__fadeIn" 
            id="<?= htmlspecialchars($section['id']); ?>">
            <div style="margin-bottom:20px;"> 
                <h4 style="text-align:left;font-weight:300;font-size:20px;"><?= $section['top-title']; ?></h4>
                <h1 style="text-align:left;"><?= $section['title']; ?></h1>
            </div>
            <div class="content">
                <div class="content-card" style="width: 1200px;">
                    <?php if(is_array($section['content'])){
                 
                 echo '<div class="appsContent">';
                 foreach ($section['content'] as $box => $content) {
                    echo '<div id="appsContent" class="appsContent-items" style="border-color:'.$content["color"].';"><div class="appsTitle"><img style="width:auto;height:38px;" src="'.$content['icone'].'"><h1>'.$content['titulo'].'</h1></div> 
                    <div id="appsContent" class="appsItem-Text">
                    <div style="display:flex;width:420px;">
                    <div class="apps-textButton">
                    <p style="margin-bottom:0px;">'
                    .$content['texto'].'
                    </p>
                    <a id="" class="appsButton" href="'.$content['link'].'">'.$content['botao'].'</a>
                    </div>
                    <div class="container">
                    <div class="gradient"></div>
                    <img src="'.$content['img'].'">
                    </div>
                    </div>
                    
                    </div>
                    </div>';
                }
                echo '</div>';
                


                    ;}else{ ?>
                    <?= $section['content'];} ?>
                    
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.nav-button');
            const collapses = document.querySelectorAll('.collapse');

            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    // Fecha todas as seções e remove a classe 'active' dos botões
                    collapses.forEach(collapse => collapse.classList.remove('show'));
                    buttons.forEach(btn => btn.classList.remove('active'));

                    // Ativa o botão clicado e exibe a seção correspondente
                    button.classList.add('active');
                    const targetId = button.getAttribute('data-bs-target').substring(1);
                    const targetContent = document.getElementById(targetId);
                    targetContent.classList.add('show');
                });
            });
        });
    </script>
   <script>
    document.addEventListener('DOMContentLoaded', () => {
    const accordionButtons = document.querySelectorAll('.accordion-button');

    accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove a classe 'active' de todos os botões
            accordionButtons.forEach(btn => btn.classList.remove('active'));

            // Adiciona a classe 'active' ao botão clicado
            button.classList.add('active');
        });
    });
});

</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const appsContentItems = document.querySelectorAll('.appsContent-items');

    appsContentItems.forEach(item => {
        item.addEventListener('click', () => {
            // Remove a classe 'active' de todos os itens
            appsContentItems.forEach(it => {
                it.classList.remove('active');
                const textElement = it.querySelector('.appsItem-Text');
                if (textElement) {
                    textElement.classList.remove('active');
                }
            });

            // Adiciona a classe 'active' ao item clicado
            item.classList.add('active');
            const textElement = item.querySelector('.appsItem-Text');
            if (textElement) {
                textElement.classList.add('active');
            }
        });
    });
});
</script>
</section>
    </main>
    </body>
</html>