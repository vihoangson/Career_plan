<?php
require "autoload.php";
use CareerPlan\DictionaryAPI\FindWord;
	$api = new FindWord;
	$word = $_POST["txt_key"];
	if($word){
		$data = $api->api_english($word);
		$wav = $data->entry->sound->wav;
		$fw = substr($wav, 0,1);
		$link = "http://media.merriam-webster.com/soundc11/$fw/$wav";
		if($data->entry->hw){
			echo "<h1>$word</h1>";
			echo "
				<audio autoplay class='audioplay'>
					<source src='$link' type='audio/wav'>
					Your browser does not support the audio element.
				</audio>
				<p><button class=' btn btn-default button_p'>Repeat</button></p>
			";
			echo "<h4>".$data->entry->hw."</h4>";
			echo "<h4>".$data->entry->pr."</h4>";
			echo "<ul>";
			echo "<li>".($data->entry->def->dt)."</li>";
			echo "</ul>";
		?>
			<p><a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a></p>
			<div class="modal fade" id="modal-id">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							<pre><?php echo htmlentities(var_dump($data)); ?></pre>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		<?php
		}else{
			echo "<h1 class='alert-danger alert'>$word can't search</h1>";
		}
	}
 ?>