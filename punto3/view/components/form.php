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
            placeholder="Nombre">
        </div>
        <label for="last-name">
            Apellidos del usuario:
        </label>
        <input 
        type="text" 
        id="last-name" 
        name="last_name" 
        placeholder="Apellido">
        <div>
        <label for="id-number">
            Documento de identidad:
        </label>
        <input 
        type="text" 
        id="id-number" 
        name="id_number" 
        placeholder="Documento">
        </div>
    </div>
    <button>Registrar</button>
</form>