<?php
 // created: 2017-07-11 21:55:54
$dictionary['Contact']['fields']['customer_status'] = array (
	'name' => 'customer_status',
	'vname' => 'LBL_CUSTOMER_STATUS',
	'type' => 'enum',
	'len' => '100',
	'options' => 'customer_status_list',
	'audited' => true,
	'comment' => 'Status of the customer',

	);

$dictionary['Contact']['fields']['trip_start_date'] = array (
	'name' => 'trip_start_date',
	'vname' => 'LBL_TRIP_START_DATE',
	'type' => 'datetime',
	'audited' => true,
	);
$dictionary['Contact']['fields']['trip_end_date'] = array (
	'name' => 'trip_end_date',
	'vname' => 'LBL_TRIP_END_DATE',
	'type' => 'datetime',
	'audited' => true,
	);
$dictionary['Contact']['fields']['trip_location'] = array (
	'name' => 'trip_location',
	'vname' => 'LBL_TRIP_LOCATION',
	'type' => 'varchar',
	'len' => '255',
	'audited' => true,
	);


 ?>