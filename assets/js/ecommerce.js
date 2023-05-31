(function(){
	var products = [];
	var a = document.querySelectorAll('[data-product-id]');
	for(var i = 0; i < a.length; i++) {
			productName = a[i].getAttribute('data-product-name') ? a[i].getAttribute('data-product-name'): '(not set)',
			productId = a[i].getAttribute('data-product-id') ? a[i].getAttribute('data-product-id'): '(not set)',
			productList = a[i].getAttribute('data-product-list') ? a[i].getAttribute('data-product-list') : 'Productos recomendados',
			productPrice = a[i].getAttribute('data-product-price') ? a[i].getAttribute('data-product-price'): '',
			productPosition = i;
		
			products.push({
				'item_name': productName,       
				'item_id': productId,
				'item_list_name': productList,
				'price': parseFloat(productPrice),
				'index': productPosition
			})			
	}		
	  var ecommerceData = {
	  'event': 'view_item_list',
		'ecommerce' : {
		  'currency' : 'EUR',
		  'items': products
		}
	  };
	  dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
	  dataLayer.push(ecommerceData);
  	
  	//return ecommerceData;
})();



jQuery('[id^="addToCart"]').click(function(){
    		    dataLayer.push({
    					'event': "add_to_cart",
    					'ecommerce': {
    						'currency': 'EUR',
  						  'items': [{                      
  								'item_id': this.getAttribute('data-product-id'),
  								'item_name': this.getAttribute('data-product-name'),
  								'price': this.getAttribute('data-product-price'),
  								'quantity': 1
  						   }]
    					
    					  }
    				});
		});