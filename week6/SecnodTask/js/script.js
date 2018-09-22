let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};
let countriesElement = document.getElementById("countries");
let citiesElement = document.getElementById("cities");
for(let i=0;i<countries.length;i++){
    countriesElement.innerHTML += "<option>"+ countries[i] +"</option>"
}
function countryChange(selectObj){
    let index = selectObj.selectedIndex;
    let selected =  selectObj.options[index].text;
    console.log(selected);
    citiesElement.innerHTML = "";
    for(let j=0;j<cities_by_country[countriesElement.value].length;j++){
        citiesElement.innerHTML += "<option>"+ cities_by_country[selected][j] +"</option>"
    }
}
/* Write your code here */
/*
*/
