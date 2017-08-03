<style>
	.collapsible-header.active{
		background: yellow;
	}

	.collapsible-header.active.inside_element{
		background: #fc00ff;
		color: white;
	}

	.collapsible.inside_element .collapsible-header{
		padding-left:30px;
	}

	.collapsible.main .collapsible-header.title-inside-element{
		padding-left:10px;

	}

	.smooth-button:hover{
		background: white !important;
		transition-duration: 0.3s;
		cursor:pointer;
		color:#fc00ff !important;
	}

</style>
<div class="prezento-master-6 hide"></div>
		 <div class="row center mg-margin-0 mg-padding-0">
	<div class="col s12 mg-margin-top-40 mg-margin-bottom-0 mg-padding-0" data-aos='fade-left' style="overflow: hidden;">
			<?= $this->Html->image('assets/outdoor/wide_banner_outdoor.jpg',['style'=>'display:block; width:100%;','class'=>'scale-up-on-small-only']) ?>
	</div>
</div>


<!-- Description Outdoor Assistance -->
		<div class="row center mg-padding-50 mg-margin-0 mg_prim_background">
			<div class="container" style="width: 72%;">
		    <h5 class="bold white-text">Course et Livraison</h5>
			 <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
				    <p class="mg-size-20 white-text sweet-hypens">
						Grâce à un large réseau de partenariat ainsi qu'une logistique à toute épreuve, Equinoxe Team vous offre les services qui méritent une grande réactivité et se positionne pour récupérer vos colis, réaliser l'accompagnement des personnes qui vous sont chères ou encore assurer la surveillance de votre domicile lors de vos déplacements en vacances.
				    </p>	
				    <a href="#!" ui-sref="app.home({is_subscribing:1})" class="btn transparent white-text bold smooth-button" style="border:2px solid white">Souscrire à un devis</a>
			</div>
		</div>

<!-- Equinoxe Team Indoor Cards -->
<div class="row center mg-padding-bottom-50 mg-padding-left-50  mg-padding-right-50  mg-padding-top-50" id="outdoor_service_area">
	<div class="col l4 s12 m12 mg-padding-28" data-aos="fade-down">
		 <h5 class="bold left-align"><span style="border-bottom: 5px solid #fc00ff;">Services de Livraison</span></h5>
		 <h5 class="left-align mg-margin-bottom-25">Express</h5>
		 <div class="card hoverable hvr-bob">
		    <div class="card-image waves-effect waves-block waves-light">
		        <img class="activator" src="/img/assets/outdoor/outdoor_service_1.jpg">
		    </div>
		    <div class="card-reveal mg_sec_background_1">
			      <span class="card-title white-text left-align">Services de livraison<i class="ion-close right small"></i></span>
			      <p class="white-text left-align">Que ce soit pour la livraison de votre linge , de repas ou encore d'un autre type de colis, Equinoxe Team est à votre écoute avec son esprit express!</p>
			      <a class="btn mg_prim_background left bold" href="#!" ui-sref="app.home({is_subscribing:1})">Souscrire</a>
		    </div>
		  </div>
	</div>

    <div class="col l4 s12 m12 mg-padding-28" data-aos="fade-down">
	     <h5 class="bold left-align"><span style="border-bottom: 5px solid #7a80a1;">Services d'accompagnement</span></h5>
	     <h5 class="left-align mg-margin-bottom-25">des personnes</h5>
		 <div class="card hoverable hvr-bob">
		    <div class="card-image waves-effect waves-block waves-light">
		      <img class="activator" src="/img/assets/outdoor/outdoor_service_2.jpg">
		    </div>
		    <div class="card-reveal mg_sec_background_1">
		      <span class="card-title white-text left-align">Accompagnement des personnes<i class="ion-close right small"></i></span>
		      <p class="white-text left-align">Dédié aux personnes ayant besoin d'une aide temporaire dans le cadre des promenades, aide à la mobilité réduite et transport, actes de la vie courante.</p>
		      <a class="btn mg_prim_background left bold" href="#!" ui-sref="app.home({is_subscribing:1})">Souscrire</a>
		    </div>
		  </div>
	</div>

 <div class="col l4 m12 s12 mg-padding-28" data-aos="fade-down">
 				  <h5 class="bold left-align"><span style="border-bottom: 5px solid #f9f461;">Maintenance Et Vigile</span></h5>
	  <h5 class="left-align mg-margin-bottom-25">Temporaire</h5>
	 <div class="card hoverable hvr-bob">
	    <div class="card-image waves-effect waves-block waves-light">
	       <img class="activator" src="/img/assets/outdoor/outdoor_service_3.jpg">
	    </div>
	    <div class="card-reveal mg_sec_background_1">
	      <span class="card-title white-text left-align">Maintenance et Vigile<i class="ion-close right small"></i></span>
	      <p class="white-text left-align">Les services de vigile et maintenance assurent la sécurité de votre appartement, domicile lorsque vous êtes temporairement absent.</p>
	      <a class="btn mg_prim_background left bold" href="#!" ui-sref="app.home({is_subscribing:1})">Souscrire</a>
	    </div>
	  </div>
	</div>
