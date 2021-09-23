function mainImgSlider(){
    var el = document.querySelector('#sec-1-img');
    //console.log(el)
    if(el) {
        var imgs = [
            '/assets/img/sec-1-img-1.png',
            '/assets/img/sec-1-img-2.png',
            '/assets/img/sec-1-img-3.png',
        ];
        var i = 0;
        var len = imgs.length;
        setInterval(function(){
            if(i < len) {
                el.src = imgs[i++];
            } else {
                i = 0;
                el.src = imgs[i];
            }
            
        }, 3000);
    }
    
}

mainImgSlider();


//export { mainImgSlider }
