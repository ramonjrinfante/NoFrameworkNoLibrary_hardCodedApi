<!DOCTYPE html>
<html>
<head>
	<title>Hard coded application</title>
	<link rel="stylesheet" href="css/customize_style.css" />
</head>
<body>
	<button id="get_request"> Get request to backend</button>
	<button id="post_request"> Post request to backend</button>
	<button id="insert_request"> Insert Data</button>
	<button id="update_data"> Update Data</button>
	<button id="select_data"> Select Data</button>
	<button id="delete_data"> Delete Data</button>

	<p>Message: <span class="message"></span></p>
</body>
</html>
<script src="js/jquery.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
	$(document).ready(()=>{
		$(document).on("click","#get_request",() =>{
			console.log("get_request")
			axios.get('http://localhost/php_api_call_noframework_nolibrary/phprequests/get_request.php').then(response => {
				console.log(response.data)
				$('.message').text(JSON.stringify(response.data))
        	});
			
		})
		$(document).on("click","#post_request",() =>{
			let data = {
				firstname:"Ram",
				lastname:"Infante",
				status:"This data is from client side and pass it to server(PHP HARD CODED) and return the data from server to clientside",
			}
			axios.post('http://localhost/php_api_call_noframework_nolibrary/phprequests/post_request.php',data).then(response => {
				console.log(response.data)
				$('.message').text(JSON.stringify(response.data))
        	});
        
		});
		$(document).on("click","#insert_request",() =>{
			let data = {
				firstname:"Ram",
				lastname:"Infante",
			}
			axios.post('http://localhost/php_api_call_noframework_nolibrary/phprequests/insert_query_request.php',data).then(response => {
				console.log(response.data)

        	});
		});
		$(document).on("click","#update_data",() =>{
			let data = {
				id:12,
				firstname:Math.random().toString(36).substring(7) + Math.random().toString(36).substring(7) + Math.random().toString(36).substring(7) + Math.random().toString(36).substring(7),
				lastname:Math.random().toString(36).substring(7) + Math.random().toString(36).substring(7) + Math.random().toString(36).substring(7) + Math.random().toString(36).substring(7),
			}
			axios.post('http://localhost/php_api_call_noframework_nolibrary/phprequests/update_query_request.php',data).then(response => {
				console.log(response.data)

        	});
		});
		$(document).on("click","#select_data",() =>{
			axios.get('http://localhost/php_api_call_noframework_nolibrary/phprequests/select_query_request.php').then(response => {
				console.log(response.data)

        	});
		});
		$(document).on("click","#delete_data",() =>{
			let data = {
				id:12,
			}
			axios.post('http://localhost/php_api_call_noframework_nolibrary/phprequests/delete_query_request.php',data).then(response => {
				console.log(response.data)
        	});
		});
		

	});
</script>