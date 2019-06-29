<?php
/*
|--------------------------------------------------------------------------
| GISPORTAL and EQWC own configs
|
| This settings were before 2019/02/25 at the bottom of config.php
| For easier updating its now own file with new settings added.
| This settings in config.php should be deleted.
|
| This is config template file. You need to copy it to gisportal.php and
| adjust values.
|
|--------------------------------------------------------------------------
|
*/
defined('BASEPATH') OR exit('No direct script access allowed');

$config['site_title']               = "GIS PORTAL";             // Site Title

$config['company']                  = 'My company';             // Name of company/organization who manages this GIS PORTAL
$config['company_url']              = 'http://company.com';
$config['admin_email']              = "info@level2.si";      // Company system email

$config['web_client_url']           = '../../gisapp/';          //relative to base_site defined on top

$config['public_registration'] = TRUE;

/*
 * Set which languages show up for user selection.
 * New languages must be added to array (translation must exist)
 * Unwanted languages can be removed
 * key= 2 letter iso language code,
 * name= english language name as it is in CI
 * native = native language name displayed
 */
$config['available_languages'] = array(
    'en' => array(
        'name' => 'english',
        'native' => 'English'
    ),
    'de' => array(
        'name' => 'german',
        'native' => 'Deutsch'
    ),
//    'it' => array(
//        'name' => 'italian',
//        'native' => 'Italiano'
//    ),
    'no' => array(
        'name' => 'norwegian',
        'native' => 'norsk'
    ),
    'pl' => array(
        'name' => 'polish',
        'native' => 'polski'
    ),
//    'sk' => array(
//        'name' => 'slovak',
//        'native' => 'slovenský'
//    ),
    'sl' => array(
        'name' => 'slovenian',
        'native' => 'slovenščina'
    ),
    'es' => array(
        'name' => 'spanish',
        'native' => 'Español'
    ),
    'sv' => array(
        'name' => 'swedish',
        'native' => 'svenska'
    ),
    'ru' => array(
        'name' => 'russian',
        'native' => 'русский'
    )
);

/*
File upload main directory, must exist on disk with full permission (chmod 777)
Can be outside of gisportal application
You have to put absolute file path like below, and also  make proper Apache configuration

Alias /uploads /home/uploads

<Directory /home/uploads/>
Options Indexes FollowSymLinks
AllowOverride None
Require all granted
</Directory>
*/
$config['main_upload_dir'] = '/home/uploads/';
$config['main_upload_web'] = './uploads/';

/*
 * Default saving location of QGIS project file when uploading new project or when creating new project using template
 * Possible values:
 * QGS_MAIN     = QGIS project files location in main projects folder defined in /gisapp/admin/settings.php (PROJECT_PATH)
 * QGS_CLIENT   = QGIS project files location in main projects/client_name subfolder
 * QGS_GROUP    = QGIS project files location in main projects/client_name/project_group subfolder
 */
$config['qgis_project_default_location'] = QGS_MAIN;

/*
 * Show Publish button in projects administrator view
 * Before setting this to true, prepare folders and Apache configuration
 */
$config['enable_project_publishing'] = TRUE;


/*
 * When WFS service is published keep WFS editing capabilities (WFS-T) as set in QGIS project (TRUE) or disable editing
 * option (default, FALSE)
 */
$config['keep_wfs-t_from_qgs'] = FALSE;

/*
 * Main folder for published projects
 * Needs read/write permissions and following structure
 * - private
 *      - wfs
 *      - wms
 * - public
 *      - wfs
 *      - wms
 */
$config['main_services_dir'] = '/home/services/';

/*
 * In portal view show first groups when open client (TRUE) or show directly all available
 * projects for client (default, FALSE)
 */
$config['portal_show_groups_for_client'] = TRUE;