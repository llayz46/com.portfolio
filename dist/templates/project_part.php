<?php 
  $skills = getProjectById($pdo, $project['id']);

  $imagePath = 'uploads/projects/project-' . $project['id'] . '.png';

  $adminCheck = basename(dirname($_SERVER['SCRIPT_FILENAME']));
?>

<div class="p-px flex card-wrapper overflow-hidden relative rounded-xl z-10 <?php if($adminCheck !== 'admin') { echo 'js-scroll-animation'; } ?>">
  <a href="<?php if($adminCheck === 'admin') { echo '../project.php?id=' . $project['id']; } else { echo 'project.php?id=' . $project['id']; } ?>" class="p-6 border border-buttonColor-borderColor-normal bg-bodyBack rounded-xl z-20">
    <div class="flex flex-col gap-6">
      <div class="flex gap-3">
        <?php foreach ($skills as $skill) { ?>
          <div class="badgeSkill">
            <img width="12" height="12" src="<?php if($adminCheck === 'admin') { echo '../'; } ?>assets/image/badge-<?=$skill['skill'] ?>.svg" alt="">
          </div>
        <?php } ?>
      </div>
      <img width="918" height="612" src="<?=getProjectImageById($imagePath)?>" alt="" class="rounded max-w-[375] aspect-[3/2] object-cover object-top">
      <div class="flex flex-col gap-1.5">
        <h4 class="font-semibold text-textColors-cardPrimary text-base leading-5"><?=$project['title']?></h4>
        <p class="text-textColors-cardPrimary/[.5] text-base leading-5"><?=$project['content']?></p>
      </div>
    </div>
  </a>
</div>