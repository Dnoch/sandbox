const http = new EasyHTTP;

//Get users
// http.get('https://jsonplaceholder.typicode.com/users')
//     .then(data => console.log(data))
//     .catch(err => console.log(err));

// User data
const data = {
    name: 'Bob',
    username: 'Bob69',
    email: '14May2018-162120@blumenau.co.za'
}

// http.post('https://jsonplaceholder.typicode.com/users', data)
//     .then(data => console.log(data))
//     .catch(err => console.log(err));
//
//
// http.put('https://jsonplaceholder.typicode.com/users/1', data)
//     .then(data => console.log(data))
//     .catch(err => console.log(err));

http.delete('https://jsonplaceholder.typicode.com/users/1')
    .then(data => console.log(data))
    .catch(err => console.log(err));