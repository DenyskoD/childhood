<? 
/*
Template Name: Наша Команда
*/
?>

<? 
    get_header();
?>

    <div class="specialists" >
        <div class="container">
            <div class="title"><? the_field('company_title');?></div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <img class="specialists__img" src="<? the_field('company_img');?>" alt="наша команда">
                </div>
            </div>
        </div>
    </div>

<? 
    get_footer();
?>