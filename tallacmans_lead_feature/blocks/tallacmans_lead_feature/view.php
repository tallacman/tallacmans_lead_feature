<?php defined("C5_EXECUTE") or die("Access Denied.");
if ($Image) {  ?>

  <div class="tlf-wrapper"  style="background-image: url(<?php echo $Image->getURL(); ?>);
      height: <?php echo h($Height); ?>;
      background-attachment:   <?php echo h($ScrollBehaviour); ?>;
      background-position: <?php echo h($Align); ?>;
      background-size: cover;">
<?php } else { ?>
  <div class="tlf-wrapper"  style="
      height: <?php echo $Height; ?>;">
<?php } ?>

    <div class="tlf-overlay" style="background-color: <?php echo h($Overlay); ?>; height: <?php echo h($Height); ?>; ">
    </div>


<?php if ($LeadText || $SecondaryText) { ?>

  <div class="tlf-text" style="	height: <?php echo h($Height); ?>;">
    <div class="tlf-inner-text">

      <?php if ($LeadText) { ?>
        <div class="tlf-lead animated <?php echo h($LeadAnimation); ?> <?php echo h($LeadSpeed); ?> <?php echo h($LeadDelay); ?>">
            <?php  echo $LeadText;  ?>
        </div>
      <?php } ?>

      <?php if ($SecondaryText){ ?>
        <div class="tlf-secondary animated <?php echo h($SecondaryAnimation); ?> <?php echo h($SecondarySpeed); ?> <?php echo h($SecondaryDelay); ?>">
            <?php echo $SecondaryText; ?>
        </div>
      <?php } ?>

    </div>
  </div>

<?php } ?>


    <?php if (isset($ShowArrow) && trim($ShowArrow) == "2") { ?>
      <div class="tlf-arrow animated bounce" style="height: <?php echo $Height; ?>;">
         <a href="#<?php echo $bID; ?>"><i class="fa fa-angle-down" aria-hidden="true" style="color: <?php echo h($ChevronColor); ?>"></i></a>
      </div>
    <?php } ?>

  </div>

  <a id="<?php echo $bID; ?>"></a>
