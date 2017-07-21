  <nav class="none-box-shadow white black-text" ng-show="$root.navbar_invisible">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo hide-on-med-and-down" style="left: 15px;"><?= $this->Html->image('assets/equinoxe_logo.png',['style'=>'width:175px;']) ?></a>
      <a href="#" class="brand-logo hide-on-large-only"><?= $this->Html->image('assets/equinoxe_logo.png',['style'=>'width:175px;']) ?></a>
      
      <a style="position: absolute;left: 0px;" href="#" data-activates="slide-out" class="button-collapse"><i class="ion-android-menu black-text mg-size-40"></i></a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a ui-sref="app.home" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar">Accueil</a></li>
        <li><a ui-sref="app.indoor" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar">Assistance Intérieure</a></li>
        <li><a ui-sref="app.outdoor" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar">Assistance Extérieure</a></li>
        <li><a ui-sref="app.event" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar">Evenementiel</a></li>
        <li><a href="#!" ui-sref="app.contact" ui-sref-active="active" class="black-text bold item_top_navbar">Contact</a></li>

        <li class="mg_prim_background hvr-grow mg-height-67">
              <a href="https://www.facebook.com/equinoxe2" target="_blank">
                <i class="ion-social-facebook black-text"></i>
              </a>
          </li>
          <li class="mg_sec_background_1 hvr-grow mg-height-67">
              <a href="www.instagram.com/equinoxe_event/" target="_blank">
                <i class="ion-social-instagram-outline black-text"></i>
              </a>
          </li>
          <li class="mg_sec_background_2 hvr-grow mg-height-67">
              <a href="https://twitter.com/Equinoxe_Event" target="_blank">
                <i class="ion-social-twitter black-text"></i>
              </a>
          </li>

      </ul>
    </div>
  </nav>

  <!-- Dynamic Nav -->
<div class="navbar-fixed" id="dynamic_navbar" style="position: absolute; top: 0px;">
  <nav class="white mg-height-70">
      <div class="nav-wrapper">
             <li data-activates="slide-out" class="mg-margin-left-20 hide-on-med-and-down brand-logo relative-block left button-collapse">
             <a href="#!" class="">
                 <?= $this->Html->image('assets/equinoxe_logo.png',['style'=>'width:190px;'])  ?></a>
              </li>
           
              <li data-activates="slide-out" class="hide-on-large-only brand-logo relative-block center button-collapse">
                     <a href="#!" class="">
                        <?= $this->Html->image('assets/equinoxe_logo.png',['style'=>'width:190px;'])  ?>
                     </a>
              </li>

            <a style="position: absolute;left: 0px;" href="#" data-activates="slide-out" class="button-collapse"><i class="ion-android-menu black-text mg-size-40"></i></a>

          <ul class="right hide-on-med-and-down ">
              <li><a ui-sref="app.home" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar mg-height-70">Accueil</a></li>
              <li><a ui-sref="app.indoor" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar mg-height-70">Assistance Intérieure</a></li>
              <li><a ui-sref="app.outdoor" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar mg-height-70">Assistance Extérieure</a></li>
              <li><a ui-sref="app.event" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar mg-height-70">Evenementiel</a></li>
              <li><a href="#!" ui-sref="app.contact" ui-sref-active="active" class="black-text bold item_top_navbar mg-height-70">Contact</a></li>

              <li class="mg_prim_background hvr-grow mg-height-70">
                    <a href="https://www.facebook.com/equinoxe2" target="_blank">
                      <i class="ion-social-facebook black-text"></i>
                    </a>
                </li>
                <li class="mg_sec_background_1 hvr-grow mg-height-70">
                    <a href="www.instagram.com/equinoxe_event/" target="_blank">
                      <i class="ion-social-instagram-outline black-text"></i>
                    </a>
                </li>
                <li class="mg_sec_background_2 hvr-grow mg-height-70">
                    <a href="https://twitter.com/Equinoxe_Event" target="_blank">
                      <i class="ion-social-twitter black-text"></i>
                    </a>
                </li>
          </ul>
      </div>
  </nav>
</div>

      <ul class="side-nav mg_sec_background_2" id="slide-out">
          <li class="center kr-padding-top-10 white">
             <?= $this->Html->image('assets/equinoxe_logo.png',['style'=>'width:225px;']) ?>
          </li>
          <li><a ui-sref="app.home" ui-sref-active="active-side " href="#!" class="black-text bold mg-height-70 left-align">Accueil</a></li>
          <li><a ui-sref="app.indoor" ui-sref-active="active-side " href="#!" class="black-text bold mg-height-70 left-align">Assistance Intérieure</a></li>
          <li><a ui-sref="app.outdoor" ui-sref-active="active-side  " href="#!" class="black-text bold mg-height-70 left-align">Assistance Extérieure</a></li>
          <li><a ui-sref="app.event" ui-sref-active="active-side  " href="#!" class="black-text bold mg-height-70 left-align">Evenementiel</a></li>
          <li><a href="#!" ui-sref="app.contact" ui-sref-active="active-side  " class="black-text bold mg-height-70 left-align">Contact</a></li>
          <li style="background: rgba(252, 0, 255, 0.58);">
              <a href="https://www.facebook.com/equinoxe2" target="_blank" class="left-align bold">
                <i class="ion-social-facebook black-text mg-size-25"></i> - Facebook
              </a>
          </li>
          <li class="mg_sec_background_2">
              <a href="https://twitter.com/Equinoxe_Event" target="_blank" class="left-align bold">
                <i class="ion-social-twitter black-text mg-size-25"></i> - Twitter
              </a>
          </li>
          <li class="mg_sec_background_1">
              <a href="www.instagram.com/equinoxe_event/" target="_blank" class="left-align bold">
                <i class="ion-social-instagram-outline black-text mg-size-25"></i> - Instagram
              </a>
          </li>


      </ul>

    </div>
  </nav>
<script>
    $(".button-collapse").sideNav({
         closeOnClick: true,
      draggable: true
    });
$('#dynamic_navbar').fadeOut();
      $(window).scroll(function(){

      if($(this).scrollTop() > 750 ){
        $('#dynamic_navbar').fadeIn();
      } 
      else{
        $('#dynamic_navbar').fadeOut();
      }
  });
      
</script>