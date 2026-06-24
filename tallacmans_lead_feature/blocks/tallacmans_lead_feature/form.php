<?php defined("C5_EXECUTE") or die("Access Denied.");
$al = $app->make('helper/concrete/asset_library');
$color = $app->make('helper/form/color');
?>

<div class="form-group">
    <?php
      if (isset($Image) && $Image > 0) {
          $Image_o = File::getByID($Image);
          if (!is_object($Image_o)) {
              unset($Image_o);
          }
      }

      echo $form->label('Image', t("Image"));
      echo $al->image('ccm-b-tallacmans_lead_feature-Image-' . $identifier_getString, $view->field('Image'), t("Choose Image"), $Image_o);
    ?>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
        <?php
          echo $form->label('Height', t("Height"));
          echo $form->select($view->field('Height'), $Height_options, $Height, []);
        ?>
    </div>
  </div>
    <div class="col-xs-12 col-sm-6">
      <div class="form-group">
          <?php
            echo $form->label('Align', t("Align Image"));
            echo $form->select($view->field('Align'), $Align_options, $Align, []);
          ?>
      </div>
  </div>
</div>


<div class="row">
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
        <?php
          echo $form->label('ScrollBehaviour', t("Scroll Image with Page?"));
          echo $form->select($view->field('ScrollBehaviour'), $ScrollBehaviour_options, $ScrollBehaviour, []);
        ?>
    </div>
  </div>
    <div class="col-xs-12 col-sm-6">

      <div class="form-group">
          <?php
            echo $form->label('Overlay', t("Overlay Color"));
            echo "<br>";
            echo $color->output('Overlay', $Overlay, array('showAlpha' => 'true', 'showPalette' => 'true'));
          ?>
      </div>

  </div>
</div>

<div class="form-group">
    <?php
    echo $form->label('LeadText', t("Lead Text"));
    echo $app->make('editor')->outputBlockEditModeEditor($view->field('LeadText'), $LeadText);
    ?>
</div>


<div class="form-group">
  <h3><?php echo t("Lead Text Animation"); ?></h3>
</div>

<div class="row">
  <div class="col-xs-12 col-md-4">
    <div class="form-group">
        <?php
        echo $form->label($view->field('LeadAnimation'), t("Animation"));
        echo $form->select($view->field('LeadAnimation'), $LeadAnimation_options, $LeadAnimation, []);
        ?>
    </div>
  </div>

  <div class="col-xs-12 col-md-4">
    <div class="form-group">
        <?php
          echo $form->label($view->field('LeadSpeed'), t("Speed"));
          echo $form->select($view->field('LeadSpeed'), $LeadSpeed_options, $LeadSpeed, []);
        ?>
    </div>
  </div>

  <div class="col-xs-12 col-md-4">
    <div class="form-group">
        <?php
          echo $form->label('LeadDelay', t("Delay"));
          echo $form->select($view->field('LeadDelay'), $LeadDelay_options, $LeadDelay, []);
        ?>
    </div>

  </div>
</div>

<div class="form-group">
    <?php
      echo $form->label('SecondaryText', t('Secondary Text'));
      echo $app->make('editor')->outputBlockEditModeEditor($view->field('SecondaryText'), $SecondaryText);
    ?>
</div>

<div class="form-group">
  <h3><?php echo t("Secondary Text Animation"); ?></h3>
</div>

<div class="row">
  <div class="col-xs-12 col-md-4">

    <div class="form-group">
        <?php
          echo $form->label('SecondaryAnimation', t("Animation"));
          echo $form->select($view->field('SecondaryAnimation'), $SecondaryAnimation_options, $SecondaryAnimation, []);
        ?>
    </div>
  </div>

  <div class="col-xs-12 col-md-4">
    <div class="form-group">
        <?php
          echo $form->label('SecondarySpeed', t("Speed"));
          echo $form->select($view->field('SecondarySpeed'), $SecondarySpeed_options, $SecondarySpeed, []);
        ?>
    </div>
  </div>

  <div class="col-xs-12 col-md-4">
    <div class="form-group">
        <?php
          echo $form->label('SecondaryDelay', t("Delay"));
          echo $form->select($view->field('SecondaryDelay'), $SecondaryDelay_options, $SecondaryDelay, []);
        ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-6">

    <div class="form-group">
        <?php
          echo $form->label('ShowArrow', t("Show Arrow Down"));
          echo $form->select($view->field('ShowArrow'), $ShowArrow_options, $ShowArrow, []);
        ?>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6">
    <div class="form-group">
        <?php
          echo $form->label('ChevronColor', t("Chevron Down Color"));
          echo "<br>";
          echo $color->output('ChevronColor', $ChevronColor, array('showAlpha' => 'true', 'showPalette' => 'true'));
        ?>
    </div>

  </div>
</div>
