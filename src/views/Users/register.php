<h2>Registre</h2>

<?php echo isset($error) ? "<p style='color: red;'>".$error."</p>" : ""; ?>

<form action="/signup" method="post">
    <div>
        <label for="propietario">Propietari:</label>
        <input type="text" name="propietario" id="propietario" required>
    </div>
    <div>
        <label for="matricula">Matricula:</label>
        <input type="text" name="matricula" id="matricula" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <button type="submit">Validar</button>
</form>

<a href="/">Iniciar sessió</a>
<br>
<a href="">Soc administrador</a>