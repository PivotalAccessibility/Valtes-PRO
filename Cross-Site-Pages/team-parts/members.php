<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$members = $args['members'];
$allTopMembers = $args['allTopMembers'];
$team_members = $args['team_members'];

?>

<section class="bg-primaryLight pt-20 md:px-20 px-4">
    <div class="flex flex-col justify-center items-center gap-6 container md:mt-8 mt-4 text-center">
        <div class="sm:w-[60%] w-full">
            <?php if (!empty($members['title'])): ?>
                <h1 class="section-heading text-center sm:mt-10">
                    <?php echo $members['title']; ?>
                </h1>
            <?php endif; ?>
            <?php if (!empty($members['description'])): ?>
                <p class="leading-5 section-description text-center mt-6">
                    <?php echo $members['description']; ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- members -->
        <div class="flex md:flex-row flex-col justify-between gap-16 md:mt-24 mt-10 mb-16">
            <?php foreach ($allTopMembers as $singleTopmember): ?>
                <?php if (!empty($singleTopmember['title'])): ?>
                    <div class="flex flex-row flex-wrap sm:flex-nowrap items-center justify-center gap-6">
                        <div class="">
                            <img src="<?= $singleTopmember['thumbnail'] ?>" alt="" class="w-[209px]">
                        </div>
                        <div class="flex md:flex-col flex-row gap-3 items-start max-md:w-full justify-between md:justify-start">
                            <h2 class="md:text-2xl text-xl font-bold text-left">
                                <?= $singleTopmember['title'] ?>
                            </h2>
                            <p class="md:text-xl text-base font-bold flex flex-row md:gap-4 gap-2.5 text-primary text-left">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-linkedin">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" />
                                    </svg>
                                </span>
                                <span>
                                    <?= $singleTopmember['designation'] ?>
                                </span>
                            </p>
                            <div class="md:block hidden text-base text-left ">
                                <?= apply_filters('the_content', $singleTopmember['content']); ?>
                            </div>
                        </div>
                        <div class="md:hidden block text-base text-left ">
                            <?= apply_filters('the_content', $singleTopmember['content']); ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php if (!empty($team_members)): ?>
    <section class="container md:py-20 py-10 px-5 sm:px-5 xl:px-0">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4">
            <?php foreach ($team_members as $member): ?>
                <div class="flex flex-col items-center sm:w-56 p-2">
                    <div class="h-40 w-40 rounded-full bg-[#e0eaff]">
                        <?php if ($member['thumbnail']): ?>
                            <img src="<?= esc_url($member['thumbnail']); ?>" alt="<?= esc_attr($member['title']); ?>" class="h-40 w-40 rounded-full object-cover">
                        <?php endif; ?>
                    </div>
                    <div class="mt-3 text-center flex flex-col sm:items-start items-center w-full members_info gap-3">
                        <h2 class="text-lg font-bold"><?= esc_html($member['title']); ?></h2>
                        <div class="text-blue-800 flex items-center font-bold text-base">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" />
                                </svg>
                            </span>
                            <p class="ml-2 text-left w-full">
                                <?= esc_html($member['designation']); ?>
                            </p>
                        </div>
                        <div class="text-base text-left">
                            <?= esc_html($member['excerpt']); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

?>