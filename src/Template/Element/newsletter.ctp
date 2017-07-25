		<!-- Newletter Equinoxe -->
		<div ng-hide="$root.preloader" class="row center mg-padding-40 mg-margin-0 grey lighten-2 relative-block">
		   <!-- Floating Box Appears during processing newsletter subscribing-->
			<div ng-show="mainctrl.submitting" class="row center absolute-block black" style="width: 100%;height: 100%;left: 0;z-index: 500;top: 0;opacity: 0.85;">
				<p class="white-text mg-margin-top-50">Traitement en cours</p>
				<p><?= $this->Html->image('assets/preloaders/dot_loader.png',['class'=>'mg-width-100']) ?></p>
			</div>
		   <!-- Newsletter Area Body -->
		   		    <h6 class="mg-size-24 bold">Soyons encore plus proches!</h6>
	         <?= $this->Html->image('assets/buble.png',['style'=>'width:50px;']) ?>
			<div class="container">
			  <div class="container">
				    <form ng-submit="mainctrl.newsletter_subscribe(evidence)" name="newsletter_form">
					     <div class="col s12">
					     	<div class="col s9 login-input input-field">
					     	  <input required ng-maxlength="50" ng-model="evidence.newsletter_label" type="email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9]{2,6}$/" placeholder="E-Mail" class="white grey-text required" style="border-radius: 2px;">
					     	</div>
					     	<div class="col s3 mg-margin-top-15">
					     		<button ng-disabled="newsletter_form.$invalid" type="submit" class="btn btn mg-height-46 mg_prim_background bold">Souscrire</button>
					     	</div>
					      </div>
				    </form>
			     </div>
			</div>
		</div>

		<!-- Modal Box -->
		