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
<meta name="viewport" content="width=device-width,  initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/kk.css" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="hmenu box"><jdoc:include type="modules" name="left" style="rounded"/>
</div>
    <article class="box main"><jdoc:include type="component" />
</article>
	<footer class="box lila">
		<?php if( $this->countModules('footer') ) : ?>
			<div class="footer-bg">
				<jdoc:include type="modules" name="footer" style="rounded"/>
			</div>
			<?php endif; ?>
	</footer>
  </div>
	
</body>
</html>
