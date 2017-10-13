<?php include('include/header.php') ?>

<!-- content-section3 -->

<div class="content-section3">

  <h1>Me contacter</h1>
  <p>pour pouvoir vous aider dansvos projet.</p></br>


  <!-- formuler -->

  <div class="formulair">

    <form method="post" action="voirla.php">
      <div class="row">
        <div class="form-group col-sm-6">
          <label for="name" class="h4">Nom</label>
          <input name="objet" class="form-control" placeholder="Entrer votre nom" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group col-sm-6">
          <label for="email" class="h4">E-mail</label>
          <input name="email" class="form-control" placeholder="Entrer votre email" required>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group">
        <label for="message" class="h4 ">Votre Message</label>
        <textarea name="message" class="form-control" rows="5" placeholder="Entrer votre message" required></textarea>
        <div class="help-block with-errors"></div>
      </div>
      <button type="submit" class="btn btn-success btn-lg pull-right ">Envoyer</button>
      <div></div>
    </form>
  </div>


<?php include('include/footer.php') ?>
