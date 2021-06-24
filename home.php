<?php include 'header.php'; ?>
<p>Cette page est home.php (donc la page qui liste les articles)</p>

<?php if (have_posts()):while(have_posts()):the_post();?>


<h1><?php the_title();?></h1>

<?php the_post_thumbnail();?>

<p>publié par <?php the_author();?>,le <?php the_date();?></p>
<p><?php the_excerpt();?></p>
 <a href="<?php the_permalink();?>">voir l'article</a>

<?php endwhile; endif; ?>
<?php include 'footer.php'; ?>


  