$(function() {
				
	$( "#datepicker" ).datepicker(
	{
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",
	    onSelect: function(dateText, inst)
		{
		   	// Display additionals fields if under aged
		   	var curr = new Date();
			curr.setFullYear(curr.getFullYear() - 18);

			var date = Date.parse(dateText);

			if((curr-date)<0)
			{
			    //Under 18
			    $("#ifnotmajeurName").show();
		      	$("#ifnotmajeurSurName").show();
		       	$("#ifnotmajeurAdresDif").show();
			} else {
						
				//Over 18
				$("#ifnotmajeurName").hide();	
				$("#ifnotmajeurSurName").hide();
				$("#ifnotmajeurAdresDif").hide();
			}					        
		}
	});
	
	$('#adressCheckbox').click(function(){
	
		// If the parent adress is ! from player,
		// display more input fields
    	if($(this).is(':checked')){
       		$("#ifnotmajeurParentAdres").show();
       		$("#ifnotmajeurParentCP").show();
       		$("#ifnotmajeurParentLoc").show();
	   	} else {
        	$("#ifnotmajeurParentAdres").hide();
        	$("#ifnotmajeurParentCP").hide();
        	$("#ifnotmajeurParentLoc").hide();
		}
	});
});
