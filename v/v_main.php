
<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Мой учебный блог">
    <meta name="keywords" content="блог,учеба,вертска">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="og:image" content="/images/socialimage.png">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="images/icons/favicon-32x32.png">
    <link rel="alternate" hreflang="de" href="index.html?language=de">
    <link rel="alternate" hreflang="en" href="index.html?language=en">
    <link rel="alternate" hreflang="ru" href="index.html">
<link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div class="page-wrapper">
       <!--HEADER -->
        <header>
            <!--логотип-->
            <a href="#">
                <img src="images/logo.png" alt="logo">
            </a>
            <!--логотип конец -->
            
            <div>
                 <!--языковое меню -->
                <nav id="language">
                    <ul>
                        <li>
                             <a href="index.html?language=de" hreflang="de">
                              <abbr lang="de" title="Deutsch">de</abbr>
                             </a>
                        </li>
                        
                        <li>
                            <a href="index.html?language=en" hreflang="en">
                             <abbr lang="en" title="English">en</abbr>
                            </a>
                        </li>
                        
                        <li class="active">
                            <a href="index.html" hreflang="ru">
                             <abbr lang="ru" title="Русский">ru</abbr>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                  <!--языковое меню конец -->
                  
                  <!--меню переключение категории  -->
                  <nav role="navigation">
                      <ul>
                          <li class="active">
                              <a href="#">категория 1</a>
                          </li>
                          <li>
                              <a href="#">категория 2</a>
                          </li>
                          <li>
                              <a href="#">категория 3</a>
                          </li>
                          <li>
                             <? 
   if (!$user):?><a href="<?=$root?>auth/login">Войти</a>
    <?else:?>
    <a href="<?=$root?>auth/logout">Выйти (<?=$user['login'];?>)</a>
  <? endif; ?>
                          </li>
                      </ul>
                  </nav>
                  <!--меню переключение категории конец -->
            </div>
        </header>
       <!-- HEADER  END -->  
    <main role="main">
       <h1>Добро пожаловать на этот блог - мой учебный проект. <?=$title?></h1>
        Я очень рад видеть вас на своем блоге!
        Больше фишек <a href="#" target="_blank">по этой ссылке</a>!
        
         
            <!-- статья  -->
            
            <?=$content?>
            <!-- Статья КОНЕЦ -->
       
   
        
        
        <div class="more">Больше </div>
   
     </main>
     <!-- Подвал  -->
     <footer>
         <ul>
             <li>
                 <a href="#" rel="nofollow" target="_blank">tumblr</a>
             </li>
             <li>
                 <a href="#" rel="nofollow" target="_blank">youtube</a>
             </li>
         </ul>
          
           <small>#Artem © &copy; <?=date('Y');?></small>
     </footer>
    <!-- Подвал КОНЕЦ -->
    <!--Скролл вверх-->
        <div class="scrolltop"></div>
    <!-- Скролл вверх конец-->
 </div>
        <!--подключение скриптов-->
    <script src="../scripts/jquery-min.js"></script>
    <script src="../scripts/client/main.js"></script>
    <!--подключение скриптов конец-->
    
</body>
</html>






