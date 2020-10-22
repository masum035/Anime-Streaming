console.log('This is a Console print');
console.error("This is an error");
console.warn("This is a warning");

//var = global variable
//let = just like a regular variable
//const = a variable that can't be changed/reassigned



let xx = 15;
xx = xx + 15;
console.log(xx);

const p = 12;
//p = p - 5;
console.log(p);

// Data Types
// String, Number, Boolean, null, undefined, Symbols

const name = 'John Doe';
const age = 30;
const isMale = true;
const rating = 4.5;
const x = null;
const y = undefined;
let z;

console.log(typeof (name));
console.log(typeof (age));
console.log(typeof (isMale));
console.log(typeof (rating));
console.log(typeof (x));
//https: //2ality.com/2013/10/typeof-null.html#:~:text=In%20JavaScript%2C%20typeof%20null%20is,it%20would%20break%20existing%20code.
console.log(typeof (y));
console.log(typeof (z));

//Concatenation
console.log('My name is ' + name + ' and I am ' + age);
//Template String
console.log(`My name is ${name} and I am ${age}`);

//console.log(name.length);
//console.log(name.toUpperCase());
//console.log(name.toLowerCase());
//console.log(name.substring(1, 3).toUpperCase());
console.log(name.split(' '));

//Arrays

const numbers = new Array(1, 2, 3, 4, 5);

console.log(numbers);

const fruits = ['apples', 'oranges', 'grapes', 10, true];
fruits[0] = 'pears';
//fruits = ''
console.log(fruits);
console.log(fruits[2]);
fruits.push('mangoes');
fruits.unshift('berries');
console.log(fruits);
fruits.pop();
console.log(fruits);
console.log(fruits.indexOf('mangoes'));

//check if an array
console.log(Array.isArray(name));

//objects

const person = {
    firstName: 'John',
    lastName: 'Doe',
    age: 30,
    hobbies: ['music', 'movies', 'books'],
    address: {
        street: '221/B Baker Street',
        city: 'London'
    }
}

person.email = 'john@gmail.com'


console.log(person);
console.log(person.hobbies[1]);

const { firstName, lastName, address: { city }} = person;
console.log(firstName + ' ' +lastName + ' from ' + city);

//Array of objects

const ToDos = [
    {
        id: 1,
        text: 'Take out Trash',
        isCompleted: true
    },
    {
        id: 2,
        text: 'Meeting with Teacher',
        isCompleted: false
    },
    {
        id: 3,
        text: 'Dentist Appointment',
        isCompleted: false
    }
]

console.log(ToDos);
console.log(ToDos[0]);

// JSON converter 
//https: //www.freeformatter.com/json-formatter.html

const todoJSON = JSON.stringify(ToDos);
console.log(todoJSON);

// Loops

// For

for (let i = 0; i < 3; i++) {
    console.log(i);
    console.log(ToDos[i].text);
}

// While

let i = 0;
while (i < 5) {
    console.log(`While Loop Number ${i}`);
    i++;
}

for (let todo of ToDos) {
    console.log(todo.text);
}

// High order Array Methods
// forEach, map, filters

ToDos.forEach(function (todo) {
    console.log('forEach: ' + todo.text);
});

 ToDos.forEach(todo => console.log(todo));


const todoText = ToDos.map(function (todo) {
    return todo.text;
});

console.log(todoText);

const todoinCompleted = ToDos.filter(function (todo) {
    return todo.isCompleted === false;
}).map(function (todo) {
    return todo.text;
});

console.log(todoinCompleted);

const yy = 10; // check if 10 is string
const zz = 5;

if (yy == 10)
    console.log('yy is 10 ');
if (yy === 10)
    console.log('yy is number 10');

if (yy === 10 || zz === 5) {
    console.log('yy is 10 or zz is 5');
}
else {
    console.log('yy is not 10');
}

const color = yy > 10 ? 'Red' : 'Blue';

console.log(color);

switch (color) {
    case 'Red':
        console.log('color is Red');
        break;
    case 'Blue':
        console.log('color is Blue');
        break;
    default:
        console.log('color is neither Red nor Blue')
        break;
}

// Funcitons

function addNums(n1 , n2) {
    console.log(n1 + n2 + 5);
    n1++;
    n2--;
    return n1 + n2; 
}

console.log(addNums(5, 10));

const addNums_1 = (n1, n2) => n1 + n2;

console.log(addNums_1(2, 3));

const subNums = (n1, n2) => {
    console.log(n1 + n2 + 5);
    return n1 - n2;
};

console.log(subNums(21, 14));

function Person(firstName, lastName, dob) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.dob = new Date(dob);
    this.getBirthYear = function () {
        return this.dob.getFullYear();
    }
}

const person1 = new Person('John', 'Doe', '1-1-1980');

Person.prototype.getFullName = function () {
    return this.firstName + ' ' + this.lastName;
}

const person2 = new Person('Mary', 'Smith', '4-2-1970');


console.log(person1);
console.log(person2.getBirthYear());
console.log(person1.getFullName());

// more about prototyping
// https: //developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Object_prototypes#:~:text=JavaScript%20is%20often%20described%20as,inherits%20methods%20and%20properties%20from.&text=The%20former%20is%20the%20property,That%20is%2C%20Object.

/*
class Person {
    constructor(firstName, lastName, dob) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.dob = new Date(dob);
    }
    getBirthYear () {
        return this.dob.getFullYear();
    }
    getFullName () {
        return this.firstName + ' ' + this.lastName;
    }
}

*/


