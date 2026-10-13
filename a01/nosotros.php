<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/nav.php'; ?>

    <main>

        <h2>Sobre nosotros</h2>

        <img src="img/logo.png" width="300">

        <p>
            Nuestra tienda está en:
        </p>

        <p>
            Calle Mayor, 28, El Toro (Castellón).
        </p>

        <h2>Contacto</h2>

        <form>

            <p>
                <label>Nombre:</label>
                <input type="text">
            </p>

            <p>
                <label>Email:</label>
                <input type="email">
            </p>

            <p>
                <label>Teléfono:</label>
                <input type="tel">
            </p>

            <p>
                <label>Comentario:</label>
            </p>

            <textarea rows="5" cols="40"></textarea>

            <p>
                <button type="reset">Borrar</button>
                <button type="submit">Enviar</button>
            </p>

        </form>

    </main>

<?php require_once 'includes/footer.php'; ?>