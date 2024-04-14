<?php
require_once 'templates/header.php';
require_once 'lib/config.php';

$projects = [
  [
    'title' => 'Alan Recode',
    'tech' => 'HTML CSS',
    'link' => 'https://llayz.online/',
    'image' => 'Alan-card-example.png'
  ],
  [
    'title' => 'Landing Page',
    'tech' => 'HTML SASS JS',
    'link' => './projects/Phone-Landing-Page/index.html',
    'image' => 'Landing-page-phone-example.jpg'
  ],
  [
    'title' => 'Planity Recode',
    'tech' => 'HTML CSS',
    'link' => 'https://re-code-planity.netlify.app/',
    'image' => 'planity-example.png'
  ],
  [
    'title' => 'ToDo List',
    'tech' => 'BOOTSTRAP TS',
    'link' => './projects/ToDo-List/index.html',
    'image' => 'ToDoList-example.jpg'
  ],
  [
    'title' => 'Memory Game',
    'tech' => 'JavaScript',
    'link' => './projects/Memory-Game/index.html',
    'image' => 'Memory-Game-example.jpg'
  ],
  [
    'title' => 'Dictionnaire Anglais',
    'tech' => 'JavaScript API',
    'link' => './projects/Dico-Anglais/index.html',
    'image' => 'Dico-exemple.jpg'
  ],
  [
    'title' => 'MDP Générateur',
    'tech' => 'JavaScript',
    'link' => './projects/Password-Generator/index.html',
    'image' => 'Password-generator-example.jpg'
  ],
  [
    'title' => 'Random Chooser',
    'tech' => 'JavaScript',
    'link' => './projects/Random-Chooser/index.html',
    'image' => 'Random-chooser-example.jpg'
  ],
  [
    'title' => 'Calculatrice',
    'tech' => 'JavaScript',
    'link' => './projects/Calculator/index.html',
    'image' => 'Calculator-example.jpg'
  ]
];
?>

<!-- START : hero -->
<section class="hero flux">
  <h1 class="hero__title">Portfolio intermédiaire développé en SASS</h1>
  <p class="hero__description">
    Ce portfolio intérimaire offre un aperçu rapide de mes projets en
    attendant la création de mon portfolio principal. Explorez ces
    réalisations pour avoir un avant-goût de mon travail en cours. Restez
    connecté, mon portfolio complet sera bientôt disponible pour une
    expérience plus approfondie. Merci de votre visite !
  </p>
  <a class="hero__button" href="#contact">Me contacter</a>
  <div class="hero__example-container">
    <img class="hero__example" src="./assets/images/page-recode-alan.com.png" alt="Exemple de page : recode du site Alan.com" />

    <svg class="hero__dot-grid hero__dot-grid--bleft" xmlns="http://www.w3.org/2000/svg" width="35" height="110" viewBox="0 0 35 110" fill="none">
      <circle cx="2.5" cy="2.5" r="2.5" fill="white" />
      <circle cx="17.5" cy="2.5" r="2.5" fill="white" />
      <circle cx="32.5" cy="2.5" r="2.5" fill="white" />
      <circle cx="2.5" cy="62.5" r="2.5" fill="white" />
      <circle cx="17.5" cy="62.5" r="2.5" fill="white" />
      <circle cx="32.5" cy="62.5" r="2.5" fill="white" />
      <circle cx="2.5" cy="32.5" r="2.5" fill="white" />
      <circle cx="17.5" cy="32.5" r="2.5" fill="white" />
      <circle cx="32.5" cy="32.5" r="2.5" fill="white" />
      <circle cx="2.5" cy="92.5" r="2.5" fill="white" />
      <circle cx="17.5" cy="92.5" r="2.5" fill="white" />
      <circle cx="32.5" cy="92.5" r="2.5" fill="white" />
      <circle cx="2.5" cy="17.5" r="2.5" fill="white" />
      <circle cx="17.5" cy="17.5" r="2.5" fill="white" />
      <circle cx="32.5" cy="17.5" r="2.5" fill="white" />
      <circle cx="2.5" cy="77.5" r="2.5" fill="white" />
      <circle cx="17.5" cy="77.5" r="2.5" fill="white" />
      <circle cx="32.5" cy="77.5" r="2.5" fill="white" />
      <circle cx="2.5" cy="47.5" r="2.5" fill="white" />
      <circle cx="17.5" cy="47.5" r="2.5" fill="white" />
      <circle cx="32.5" cy="47.5" r="2.5" fill="white" />
      <circle cx="2.5" cy="107.5" r="2.5" fill="white" />
      <circle cx="17.5" cy="107.5" r="2.5" fill="white" />
      <circle cx="32.5" cy="107.5" r="2.5" fill="white" />
    </svg>

    <svg class="hero__dot-grid hero__dot-grid--tright" xmlns="http://www.w3.org/2000/svg" width="140" height="110" viewBox="0 0 140 110" fill="none">
      <circle cx="107.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="122.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="137.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="122.5" cy="62.5" r="2.5" fill="white"></circle>
      <circle cx="137.5" cy="62.5" r="2.5" fill="white"></circle>
      <circle cx="122.5" cy="32.5" r="2.5" fill="white"></circle>
      <circle cx="137.5" cy="32.5" r="2.5" fill="white"></circle>
      <circle cx="122.5" cy="92.5" r="2.5" fill="white"></circle>
      <circle cx="137.5" cy="92.5" r="2.5" fill="white"></circle>
      <circle cx="107.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="122.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="137.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="122.5" cy="77.5" r="2.5" fill="white"></circle>
      <circle cx="137.5" cy="77.5" r="2.5" fill="white"></circle>
      <circle cx="122.5" cy="47.5" r="2.5" fill="white"></circle>
      <circle cx="137.5" cy="47.5" r="2.5" fill="white"></circle>
      <circle cx="122.5" cy="107.5" r="2.5" fill="white"></circle>
      <circle cx="137.5" cy="107.5" r="2.5" fill="white"></circle>
      <circle cx="62.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="77.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="92.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="62.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="77.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="92.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="17.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="32.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="47.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="17.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="32.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="47.5" cy="17.5" r="2.5" fill="white"></circle>
      <circle cx="2.5" cy="2.5" r="2.5" fill="white"></circle>
      <circle cx="2.5" cy="17.5" r="2.5" fill="white"></circle>
    </svg>
  </div>
