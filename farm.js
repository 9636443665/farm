window.addEventListener('scroll',function () {
var navbar = document.getElementById('nav')
var srv = window.scrollY;
if(srv > 150){
    navbar.classList.add('bg-white')

}
else
{
    navbar.classList.remove('bg-white')

}

})

var password = document.getElementById("password")
var confrim_pass = document.getElementById("confrim_pass")

// function valid(){
// if (password.value != confrim_pass.value){
//     console.log("match")
//     password.se
// }
// else
// {
//     console.log(" not match")
// }
// }
// password.addEventListener('onchange',valid());

var password = document.getElementById("password")
var confrim_pass = document.getElementById("confrim_pass")

function valid(){
if (password.value !== confrim_pass.value){
    confrim_pass.setCustomValidity(" password not match")
  
}
else
{
  
    confrim_pass.setCustomValidity("")

}
}




