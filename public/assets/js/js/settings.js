
var queryString = window.location.search;
var lang="en"
  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    lang=urlParams.get('lang')
  }
function getSettings(){
    
var token=JSON.parse(sessionStorage.getItem('token'));
var httprequest= new XMLHttpRequest();
httprequest.open("GET","http://aaaserver-001-site31.ftempurl.com/"+lang+"/api/Settings/CheckVisaAvailable?Index=0&Size=10",true);
httprequest.setRequestHeader('Authorization',`Bearer ${token}`)
httprequest.send();
httprequest.onreadystatechange=function(){
    if(httprequest.status==200 && httprequest.readyState==4){
        var Data=JSON.parse(httprequest.response)
        console.log(Data)
}
}
}
getSettings();