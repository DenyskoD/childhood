<?php

get_header();
?>
    <div id="primaty" class="content-area">
        <main id="primary" class="site-main">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', get_post_type() );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div>

    <div class="container toys">
        <h2 class="subtitle">Возможно вам понравится</h2>
        <div class="toys__wrapper">

        <?
            // параметры по умолчанию
            $posts = get_posts( array(
                'numberposts' => 3,
                'category_name'    => 'soft_toys',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
            ?>

            <div class="toys__item" style="background-image: url(<? 
                if (has_post_thumbnail()) {
                    the_post_thumbnail_url();
                } else {
                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                }
            ?>)">
                <div class="toys__item-info">
                    <div class="toys__item-title"><? the_title(); ?></div>
                    <div class="toys__item-descr">
                        <? the_field('toys_desc'); ?>                            
                    </div>
                    <a href="<? echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
                </div>
            </div>

            <?
                }

                wp_reset_postdata(); // сброс
        ?>

        </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span>Не нашли то, что искали?</span> Свяжитесь с нами - и мы с радостью создадим любую игрушку по вашему желанию. Вы можете выбрать все: размер, материал, формы...!
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
