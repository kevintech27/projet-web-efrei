<?php
// On récupère les erreurs et succès plus tard
$errors = [];
$success = false;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="contact.css"> <!-- on fera le CSS ensuite -->
</head>
<body>

<div class="contact-container">
  <h1>Nous contacter</h1>

  <!-- Affichage message succès -->
  <?php if ($success): ?>
    <div class="alert success">✅ Message envoyé avec succès !</div>
  <?php endif; ?>

  <form method="POST" action="contact.php">

    <!-- Email -->
    <div class="form-group">
      <label for="email">Email *</label>
      <input type="email" id="email" name="email" 
             value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
             placeholder="vous@exemple.com">
      <?php if (!empty($errors['email'])): ?>
        <span class="error"><?= $errors['email'] ?></span>
      <?php endif; ?>
    </div>

    <!-- Téléphone -->
    <div class="form-group">
      <label for="telephone">Téléphone</label>
      <input type="tel" id="telephone" name="telephone"
             value="<?= htmlspecialchars($_POST['telephone'] ?? '') ?>"
             placeholder="06 00 00 00 00">
    </div>

    <!-- Sujet -->
    <div class="form-group">
      <label for="sujet">Sujet *</label>
      <select id="sujet" name="sujet">
        <option value="">-- Choisir --</option>
        <option value="info"      <?= ($_POST['sujet'] ?? '') === 'info'      ? 'selected' : '' ?>>Demande d'information</option>
        <option value="devis"     <?= ($_POST['sujet'] ?? '') === 'devis'     ? 'selected' : '' ?>>Demande de devis</option>
        <option value="support"   <?= ($_POST['sujet'] ?? '') === 'support'   ? 'selected' : '' ?>>Support technique</option>
        <option value="autre"     <?= ($_POST['sujet'] ?? '') === 'autre'     ? 'selected' : '' ?>>Autre</option>
      </select>
      <?php if (!empty($errors['sujet'])): ?>
        <span class="error"><?= $errors['sujet'] ?></span>
      <?php endif; ?>
    </div>

    <!-- Message -->
    <div cla