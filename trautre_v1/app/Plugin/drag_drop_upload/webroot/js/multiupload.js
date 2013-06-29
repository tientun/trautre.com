/**
* Srinivas Tamada script
* http://www.9lessons.info/2012/09/multiple-file-drag-and-drop-upload.html
*/
function multiUploader(config){
  
	this.config = config;
	this.items = "";
	this.all = []
	var self = this;
	
	multiUploader.prototype._init = function(){
		if (window.File && 
			window.FileReader && 
			window.FileList && 
			window.Blob) {		
			 var inputId = jQuery("#"+this.config.form).find("input[type='file']").eq(0).attr("id");
			 document.getElementById(inputId).addEventListener("change", this._read, false);
			 document.getElementById(this.config.dragArea).addEventListener("dragover", function(e){e.stopPropagation();e.preventDefault();}, false);
			 document.getElementById(this.config.dragArea).addEventListener("drop", this._dropFiles, false);
			 document.getElementById(this.config.form).addEventListener("submit", this._submit, false);
		} else
			console.log("Browser supports failed");
	}
	
	multiUploader.prototype._submit = function(e){
		e.stopPropagation();e.preventDefault();
		self._startUpload();
	}
	
	multiUploader.prototype._preview = function(data){
		this.items = data;
		if(this.items.length > 0){
			var html = "";		
			var uId = "";
 			for(var i = 0; i<this.items.length; i++){
				uId = this.items[i].name._unique();
				var sampleIcon = '<img src="'+ this.config.baseUrl +'img/image.png" />';
				var errorClass = "";
				if(typeof this.items[i] != undefined){
					if(self._validate(this.items[i].type) <= 0) {
						sampleIcon = '<img src="'+ this.config.baseUrl +'img/unknown.png" />';
						errorClass =" invalid";
					} 
					html += '<div class="dfiles'+errorClass+'" rel="'+uId+'" id="'+this.items[i].name+'"><h5>'+sampleIcon+this.items[i].name+'</h5><div id="'+uId+'" class="progress" style="display:none;"><img src="'+ this.config.baseUrl +'img/ajax-loader.gif" /></div></div>';
				}
			}
			jQuery("#dragAndDropFiles").append(html);
		}
	}

	multiUploader.prototype._read = function(evt){
		if(evt.target.files){
			self._preview(evt.target.files);
			self.all.push(evt.target.files);
		} else 
			console.log("Failed file reading");
	}
	
	multiUploader.prototype._validate = function(format){
		var arr = this.config.support.split(",");
		return arr.indexOf(format);
	}
	
	multiUploader.prototype._dropFiles = function(e){
		e.stopPropagation();e.preventDefault();
		self._preview(e.dataTransfer.files);
		self.all.push(e.dataTransfer.files);
	}
	
	multiUploader.prototype._uploader = function(file,f){
		if(typeof file[f] != undefined && self._validate(file[f].type) > 0){
			var data = new FormData();
			var ids = file[f].name._unique();
                        
                        var e = document.getElementById(this.config.catId);
			data.append(this.config.fileKey,file[f]);
                        data.append(this.config.catKey,e.options[e.selectedIndex].value);
                        data.append('data[index]',ids);
			jQuery(".dfiles[rel='"+ids+"']").find(".progress").show();
			jQuery.ajax({
				type:"POST",
				url:this.config.uploadUrl,
				data:data,
				cache: false,
				contentType: false,
				processData: false,
				success:function(rponse){
					jQuery("#"+ids).hide();
					var obj = jQuery(".dfiles").get();
					jQuery.each(obj,function(k,fle){
                                            jQueryx=jQuery(fle).attr("rel");
						if(jQueryx == rponse){
							jQuery(fle).slideUp("normal", function(){jQuery(this).remove();});
							jQuery('.upload-status').append('File uploaded<br/>');
//                                                        jQuery('#'+file[f].name).find(".progress").hide();
						}
					});
					if (f+1 < file.length) {
						self._uploader(file,f+1);
					}
//                                        alert(rponse);
				}
			});
		} else
			console.log("Invalid file format - "+file[f].name);
	}
	
	multiUploader.prototype._startUpload = function(){
		if(this.all.length > 0){
			for(var k=0; k<this.all.length; k++){
				var file = this.all[k];
				this._uploader(file,0);
			}
		}
	}
	
	String.prototype._unique = function(){
		return this.replace(/[a-zA-Z]/g, function(c){
     	   return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c = c.charCodeAt(0) + 13) ? c : c - 26);
    	});
	}

	this._init();
}

function initMultiUploader(){
	new multiUploader(config);
}