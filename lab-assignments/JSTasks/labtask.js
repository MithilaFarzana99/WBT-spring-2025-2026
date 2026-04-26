// Swap variables without a third variable
let a = 5, b = 10;
console.log("Task 1: Swap");
console.log(`Before Swap: a = ${a}, b = ${b}`);

[a, b] = [b, a]; 

console.log(`After Swap:  a = ${a}, b = ${b}\n`);


// square(n) and calling it for 1 to 10
console.log("Task 2: Square Loop");
function square(n) {
    return n * n;
}

for (let i = 1; i <= 10; i++) {
    console.log(`The square of ${i} is: ${square(i)}`);
}
console.log("");


// 3. Find the largest number in an array using a loop 
console.log("Task 3: Find Largest");
const numbers = [23, 89, 4, 102, 56, 7];
let largest = numbers[0];

for (let i = 1; i < numbers.length; i++) {
    if (numbers[i] > largest) {
        largest = numbers[i];
    }
}

console.log(`In the array [${numbers}], the largest number is: ${largest}`);