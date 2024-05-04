<?php

$mainMenu = [
  'index.php' => ['menu_title' => 'Home', 'head_title' => 'Home - Portfolio', 'head_meta' => 'Welcome to my portfolio! I\'m llayz a junior web developer. Find here my personal and professional projects.', 'exclude' => true],
  'projects.php' => ['menu_title' => 'Projects', 'head_title' => 'Projects - Portfolio', 'head_meta' => 'Here, you will be able to explore all of my projects, both personal and professional, and learn more about my skills and experiences.'],
  'contact.php' => ['menu_title' => 'Contact', 'head_title' => 'Contact - Portfolio', 'head_meta' => 'Feel free to contact me for project estimates, information, or collaboration opportunities.'],
  'admin/index.php' => ['menu_title' => 'Admin', 'head_title' => 'Admin - Portfolio', 'head_meta' => 'Espace d\'administration du portfolio.'],
  'login.php' => ['menu_title' => 'Login', 'head_title' => 'Login - Portfolio', 'head_meta' => 'Login to access the admin area.', 'exclude' => true],
];

$adminMenu = [
  'index.php' => [
    'menu_title' => 'Home',
    'head_title' => 'Admin Home - Portfolio',
    'head_meta' => 'Welcome to the portfolio admin area.',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="color">
    <mask id="path-1-inside-1_238_1377" fill="white">
      <path d="M18.4686 8.1875L10.4686 0.75C10.1874 0.5 9.78113 0.5 9.49988 0.75L1.53113 8.1875C1.37488 8.34375 1.28113 8.5625 1.31238 8.8125C1.34363 9.03125 1.46863 9.25 1.68738 9.34375C2.81238 9.9375 3.49988 11.0313 3.49988 12.3125V17.875C3.49988 18.75 4.21863 19.4688 5.09363 19.4688H7.34363C8.21863 19.4688 8.93738 18.75 8.93738 17.875V16.125C8.93738 16 9.03113 15.9375 9.12488 15.9375H10.7811C10.9061 15.9375 10.9686 16.0312 10.9686 16.125V17.875C10.9686 18.75 11.6874 19.4688 12.5624 19.4688H14.8436C15.7186 19.4688 16.4374 18.75 16.4374 17.875V12.2812C16.4374 11.0312 17.1561 9.90625 18.2811 9.3125C18.4686 9.21875 18.6249 9 18.6561 8.78125C18.7186 8.5625 18.6561 8.34375 18.4686 8.1875ZM9.99988 2.21875L16.8749 8.625C16.7186 8.75 16.5936 8.875 16.4374 9H3.56238C3.43738 8.875 3.28113 8.75 3.15613 8.625L9.99988 2.21875ZM15.0624 17.8438C15.0624 17.9688 14.9686 18.0312 14.8749 18.0312H12.5936C12.4686 18.0312 12.4061 17.9375 12.4061 17.8438V16.0938C12.4061 15.2188 11.6874 14.5 10.8124 14.5H9.15613C8.28113 14.5 7.56238 15.2188 7.56238 16.0938V17.8438C7.56238 17.9688 7.46863 18.0312 7.37488 18.0312H5.12488C4.99988 18.0312 4.93738 17.9375 4.93738 17.8438V12.2812C4.93738 11.5938 4.81238 10.9688 4.53113 10.375H15.5311C15.2811 10.9688 15.1249 11.5938 15.1249 12.2812V17.8438H15.0624Z"/>
    </mask>
    <path d="M18.4686 8.1875L10.4686 0.75C10.1874 0.5 9.78113 0.5 9.49988 0.75L1.53113 8.1875C1.37488 8.34375 1.28113 8.5625 1.31238 8.8125C1.34363 9.03125 1.46863 9.25 1.68738 9.34375C2.81238 9.9375 3.49988 11.0313 3.49988 12.3125V17.875C3.49988 18.75 4.21863 19.4688 5.09363 19.4688H7.34363C8.21863 19.4688 8.93738 18.75 8.93738 17.875V16.125C8.93738 16 9.03113 15.9375 9.12488 15.9375H10.7811C10.9061 15.9375 10.9686 16.0312 10.9686 16.125V17.875C10.9686 18.75 11.6874 19.4688 12.5624 19.4688H14.8436C15.7186 19.4688 16.4374 18.75 16.4374 17.875V12.2812C16.4374 11.0312 17.1561 9.90625 18.2811 9.3125C18.4686 9.21875 18.6249 9 18.6561 8.78125C18.7186 8.5625 18.6561 8.34375 18.4686 8.1875ZM9.99988 2.21875L16.8749 8.625C16.7186 8.75 16.5936 8.875 16.4374 9H3.56238C3.43738 8.875 3.28113 8.75 3.15613 8.625L9.99988 2.21875ZM15.0624 17.8438C15.0624 17.9688 14.9686 18.0312 14.8749 18.0312H12.5936C12.4686 18.0312 12.4061 17.9375 12.4061 17.8438V16.0938C12.4061 15.2188 11.6874 14.5 10.8124 14.5H9.15613C8.28113 14.5 7.56238 15.2188 7.56238 16.0938V17.8438C7.56238 17.9688 7.46863 18.0312 7.37488 18.0312H5.12488C4.99988 18.0312 4.93738 17.9375 4.93738 17.8438V12.2812C4.93738 11.5938 4.81238 10.9688 4.53113 10.375H15.5311C15.2811 10.9688 15.1249 11.5938 15.1249 12.2812V17.8438H15.0624Z" fill="color"/>
    <path d="M18.4686 8.1875L17.1069 9.65227L17.1466 9.68921L17.1883 9.72394L18.4686 8.1875ZM10.4686 0.75L11.8304 -0.714771L11.8141 -0.72998L11.7974 -0.744819L10.4686 0.75ZM9.49988 0.75L8.17116 -0.744819L8.153 -0.728683L8.13525 -0.71211L9.49988 0.75ZM1.53113 8.1875L0.166497 6.72539L0.141296 6.74891L0.11692 6.77329L1.53113 8.1875ZM1.31238 8.8125L-0.672172 9.06057L-0.669996 9.07798L-0.667515 9.09534L1.31238 8.8125ZM1.68738 9.34375L2.6209 7.57498L2.54947 7.53728L2.47522 7.50546L1.68738 9.34375ZM18.2811 9.3125L17.3867 7.52365L17.3671 7.53347L17.3476 7.54373L18.2811 9.3125ZM18.6561 8.78125L16.7331 8.23181L16.6956 8.36317L16.6762 8.49841L18.6561 8.78125ZM9.99988 2.21875L11.3633 0.755534L9.99677 -0.517852L8.63311 0.758636L9.99988 2.21875ZM16.8749 8.625L18.1243 10.1867L19.9323 8.74029L18.2383 7.16178L16.8749 8.625ZM16.4374 9V11H17.1389L17.6868 10.5617L16.4374 9ZM3.56238 9L2.14817 10.4142L2.73396 11H3.56238V9ZM3.15613 8.625L1.78936 7.16489L0.280241 8.57753L1.74192 10.0392L3.15613 8.625ZM15.0624 17.8438V15.8438H13.0624V17.8438H15.0624ZM4.53113 10.375V8.375H1.37073L2.72366 11.2312L4.53113 10.375ZM15.5311 10.375L17.3744 11.1511L18.5433 8.375H15.5311V10.375ZM15.1249 17.8438V19.8438H17.1249V17.8438H15.1249ZM19.8304 6.72273L11.8304 -0.714771L9.10685 2.21477L17.1069 9.65227L19.8304 6.72273ZM11.7974 -0.744819C10.7583 -1.66839 9.21018 -1.66839 8.17116 -0.744819L10.8286 2.24482C10.3521 2.66839 9.61643 2.66839 9.13991 2.24482L11.7974 -0.744819ZM8.13525 -0.71211L0.166497 6.72539L2.89577 9.64961L10.8645 2.21211L8.13525 -0.71211ZM0.11692 6.77329C-0.423728 7.31394 -0.788657 8.12869 -0.672172 9.06057L3.29694 8.56443C3.35093 8.99632 3.1735 9.37357 2.94535 9.60171L0.11692 6.77329ZM-0.667515 9.09534C-0.567712 9.79396 -0.135041 10.7386 0.899545 11.182L2.47522 7.50546C3.07231 7.76135 3.25498 8.26854 3.29228 8.52966L-0.667515 9.09534ZM0.753867 11.1125C1.24804 11.3733 1.49988 11.801 1.49988 12.3125H5.49988C5.49988 10.2615 4.37672 8.50166 2.6209 7.57498L0.753867 11.1125ZM1.49988 12.3125V17.875H5.49988V12.3125H1.49988ZM1.49988 17.875C1.49988 19.8546 3.11406 21.4688 5.09363 21.4688V17.4688C5.3232 17.4688 5.49988 17.6454 5.49988 17.875H1.49988ZM5.09363 21.4688H7.34363V17.4688H5.09363V21.4688ZM7.34363 21.4688C9.3232 21.4688 10.9374 19.8546 10.9374 17.875H6.93738C6.93738 17.6454 7.11406 17.4688 7.34363 17.4688V21.4688ZM10.9374 17.875V16.125H6.93738V17.875H10.9374ZM10.9374 16.125C10.9374 16.6052 10.7374 17.1123 10.3247 17.4792C9.9488 17.8133 9.50415 17.9375 9.12488 17.9375V13.9375C8.65187 13.9375 8.11347 14.0929 7.66725 14.4896C7.18423 14.9189 6.93738 15.5198 6.93738 16.125H10.9374ZM9.12488 17.9375H10.7811V13.9375H9.12488V17.9375ZM10.7811 17.9375C10.3009 17.9375 9.7938 17.7375 9.42694 17.3248C9.0928 16.9489 8.96863 16.5043 8.96863 16.125H12.9686C12.9686 15.652 12.8132 15.1136 12.4166 14.6674C11.9872 14.1843 11.3863 13.9375 10.7811 13.9375V17.9375ZM8.96863 16.125V17.875H12.9686V16.125H8.96863ZM8.96863 17.875C8.96863 19.8546 10.5828 21.4688 12.5624 21.4688V17.4688C12.792 17.4688 12.9686 17.6454 12.9686 17.875H8.96863ZM12.5624 21.4688H14.8436V17.4688H12.5624V21.4688ZM14.8436 21.4688C16.8232 21.4688 18.4374 19.8546 18.4374 17.875H14.4374C14.4374 17.6454 14.6141 17.4688 14.8436 17.4688V21.4688ZM18.4374 17.875V12.2812H14.4374V17.875H18.4374ZM18.4374 12.2812C18.4374 11.8243 18.699 11.3534 19.2146 11.0813L17.3476 7.54373C15.6133 8.45909 14.4374 10.2382 14.4374 12.2812H18.4374ZM19.1756 11.1014C19.972 10.7031 20.5155 9.90783 20.636 9.06409L16.6762 8.49841C16.7114 8.25198 16.8036 8.06699 16.8952 7.93771C16.985 7.81091 17.138 7.648 17.3867 7.52365L19.1756 11.1014ZM20.5792 9.33069C20.8588 8.35189 20.5456 7.3149 19.749 6.65106L17.1883 9.72394C17.0069 9.57284 16.8358 9.34551 16.7446 9.04911C16.6538 8.75419 16.6658 8.46729 16.7331 8.23181L20.5792 9.33069ZM8.63643 3.68197L15.5114 10.0882L18.2383 7.16178L11.3633 0.755534L8.63643 3.68197ZM15.6255 7.06326C15.5007 7.16308 15.393 7.25933 15.3274 7.31768C15.2524 7.38433 15.2195 7.41308 15.188 7.43826L17.6868 10.5617C17.8115 10.4619 17.9192 10.3657 17.9849 10.3073C18.0598 10.2407 18.0928 10.2119 18.1243 10.1867L15.6255 7.06326ZM16.4374 7H3.56238V11H16.4374V7ZM4.9766 7.58579C4.86499 7.47418 4.74892 7.37185 4.68799 7.31768C4.6083 7.24685 4.58374 7.22418 4.57035 7.21079L1.74192 10.0392C1.85353 10.1508 1.9696 10.2532 2.03053 10.3073C2.11022 10.3782 2.13478 10.4008 2.14817 10.4142L4.9766 7.58579ZM4.52291 10.0851L11.3667 3.67886L8.63311 0.758636L1.78936 7.16489L4.52291 10.0851ZM13.0624 17.8438C13.0624 17.3635 13.2624 16.8564 13.6751 16.4896C14.051 16.1554 14.4956 16.0312 14.8749 16.0312V20.0312C15.3479 20.0312 15.8863 19.8758 16.3325 19.4792C16.8155 19.0498 17.0624 18.449 17.0624 17.8438H13.0624ZM14.8749 16.0312H12.5936V20.0312H14.8749V16.0312ZM12.5936 16.0312C13.0739 16.0312 13.581 16.2312 13.9478 16.6439C14.282 17.0198 14.4061 17.4645 14.4061 17.8438H10.4061C10.4061 18.3168 10.5616 18.8552 10.9582 19.3014C11.3875 19.7844 11.9884 20.0312 12.5936 20.0312V16.0312ZM14.4061 17.8438V16.0938H10.4061V17.8438H14.4061ZM14.4061 16.0938C14.4061 14.1142 12.792 12.5 10.8124 12.5V16.5C10.5828 16.5 10.4061 16.3233 10.4061 16.0938H14.4061ZM10.8124 12.5H9.15613V16.5H10.8124V12.5ZM9.15613 12.5C7.17656 12.5 5.56238 14.1142 5.56238 16.0938H9.56238C9.56238 16.3233 9.3857 16.5 9.15613 16.5V12.5ZM5.56238 16.0938V17.8438H9.56238V16.0938H5.56238ZM5.56238 17.8438C5.56238 17.3635 5.76235 16.8564 6.17506 16.4896C6.55096 16.1554 6.99561 16.0312 7.37488 16.0312V20.0312C7.84791 20.0312 8.38631 19.8758 8.83252 19.4792C9.31554 19.0498 9.56238 18.449 9.56238 17.8438H5.56238ZM7.37488 16.0312H5.12488V20.0312H7.37488V16.0312ZM5.12488 16.0312C5.6051 16.0312 6.11223 16.2312 6.47908 16.6439C6.81322 17.0198 6.93738 17.4645 6.93738 17.8438H2.93738C2.93738 18.3168 3.0928 18.8552 3.48944 19.3014C3.91879 19.7844 4.51966 20.0312 5.12488 20.0312V16.0312ZM6.93738 17.8438V12.2812H2.93738V17.8438H6.93738ZM6.93738 12.2812C6.93738 11.338 6.76284 10.4144 6.33861 9.51883L2.72366 11.2312C2.86193 11.5231 2.93738 11.8495 2.93738 12.2812H6.93738ZM4.53113 12.375H15.5311V8.375H4.53113V12.375ZM13.6879 9.59889C13.3559 10.3873 13.1249 11.2769 13.1249 12.2812H17.1249C17.1249 11.9106 17.2064 11.5502 17.3744 11.1511L13.6879 9.59889ZM13.1249 12.2812V17.8438H17.1249V12.2812H13.1249ZM15.1249 15.8438H15.0624V19.8438H15.1249V15.8438Z" fill="color" mask="url(#path-1-inside-1_238_1377)"/>
  </svg>'
  ],
  'projects.php' => [
    'menu_title' => 'Projects',
    'head_title' => 'Admin Projects - Portfolio',
    'head_meta' => 'Here, you will be able to manage all of your projects, both personal and professional, and learn more about your skills and experiences.',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="color">
    <mask id="path-1-inside-1_336_500" fill="white">
      <path d="M6.78125 0.0625H2.8125C1.75 0.0625 0.875 0.9375 0.875 2V5.96875C0.875 7.03125 1.75 7.90625 2.8125 7.90625H6.78125C7.84375 7.90625 8.71875 7.03125 8.71875 5.96875V2.03125C8.75 0.9375 7.875 0.0625 6.78125 0.0625ZM7.34375 6C7.34375 6.3125 7.09375 6.5625 6.78125 6.5625H2.8125C2.5 6.5625 2.25 6.3125 2.25 6V2.03125C2.25 1.71875 2.5 1.46875 2.8125 1.46875H6.78125C7.09375 1.46875 7.34375 1.71875 7.34375 2.03125V6Z"/>
    </mask>
    <path d="M6.78125 0.0625H2.8125C1.75 0.0625 0.875 0.9375 0.875 2V5.96875C0.875 7.03125 1.75 7.90625 2.8125 7.90625H6.78125C7.84375 7.90625 8.71875 7.03125 8.71875 5.96875V2.03125C8.75 0.9375 7.875 0.0625 6.78125 0.0625ZM7.34375 6C7.34375 6.3125 7.09375 6.5625 6.78125 6.5625H2.8125C2.5 6.5625 2.25 6.3125 2.25 6V2.03125C2.25 1.71875 2.5 1.46875 2.8125 1.46875H6.78125C7.09375 1.46875 7.34375 1.71875 7.34375 2.03125V6Z" fill="color"/>
    <path d="M8.71875 2.03125L6.71957 1.97413L6.71875 2.00268V2.03125H8.71875ZM6.78125 -1.9375H2.8125V2.0625H6.78125V-1.9375ZM2.8125 -1.9375C0.64543 -1.9375 -1.125 -0.167069 -1.125 2H2.875C2.875 2.01112 2.87234 2.02342 2.86821 2.03311C2.8647 2.04136 2.86124 2.04531 2.85953 2.04703C2.85781 2.04874 2.85386 2.0522 2.84561 2.05571C2.83592 2.05984 2.82362 2.0625 2.8125 2.0625V-1.9375ZM-1.125 2V5.96875H2.875V2H-1.125ZM-1.125 5.96875C-1.125 8.13582 0.64543 9.90625 2.8125 9.90625V5.90625C2.82362 5.90625 2.83592 5.90891 2.84561 5.91304C2.85387 5.91655 2.85781 5.92001 2.85953 5.92172C2.86124 5.92344 2.8647 5.92739 2.86821 5.93564C2.87234 5.94533 2.875 5.95763 2.875 5.96875H-1.125ZM2.8125 9.90625H6.78125V5.90625H2.8125V9.90625ZM6.78125 9.90625C8.94832 9.90625 10.7188 8.13582 10.7188 5.96875H6.71875C6.71875 5.95763 6.72141 5.94533 6.72554 5.93564C6.72905 5.92739 6.73251 5.92344 6.73422 5.92172C6.73594 5.92001 6.73989 5.91655 6.74814 5.91304C6.75783 5.90891 6.77013 5.90625 6.78125 5.90625V9.90625ZM10.7188 5.96875V2.03125H6.71875V5.96875H10.7188ZM10.7179 2.08837C10.7823 -0.165216 8.9683 -1.9375 6.78125 -1.9375V2.0625C6.78607 2.0625 6.78205 2.0631 6.77352 2.05951C6.76614 2.0564 6.75789 2.0512 6.74987 2.0431C6.74174 2.03488 6.73331 2.02306 6.72712 2.00764C6.72033 1.99073 6.71947 1.97746 6.71957 1.97413L10.7179 2.08837ZM5.34375 6C5.34375 5.20793 5.98918 4.5625 6.78125 4.5625V8.5625C8.19832 8.5625 9.34375 7.41707 9.34375 6H5.34375ZM6.78125 4.5625H2.8125V8.5625H6.78125V4.5625ZM2.8125 4.5625C3.60457 4.5625 4.25 5.20793 4.25 6H0.25C0.25 7.41707 1.39543 8.5625 2.8125 8.5625V4.5625ZM4.25 6V2.03125H0.25V6H4.25ZM4.25 2.03125C4.25 2.82332 3.60457 3.46875 2.8125 3.46875V-0.53125C1.39543 -0.53125 0.25 0.61418 0.25 2.03125H4.25ZM2.8125 3.46875H6.78125V-0.53125H2.8125V3.46875ZM6.78125 3.46875C5.98918 3.46875 5.34375 2.82332 5.34375 2.03125H9.34375C9.34375 0.614181 8.19832 -0.53125 6.78125 -0.53125V3.46875ZM5.34375 2.03125V6H9.34375V2.03125H5.34375Z" fill="color" mask="url(#path-1-inside-1_336_500)"/>
    <path d="M17.1875 0.0625H13.2188C12.1563 0.0625 11.2812 0.9375 11.2812 2V5.96875C11.2812 7.03125 12.1563 7.90625 13.2188 7.90625H17.1875C18.25 7.90625 19.125 7.03125 19.125 5.96875V2.03125C19.125 0.9375 18.25 0.0625 17.1875 0.0625ZM17.75 6C17.75 6.3125 17.5 6.5625 17.1875 6.5625H13.2188C12.9063 6.5625 12.6563 6.3125 12.6563 6V2.03125C12.6563 1.71875 12.9063 1.46875 13.2188 1.46875H17.1875C17.5 1.46875 17.75 1.71875 17.75 2.03125V6Z" fill="color"/>
    <path d="M6.78125 10.0312H2.8125C1.75 10.0312 0.875 10.9063 0.875 11.9688V15.9375C0.875 17 1.75 17.875 2.8125 17.875H6.78125C7.84375 17.875 8.71875 17 8.71875 15.9375V12C8.75 10.9062 7.875 10.0312 6.78125 10.0312ZM7.34375 15.9687C7.34375 16.2812 7.09375 16.5312 6.78125 16.5312H2.8125C2.5 16.5312 2.25 16.2812 2.25 15.9687V12C2.25 11.6875 2.5 11.4375 2.8125 11.4375H6.78125C7.09375 11.4375 7.34375 11.6875 7.34375 12V15.9687Z" fill="color"/>
    <path d="M17.1875 10.0312H13.2188C12.1563 10.0312 11.2812 10.9063 11.2812 11.9688V15.9375C11.2812 17 12.1563 17.875 13.2188 17.875H17.1875C18.25 17.875 19.125 17 19.125 15.9375V12C19.125 10.9062 18.25 10.0312 17.1875 10.0312ZM17.75 15.9687C17.75 16.2812 17.5 16.5312 17.1875 16.5312H13.2188C12.9063 16.5312 12.6563 16.2812 12.6563 15.9687V12C12.6563 11.6875 12.9063 11.4375 13.2188 11.4375H17.1875C17.5 11.4375 17.75 11.6875 17.75 12V15.9687Z" fill="color"/>
  </svg>'
  ],
  'technologies.php' => [
    'menu_title' => 'Technologies', 
    'head_title' => 'Admin Technologies - Portfolio', 
    'head_meta' => 'Manage your technologies.',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path d="M19.7248 5.8636L17.0133 3.15522L16.9141 3.05613C16.7157 2.92402 16.5173 2.85796 16.3189 2.85796L12.0533 3.22128C8.84586 0.54593 4.81174 -0.610084 1.40588 0.314727C0.876819 0.446843 0.446954 0.87622 0.314688 1.40468C-0.611176 4.77364 0.546154 8.8362 3.25761 12.007L2.89388 16.2017V16.2677C2.89388 16.4659 2.96001 16.6971 3.09228 16.8622L5.90293 19.7027C6.10133 19.9009 6.3328 20 6.59733 20C6.69653 20 6.79573 20 6.86186 19.967C7.19253 19.8679 7.45706 19.5706 7.55626 19.2403L7.95306 15.7062C8.41599 15.9374 8.87892 16.1356 9.34186 16.3008C9.50719 16.3668 9.67252 16.3998 9.83785 16.3998C10.2677 16.3998 10.6645 16.2347 10.9621 15.9374L15.889 11.0161C16.3189 10.5867 16.4842 9.92616 16.2858 9.36467C16.1205 8.90226 15.9221 8.43986 15.6906 7.97745L19.1626 7.5811H19.2288C19.5925 7.51505 19.857 7.25081 19.9562 6.88749C20.0554 6.49115 19.9893 6.12783 19.7248 5.8636ZM6.16747 17.9192L4.38187 16.1026L4.61334 13.4272C5.20854 13.9557 5.8368 14.4511 6.49813 14.8805L6.16747 17.9192ZM14.8309 9.92616L9.93705 14.8145C9.90399 14.8475 9.87092 14.8475 9.83785 14.8475C8.11839 14.253 6.46507 13.196 5.10934 11.8418C2.19948 8.90226 0.876819 4.97181 1.73655 1.80103C1.76962 1.768 1.76962 1.73497 1.80268 1.73497C2.46401 1.56983 3.12534 1.47074 3.81974 1.47074C6.56427 1.47074 9.54025 2.75887 11.8218 5.0709C13.1776 6.42509 14.2357 8.07654 14.8309 9.79404C14.864 9.8601 14.864 9.89313 14.8309 9.92616ZM14.897 6.52418C14.4672 5.8636 13.9712 5.20302 13.4421 4.60849L16.1205 4.37729L17.9061 6.16086L14.897 6.52418Z" fill="color" />
    <path d="M17.7075 12.7005C17.6083 12.6345 17.2446 12.4693 16.8478 12.7996C16.5171 13.0639 14.963 14.6162 14.6654 14.9135C12.5491 17.0273 12.5491 17.0273 12.6814 17.4897C12.7145 17.6219 12.7806 17.754 12.8798 17.82C13.9379 18.877 15.5582 19.1082 16.7817 19.1082C17.7075 19.1082 18.4019 18.976 18.4681 18.943C18.7656 18.877 18.9971 18.6458 19.0632 18.3485C19.0963 18.1834 19.7907 14.6493 17.9059 12.7666C17.8067 12.7666 17.7406 12.7336 17.7075 12.7005ZM17.6414 17.6219C16.7817 17.7209 15.459 17.7209 14.467 17.2255C15.1945 16.4989 16.4841 15.1777 17.2115 14.4841C17.7075 15.4089 17.7075 16.7631 17.6414 17.6219Z" fill="color" />
    <path d="M8.05263 5.30212C6.53157 5.30212 5.30811 6.5242 5.30811 8.04353C5.30811 9.56286 6.53157 10.7849 8.05263 10.7849C9.57369 10.7849 10.7972 9.56286 10.7972 8.04353C10.7972 6.5242 9.57369 5.30212 8.05263 5.30212ZM8.05263 9.33166C7.35823 9.33166 6.7961 8.77017 6.7961 8.07656C6.7961 7.38295 7.35823 6.82146 8.05263 6.82146C8.74703 6.82146 9.34222 7.34992 9.34222 8.04353C9.34222 8.73714 8.74703 9.33166 8.05263 9.33166Z" fill="color" />
  </svg>'
  ],
  'settings.php' => [
    'menu_title' => 'Settings',
    'head_title' => 'Admin Settings - Portfolio',
    'head_meta' => 'Manage your portfolio settings.',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
    <path d="M16.6667 5.83333H9.16675" stroke="color" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M11.6667 14.1667H4.16675" stroke="color" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M14.1667 16.6667C15.5475 16.6667 16.6667 15.5474 16.6667 14.1667C16.6667 12.786 15.5475 11.6667 14.1667 11.6667C12.786 11.6667 11.6667 12.786 11.6667 14.1667C11.6667 15.5474 12.786 16.6667 14.1667 16.6667Z" stroke="color" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M5.83325 8.33333C7.21396 8.33333 8.33325 7.21404 8.33325 5.83333C8.33325 4.45262 7.21396 3.33333 5.83325 3.33333C4.45254 3.33333 3.33325 4.45262 3.33325 5.83333C3.33325 7.21404 4.45254 8.33333 5.83325 8.33333Z" stroke="color" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>'
  ],
  'logout.php' => [
    'menu_title' => 'Logout',
    'head_title' => 'Logout - Portfolio',
    'head_meta' => 'Logout from the admin area.',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path d="M7.5 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H7.5" stroke="color" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M13.3333 14.1667L17.4999 10L13.3333 5.83333" stroke="color" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M17.5 10H7.5" stroke="color" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>'
  ],
  'new_project.php' => ['menu_title' => 'Add a new project', 'head_title' => 'Admin New Project - Portfolio', 'head_meta' => 'Add a new project to your portfolio.', 'exclude' => true],
];
