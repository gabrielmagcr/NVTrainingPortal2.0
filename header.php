<!DOCTYPE html>
<html>

<head>
  <?php
  $activateBanner = get_field('activate_banner');
  $bannerHeight = get_field('banner_height');
  $bannerImage = get_field('banner_image');
  $menuItems = wp_get_nav_menu_items('Menu_Mobile');
  ?>
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Hotjar Tracking Code for https://training.naturvet.com -->
  <script>
    (function(h, o, t, j, a, r) {
      h.hj = h.hj || function() {
        (h.hj.q = h.hj.q || []).push(arguments)
      };
      h._hjSettings = {
        hjid: 1178112,
        hjsv: 6
      };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script');
      r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>

  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
  <style type="text/css">
    div,
    section,
    img,
    header {
      -webkit-transition: all 0.4s ease;
      transition: all 0.4s ease;
    }

    .sticky {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
    }

    .content {
      width: 96%;
      max-width: 1450px;
      margin: 0 auto;
      font-family: 'Brandon Grotesque';
      padding: 7px 0px 9px 0px;
    }

    .top-belt {
      width: 100%;
      background-color: #FA9E33;
      color: #fff;
      font-size: 13px;
      text-align: center;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
      position: relative;
      z-index: 1;
    }

    .top-belt .icon-arrow {
      width: 13px;
      display: inline-block;
      pointer-events: none;
      margin-left: .8rem;
      vertical-align: middle;
      margin-bottom: .2rem;
    }

    header {
      width: 100%;
      background-color: #fff;
    }

    header .content {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      padding: 1rem 0rem;
    }

    header .content .header-l {
      width: 30%;
      visibility: hidden;
    }

    header .content .header-l .bars {
      color: #E26743;
      width: 100px;
      cursor: pointer;
      display: none;
    }

    header .content .header-c {
      width: 30%;
      text-align: center;
    }

    header .content .header-c svg {
      min-width: 150px;
      width: 100%;
      max-width: 270px;
    }

    header .content .header-r {
      width: 35%;
      text-align: right;
    }

    header .content .header-l .top-btns {
      display: none;
    }

    .close-btn {
      display: none;
    }

    .top-btns {
      background-color: #E26743;
      font-weight: 700;
      max-height: 6rem;
      padding: 1.1rem 2rem;
      font-family: 1.6rem;
      text-transform: uppercase;
      text-align: center;
      border: .2rem solid transparent;
      border-radius: 5em;
      color: #fff;
      margin: 0px 5px;
    }

    .responsive-menu {
      display: none;
    }

    @media only screen and (max-width:1420px) {
      .top-btns {
        max-height: 6rem;
        padding: 1rem 1.5rem;
        font-size: 15px;
        margin: 0px 0px;
      }

      #banner {
        max-height: 420px !important;
      }
    }

    @media only screen and (max-width:1205px) {
      .top-btns {
        max-height: 6rem;
        padding: 1rem 1rem;
        font-size: 13px;
        margin: 0px 0px;
      }

      #banner {
        max-height: 400px !important;
      }
    }

    @media only screen and (max-width:1024px) {
      header .content .header-l {
        visibility: initial;
      }

      header .content .header-l .bars {
        color: #E26743;
        width: 100px;
        cursor: pointer;
        display: block;
      }

      .responsive-menu {
        display: none;
        position: fixed;
        width: 100%;
        height: 100vh;
        max-width: 400px;
        background-color: #2C667ECC;
        top: 0;
        left: 0;
        z-index: 0;
        text-align: center;
      }

      .responsive-menu-ul {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .top-btns {
        background-color: #E26743;
        font-weight: 700;
        max-height: 6rem;
        padding: 1.1rem 2rem;
        font-size: 16px;
        text-transform: uppercase;
        text-align: center;
        border: .2rem solid transparent;
        border-radius: 5em;
        color: #fff;
        margin: 20px 0px;
        display: block !important;
        width: 100%;
        box-sizing: border-box;
        text-decoration: none;
      }

      .close-btn {
        color: #FFFFFF;
        position: absolute;
        left: 0px;
        top: 0px;
        cursor: pointer;
        display: block !important;
        z-index: 1;
      }

      .close-btn svg {
        color: #FFFFFF;
        width: 30px;
      }

      header .content .header-r {
        width: 35%;
        text-align: right;
        display: none;
      }

      #banner {
        max-height: 380px !important;
      }
    }

    @media only screen and (max-width:767px) {
      .top-belt {
        font-size: 11px;
        letter-spacing: 0.5px;
      }

      .top-belt .icon-arrow {
        width: 11px;
        margin-left: .2rem;
        margin-bottom: .3rem;
      }

      #banner {
        max-height: 320px !important;
      }
    }

    @media only screen and (max-width:480px) {


      .top-btns {
        max-height: 5rem;
        padding: 1rem 1rem;
        font-size: 13px;
        margin: 20px 0px;
      }

      #banner {
        max-height: 300px !important;
      }
    }
  </style>
