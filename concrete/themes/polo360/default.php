<?php 
	$this->inc('elements/header.php');
?>

<div class="pure-g-r">
	<div class="pure-u-2-24"></div>

	<div class="pure-u-20-24">
		<?php $a = new Area('contenu'); $a->display($c); ?>
	</div>

	<div class="pure-u-2-24"></div>
</div>

<?php 
	$this->inc('elements/footer.php');
?>