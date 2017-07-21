<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Equinoxe Team';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $title ?>
    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>

    <?= $this->fetch('meta') ?>
    <!-- Third Party dependencies -->
    <?= $this->Html->css('../bower_components/materialize/dist/css/materialize.min') ?>
    <!-- Custom Css goes here -->
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css('../js/slick-1.6.0/slick/slick') ?>
    <?= $this->Html->css('../js/slick-1.6.0/slick/slick-theme') ?>
    <?= $this->Html->css('ionicons-2.0.1/css/ionicons.min') ?>
    <?= $this->Html->css('animatism') ?>
    <?= $this->Html->css('../bower_components/hover/css/hover-min') ?>
    <?= $this->Html->css('../bower_components/imagehover.css/css/imagehover.min') ?>
    <?= $this->Html->css('../js/prezento-master/jquery.prezento') ?>
    <?= $this->Html->css('../bower_components/aos/dist/aos') ?>


    <?= $this->fetch('css') ?>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

    <?= $this->Html->script('../bower_components/angular/angular.min') ?>
    <?= $this->Html->script('../bower_components/materialize/dist/js/materialize.min') ?>

    <?= $this->Html->script('../bower_components/angular/angular-materialize.min') ?>
    <?= $this->Html->script('../bower_components/angular/angular-ui-router.min') ?>
    <?= $this->Html->script('../bower_components/aos/dist/aos') ?>

    <?= $this->Html->script('slick-1.6.0/slick/slick.min') ?>
    <?= $this->Html->script('prezento-master/jquery.prezento') ?>
    <?= $this->Html->script('jquery.fittext') ?>
   

    <?= $this->fetch('script') ?>
    <base href="/">

</head>
<body ng-app="equinoxe-team">
     <!-- HIde Animation -->

    <div ng-hide="$root.preloader" class="row center mg-margin-bottom-0" ui-view="navbar"></div>
    <div ng-hide="$root.preloader" ui-view></div>
    <div ng-hide="$root.preloader" ui-view="footer"></div> 
    
    <!-- loader -->

                <div class="row center mg-margin-top-70" ng-show="$root.preloader" style="width: 100%; position:fixed;">
                    <?= $this->Html->image('assets/home/wide_banner_blank.jpg',['style'=>'width:100%;display:block;']) ?>
                        <div class="col s12 white-text" style="position: absolute; width: 100%; top:40%;">
                          <div class="container">
                               <div class="container hide-on-small-and-down center" >
                                    <h1 class="mg-size-50"> <span style="font-weight:100;"> L'EQUIPE </span>
                                      <span
                                         class="txt-rotate mg_prim_background"
                                         data-period="2000"
                                         data-rotate='[ "MULTISERVICE", "MULTITACHE", "MULTIPOLE", "MULTIFUN"]' style="border-bottom: 3px solid #fc00ff; font-weight: 800;"></span>
                                    </h1>
                                    <h2 class="mg-size-50">
                                      <span class="light">A VOS</span>  <span class="bold" style="border-bottom: 8px solid #7a80a1;">BESOINS</span>
                                    </h2>
                                    
                                    <h2 class="mg-size-50"><span class="light">DE</span> <span class="bold" style="border-bottom: 8px solid #f9f461;">TOUS LES JOURS</span></h2>
                               </div>
                          </div>

                        </div>
                  </div>


            
    <!-- Angular App -->
    <?= $this->Html->script('Red/app') ?>
    <?= $this->Html->script('Red/controllers') ?>
    <?= $this->Html->script('Red/services') ?>

    <?= $this->Html->script('sweet-justice.min') ?>

    <script>
      var TxtRotate = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 2000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];

          if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          var that = this;
          var delta = 300 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
          }

          setTimeout(function() {
            that.tick();
          }, delta);
        };

        window.onload = function() {
          var elements = document.getElementsByClassName('txt-rotate');
          for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
          document.body.appendChild(css);
        };
    </script>
      <script>
    AOS.init();
  </script>
</body>
</html>
