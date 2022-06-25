var queryString = window.location.search;
var lang = "en";
var urlParams = new URLSearchParams(queryString);
if (urlParams.get('lang')) {
    lang = urlParams.get('lang')
}

if (sessionStorage.getItem("token")) {
    var user = localStorage.getItem("userName")
    document.getElementById("accountLog").innerHTML = "<a onclick=logOut() title=login id=login href=account_page.html><span>Logout</span></a>"
    document.getElementById("checkOutWord").innerHTML = "<a title=Checkout href=checkout.html><span>Checkout</span></a> "
    document.getElementById("userName").innerHTML = "<p>Welcome" + " " + user + "</p>"
    document.getElementById("myAccount").innerHTML = "<a class=current-open data-toggle=dropdown aria-haspopup=true aria-expanded=false href=#><span>My Account</span> <i class=fa fa-angle-down></i> </a> <ul class=dropdown-menu  role=menu> <li><a href=profile.html>Profile</a></li> <li><a href=wishlist.html>Wishlist</a></li><li><a href=orders_list.html>Order List</a></li><li><a href=about_us.html>About us</a></li><li onclick=getUserAddress()><a>My Address</a></li><li><a href=addPayment.html>Add Payment</a></li><li><a href=Settings.html>Settings</a></li></ul>"
} else {
    document.getElementById("accountLog").innerHTML = "<a title=login id=login href=account_page.html><span>Login</span></a> "
}

function searchbtn() {
    var searchValue = document.getElementById("searchinp").value;

    window.location.replace("search.html?search=" + searchValue);
}


function getNotif() {
    var token = JSON.parse(sessionStorage.getItem('token'));
    var httprequest = new XMLHttpRequest();
    httprequest.open("GET", "http://aaaserver-001-site31.ftempurl.com/" + lang + "/api/Notifications/GetUserNotifications?index=0&size=10");
    httprequest.setRequestHeader('Authorization', `Bearer ${token}`)
    httprequest.send();
    httprequest.onreadystatechange = function () {
        if (httprequest.status == 200 && httprequest.readyState == 4) {
            var Data = JSON.parse(httprequest.response)
            notif = "";
            notif += `<i class="fa fa-bell"></i><span class="cart-total">` + Data.allCount + `</span>`
            document.getElementById("iconNum").innerHTML = notif;
            var notificationContent = JSON.parse(httprequest.response).items
            console.log(Data)
            console.log(notificationContent)
            displayNoti(notificationContent)
        }

    }

}

getNotif();

function displayNoti(Data) {
    notif = "";
    for (i = 0; i < Data.length; i++) {

        notif += ` <li class="item odd"> <a href="shopping_cart.html" title="Product title here" class="product-image"><img src="images/products/product-1.jpg" alt="html Template" width="65"></a>
         <p class="product-name"><a href="shopping_cart.html">` + Data[i].name + `</a> </p>
         <strong>1</strong> x <span class="price">$20.00</span> </div>
     </li>`
    }
    document.getElementById("Notifcation").innerHTML = notif;
}

function logOut() {
    sessionStorage.removeItem("token")
    document.getElementById("userName").innerHTML = "Welcome" + Data.fullName
}


function getUserAddress() {
    if (navigator.geolocation) { //check if geolocation is available
        navigator.geolocation.getCurrentPosition(function (position) {
            console.log(position);
            console.log(position.coords.latitude)
            localStorage.setItem("latitude", position.coords.latitude)
            localStorage.setItem("longitude", position.coords.longitude)
            console.log(position.coords.longitude)
            $.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + position.coords.latitude + "," + position.coords.longitude + "&sensor=false&key=AIzaSyDIqJcBF6B03QbYJIMzop-V6OKZ0Bo7IGs", function (data) {
                console.log(data);
            })
            window.location.replace("http://127.0.0.1:5500/getAddress.html")
        });
    } else {
        console.log("notsub")
    }

}


function getzones() {
    var token = JSON.parse(sessionStorage.getItem('token'));
    var httprequest = new XMLHttpRequest();
    httprequest.open("GET", "http://aaaserver-001-site31.ftempurl.com/" + lang + "/api/Zones/GetZones?index=0&Size=10");
    httprequest.setRequestHeader('Authorization', `Bearer ${token}`)
    httprequest.send();
    httprequest.onreadystatechange = function () {
        if (httprequest.status == 200 && httprequest.readyState == 4) {
            var Data = JSON.parse(httprequest.response).items
            //  console.log(Data.name)
            console.log(Data)
            diplayzone(Data)


        }


    }

}

getzones();

function diplayzone(User) {
    userDe = "";
    for (i = 0; i < User.length; i++) {


        userDe += `<i class="fa fa-map-marker"  style="margin-right:10px"></i><li id=` + User[i].id + ` onclick="changeZone(this.id)" style="display:inline-block" class=""><a style="color:#000082; title="Zone" ><span>` + User[i].name + `</span></a></li>

        `;
    }
    document.getElementById("zones").innerHTML = userDe;
}

function changeZone(event) {

    var token = JSON.parse(sessionStorage.getItem('token'));

    fetch("http://aaaserver-001-site31.ftempurl.com/" + lang + "/api/User/ChangeCurrentUserZone/" + event, {
        method: 'PUT',
        headers: {
            "Authorization": `Bearer ${token}`,

        }
    }).then(function (response) {
        console.log(response.status); // Will show you the status
        if (!response.ok) {
            throw new Error("HTTP status " + response.status);

        }

        return response.json();


    })

        .then(function (data) {
            getProfile();
            window.location.replace(hostname + "/profile.html");


        })

}
