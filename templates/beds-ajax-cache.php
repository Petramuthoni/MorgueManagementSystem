<script>
	$j(function(){
		var tn = 'beds';

		/* data for selected record, or defaults if none is selected */
		var data = {
			room: <?php echo json_encode(array('id' => $rdata['room'], 'value' => $rdata['room'], 'text' => $jdata['room'])); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for room */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'room' && d.id == data.room.id)
				return { results: [ data.room ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

