/*************************************************************/
/**************** Commonly used js functions *****************/
/*************************************************************/

function Common(){
}

/*
***@doc Use to issue GET ajax request
***
***@param url : The yaws script path
***@param path : The yaws script path
*/
Common.prototype.getAjaxRequest = function(url){
	var response = $.ajax({
		type: "get",
		url: url,
		cache: false,
		async: false,
		success: function(json){
			return json;
		},
		error: function(){						
			return '{"status":"error", "message":"ajax request fail"}';
		}
	}).responseText;
	
	return jQuery.parseJSON(response);
};

/*
***@doc Use to issue POST ajax request
***
***@param url : The yaws script path
***@param path : The yaws script path
*/
Common.prototype.postAjaxRequest = function(url, data){
	var response = $.ajax({
		type: "post",
		url: url,
		async:false,
		dataType: "json",
		data: data,
		success: function(json){
			return json;
		},
		error: function(){						
			return '{"status":"error", "message":"ajax request fail"}';
		}
	}).responseText;
	
	return jQuery.parseJSON(response);
};

Common.prototype.setError = function(class_name, message){
	$(class_name).html('<div class="alert alert-danger alert-dismissable">'
							+ '<i class="fa fa-ban"></i>'
							+ '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'
							+ '<b>Error! </b>' + message
						+ '</div>');
};

Common.prototype.setSuccess = function(class_name, message){
	$(class_name).html('<div class="alert alert-success alert-dismissable">'
							+ '<i class="fa fa-check"></i>'
							+ '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'
							+ '<b>Success! </b>' + message
						+ '</div>');
};

Common.prototype.unSetFlash = function(class_name, message){
	$(class_name).html('');
};

var objCommon = new Common();