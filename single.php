<?php 
get_header();
?>

    <div id="accueil" class="global">
        <section>
            <h2>Accueil(h2)</h2>
            <h4>Bienvenue dans mon site web ,  faites comme chez vous et mettex vous comfortable dans le coin(h4)</h4>
            <div class="cours">

            <?php 



            if(have_posts()):

                
                while(have_posts()): the_post(); 
                    $titre = get_the_title();
                ?>


                <div class="carte">
                    <h2><?php echo $titre; ?></h2>
                    <p><?php the_content(); ?></p>
                    <!-- <a href="<?php the_permalink(); ?>">Suite</a> -->
                </div>

            <?php endwhile; ?>
            <?php endif; ?>
            </div>
                
            
        </section>
    </div>



    <div id="galerie" class="global diagonal">
        <section>
            <h2>Galerie(h2)</h2>
            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel facilis soluta perspiciatis quos? Rerum distinctio harum reprehenderit aut placeat ea architecto vero at obcaecati officia facilis, veniam laborum alias tenetur?(h6)</h6>
        </section>
    </div>

<?php get_footer() ?>