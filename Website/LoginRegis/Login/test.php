<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>reCAPTCHA Test</title>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeEwQsqAAAAAKCLlbd1BtLQmzjccuNanQ32MQeI"></script>
</head>

<body>
    <form id="testForm">
        <input type="hidden" id="recaptchaToken" name="recaptchaToken">
        <button type="button" onclick="executeRecaptcha()">Test reCAPTCHA</button>
    </form>
    <script>
        function executeRecaptcha() {
            grecaptcha.ready(function () {
                grecaptcha.execute('6LeEwQsqAAAAAKCLlbd1BtLQmzjccuNanQ32MQeI', { action: 'test' }).then(function (token) {
                    document.getElementById('recaptchaToken').value = token;
                    console.log('Token generated:', token);
                    // Here you can submit the form or send an AJAX request with the token
                });
            });
        }
    </script>
</body>

</html>