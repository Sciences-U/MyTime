$(document).ready(function(){
	$(".alert-message .close").click(function(){
		$(this).parents(".alert-message").alert('close');
		return false;
	});
});

function effacerErreurs(id){
	$("#"+id+" .error").each(function(){
		$(this).removeClass('error');
	});
	
	$("#"+id+" .txtErreur").each(function(){
		$(this).remove();
	});
}

var myLoader = myLoader || {};

myLoader.LoaderAlert = function(o){
    this._options = {
        src: '',
        template: '<div id="mainTopLoader"><div id="contentLoader" class="alert-message block-message"><img src="" alt="Chargement ..." /> <span id="textLoader">Patientez ...</span></div></div>',
              
        onFinish: function(){},
        onStart: function(){}                      
    };
    
    $.extend(this._options, o);
    this._locked = new Array();
    this._loader = this._createLoader();
};

myLoader.LoaderAlert.prototype = {
	_createLoader: function(){
		var loader = null;
		if($('#mainTopLoader').size() != 0)
			$('#mainTopLoader').remove();
		$('body').append(this._options.template);
		loader = $('#mainTopLoader');
		loader.children('div').children('img').attr({'src' : this._options.src });
		return loader;
	},
	setContent: function(html){
		$('#contentLoader', this._loader).html(html);
	},	
	setText: function(html){
		if($('#textLoader', this._loader).size() != 0)
			$('#textLoader', this._loader).html(html);
	},
    show: function(){
		console.log(parseInt(this._loader.css('top')));
		if(parseInt(this._loader.css('top')) <= 0){
			this._loader = this._createLoader();
			$('#contentLoader', this._loader).removeClass('success');
			$('#contentLoader', this._loader).addClass('warning');
			this._loader.animate({
			    opacity: 1,
			    top: '+=70'
			}, 300, function() {});
		}
		return true;
    },
    hide: function(erreur){
    	var loader = this._loader;
    	if($('#mainTopLoader').size() != 0 && parseInt(this._loader.css('top')) > 0){
    		if(typeof erreur == 'undefined'){
	    		this.setContent('Terminé !');
				$('#contentLoader', loader).removeClass('warning');
				$('#contentLoader', loader).addClass('success');
	    		setTimeout(function(){
	    			loader.animate({
		    			opacity: 0,
					    top: '-=70'
					}, 300, function() {});
	    		},1000);
    		} else {
    			this.setContent(erreur);
				$('#contentLoader', loader).removeClass('warning');
				$('#contentLoader', loader).addClass('error');
	    		setTimeout(function(){
	    			loader.animate({
		    			opacity: 0,
					    top: '-=70'
					}, 300, function() {});
	    		},3000);
    		}
    	}
    },
    lock: function(signName){
    	if(this._locked.indexOf(signName) >= 0)
    		return true;
    	
    	this._locked.push(signName);
    	return false;
    },
    delock: function(signName){
    	if(this._locked.indexOf(signName) >= 0)
    		this._locked.splice(this._locked.indexOf(signName),1);
    }   
};