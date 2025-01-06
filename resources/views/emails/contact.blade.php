<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
</head>
<body>
    <h1>Nouveau message de {{ $name }}</h1>
    <p>Email : {{ $email }}</p>
    <p>Téléphone : {{ $phone }}</p> <!-- Include phone number -->
    <p>Sujet : {{ $subject }}</p> <!-- Include subject -->
    <p>Message :</p>
</body>
</html>
