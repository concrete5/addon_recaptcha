<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

$form = Loader::helper('form');
$pkg = Package::getByHandle('recaptcha');
?>

<div class="clearfix">
	<?=$form->label('CAPTCHA_RECAPTCHA_PUBLIC_KEY', t('Public Key'))?>
	<div class="input">
		<?=$form->text('CAPTCHA_RECAPTCHA_PUBLIC_KEY', $pkg->config('CAPTCHA_RECAPTCHA_PUBLIC_KEY'), array('class' => 'span6'))?>
	</div>
</div>

<div class="clearfix">
	<?=$form->label('CAPTCHA_RECAPTCHA_PRIVATE_KEY', t('Private Key'))?>
	<div class="input">
		<?=$form->text('CAPTCHA_RECAPTCHA_PRIVATE_KEY', $pkg->config('CAPTCHA_RECAPTCHA_PRIVATE_KEY'), array('class' => 'span6'))?>
	</div>
</div>

<div class="clearfix">
	<?=$form->label('CAPTCHA_RECAPTCHA_THEME', t('Theme'))?>
	<div class="input">
		<?=$form->select('CAPTCHA_RECAPTCHA_THEME', array('red' => t('red (default theme)'), 'white' => t('white'), 'blackglass' => t('blackglass'), 'clean' => t('clean')), $pkg->config('CAPTCHA_RECAPTCHA_THEME'))?>
	</div>
</div>