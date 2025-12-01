<?php

namespace WpAutoUpdater;

use WP_GitHub_Updater;

class SelfUpdateProvider
{
	public function __construct()
	{
//		git@github.com:mycustomsoftware/wp-auto-updater.git
//		var_dump(plugin_basename( WP_UPDATE_CHECKER_PL_PATH ));
		$config = array(
			'slug' => plugin_basename( WP_UPDATE_CHECKER_PL_PATH ),
			'description' => 'This plugin automatically update all active plugins, active theme and WordPress core. This plugin does not update inactive plugins and themes.',
			'proper_folder_name' => 'wp-auto-updater-mcs',
//			'api_url' => 'https://api.github.com/repos/mycustomsoftware/wp-auto-updater-mcs',
			'raw_url' => 'https://raw.githubusercontent.com/mycustomsoftware/wp-auto-updater-mcs/main',
			'github_url' => 'https://github.com/mycustomsoftware/wp-auto-updater-mcs',
			'zip_url' => 'https://github.com/mycustomsoftware/wp-auto-updater-mcs/archive/master.zip',
			'sslverify' => true,
			'requires' => '6.8.3',
			'tested' => '6.8.3',
			'readme' => 'README.md',
//			'access_token' => '',
		);
		new GitHubUpdater( $config );
	}
}