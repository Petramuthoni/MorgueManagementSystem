<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function bill_init(&$options, $memberInfo, &$args){

		return TRUE;
	}

	function bill_header($contentType, $memberInfo, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function bill_footer($contentType, $memberInfo, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function bill_before_insert(&$data, $memberInfo, &$args){
		$balanceid=$data['balance'];
		$actualbalance=sqlValue("SELECT balance FROM invoices WHERE id='$balanceid'");
		$newbalance=$actualbalance-$data['paid_amount'];
		sql("update invoices set balance='$newbalance' where id='$balanceid'");
		return TRUE;
	}

	function bill_after_insert($data, $memberInfo, &$args){

		return TRUE;
	}

	function bill_before_update(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function bill_after_update($data, $memberInfo, &$args){

		return TRUE;
	}

	function bill_before_delete($selectedID, &$skipChecks, $memberInfo, &$args){

		return TRUE;
	}

	function bill_after_delete($selectedID, $memberInfo, &$args){

	}

	function bill_dv($selectedID, $memberInfo, &$html, &$args){

	}

	function bill_csv($query, $memberInfo, &$args){

		return $query;
	}
	function bill_batch_actions(&$args){

		return array();
	}
