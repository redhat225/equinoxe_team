<?php $this->layout='blank'; ?>
	<div class="row center mg-padding-0 mg-margin-top-0 mg-margin-bottom-0" style="overflow:hidden;" data-aos="fade-up">
		<?= $this->Html->image('assets/home/banner_1.jpg',['style'=>'width:100%;height:100%;display:block;','class'=>'scale-up-on-small-only']) ?>
	</div>



<!-- Equinoxe Event advantages -->
<div class="row center mg-padding-bottom-100 mg_sec_background_6" style="position: relative;">
     <div style="position: absolute; width: 100%; top: 50px; right: 150px;" class="hide-on-med-and-down">
				<div class="prezento-master-2">

				</div>
	</div>
	<div class="col l5 offset-l6 mg-margin-top-100 hide-on-med-and-down ">
		<?= $this->Html->image('assets/home/jefetou.png',['class'=>'mg-width-200 center-align']) ?> 
			       <div class="row center">
						<p class="mg-size-16"><b>Jefêtout</b> est votre plateforme en ligne de réservation d'<b>aide-ménagère à domicile</b> pensée par <b>Équinoxe Team</b>. 
						<b>En seulement 3 clics</b> réservez les services d’une aide-ménagère près de chez vous, toutes nos prestations sont fournies par des intervenants qualifiés, ceux-ci sont particulièrement à l’écoute de vos besoins et disposent de toute l’expérience nécessaire pour vous offrir des <b>services de qualité</b>.

						N’attendez plus télécharger vite notre application mobile et recevez votre <b>aide-ménagère</b>.
					    </p>
				   </div>
				    <div class="row center">
				    	<div class="col s6">
					<?= $this->Html->image('assets/home/play.png',['style'=>'width:180px;']) ?>
				    		
				    	</div>
				    	<div class="col s6">
					<?= $this->Html->image('assets/home/app-store.png',['style'=>'width:200px;']) ?>
				    		
				    	</div>
				    </div>
	</div>
	<div class="col m12 s12 mg-margin-top-100 hide-on-large-only">
		<?= $this->Html->image('assets/home/jefetou.png',['class'=>'mg-width-200 center-align']) ?> 
			       <div class="row center">
						<p class="sweet-hypens">Jefêtout est votre plateforme en ligne de réservation d'aide-ménagère à domicile pensée par Équinoxe Team. 
						En seulement 3 clics réservez les services d’une aide-ménagère près de chez vous, toutes nos prestations sont fournies par des intervenants qualifiés, ceux-ci sont particulièrement à l’écoute de vos besoins et disposent de toute l’expérience nécessaire pour vous offrir des services de qualité.

						N’attendez plus télécharger vite notre application mobile et recevez votre aide-ménagère.
					    </p>
				   </div>
				    <div class="row center">
				    	<div class="col l6 m6 s12">
					<?= $this->Html->image('assets/home/play.png',['style'=>'width:180px;']) ?>
				    		
				    	</div>
				    	<div class="col l6 m6 s12">
					<?= $this->Html->image('assets/home/app-store.png',['style'=>'width:200px;']) ?>
				    		
				    	</div>
				    </div>
	</div>
