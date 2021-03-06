<a id="start_oauth2">Click here to create your WePay account</a>

<script src="https://static.wepay.com/min/js/wepay.v2.js" type="text/javascript"></script>
<script type="text/javascript">

WePay.set_endpoint("stage"); // stage or production

WePay.OAuth2.button_init(document.getElementById('start_oauth2'), {
    "client_id":112874,
     "scope":["manage_accounts","collect_payments","view_user","send_money","preapprove_payments"],
    "user_name":"Carlsberg",
    "user_email":"2m38gh@prin.be",
    "top":100, // control the positioning of the popup with the top and left params
    "left":100,
    "state":"robot", // this is an optional parameter that lets you persist some state value through the flow
    "callback":function(data) {
		/** This callback gets fired after the user clicks "grant access" in the popup and the popup closes. The data object will include the code which you can pass to your server to make the /oauth2/token call **/
		if (data.code.length !== 0) {
			// send the data to the server
		} else {
			// an error has occurred and will be in data.error
		}
	}
});

</script>
