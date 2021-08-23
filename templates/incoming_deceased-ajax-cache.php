<script>
	$j(function(){
		var tn = 'incoming_deceased';

		/* data for selected record, or defaults if none is selected */
		var data = {
			relative_name: <?php echo json_encode(array('id' => $rdata['relative_name'], 'value' => $rdata['relative_name'], 'text' => $jdata['relative_name'])); ?>,
			relative_number: <?php echo json_encode($jdata['relative_number']); ?>,
			room: <?php echo json_encode(array('id' => $rdata['room'], 'value' => $rdata['room'], 'text' => $jdata['room'])); ?>,
			bed: <?php echo json_encode(array('id' => $rdata['bed'], 'value' => $rdata['bed'], 'text' => $jdata['bed'])); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for relative_name */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'relative_name' && d.id == data.relative_name.id)
				return { results: [ data.relative_name ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for relative_name autofills */
		cache.addCheck(function(u, d){
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'relative_name' && d.id == data.relative_name.id){
				$j('#relative_number' + d[rnd]).html(data.relative_number);
				return true;
			}

			return false;
		});

		/* saved value for room */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'room' && d.id == data.room.id)
				return { results: [ data.room ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for bed */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'bed' && d.id == data.bed.id)
				return { results: [ data.bed ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

