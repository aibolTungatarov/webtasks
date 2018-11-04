let button = document.getElementById("addStudent");
let table = document.getElementById('students');
let name = document.getElementById('name');
let surname = document.getElementById('surname');
let faculty = document.getElementById('faculty');
button.addEventListener("click",function(){
    table.innerHTML += "<tr><td>"+name.value+"</td><td>"+surname.value+"</td><td><strong>"+faculty.value+"</strong></td></tr>";  
});


