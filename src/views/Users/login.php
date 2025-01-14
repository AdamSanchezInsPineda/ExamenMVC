<h2>Consulta les teves multes</h2>

<?php echo isset($error) ? "<p style='color: red;'>".$error."</p>" : ""; ?>

<form action="/signin" method="post">
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

<a href="/register">Registra't per consultar les teves multes</a>
<br>
<a href="/admin">Soc administrador</a>