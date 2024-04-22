<!DOCTYPE html>
<html lang="fr-FR" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TITRE DOCUMENT</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-bodyBack body">
  <a href="#" class="will-change-scroll js-to-top-button hidden xl:block p-2 border border-textColors-primary/50 rounded-md fixed bottom-7 xl:hover:bottom-8 xl:transition-all scale-0 right-7">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
      <path d="M20.4751 10.1625L12.6001 2.39998C12.2626 2.06248 11.7376 2.06248 11.4001 2.39998L3.5251 10.1625C3.1876 10.5 3.1876 11.025 3.5251 11.3625C3.8626 11.7 4.3876 11.7 4.7251 11.3625L11.1376 5.06248V21C11.1376 21.45 11.5126 21.825 11.9626 21.825C12.4126 21.825 12.8251 21.45 12.8251 21V4.98748L19.3126 11.3625C19.4626 11.5125 19.6876 11.5875 19.9126 11.5875C20.1376 11.5875 20.3626 11.5125 20.5126 11.325C20.8126 11.025 20.8126 10.4625 20.4751 10.1625Z" fill="#EDEDED80" />
    </svg>
  </a>

  <section class="bg-headerBack">
    <header class="fixed top-0 right-0 left-0 w-full flex flex-col py-6 md:py-3 backdrop-blur-md bg-headerBack/90 z-20">
      <div class="mx-auto w-11/12 max-w-5xl 2xl:max-w-7xl flex justify-between">
        <a href="#" class="flex gap-1 items-center">
          <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_212_394)">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H26V26H0V0ZM16.4513 5.07811H13.7038C13.3877 5.07811 13.0953 5.24537 12.9377 5.5163L3.85868 21.1074H6.61232C6.92493 21.1074 7.21377 20.9427 7.36963 20.6744L16.4513 5.07811ZM21.0656 21.1074H12.301H9.54736L18.6263 5.51631C18.784 5.24538 19.0763 5.07812 19.3925 5.07812H22.1399L14.359 18.4408L21.0674 18.4904C21.2902 18.4922 21.4707 18.6716 21.4707 18.8929V20.7066C21.4707 20.9279 21.2893 21.1074 21.0656 21.1074Z" fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_212_394">
                <rect width="26" height="26" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <p class="textLarge text-white">llayz</p>
        </a>

        <nav class="hidden md:flex md:gap-20 lg:gap-56 xl:gap-80">
          <ul class="flex gap-1">
            <li class="relative group">
              <a href="#" class="h-full textNav py-2 px-4 flex items-center rounded-md md:hover:bg-white/5 transition-colors duration-200 cursor-pointer nav__item active z-20">Projects</a>
              <div class="nav__active z-10 hidden"></div>
            </li>
            <li class="relative group">
              <a href="#" class="h-full textNav py-2 px-4 flex items-center rounded-md md:hover:bg-white/5 transition-colors duration-200 cursor-pointer nav__item z-20">Contact</a>
              <div class="nav__active z-10 hidden"></div>
            </li>
            <li class="relative group">
              <a href="#" class="h-full textNav py-2 px-4 flex items-center rounded-md md:hover:bg-white/5 transition-colors duration-200 cursor-pointer nav__item z-20">Admin</a>
              <div class="nav__active z-10 hidden"></div>
            </li>
          </ul>
        </nav>

        <button class="hidden md:flex buttonPrimary gap-2 px-7 py-2 items-center bg-buttonColor-background-normal border border-buttonColor-borderColor-normal rounded-md md:hover:bg-buttonColor-background-hover md:hover:border-buttonColor-borderColor-hover transition-colors duration-200">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
            <path d="M10.2261 4.94999V5.35713L10.6248 5.43962C11.8614 5.69547 12.7719 6.75348 12.7512 7.99166L12.7511 7.99166V7.99999V12.55C12.7511 13.9238 11.625 15.05 10.2511 15.05H3.65115C2.29955 15.05 1.17615 13.9461 1.17615 12.575V8.04999C1.17615 6.74333 2.10224 5.67206 3.31931 5.44123L3.72615 5.36408V4.94999V4.14999C3.72615 3.26967 4.11381 2.40344 4.78629 1.79604C5.46346 1.1844 6.37658 0.861818 7.27874 0.947738L7.27874 0.947803L7.2868 0.948439C8.90641 1.0763 10.2261 2.53999 10.2261 4.29999V4.94999ZM9.60115 5.37499H10.1011V4.87499V4.29999C10.1011 2.66157 8.87417 1.22901 7.27451 1.07733C6.38015 0.988296 5.51636 1.28771 4.86481 1.88002C4.21448 2.47123 3.85115 3.27893 3.85115 4.12499V4.87499V5.37499H4.35115H9.60115ZM10.2761 14.95C11.5773 14.95 12.6511 13.8761 12.6511 12.575V7.99999C12.6511 6.63287 11.486 5.52499 10.1011 5.52499H3.85115C2.45001 5.52499 1.32615 6.64885 1.32615 8.04999V12.6C1.32615 13.9011 2.37501 14.95 3.67615 14.95H10.2761Z" stroke="#ededed" />
            <path d="M6.90112 9.2C6.90112 9.1833 6.90724 9.16603 6.92436 9.14942C6.94359 9.13075 6.96465 9.125 6.97612 9.125C6.98835 9.125 7.01207 9.13149 7.03344 9.1516C7.04733 9.16467 7.05051 9.17387 7.05112 9.17634V11.825C7.05112 11.8417 7.045 11.859 7.02788 11.8756C7.00865 11.8943 6.98759 11.9 6.97612 11.9C6.95942 11.9 6.94215 11.8939 6.92554 11.8768C6.90687 11.8575 6.90112 11.8365 6.90112 11.825V9.2Z" stroke="#ededed" />
          </svg>
          Connexion
        </button>

        <button class="md:hidden w-[26px] aspect-square relative overflow-hidden origin-[50%_50%_0px] js-burger-menu">
          <div class="line__child line__top"></div>
          <div class="line__child line__middle"></div>
          <div class="line__child line__bottom"></div>
        </button>
      </div>
      <div class="hidden mx-auto w-11/12 max-w-5xl 2xl:max-w-7xl js-dropmenu">
        <nav class="pt-6">
          <ul class="flex flex-col gap-1">
            <li class="py-2">
              <a href="#" class="text-xl font-semibold text-textColors-navPrimary">Projects</a>
            </li>
            <li class="py-2">
              <a href="#" class="text-xl font-semibold text-textColors-navPrimary">Contact</a>
            </li>
            <li class="py-2">
              <a href="#" class="text-xl font-semibold text-textColors-navPrimary">Admin</a>
            </li>
            <li class="py-2">
              <button class="w-full flex justify-center buttonPrimary gap-2 px-7 py-2 items-center bg-buttonColor-background-normal border border-buttonColor-borderColor-normal rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                  <path d="M10.2261 4.94999V5.35713L10.6248 5.43962C11.8614 5.69547 12.7719 6.75348 12.7512 7.99166L12.7511 7.99166V7.99999V12.55C12.7511 13.9238 11.625 15.05 10.2511 15.05H3.65115C2.29955 15.05 1.17615 13.9461 1.17615 12.575V8.04999C1.17615 6.74333 2.10224 5.67206 3.31931 5.44123L3.72615 5.36408V4.94999V4.14999C3.72615 3.26967 4.11381 2.40344 4.78629 1.79604C5.46346 1.1844 6.37658 0.861818 7.27874 0.947738L7.27874 0.947803L7.2868 0.948439C8.90641 1.0763 10.2261 2.53999 10.2261 4.29999V4.94999ZM9.60115 5.37499H10.1011V4.87499V4.29999C10.1011 2.66157 8.87417 1.22901 7.27451 1.07733C6.38015 0.988296 5.51636 1.28771 4.86481 1.88002C4.21448 2.47123 3.85115 3.27893 3.85115 4.12499V4.87499V5.37499H4.35115H9.60115ZM10.2761 14.95C11.5773 14.95 12.6511 13.8761 12.6511 12.575V7.99999C12.6511 6.63287 11.486 5.52499 10.1011 5.52499H3.85115C2.45001 5.52499 1.32615 6.64885 1.32615 8.04999V12.6C1.32615 13.9011 2.37501 14.95 3.67615 14.95H10.2761Z" stroke="#ededed" />
                  <path d="M6.90112 9.2C6.90112 9.1833 6.90724 9.16603 6.92436 9.14942C6.94359 9.13075 6.96465 9.125 6.97612 9.125C6.98835 9.125 7.01207 9.13149 7.03344 9.1516C7.04733 9.16467 7.05051 9.17387 7.05112 9.17634V11.825C7.05112 11.8417 7.045 11.859 7.02788 11.8756C7.00865 11.8943 6.98759 11.9 6.97612 11.9C6.95942 11.9 6.94215 11.8939 6.92554 11.8768C6.90687 11.8575 6.90112 11.8365 6.90112 11.825V9.2Z" stroke="#ededed" />
                </svg>
                Connexion
              </button>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  </section>