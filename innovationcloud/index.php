    
        <?php get_header(); ?>
    <div class="main">      
      <div class="container">
        <img src="<?php echo get_template_directory_uri()?>/images/cloud.svg" height="128" width="196"/>
        <?php while(have_posts()) : the_post() ?>
        <h2><?php the_title();?></h2>
        <p><?php the_content();?></p>
      
      </div>
      <div class="jumbotron">
      <div class="container"> 
      
      <h1>
        
          <?php the_field ("stay_connected")?>
        </h1>
        <p>
        <?php the_field ("recieve_weekly")?>
        </p>
        <a class="btn" href="">Join</a>
      </div>
      
      <?php endwhile;?>
    </div>
      <?php get_footer(); ?>
    </div>
    
    