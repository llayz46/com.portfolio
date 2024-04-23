<section class="bg-gradient-to-t from-headerBack via-headerBack via-75% to-bodyBack to-100%">
  <div class="mx-auto w-11/12 max-w-5xl 2xl:max-w-7xl md:pt-12 pt-6">
    <footer class="js-scroll-animation flex flex-col items-center">
      <a href="#" class="pb-10 md:hover:scale-105 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 4C0 1.79086 1.79086 0 4 0H44C46.2091 0 48 1.79086 48 4V44C48 46.2091 46.2091 48 44 48H4C1.79086 48 0 46.2091 0 44V4ZM30.3715 9.375H25.2993C24.7157 9.375 24.1759 9.68379 23.8849 10.184L7.1237 38.9675H12.2073C12.7845 38.9675 13.3177 38.6635 13.6055 38.1682L30.3715 9.375ZM38.8904 38.9675H22.7095H17.6259L34.3871 10.184C34.6781 9.68379 35.2179 9.375 35.8015 9.375H40.8737L26.5089 34.0445L38.8936 34.1362C39.3049 34.1394 39.6382 34.4707 39.6382 34.8792V38.2277C39.6382 38.6362 39.3033 38.9675 38.8904 38.9675Z" fill="white" />
        </svg>
      </a>

      <div class="w-full h-px bg-gradient-to-r from-buttonColor-borderColor-normal/10 via-buttonColor-borderColor-normal to-buttonColor-borderColor-normal/10"></div>

      <nav class="w-full">
        <ul class="flex gap-1 py-10 justify-center">
          <?php foreach ($mainMenu as $key => $menuItem) {
            if (!array_key_exists('exclude', $menuItem)) { ?>
              <li class="relative group">
                <a href="<?= $key ?>" class="h-full textNav py-2 px-4 flex items-center rounded-md md:hover:bg-white/5 transition-colors duration-200 cursor-pointer nav__item z-20 <?php if ($currentPage === $key) { echo 'active'; } ?>"><?= $menuItem['menu_title'] ?></a>
                <div class="nav__active z-10 hidden"></div>
              </li>
          <?php }
          } ?>
        </ul>
      </nav>

      <div class="w-full h-px bg-gradient-to-r from-buttonColor-borderColor-normal/10 via-buttonColor-borderColor-normal to-buttonColor-borderColor-normal/10"></div>

      <div class="w-full pb-3 pt-10 flex justify-between">
        <p class="text-base text-textColors-navPrimary">Product by <span class="text-textColors-secondary">Louis Mazeau</span></p>
        <a href="https://github.com/llayz46" class="flex gap-2 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
            <g clip-path="url(#clip0_232_162)">
              <path d="M11.7253 0.618652C5.58062 0.618652 0.520264 5.3624 0.520264 11.2749C0.520264 15.9499 3.7372 19.9374 8.21923 21.3812C8.79756 21.4843 8.97828 21.1405 8.97828 20.8999C8.97828 20.6593 8.97828 19.9718 8.94214 19.0437C5.83364 19.7312 5.18302 17.5999 5.18302 17.5999C4.67698 16.3968 3.91793 16.053 3.91793 16.053C2.90586 15.3655 3.95408 15.3655 3.95408 15.3655C5.07458 15.3999 5.68905 16.4655 5.68905 16.4655C6.66498 18.1155 8.32767 17.6343 8.94214 17.3249C9.05057 16.6374 9.33974 16.1562 9.66505 15.8812C7.20716 15.6405 4.56855 14.7124 4.56855 10.6562C4.56855 9.4874 5.03844 8.55928 5.7252 7.8374C5.61676 7.59678 5.21916 6.49678 5.83364 5.01865C5.83364 5.01865 6.80956 4.74365 8.94214 6.11865C9.84577 5.87803 10.7856 5.74053 11.7615 5.74053C12.7374 5.74053 13.7133 5.84365 14.5808 6.11865C16.7134 4.77803 17.6532 5.01865 17.6532 5.01865C18.2676 6.4624 17.9062 7.59678 17.7616 7.8374C18.4845 8.55928 18.9183 9.52178 18.9183 10.6562C18.9183 14.7124 16.2797 15.6405 13.8218 15.8812C14.2194 16.2249 14.5808 16.9124 14.5808 17.8749C14.5808 19.3187 14.5447 20.453 14.5447 20.7968C14.5447 21.0718 14.7615 21.3812 15.3037 21.278C19.7135 19.8687 22.9304 15.9155 22.9304 11.2062C22.8943 5.3624 17.87 0.618652 11.7253 0.618652Z" fill="#7D7D7D" />
            </g>
            <defs>
              <clipPath id="clip0_232_162">
                <rect width="23.133" height="22" fill="white" transform="translate(0.158813)" />
              </clipPath>
            </defs>
          </svg>
          <p class="text-base text-textColors-secondary md:hover:text-accentColor-yellow/85 transition-colors duration-200">@llayz46</p>
        </a>
      </div>
      <div class="w-full pb-5 flex justify-between">
        <p class="text-base text-textColors-navPrimary">© 2024 - LAYZ</p>
        <a href="#" class="flex gap-2 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
            <path d="M20.9227 4H4.92273C3.81816 4 2.92273 4.89543 2.92273 6V18C2.92273 19.1046 3.81816 20 4.92273 20H20.9227C22.0273 20 22.9227 19.1046 22.9227 18V6C22.9227 4.89543 22.0273 4 20.9227 4Z" stroke="#7D7D7D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M22.9227 7L13.9527 12.7C13.644 12.8934 13.287 12.996 12.9227 12.996C12.5584 12.996 12.2015 12.8934 11.8927 12.7L2.92273 7" stroke="#7D7D7D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <p class="text-base text-textColors-secondary md:hover:text-accentColor-yellow/85 md:transition-colors duration-200">pro@llayz.fr</p>
        </a>
      </div>
    </footer>
  </div>
</section>

<script src="../assets/javascript/nav.js"></script>
<script src="../assets/javascript/scrollAnimation.js"></script>
</body>

</html>