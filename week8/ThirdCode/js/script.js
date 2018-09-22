let data = 
    [{"maker":"Toyota","model":"Camry 50","price":50000},
    {"maker":"Toyota","model":"Carina","price":40000},
    {"maker":"Volkswagen","model":"Tuareg","price":35000},
    {"maker":"Mercedes","model":"C100","price":45000}];
let sortByMaker = document.getElementById('sortByMaker');
let sortByPrice = document.getElementById('sortByPrice');
let load = document.getElementsByTagName('button')[0];
let cards = document.getElementById("cards");
let loading = document.getElementById("loading");
load.addEventListener("click",function(){
    loading.style.display = "block";
    load.textContent = "Items are loaded";
    load.disabled = true;
    setTimeout(function(){
        loading.style.display = "none";
        for(let i =0;i<data.length;i++){
            cards.innerHTML += "<div class='item'><p>" +data[i]["maker"]+ " " + data[i]["model"] +"</p><span>" + data[i]["price"] + "</span></div>";
        }
    },2000);
});
sortByMaker.addEventListener("click",function(){
    data.sort(function(a, b){
    if(a.maker < b.maker) return -1;
    if(a.maker > b.maker) return 1;
    return 0});
    cards.innerHTML = "";
    for(let i =0;i<data.length;i++){
        cards.innerHTML += "<div class='item'><p>" +data[i]["maker"]+ " " + data[i]["model"] +"</p><span>" + data[i]["price"] + "</span></div>";
    }
});
sortByPrice.addEventListener("click",function(){
    data.sort(function(a, b){
        if(a.price < b.price) return -1;
        if(a.price > b.price) return 1;
        return 0;
    });
    cards.innerHTML = "";
    for(let i =0;i<data.length;i++){
        cards.innerHTML += "<div class='item'><p>" +data[i]["maker"]+ " " + data[i]["model"] +"</p><span>" + data[i]["price"] + "</span></div>";
    }
});