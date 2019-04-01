<?php

/*DS wurde in Joomla3.0 entfernt. Dieses Hack beseitigt die entsprechend Fehlermeldung.*/
/* BEGIN: Define DS */
JLoader::import( "joomla.version" );
$version = new JVersion();
if (!version_compare( $version->RELEASE, "2.5", "<=")):
   if (!defined("DS")):
      define("DS", DIRECTORY_SEPARATOR);
   endif;
endif;
/* END: Define DS */

defined( '_JEXEC' ) or die( 'Restricted access' );
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
				<h1><a href="<?php echo $this->baseurl ?>">Kunstkalender</a></h1>
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
		<?php if( ($this->countModules('position-7')) and ($this->countModules('position-4')) ) : ?>
		<div class="maincol">			 	
		<?php elseif( !$this->countModules('position-7') and ($this->countModules('position-4') ) ) : ?>
		<div class="maincol_w_left">
		<?php elseif( $this->countModules('position-7') and (!$this->countModules('position-4') ) ) : ?>
		<div class="maincol_w_right">
		<?php else: ?>
		<div class="maincol_full">
		<?php endif; ?>
		
		<?php if( $this->countModules('position-7') ) : ?>
			<div class="leftcol">
				<jdoc:include type="modules" name="position-7" style="rounded"/>
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
		<div class="footer-bg">
			<p style="text-align:center;"><?php $sg = ''; include "templates.php"; ?></p>
		</div>
	</footer>
	
</body>
</html>
