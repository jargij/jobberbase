<?php /* Smarty version 2.6.26, created on 2014-03-03 06:25:39
         compiled from footer.tpl */ ?>
	</div><!-- #wrap -->
	<div class="footer clear">
	</div><!-- .footer -->
	
	<div id="overlay"><img src="<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
_tpl/img/ajax-loader.gif" /></div>
	<div id="messagesContainer"></div>
	
	<?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'categories'): ?>
	<div id="help" style="display: none;">
		<p class="bold">Categories help</p>
		<ul>
			<li><strong>Name</strong>: The name that will be used in the template</li>
			<li><strong>Title</strong>:</li>
			<li><strong>Description</strong>:</li>
			<li><strong>Keywords</strong>:</li>
			<li><strong>URL</strong>:</li>
		</ul>
	</div>
	<?php endif; ?>
	
	<script type="text/javascript">
	<?php echo '

		Jobber.jobber_admin_url = "'; ?>
<?php echo $this->_tpl_vars['BASE_URL_ADMIN']; ?>
<?php echo '";
		Jobber.FixPng();
		Jobber.I18n = '; ?>
<?php echo $this->_tpl_vars['translationsJson']; ?>
<?php echo ';
		
		'; ?>
<?php if ($this->_tpl_vars['editor']): ?><?php endif; ?><?php echo '
	
		$(document).ready(function() {
			$("ul.sf-menu").superfish({ 
				animation: {height:\'show\'},
				delay: 1500
			});
			
			$("a.iframe").fancybox({
				hideOnContentClick: true,
				frameWidth: 980,
				frameHeight: 500
			});
		}); 
	'; ?>

	</script>
</body>
</html>