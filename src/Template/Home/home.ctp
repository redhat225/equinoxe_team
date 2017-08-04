<?php $this->layout='blank'; ?>
    <div class="prezento-master hide"></div>
	<div class="row center mg-padding-0 mg-margin-top-30 mg-margin-bottom-0" style="overflow:hidden;" data-aos="fade-up">
		<?= $this->Html->image('assets/home/wide_banner.jpg',['style'=>'width:100%;height:100%;display:block;','class'=>'scale-up-on-small-only']) ?>
	</div>

	<!-- Picto Area -->
	<div class="row center mg-padding-50 grey lighten-4">
		<div class="col s12 l4 m12 center mg-padding-top-30" data-aos="zoom-in">
		    <?= $this->Html->image('assets/home/asset_1.png',['style'=>'width:150px;'])  ?>
			<h6 class="bold mg-size-22">Services à Domicile</h6>
			<p class="mg-padding-left-30 mg-padding-right-30 sweet-hypens">
			  Nous vous proposons un large éventail de prestations couvrant les services d'hygyène, de jardinage ainsi que de soutien scolaire et informatique. Confirmez-nous votre disponibilité et les rouages d'équinoxe tourneront pour vous!
			</p>
			 <button ui-sref="app.indoor" class="btn mg_prim_background white-text bold mg-margin-top-20">Découvrir</button>	
		</div>


		<div class="col s12 m12 l4 center mg-padding-top-30" data-aos="zoom-in">
		    <?= $this->Html->image('assets/home/asset_2.png',['style'=>'width:167px;','class'=>'hide-on-med-and-down'])  ?>
		    <?= $this->Html->image('assets/home/asset_2.png',['style'=>'width:200px;','class'=>'hide-on-large-only'])  ?>
			<h6 class="bold mg-size-22">Course &amp; Livraison</h6>
			<p class="mg-padding-left-30 mg-padding-right-30 sweet-hypens" style="text-align:match-parent;">Besoin de services express comme les livraisons repas et récupération de courses? Notre agence est réactive et prête à vous alléger votre journée.Les services extérieures comprennent également l'accompagnement des personnes et les vigiles.</p>
			<button ui-sref="app.outdoor" class="btn mg_prim_background white-text bold mg-margin-top-20">Découvrir</button>
		</div>
		<div class="col s12 m12 l4 center mg-margin-top-30" data-aos="zoom-in">
		    <?= $this->Html->image('assets/home/asset_3.png',['style'=>'width:150px;'])  ?>
			<h6 class="bold mg-size-22">Evènementiel</h6>
			<p class="mg-padding-left-30 mg-padding-right-30 sweet-hypens">Après avoir tant rèvé votre évènement il est temps ... de le vivre! Et oui, nous disposons d'un catalogue riche de lieux et de thème ainsi que d'une équipe spécialisée et expérimentée dans l'organisation, qui à cet effet maintiendront vos invités en extase. </p>
			<button ui-sref="app.event" class="btn mg_prim_background white-text bold mg-margin-top-20">Découvrir</button>
		</div>
	</div>	

	<div class="row center kr-margin-top-70 mg-padding-70">
		<div class="container">
			<h5 class="special-tex bold">Qui sommes-nous</h5>
			 <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
			    <p class="special-text- mg-size-20" class="sweet-hypens">
					<b>EQUINOXE TEAM</b>, spécialiste de <b>l’aide-ménagère à Paris</b> vous accueille et vous simplifie la tache dans vos démarches pour vous trouver <b>une auxiliaire de vie qualifiée</b>. Notre organisme aide les seniors et personnes en quête de service à domicile à trouver une aide-ménagère pour une mise en place de prestations d’aide et d’accompagnement.
					Nous mettons notre savoir-faire à votre disposition afin de vous accompagner dans vos financements et vos prises en charge pour des demandes de <b>services à la personne</b> : aide à domicile, aide-ménagère et repassage, aide au repas, aide au coucher et au lever, accompagnement aux sorties, garde malade, aide à la toilette, etc.
					Nos agents d’<b>aide-ménagère à Paris</b> interviennent sur l’ensemble des arrondissements et dispose ainsi d’intervenantes compétentes et adaptées selon vos besoins. Notre objectif : vous trouver une <b>auxiliaire de vie ou aide-ménagère à Paris</b> que pourra vous accompagnement dans les taches de tous les jours. 
					N’hésitez pas à nous faire une demande de devis gratuit, ou une demande de rappel pour toutes assistances.
			    </p>
			   
		</div>
	</div>



	<!-- Services Area -->
	<div class="row center" style="border-top: 3px solid #fc00ff;">
		<div class="col s12 mg-padding-0 mg_sec_background_1">
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/home/service_11.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Evènementiel</h5>
						     <h6 class="black-text">L'incroyable anniversaire de vos bouts d'chou sera la mission de equinoxe event.</h6>
						     <button ui-sref="app.event" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/home/service_1.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Course &amp; Livraison</h5>
						     <h6 class="black-text">L'accompagnement &amp; l'assistance des personnes est aussi prise en compte par Equinoxe Team. Respirez, Mémé sera enchantée..</h6>
						     <button ui-sref="app.outdoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/home/service_4.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Services à Domicile</h5>
						     <h6 class="black-text">Pas le temps pour réaliser votre cuisine? celà ne devrait plus representer une question pour vous, la réponse nous vous la fournissons, sur la table! </h6>
						     <button ui-sref="app.indoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>
		</div>
		<div class="col s12 mg-padding-0 mg_sec_background_2">
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/home/service_3.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Course &amp; Livraison</h5>
						     <h6 class="black-text">Livraison de repas, de linge ou encore besoin de récupérer une course qui coince avec votre emploi du temps? faites-nous appel!</h6>
						     <button ui-sref="app.outdoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>

			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/home/service_2.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Services à Domicile</h5>
						     <h6 class="black-text">L'aide ménagère est l'une de nos principales spécialités.Faites confiance aux équipes de Equinoxe Team.</h6>
						     <button ui-sref="app.indoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/home/service_7.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Evènementiel</h5>
						     <h6 class="black-text">Nous vous proposons plusieurs thèmes, lieux et décorations pour votre prochain event de folie! laissez-nous vous accompagner.</h6>
						     <button ui-sref="app.event" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>

		</div>
	</div>

	<!-- Testimonials Area -->
	<div class="row center mg-padding-50">
		    <h6 class="mg-size-25 bold">Notre Mission, Votre Bien-être</h6>
	         <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
	        <h6 class="mg-size-18" style="padding-left:13%;padding-right: 13%;">Nous oeuvrons profondémment pour vous garantir des services de qualité, nos clients l'attestent!</h6>

		<div class="col l4 m12 s12 mg-margin-top-40">
				<blockquote class="mg-size-18 grey-text text-darken-1 left-align">
					Equinoxe Team m'a recontacté <span class="bold">en à peine 5 minutes</span> après avoir souscrit à un service via le web. <span class="bold">Le service était impécable comme la réctivité de l'équipe</span>.
				</blockquote>
			    <div class="col s12 mg-margin-top-30">
			    	<div class="col s4"><?= $this->Html->image('assets/home/testimonial_1.png',['style'=>'display:block; width:100%;border-radius:50%;']) ?></div>
			    	<div class="col s8 mg-margin-top-20">
			    		<h6 class="mg_prim_color mg-size-20">Emmanuel RIEHL</h6>
			    		<h6 class="mg-size-18 grey-text text-lighten-1">Seine-Sur-Marne</h6>
			    	</div>
			    </div>
		</div>
		<div class="col l4 m12 s12 mg-margin-top-40">
				<blockquote class="mg-size-18 grey-text text-darken-1 left-align">
					<span class="bold">La créativite exceptionnelle</span> de la team equinoxe exprimée de la prise en charge complète de <span class="bold">l'organisation de ma fête d'anniversaire fût d'une grande classe</span>.
				</blockquote>
			    <div class="col s12 mg-margin-top-30">
			    	<div class="col s4"><?= $this->Html->image('assets/home/testimonial_2.png',['style'=>'display:block; width:100%;border-radius:50%;']) ?></div>
			    	<div class="col s8 mg-margin-top-20">
			    		<h6 class="mg_prim_color mg-size-20">Janine Reinaldo</h6>
			    		<h6 class="mg-size-18 grey-text text-lighten-1">Toulouse</h6>
			    	</div>
			    </div>
		</div>
		<div class="col l4 m12 s12 mg-margin-top-40">
				<blockquote class="mg-size-18 grey-text text-darken-1 left-align">
					<span class="bold">La rigueur et le sérieux</span> dans la réalisation des prestation d'équinoxe Team est à salué.Grand Mère a été plus qu'accompagnée.Merci!
				</blockquote>
			    <div class="col s12 mg-margin-top-30">
			    	<div class="col s4"><?= $this->Html->image('assets/home/testimonial.jpg',['style'=>'display:block; width:100%;border-radius:50%;']) ?></div>
			    	<div class="col s8 mg-margin-top-20">
			    		<h6 class="mg_prim_color mg-size-20">Cyril VERDIET</h6>
			    		<h6 class="mg-size-18 grey-text text-lighten-1">Lyon</h6>
			    	</div>
			    </div>
		</div>
	</div>



	<!-- Parallax Form Area -->
	<div class="parallax-container mg-height-700">
		<div class="parallax">
			<?= $this->Html->image('assets/home/wide_banner_bottom.jpg',['style'=>'bottom: 50px !important;']) ?>
		</div>
		<!-- Black Banner -->
			<div ng-show="homectrl.submitting" class="row center absolute-block black" style="width: 100%;height: 100%;left: 0;z-index: 500;top: 0;opacity: 0.85;">
				<p class="white-text mg-margin-top-310">Traitement en cours</p>
				<p><?= $this->Html->image('assets/preloaders/dot_loader.png',['class'=>'mg-width-100']) ?></p>
			</div>

		<div class="row" style="position: absolute;width: 100%;" id="subscription_form">
		    <div class="container large-right-float-only-and-center-above">
		       <div class="container left-align">
		                             <div class="row">
								         <form name="subscribe_service_form" ng-submit="homectrl.subscribe_service(homectrl.service)">
									         	<h6 class="mg-padding-left-0 mg-size-30 bold left-align white-text mg-padding-top-20">
												 Notre Equipe vous recontacte <br> en 2 minutes chrono!
												</h6>
					 							<?= $this->Html->image('assets/buble.png',['style'=>'width:50px;','class'=>'mg-padding-left-0']) ?>
							                	<div class="col s12 mg-padding-0 input-field">
							                		<input type="text" ng-pattern="/^[a-zA-Z0-9_\s-]{8,100}$/" ng-model="homectrl.service.subscriber_fullname" required class="white grey-text text-darken-2 mg-height-60 login-input" ng-minlength="5" ng-maxlength="100" style="border-radius:2px;text-transform: uppercase;" placeholder="Nom Complet">
							                	</div>

							              		<div class="col s12 mg-margin-0 mg-padding-0 input-field">
							                		<input type="text" cleave="options.fr_number" ng-model="homectrl.service.subscriber_tel" ng-minlength="14" ng-maxlength="14" required class="white grey-text text-darken-2 login-input mg-height-60"   style="border-radius:2px;" placeholder="Numéro de Téléphone">
							                	</div>

							                	<div class="col s12 mg-margin-0 mg-padding-0 input-field ng-margin-bottom-30">
							                		<input required type="email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9]{2,6}$/" ng-model="homectrl.service.subscriber_email" class="white login-input mg-height-60" ng-maxlength="50"  name="email_subscriber" style="border-radius:2px;" placeholder="E-mail">
							                	</div>

							                	<div class="col s12 mg-margin-bottom-40 mg-padding-0 input-field">
							                		<select ng-model="homectrl.service.service_object" name="service_category" class="mg-height-60 browser-default mg_sec_background_1 white-text bold" ng-options="i.item_label for i in homectrl.service_items">
							                		</select>
							                	</div>
							                			                           

												<button type="submit" ng-disabled="subscribe_service_form.$invalid" class="btn mg_prim_background white-text bold" style="width: 100%;">Souscrire</button> 
											      <h6 class="mg-size-15 center-on-med-and-above white-text mg-margin-top-30 sweet-hypens">
											        J'accepte les conditions d'utilisation d'un formulaire de souscription de service en ligne(web), et m'engage à utiliser de façon responsable les services web de equinoxe team en renseignant des informations correctes.
											      </h6>
                                         </form>

                                      </div>
		           </div>

		    </div>

		</div>
	</div>



	<!-- Any Questions? -->
		<div class="row center mg-padding-40 mg-margin-0 grey lighten-2">
			<div class="container">
				<h6 class="mg-size-24 bold">Des Questions ?</h6>
				 <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
				    <p id="special-text-" class="sweet-hypens mg-size-23">
						Intérrogez nos services <br><span class="mg_prim_color">01 46 94 68 53 / 06 20 07 85 97</span> 	
				    </p>	
			</div>
		</div>

