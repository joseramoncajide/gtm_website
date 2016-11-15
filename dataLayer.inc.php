<script>
	var dataLayer = (typeof dataLayer !== 'undefined') ? dataLayer : [];

	dataLayer.push({
		'userId' : '<?php echo USER_ID;?>', 
		'user_cohort' : '<?php echo USER_COHORT;?>',
		'user_name': '<?php echo USER_NAME;?>',
		'user_login': '<?php echo USER_LOGIN;?>',
		'user_age': '<?php echo USER_AGE;?>',
		'user_bin': '<?php echo USER_BIN;?>',
		'user_last_login': '<?php echo USER_LAST_ACCESS;?>',
		'pageTemplate': 'landingPage',
		'contentGroup1': 'Landings'
	});
</script>
   