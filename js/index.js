const accordionItems = document.querySelectorAll('.my-accordion-item');

accordionItems.forEach(item => {
    const header = item.querySelector('.my-accordion-header');
    header.addEventListener('click', () => {
        accordionItems.forEach(lol => {
            lol.classList.remove("active");
        });
        item.classList.toggle('active');
        console.log("click");
    });
});

let typingText = new Typed("#text", {
    strings: ['NeuroVisor', 'Second sight', "Revelation"],
    loop: true,
    typeSpeed: 100,
    backSpeed: 50,
    backDelay: 1000,
});

const modal_ad = document.getElementById('modal_wrapper');
const closemodal = document.getElementById('CloseAd');

setTimeout(openModal, 5000);
function openModal(){
    modal_ad.classList.add("show");

}
closemodal.addEventListener('click', () => {
    modal_ad.classList.remove('show');
    console.log('closing')
});