</div>
<!-- FAQ Outdoor Assistance -->
<div class="row center mg-padding-bottom-50 mg-padding-top-50 mg-margin-bottom-0 mg_sec_background_6">
      <h5 class="special-text bold">Foire Aux Questions</h5>
	  <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
      <div class="col s12">
         <div class="container">
				  <ul class="collapsible main" data-collapsible="accordion">
				  	<li>
				      <div class="collapsible-header title-inside-element active bold left-align mg_sec_color_4">Services de livraison</div>
				      <div class="collapsible-body left-align mg_sec_color_4 mg-padding-0">
						  <ul class="collapsible inside_element mg-margin-0" data-collapsible="accordion">
						    <li>
						      <div class="collapsible-header inside_element bold left-align active">Quels sont les services compris dans "les services de livraison"?</div>
						      <div class="collapsible-body">
						          <ul>
						         	<li><i class="ion-android-radio-button-on black-text"></i> Livraison de courses à domicile</li>
						         	<li><i class="ion-android-radio-button-on black-text"></i> Collecte et livraison de à domicile de ligne repassé </li>
						         	<li><i class="ion-android-radio-button-on black-text"></i> Livraison de repas à domicile </li>
						         </ul>
						      </div>
						    </li>
						  </ul>
				      </div>
				    </li>
				    <li>
				      <div class="collapsible-header title-inside-element active bold left-align mg_sec_color_4">Maintenance et Vigile</div>
				      <div class="collapsible-body left-align mg_sec_color_4 mg-padding-0">
						  <ul class="collapsible inside_element mg-margin-0" data-collapsible="accordion">
						    <li>
						      <div class="collapsible-header inside_element bold left-align active">Puis-je faire surveiller ma résidence secondaire ?</div>
						      <div class="collapsible-body"><span>Evidemment! Mais à prendre en compte que le service n'est que temporaire. Veuillez <span class="mg_sec_color_1 bold pointer" ui-sref="app.contact">contacter nos services</span> pour plus d'informations</span></div>
						    </li>
						  </ul>
				      </div>
				    </li>
				    <li>
				      <div class="collapsible-header title-inside-element active bold left-align mg_sec_color_4">Service d'Accompagnement</div>
				      <div class="collapsible-body left-align mg_sec_color_4 mg-padding-0">
						  <ul class="collapsible inside_element mg-margin-0" data-collapsible="accordion">
						    <li>
						       <div class="collapsible-header inside_element bold left-align active">Quels sont les sous-services rattachés?</div>
						       <div class="collapsible-body">
							         <ul>
							         	<li><i class="ion-android-radio-button-on black-text"></i> Prestation de conduite du véhicule personnel des personnes qui ont besoin d'une aide temporaire ( hors PA/PH et pathologies chroniques )</li>
							         	<li><i class="ion-android-radio-button-on black-text"></i> Accompagnement des personnes qui ont besoin d'une aide temporaire ( hors PA/ PH et pathologies chroniques ) pour promenade, aide à la mobilité réduite et transport, actes de la vie courante</li>
							         	<li><i class="ion-android-radio-button-on black-text"></i> Assistance des personnes qui ont besoin d'une aide temporaire ( hors PA /PH et pathologies chroniques )( hors actes de soins relevant d'actes medicaux)</li>
							         </ul>
								</div>
						    </li>
						  </ul>
				      </div>
				    </li>
				    <li>
				      <div class="collapsible-header title-inside-element bold left-align mg_sec_color_4">Autre</div>
				      <div class="collapsible-body left-align mg_sec_color_4 mg-padding-0">
						  <ul class="collapsible inside_element mg-margin-0" data-collapsible="accordion">
						    <li>
						      <div class="collapsible-header inside_element bold left-align active">Equinoxe Team proposerait-elle d'autres services non énumérés dans les cartes illustratives?</div>
						      <div class="collapsible-body white"><span> Les services de course &amp; livraison sont regroupés en catégorie de services incluant des sous-services. Lorsque vous <span class="bold mg_sec_color_1 pointer" ui-sref="app.home({is_subscribing:1})">renseignez le formulaire de souscription,</span> veuillez sélectionner <span class="mg_prim_color bold">l'option autre</span> si vous ne trouvez pas le service extérieur recherché. nous vous recontacteront.</span></div>
						    </li>
						  </ul>
				      </div>
				    </li>
				  </ul>
         </div>

      </div>
