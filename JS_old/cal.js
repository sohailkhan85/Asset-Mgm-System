jQuery(document).ready
(
 	function()
	{
		
		
		 /*jQuery("#date").datepicker
		 ({
		  	showOn: 'button', 
			buttonImageOnly: true,
			dateFormat: 'd-m-yy',
			duration: '',  
			showTime: true,  
			constrainInput: false,  
			time24h: false,
			buttonImage: 'images/icon_cal.png' 
		});*/
		
		jQuery('#reach').datetimepicker({
										
		step: 5
										
		});
				
		jQuery('#left').datetimepicker({
										
		step: 5
										
		});

	}
);	

