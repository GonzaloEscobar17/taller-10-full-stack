<?php include "./controller/isOlderController.php" ?>

<form method="post">
<h2>Saber si es mayor de edad </h2>
<div class="form__row">
    
    <label for="user-age">
            Edad del usuario
            </label>
        <input 
            type="text"
            id="user-age"
            name="user_age"
            placeholder="18"

        >
    <div>
    <p>Resultado</p>
    <h3><?php echo $message; ?></h3>
    </div>
</div>
<button>Adulto?</button>
</form>