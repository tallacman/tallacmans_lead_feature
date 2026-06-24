<?php namespace Concrete\Package\TallacmansLeadFeature\Block\TallacmansLeadFeature;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Concrete\Core\File\File;

class Controller extends BlockController
{
    protected $btExportFileColumns = ['Image'];
    protected $btTable = 'btTallacmansLeadFeature';
    protected $btInterfaceWidth = 500;
    protected $btInterfaceHeight = 700;
    protected $btIgnorePageThemeGridFrameworkContainer = true;
    protected $pkg = 'tallacmans_lead_feature';
    protected $btDefaultSet = 'basic';

    public function on_start() {
       $this->set('app', $this->app);
   }

    public function getBlockTypeDescription()
    {
        return t("Lead your page with an image.");
    }

    public function getBlockTypeName()
    {
        return t("Tallacman's Lead Feature");
    }

    public function getSearchableContent()
    {
        return $this->LeadText . ' ' . $this->SecondaryText;
    }

    public function registerViewAssets($outputContent = '')
    {
        $this->requireAsset('css', 'font-awesome');
    }

    public function add()
    {
        if (trim($this->Overlay) == "") {
            $this->set("Overlay", 'rgba(0,0,0,0.1)');
        }
        if (trim($this->ChevronColor) == "") {
            $this->set("ChevronColor", 'rgba(0,0,0,1.0)');
        }
        $this->addEdit();
    }
    /*    output to the view     */

    public function view()
    {
        if ($this->Image && ($f = File::getByID($this->Image)) && is_object($f)) {
            $this->set("Image", $f);
        } else {
            $this->set("Image", false);
        }
    }


    public function edit()
    {
        $this->addEdit();
        $this->set('LeadText', LinkAbstractor::translateFromEditMode($this->LeadText));
        $this->set('SecondaryText', LinkAbstractor::translateFromEditMode($this->SecondaryText));
    }

 /*   visible to end user     */
    protected function addEdit()

    {

// these use functions spec'ed below
        $this->set('LeadAnimation_options', $this->getAnimationOptions());
        $this->set("SecondaryAnimation_options", $this->getAnimationOptions());

        $this->set("LeadDelay_options", $this->getDelayOptions());
        $this->set("SecondaryDelay_options", $this->getDelayOptions());

        $this->set("LeadSpeed_options", $this->getSpeedOptions());
        $this->set("SecondarySpeed_options", $this->getSpeedOptions());

        $this->set("Height_options", [
            '10vh' => t("10vh"),
            '15vh' => t("15vh"),
            '20vh' => t("20vh"),
            '25vh' => t("25vh"),
            '30vh' => t("30vh"),
            '35vh' => t("35vh"),
            '40vh' => t("40vh"),
            '45vh' => t("45vh"),
            '50vh' => t("50vh"),
            '55vh' => t("55vh"),
            '60vh' => t("60vh"),
            '65vh' => t("65vh"),
            '70vh' => t("70vh"),
            '75vh' => t("75vh"),
            '80vh' => t("80vh"),
            '85vh' => t("85vh"),
            '90vh' => t("90vh"),
            '95vh' => t("95vh"),
            '100vh' => t("100vh")
          ]
        );

        $this->set("Align_options", [
          'center center' => t("Center Center"),
          'top left' => t("Top Left"),
          'top center' => t("Top Center"),
          'top right' => t("Top Right"),
          'center left' => t("Center Left"),
          'center right' => t("Center Right"),
          'bottom left' => t("Bottom Left"),
          'bottom center' => t("Bottom Center"),
          'bottom right' => t("Bottom Right")

        ]
      );

        $this->set("ScrollBehaviour_options", [
                'scroll' => t("Scoll"),
                'fixed' => t("Fixed")
            ]
        );


        $this->set("ShowArrow_options", [
                '1' => t("No"),
                '2' => t("Yes")
            ]
        );
    }

// functions
    function getSpeedOptions()
    {
      $speedOptions = array(
        '' => t("Normal"),
        'slow' => t("Slow"),
        'slower' => t("Slower"),
        'fast' => t("Fast"),
        'faster' => t("Faster")
      );
      return $speedOptions;
    }


    function getDelayOptions()
    {
      $delayOptions = array (
        '' => t("None"),
        'delay-1s' => t("1 second"),
        'delay-2s' => t("2 seconds"),
        'delay-3s' => t("3 seconds"),
        'delay-4s' => t("4 seconds"),
        'delay-5s' => t("5 seconds")
      );
      return $delayOptions;
    }

