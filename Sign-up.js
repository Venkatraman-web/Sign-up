let name = document.getElementById('name');
let email = document.getElementById('email');
let password = document.getElementById('pass');
let confirmpassword = document.getElementById('confirm');
let checkbox = document.getElementById('check') 

let validate = () => {

 if(name.value == ''){
   alert('name is not filled')
   return false
}else if(email.value == ''){
  alert('email is not filled')
   return false
}else if(password.value == ''){
    alert('password is not filled')
    return false
}else if(confirmpassword.value == ''){
    alert('The confirm password is not filled')
    return false
}else if(checkbox.checked == ''){
    alert('The checkbox is not checked')
    return false
}else{
    return true
}
};