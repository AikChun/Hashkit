<div class="hashResults view">
Algorithms which may match with the input message digest :

<?php foreach($arrayofhashalgorithms as $key => $data): ?>
	<br>
	<?php echo $data['HashAlgorithmV1']['name'];?> 
<?php endforeach;?>	

<button> <a href="/HashTests/hash_analyser"> <- </a> </button>
<button> <a href="/pages/hash_function_properties"> home </a> </button>

</div>
