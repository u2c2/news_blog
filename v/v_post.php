    <!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <title>Blog test</title>
    <meta charset="UTF-8">
    <meta name="description" content="Мой учебный блог">
    <meta name="keywords" content="блог,учеба,вертска">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="og:image" content="../images/socialimage.png">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="../../images/icons/favicon-32x32.png">
    <link rel="alternate" hreflang="de" href="index.html?language=de">
    <link rel="alternate" hreflang="en" href="index.html?language=en">
    <link rel="alternate" hreflang="ru" href="index.html">
<link rel="stylesheet" href="../../styles/main.css">
</head>
<body>
    <div class="page-wrapper">
       <!--HEADER -->
        <header>
            <!--логотип-->
            <a href="#">
                <img src="../../images/logo.png" alt="logo">
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
                      </ul>
                  </nav>
                  <!--меню переключение категории конец -->
            </div>
        </header>
       <!-- HEADER  END -->  
    <main role="main">
    
        <div class="article-wrapper">
          <!-- Статья -->
          <article>

                    <div class="details">
                        <h2><?//=$title 
	                 echo $message['title'];?></h2>
                    <div>  <?//=$article;
	                 echo $message['article'];?> 
	                 </div> 
                    </div>



             <!-- <img src="files/09/mainimage.jpg" alt="Как Боня читал сценарий к этому видео">
                    <div class="details">
                        <div class="secondary">
                            <span class="date">Добавлена: </span>
                            <span class="views">Просмотров: 222 </span>
                        </div>
                   
              Lorem <br>
                        <strong>ipsum </strong> 
              
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <br>
               Fuga 
               <br>
              orem <i>ipsum dolor sit amet, consectetur adipisicing elit.</i> 
               </div> -->
               <a href="<?=$root?>" style="margin: 15px;">Вернуться к просмотру новостей.</a>
          </article>
          
           <!-- Статья КОНЕЦ -->
           <!-- Боковая панель -->
               <aside>
                 <!-- Теги -->
                 <div class="tags">
                     <a href="index.html">#Science</a>
                     <a href="index.html">#Article</a>
                     <a href="index.html">#Environment</a>
                     <a href="index.html">#Art</a>
                     <a href="index.html">#Food</a>
                 </div>
                 <!-- Теги КОНЕЦ -->
                 <!-- Ссылка на релевантную статью -->
                <a href="<?=$root?>">Вернуться к просмотру новостей.
                    <img src="../../images/noimage-slide.jpg" alt="<?//=$title  
                    echo $message['title'];?>">
                    <div class="details">
                        <h2><?//=$title 
	                 echo $message['title'];?></h2>
                        <p><?//=$article;
	                 echo $message['article'];?>  </p>
                    </div>
                
                    <div class="secondary">
                        <span class="views">8</span> 
                        <span class="date"> Пт, 17. Фев 2017</span>
                    </div>
         
                </a>
                 <!-- Ссылка на релевантную статью КОНЕЦ -->
                 
                  
               
               </aside>
           <!-- Боковая панель КОНЕЦ -->
        </div>
     </main>
      <!-- Подвал  -->
    
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
    

                