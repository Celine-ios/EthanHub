//ext-build-add.js
Ext.onReady(function() {

	Ext.create('Ext.container.Container',{

		 renderTo: 'ext-content',
         width: '80%',
         layout: 'accordion',
         style: {margin: '10% 20% 2% 20%'},
         items: [{

         	 xtype: 'textfield',
         	 fieldLabel: 'Product Name'
         }]

	});

});