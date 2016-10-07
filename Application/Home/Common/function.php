<?php

/*公共模块函数*/

function get_user_id(){
	return session('userId');
}

function get_user_info(){
	return session('checkRes');
}