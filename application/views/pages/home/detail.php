<div class="container">

	<!-- Alert -->
	<?php $this->load->view('layouts/_alert') ?>
	<!-- End of alert -->

	<!-- Hero -->
	<div class="row mt-5">		
		<div class="col">
			<img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>" style="width: 330px">
		</div>
		<div class="col">
			<div class="card">
				<div class="card-body text-center">
						<button type="submit" class="btn btn-large btn-success btn-block badge-pill mb-4">ADD TO CART</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<?php $this->load->view('layouts/_footer') ?>
