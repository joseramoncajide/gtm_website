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
				'name': productName,       
				'id': productId,
				'list': productList,
				'price': parseFloat(productPrice),
				'position': productPosition
			})			
	}		
	  var ecommerceData = {
	  	//'event': 'evento_ecommerce',
		'ecommerce' : {
		  currencyCode : 'EUR',
		  'impressions': products
		}
	  };
	  
	  dataLayer.push(ecommerceData);
  	
  	//return ecommerceData;
})();



jQuery('#addToCart').click(function(){
    		    dataLayer.push({
					'event': "ecommerce.js",
					'eventCategory': 'Books',
					'eventAction': 'Add to cart',
					'eventLabel': 1,
					'ecommerce': {
						'currencyCode': 'EUR',
						'add': {                           
						  'products': [{                      
								'id': this.getAttribute('data-product-id'),
								'name': this.getAttribute('data-product-name'),
								'price': this.getAttribute('data-product-price'),
								'quantity': 1
						   }]
						}
					  }
				});
		});