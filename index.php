<?php get_header(); ?>

<main>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <div class="row mt-5 mb-5">
                <div class="col">
                    <?php the_content(); ?>
                </div>
            </div>
    <?php
        }
        wp_reset_postdata(); // limpa os dados do laço wp para evitar conflito em algum outro que venha a ser usado
    }
    ?>

</main>

<?php get_footer(); ?>