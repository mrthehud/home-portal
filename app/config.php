<?php

// +---------------------------------------------------------------------------+
// | Should we run the system in debug mode? When this is on, there may be     |
// | various side-effects. But for the time being it only deletes the cache    |
// | upon start-up.                                                            |
// |                                                                           |
// | This should stay on while you're developing your application, because     |
// | many errors can stem from the fact that you're using an old cache file.   |
// |                                                                           |
// | This constant will be auto-set by Agavi if you do not supply it.          |
// | The default value is: <false>                                             |
// +---------------------------------------------------------------------------+
AgaviConfig::set('core.debug', true);

// +---------------------------------------------------------------------------+
// | An absolute filesystem path to the agavi package. This directory          |
// | contains all the Agavi packages.                                          |
// |                                                                           |
// | This constant will be auto-set by Agavi if you do not supply it.          |
// | The default value is the name of the directory "agavi.php" resides in.    |
// +---------------------------------------------------------------------------+
// AgaviConfig::set('core.agavi_dir', '%%PATH_TO_AGAVI%%');

// +---------------------------------------------------------------------------+
// | An absolute filesystem path to your web application directory. This       |
// | directory is the root of your web application, which includes the core    |
// | configuration files and related web application data.                     |
// | You shouldn't have to change this usually since it's auto-determined.     |
// | Agavi can't determine this automatically, so you always have to supply it.|
// +---------------------------------------------------------------------------+
AgaviConfig::set('core.app_dir', dirname(__FILE__));

// +---------------------------------------------------------------------------+
// | An absolute filesystem path to the directory where cache files will be    |
// | stored.                                                                   |
// |                                                                           |
// | NOTE: If you're going to use a public temp directory, make sure this is a |
// |       sub-directory of the temp directory. The cache system will attempt  |
// |       to clean up *ALL* data in this directory.                           |
// |                                                                           |
// | This constant will be auto-set by Agavi if you do not supply it.          |
// | The default value is: "<core.app_dir>/cache"                              |
// +---------------------------------------------------------------------------+
AgaviConfig::set('core.cache_dir', AgaviConfig::get('core.app_dir') . '/../cache');

// +---------------------------------------------------------------------------+
// | You may also modify the following other directives in this file:          |
// |  - core.config_dir   (defaults to "<core.app_dir>/config")                |
// |  - core.lib_dir      (defaults to "<core.app_dir>/lib")                   |
// |  - core.model_dir    (defaults to "<core.app_dir>/model")                 |
// |  - core.module_dir   (defaults to "<core.app_dir>/modules")               |
// |  - core.template_dir (defaults to "<core.app_dir>/templates")             |
// +---------------------------------------------------------------------------+

date_default_timezone_set('Europe/London');

?>