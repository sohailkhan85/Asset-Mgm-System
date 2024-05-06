//alert('Hiiii');
jQuery(document).ready
(
 	function()
	{
			    //alert("Inside jQuery Ready Function");
			 jQuery('#build').click
			(
			 	function()
				{
					 //alert('Inside building.....');
					 var src = jQuery("input[name='src']").val();
					// alert(src);
					window.location.href = 'buildings.php';
				}
			 );
			
			
			jQuery('#vac').click
			(
			 	function()
				{
					//alert('Inside view.....');
					window.location.href = 'mainpage.php';
				}
			 );
			
			
			jQuery('#out').click
			(
			 	function()
				{
					// alert('InsideOUt.....');
					window.location.href = 'index.php';
				}
			 );

	}
 );



/*function ajax_submit()

{
	
			//alert("Inside ajax_submit");

						errstr = validate();
						
						
						if(errstr)
						{
							errstr = '<ul>' + errstr +'<ul>' ;
							showError(errstr);
							
							
						}
						
						else 
						{
									
									alert("Inside else");
									
									options = {
													
												url : 'mainpage.php',
												type: 'POST',
												dataType: 'text',
												success : attachresponse
											  }
									 
									 jQuery('#pms').ajaxSubmit(options);
							
						}
}
					
					function attachresponse(responsetext)
					{

					}
					
					function validate()
					{
							errstr = '';
									
							if(jQuery("input[name='search']").val() == '')
							{
								var src = 'Please make sure that Search Field is not empty.';
								errstr = errstr + '<li>' + src ;
							}
							
							
					
							return errstr;
					}

*/