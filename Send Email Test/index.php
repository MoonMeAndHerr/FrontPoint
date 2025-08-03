<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="contactForm">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Your Email" required><br>
    <input type="text" name="subject" placeholder="Subject" required><br>
    <textarea name="message" placeholder="Your Message" required></textarea><br>
    <button type="submit">Send Message</button>
    <div id="responseMessage"></div>
</form>
<script>
document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    fetch("contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("responseMessage").innerHTML = data;
        form.reset();
    })
    .catch(error => {
        document.getElementById("responseMessage").innerHTML = "Something went wrong.";
        console.error(error);
    });
});
</script>

</body>
</html>