
 <div class="article-holder">

		<?php foreach($messages as $msg){ ?>
			<article>
				
				<?php 
              $msg['title'];
                 $id_news=$msg['id_news']; 

                 $title=$msg['title'];
                    
                    ?>
      
				 <img src="images/noimage-slide.jpg" alt="<?=$title?>">
				<div class="details">


                        
                           
              <h2><?php echo "<a href=posts/one/$id_news>$title</a>" ?></h2>    
				
                <p><?php echo $msg['article'] ?></p>  
			
              
				 <a href="<?=$root?>posts/edit/<?=$id_news?>">Редактировать</a>
                <a href="<?=$root?>posts/delete/<?=$id_news?>">Удалить</a>
                <a href="<?$root?>posts/add">Написать</a>
                </div>
                    <div class="secondary">
                        <span class="views">8</span> 
                        <span class="date"><?=$msg['dt'];?></span>
                    </div>
                    
                </article>
		<?php } ?>
</div>