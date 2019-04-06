const navOpacity = () => {
    const burguer = document.querySelector('.s-nav-button');
    const nav = document.querySelector('.s-contenedor-nav-links');

    burguer.addEventListener('click',()=>{
        nav.classList.toggle('s-opacity-active');
    });
}

navOpacity();