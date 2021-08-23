<?php
	// check this file's MD5 to make sure it wasn't called before
	$prevMD5=@implode('', @file(dirname(__FILE__).'/setup.md5'));
	$thisMD5=md5(@implode('', @file("./updateDB.php")));
	if($thisMD5==$prevMD5){
		$setupAlreadyRun=true;
	}else{
		// set up tables
		if(!isset($silent)){
			$silent=true;
		}

		// set up tables
		setupTable('incoming_deceased', "create table if not exists `incoming_deceased` (   `id` INT unsigned not null auto_increment , primary key (`id`), `fullname` VARCHAR(150) not null , `gender` VARCHAR(40) not null , `tag_number` VARCHAR(40) not null , `serial_number` VARCHAR(40) not null , `relative_name` INT unsigned , `relative_number` INT unsigned , `room` INT unsigned not null , `bed` INT unsigned not null , `date` DATE ) CHARSET utf8", $silent);
		setupIndexes('incoming_deceased', array('relative_name','room','bed'));
		setupTable('outgoing_deceased', "create table if not exists `outgoing_deceased` (   `id` INT unsigned not null auto_increment , primary key (`id`), `fullname` INT unsigned not null , `gender` INT unsigned , `tag_number` INT unsigned , `serial_number` INT unsigned , `relative_name` INT unsigned , `relative_phone_number` INT unsigned , `date` DATE , `car_out_number` VARCHAR(40) ) CHARSET utf8", $silent);
		setupIndexes('outgoing_deceased', array('fullname'));
		setupTable('relatives_info', "create table if not exists `relatives_info` (   `id` INT unsigned not null auto_increment , primary key (`id`), `first_relative_full_name` VARCHAR(150) not null , `home_address` VARCHAR(200) not null , `home_town` VARCHAR(200) not null , `occupation` VARCHAR(100) not null , `phone_number` VARCHAR(40) not null , `second_relative_full_name` VARCHAR(40) , `second_relative_home_address` VARCHAR(40) , `second_relative_home_town` VARCHAR(40) , `second_relative_occupation` VARCHAR(40) , `second_relative_phone_number` VARCHAR(40) ) CHARSET utf8", $silent);
		setupTable('rooms', "create table if not exists `rooms` (   `id` INT unsigned not null auto_increment , primary key (`id`), `name` VARCHAR(40) not null , `type` VARCHAR(40) not null , `status` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupTable('beds', "create table if not exists `beds` (   `id` INT unsigned not null auto_increment , primary key (`id`), `number` VARCHAR(40) not null , `room` INT unsigned not null , `status` VARCHAR(40) not null ) CHARSET utf8", $silent);
		setupIndexes('beds', array('room'));
		setupTable('bill', "create table if not exists `bill` (   `id` INT unsigned not null auto_increment , primary key (`id`), `deceased` INT unsigned not null , `total` INT unsigned , `paid_amount` INT not null , `balance` INT unsigned ) CHARSET utf8", $silent);
		setupIndexes('bill', array('deceased'));
		setupTable('invoices', "create table if not exists `invoices` (   `id` INT unsigned not null auto_increment , primary key (`id`), `deceased` INT unsigned not null , `room` INT unsigned , `relative` INT unsigned , `services` TEXT not null , `total` INT not null , `balance` INT , `date` DATE ) CHARSET utf8", $silent);
		setupIndexes('invoices', array('deceased'));


		// save MD5
		if($fp=@fopen(dirname(__FILE__).'/setup.md5', 'w')){
			fwrite($fp, $thisMD5);
			fclose($fp);
		}
	}


	function setupIndexes($tableName, $arrFields){
		if(!is_array($arrFields)){
			return false;
		}

		foreach($arrFields as $fieldName){
			if(!$res=@db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")){
				continue;
			}
			if(!$row=@db_fetch_assoc($res)){
				continue;
			}
			if($row['Key']==''){
				@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
			}
		}
	}


	function setupTable($tableName, $createSQL='', $silent=true, $arrAlter=''){
		global $Translation;
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)){
			$matches=array();
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/", $arrAlter[0], $matches)){
				$oldTableName=$matches[1];
			}
		}

		if($res=@db_query("select count(1) from `$tableName`")){ // table already exists
			if($row = @db_fetch_array($res)){
				echo str_replace("<TableName>", $tableName, str_replace("<NumRecords>", $row[0],$Translation["table exists"]));
				if(is_array($arrAlter)){
					echo '<br>';
					foreach($arrAlter as $alter){
						if($alter!=''){
							echo "$alter ... ";
							if(!@db_query($alter)){
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							}else{
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				}else{
					echo $Translation["table uptodate"];
				}
			}else{
				echo str_replace("<TableName>", $tableName, $Translation["couldnt count"]);
			}
		}else{ // given tableName doesn't exist

			if($oldTableName!=''){ // if we have a table rename query
				if($ro=@db_query("select count(1) from `$oldTableName`")){ // if old table exists, rename it.
					$renameQuery=array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)){
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					}else{
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				}else{ // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			}else{ // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)){
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';
				}else{
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}
		}

		echo "</div>";

		$out=ob_get_contents();
		ob_end_clean();
		if(!$silent){
			echo $out;
		}
	}
?>