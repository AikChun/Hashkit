<div class="hashResults view">
	<div class="Title" style="font-size:150%">
		Possible hash algorithm that may produce such message digest:
	</div>

	<div class="resultDisplay" style="font-size:120%">
		<?php foreach($arrayofhashalgorithms as $key => $data): ?>
		<br>
		<?php echo $data['HashAlgorithmV1']['name'];?> 
		<?php endforeach;?>	
		<br>
		<button> <a href="/HashTests/hash_analyser"> <- </a> </button>
		<button> <a href="/pages/hash_function_properties"> home </a> </button>
	</div>
</div>
