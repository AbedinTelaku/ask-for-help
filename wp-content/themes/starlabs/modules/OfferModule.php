<div class="bg-indigo-500" >
    <?php
    $title = get_field('title');
    if($title): ?>
    <h5 class="mt-16 pt-12 leading-3 space-y-1.5 font-semibold flex justify-center text-lg text-white"><?php echo $title ?></h5><br> 
    <?php endif; ?>
    
    <?php
    $sub_title = get_field('sub_title');
    if($sub_title): ?>
    <h2 class=" flex justify-center text-white text-[40px]"><?php echo $sub_title ?></h2>
    <?php endif; ?>

    <?php
    $free = get_field('free');
    if($free): ?>
    <h1 class=" font-bold  flex justify-center text-white text-[70px]"><?php echo $free ?></h1>
    <?php endif; ?>

    <?php
    $description = get_field('description');
    if($description): ?>
    <p class="tracking-tight text-white flex justify-center "><?php echo $description ?></p>
    <?php endif; ?>

    <div class=" my-8 text-white flex justify-center">
        <?php 
        $link = get_field('link');
        if( $link ): ?>
        <a href="<?php echo $link ?>" target="_blank" class="self-center font-bold bg-white rounded-full hover:bg-sky-700"><h3 class="px-20 py-4 text-lg font-bold text-slate-500"><?php echo $link ?></h3></a>
        <?php endif ?>
    </div>
    

    <div class="mb-8 w-10 h-10">
    <?php 
        $copyright = get_field('copyright');
        if( $copyright ): ?>
    <p class=" text-white flex justify-center"><?php echo $copyright ?>  
        <?php endif;?>

        <?php 
        $terms = get_field('terms');
        if( $terms ): ?>    
    <a class="underline underline-offset-1"> <?php echo $terms ?> </a>
    <?php endif; ?>

    
    <?php 
        $privacy = get_field('privacy');
        if( $privacy ): ?> 
     <a class="ml-1 underline underline-offset-1">  <?php echo $privacy ?></a></p>
     <?php endif; ?>
    </div>
</div>