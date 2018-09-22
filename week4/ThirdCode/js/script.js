console.log("Hello");
let overlay = document.getElementsByClassName('overlay')[0];
overlay.onclick = function(){
    overlay.style.display = "none";
};
setTimeout(function(){
    overlay.style.display = "none";
},5000);
