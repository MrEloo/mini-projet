<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;800&display=swap" rel="stylesheet">
    <title>Je creer mon CV</title>
</head>

<body>




    <?php

    $formData = array();

    $isFormSubmited = false;

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        foreach ($_POST as $key => $value) {
            if (isset($value) && (!empty($value))) {
                $formData[$key] = $value;
            }
        }



        $nom = $formData["nom"] ?? null;
        $prenom = $formData["prenom"] ?? null;
        $email = $formData["email"] ?? null;
        $telephone = $formData["telephone"] ?? null;
        $linkedin = $formData["linkedin"] ?? null;
        $github = $formData["github"] ?? null;
        $bio = $formData["bio"] ?? null;

        $loisirs = array_filter([
            $formData["loisir1"] ?? null,
            $formData["loisir2"] ?? null,
            $formData["loisir3"] ?? null,
            $formData["loisir4"] ?? null
        ]);

        $langues = $formData["langue"] ?? null;
        $programation = $formData["prog"] ?? null;
        $frames = $formData["frames"] ?? null;
        $logiciels = $formData["logiciels"] ?? null;


        $colorChoice = $formData["couleur"];

        $isFormSubmited = true;
    }

    ?>

    <?php if (!$isFormSubmited) {
        require('formulaire.phtml');
    } else {
        require('cv.phtml');
    }



    ?>




</body>

</html>