// let menuBtn = document.querySelector('.burger');
// let menu = document.querySelector('.burger__menu');
// menuBtn.addEventListener('click', function () {
// 	menu.classList.toggle('active');
// })
let menuBtn = document.querySelector('.burger');
let menu = document.querySelector('.burger__menu');
menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})