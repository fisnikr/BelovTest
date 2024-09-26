
<script src="https://cdn.tailwindcss.com"></script>


<div class="featured-posts grid grid-cols-1 md:grid-cols-4 gap-6 bg-[#D9D4C7] py-8 px-4 md:py-16 md:px-24">
    
    <!-- Main Featured Post -->
    <div class="md:col-span-2 p-4 rounded-lg bg-white">
        <img class="w-full object-cover rounded-lg" src="<?php echo esc_url(get_field('main_image')); ?>" alt="">
        <div class="mt-4 flex flex-col items-center justify-center">
            <span class="inline-block bg-white text-black font-semibold px-1 border border-black rounded-xl"><?php echo esc_html(get_field('main_subtitle')); ?></span>
            <h2 class="text-2xl md:text-4xl font-bold mt-2 text-center"><?php echo esc_html(get_field('main_title')); ?></h2>
            <div class="mt-2 text-sm text-black">
                <span class="text-black uppercase font-semibold"><?php echo esc_html(get_field('main_author')); ?></span> • <span class="text-black font-semibold"><?php echo esc_html(get_field('main_date')); ?></span>
            </div>
        </div>
    </div>

    <!-- Side Posts -->
    <div class="md:col-span-2 grid grid-cols-1 gap-4">
        <?php if( have_rows('side_posts') ): ?>
            <?php while( have_rows('side_posts') ): the_row(); ?>
                <div class="flex p-4 rounded-lg">
                    <img class="w-1/3 md:w-64  object-cover rounded-lg" src="<?php echo esc_url(get_sub_field('post_image')); ?>" alt="">
                    <div class="ml-4 w-2/3 md:w-auto flex flex-col justify-center space-y-1 md:space-y-3">
                        <p class="text-xs md:text-sm font-bold uppercase text-black"><?php echo esc_html(get_sub_field('post_category')); ?></p>
                        <h3 class="text-sm md:text-lg font-bold leading-tight"><?php echo esc_html(get_sub_field('post_title')); ?></h3>
                        <div class="text-xs md:text-sm text-black">
                            <span class="text-black uppercase font-semibold"><?php echo esc_html(get_sub_field('post_author')); ?></span> • <span class="text-black font-semibold"><?php echo esc_html(get_sub_field('post_date')); ?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>