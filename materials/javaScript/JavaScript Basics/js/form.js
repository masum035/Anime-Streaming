// DOM - Document Object Module

console.log(window);
// Single element 

const form = document.getElementById('my-form');
console.log(form);

// Multiple element

const items = document.querySelectorAll('.item');
items.forEach((item) => console.log(item));

console.log(document.querySelector('.container'));
console.log(document.querySelector('h1'));
//console.log(document.getElementsByClassName('item'));
//console.log(document.getElementsByTagNames('li'));

const ul = document.querySelector('.items');

// ul.remove();

ul.lastElementChild.innerHTML = '<h2> World <h2>';
ul.firstElementChild.textContent = 'Hello';
ul.children[1].innerText = 'Brad';

const btn = document.querySelector('.btn');
btn.style.background = 'green';


// mouseover, mouseout
/*btn.addEventListener('click', (e) => {
    e.preventDefault();
    console.log('clicked');
    console.log(e.target.className);
    document.querySelector('#my-form').style.background = '#ccc';
    //document.querySelector('body').classList.add('bg-dark');
    document.querySelector('.items').lastElementChild.innerHTML = '<h2> Hello <h2>';


});
*/

const myForm = document.querySelector('#my-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const msg = document.querySelector('.msg');
const userList = document.querySelector('#users');

myForm.addEventListener('submit', onSubmit);

function onSubmit(e) {
    e.preventDefault();

    if (nameInput.value === '' || emailInput.value === '') {
        //alert('Please enter fields');
        msg.classList.add('error');
        msg.innerHTML = 'Please enter all fields';
        setTimeout(() => msg.remove(), 2000);
    }
    else {
        console.log('Success');
        const li = document.createElement('li');
        li.appendChild(document.createTextNode(`${nameInput.value} : ${emailInput.value}`));
        userList.appendChild(li);

        // Clear Fields
        nameInput.value = '';
        emailInput.value = ''; 
    }
}