</div>


	<div class="row center mg-padding-right-70 mg-padding-left-70 mg-padding-bottom-70 mg-padding-top-30">
		<div class="container">
			<h5 class="special-tex bold">Qui sommes-nous</h5>
			 <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
			    <p class="special-text- sweet-hypens mg-size-19">
					<b>EQUINOXE TEAM</b>, spécialiste de l’aide A DOMICILE à Paris vous accueille et vous simplifie la tache dans vos démarches pour vous trouver un personnel qualifié. Notre organisme PROPOSE DES PRESTATIONS sur mesure. Il vous accompagne dans votre recherche d’un personnel qualifié. Nous mettons notre savoir-faire à votre disposition afin de vous guider dans vos prises de décisions pour toutes vos demandes de services à la personne : aide à domicile, aide-ménagère et repassage, aide au repas, aide au coucher et au lever, accompagnement aux sorties, garde malade, aide à la toilette, etc.
					<b>Equinoxe Team</b> dispose d’intervenantes compétentes et adaptées selon vos besoins.
					Notre objectif ? Vous trouvez une personne qui répond à vos attentes : <b>La perle rare qui saura effectuer</b> toutes les tâches de la vie de tous les jours. N’hésitez pas à nous contacter pour toute demande d’assistance
			    </p>
			   
		</div>
	</div>



	<!-- Services Area -->
	<div class="row center" style="border-top: 3px solid #fc00ff;">
		<div class="col s12 mg-padding-0 mg_sec_background_1">
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/indoor/sub_banner_2.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Soutien scolaire</h5>
						     <h6 class="black-text">Le soutien approprié que vous attendiez est maintenant à votre disposition avec Equinoxe Team.</h6>
						     <button ui-sref="app.indoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/indoor/sub_banner_1.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Assistance Informatique</h5>
						     <h6 class="black-text">Notre Equique de Formateur Expérimentés vous assistes dans des services de dépannages et d'initiation rapide aux outils informatiques.</h6>
						     <button ui-sref="app.indoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/home/service_4.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Préparation de repas</h5>
						     <h6 class="black-text">Pas le temps pour réaliser votre cuisine? celà ne devrait plus representer une question pour vous, la réponse nous vous la fournissons, sur la table! </h6>
						     <button ui-sref="app.indoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>
		</div>
		<div class="col s12 mg-padding-0 mg_sec_background_2">
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/indoor/sub_banner_5.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Garde d'Enfant</h5>
						     <h6 class="black-text">Allez tranquilement en week-end avec votre dulciné, Equinoxe Team s'occupe de votre bout d'chou.</h6>
						     <button ui-sref="app.indoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>

			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/home/service_2.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Travaux Ménagers</h5>
						     <h6 class="black-text">L'aide ménagère est l'une de nos principales spécialités.Faites confiance aux équipes de Equinoxe Team.</h6>
						     <button ui-sref="app.indoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
				    </figure>
			</div>
			<div class="col l4 m12 s12 mg-padding-0">
					<figure class=" mg-margin-0 imghvr-zoom-out mg_sec_background_1">
					    <?= $this->Html->image('assets/indoor/sub_banner_6.jpg',['style'=>'width:100%;display:block !important;','class'=>'']) ?>
						  <figcaption class="mg_sec_background_2">
						     <h5 class="black-text bold">Petits Travaux de Jardinage</h5>
						     <h6 class="black-text">Parce que la beauté de votre maison est dans ce qu'elle a à offrir de plus naturel, Equinoxe Team s'occupe délicatement de votre jardin.</h6>
						     <button ui-sref="app.indoor" class="btn white-text bold mg_prim_background" style="position: absolute;bottom: 0;left: 0;width: 100%;">En savoir plus</button>
						  </figcaption>
  					
						</figure>
			</div>

		</div>
	</div>

	<!-- Testimonials Area -->
	<div class="row center mg-padding-50">
		    <h6 class="mg-size-25 bold">Notre Mission, Votre Bien-être</h6>
	         <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
	        <h6 class="mg-size-19" style="padding-left:13%;padding-right: 13%;">Nous oeuvrons profondémment pour vous garantir des services de qualité, nos clients l'attestent!</h6>

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
		<div class="row center mg-padding-40 mg-margin-0 mg_sec_background_6">
			<div class="container">
				<h6 class="mg-size-24 bold">Des Questions ?</h6>
				 <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
				    <p id="special-text-" class="sweet-hypens mg-size-23">
						Intérrogez nos services <br><span class="mg_prim_color">01 46 94 68 52 / 06 09 21 95 96</span> 	
				    </p>	
			</div>
		</div>

	<!-- Pricing -->
	<div class="row center mg-padding-40 mg-margin-0 mg-margin-bottom-0 scrollspy" id="tarifs" style="background:url('/img/assets/event/background_bottom.png') -900px -350px;">
			<div class="container">
				<h6 class="mg-size-24 bold">Tarifs</h6>
				 <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
				<h6 class="mg-size-19" style="padding-left:5%;padding-right: 5%;">Toutes nos prestations sont facturées à <strong style="font-weight: 600;">26,00 euros HT</strong> de l’heure! Soit <strong style="font-weight: 600;">13 euros</strong> de l’heure après déduction fiscale.</h6>
				<div class="row center mg-padding-top-30 mg-padding-bottom-50">
					<div class="col l3 offset-l3 m12 s12 mg-margin-top-30" data-aos="zoom-in-down"><a class="pointer" target="_blank" href="http://www.cesu.urssaf.fr/cesweb/home.jsp"><?= $this->Html->image('assets/home/asset_pricing_3.png',['style'=>'width:170px;']) ?></a></div>
					<div class="col l3 m12 s12 mg-margin-top-15 hide-on-med-and-down" data-aos="zoom-in-down"><a class="pointer" target="_blank" href="#!"><?= $this->Html->image('assets/home/asset_pricing_2.png',['style'=>'width:150px;']) ?></a></div>
					<!-- adjust on med and down -->
					<div class="col l6 m12 s12 mg-margin-top-45 hide-on-large-only" data-aos="zoom-in-down"><a class="pointer" target="_blank" href="#!"><?= $this->Html->image('assets/home/asset_pricing_2.png',['style'=>'width:150px;']) ?></a></div>
				</div>
			</div>
		</div> 
