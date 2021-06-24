<?php include 'header.php'; ?>
<p>Cette page est single.php </p>

<?php if (have_posts()):while(have_posts()):the_post();?>


<h1><?php the_title();?></h1>



<p>publié par <?php the_author();?>,le <?php the_date();?></p>
<p><?php the_content();?></p>


<?php endwhile; endif; ?>


<?php include 'footer.php'; ?>