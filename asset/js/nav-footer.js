window.onload = () =>{
    const modal = document.querySelector('#modal');
    const close = document.querySelector('.close');
    const links = document.querySelectorAll('.gallery-container a');
    const image = document.querySelector('.modal-content img');
    
    for(let link of links){
        link.addEventListener("click", function(e){
            e.preventDefault();
            image.src = this.href;

            modal.classList.add("show");
        });
        close.addEventListener("click", function(){
            modal.classList.remove('show');
        });
        modal.addEventListener("click", function(){
            modal.classList.remove('show');
        })
    }
}
//MOBILE NAV
let bgMenu = document.querySelector('#mobile .fa-bars');
let crossMenu = document.querySelector('#mobile .fa-xmark');
let mobileLinks = document.querySelector('.mobile-links');

function toggleMobileMenu(){
    if(!bgMenu.classList.contains('open')){
        bgMenu.classList.add('open');
        bgMenu.style.display = 'none';
        crossMenu.style.display = 'initial';
        mobileLinks.style.display = 'flex';
    }else if(bgMenu.classList.contains('open')){
        bgMenu.classList.remove('open');
        bgMenu.style.display = 'initial';
        crossMenu.style.display = 'none';
        mobileLinks.style.display = 'none';
    }
}

// DATE FOOTER  
let yearData = document.getElementById('currentYear');
let currentYear = new Date().getFullYear();
yearData.innerHTML = currentYear;