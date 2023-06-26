<?php include "./controller/isOlderController.php" ?>

<form method="post">
<h2>Saber si es mayor de edad con la fecha de nacimiento</h2>
<div class="form__row">
    
    <label for="user-date">
            Fecha de nacimiento
            </label>
        <input 
            type="date"
            id="user-date"
            name="user_date"
            placeholder="00/00/0000"

        >
    <div>
    <p>Resultado</p>
    <h3><?php echo $message; ?></h3>
    </div>
</div>
<button>Consultar</button>
</form>