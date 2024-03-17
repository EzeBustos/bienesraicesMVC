document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkMode();
});

function darkMode(){

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    //console.log(prefiereDarkMode.matches);

    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    })

    const btnDarkMode = document.querySelector('.dark-mode-btn');

    btnDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);

    //Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodoContacto));
    
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    // Modo noob
    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar')
    }else{
        navegacion.classList.add('mostrar')
        navegacion.ed
    }

    //Modo pro
    /* navegacion.classList.toggle('mostrar'); */
}

function mostrarMetodoContacto(e) {
    const contactoDiv = document.querySelector('#contacto');

    if (e.target.value === 'telefono') {
        contactoDiv.innerHTML = `
            <label for="telefono">Numero Teléfono:</label>
            <input type="tel" placeholder="Tu Telefono" id="telefono" name="contacto[telefono]"></input>

            <p>Elija la fecha y la hora en la que podamos llamarlo</p>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="contacto[fecha]">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="20:00" name="contacto[hora]">
        `;
    }else{
        contactoDiv.innerHTML =  `
            <label for="mail">E-mail:</label>
            <input type="email" placeholder="Tu Email" id="mail" name="contacto[email]" required>
        `;
    }
}


