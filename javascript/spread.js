let month = ['Jan', 'Feb', 'Mar', 'Apr'];
let go = (...month) => month;
let otherMonth = ['May', 'June', 'July'];
const allData = [...month, ...otherMonth];
console.log(allData);

let intData = [1,2,5,4];

const max = Math.max(...intData);
console.log(max);

const obj1 = {last4:3224, first4:1234};
const obj2 = {pan:true, cardNumber:1234556567676};

console.log({...obj1, ...obj2});