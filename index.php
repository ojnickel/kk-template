<?php


defined( '_JEXEC' ) or die( 'Restricted access' );


$app  = JFactory::getApplication();
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
</head>
<body>
  <div class="wraper">
    <div class="nav box"></div>
    <article class="box"></article>
  </div>
	<footer>
		<?php if( $this->countModules('footer') ) : ?>
			<div class="footer-bg">
				<jdoc:include type="modules" name="footer" style="rounded"/>
			</div>
			<?php endif; ?>
	</footer>
	
</body>
</html>
