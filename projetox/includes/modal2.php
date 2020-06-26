<?php


include "includes/modal.php";



'<div id="confirm-delete" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Está certo disso?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Quer apagar os dados deste personagem? Não será possivel voltar atrás. Malfeito, feito.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i>Cancelar</i></button>
				<button type="button" class="btn btn-danger btn-ok"><i>Deletar</i></button>
			</div>
		</div>
	</div>
</div> '

?>