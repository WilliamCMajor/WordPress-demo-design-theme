/**  target the .toggle-icon (menu) to open and close the button **/
const clickButton = document.querySelector('.toggle-icon');

/**  targeted the header to add the class of is-active */
clickButton.addEventListener('click', ()=> {
    document.querySelector('header').classList.toggle('is-active');
})