</section>
<!-- END : hero -->

<!-- START : project -->
<section class="project js-main" id="project">
  <div class="project__container-texts flux">
    <h3 class="project__breadcrumb">Portfolio</h3>
    <h2 class="project__title js-title">Mes projets récent</h2>
    <p class="project__description js-content">
      Retrouvez ici tous mes projets ainsi que les technologies et
      langages utilisés pour les développer. Plongez dans cette collection
      de réalisations qui témoignent de mon engagement et de mon
      savoir-faire. <br /><br />
      N'hésitez pas à me contacter pour en savoir plus ou discuter de
      collaborations futures.
    </p>
  </div>
  <div class="splide flux" role="group" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
      <ul class="splide__list">
        <?php foreach ($projects as $project) { ?>
          <li class="splide__slide">
            <div class="project__card">
              <img src="<?= PATH_ASSETS_IMAGES . $project['image'] ?>" alt="" class="project__card-image" />
              <div class="project__card-texts js-cards">
                <p class="project__card-tech"><?=$project['tech']?></p>
                <h4 class="project__card-title js-cards-text">
                  <?=$project['title']?>
                </h4>
                <a href="<?=$project['link']?>" class="project__card-button js-cards-text js-cards-btn" target="_blank">Voir projet</a>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>
<!-- END : project -->

<!-- START : SKILLS -->
<section class="skills js-skills" id="skills">
  <div class="skills__container-texts flux">
    <h3 class="skills__breadcrumb">Technologies</h3>
    <h2 class="skills__title js-title">Technologies maîtrisées</h2>
    <p class="skills__description js-content">
      Voici les technologies que je maîtrise et que j'utilise pour
      développer des projets. Lorem ipsum dolor sit amet consectetur
      adipisicing elit. Facere at fugit fugiat quo. Odio, omnis.
      Explicabo, quasi eveniet ipsa eos impedit voluptates reprehenderit,
      consequuntur ex enim ipsam corrupti! At in, consequuntur eius veniam
      ex eos.
    </p>
  </div>
  <div class="skills__brand-container js-skills-brand">
    <div class="skills__side-fade skills__side-fade--left js-skills-fade-left"></div>
    <div class="skills__side-fade skills__side-fade--right js-skills-fade-right"></div>
    <div class="skills__brand">
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_37_7789)">
          <path d="M0.375 0.375V23.625H23.625V0.375H0.375ZM13.05 18.4875C13.05 20.775 11.7 21.825 9.75 21.825C8.025 21.825 7.0125 20.925 6.4875 19.8L8.2875 18.675C8.5875 19.3125 8.925 19.8 9.7125 19.8C10.4625 19.8 10.875 19.5375 10.875 18.4125V11.0625H13.05V18.4875ZM18.225 21.825C16.2 21.825 14.8875 20.8125 14.2125 19.6125L16.0125 18.5625C16.5 19.3125 17.1375 19.875 18.1875 19.875C19.0875 19.875 19.65 19.4625 19.65 18.75C19.65 18 19.0875 17.7375 18.075 17.2875L17.55 17.0625C15.975 16.425 14.925 15.525 14.925 13.725C14.925 12.075 16.125 10.875 18.1125 10.875C19.5 10.875 20.475 11.3625 21.1875 12.6375L19.5 13.7625C19.125 13.125 18.75 12.825 18.075 12.825C17.4375 12.825 17.025 13.2375 17.025 13.7625C17.025 14.4 17.4375 14.6625 18.3375 15.075L18.8625 15.3C20.7 16.0875 21.7875 16.875 21.7875 18.75C21.825 20.7375 20.2875 21.825 18.225 21.825Z" fill="#F0DB4F" />
        </g>
        <defs>
          <clipPath id="clip0_37_7789">
            <rect width="24" height="24" fill="white" />
          </clipPath>
        </defs>
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <mask id="mask0_37_7607" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
          <path d="M24 0H0V24H24V0Z" fill="white" />
        </mask>
        <g mask="url(#mask0_37_7607)">
          <path d="M21.619 0H2.60359C1.32929 0 0.295898 1.04953 0.295898 2.34375V21.6562C0.295898 22.9505 1.32929 24 2.60359 24H21.619C22.8933 24 23.9267 22.9505 23.9267 21.6562V2.34375C23.9267 1.04953 22.8933 0 21.619 0ZM14.0036 13.3125H11.0497V21.8906H8.69587V13.3125H5.74204V11.3906H14.0036V13.3125ZM21.619 20.3484C21.4343 20.7703 21.1159 21.0844 20.742 21.3328C20.3728 21.5625 19.9574 21.7406 19.4497 21.8484C18.942 21.9563 18.4343 22.0078 17.8805 22.0078C17.3267 22.0078 16.7728 21.9609 16.2651 21.8625C15.7574 21.7641 15.3005 21.6187 14.9267 21.4219V19.1696C14.8976 19.1461 14.8676 19.1231 14.839 19.0988L14.9267 19.0781V19.1696C15.319 19.4859 15.751 19.7297 16.2236 19.8956C16.6851 20.0738 17.1928 20.1628 17.7005 20.1628C18.0236 20.1628 18.2682 20.1347 18.4851 20.0831C18.7113 20.0269 18.8913 19.9519 19.039 19.8581C19.1866 19.7644 19.2965 19.6519 19.3667 19.5206C19.4369 19.3894 19.4728 19.2488 19.4728 19.0988C19.4728 18.8831 19.4128 18.6956 19.2975 18.5363C19.1913 18.3769 19.0344 18.2269 18.8359 18.0909C18.6513 17.955 18.4205 17.8238 18.1436 17.6972C17.8667 17.5706 17.5851 17.4394 17.2667 17.3081C16.4821 16.9331 15.8636 16.5581 15.4667 16.0425C15.0651 15.5737 14.8667 14.9644 14.8667 14.2612C14.8667 13.6987 14.9729 13.2487 15.1898 12.855C15.4205 12.4331 15.6929 12.1238 16.0667 11.8706C16.4359 11.6128 16.8513 11.4253 17.359 11.3081C17.8667 11.1909 18.3744 11.13 18.9282 11.13C19.4821 11.13 19.9436 11.1628 20.359 11.2284C20.7744 11.2941 21.1621 11.3972 21.5128 11.5331V13.7363C21.3513 13.6144 21.1621 13.5066 20.959 13.4128C20.7421 13.3191 20.5297 13.2441 20.3128 13.1831C20.0959 13.1222 19.879 13.0767 19.6667 13.0472C19.4636 13.0176 19.2605 13.0031 19.0667 13.0031C18.7851 13.0031 18.5451 13.0266 18.3282 13.0781C18.1067 13.1297 17.9221 13.2 17.7744 13.2938C17.6267 13.3875 17.5117 13.4953 17.4282 13.6266C17.3446 13.7578 17.3036 13.9031 17.3036 14.0625C17.3036 14.2359 17.3497 14.3906 17.442 14.5312C17.5343 14.6672 17.6636 14.7984 17.8343 14.925C17.9867 15.0469 18.1943 15.1688 18.4343 15.2906C18.7113 15.4125 18.9605 15.5344 19.2651 15.6609C19.6805 15.8391 20.0497 16.0359 20.3728 16.2234C20.6959 16.4109 20.9682 16.6313 21.2036 16.8797C21.4528 17.1141 21.6328 17.3953 21.7574 17.7234C21.882 18.0516 21.9466 18.4219 21.9466 18.8484C21.9466 19.4578 21.8036 19.9266 21.619 20.3484Z" fill="#3178c6" />
        </g>
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M12 2C6.47788 2 2 6.59041 2 12.2531C2 16.7833 4.86531 20.6266 8.83866 21.9824C9.33841 22.0773 9.52193 21.76 9.52193 21.4891C9.52193 21.2447 9.5126 20.4369 9.50836 19.5802C6.72626 20.2004 6.13923 18.3704 6.13923 18.3704C5.68434 17.1853 5.02891 16.8703 5.02891 16.8703C4.12165 16.2339 5.0973 16.2469 5.0973 16.2469C6.1015 16.3193 6.63027 17.3035 6.63027 17.3035C7.52216 18.871 8.96964 18.4178 9.54028 18.1559C9.63001 17.4931 9.88921 17.0409 10.1752 16.7849C7.95406 16.5255 5.61909 15.6464 5.61909 11.7177C5.61909 10.5983 6.00974 9.6836 6.64948 8.96559C6.54564 8.7073 6.20338 7.6645 6.74634 6.25219C6.74634 6.25219 7.58608 5.97662 9.49707 7.3032C10.2947 7.07595 11.1502 6.96209 12 6.95823C12.8499 6.96209 13.706 7.07595 14.5052 7.3032C16.4139 5.97662 17.2525 6.25219 17.2525 6.25219C17.7968 7.6645 17.4544 8.7073 17.3505 8.96559C17.9917 9.6836 18.3797 10.5982 18.3797 11.7177C18.3797 15.6557 16.0403 16.5229 13.8135 16.7767C14.1722 17.0948 14.4918 17.7189 14.4918 18.6754C14.4918 20.0472 14.4802 21.1514 14.4802 21.4891C14.4802 21.762 14.6602 22.0817 15.1671 21.981C19.1383 20.6237 22 16.7818 22 12.2531C22 6.59041 17.5227 2 12 2Z" fill="#333" />
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M17.4929 8.00955H8.77835L8.98657 10.0127H17.2857C17.164 11.7675 16.796 15.4853 16.661 17.177L11.9996 18.4774V18.4813L11.9893 18.4862L7.32489 16.8596L7.00534 13.0175H9.29169L9.45353 15.0838L11.9935 16.0223H11.9996L14.5355 15.1209L14.7963 12.0159H6.90329C6.86515 11.6143 6.37448 6.39899 6.28892 6.00637H17.697C17.6331 6.66742 17.5681 7.3465 17.4929 8.00955ZM4.01068 2C3.41667 2 2.95077 2.50531 3.00417 3.09163L4.49579 19.4692C4.5344 19.8931 4.83903 20.2464 5.25541 20.3504L11.7403 21.9697C11.9037 22.0105 12.0749 22.0101 12.2381 21.9686L18.7468 20.3153C19.1612 20.21 19.4638 19.8576 19.5024 19.4354L20.9958 3.09193C21.0494 2.5055 20.5834 2 19.9893 2H4.01068Z" fill="#e34c26" />
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M12.254 21.965C12.0804 22.0117 11.8974 22.0117 11.7239 21.9649L5.23719 20.2161C4.82979 20.1063 4.53419 19.757 4.49592 19.3402L3.00424 3.09261C2.95038 2.5059 3.41641 2 4.01076 2H19.9892C20.5836 2 21.0497 2.50597 20.9957 3.09272L19.5026 19.3373C19.4643 19.7541 19.1685 20.1034 18.761 20.2131L12.254 21.965ZM6.69941 10.1628L6.9035 12.3745H14.7967L14.5323 15.243L11.9921 15.9088L11.9901 15.9095L9.45367 15.2444L9.29151 13.4804H7.00526L7.32431 16.9532L11.9896 18.2108L12.0001 18.2081L16.6611 16.9532L17.2306 10.7567L17.2862 10.1628L17.6973 5.68625H6.28922L6.49624 7.89798H15.2014L14.9941 10.1628H6.69941Z" fill="#264de4" />
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.93016 2.625C3.58182 2.625 2.58411 3.80048 2.62879 5.07525C2.67167 6.3 2.61596 7.88618 2.21507 9.1797C1.81274 10.4769 1.1328 11.2989 0.0219727 11.4044V12.5956C1.1328 12.7013 1.81274 13.523 2.21502 14.8203C2.61596 16.1138 2.67162 17.7 2.62874 18.9247C2.58407 20.1993 3.58178 21.375 4.93035 21.375H18.7463C20.0947 21.375 21.0922 20.1995 21.0476 18.9247C21.0047 17.7 21.0604 16.1138 21.4613 14.8203C21.8636 13.523 22.5419 12.701 23.6528 12.5956V11.4044C22.5419 11.2987 21.8637 10.4771 21.4613 9.1797C21.0603 7.88636 21.0047 6.3 21.0476 5.07525C21.0922 3.80066 20.0947 2.625 18.7463 2.625H4.93016ZM16.0428 14.1669C16.0428 15.9222 14.7284 16.9867 12.5469 16.9867H8.83343C8.72723 16.9867 8.62534 16.9447 8.55023 16.8699C8.47511 16.7951 8.43293 16.6936 8.43293 16.5878V7.41225C8.43293 7.30646 8.47511 7.20499 8.55023 7.13017C8.62534 7.05536 8.72723 7.01332 8.83343 7.01332H12.5257C14.3447 7.01332 15.5385 7.9947 15.5385 9.50145C15.5385 10.559 14.7354 11.5058 13.7123 11.6717V11.7269C15.1051 11.879 16.0428 12.8398 16.0428 14.1669ZM12.142 8.27794H10.0246V11.2569H11.8079C13.1866 11.2569 13.9467 10.7039 13.9467 9.71561C13.9466 8.78936 13.2931 8.27794 12.142 8.27794ZM10.0246 12.4388V15.7217H12.2199C13.6553 15.7217 14.4156 15.148 14.4156 14.0699C14.4156 12.9918 13.634 12.4387 12.1276 12.4387L10.0246 12.4388Z" fill="#712cf9" />
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1124 18.4518V22.5C18.8767 22.5 24.1522 15.8562 21.9365 8.65279C20.9752 5.5095 18.5016 3.00914 15.4066 2.0209C8.31405 -0.229419 1.77246 5.1285 1.77246 11.9985H5.77009C5.77009 7.68836 9.97875 4.35457 14.4453 5.99767C16.0983 6.60487 17.423 7.9503 18.0209 9.61721C19.649 14.1494 16.3623 18.4201 12.1241 18.428V14.3917H8.12648V18.4518H12.1124ZM8.12648 21.5594H5.0667V18.4518H8.12648V21.5594ZM2.49929 18.4518H5.0667V15.8443H2.49929V18.4518Z" fill="#0080FF" />
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.59464 9.75C7.33297 6.75011 9.17936 5.25 12.1331 5.25C16.5639 5.25 17.1177 8.625 19.3331 9.1875C20.8101 9.56261 22.1023 9.00011 23.21 7.5C22.4716 10.4999 20.6253 12 17.6715 12C13.2408 12 12.6869 8.625 10.4715 8.0625C8.99452 7.68739 7.70231 8.24989 6.59464 9.75ZM1.05615 16.5C1.79449 13.5001 3.64088 12 6.59464 12C11.0254 12 11.5793 15.375 13.7946 15.9375C15.2717 16.3126 16.5639 15.7501 17.6715 14.25C16.9332 17.2499 15.0868 18.75 12.1331 18.75C7.70231 18.75 7.14847 15.375 4.93309 14.8125C3.45603 14.4374 2.16384 14.9999 1.05615 16.5Z" fill="#0ea5e9" />
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="240px" height="240px">
        <linearGradient id="HjBUFHyNtcsDcBgnZBZ2Sa" x1="37.8" x2="37.8" y1="43.37" y2="7.42" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#29b6f6" />
          <stop offset="1" stop-color="#13b2f6" />
        </linearGradient>
        <path fill="url(#HjBUFHyNtcsDcBgnZBZ2Sa)" d="M34.176,4.249c0.188,0.092,5.688,2.716,8.374,3.998C43.437,8.67,44,9.564,44,10.546v26.86	c0,0.981-0.559,1.874-1.443,2.299c-2.548,1.228-7.611,3.666-7.948,3.826C34.361,43.649,33.709,44,33.181,44	c-0.678,0-1.133-0.316-1.58-0.73L34,35.711V5.715l-2.254-1.135C32.228,4.109,32.896,4,33.291,4C33.653,4,33.948,4.138,34.176,4.249z" />
        <linearGradient id="HjBUFHyNtcsDcBgnZBZ2Sb" x1="6.085" x2="34.793" y1="34.801" y2="7.173" gradientUnits="userSpaceOnUse">
          <stop offset=".115" stop-color="#0076bb" />
          <stop offset=".257" stop-color="#0069b0" />
          <stop offset=".28" stop-color="#0069b0" />
          <stop offset=".424" stop-color="#0069b0" />
          <stop offset=".491" stop-color="#0072b7" />
          <stop offset=".577" stop-color="#0076bb" />
          <stop offset=".795" stop-color="#0076bb" />
          <stop offset="1" stop-color="#006eb9" />
        </linearGradient>
        <path fill="url(#HjBUFHyNtcsDcBgnZBZ2Sb)" d="M9,33.896l25-19.023V5.83c0-1.299-1.662-1.808-2.337-1.184	C31.008,5.25,4.658,29.239,4.658,29.239c-0.9,0.83-0.849,2.267,0.107,3.032c0,0,1.324,1.232,1.803,1.574	C7.304,34.37,8.271,34.43,9,33.896z" />
        <path fill="#0288d1" d="M9,14.104l25,19.054v8.771c0,1.198-1.42,2.193-2.399,1.341L4.658,18.761	c-0.9-0.83-0.849-2.267,0.107-3.032c0,0,1.324-1.232,1.803-1.574C7.304,13.63,8.271,13.57,9,14.104z" />
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="38" height="57" viewBox="0 0 38 57" fill="none">
        <g clip-path="url(#clip0_42_3791)">
          <path d="M19 28.5C19 25.9804 20.0009 23.5641 21.7825 21.7825C23.5641 20.0009 25.9804 19 28.5 19C31.0196 19 33.4359 20.0009 35.2175 21.7825C36.9991 23.5641 38 25.9804 38 28.5C38 31.0196 36.9991 33.4359 35.2175 35.2175C33.4359 36.9991 31.0196 38 28.5 38C25.9804 38 23.5641 36.9991 21.7825 35.2175C20.0009 33.4359 19 31.0196 19 28.5V28.5Z" fill="#1ABCFE" />
          <path d="M0 47.5C0 44.9804 1.00089 42.5641 2.78249 40.7825C4.56408 39.0009 6.98044 38 9.5 38H19V47.5C19 50.0196 17.9991 52.4359 16.2175 54.2175C14.4359 55.9991 12.0196 57 9.5 57C6.98044 57 4.56408 55.9991 2.78249 54.2175C1.00089 52.4359 0 50.0196 0 47.5H0Z" fill="#0ACF83" />
          <path d="M19 0V19H28.5C31.0196 19 33.4359 17.9991 35.2175 16.2175C36.9991 14.4359 38 12.0196 38 9.5C38 6.98044 36.9991 4.56408 35.2175 2.78249C33.4359 1.00089 31.0196 0 28.5 0L19 0Z" fill="#FF7262" />
          <path d="M0 9.5C0 12.0196 1.00089 14.4359 2.78249 16.2175C4.56408 17.9991 6.98044 19 9.5 19H19V0H9.5C6.98044 0 4.56408 1.00089 2.78249 2.78249C1.00089 4.56408 0 6.98044 0 9.5H0Z" fill="#F24E1E" />
          <path d="M0 28.5C0 31.0196 1.00089 33.4359 2.78249 35.2175C4.56408 36.9991 6.98044 38 9.5 38H19V19H9.5C6.98044 19 4.56408 20.0009 2.78249 21.7825C1.00089 23.5641 0 25.9804 0 28.5H0Z" fill="#A259FF" />
        </g>
        <defs>
          <clipPath id="clip0_42_3791">
            <rect width="38" height="57" fill="white" />
          </clipPath>
        </defs>
      </svg>
      <svg class="skills__brand-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_37_7720)">
          <path d="M23.4381 11.625L12.3381 0.4875C12.1881 0.3375 11.8131 0.3375 11.5881 0.4875L8.5131 3.5625L11.3631 6.4125C11.5881 6.3 11.8506 6.2625 12.1131 6.2625C13.1631 6.2625 13.9506 7.125 13.9506 8.1C13.9506 8.3625 13.9131 8.625 13.8006 8.85L16.0881 11.1375C16.3131 11.025 16.5756 10.9875 16.8381 10.9875C17.8881 10.9875 18.6756 11.85 18.6756 12.825C18.6756 13.875 17.8131 14.6625 16.8381 14.6625C15.7881 14.6625 15.0006 13.8 15.0006 12.825C15.0006 12.5625 15.0381 12.3 15.1506 12.075L12.8631 9.7875H12.8256V14.1C13.5006 14.4 13.9881 15.0375 13.9881 15.825C13.9881 16.875 13.1256 17.6625 12.1506 17.6625C11.1006 17.6625 10.3131 16.8 10.3131 15.825C10.3131 15.0375 10.8006 14.3625 11.4756 14.1V9.9C10.8006 9.6 10.3131 8.9625 10.3131 8.175C10.3131 7.9125 10.3506 7.65 10.4631 7.425L7.6131 4.575L0.525586 11.625C0.375586 11.775 0.375586 12.15 0.525586 12.375L11.6631 23.5125C11.8131 23.6625 12.1881 23.6625 12.4131 23.5125L23.5131 12.375C23.6256 12.15 23.6256 11.85 23.4381 11.625Z" fill="#F1502F" />
        </g>
        <defs>
          <clipPath id="clip0_37_7720">
            <rect width="24" height="24" fill="white" />
          </clipPath>
        </defs>
      </svg>
    </div>
  </div>