</div>

<!-- Still Questions -->
	<!-- Any Questions? -->
		<div class="row center mg-padding-40 mg-margin-0 mg_sec_background_2">
			<div class="container">
					<h6 class="mg-size-24 bold">Des Incertitudes Subsistent?</h6>
				 <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
				    <p id="special-text-" class="sweet-hypens mg-size-23">
						Intérrogez nos services <br><span class="mg_prim_color">01 46 94 68 53 / 06 20 07 85 97</span> 	
				    </p>	
			</div>
		</div>

<!-- Advantage -->
     <div class="row mg-margin-bottom-0 mg-padding-top-50 mg-padding-bottom-50">
     	<div class="col l7 m6 hide-on-small-only" data-aos="fade-left"
     data-aos-offset="300">
     		 <?= $this->Html->image('assets/outdoor/wide_banner_outdoor_bottom.png',['style'=>'width:100%;display:block;','class'=>'scale-up-on-small-only']) ?>
     	</div>
     	<div class="col l5 m6 s12 center-on-small-only">
	     		<h4 class="mg_prim_color bold mg-margin-top-50">LES SERVICES EXPRESS <br>A TOUTE EPREUVE</h4>
			    <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
	     		<h6 class="sweet-hypens mg-padding-right-55 cancel-side-padding" style="line-height:1.4rem;">
	     			Les services de course et livraison nous sont familiers puisque nous capitalisons une grande expérience dans ce secteur en terme de qualité de service et de contrat de bonne exécution, afin que vous soyez conforté dans votre orientation vers Equinoxe Team. <br>
	     			Soucieux d'entretenir un partenariat solide marqué par une confiance et une satisfaction effective, nous portons nos principes en la matière aux travers de 3 grands différents points forts: <span class="bold">un service éclair, une approche humaniste, un service après vente à votre écoute.</span>
	     		</h6>
			<ul class="mg-padding-right-55 hide-on-med-only">
				<li class="mg-margin-top-30">
				   <div class="row center" data-aos="flip-left">
				   	  <div class="col s3 left-align mg-padding-0">
				   	  	 <?= $this->Html->image('assets/outdoor/thunder.png',['class'=>'mg-width-100']) ?>
				   	  </div>
				   	  <div class="col s9 left-align mg-padding-0"> 
				   	  		<h6 class="bold mg_sec_color_4 mg-size-17">Un Service Eclair</h6>
				   	  		   <span>Définissez nous exactement les délais et ce qu'il y a à faire.Equinoxe Team prends le relais et vous surprendra forcément.</span>
				   	  </div>
				   </div>
			
			    </li>
				<li class="mg-margin-top-30" data-aos="flip-right">
				      <div class="row center">
					      <div class="col s3 left-align mg-padding-0">
					   	  	 <?= $this->Html->image('assets/outdoor/handshake.png',['class'=>'mg-width-110']) ?>
					   	  </div>
					   	  <div class="col s9 left-align mg-padding-0"> 
					   	  		<h6 class="bold mg_sec_color_4 mg-size-17">Une approche humaniste</h6>
					   	  		<span>Notre politique est axée avant tout sur les bons rapports sociaux avec nos interlocuteurs. La qualité de nos services est fonction de la dimension humaine exprimée par notre équipe. Souriez! </span>
					   	  </div>
				      </div>
				</li>

				<li class="mg-margin-top-30" data-aos="flip-left">
				  <div class="row center">
				   	  <div class="col s3 left-align mg-padding-0">
				   	  	 <?= $this->Html->image('assets/outdoor/sav.png',['class'=>'mg-width-80']) ?>
				   	  </div>
				   	  <div class="col s9 left-align mg-padding-0"> 
				   	  		<h6 class="bold mg_sec_color_4 mg-size-17">SAV Réactif</h6>
				   	  		 <span>Notre Equipe d'assistance en ligne vous réponds de façon précise sur vos préoccupations et se charge de gérer toute réclamations, attentes , situations de nature à entraver votre confiance, bien sûre avec un réactivité étonnante.</span>
				   	  </div>
				  </div>
				</li>
			</ul>
     	</div>
     </div>