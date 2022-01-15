// if (localStorage.theme === 'dark') document.documentElement.classList.add('dark')
// else document.documentElement.classList.remove('dark')
//
// localStorage.theme = 'light'
//
// localStorage.theme = 'dark'

let nav = document.getElementById('main_nav');
document.getElementById('nav_button').addEventListener('click', () => {
	nav.classList.toggle('flex');
	nav.classList.toggle('hidden');
	document.getElementById('menu_icon').classList.toggle('hidden');
	document.getElementById('close_icon').classList.toggle('hidden');
});


let acButtons = document.querySelectorAll('.accordion-button');
	acButtons.forEach(btn => {
		btn.addEventListener('click', event => {
			 event.target.childNodes[1].classList.toggle('rotate-180');
			document.getElementById(event.target.getAttribute('data-for')).classList.toggle('hidden');
		});
	});
