<!-- Contenedor del formulario -->
<div class="formularioContactanosContainer">
    <div class="formularioContactanosTitle">¡Contáctanos y exploremos juntos las posibilidades!</div>
    <!-- Formulario "Contáctanos" -->
    <form action="" method="post" class="formularioContactanos">
        <!-- Espacio para Nombre y Apellidos -->
        <div class="nombreApellidosContainer">
            <!-- Campo de texto "Nombre" -->
            <input type="text" class="campo-nombre" name="nombre" id="nombre" placeholder="Nombre" required>
            <!-- Campo de texto "Apellidos" -->
            <input type="text" class="campo-apellidos" name="apellidos" id="apellidos" placeholder="Apellidos" required>
        </div>
        <!-- Campo para el Correo electrónico -->
        <input type="email" name="email" id="email" placeholder="Correo electrónico" required>
        <!-- Campo para el número de telefono -->
        <input type="tel" name="telefono" id="telefono" pattern="[\+]?[\d\s\-]{7,15}" placeholder="Teléfono celular" required>
        <!-- Campo para el país -->
        <input type="text" name="pais" id="pais" placeholder="País" required>
        <!-- Campo para la empresa -->
        <input type="text" name="empresa" id="empresa" placeholder="Empresa" required>
        <!-- Campo para háblanos de tu proyecto -->
        <textarea name="hablanos-de-tu-proyecto" id="hablanos-de-tu-proyecto" placeholder="Háblanos de tu proyecto" required></textarea>
        <!-- Contenedor para los términos y condiciones -->
        <div class="terminosYBotonContainer">
            <!-- Términos y condiciones -->
            <div class="terminosYCondiciones">Al proporcionar tus datos aceptas los términos y condiciones de uso y las políticas de privacidad de UsaLab. De igual forma, aceptas que podamos contactarte para reforzar nuestra oferta comercial o invitarte a estudios que realizamos con nuestros clientes.</div>
            <!-- Botón enviar -->
            <input type="button" class="boton-enviar" value="Enviar">
        </div>
    </form>
</div>