<?php namespace Concrete\Package\TallacmansLeadFeature;

use Concrete\Core\Package\Package;
use Concrete\Core\Block\BlockType\BlockType;
use Concrete\Core\Support\Facade\Database;


defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{
    protected $pkgHandle = 'tallacmans_lead_feature';
    protected $appVersionRequired = '8.0.0';
    protected $pkgVersion = '1.0';

    public function getPackageName()
    {
      return t("Tallacman's Lead Feature");
    }

    public function getPackageDescription()
    {
      return t('Covers the screen with an image and lead in text. Animated text if you wish.');
    }

    public function install()
    {
      $pkg = parent::install();
	    $btHandles = array (
         'tallacmans_lead_feature',
      );
	    foreach($btHandles as $btHandle){
	        if (!BlockType::getByHandle($btHandle)) {
            BlockType::installBlockType($btHandle, $pkg);
      }
	  }
  }

  public function uninstall()
  {
    // needs use Concrete\Core\Support\Facade\Database;
    // cleanup package on uninstall
   $pkg = parent::uninstall();

    // drop database table
   $db = Database::connection();
   $db->executeQuery('drop table if exists btTallacmansLeadFeature');
  }
}
