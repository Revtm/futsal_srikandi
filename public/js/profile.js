function animatedForm(){
    const arrows = document.querySelectorAll('.fa-arrow-down');

    arrows.forEach(arrow => {
        arrow.addEventListener('click',() =>{
            const input = arrow.previousElementSibling;
            const parent = arrow.parentElement;
            console.log(parent);
            const nextForm = parent.nextElementSibling;

            //check validasi
            if(input.type === "text" && validateUser(input)){
                nextSlide(parent,nextForm);
            }else if(input.type === 'email' && validateEmail(input)){
                nextSlide(parent,nextForm);
            }else if(input.type ==='password' && validateUser(input)){
                nextSlide(parent,nextForm);
            }else{
                parent.style.animation = "shake 0.5s ease";
            }

            //get rid animation
            parent.addEventListener('animationend',()=>{
                parent.style.animation = '';
            });
        });
    });
}

function validateUser(user){
    if(user.value.length < 6){
        console.log('no enough characters');
        error('rgb(140,21,21)','rgb(255,255,255)');
    }else{
        error('rgb(41,173,118)','rgb(33,37,41)');
        return true;
    }
}

function validateEmail(email){
    const validation = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(validation.test(email.value)){
        error('rgb(41,173,118)','rgb(33,37,41)');
        return true;
    }else{
        error('rgb(140,21,21)','rgb(255,255,255)');
    }
}

function nextSlide(parent, nextForm){
    parent.classList.add("innactive"); 
    parent.classList.remove("active");
    nextForm.classList.add("active");
}

function error(color,text){
    document.getElementById("newsletter").style.backgroundColor = color;
    document.getElementById("newsletter").style.color = text;
}

animatedForm();