</head>

<body>
  <section class="top-belt" style="display:none;">
    <div class="content">
      Free shipping on all subscriptions and orders $35+ <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
        </path>
      </svg>
    </div><!--end content-->
  </section><!--end top-belt-->
  <header>
    <div class="content">
      <div class="header-l">
        <svg class="bars" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger" fill="none" width="27" height="19" viewBox="0 0 27 19">
          <g id="Icon_feather-menu" data-name="Icon feather-menu" transform="translate(-3 -7.5)">
            <path id="Path_7978" data-name="Path 7978" d="M4.5,18h24" transform="translate(0 -1)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
            <path id="Path_7979" data-name="Path 7979" d="M4.5,9h24" transform="translate(0)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
            <path id="Path_7980" data-name="Path 7980" d="M4.5,27h24" transform="translate(0 -2)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
          </g>
        </svg>
        <div class="responsive-menu">
          <ul class="responsive-menu-ul">
            <li>
              <div class="close-btn">
                <svg class="icon icon-close" fill="none" width="100%" height="100%" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;">
                  <g id="Artboard1" transform="matrix(0.740741,0,0,0.740741,0,0)">
                    <rect x="0" y="0" width="27" height="27" style="fill:none;"></rect>
                    <g transform="matrix(1.35,0,0,1.35,-8.775,-13.4801)">
                      <g id="Icon_feather-menu">
                        <g>
                          <g id="Path_7978" transform="matrix(0.707107,0.707107,-0.707107,0.707107,17.5607,-4.4099)">
                            <path d="M4.5,18L28.5,18" style="fill:none;fill-rule:nonzero;stroke:currentColor;stroke-width:3px;"></path>
                          </g>
                          <g id="Path_7979" transform="matrix(0.707107,-0.707107,0.707107,0.707107,-1.53122,25.2886)">
                            <path d="M4.5,9L28.5,9" style="fill:none;fill-rule:nonzero;stroke:currentColor;stroke-width:3px;"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
            </li>
            <li>
              <?php if (is_user_logged_in()) { ?>
                <a href="<?php echo wp_logout_url();  ?>">Logout</a>
              <?php } else { ?>
                <a href="<?php echo wp_login_url(); ?>">Login</a>
              <?php } ?>
            </li>
            <?php if ($menuItems) {
              foreach ($menuItems as $menuItem) {
                // Create <li> for each menu element
                echo '<li><a href="' . $menuItem->url . '">' . $menuItem->title . '</a></li>';
              }
            }
            ?>
            <li>
              empty

            </li>
          </ul>

        </div><!--end responsive-menu-->

        <script>
          jQuery(".close-btn").on("click", function() {
            jQuery(".responsive-menu").hide('slow');
            jQuery(".responsive-menu").css('left', '-100%');
          });
          jQuery(".bars").on("click", function() {
            jQuery(".responsive-menu").show('slow');
            jQuery(".responsive-menu").css('left', '0%');
          });
        </script>
      </div><!--end header-ll-->
      <div class="header-c">
        <a href="<?php echo home_url('/'); ?>" rel="home">
          <svg width="250" height="56" viewBox="0 0 250 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M117.021 52.0611H116.932C116.619 52.3984 116.237 52.7294 115.8 53.0796C115.363 53.4298 114.85 53.7575 114.296 54.0659C113.719 54.3743 113.087 54.6217 112.427 54.8145C111.723 55.0008 110.958 55.1068 110.155 55.1068C109.093 55.1068 108.067 54.9301 107.12 54.5864C106.176 54.2522 105.373 53.7575 104.7 53.1085C104.021 52.4691 103.476 51.7013 103.11 50.7856C102.711 49.8667 102.517 48.8547 102.517 47.7206C102.517 46.4901 102.759 45.3913 103.192 44.4017C103.645 43.4218 104.27 42.5961 105.073 41.9022C105.883 41.2339 106.817 40.7102 107.949 40.3536C109.074 40.0002 110.295 39.8235 111.656 39.8235C112.635 39.8235 113.546 39.8877 114.391 40.0066C115.21 40.1319 115.96 40.2797 116.581 40.4532V39.5247C116.581 39.0042 116.492 38.4709 116.291 37.9697C116.125 37.4781 115.826 37.0315 115.427 36.646C115.035 36.2573 114.509 35.9488 113.872 35.7143C113.231 35.4894 112.443 35.3769 111.513 35.3769C110.378 35.3769 109.236 35.4894 108.114 35.7561C106.983 36.0067 105.755 36.3826 104.423 36.8934V32.4951C105.583 31.9874 106.807 31.6051 108.092 31.3288C109.374 31.0621 110.728 30.9208 112.144 30.9111C113.801 30.9111 115.268 31.1071 116.524 31.5184C117.777 31.936 118.822 32.5015 119.654 33.2276C120.493 33.9376 121.13 34.7954 121.554 35.7721C121.959 36.7552 122.15 37.8315 122.15 38.9914V47.6595C122.15 49.1824 122.185 50.4836 122.208 51.5856C122.246 52.678 122.271 53.6547 122.31 54.5093H117.267L117.021 52.0611ZM116.581 44.6941C116.042 44.5656 115.427 44.4499 114.735 44.3568C114.044 44.2379 113.349 44.1929 112.635 44.1929C111.273 44.1929 110.186 44.4692 109.399 45.0058C108.605 45.5551 108.207 46.3937 108.207 47.515C108.207 48.0451 108.296 48.4917 108.471 48.8836C108.669 49.2756 108.905 49.5904 109.211 49.841C109.52 50.1013 109.877 50.2908 110.288 50.4097C110.7 50.5511 111.124 50.6153 111.586 50.6153C112.144 50.6153 112.676 50.5222 113.189 50.384C113.693 50.2362 114.139 50.0435 114.586 49.8153C114.997 49.5808 115.376 49.327 115.727 49.0443C116.052 48.7551 116.339 48.4724 116.581 48.2121V44.6941Z" fill="#4D7F70" />
            <path d="M139.989 54.4836C139.361 54.6796 138.602 54.8209 137.729 54.943C136.878 55.0458 136.049 55.1069 135.287 55.1069C133.378 55.1069 131.816 54.7856 130.592 54.1559C129.374 53.5262 128.516 52.6426 128.006 51.47C127.633 50.6218 127.455 49.4844 127.455 48.0451V36.1095H123.196V31.4766H127.455V25.0349H133.052V31.4766H139.651V36.1095H133.052V47.3062C133.052 48.1897 133.183 48.8451 133.445 49.2756C133.926 50.0113 134.854 50.3744 136.256 50.3744C136.91 50.3744 137.557 50.3198 138.175 50.2105C138.813 50.1142 139.422 49.9792 139.989 49.825V54.4836Z" fill="#4D7F70" />
            <path d="M152.029 55.1068C149.731 55.1068 147.834 54.7149 146.326 53.9277C144.812 53.1438 143.68 52.0836 142.89 50.7535C142.498 50.0338 142.185 49.2563 141.994 48.392C141.806 47.5342 141.701 46.5993 141.701 45.5391V31.4766H147.298V44.9383C147.298 45.7318 147.346 46.3937 147.448 46.9591C147.573 47.5149 147.726 48.0193 147.939 48.4145C148.325 49.1213 148.86 49.629 149.552 49.976C150.241 50.3197 151.057 50.4836 152.029 50.4836C153.03 50.4836 153.904 50.2908 154.608 49.9213C155.329 49.539 155.864 48.9543 156.218 48.1832C156.594 47.4378 156.76 46.4033 156.76 45.0636V31.4766H162.351V45.5391C162.351 47.4089 162.036 48.9928 161.398 50.278C161.025 51.0073 160.566 51.6659 159.986 52.2538C159.412 52.8514 158.736 53.3623 157.962 53.7799C157.177 54.2008 156.307 54.5285 155.322 54.7566C154.347 54.9783 153.231 55.1068 152.029 55.1068Z" fill="#4D7F70" />
            <path d="M93.1092 54.5083H99.1628V25.0339H93.3515V45.8915L79.2614 25.0339H73.2109V54.5083H78.9809L78.9649 33.5672L93.1092 54.5083Z" fill="#4D7F70" />
            <path d="M173.799 31.92C172.648 32.5883 171.724 33.5072 171.073 34.6863H170.978L170.455 31.4735H165.833V54.5061H171.421V39.0814C172.138 38.0244 173.139 37.234 174.433 36.72C175.727 36.2027 177.223 35.9425 178.947 35.9425H179.406V35.8686L177.497 30.9241C176.078 30.9851 174.822 31.3064 173.799 31.92Z" fill="#4D7F70" />
            <path d="M217.628 50.5607C218.718 50.5607 219.837 50.4547 221.023 50.2362C222.212 50.0113 223.401 49.6868 224.619 49.2756V53.7703C223.892 54.0884 222.776 54.3936 221.297 54.6763C219.796 54.9559 218.24 55.1068 216.64 55.1068C215.02 55.1068 213.5 54.8916 212.024 54.4675C210.567 54.0563 209.311 53.3751 208.221 52.437C207.131 51.4989 206.28 50.2908 205.642 48.7969C204.988 47.3061 204.673 45.5037 204.673 43.3833C204.673 41.2885 204.969 39.4604 205.569 37.8926C206.184 36.3312 206.981 35.03 207.991 33.9954C208.992 32.9641 210.134 32.1866 211.441 31.6758C212.735 31.1553 214.086 30.9111 215.467 30.9111C216.901 30.9111 218.24 31.1264 219.458 31.5762C220.685 32.0131 221.731 32.7071 222.623 33.6645C223.513 34.6091 224.192 35.8332 224.689 37.34C225.193 38.8307 225.435 40.601 225.435 42.6508C225.416 43.425 225.394 44.1094 225.368 44.6556H210.395C210.468 45.7318 210.704 46.6282 211.103 47.3897C211.482 48.1415 212.005 48.7551 212.63 49.2178C213.277 49.6868 214.029 50.021 214.877 50.2394C215.719 50.4547 216.64 50.5607 217.628 50.5607ZM215.387 35.2966C214.683 35.2966 214.055 35.4283 213.513 35.6918C212.945 35.9488 212.48 36.3183 212.081 36.7585C211.676 37.2147 211.358 37.7416 211.122 38.352C210.886 38.94 210.723 39.5922 210.65 40.2765H219.64C219.64 39.5922 219.547 38.94 219.353 38.352C219.19 37.7416 218.916 37.2147 218.562 36.7585C218.202 36.3183 217.765 35.9488 217.242 35.6918C216.726 35.4283 216.098 35.2966 215.387 35.2966Z" fill="#4D7F70" />
            <path d="M242.174 54.4836C241.527 54.6796 240.79 54.8209 239.92 54.943C239.031 55.0458 238.234 55.1069 237.472 55.1069C235.569 55.1069 233.994 54.7856 232.786 54.1559C231.559 53.5262 230.698 52.6426 230.194 51.47C229.821 50.6218 229.627 49.4844 229.627 48.0451V36.1095H225.371V31.4766H229.627V25.0349H235.231V31.4766H241.849V36.1095H235.231V47.3062C235.231 48.1897 235.368 48.8451 235.629 49.2756C236.117 50.0113 237.051 50.3744 238.444 50.3744C239.098 50.3744 239.726 50.3198 240.376 50.2105C240.998 50.1142 241.607 49.9792 242.174 49.825V54.4836Z" fill="#4D7F70" />
            <path d="M195.613 38.4998C194.778 40.7873 194.236 42.3038 193.974 43.0331C193.726 43.7721 193.302 45.0026 192.712 46.7311H192.607C192.04 45.0026 191.622 43.7721 191.354 43.0331C191.099 42.3038 190.538 40.7873 189.722 38.4998L184.73 25.0349H178.622L190.041 54.5061H195.221L206.659 25.0349H200.592L195.613 38.4998Z" fill="#4D7F70" />
            <path d="M39.0089 23.9877C36.3184 23.917 35.327 24.9483 32.9234 24.8423C30.2712 24.7234 28.5593 21.6584 30.3827 19.4351C31.0809 18.587 32.4389 17.8641 33.4653 16.7043C34.2878 15.7725 34.5205 14.5163 35.4386 13.7934C36.5798 12.9035 38.0845 12.5115 39.0089 12.5469C39.9461 12.5115 41.4316 12.9035 42.5601 13.7934C43.4942 14.5163 43.7205 15.7725 44.5398 16.7043C45.5694 17.8641 46.9338 18.587 47.6319 19.4351C49.449 21.6584 47.7339 24.7234 45.0976 24.8423C42.6845 24.9483 41.7026 23.917 39.0089 23.9877Z" fill="#E26743" />
            <path d="M25.3014 7.13637C26.8538 6.07614 28.5784 6.77975 30.0894 8.99659C31.8332 11.5476 31.779 13.3821 30.5262 14.4102C29.0566 15.5861 27.3129 15.2423 25.3014 12.5917C23.5258 10.2271 23.7904 8.15483 25.3014 7.13637Z" fill="#E26743" />
            <path d="M33.5262 0.408758C35.4835 0.00715563 36.8957 1.42079 37.4886 4.23843C38.1835 7.48659 37.3866 9.28898 35.7194 9.78054C33.8035 10.3396 32.2032 9.2697 31.2979 5.81914C30.5041 2.74447 31.6007 0.800721 33.5262 0.408758Z" fill="#E26743" />
            <path d="M52.7071 7.13637C51.1642 6.07614 49.446 6.77975 47.9286 8.99659C46.1913 11.5476 46.2423 13.3821 47.4919 14.4102C48.9551 15.5861 50.7179 15.2423 52.7071 12.5917C54.4955 10.2271 54.2213 8.15483 52.7071 7.13637Z" fill="#E26743" />
            <path d="M44.492 0.408758C42.522 0.00715563 41.1098 1.42079 40.52 4.23843C39.8347 7.48659 40.6348 9.28898 42.2829 9.78054C44.2306 10.3396 45.8182 9.2697 46.7203 5.81914C47.5141 2.74447 46.4143 0.800721 44.492 0.408758Z" fill="#E26743" />
            <path d="M31.9449 55.1068C26.4109 29.7706 9.04698 20.3956 0 45.5391C9.56978 30.0404 20.8801 31.3834 25.5056 55.1068H31.9449Z" fill="#4D7F70" />
            <path d="M37.9158 55.1069H40.9889C46.1404 24.7715 57.8013 24.4984 68.3498 25.5651C49.4971 18.4487 42.111 29.5104 37.9158 41.642C32.2192 29.2437 23.0384 10.2753 4.4248 15.5443C19.6625 16.0776 28.1867 28.1996 34.9289 55.1069H37.9158Z" fill="#4D7F70" />
            <path d="M245.54 20.7426C245.378 20.8968 245.193 20.9739 244.973 20.9739H243.742V20.19V19.4157H244.973C245.193 19.4157 245.378 19.4864 245.54 19.6374C245.684 19.7948 245.757 19.9715 245.757 20.19C245.757 20.402 245.684 20.5916 245.54 20.7426ZM243.742 24.0775V21.7771H244.676L245.604 24.0775H246.592L245.626 21.6647C245.802 21.5811 245.971 21.4687 246.12 21.3305C246.436 21.0221 246.592 20.6366 246.592 20.19C246.592 19.7402 246.436 19.3675 246.133 19.0623C245.808 18.7571 245.429 18.6028 244.973 18.6028H242.933V24.0775H243.742ZM249.289 21.3466C249.289 22.5932 248.846 23.647 247.963 24.5144C247.089 25.3722 246.018 25.7996 244.756 25.7996C243.497 25.7996 242.423 25.3722 241.555 24.5144C240.685 23.647 240.242 22.5932 240.242 21.3466C240.242 20.1032 240.685 19.0494 241.555 18.1788C242.423 17.3209 243.497 16.884 244.756 16.884C246.018 16.884 247.089 17.3209 247.963 18.1788C248.846 19.0494 249.289 20.1032 249.289 21.3466ZM244.756 16.1836C243.306 16.1836 242.059 16.6816 241.039 17.6808C240.038 18.68 239.538 19.8976 239.538 21.3466C239.538 22.7924 240.038 24.0132 241.039 25.006C242.059 26.0084 243.306 26.5032 244.756 26.5032C246.219 26.5032 247.472 26.0084 248.479 25.006C249.48 24.0132 250 22.7924 250 21.3466C250 19.8976 249.48 18.68 248.479 17.6808C247.472 16.6816 246.219 16.1836 244.756 16.1836Z" fill="#4D7F70" />
          </svg>
        </a>
      </div><!--end header-c-->
      <div class="header-r">
        <?php if (is_user_logged_in()) { ?>
          <a href="<?php echo wp_logout_url();  ?>"><button type="button" class="top-btns">Logout</button></a>
          <button type="button" class="top-btns" data-toggle="modal" data-target="#partnerAssets">NaturVet Partner Assets Site</button>
        <?php } else { ?>
          <a href="<?php echo wp_login_url(); ?>"><button type="button" class="top-btns">Login</button></a>
        <?php } ?>
      </div><!--end header-r-->
    </div><!--end content-->
  </header>
  <?php if ($activateBanner) : ?>
    <section id="banner" style="height:<?php echo $bannerHeight; ?>px; background:url('<?php echo $bannerImage; ?>') no-repeat center center; background-size:cover;">
    </section>
  <?php endif; ?>


  <!-- Partne Assets Modal -->
  <div id="partnerAssets" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" style="margin-top: 30%;
">
        <div class="modal-header" style="background-color: #f6e0c3">
          <button type="button" class="close" data-dismiss="modal" style="position: absolute; right: 10px;">&times;</button>
          <h4 class="modal-title" style="color: #4d7e71">Access NaturVet Partner Assets</h4>
        </div>
        <div class="modal-body">
          <p>Visit the NaturVet Partner Assets site to see all of our latest NaturVet Universities and get access to NaturVet marketing materials.</p>
          <p><a href="https://partners.naturvet.com/" target="_blank">Naturvet Partner Assets</a></p>
          <p>Username: NaturVet<br>Password: assets</p>
        </div>
        <div class="modal-footer" style="background-color: #f6e0c3">
          <button type="button" class="btn login-btn" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>