<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/{timezone?}', function ($timezone = null){
	if (!empty($timezone)) {
		$time = new Datetime(date('Y-m-d H:i:s'), new DatetimeZone('UTC'));
		$time->setTimezone(new DatetimeZone(str_replace('-','/',$timezone)));
		echo "Múi giờ bạn chọn " . $timezone . " hiện tại là " . $time->format('d-m-y H:i:s');
	}
	return view('index');
});
