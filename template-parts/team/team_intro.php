<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if ($args) {
  extract($args);
}

$members = valtes_get_field('members', []);

?>

<section class="mx-auto bg-[#f0f5ff] pb-10">
    <div class="max-w-4xl mx-auto 2xl:max-w-5xl container pt-28 flex flex-col items-center px-5 sm:px-0">
        <h1 class="mb-6 text-3xl leading-9 font-bold text-center">
            <?php echo $members['title']; ?>
        </h1>
        <p class="mb-6 text-gray-700 font-normal leading-4 tracking-wide text-sm sm:w-[60%] text-center">
            <?php echo $members['description']; ?>
        </p>
        <!-- members -->
        <div class="grid sm:grid-cols-2 grid-cols-1 mt-10 gap-2">
            <?php foreach($members['members'] as $member): ?>
            <div class=" flex flex-wrap sm:flex-nowrap items-center justify-center">
                <div class="">
                    <img src="<?php echo $member['image']['url']; ?>" alt="<?php echo $member['image']['alt']; ?>"
                        class=" h-40 w-40 rounded-full object-cover">
                </div>
                <div class="sm:w-[60%] sm:pl-5">
                    <div class="sm:block flex item-center justify-between mt-5 sm:mt-0">
                        <h2 class=" text-lg font-bold">
                            <?php echo $member['name']; ?>
                        </h2>
                        <div class=" text-blue-800 sm:mt-2 flex items-center font-bold text-sm">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-brand-linkedin">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" />
                                </svg></span>
                            <p class=" ml-2">
                                <?php echo $member['designation']; ?>
                            </p>
                        </div>
                    </div>
                    <p class=" text-xs mt-2 leading-3.5">
                        <?php echo $member['description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>