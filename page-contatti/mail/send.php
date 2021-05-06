<?php
$adminEmail = 'admin@admin.com';
$userEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$userMessage = '
  <html>
    <head>
      <title>Grazie per averci contattato</title>
    </head>
    <body>
      <h1>Grazie per averci contattato</h1>
      <p>La tua richiesta è stata inoltrata. Ti risponderemo al più presto.</p>
      <p>Lo Staff</p>
    </body>
  </html>
';
$adminMessage = "
  <html>
    <head>
      <title>Contatto dal sito web</title>
    </head>
    <body>
      <h1>Contatto dal sito web</h1>
      <ul>
        <li>Nome: {$_POST['name']}</li>
        <li>Oggetto: {$_POST['subject']}</li>
        <li>Messaggio: {$_POST['message']}</li>
      </ul>
    </body>
  </html>
";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
mail($userEmail, 'Richiesta di contatto effettuata con successo', $userMessage, implode("\r\n", $headers));
mail($adminEmail, 'Richiesta di contatto dal sito web', $adminMessage, implode("\r\n", $headers));
echo "Messaggio inviato con successo";