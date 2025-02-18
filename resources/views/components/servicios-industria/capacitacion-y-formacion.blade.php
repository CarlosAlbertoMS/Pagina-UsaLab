<div id="capacitacion-y-formacion" class="capacitacionYFormacionContainer">
    <!-- Titulo de la sección -->
    <div class="capacitacionYFormacionTitle">Capacitación y Formación</div>

    <!-- Contenedor de la card de la sección -->
    <x-information-card image="{{ asset('img/capacitacion-y-formacion.png') }}">
        En UsaLab ofrecemos una amplia gama de programas de capacitación y formación dirigidos a estudiantes, profesionales e investigadores interesados en la usabilidad y la interacción humano-computadora (HCI). Impartimos cursos, talleres y conferencias diseñados para proporcionar conocimientos teóricos y prácticos en estas áreas, adaptados a diferentes niveles de experiencia.
    </x-information-card>

    <!-- Más información de la sección -->
    <div class="masInformacionCapacitacionYFormacionContainer" style="background: url({{ asset('img/capacitacion-y-formacion2.png') }}) lightgray 50% / cover no-repeat;">
        <div class="masInformacionCapacitacionYFormacion">La capacitación y formación ofrecida por UsaLab se divide en varias áreas clave, diseñadas para proporcionar conocimientos teóricos y habilidades prácticas en usabilidad y experiencia de usuario (UX/UI)</div>
    </div>

    <!-- Subtitulo de la sección -->
    <div class="capacitacionYFormacionSubtitle">Áreas clave</div>
    <!-- Contenedor de las cards -->
    <div class="areasClaveCardsContainer">
        <!-- Card de área clave "Curso teórico" -->
        <x-servicios-industria.servicios-industria-card 
            title="Curso teórico" 
            text="Proporcionar una base sólida en conceptos de usabilidad, interacción humano-computadora (HCI) y experiencia de usuario." 
        />

        <!-- Card de área clave "Talleres prácticos" -->
        <x-servicios-industria.servicios-industria-card 
            title="Talleres prácticos" 
            text="Ofrecer experiencias prácticas en el diseño de interfaces y la realización de pruebas de usabilidad." 
        />

        <!-- Card de área clave "Conferencias y Seminarios" -->
        <x-servicios-industria.servicios-industria-card 
            title="Conferencias y Seminarios" 
            text="Mantener a los estudiantes, investigadores y profesionales actualizados en las últimas tendencias y tecnologías en HCI y UX/UI." 
        />

        <!-- Card de área clave "Capacitación Corporativa" -->
        <x-servicios-industria.servicios-industria-card 
            title="Capacitación Corporativa" 
            text="Ofrecer programas de formación personalizados para empresas, enfocados en mejorar la experiencia de usuario en sus productos y servicios." 
        />

        <!-- Card de área clave "Optimización de flujos de interacción" -->
        <x-servicios-industria.servicios-industria-card 
            title="Optimización de flujos de interacción" 
            text="Mejorar la fluidez y eficiencia con la que los usuarios completan tareas dentro del sistema." 
        />

        <!-- Card de área clave "Asesorías Académicas y Mentorship" -->
        <x-servicios-industria.servicios-industria-card 
            title="Asesorías Académicas y Mentorship" 
            text="Guiar a estudiantes e investigadores en proyectos de usabilidad y UX/UI." 
        />
    </div>
</div>