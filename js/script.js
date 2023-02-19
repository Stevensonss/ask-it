const toggle = document.querySelector('.toggle');
const header = document.querySelector('header');


toggle.addEventListener("click", function() {
    header.classList.toggle("menu-toggle");
    toggle.classList.toggle('toggle-active')
})

const inscriptionLink = document.querySelector('.inscription>div>a:nth-child(1)');
const connexionLink = document.querySelector('.connexion>div>a:nth-child(2)');

const inscription = document.querySelector('.inscription');
const connexion = document.querySelector('.connexion')

function logSwitch() {
    connexion.classList.toggle('log-hidden');
    inscription.classList.toggle('log-hidden');
}

inscriptionLink.addEventListener("click", function() { logSwitch() });
connexionLink.addEventListener("click", function() { logSwitch() });