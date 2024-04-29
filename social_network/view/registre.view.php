<?php $title = "Inscription"; ?>
<?php include('partials/_header.php'); ?>


    <div class="main-containe">
        <h1 class="lead">Devenez dès à présent membres!</h1>

        <?php include('partials/_errors.php')?>

        <form  method="post" class="well col-md-6" autocomplete="off">
        
           <!-- Name field -->
           <div class="form-group">
          
                <label for="control-label" for="name">Nom:</label>
        
                <input type="text" value="<?= get_input('name')?>" class="form-control" id="name" name="name" require="required"/>

            </div>
            <!--Pseudo field -->
           <div class="form-group">
          
          <label for="control-label" for="pseudo">Pseudo:</label>
  
          <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= get_input('pseudo')?>"require="required"/>

      </div>
      <!-- Email field -->
      <div class="form-group">
          
          <label for="control-label" for="email">Adresse Email:</label>
  
          <input type="text" class="form-control" id="email" name="email"value="<?= get_input('email')?>" require="required"/>

      </div>
      <!-- Password field -->
      <div class="form-group">
          
          <label for="control-label" for="password">Mot de passe:</label>
  
          <input type="password" class="form-control" id="password" name="password" require="required"/>

      </div>
      <!-- Password Confirmation field -->
      <div class="form-group">
          
          <label for="control-label" for="password_confirm">Confirmer votre Mot de passe:</label>
  
          <input type="password" class="form-control" id="password_confirm" name="password_confirm" require="required"/>

      </div>
      <input type="submit" class="btn btn btn-primary" value="Inscription" name="register"/>

        </form>

    </div>

    </div>

    <?php include('partials/_footer.php'); ?>
   