    function getAnimationOptions()
    {

      $animationOptions = array(
        '' =>  t("None"),
        'bounce' => t("Bounce"),
        'flash' => t("Flash"),
        'pulse' => t("Pulse"),
        'rubberBand' => t("Rubber Band"),
        'shake' => t("Shake"),
        'headShake' => t("Head Shake"),
        'swing' => t("Swing"),
        'tada' => t("Tada"),
        'wobble' => t("Wobble"),
        'jello' => t("Jello"),
        'bounceIn' => t("Bounce In"),
        'bounceInDown' => t("Bounce In Down"),
        'bounceInLeft' => t("Bounce In Left"),
        'bounceInRight' => t("Bounce In Right"),
        'bounceInUp' => t("Bounce In Up"),
        'bounceOut' => t("Bounce Out"),
        'bounceOutDown' => t("Bounce Out Down"),
        'bounceOutLeft' => t("Bounce Out Left"),
        'bounceOutRight' => t("Bounce Out Right"),
        'bounceOutUp' => t("Bounce Out Up"),
        'fadeIn' => t("Fade In"),
        'fadeInDown' => t("Fade In Down"),
        'fadeInDownBig' => t("Fade In Down Big"),
        'fadeInLeft' => t("Fade In Left"),
        'fadeInLeftBig' => t("Fade In Left Big"),
        'fadeInRight' => t("Fadein Right"),
        'fadeInRightBig' => t("Fadein Right Big"),
        'fadeInUp' => t("Fadein Up"),
        'fadeInUpBig' => t("Fade In Up Big"),
        'fadeOut' => t("Fade Out"),
        'fadeOutDown' => t("Fade Out Down"),
        'fadeOutDownBig' => t("Fade Out Down Big"),
        'fadeOutLeft' => t("Fade Out Left"),
        'fadeOutLeftBig' => t("Fade Out Left Big"),
        'fadeOutRight' => t("Fade Out Right"),
        'fadeOutRightBig' => t("Fade Out Right Big"),
        'fadeOutUp' => t("Fade Out Up"),
        'fadeOutUpBig' => t("Fade Out Up Big"),
        'flipInX' => t("Flip In X"),
        'flipInY' => t("Flip In Y"),
        'flipOutX' => t("Flip Out X"),
        'flipOutY' => t("Flip Out Y"),
        'lightSpeedIn' => t("Light Speed In"),
        'lightSpeedOut' => t("Light Speed Out"),
        'rotateIn' => t("Rotate In"),
        'rotateInDownLeft' => t("Rotate In Down Left"),
        'rotateInDownRight' => t("Rotate In Down Right"),
        'rotateInUpLeft' => t("Rotate In Up Left"),
        'rotateInUpRight' => t("Rotate In Up Right"),
        'rotateOut' => t("Rotate Out"),
        'rotateOutDownLeft' => t("Rotate Out Down Left"),
        'rotateOutDownRight' => t("Rotate Out Down Right"),
        'rotateOutUpLeft' => t("Rotate Out Up Left"),
        'rotateOutUpRight' => t("Rotate Out Up Right"),
        'hinge' => t("Hinge"),
        'jackInTheBox' => t("Jack In The Box"),
        'rollIn' => t("Roll In"),
        'rollOut' => t("Roll Out"),
        'zoomIn' => t("Zoom In"),
        'zoomInDown' => t("Zoom In Down"),
        'zoomInLeft' => t("Zoom In Left"),
        'zoomInRight' => t("Zoom In Right"),
        'zoomInUp' => t("Zoom In Up"),
        'zoomOut' => t("Zoom Out"),
        'zoomOutDown' => t("Zoom Out Down"),
        'zoomOutLeft' => t("Zoom Out Left"),
        'zoomOutRight' => t("Zoom Out Right"),
        'zoomOutUp' => t("Zoom Out Up"),
        'slideInDown' => t("Slide In Down"),
        'slideInLeft' => t("Slide In Left"),
        'slideInRight' => t("Slide In Right"),
        'slideInUp' => t("Slide In Up"),
        'slideOutDown' => t("Slide Out Down"),
        'slideOutLeft' => t("Slide Out Left"),
        'slideOutRight' => t("Slide Out Right"),
        'slideOutUp' => t("Slide Out Up"),
        'heartBeat' => t("Heart Beat")
        );
        return $animationOptions;
    }

    public function save($args)
    {
        $args['LeadText'] = LinkAbstractor::translateTo($args['LeadText']);
        $args['SecondaryText'] = LinkAbstractor::translateTo($args['SecondaryText']);
        parent::save($args);
    }
}