</section>
<!-- END : SKILLS -->

<!-- START : contact -->
<section class="contact js-main" id="contact">
  <div class="contact__flux flux">
    <div class="contact__container-texts">
      <h3 class="contact__breadcrumb">Me contacter</h3>
      <h2 class="contact__title js-title">Collaboration commerciale</h2>
      <p class="contact__description js-content">
        Bienvenue sur ma page de contact ! Si vous avez des questions, des
        suggestions ou si vous souhaitez discuter de projets potentiels,
        n'hésitez pas à me contacter. Je suis toujours ouvert aux
        nouvelles opportunités de collaboration. <br />
        Utilisez le formulaire pour m'envoyer un message, et je vous
        répondrai dans les plus brefs délais. Merci de visiter mon
        portfolio !
      </p>
      <div class="contact__wrapper">
        <div class="contact__icon">
          <div class="contact__icon-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path d="M24.3 31.1499C22.95 31.1499 21.4 30.7999 19.7 30.1499C16.3 28.7999 12.55 26.1999 9.20003 22.8499C5.85003 19.4999 3.25003 15.7499 1.90003 12.2999C0.400031 8.59994 0.550031 5.54994 2.30003 3.84994C2.35003 3.79994 2.45003 3.74994 2.50003 3.69994L6.70003 1.19994C7.75003 0.599942 9.10003 0.899942 9.80003 1.89994L12.75 6.29994C13.45 7.34994 13.15 8.74994 12.15 9.44994L10.35 10.6999C11.65 12.7999 15.35 17.9499 21.25 21.6499L22.35 20.0499C23.2 18.8499 24.55 18.4999 25.65 19.2499L30.05 22.1999C31.05 22.8999 31.35 24.2499 30.75 25.2999L28.25 29.4999C28.2 29.5999 28.15 29.6499 28.1 29.6999C27.2 30.6499 25.9 31.1499 24.3 31.1499ZM3.80003 5.54994C2.85003 6.59994 2.90003 8.74994 4.00003 11.4999C5.25003 14.6499 7.65003 18.0999 10.8 21.2499C13.9 24.3499 17.4 26.7499 20.5 27.9999C23.2 29.0999 25.35 29.1499 26.45 28.1999L28.85 24.0999C28.85 24.0499 28.85 24.0499 28.85 23.9999L24.45 21.0499C24.45 21.0499 24.35 21.0999 24.25 21.2499L23.15 22.8499C22.45 23.8499 21.1 24.1499 20.1 23.4999C13.8 19.5999 9.90003 14.1499 8.50003 11.9499C7.85003 10.8999 8.10003 9.54994 9.10003 8.84994L10.9 7.59994V7.54994L7.95003 3.14994C7.95003 3.09994 7.90003 3.09994 7.85003 3.14994L3.80003 5.54994Z" fill="#3758F9" />
              <path d="M29.3 14.25C28.7 14.25 28.25 13.8 28.2 13.2C27.8 8.15003 23.65 4.10003 18.55 3.75003C17.95 3.70003 17.45 3.20003 17.5 2.55003C17.55 1.95003 18.05 1.45003 18.7 1.50003C24.9 1.90003 29.95 6.80003 30.45 13C30.5 13.6 30.05 14.15 29.4 14.2C29.4 14.25 29.35 14.25 29.3 14.25Z" fill="#3758F9" />
              <path d="M24.35 14.6999C23.8 14.6999 23.3 14.2999 23.25 13.6999C22.95 10.9999 20.85 8.89994 18.15 8.54994C17.55 8.49994 17.1 7.89994 17.15 7.29994C17.2 6.69994 17.8 6.24994 18.4 6.29994C22.15 6.74994 25.05 9.64994 25.5 13.3999C25.55 13.9999 25.15 14.5499 24.5 14.6499C24.4 14.6999 24.35 14.6999 24.35 14.6999Z" fill="#3758F9" />
            </svg>
          </div>
          <div class="contact__type-container">
            <h4 class="contact__type">Téléphone</h4>
            <p class="contact__type-content js-content">
              (+33) 6 ** ** ** **
            </p>
          </div>
        </div>
        <div class="contact__icon">
          <div class="contact__icon-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path d="M28.0001 4.80005H4.0001C2.3001 4.80005 0.850098 6.20005 0.850098 7.95005V24.15C0.850098 25.85 2.2501 27.3 4.0001 27.3H28.0001C29.7001 27.3 31.1501 25.9 31.1501 24.15V7.90005C31.1501 6.20005 29.7001 4.80005 28.0001 4.80005ZM28.0001 7.05005C28.0501 7.05005 28.1001 7.05005 28.1501 7.05005L16.0001 14.85L3.8501 7.05005C3.9001 7.05005 3.9501 7.05005 4.0001 7.05005H28.0001ZM28.0001 24.9501H4.0001C3.5001 24.9501 3.1001 24.55 3.1001 24.05V9.25005L14.8001 16.75C15.1501 17 15.5501 17.1 15.9501 17.1C16.3501 17.1 16.7501 17 17.1001 16.75L28.8001 9.25005V24.1C28.9001 24.6 28.5001 24.9501 28.0001 24.9501Z" fill="#3758F9" />
            </svg>
          </div>
          <div class="contact__type-container">
            <h4 class="contact__type">Adresse mail</h4>
            <p class="contact__type-content js-content">pro@llayz.fr</p>
          </div>
        </div>
      </div>
    </div>
    <div class="contact__container-form">
      <form method="post" enctype="text/plain" class="contact__form js-form" id="contact-form">
        <input type="text" name="name" id="name" placeholder="Nom" class="contact__form-input js-form js-form-border" required />
        <input type="email" name="email" id="email" placeholder="Email" class="contact__form-input js-form js-form-border" required />
        <input type="tel" name="phone" id="phone" placeholder="Téléphone" class="contact__form-input js-form js-form-border" required />
        <textarea name="message" id="message" placeholder="Message" class="contact__form-input contact__form-input--message js-form js-form-border" required></textarea>
        <input type="submit" value="Envoyer le message" class="contact__form-button" />
      </form>
      <svg class="contact__circle-icon" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z" fill="#3758F9" />
      </svg>

      <svg class="contact__dot-grid-tright" xmlns="http://www.w3.org/2000/svg" width="35" height="110" viewBox="0 0 35 110" fill="none">
        <circle cx="2.5" cy="2.5" r="1.66667" fill="#13C296" />
        <circle cx="17.5" cy="2.5" r="1.66667" fill="#13C296" />
        <circle cx="32.5" cy="2.5" r="1.66667" fill="#13C296" />
        <circle cx="2.5" cy="62.5" r="1.66667" fill="#13C296" />
        <circle cx="17.5" cy="62.5" r="1.66667" fill="#13C296" />
        <circle cx="32.5" cy="62.5" r="1.66667" fill="#13C296" />
        <circle cx="2.5" cy="32.5" r="1.66667" fill="#13C296" />
        <circle cx="17.5" cy="32.5" r="1.66667" fill="#13C296" />
        <circle cx="32.5" cy="32.5" r="1.66667" fill="#13C296" />
        <circle cx="2.5" cy="92.5" r="1.66667" fill="#13C296" />
        <circle cx="17.5" cy="92.5" r="1.66667" fill="#13C296" />
        <circle cx="32.5" cy="92.5" r="1.66667" fill="#13C296" />
        <circle cx="2.5" cy="17.5" r="1.66667" fill="#13C296" />
        <circle cx="17.5" cy="17.5" r="1.66667" fill="#13C296" />
        <circle cx="32.5" cy="17.5" r="1.66667" fill="#13C296" />
        <circle cx="2.5" cy="77.5" r="1.66667" fill="#13C296" />
        <circle cx="17.5" cy="77.5" r="1.66667" fill="#13C296" />
        <circle cx="32.5" cy="77.5" r="1.66667" fill="#13C296" />
        <circle cx="2.5" cy="47.5" r="1.66667" fill="#13C296" />
        <circle cx="17.5" cy="47.5" r="1.66667" fill="#13C296" />
        <circle cx="32.5" cy="47.5" r="1.66667" fill="#13C296" />
        <circle cx="2.5" cy="107.5" r="1.66667" fill="#13C296" />
        <circle cx="17.5" cy="107.5" r="1.66667" fill="#13C296" />
        <circle cx="32.5" cy="107.5" r="1.66667" fill="#13C296" />
      </svg>

      <svg class="contact__dot-grid-bleft" xmlns="http://www.w3.org/2000/svg" width="106" height="134" viewBox="0 0 106 134" fill="none">
        <circle cx="104" cy="117.333" r="1.66667" fill="#13C296"></circle>
        <circle cx="104" cy="102.667" r="1.66667" fill="#13C296"></circle>
        <circle cx="89.3333" cy="117.333" r="1.66667" fill="#13C296"></circle>
        <circle cx="89.3333" cy="102.667" r="1.66667" fill="#13C296"></circle>
        <circle cx="74.6668" cy="117.333" r="1.66667" fill="#13C296"></circle>
        <circle cx="31.0003" cy="117.333" r="1.66667" fill="#13C296"></circle>
        <circle cx="74.6668" cy="102.667" r="1.66667" fill="#13C296"></circle>
        <circle cx="31.0003" cy="102.667" r="1.66667" fill="#13C296"></circle>
        <circle cx="60.0003" cy="117.333" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="117.333" r="1.66667" fill="#13C296"></circle>
        <circle cx="60.0003" cy="102.667" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="102.667" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="87.9998" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="73.3331" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="44.9998" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="15.9998" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="58.9998" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="30.6666" r="1.66667" fill="#13C296"></circle>
        <circle cx="16.3333" cy="1.66659" r="1.66667" fill="#13C296"></circle>
        <circle cx="45.3333" cy="117.333" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="117.333" r="1.66667" fill="#13C296"></circle>
        <circle cx="45.3333" cy="102.667" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="102.667" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="87.9998" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="73.3331" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="44.9998" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="15.9998" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="58.9998" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="30.6666" r="1.66667" fill="#13C296"></circle>
        <circle cx="1.66683" cy="1.66659" r="1.66667" fill="#13C296"></circle>
      </svg>
    </div>
  </div>
</section>
<!-- END : contact -->

<?php
require_once 'templates/footer.php';
?>