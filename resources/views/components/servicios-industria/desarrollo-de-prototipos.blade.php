<!-- Contenedor de la sección -->
<div id="desarrollo-de-prototipos" class="desarrolloDePrototiposContainer">
    <!-- Titulo de la sección -->
    <div class="desarrolloDePrototiposTitle">Desarrollo de Prototipos</div>

    <!-- Contenedor de la card de la sección -->
    <x-information-card image="{{ asset('img/desarrollo-de-prototipos.png') }}">
        En UsaLab colaboramos con empresas y organizaciones en el desarrollo y prueba de prototipos de interfaces y productos interactivos. Utilizando metodologías ágiles, nuestro enfoque permite iterar de manera rápida y efectiva en el proceso de diseño, garantizando que las mejoras y ajustes necesarios se implementen antes del lanzamiento final.
    </x-information-card>

    <!-- Subtitulo de la sección -->
    <div class="desarrolloDePrototiposSubtitle">Tipos de prototipos</div>
    <!-- Contenedor de las cards -->
    <div class="areasClaveCardsContainer">
        <!-- Card de tipo de prototipo "Prototipado Rápido" -->
        <x-servicios-industria.servicios-industria-card 
            title="Prototipado Rápido" 
            text="Detallar el uso de tecnologías como impresión 3D, corte láser o fresado CNC para generar prototipos físicos en diferentes materiales." 
        />

        <!-- Card de tipo de prototipo "Prototipado Digital" -->
        <x-servicios-industria.servicios-industria-card 
            title="Prototipado Digital" 
            text="Describir el modelado 3D y simulaciones virtuales para probar diseños de forma rápida sin fabricar un producto físico." 
        />

        <!-- Card de tipo de prototipo "Prototipos Funcionales" -->
        <x-servicios-industria.servicios-industria-card 
            title="Prototipos Funcionales" 
            text="Explicar la creación de prototipos que no solo son visuales, sino que pueden ser probados en uso real." 
        />

        <!-- Card de tipo de prototipo "Capacitación Corporativa" -->
        <x-servicios-industria.servicios-industria-card 
            title="Capacitación Corporativa" 
            text="Ofrecer programas de formación personalizados para empresas, enfocados en mejorar la experiencia de usuario en sus productos y servicios." 
        />

        <!-- Card de tipo de prototipo "Optimización de flujos de interacción" -->
        <x-servicios-industria.servicios-industria-card 
            title="Optimización de flujos de interacción" 
            text="Mejorar la fluidez y eficiencia con la que los usuarios completan tareas dentro del sistema." 
        />

        <!-- Card de tipo de prototipo "Asesorías Académicas y Mentorship" -->
        <x-servicios-industria.servicios-industria-card 
            title="Asesorías Académicas y Mentorship" 
            text="Guiar a estudiantes e investigadores en proyectos de usabilidad y UX/UI." 
        />
    </div>
    
    <!-- Subsección incompleta "Creación de prototipo?" -->
    <div class="creacion-de-prototipo" style="background: url({{ asset('img/creacion-de-prototipos.png') }}) lightgray 50% / cover no-repeat;">
        <!-- Texto de la sección -->
        <div class="creacion-de-prototipo-text">Facilitar la creación de prototipos interactivos para probar y optimizar la experiencia de usuario en productos digitales y físicos</div>
    </div>
</div>