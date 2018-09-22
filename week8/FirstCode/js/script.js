let newsElement = document.getElementById("news");
    let news = {
        "sport":
            {"header":"Messi scored 5 goals","text":"Messi scored 5 goals in last match and became top-scorer of the league"},
        "bussiness":
            {"header":"Dow Jones index has fallen","text":"Dow Jones index has fallen, because of prices for petrol"},
        "politics":
            {"header":"Trump visited UK","text":"Trump started his foreign tour by visiting UK"}
    };
    let sport = document.getElementById('sport');
    let politics = document.getElementById('politics');
    let bussiness = document.getElementById('bussiness');
    let events = [sport,politics,bussiness];
    for(let i =0 ;i<events.length;i++){
        events[i].addEventListener("click",function(){
            let strThis = this.id.toString();
            console.log(strThis);
            newsElement.innerHTML = "<h1>" + news[strThis]["header"] +"</h1><br><p>"+ news[strThis]["text"]+"</p>";
        });
    }