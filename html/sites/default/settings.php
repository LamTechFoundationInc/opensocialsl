<?php

$settings['hash_salt'] = 'drydCmlc95e6sKAqFBXXlTctmPC7iDW72N119-q0yhyDDpvbfa__9985_oi5wXvRKOM5WDqFWw';

$settings['update_free_access'] = FALSE;

$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = '../files-private';
$config_directories['sync'] = '../config';

# $settings['omit_vary_cookie'] = TRUE;

# $settings['cache_ttl_4xx'] = 3600;
# $settings['form_cache_expiration'] = 21600;
# $settings['class_loader_auto_detect'] = FALSE;
# $settings['allow_authorize_operations'] = FALSE;
# $settings['file_chmod_directory'] = 0775;
# $settings['file_chmod_file'] = 0664;
# $settings['file_public_base_url'] = 'http://downloads.example.com/files';

# $settings['file_public_path'] = 'sites/default/files';
# $settings['file_private_path'] = '';
# $settings['session_write_interval'] = 180;
# $settings['maintenance_theme'] = 'bartik';
# $settings['bootstrap_config_storage'] = array('Drupal\Core\Config\BootstrapConfigStorageFactory', 'getFileStorage');

# $config['system.file']['path']['temporary'] = '/tmp';
# $config['system.site']['name'] = 'My Drupal site';
# $config['system.theme']['default'] = 'stark';
# $config['user.settings']['anonymous'] = 'Visitor';

# $config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
# $config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
# $config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['trusted_host_patterns'] = array(
'^sldits\.com$',
'^.+\.sldits\.com$',
'^opensocial\.com\.dd$',
'^.+\.opensocial\.com\.dd$',
'^dev-sldits\.pantheonsite\.io$',
'^.+\.pantheonsite\.io$',
'^adiasporai\.com$',
'^.+\.adiasporai\.com$',
  );

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;

$databases['default']['default'] = array (
  'database' => 'opensocial',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['install_profile'] = 'social';

#if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
#  include $app_root . '/' . $site_path . '/settings.local.php';
#}
