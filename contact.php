<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>

<header>
	<h1><img src="images/logo.jpg"></h1>
</header>

<div id="form">


<form id="waterform" method="post">

<div class="formgroup" id="name-form">
    <label for="name">Your name*</label>
    <input type="text" id="name" name="name" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">Your e-mail*</label>
    <input type="email" id="email" name="email" />
</div>

<div class="formgroup" id="message-form">
    <label for="message">Your message</label>
    <textarea id="message" name="message"></textarea>
</div>

	<input type="submit" value="Send your message!" />
</form>
</div>
</body>
</html>