
function hide(){
    let text = document.querySelectorAll(".item .link .text")
    
    let nav = document.getElementById("nav")
    if(nav.style.width === "200px"){
        nav.style.width = "100px";
        for(let i = 0; i < text.length;i++){
            text[i].style.display = "none";
        }
    }else{
        nav.style.width="200px";
        for(let i = 0; i < text.length;i++){
            text[i].style.display = "inline";
        }
    }

   

}