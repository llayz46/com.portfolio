<section class="w-full md:w-10/12 flex flex-col">
  <header class="bg-gradient-to-r from-[#101010] from-0% via-headerBack via-5% to-headerBack to-100% py-3 pr-8 pl-6 flex justify-between items-center">
    <div>
      <p class="text-xl text-textColors-primary font-semibold">Hello <?=ucfirst($_SESSION['user']['name'])?>!</p>
      <p class="text-base text-textColors-navPrimary">Welcome back to dashboard.</p>
    </div>
    <div class="flex items-center gap-6">
      <div class="flex items-center gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12" fill="none">
          <g clip-path="url(#clip0_238_1263)">
            <path d="M0 0H18V12H0V0Z" fill="white" />
            <path d="M0 0H18V0.922807H0V0ZM0 1.84561H18V2.76842H0V1.84561ZM0 3.69123H18V4.61404H0V3.69123ZM0 5.53684H18V6.45965H0V5.53684ZM0 7.38596H18V8.30877H0V7.38596ZM0 9.23158H18V10.1544H0V9.23158ZM0 11.0772H18V12H0V11.0772Z" fill="#D80027" />
            <path d="M0 0H9V6.45965H0V0Z" fill="#2E52B2" />
            <path d="M1.67733 4.87369L1.53698 4.42456L1.38259 4.87369H0.919434L1.29487 5.14386L1.15452 5.59299L1.53698 5.31579L1.90891 5.59299L1.76505 5.14386L2.1475 4.87369H1.67733ZM3.65277 4.87369L3.50891 4.42456L3.36154 4.87369H2.89838L3.27382 5.14386L3.13347 5.59299L3.50891 5.31579L3.88785 5.59299L3.7475 5.14386L4.12294 4.87369H3.65277ZM5.63522 4.87369L5.48435 4.42456L5.344 4.87369H4.87031L5.25628 5.14386L5.10891 5.59299L5.48435 5.31579L5.87031 5.59299L5.72294 5.14386L6.09838 4.87369H5.63522ZM7.60715 4.87369L7.4668 4.42456L7.31943 4.87369H6.85277L7.23171 5.14386L7.09136 5.59299L7.4668 5.31579L7.84575 5.59299L7.69487 5.14386L8.08084 4.87369H7.60715ZM3.50891 2.64211L3.36154 3.09123H2.89838L3.27382 3.36842L3.13347 3.81053L3.50891 3.53684L3.88785 3.81053L3.7475 3.36842L4.12294 3.09123H3.65277L3.50891 2.64211ZM1.53698 2.64211L1.38259 3.09123H0.919434L1.29487 3.36842L1.15452 3.81053L1.53698 3.53684L1.90891 3.81053L1.76505 3.36842L2.1475 3.09123H1.67733L1.53698 2.64211ZM5.48435 2.64211L5.344 3.09123H4.87031L5.25628 3.36842L5.10891 3.81053L5.48435 3.53684L5.87031 3.81053L5.72294 3.36842L6.09838 3.09123H5.63522L5.48435 2.64211ZM7.4668 2.64211L7.31943 3.09123H6.85277L7.23171 3.36842L7.09136 3.81053L7.4668 3.53684L7.84575 3.81053L7.69487 3.36842L8.08084 3.09123H7.60715L7.4668 2.64211ZM1.53698 0.866669L1.38259 1.30877H0.919434L1.29487 1.58597L1.15452 2.03158L1.53698 1.75439L1.90891 2.03158L1.76505 1.58597L2.1475 1.30877H1.67733L1.53698 0.866669ZM3.50891 0.866669L3.36154 1.30877H2.89838L3.27382 1.58597L3.13347 2.03158L3.50891 1.75439L3.88785 2.03158L3.7475 1.58597L4.12294 1.30877H3.65277L3.50891 0.866669ZM5.48435 0.866669L5.344 1.30877H4.87031L5.25628 1.58597L5.10891 2.03158L5.48435 1.75439L5.87031 2.03158L5.72294 1.58597L6.09838 1.30877H5.63522L5.48435 0.866669ZM7.4668 0.866669L7.31943 1.30877H6.85277L7.23171 1.58597L7.09136 2.03158L7.4668 1.75439L7.84575 2.03158L7.69487 1.58597L8.08084 1.30877H7.60715L7.4668 0.866669Z" fill="white" />
          </g>
          <defs>
            <clipPath id="clip0_238_1263">
              <rect width="18" height="12" fill="white" />
            </clipPath>
          </defs>
        </svg>
        <a href="" class="flex gap-1 items-center">
          <p class="text-base/5 font-medium text-textColors-navPrimary">English</p>
          <svg class="stroke-textColors-navPrimary" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
            <path d="M3 4.5L6 7.5L9 4.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
      <img width="40" height="40" src="../assets/image/avatar-default.png" alt="">
    </div>
  </header>