<html>
<head>
<style>
#page-4 {
    background: url("images/fondocontacts.jpg") no-repeat scroll center 5px transparent;
    clear: both;
    height: 575px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
    padding-top: 20px;
    text-align: center;
    width: 1200px;
}
#page-4 h2 {
    font-size: 36px;
    font-weight: lighter;
    text-align: center;
}
#page-4 #contact-container {
    clear: both;
    margin: 0 auto;
    width: 1120px;
}
#page-4 #contact-container #left-contact, #page-4 #contact-container #right-contact {
    float: left;
    text-align: center;
    width: 400px;
}
#page-4 #contact-container #left-contact img, #page-4 #contact-container #right-contact img {
    clear: both;
    text-align: center;
}
#page-4 #contact-container #left-contact h3, #page-4 #contact-container #right-contact h3 {
    clear: both;
    font-size: 18px;
    margin-bottom: 20px;
}
#page-4 #contact-container #form-contact {
    float: left;
    margin-top: 20px;
    width: 320px;
}
#page-4 #contact-container #form-contact .input {
    clear: both;
    margin: 0 auto 10px;
    text-align: center;
    width: 241px;
}
#page-4 #contact-container #form-contact .inputform {
    background: url("images/formtextfield.png") no-repeat scroll 0 0 transparent;
    border: medium none;
    color: #6D635D;
    font-size: 15px;
    font-style: italic;
    height: 40px;
    padding-left: 18px;
    width: 223px;
}
#page-4 #contact-container #form-contact .textareaform {
    background: url("images/textarea.png") no-repeat scroll 0 0 transparent;
    border: medium none;
    color: #6D635D;
    font-size: 15px;
    font-style: italic;
    height: 130px;
    padding-left: 18px;
    padding-top: 12px;
    resize: none;
    width: 224px;
}
#page-4 #contact-container #form-contact .inputform:focus, #page-4 #contact-container #form-contact .textareaform:focus {
    outline: medium none;
}
#page-4 #contact-container #form-contact .buttonform {
    background: url("images/send237x35.png") no-repeat scroll 0 0 transparent;
    border: medium none;
    color: #FFFFFF;
    font-size: 18px;
    font-style: italic;
    height: 35px;
    width: 237px;
}

</style>
</head>
<body>
<div id="page-4">
		<div class="contact-us" id="contact-us"></div>
		<h2>Contact Us</h2>
		<div id="contact-container">
			<div id="left-contact">
				<h3>The Designer</h3>
				<img src="gfx/thedesigner.png" width="180" height="378" alt="The Designer">
				<div id="contact-person"></div>
			</div>
			<div id="form-contact">                
				<form name="contact" method="post" action="#contact-us">
					<div class="input">
						<input type="text" name="name" class="inputform" value="Name" onfocus="clearText(this)" onblur="clearText(this)">				
					</div>
					<div class="input">		
						<input type="text" name="organization" class="inputform" value="Organization" onfocus="clearText(this)" onblur="clearText(this)">
					</div>
					<div class="input">	
						<input type="text" name="email" class="inputform" value="E-mail" onfocus="clearText(this)" onblur="clearText(this)">
					</div>
					<div class="input">			
						<input type="text" name="subject" class="inputform" value="Subject" onfocus="clearText(this)" onblur="clearText(this)">
					</div>
					<div class="input">
						
						<textarea onblur="clearText(this)" onfocus="clearText(this)" rows="9" cols="1" class="textareaform" name="message"></textarea>	
					</div>
					<div class="input"><input name="send" type="submit" class="buttonform" value="Send"></div>
				</form>
			</div>
			<div id="right-contact">
			<h3>The Developer</h3>
			<img src="gfx/developer.png" width="180" height="367" alt="the developer">
			</div> 
			</div>
		<div style="clear:both"></div>
</div>
</body>
</html>