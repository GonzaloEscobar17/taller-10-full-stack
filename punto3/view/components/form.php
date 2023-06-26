<form action="./view/pages/user-info-page.php" method="get">
    <h2>Registro de usauario</h2>
    <div class="form__row">
        <div>
            <label for="first-name">
                Nombres del usuario:
            </label>
            <input 
            type="text" 
            id="first-name" 
            name="first_name" 
            placeholder="john">
        </div>
        <label for="last-name">
            Apellidos del usuario:
        </label>
        <input 
        type="text" 
        id="last-name" 
        name="last_name" 
        placeholder="Doe">
        <div>
        <label for="id-number">
            Documento de identidad:
        </label>
        <input 
        type="text" 
        id="id-number" 
        name="id_number" 
        placeholder="9.000.763">
        </div>
    </div>
    <button>Registrar</button>
</form>