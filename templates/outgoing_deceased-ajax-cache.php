<script>
	$j(function(){
		var tn = 'outgoing_deceased';

		/* data for selected record, or defaults if none is selected */
		var data = {
			fullname: <?php echo json_encode(array('id' => $rdata['fullname'], 'value' => $rdata['fullname'], 'text' => $jdata['fullname'])); ?>,
			gender: <?php echo json_encode($jdata['gender']); ?>,
			tag_number: <?php echo json_encode($jdata['tag_number']); ?>,
			serial_number: <?php echo json_encode($jdata['serial_number']); ?>,
			relative_name: <?php echo json_encode($jdata['relative_name']); ?>,
			relative_phone_number: <?php echo json_encode($jdata['relative_phone_number']); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for fullname */
		cache.addCheck(function(u, d){
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'fullname' && d.id == data.fullname.id)
				return { results: [ data.fullname ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for fullname autofills */
		cache.addCheck(function(u, d){
			if(u != tn + '_autofill.php') return false;

			for(var rnd in d) if(rnd.match(/^rnd/)) break;

			if(d.mfk == 'fullname' && d.id == data.fullname.id){
				$j('#gender' + d[rnd]).html(data.gender);
				$j('#tag_number' + d[rnd]).html(data.tag_number);
				$j('#serial_number' + d[rnd]).html(data.serial_number);
				$j('#relative_name' + d[rnd]).html(data.relative_name);
				$j('#relative_phone_number' + d[rnd]).html(data.relative_phone_number);
				return true;
			}

			return false;
		});

		cache.start();
	});
</script>

