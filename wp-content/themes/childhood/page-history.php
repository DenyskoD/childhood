<? 
/*
Template Name: История
*/
?>

<? 
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><? the_field('history_title'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <? the_field('history_title_first'); ?>
                </div>
                <div class="aboutus__text">
                    <? the_field('history_descr_first'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<? the_field('history_img_first'); ?>" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<? the_field('history_img_second'); ?>" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <? the_field('history_title_second'); ?>
                </div>
                <div class="aboutus__text">
                    <? the_field('history_descr_second'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <? the_field('history_title_third'); ?>
                </div>
                <div class="aboutus__text">
                    <? the_field('history_descr_third'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<? the_field('history_img_third'); ?>" alt="мир детства">
            </div>
        </div>
    </div>
</div>


<? 
    get_footer();
?>