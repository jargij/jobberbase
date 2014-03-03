<?php /* Smarty version 2.6.26, created on 2014-03-03 06:25:39
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title><?php if (@SITE_NAME): ?><?php echo @SITE_NAME; ?>
 | Admin<?php else: ?>jobberBase Admin<?php endif; ?></title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="<?php echo $this->_tpl_vars['meta_description']; ?>
" />
	<meta name="keywords" content="<?php echo $this->_tpl_vars['meta_keywords']; ?>
" />
	<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/css/screen.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/css/jquery.fancybox-1.2.6.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/css/superfish.css" type="text/css" media="screen" /> 
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/css/superfish-navbar.css" type="text/css" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/jquery.bgiframe.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/functions.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/main.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/categories.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/translations.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/hoverIntent.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/links.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/messages.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/overlay.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/superfish.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/supersubs.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/types.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/jquery.fancybox-1.2.6.pack.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/jquery.easing.1.3.js" type="text/javascript"></script>
	<?php if ($this->_tpl_vars['editor']): ?>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/js/editor.js" type="text/javascript"></script>
	<?php endif; ?>
</head>

<body>
	<div id="wrap">
	<div id="top_nav">
		<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
">&larr; View site</a>
		<?php if ($this->_tpl_vars['isAuthenticated'] == 1): ?>
		<ul>
			<li class="bold">&bull; &nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
logout/">Logout &rarr;</a></li>
			<li>&bull; &nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
stats/">Stats</a></li>
			<li>&bull; &nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
settings/">Settings</a></li>
			<li><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
translations/">Translations</a></li>
		</ul>
		<?php endif; ?>
	</div>
	<?php if ($this->_tpl_vars['isAuthenticated'] == 1): ?>
		<?php if ($_SESSION['status'] != ''): ?>
		<div id="status">
		<?php echo $_SESSION['status']; ?>

		</div><!-- #status -->
		<?php endif; ?>
	<?php endif; ?>

	<h1><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
"><?php if (@SITE_NAME): ?><?php echo @SITE_NAME; ?>
 | Admin<?php else: ?>jobberBase Admin<?php endif; ?></a></h1>

	<?php if ($this->_tpl_vars['isAuthenticated'] == 1): ?>
		<ul class="sf-menu sf-navbar">
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'edit-post'): ?>class="selected bold"<?php else: ?>class="bold"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
edit-post/">Post a job</a></li>
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'jobs'): ?>class="selected"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/all/">Active jobs</a>
			<ul>
				<li class="txt">In category: </li>
				<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
				<li id="<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
"><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
/"><?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
				<?php endfor; endif; ?>
			</ul>
		</li>
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == ''): ?>class="selected"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
">Inactive jobs</a></li>
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'applicants'): ?>class="selected"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
applicants/">Applicants</a></li>
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'pages'): ?>class="selected"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
pages/">Pages</a></li>
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'cities'): ?>class="selected"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
cities/list/">Cities</a></li>
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'categories'): ?>class="selected"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
categories/">Job categories</a>
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'types'): ?>class="selected"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
types/">Job types</a></li>
		<li><a <?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'links'): ?>class="selected"<?php endif; ?> href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/">Links</a>
		<ul>
		<li><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/primary/">Primary Menu</a></li>
		<li><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/secondary/">Secondary Menu</a></li>
		<li><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/footer1/">Footer Column 1</a></li>
		<li><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/footer2/">Footer Column 2</a></li>
		<li><a href="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
links/footer3/">Footer Column 3</a></li>
		</ul>
		</li>
		</ul>
	<?php endif; ?>