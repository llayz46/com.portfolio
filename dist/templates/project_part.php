<?php 
  $skills = getProjectById($pdo, $project['id']);
?>

<div class="p-px flex card-wrapper overflow-hidden relative rounded-xl z-10 js-scroll-animation">
  <a href="" class="p-6 border border-buttonColor-borderColor-normal bg-bodyBack rounded-xl z-20">
    <div class="flex flex-col gap-6">
      <div class="flex gap-3">
        <?php foreach ($skills as $skill) { ?>
          <div class="badgeSkill">
            <img width="12" height="12" src="assets/image/badge-<?=$skill['skill'] ?>.svg" alt="">
          </div>
        <?php } ?>
      </div>
      <img width="918" height="612" src="<?=_PATH_UPLOADS_PROJECTS_ . 'project-' . $project['id'] . '.png'?>" alt="" class="rounded max-w-[375] aspect-[3/2] object-cover object-top">
      <div class="flex flex-col gap-1.5">
        <h4 class="font-semibold text-textColors-cardPrimary text-base leading-5"><?=$project['title']?></h4>
        <p class="text-textColors-cardPrimary/[.5] text-base leading-5"><?=$project['content']?></p>
      </div>
    </div>
  </a>
</div>