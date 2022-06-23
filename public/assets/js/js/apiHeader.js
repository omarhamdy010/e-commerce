var eng="http://aaaserver-001-site31.ftempurl.com/en/api/"

// var eng="http://aaaserver-001-site31.ftempurl.com/en/api/";

var url=window.location.href.split("?")[0]

var x="<a style=margin-right:5px href='"+url+"?lang=en'>English</a> <a href='"+url+"?lang=ar'>Arabic</a>"

document.getElementById("langua").innerHTML=x
var queryString = window.location.search;

  var urlParams = new URLSearchParams(queryString);
  if(urlParams.get('lang')){
    
  eng = "http://aaaserver-001-site31.ftempurl.com/"+urlParams.get('lang')+"/api/" 
  }

  
// function english(){
//      eng="http://aaaserver-001-site31.ftempurl.com/en/api/";
//      document.URL+"?/lang=en"
    
// }
// function arabic(){
//      eng="http://aaaserver-001-site31.ftempurl.com/ar/api/";
   
// }
