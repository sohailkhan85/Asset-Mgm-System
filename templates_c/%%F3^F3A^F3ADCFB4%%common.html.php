<?php /* Smarty version 2.6.16, created on 2014-04-23 08:24:04
         compiled from ../common.html */ ?>
<?php $this->assign('scriptpath', "JS/"); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
jquery.form.js"></script>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
jquery-ui-1.8.16.custom.min.js"></script>
<!--<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
jquery.ui.autocomplete.js"></script>-->
<link rel="stylesheet" href="ui.all.css" type="text/css" media="screen" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>



<!--  <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

        <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />-->


        
         <!--<link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />-->
 
<!--<script type="text/javascript" src="<?php echo $this->_tpl_vars['scriptpath']; ?>
jquery-pack.js"></script>-->

<?php echo '
<script type="text/javascript">
function showError(txt)
{
		//alert("Inside ShowError");
		
		elem=document.getElementById(\'msgtr\');
		elem.style.display=\'block\';	
		
		jQuery("div#msg").empty().append(txt);	
		
		//jQuery.scrollTo("#msgtr");
		
		
}
function hideError()
{
	//	alert("Inside hideError");
		
		jQuery("div#msg").empty();
		jQuery("div#msgtr").hide();
		elem=document.getElementById(\'msgtr\');
		elem.style.display=\'none\';					 	 
}

</script>
'; ?>
