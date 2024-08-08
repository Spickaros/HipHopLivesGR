const wrapper =document.querySelector('.wrapper');
const loginLink= document.querySelector('.login-link');
const signupLink = document.querySelector('.signup-link');

signupLink.addEventListener('click',() =>{
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});

/*let wrapper= document.getElementById('.wrapper');
let loginLink = document.getElementById('.login-link');
let signupLink = document.getElementById('.signup-link');

loginLink.onclick=function(){
    nameField.style.maxHeight=0;
}*/