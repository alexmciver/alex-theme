<?php  

/** TEMPLATE NAME: Hero */

$hero_text = get_field('hero_text');

?>
<div class="hero-block">
    <div class="container">
        <div class="content">
            <h1><?php echo $hero_text;?></h1>
        </div>
    </div>
</div>