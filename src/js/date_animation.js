console.log('hello world');
function scrollAnimation(){
    
    let frontDate = document.querySelector('.front-date');
    let backDate = document.querySelector('.back-date');
    let position = document.querySelector('.third-container .bottom');
    let screenPosition = window.innerHeight;
    let interval = 100;
    let frontDatePosition = position.getBoundingClientRect().top;


        //setTimeout(function () {
            if(frontDatePosition < screenPosition){
                frontDate.classList.add('front-date-appear');
                backDate.classList.add('back-date-appear');
            }

        //},interval);

}



window.addEventListener('scroll', scrollAnimation);