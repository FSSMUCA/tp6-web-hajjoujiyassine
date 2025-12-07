<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Informations PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #1e2a31;
      color: #00e1ff;
      padding: 2rem;
    }
    h1 {
      color: #0f1c24;
      background-color: #00e1ff;
      padding: 0.5rem 1rem;
      border-radius: 6px;
    }
    section {
      background-color: #0f1c24;
      padding: 1rem;
      margin-top: 1rem;
      border-radius: 6px;
    }
  </style>
</head>
<body>
  <h1>Informations PHP</h1>

  <?php
    $nom_etablissement = "FSSM";
    $module = "Développement Web";
    $annee = 2025;

  
    $a = 15;
    $b = 7;


    $addition = $a + $b;
    $multiplication = $a * $b;
  ?>

  <section>
    <h2>Informations Générales</h2>
    <p><strong>Nom de l'établissement :</strong> <?php echo $nom_etablissement; ?></p>
    <p><strong>Module :</strong> <?php echo $module; ?></p>
    <p><strong>Année :</strong> <?php echo $annee; ?></p>
  </section>

  <section>
    <h2>Exemples de Variables et Calculs</h2>
    <p><strong>Valeur de A :</strong> <?php echo $a; ?></p>
    <p><strong>Valeur de B :</strong> <?php echo $b; ?></p>
    <p><strong>Résultat de l'addition (A + B) :</strong> <?php echo $addition; ?></p>
    <p><strong>Résultat de la multiplication (A x B) :</strong> <?php echo $multiplication; ?></p>
  </section>
</body>
</html>
