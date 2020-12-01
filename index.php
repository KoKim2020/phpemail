<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
</head>
<body>
	<center>
		<h4 class="sent-notification"></h4>
		<form id="myForm" action="send_email.php" method="post">
			<h2>Send an Email</h2>
			<label>Name:</label>
			<input type="text" name="name" id="name" placeholder="Enter Name">
			<br>
			<br>
			<label>Email:</label>
			<input type="text" name="email" id="email" placeholder="Enter Email">
			<br><br>
			<label>Subject:</label>
			<input type="text" name="subject" id="subject" placeholder="Enter Subject">
			<br><br>
			<p>Message</p>
			<textarea id="body" rows="5" placeholder="Enter Message" name="body">
			</textarea>
			<br>
			<button type="submit"  value="send an Email">Submit</button>
		</form>
	</center>
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js">
	</script> -->
	<!-- <script type="text/javascript">
		function sendEmail(){
			var name= $("#name");
			var email=$("#email");
			var subject =$("#subject");
			var body =$("#body");

			if (isNotEmpty(name)&& isNotEmpty(email)&& isNotEmpty(subject)&& isNotEmpty(body)) {

				$.ajax({
					url: 'sendEmail.php',
					method:'POST',
					dataType:'json',
					data:{
						name:name.val(),
						email:email.val(),
						subject:subject.val(),
						body:body.val()
					},success:function(response){
						$('#myForm')[0].reset();
						$('.sent-notification').text('Message sent successfully.');
					}
				});
			}
		}
		function isNotEmpty(caller){
			if (caller.val()=="") {
				caller.css('border','1px solid red');
				return false;

			}
			else{
				caller.css('border','');
				return true;
			}
		}
	</script> -->
</body>
</html>