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
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    div,
    section,
    img,
    header {
      -webkit-transition: all 0.4s ease;
      transition: all 0.4s ease;
    }
    body{
      margin: 0;
    }
    .content {
      margin: 0 auto;
      font-family: 'Brandon Grotesque', sans-serif;
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
      align-items: center;
      padding: 2rem 0rem;
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
      width: 40%;
      text-align: center;
    }

    header .content .header-c svg {
      min-width: 150px;
      width: 100%;
      max-width: 270px;
    }

    header .content .header-r {
      width: 40%;
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
      padding: 0.5rem 2rem;
      font-family: 1.6rem;
      text-transform: uppercase;
      text-align: center;
      border: .2rem solid transparent;
      border-radius: 5em;
      color: #fff;
      margin: 0px 5px;
      cursor: pointer;
    }

    .bannerClass {
      position: relative;
      z-index: 0;
    }

    .shield {
      position: absolute;
      z-index: 1;
      top: 50%;
      left: 20%;
      transform: translate(-50%, -50%);
    }


    .responsive-menu {
      display: none;
    }

    .bannerInfo {
      text-transform: uppercase;
      color: #fff;
    }

    .bannerInfo span {
      color: #FAC33B;
    }

    .login-btns {
      color: #fff;
    padding: 15px 45px;
    border-radius: 30px;
    background-color: #E26743;
    font-size: 20px;
    font-weight: 500;
    margin: 10px -30px;
    text-transform: uppercase;
    font-family: "Brandon Grotesque", sans-serif;
    border: none;
    }

    .createAccount-btns {
      background-color: #FA9E33;
    }

    @media only screen and (max-width:1420px) {
      .top-btns {
        max-height: 6rem;
        padding: 1rem 1.5rem;
        font-size: 15px;
        margin: 0px 0px;
      }



      .shield img {
        width: 350px;
      }



    }

    @media only screen and (max-width:1205px) {
      .top-btns {
        max-height: 6rem;
        padding: 1rem 1rem;
        font-size: 13px;
        margin: 0px 0px;
      }



    }

    @media (min-width:1024px) {
      .logoutUser {
        display: none;
      }

      .logoutUserDesktop {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 15px;
        margin: 25px 0 40px;
        cursor: pointer;
      }

      #banner {
        background: url('/wp-content/uploads/HomePageBanner.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 750px;
      }
    }

    @media only screen and (max-width:1023px) {
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
        max-width: 450px;
        background-color: #2C667E;
        top: 0;
        left: 0;
        z-index: 10;
        text-align: center;
        transition: none;
        -webkit-transition:none;

      }

      .responsive-menu-ul li {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 15px 0 15px 30px;
        border-top: 1px solid #fff;
        text-transform: uppercase;
        font-weight: 450;
        font-size: 18px;
      }

      .responsiveList a {
        color: #fff;
      }

      #responsiveMenuLogo {
        width: 300px;
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
        box-sizing: border-box;
        text-decoration: none;
      }



      .close-btn {
        color: #FFFFFF;
        display: flex;
        align-items: center;
        z-index: 1;
        padding: 20px 0;
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


      .logoutUser {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .logoutUserDesktop {
        display: none;
      }

      .shield img {
        width: 280px;
        margin-bottom: 10px;
      }

      .shield {
        top: 70%;
        left: 50%;
      }

      .bannerInfo {
        text-align: center;
      }

      .bannerInfo h2 {
        margin: 0;
        font-size: 1.2em;
        min-width: 275px;
      }

      #banner {
        background: url('/wp-content/uploads/mobile-portrait-e1712101125997.jpeg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 750px;
      }

    }

    @media (min-width:1024px) {
      .bannerInfo h2 {
        font-size: 2em;
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



    }

    @media only screen and (max-width:480px) {
      .top-btns {
        max-height: 5rem;
        padding: 1rem 1rem;
        font-size: 13px;
        margin: 20px 0px;
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
                <svg id="responsiveMenuLogo" width="190" height="44" viewBox="0 0 190 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="Group 165">
                    <g id="Group 163">
                      <path id="Path 7834" d="M88.936 40.7141H88.8682C88.6308 40.9765 88.34 41.2339 88.0081 41.5063C87.6762 41.7786 87.2861 42.0335 86.8646 42.2734C86.4261 42.5133 85.9464 42.7057 85.4449 42.8557C84.9094 43.0006 84.328 43.083 83.7175 43.083C82.9107 43.083 82.1306 42.9456 81.411 42.6782C80.6939 42.4184 80.0834 42.0335 79.5722 41.5288C79.0561 41.0315 78.6418 40.4343 78.3632 39.7221C78.0604 39.0074 77.9126 38.2203 77.9126 37.3382C77.9126 36.3811 78.0967 35.5265 78.4262 34.7569C78.7702 33.9947 79.2451 33.3525 79.8556 32.8127C80.471 32.293 81.1809 31.8857 82.0409 31.6083C82.8962 31.3334 83.8241 31.196 84.8586 31.196C85.6023 31.196 86.2952 31.246 86.9373 31.3384C87.5599 31.4359 88.1292 31.5508 88.6017 31.6858V30.9636C88.6017 30.5588 88.5338 30.144 88.3812 29.7541C88.2552 29.3718 88.0275 29.0245 87.7247 28.7246C87.4267 28.4223 87.0269 28.1824 86.5424 28C86.0554 27.825 85.457 27.7376 84.7495 27.7376C83.887 27.7376 83.0197 27.825 82.1669 28.0324C81.3068 28.2273 80.3741 28.5197 79.3614 28.917V25.4961C80.2433 25.1013 81.1736 24.8039 82.15 24.589C83.1239 24.3816 84.1536 24.2717 85.2292 24.2642C86.4891 24.2642 87.6035 24.4166 88.5581 24.7364C89.5102 25.0613 90.3048 25.5011 90.9372 26.0658C91.5744 26.6181 92.0589 27.2853 92.3811 28.0449C92.6888 28.8096 92.8342 29.6467 92.8342 30.5488V37.2907C92.8342 38.4752 92.8608 39.4872 92.8778 40.3443C92.9069 41.1939 92.9262 41.9536 92.9553 42.6183H89.1226L88.936 40.7141ZM88.6017 34.9843C88.1922 34.8843 87.7247 34.7943 87.1989 34.7219C86.6732 34.6294 86.145 34.5944 85.6023 34.5944C84.5678 34.5944 83.7417 34.8093 83.1433 35.2266C82.54 35.6539 82.2372 36.3062 82.2372 37.1782C82.2372 37.5906 82.305 37.9379 82.4383 38.2428C82.5885 38.5476 82.7677 38.7925 83.0003 38.9874C83.2353 39.1898 83.5067 39.3373 83.8192 39.4297C84.1317 39.5397 84.454 39.5896 84.8053 39.5896C85.2292 39.5896 85.6338 39.5172 86.0239 39.4097C86.4067 39.2948 86.7459 39.1449 87.085 38.9674C87.3976 38.785 87.6859 38.5876 87.9524 38.3677C88.1995 38.1428 88.4175 37.9229 88.6017 37.7205V34.9843Z" fill="white" />
                      <path id="Path 7835" d="M106.392 42.5984C105.915 42.7508 105.338 42.8607 104.674 42.9557C104.027 43.0357 103.397 43.0831 102.818 43.0831C101.367 43.0831 100.18 42.8333 99.2496 42.3435C98.3242 41.8537 97.6724 41.1665 97.2848 40.2544C97.0013 39.5947 96.8657 38.7101 96.8657 37.5907V28.3074H93.6289V24.7041H96.8657V19.6938H101.12V24.7041H106.135V28.3074H101.12V37.0159C101.12 37.7031 101.219 38.2129 101.418 38.5477C101.784 39.12 102.489 39.4023 103.555 39.4023C104.051 39.4023 104.543 39.3598 105.013 39.2749C105.498 39.1999 105.961 39.095 106.392 38.975V42.5984Z" fill="white" />
                      <path id="Path 7836" d="M115.543 43.0832C113.796 43.0832 112.354 42.7783 111.208 42.1661C110.057 41.5564 109.197 40.7318 108.597 39.6972C108.299 39.1375 108.061 38.5328 107.916 37.8606C107.773 37.1934 107.693 36.4662 107.693 35.6416V24.7041H111.947V35.1743C111.947 35.7915 111.984 36.3063 112.061 36.7461C112.156 37.1784 112.272 37.5707 112.434 37.8781C112.727 38.4278 113.134 38.8226 113.66 39.0925C114.183 39.3599 114.804 39.4873 115.543 39.4873C116.303 39.4873 116.967 39.3374 117.502 39.05C118.05 38.7527 118.457 38.2979 118.726 37.6982C119.012 37.1184 119.138 36.3138 119.138 35.2718V24.7041H123.387V35.6416C123.387 37.0959 123.147 38.3279 122.663 39.3274C122.379 39.8947 122.031 40.4069 121.59 40.8642C121.154 41.329 120.64 41.7263 120.051 42.0512C119.455 42.3785 118.794 42.6334 118.045 42.8108C117.304 42.9832 116.456 43.0832 115.543 43.0832Z" fill="white" />
                      <path id="Path 7837" d="M70.7628 42.6176H75.3636V19.6931H70.9469V35.9157L60.2385 19.6931H55.6401V42.6176H60.0253L60.0132 26.3301L70.7628 42.6176Z" fill="white" />
                      <path id="Path 7838" d="M132.087 25.0488C131.213 25.5686 130.51 26.2833 130.016 27.2003H129.943L129.546 24.7015H126.033V42.6158H130.28V30.6188C130.825 29.7966 131.586 29.1819 132.569 28.7821C133.553 28.3798 134.689 28.1774 136 28.1774H136.349V28.1199L134.897 24.2742C133.819 24.3216 132.865 24.5715 132.087 25.0488Z" fill="white" />
                      <path id="Path 7839" d="M165.397 39.5472C166.226 39.5472 167.076 39.4647 167.977 39.2948C168.881 39.1199 169.785 38.8675 170.71 38.5476V42.0435C170.158 42.2909 169.31 42.5283 168.186 42.7482C167.045 42.9656 165.862 43.083 164.646 43.083C163.415 43.083 162.26 42.9156 161.138 42.5858C160.031 42.2659 159.076 41.7362 158.248 41.0065C157.419 40.2768 156.772 39.3373 156.288 38.1753C155.791 37.0158 155.551 35.614 155.551 33.9647C155.551 32.3355 155.777 30.9136 156.232 29.6942C156.7 28.4797 157.305 27.4677 158.073 26.6631C158.834 25.8609 159.701 25.2562 160.695 24.8589C161.678 24.4541 162.706 24.2642 163.755 24.2642C164.845 24.2642 165.862 24.4316 166.788 24.7814C167.721 25.1213 168.515 25.661 169.194 26.4057C169.87 27.1403 170.386 28.0924 170.764 29.2644C171.146 30.4238 171.331 31.8007 171.331 33.395C171.316 33.9972 171.299 34.5295 171.28 34.9543H159.9C159.956 35.7914 160.135 36.4886 160.438 37.0808C160.726 37.6655 161.124 38.1428 161.598 38.5026C162.09 38.8675 162.662 39.1274 163.306 39.2973C163.946 39.4647 164.646 39.5472 165.397 39.5472ZM163.694 27.6751C163.159 27.6751 162.681 27.7776 162.269 27.9825C161.838 28.1824 161.485 28.4697 161.182 28.8121C160.874 29.1669 160.632 29.5767 160.452 30.0515C160.273 30.5088 160.15 31.0161 160.094 31.5483H166.926C166.926 31.0161 166.856 30.5088 166.708 30.0515C166.584 29.5767 166.376 29.1669 166.107 28.8121C165.833 28.4697 165.501 28.1824 165.104 27.9825C164.712 27.7776 164.234 27.6751 163.694 27.6751Z" fill="white" />
                      <path id="Path 7840" d="M184.052 42.5984C183.561 42.7508 183.001 42.8607 182.34 42.9557C181.664 43.0357 181.058 43.0831 180.479 43.0831C179.033 43.0831 177.836 42.8333 176.917 42.3435C175.985 41.8537 175.331 41.1665 174.948 40.2544C174.664 39.5947 174.517 38.7101 174.517 37.5907V28.3074H171.282V24.7041H174.517V19.6938H178.776V24.7041H183.805V28.3074H178.776V37.0159C178.776 37.7031 178.88 38.2129 179.079 38.5477C179.449 39.12 180.159 39.4023 181.218 39.4023C181.714 39.4023 182.192 39.3598 182.686 39.2749C183.158 39.1999 183.621 39.095 184.052 38.975V42.5984Z" fill="white" />
                      <path id="Path 7841" d="M148.666 30.1666C148.031 31.9457 147.619 33.1252 147.421 33.6924C147.232 34.2672 146.91 35.2242 146.461 36.5686H146.381C145.95 35.2242 145.633 34.2672 145.429 33.6924C145.235 33.1252 144.809 31.9457 144.189 30.1666L140.395 19.6938H135.753L144.431 42.6159H148.368L157.061 19.6938H152.45L148.666 30.1666Z" fill="white" />
                      <path id="Path 7842" d="M29.6469 18.8791C27.6021 18.8242 26.8487 19.6263 25.0219 19.5438C23.0062 19.4514 21.7052 17.0675 23.091 15.3383C23.6216 14.6786 24.6537 14.1163 25.4338 13.2142C26.0589 12.4896 26.2357 11.5125 26.9335 10.9503C27.8008 10.2581 28.9443 9.95322 29.6469 9.9807C30.3592 9.95322 31.4882 10.2581 32.3458 10.9503C33.0557 11.5125 33.2277 12.4896 33.8503 13.2142C34.6329 14.1163 35.6698 14.6786 36.2004 15.3383C37.5813 17.0675 36.2779 19.4514 34.2743 19.5438C32.4403 19.6263 31.6941 18.8242 29.6469 18.8791Z" fill="white" />
                      <path id="Path 7843" d="M19.2292 5.77273C20.4091 4.94811 21.7198 5.49536 22.8682 7.21957C24.1934 9.20366 24.1522 10.6305 23.2001 11.4301C22.0832 12.3447 20.758 12.0773 19.2292 10.0158C17.8798 8.17663 18.0808 6.56487 19.2292 5.77273Z" fill="white" />
                      <path id="Path 7844" d="M25.4796 0.540063C26.9671 0.227706 28.0404 1.3272 28.491 3.5187C29.0192 6.04504 28.4135 7.4469 27.1464 7.82923C25.6904 8.26403 24.4741 7.43191 23.7861 4.74814C23.1828 2.35673 24.0162 0.844924 25.4796 0.540063Z" fill="white" />
                      <path id="Path 7845" d="M40.0573 5.77273C38.8847 4.94811 37.5788 5.49536 36.4256 7.21957C35.1052 9.20366 35.144 10.6305 36.0937 11.4301C37.2057 12.3447 38.5455 12.0773 40.0573 10.0158C41.4164 8.17663 41.2081 6.56487 40.0573 5.77273Z" fill="white" />
                      <path id="Path 7846" d="M33.8138 0.540063C32.3166 0.227706 31.2433 1.3272 30.7951 3.5187C30.2742 6.04504 30.8823 7.4469 32.1348 7.82923C33.6151 8.26403 34.8217 7.43191 35.5073 4.74814C36.1105 2.35673 35.2747 0.844924 33.8138 0.540063Z" fill="white" />
                      <path id="Path 7847" d="M24.2782 43.0831C20.0723 23.3771 6.8757 16.0855 0 35.6415C7.27303 23.587 15.8689 24.6316 19.3842 43.0831H24.2782Z" fill="white" />
                      <path id="Path 7848" d="M28.816 43.0832H31.1515C35.0666 19.489 43.9289 19.2766 51.9458 20.1062C37.6177 14.5712 32.0043 23.1748 28.816 32.6105C24.4866 22.9674 17.5091 8.21415 3.36279 12.3123C14.9434 12.7271 21.4218 22.1553 26.5459 43.0832H28.816Z" fill="white" />
                      <path id="Path 7849" d="M186.611 16.3552C186.487 16.4751 186.347 16.5351 186.18 16.5351H185.244V15.9254V15.3232H186.18C186.347 15.3232 186.487 15.3782 186.611 15.4956C186.72 15.618 186.776 15.7555 186.776 15.9254C186.776 16.0903 186.72 16.2378 186.611 16.3552ZM185.244 18.949V17.1598H185.954L186.659 18.949H187.41L186.676 17.0724C186.809 17.0074 186.938 16.9199 187.052 16.8125C187.292 16.5726 187.41 16.2727 187.41 15.9254C187.41 15.5756 187.292 15.2857 187.061 15.0483C186.814 14.8109 186.526 14.691 186.18 14.691H184.629V18.949H185.244ZM189.46 16.825C189.46 17.7945 189.123 18.6142 188.452 19.2889C187.788 19.9561 186.974 20.2884 186.015 20.2884C185.058 20.2884 184.241 19.9561 183.582 19.2889C182.921 18.6142 182.584 17.7945 182.584 16.825C182.584 15.8579 182.921 15.0383 183.582 14.3611C184.241 13.6939 185.058 13.3541 186.015 13.3541C186.974 13.3541 187.788 13.6939 188.452 14.3611C189.123 15.0383 189.46 15.8579 189.46 16.825ZM186.015 12.8093C184.912 12.8093 183.965 13.1966 183.19 13.9738C182.429 14.7509 182.049 15.698 182.049 16.825C182.049 17.9495 182.429 18.899 183.19 19.6712C183.965 20.4508 184.912 20.8356 186.015 20.8356C187.127 20.8356 188.079 20.4508 188.845 19.6712C189.605 18.899 190 17.9495 190 16.825C190 15.698 189.605 14.7509 188.845 13.9738C188.079 13.1966 187.127 12.8093 186.015 12.8093Z" fill="white" />
                    </g>
                  </g>
                </svg>
              </div>
            </li>
            <?php if (is_user_logged_in()) { ?>
              <li class="responsiveList">
                <a href="<?php echo wp_logout_url();  ?>">Logout</a>
              </li>
            <?php } else { ?>
              <li class="responsiveList">
                <a href="<?php echo wp_login_url(); ?>">Login</a>
              </li>
              <li class="responsiveList">
                <a href="<?php echo wp_registration_url(); ?>">Create an account</a>
              </li>
            <?php } ?>
            </li>
            <?php if ($menuItems) {
              foreach ($menuItems as $menuItem) {
                // Create <li> for each menu element
                echo '<li class="responsiveList"><a href="' . $menuItem->url . '">' . $menuItem->title . '</a></li>';
              }
            }
            ?>
          </ul>

        </div><!--end responsive-menu-->

        <script>
          jQuery(".close-btn").on("click", function() {
            jQuery(".responsive-menu").fadeOut('slow');
          });

          jQuery(".bars").on("click", function() {
            jQuery(".responsive-menu").fadeIn('slow');
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
          <button type="button" class="top-btns" data-toggle="modal" data-target="#partnerAssets">NaturVet Partner Assets Site</button>
        <?php } ?>
      </div><!--end header-r-->
    </div><!--end content-->
  </header>
  <div class="bannerClass">
    <section id="banner"></section>
    <div class="shield">
      <img src="/wp-content/uploads/Layer_1.svg" alt="University Naturevet">
      <div class="bannerInfo">
        <?php if (!is_user_logged_in()) { ?>
          <div class="logoutUser">
            <a href="<?php echo wp_login_url(); ?>">
              <button class="login-btns">Login</button>
            </a>
            <a href="<?php echo wp_registration_url(); ?>">
              <button class="login-btns createAccount-btns">Create an account</button>
            </a>
          </div>
        <?php } else {
          $current_user_id = get_current_user_id();
          $user_info = get_userdata($current_user_id);
        ?>
          <h2 class="h2welcome">Welcome <span><?php echo $user_info->user_login; ?>,</span></h2>

          <?php if (current_user_can('manage_options')) :
            $completed_quizzes_count = count_completed_quizzes($current_user_id);
            $total_quizzes_count = count_total_quizzes();
          ?>
            <h2>You've completed <span><?php echo $completed_quizzes_count; ?>/<?php echo $total_quizzes_count; ?></span><br> training videos</h2>
        <?php endif;
        } ?>

        <?php
        function count_completed_quizzes($user_id)
        {
          $completed_quizzes_query = new WP_Query(array(
            'post_type' => 'completed-quizzes',
            'meta_query' => array(
              array(
                'key' => 'user_id',
                'compare' => '=',
                'value' => $user_id
              )
            )
          ));
          return $completed_quizzes_query->found_posts;
        }

        function count_total_quizzes()
        {
          $total_quizzes_query = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type' => 'quiz'
          ));
          return $total_quizzes_query->found_posts;
        }
        ?>

      </div>
    </div>
  </div>

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