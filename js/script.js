let no = 1;

const form =
document.getElementById("registerForm");

if(form){

form.addEventListener(
"submit",
function(e){

e.preventDefault();

let nama =
document.getElementById("nama").value;

let email =
document.getElementById("email").value;

let nomor =
document.getElementById("nomor").value;

document
.getElementById("hasil")
.innerHTML += `

<tr>
<td>${no++}</td>
<td>${nama}</td>
<td>${email}</td>
<td>${nomor}</td>
</tr>

`;

form.reset();

alert("Register berhasil!");

});
}