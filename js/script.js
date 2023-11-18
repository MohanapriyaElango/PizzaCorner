let searchBtn =document.querySelector("#search-btn");
let searchForm= document.querySelector(".header .search-form");

searchBtn.onclick=() =>{
    searchBtn.classList.toggle("fa-times");
    searchForm.classList.toggle("active");
    
    menuBtn.classList.remove("fa-times");
    navbar.classList.remove("active");
}

let menuBtn =document.querySelector("#menu-btn");
let navbar= document.querySelector(".header .navbar");

menuBtn.onclick=() =>{
    menuBtn.classList.toggle("fa-times");
    navbar.classList.toggle("active");
    searchBtn.classList.remove("fa-times");
    searchForm.classList.remove("active");
    
}

window.onscroll = () =>{
    searchBtn.classList.remove("fa-times");
    searchForm.classList.remove("active");
    menuBtn.classList.remove("fa-times");
    navbar.classList.remove("active");

}
    

    $(document).ready(function(){
        $('#user-btn').click(function(){
            $(".user-account").addClass('active',5000);
        });
        $('#close-account').click(function(){
            $(".user-account").removeClass('active',5000);
        });
        $('#close-admin').click(function(){
            $(".admin-account").removeClass('active',5000);
        });

        $("#order-btn").click(function(){
            $(".my-orders").addClass("active","slow");
        });
        $("#close-orders").click(function(){
            $(".my-orders").removeClass("active");
        })

        $("#cart-btn").click(function(){
            $(".shopping-cart").addClass("active");
        });
        $("#close-cart").click(function(){
            $(".shopping-cart").removeClass("active");
        });
        $(window).scroll(function(){
            $(".my-orders").removeClass("active");
            $(".shopping-cart").removeClass("active");
        });
    });

