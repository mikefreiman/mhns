<nav id="site-navigation" class="nav main-navigation">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo__icon">
    <img src="<?php echo get_theme_file_uri( 'img/mhns.svg' ); ?>" alt="MHNS Logo">
  </a>
  <div class="nav__bar">
    <div class="nav__icon" aria-controls="primary-menu" aria-label="Open the navigation drawer." role="button" aria-disabled="false" tabindex="0">
      <svg class="icon icon-nav" viewBox="0 0 24 18.000001">
        <g
           transform="translate(0,-1034.3622)"
           id="layer1">
          <path
             style="fill:#4d4d4d;fill-opacity:1;stroke:none;stroke-width:1.5;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
             d="M -7.3841859e-7,1041.8622 H 24 v 3 H -7.3841859e-7 Z"
             id="rect4136" />
          <path
             style="fill:#4d4d4d;fill-opacity:1;stroke:none;stroke-width:1.5;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
             d="M -7.3841859e-7,1034.3622 H 24 v 3 H -7.3841859e-7 Z"
             id="rect4136-3" />
          <path
             style="fill:#4d4d4d;fill-opacity:1;stroke:none;stroke-width:1.5;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
             d="M -7.3841859e-7,1049.3622 H 24 v 3 H -7.3841859e-7 Z"
             id="rect4136-6" />
        </g>
      </svg>
    </div>
    <a href="tel:1-608-233-9776" class="icon__call" aria-label="Call the Meeting House Nursery School at 608-233-9776.">
      <span>
        <svg class="icon icon-call" viewBox="0 0 11.1125 11.1125">
          <g
             transform="translate(13.758333,-132.95829)"
             id="layer1">
            <path
               id="path819"
               d="m -8.202083,133.22288 a 5.2916667,5.2916667 0 0 0 -5.291667,5.29166 5.2916667,5.2916667 0 0 0 5.291667,5.29167 5.2916667,5.2916667 0 0 0 5.2916667,-5.29167 5.2916667,5.2916667 0 0 0 -5.2916667,-5.29166 z m 1.1167032,2.07542 1.2579519,0.10188 c 0.071921,0.001 0.1239794,0.0295 0.1776684,0.0694 0.043712,0.0533 0.075546,0.10835 0.084159,0.16684 0.1446976,0.98277 0.033185,1.93142 -0.3341743,2.84614 -0.3708045,0.89133 -0.9176,1.64151 -1.6659497,2.24178 -0.7700267,0.61541 -1.6463288,0.99513 -2.6291005,1.13983 -0.0702,0.0103 -0.130378,0.007 -0.184067,-0.0325 -0.06367,-0.0265 -0.10729,-0.0799 -0.117625,-0.15011 l -0.460167,-1.17527 c -0.03201,-0.055 -0.0287,-0.1151 -0.0039,-0.19046 0.01479,-0.0619 0.05432,-0.11588 0.121071,-0.14962 l 1.2279305,-0.75447 c 0.043353,-0.0303 0.1018107,-0.0388 0.1737312,-0.0374 0.060221,0.003 0.1121678,0.031 0.1658568,0.0709 l 0.6767152,0.61766 c 0.4252801,-0.27778 0.7935214,-0.61867 1.0911109,-1.03304 0.299312,-0.40266 0.5313337,-0.85531 0.6747467,-1.3426 l -0.7879428,-0.48182 c -0.051966,-0.0282 -0.09436,-0.0697 -0.1146724,-0.12649 -0.032012,-0.055 -0.028813,-0.11534 -0.015749,-0.18898 l 0.3686253,-1.39281 c 0.01651,-0.0502 0.044721,-0.10221 0.1097509,-0.14765 0.055053,-0.032 0.1121461,-0.0525 0.1840666,-0.0512 z"
               style="opacity:1;fill:#449db2;fill-opacity:1;stroke:none;stroke-width:0.49921381;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
          </g>
        </svg>
      </span>
    </a>
  </div>
  <?php
  wp_nav_menu( array(
    'menu' => 'primary-menu',
    'container' => 'ul',
    'menu_class' => 'nav__ul',
    'theme_location' => 'menu-1',

  ) );
  ?>
  <a href="tel:1-608-233-9776" class="call__btn" aria-label="Call the Meeting House Nursery School at 608-233-9776.">608-233-9776</a>
</nav>
