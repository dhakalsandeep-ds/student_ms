
function hide(){
    let text = document.querySelectorAll(".item .link .text")
    let header = document.getElementsByClassName("header")
    let main = document.getElementsByClassName("main")[0]
    console.log(header[0])
    let dashSpan = document.querySelector(
        "nav span"
    )
    console.log(dashSpan)
    let nav = document.getElementById("nav")
    if(nav.style.width === "200px"){
        nav.style.width = "100px";
        for(let i = 0; i < text.length;i++){
            text[i].style.display = "none";
        }
        header[0].style.marginLeft = "100px";
        header[0].style.width ="calc(100% - 100px)"
        main.style.marginLeft="90px"
        

    }else{
        nav.style.width="200px";
        for(let i = 0; i < text.length;i++){
            text[i].style.display = "inline";
        }
        header[0].style.marginLeft = "200px";
        header[0].style.width = "calc(100% - 200px)";
        main.style.marginLeft = "190px";
        dashSpan.style.marginLeft = "0";

        
    }

   

}