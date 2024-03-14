<?php 
get_header();
?>
    <!-- <h1>FRONT-PAGE.PHP</h1> -->
    <div id="entete" class="global">
        <section class="hero">
            <h1><?php echo get_bloginfo("name") ; ?></h1>
            <h1><?php echo get_bloginfo("description") ; ?></h1>
            <h2>Theme en création par Christopher Simeus(h2)</h2>
            <h3>TIM - College de Maisonneuve </h3>
            <button>Evenements</button>
        </section>
        <!-- vague1 vas ici -->
        <?php get_template_part('gabarits/vague1'); ?>
    </div>

    <div id="accueil" class="global">
        <section>
            <h2>Accueil(h2)</h2>
            <h4>Bienvenue dans mon site web ,  faites comme chez vous et mettex vous comfortable dans le coin(h4)</h4>
            <div class="cours">

            <?php 



            if(have_posts()):

                // while(have_posts()): the_post(); 
                //     $titre = get_the_title();
                //     $sigle = substr($titre,0,7);
                //     $duree = substr($titre,-6);
                //     $pos1 = strpos($titre,'(');
                //     $titre = substr($titre,7,$pos1-8);
                
                // exemple prof
                
                while(have_posts()): the_post(); 
                    $titre = get_the_title();
                ?>


                <div class="carte">
                    <h2><?php the_title(); ?></h2>
                    <p><?php wp_trim_words(the_content() , 10); ?></p>
                    <!-- Ajoute un lien vers l'article -->
                    <a href="<?php the_permalink(); ?>">Suite</a>
                </div>

            <?php endwhile; ?>
            <?php endif; ?>
            </div>

            
        </section>
    </div>

    <div id="evenement" class="global">
        <!-- vague2 vas la -->
        <?php get_template_part('gabarits/vague2'); ?>
        <section>
            <h2>Évenement(h2)</h2>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aliquid omnis iure, quasi quibusdam ratione? Nemo fuga, eum voluptas, sequi inventore, mollitia corporis eos tenetur tempore libero quam facilis ex!!(h5)</h5>
        </section>
    </div>

    <div id="galerie" class="global diagonal">
        <section>
            <h2>Galerie(h2)</h2>
            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel facilis soluta perspiciatis quos? Rerum distinctio harum reprehenderit aut placeat ea architecto vero at obcaecati officia facilis, veniam laborum alias tenetur?(h6)</h6>
        </section>
    </div>

<?php get_footer() ?>