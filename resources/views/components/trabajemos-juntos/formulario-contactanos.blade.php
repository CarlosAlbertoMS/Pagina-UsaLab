<!-- Contenedor del formulario -->
<div class="formularioContactanosContainer">
    <!-- Titulo del formulario -->
    <div class="formularioContactanosTitle">¡Contáctanos y exploremos juntos las posibilidades!</div>
    <!-- Formulario "Contáctanos" -->
    <form action="{{ route('contacto.enviar') }}" method="post" class="formularioContactanos">
        @csrf
        <!-- Espacio para Nombre y Apellidos -->
        <div class="nombreApellidosContainer">
            <!-- Campo de texto "Nombre" -->
            <div class="inputContainer">
                <input type="text" class="campo-nombre" name="nombre" id="nombre" required>
                <label for="nombre">Nombre</label>
            </div>
            <!-- Campo de texto "Apellidos" -->
            <div class="inputContainer">
                <input type="text" class="campo-apellidos" name="apellidos" id="apellidos" required>
                <label for="apellidos">Apellidos</label>
            </div>
        </div>
        <!-- Campo para el Correo electrónico -->
        <div class="inputContainer">
            <input type="email" name="email" id="email" required>
            <label for="email">Correo electrónico</label>
        </div>
        <!-- Campo para el número de telefono -->
        <div class="inputContainer">
            <input type="tel" name="telefono" id="telefono" pattern="[\+]?[\d\s\-]{7,15}" required>
            <label for="telefono">Teléfono celular</label>
        </div>
        <!-- Campo para el país -->
        <div class="inputContainer">
            <input type="text" name="pais" id="pais" required>
            <label for="pais">País</label>
        </div>
        <!-- Campo para la empresa -->
        <div class="inputContainer">
            <input type="text" name="empresa" id="empresa" required>
            <label for="apellidos">Empresa</label>
        </div>
        <!-- Campo para háblanos de tu proyecto -->
        <div class="textAreaContainer">
            <textarea name="hablanos-de-tu-proyecto" id="hablanos-de-tu-proyecto" required></textarea>
            <label for="hablanos-de-tu-proyecto">Háblanos de tu proyecto</label>
        </div>
        <!-- Contenedor para los términos y condiciones -->
        <div class="terminosYBotonContainer">
            <!-- Términos y condiciones -->
            <div class="terminosYCondiciones">Al proporcionar tus datos aceptas los términos y condiciones de uso y las políticas de privacidad de UsaLab. De igual forma, aceptas que podamos contactarte para reforzar nuestra oferta comercial o invitarte a estudios que realizamos con nuestros clientes.</div>
            <!-- Botón enviar -->
            <input type="submit" class="boton-enviar" value="Enviar">
        </div>
    </form>
</div>