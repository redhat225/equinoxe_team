  <nav class="none-box-shadow white black-text" ng-show="$root.navbar_invisible">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo hide-on-med-and-down" style="left: 15px;"><?= $this->Html->image('assets/equinoxe_logo.png',['style'=>'width:175px;']) ?></a>
      <a href="#" class="brand-logo hide-on-large-only"><?= $this->Html->image('assets/equinoxe_logo.png',['style'=>'width:175px;']) ?></a>
      
      <a style="position: absolute;left: 0px;" href="#" data-activates="slide-out" class="button-collapse"><i class="ion-android-menu black-text mg-size-40"></i></a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">


        <li><a ui-sref="app.home" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar">Accueil</a></li>
        <li><a ui-sref="app.indoor" data-beloworigin="true" data-constrainwidth="true" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar dropdown-button" dropdown data-hover="true" data-activates="indoor_dropdown">Services à Domicile</a></li>
        <!-- Indoor Dropdown Structure -->
        <ul class="dropdown-content mg_sec_background_2" id="indoor_dropdown">
          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Entretien de la maison</a></li> 
          <li class="divider"></li>
          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Assistance des personnes agées</a></li>

          <li class="divider"></li>
          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Préparation de repas</a></li>
          <li class="divider"></li>

          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Garde d'enfant</a></li>
          <li class="divider"></li>
          
          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Petit travaux de jardinage</a></li>
          <li class="divider"></li>

          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Soutien scolaire</a></li>
          <li class="divider"></li> 
         
          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Assistance informatique</a></li>
          <li class="divider"></li>

          <li class="divider"></li>
          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Livraison de courses</a></li>
          <li class="divider"></li>
          <li><a href="" class="bold black-text" ui-sref="app.indoor({is_sub_menu:1})">Maintenance et vigile temporaire</a></li>
        </ul>

        <ul class="dropdown-content mg_sec_background_2" id="event_dropdown">
            <li><a href="" class="bold black-text" ui-sref="app.event">Equinoxe Event</a></li>
        </ul>

        <ul class="dropdown-content mg_sec_background_2" id="event_dropdown_1">
            <li><a href="" class="bold black-text" ui-sref="app.event">Equinoxe Event</a></li>
        </ul>

        <li><a href="#!" ui-sref="app.contact" ui-sref-active="active" class="black-text bold item_top_navbar">Contact</a></li>
        <!-- Pricing area -->
        <li ng-show="$root.main_pricing_effect"><a href="#tarifs" class="black-text bold item_top_navbar">Tarifs</a></li>
        <li ng-hide="$root.main_pricing_effect" ui-sref="app.home({is_pricing_selected:true})" ui-sref-active=""><a class="black-text bold item_top_navbar">Tarifs</a></li>

        <li class="mg_sec_background_1 mg-height-67"><a href="http://82.223.109.39:2003/home.html#/index/" target="_blank" class="white-text bold item_top_navbar">Application Jefêtou</a></li>

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
          <!-- Player controller -->
          <a class="right player-controller mg_sec_background_2 mg-height-67 mg-width-50">
              <i class="player-controller-icon ion-volume-medium black-text small"></i>
          </a>
    </div>
  </nav>

  <!-- Dynamic Nav- -->
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
              <li><a ui-sref="app.indoor" ui-sref-active="active" href="#!" class="black-text bold item_top_navbar mg-height-70">Service à Domicile</a></li>
              <li><a href="#!" ui-sref="app.contact" ui-sref-active="active" class="black-text bold item_top_navbar mg-height-70">Contact</a></li>

              <!-- Pricing area -->
              <li ng-show="$root.main_pricing_effect"><a href="#tarifs" class="black-text bold item_top_navbar mg-height-70">Tarifs</a></li>
              <li ng-hide="$root.main_pricing_effect" ui-sref="app.home({is_pricing_selected:true})" ui-sref-active=""><a class="black-text bold item_top_navbar mg-height-70">Tarifs</a></li>




              <li class="mg_sec_background_1"><a href="http://82.223.109.39:2003/home.html#/index/" target="_blank" class="white-text bold item_top_navbar mg-height-70">Application Jefêtou</a></li>

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
          <!-- Player controller -->
          <a class="right player-controller mg_sec_background_2 mg-height-70 mg-width-50">
              <i class="player-controller-icon ion-volume-medium black-text small"></i>
          </a>
      </div>
  </nav>
</div>

      <ul class="side-nav mg_sec_background_2" id="slide-out">
          <li class="center kr-padding-top-10 white">
             <?= $this->Html->image('assets/equinoxe_logo.png',['style'=>'width:225px;']) ?>
          </li>
          <li><a ui-sref="app.home" ui-sref-active="active-side" href="#!" class="black-text bold mg-height-70 left-align">Accueil</a></li>
           
           <li><a ui-sref="app.indoor" ui-sref-active="active-side" href="#!" class="black-text bold mg-height-70 left-align">Services à Domicile</a></li>

          <li><a href="#!" ui-sref="app.contact" ui-sref-active="active-side" class="black-text bold mg-height-70 left-align">Contact</a></li>

          <!-- Pricing area -->
          <li ng-show="$root.main_pricing_effect"><a href="#tarifs" class="black-text bold mg-height-70 left-align">Tarifs</a></li>
          <li ng-hide="$root.main_pricing_effect"  ui-sref="app.home({is_pricing_selected:true})" ui-sref-active=""><a class="black-text bold mg-height-70 left-align">Tarifs</a></li>

           <li><a href="http://82.223.109.39:2003/home.html#/index/" target="_blank" class="black-text bold mg-height-70 left-align">Application Jefêtou</a></li>
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

           // Howler sound controller
            var sound = new Howl({
              src:['/webroot/sound/music.mp3'],
              volume:0.5,
              loop:true,
              autoplay:true,
              html5:true
            });

            $('.player-controller').on('click', function(){
                var $sound_player_trigger = $('.player-controller-icon');
              if($sound_player_trigger.hasClass('ion-volume-medium'))
              {
                $('.player-controller').removeClass('mg_sec_background_2').addClass('mg_prim_background');
                $sound_player_trigger.removeClass('ion-volume-medium').addClass('ion-volume-mute');
                sound.pause();
              }
              else
              {
                $('.player-controller').addClass('mg_sec_background_2').removeClass('mg_prim_background');
                $sound_player_trigger.addClass('ion-volume-medium').removeClass('ion-volume-mute');
                  sound.play();
              }
            });
</script>