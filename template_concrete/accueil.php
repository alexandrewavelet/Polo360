<?php 
	$this->inc('elements/header.php');
?>

<div class="pure-g-r" id="diaporama">
	<div class="pure-u-2-24"></div>

	<div class="pure-u-20-24" id="zoneDiapo">
		<?php $a = new Area('contenu'); $a->display($c); ?>
	</div>

	<div class="pure-u-2-24"></div>
</div>

<div class="pure-g-r">
	<div class="pure-u-2-24"></div>

	<div class="pure-u-20-24">

		<div class="pure-g-r" id="colonnes">

			<div class="pure-u-1-3 colonne">
				<div class="contenuColonne">
					<?php $a = new Area('col1'); $a->display($c); ?>
				</div>
			</div>

			<div class="pure-u-1-3 colonne">
				<div class="contenuColonne">
					<?php $a = new Area('col2'); $a->display($c); ?>
				</div>
			</div>

			<div class="pure-u-1-3 colonne">
				<div class="contenuColonne">
					<?php $a = new Area('col3'); $a->display($c); ?>
				</div>	
			</div>

		</div>

	</div>

	<div class="pure-u-2-24"></div>
</div>

<div class="pure-g-r">
	<div class="pure-u-2-24"></div>

		<div class="pure-u-20-24">

			<div class="pure-g-r">

				<div class="pure-u-1-3 colonneSocial">
					<div class="contenuColonne">
						<?php $a = new Area('social'); $a->display($c); ?>
					</div>
				</div>

				<div class="pure-u-1-3 colonneSocial">
					<div class="contenuColonne">
						<?php $a = new Area('contact'); $a->display($c); ?>
					</div>
				</div>

				<div class="pure-u-1-3 colonneSocial">
					<div class="contenuColonne">
						<?php $a = new Area('actualité'); $a->display($c); ?>
					</div>	
				</div>

			</div>

		</div>

	<div class="pure-u-2-24"></div>
</div>

<?php 
	$this->inc('elements/footer.php');
?>