<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <main>
      <p>SEND E-MAIL</p>
      <form class="contact-form" action="contactform.php" method="post"><br>
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="mail" placeholder="Email address" required><br>
        <input type="text" name="subject" placeholder="Subject"><br>
        <textarea name="message" placeholder="Message"></textarea><br>
        <button type="submit" name="submit">SEND MAIL</button><br>
      </form>
    </main>
  </body>
</html>
