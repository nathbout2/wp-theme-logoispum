<?php include 'header.php'; ?>
<p>Cette page est page.php </p>
<div class="container">
<?php if (have_posts()):while(have_posts()):the_post();?>


<h1><?php the_title();?></h1>


<p><?php the_content();?></p>

<?php endwhile; endif; ?>

</div>




<?php include 'footer.php'; ?>