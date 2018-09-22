function makeBig(event){
    let src = event.currentTarget.getAttribute("src");
    document.getElementsByTagName("img")[0].setAttribute("src",src);
}
let images = document.getElementsByTagName("img");
for(let i = 0; i < images.length; i++ ){
    images[i].addEventListener('click',makeBig,false);
}
