(function() {



	tinymce.PluginManager.add('mce_buttons', function( editor, url ) {



		// single button

		editor.addButton('mce_button_1', {

			text: 'Live Chat',

			icon: false,

			onclick: function() {

				editor.insertContent('[k2_live_chat]');

			}

		});

		// single button
		editor.addButton('mce_button_2', {
			text: 'K2 IMG',
			icon: false,
			onclick: function() {
				editor.insertContent('[k2_img_n]');
			}
		});

		var languages = ['css', 'php', 'html', 'javascript'];

		var items = [];

		tinymce.each( languages, function( languageName ){
			items.push({
				text: languageName,
				onclick: function(){
					var content = tinyMCE.activeEditor.selection.getContent();
					editor.insertContent( '[k2_img_n-' + languageName + ']' );
				}
			});
		});

		editor.addButton( 'prism', {
			type: 'menubutton',
			text: 'Prism',
			icon: 'code',
			menu: items
		});

	});

})();