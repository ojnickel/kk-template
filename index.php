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
<body class="page_bg">
	<div class="wrapper">
	<header>
		<table cellpadding="0" cellspacing="0">
			<tr><td>
                        <h1><a href="<?php echo $this->baseurl; ?>"><?php echo $sitename;?></a></h1>
			</td></tr>
		</table>		
		
		<div class="top-menu">
			<div id="sgmenu">
				<jdoc:include type="modules" name="menuload" />
			</div>
		</div>
			
		<div id="search">
			<jdoc:include type="modules" name="position-0" />
		</div>
	</header>
	<section id="content">
		<?php if( ($this->countModules('left')) and ($this->countModules('position-4')) ) : ?>
		<div class="maincol">			 	
		<?php elseif( !$this->countModules('left') and ($this->countModules('position-4') ) ) : ?>
		<div class="maincol_w_left">
		<?php elseif( $this->countModules('left') and (!$this->countModules('position-4') ) ) : ?>
		<div class="maincol_w_right">
		<?php else: ?>
		<div class="maincol_full">
		<?php endif; ?>
		
		<?php if( $this->countModules('left') ) : ?>
			<div class="leftcol">
				<jdoc:include type="modules" name="left" style="rounded"/>
			</div>
			<?php endif; ?>
			
				<div class="cont">
				
					<?php if ($this->getBuffer('message')) : ?>
						<div class="error">
							<jdoc:include type="message" />
						</div>
					<?php endif; ?>
				
					<jdoc:include type="component" />
				</div>
			
		<?php if( $this->countModules('position-4') ) : ?>
			<div class="rightcol">
				<jdoc:include type="modules" name="position-4" style="rounded"/>
			</div>
		<?php endif; ?>
		<div class="clr"></div>
		</div>
	</section>
	
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
