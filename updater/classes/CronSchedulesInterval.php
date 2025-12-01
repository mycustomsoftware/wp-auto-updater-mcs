<?php

namespace WpAutoUpdater;

class CronSchedulesInterval
{
	public static $SLUG = 'two_minutes';
	function __construct(){
		add_filter( 'cron_schedules', array($this, 'add_schedule_interval') );
	}
	function add_schedule_interval( $schedules ) {
		if(!isset($schedules[self::$SLUG])){
			$schedules[self::$SLUG] = array(
				'interval' => 120,
				'display'  => __( '2 Minutes')
			);
		}
		return $schedules;
	}
}
