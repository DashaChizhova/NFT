//get all inputs fields
const inputFields = document.querySelectorAll(".form__input");
const emailInput = document.getElementById('emailInput');
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const registrationButton = document.querySelector(".form__btn");

function emailIsValid(){
    if(emailRegex.test(emailInput.value)){
      warningText[0].textContent = '';
      emailInput.style.borderColor='#787878';
    
    }
    else if(emailInput.value===''){
      warningText[0].style.display = 'block';
      emailInput.style.borderColor='#CB2424';
   
    }
    else{
      warningText[0].style.display = 'block';
      warningText[0].textContent = 'Email невалидный';
      emailInput.style.borderColor='#CB2424';
    
    
    };
}


registrationButton.addEventListener("click", () => {
  emailIsValid();
 
           
 

});