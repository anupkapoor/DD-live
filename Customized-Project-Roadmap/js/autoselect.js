$(document).ready(function() {
	var qrStr = decodeURI(window.location.search);
	//remove ?
	var spQrStr = qrStr.substring(1);

	//get all query string values
	var arr = spQrStr.split('&');
	var firstNameArr = arr[0].split('=');
	/*var skillLevel = arr[1].split('=');
	var plan = arr[2].split('=');*/
	
	var firstNamewithVariableArr = firstNameArr.toString().split(',');
	var firstName=firstNamewithVariableArr[1];	
	$('.first-name-v').text(firstName);
	/*
	var arrskillLevel = skillLevel.toString().split(',');
	var arrplan = plan.toString().split(',');
	//select values in drop down
	
	$("#mr-field-element-228746025859 option").each(function() {		
	  if($(this).text().replace('.','') == arrskillNeed[1].toString().replace('%26','&')) {
		$(this).attr('selected', 'selected'); 
	  }
	});
	
	$("#mr-field-element-50292814424 option").each(function() {
	  if($(this).text() == arrskillLevel[1].toString()) {
		$(this).attr('selected', 'selected'); 
	  }                        
	});
	
	$("#mr-field-element-564442340143 option").each(function() {
	  if($(this).text() == arrplan[1].toString()) {
		$(this).attr('selected', 'selected'); 
	  }                        
	});*/

});