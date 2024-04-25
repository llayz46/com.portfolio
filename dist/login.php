<?php
require_once __DIR__ . '/templates/header.php';
?>

<div class="flex w-11/12 max-w-5xl 2xl:max-w-7xl mx-auto">
  <section class="min-h-screen w-full md:w-5/6 flex max-md:flex-col max-md:items-center items-start max-md:pt-32 md:items-center md:border-r border-buttonColor-borderColor-normal">
    <form class="flex flex-col max-md:justify-center w-10/12 gap-3 z-10 md:w-6/12">
      <label for="" class="flex flex-col gap-1.5 text-sm text-textColors-contactPrimary">
        Email
        <input type="text" placeholder="example@mail.com" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500">
      </label>
      <label for="" class="flex flex-col gap-1.5 text-sm text-textColors-contactPrimary">
        Password
        <input type="text" class="placeholder:text-textColors-contactSecondary py-2 pl-3 rounded-md border border-buttonColor-borderColor-normal bg-transparent focus-visible:outline outline-1 outline-transparent focus-visible:outline-accentColor-yellow/50 caret-accentColor-yellow transition-all duration-500">
      </label>
    </form>
  </section>

  <section class="hidden min-h-screen w-1/6 md:flex items-center">
    <a href="../index.php" class="flex gap-1 items-center py-6 md:-left-1 relative bg-bodyBack scale-125">
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
  </section>
</div>