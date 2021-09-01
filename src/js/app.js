let ball        = document.querySelector('.ball'),
    info        = document.querySelector('.info'),
    y           = 1,
    gravity     = 1;

setInterval(function(){
    if(y > 100) gravity = -gravity;
    gravity += 1;
    y += gravity;
    ball.style.transform = `translateY(${y}px)`;
    info.innerText = "Y : "+y+", G : "+ gravity;

},50); 