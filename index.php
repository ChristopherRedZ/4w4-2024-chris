<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Heist</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Teko:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Roboto&family=Teko:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1a11825f1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="entete" class="global">
        <header class="entete__header">
            <h1>Golden Heist - Rush of Gold(h1)</h1>
            <h2>Theme en création par Christopher Simeus(h2)</h2>
            <h3>TIM - College de Maisonneuve </h3>
            <button>Evenements</button>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div id="accueil" class="global">
        <section>
            <h2>Accueil(h2)</h2>
            <div class="cours">
            <h4>Bienvenue dans mon site web ,  faites comme chez vous et mettex vous comfortable dans le coin(h4)</h4>

            <?php 

            // if(have_posts()){
            //     while(have_posts()){
            //         the_post();
            //         the_title('<h3>','<h3>');
            //         echo wp_trim_words(get_the_content(),30);
            //     }
            // }

            if(have_posts()):

                while(have_posts()): the_post(); 
                    $titre = get_the_title();
                    $sigle = substr($titre,0,7);
                    $duree = substr($titre,-6);
                    $pos1 = strpos($titre,'(');
                    $titre = substr($titre,7,$pos1-8);
                
                ?>


                <div class="carte">
                    <h2><?php echo $sigle;  ?><?php echo  $duree; ?></h2>
                    <h3><?php echo $titre; ?></h3>
                    <p><?php echo wp_trim_words(get_the_content(),30); ?></p>
                </div>

            <?php endwhile; ?>
            <?php endif; ?>
            </div>

            
        </section>
    </div>

    <div id="evenement" class="global">
        <div class="vague2">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
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

    <div id="footer" class="global">
        <footer>
            <h2>Footer(h2)</h2>
            <div class="icons">
                <i class="fa-solid fa-phone-volume"></i>
                <i class="fa-solid fa-earth-americas"></i>
                <i class="fa-solid fa-envelopes-bulk"></i>
            </div>
            
        </footer>
    </div>

</body>
</html>