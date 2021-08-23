<script>
	$j(function(){
		var tn = 'bill';

		/* data for selected record, or defaults if none is selected */
		var data = {
			deceased: <?php echo json_encode(array('id' => $rdata['deceased'], 'value' => $rdata['deceased'], 'text' => $jdata['deceased'])); ?>,
			total: <?php echo json_encode($jdata['total']); ?>,
			balance: <?php echo json_encode($jdata['balance']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for deceased */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'deceased' && d.id == data.deceased.id)
				return { results: [ data.deceased ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for deceased autofills */
		cache.addCheck(function(u, d){
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'deceased' && d.id == data.deceased.id){
				$j('#total' + d[rnd]).html(data.total);
				$j('#balance' + d[rnd]).html(data.balance);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

