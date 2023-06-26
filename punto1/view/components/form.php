<?php include "./controller/calculatorController.php"; ?>

<form method="post">
    <h2>Calculadora de operaciones basicas </h2>
    <div class="formu__row">
        <div>
            <label for="first-number">
                Primer numero
                </label>
            <input 
                type="text"
                id="first-number"
                name="first_number"
                placeholder="5"

            >
        </div>
        
        <div>
            <label for="second-number">
                Segundo numero
                </label>
            <input 
                type="text"
                id="second-number"
                name="second_number"
                placeholder="5"

            >
        </div>
        <label for="operation-type">
                Tipo de operacion
                </label>
            <select 
                id="operation-type"
                name="operation_type"
            >
            <option value="SUMA">SUMAR</option>
            <option value="RESTA">RESTAR</option>
            <option value="MULTIPLICA">MULTIPLICAR</option>
            <option value="DIVIDE">DIVIDIR</option>
    
            </select>
            

    </div>
    <button>Calcular</button>
</form>