<!-- Branding -->
	<!-- Event Sponsors? -->
		<div class="row center mg-padding-40 mg-margin-0 mg-margin-bottom-0" style="background:url('/img/assets/event/background_bottom.png') -900px -350px;">
			<div class="container">
				<h6 class="mg-size-24 bold">Nos Marques</h6>
				 <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
				<div class="row center mg-padding-top-50 mg-padding-bottom-50">
					<div class="col l4 m12 s12 grey-image mg-margin-top-30" data-aos="zoom-in-down"><a class="pointer" target="_blank" href="https://www.equinoxe-event.com"><?= $this->Html->image('assets/event/equinoxe_logo.png',['style'=>'width:170px;']) ?></a></div>
					<div class="col l4 m12 s12 grey-image mg-margin-top-30" data-aos="zoom-in-down"><a href="http://jefetou.fr" target="_blank" class="pointer">
						<?= $this->Html->image('assets/home/jefetou_logo.png',['style'=>'width:170px;']) ?></a></div>
					<div class="col l4 m12 s12 grey-image mg-margin-top-30" data-aos="zoom-in-down"><a href="http://www.africafootnews.com" target="_blank" class="pointer"><?= $this->Html->image('assets/home/foot_logo.png',['style'=>'width:170px;']) ?></a></div>
				</div>
			</div>
		</div>