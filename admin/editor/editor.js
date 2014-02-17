		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[id="editor"]', {
				cssPath : 'admin/editor/plugins/code/prettify.css',
				uploadJson : 'admin/upload.php',
				fileManagerJson : 'admin/file_manager.php',
				allowFileManager : true,
				
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=addform]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=addform]')[0].submit();
					});
				
				},
			 afterBlur: function(){this.sync();}
			});
			prettyPrint();
		});