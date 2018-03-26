window.onload = init;

function init(){
    
var enterWeb = document.getElementById("button");
  document.getElementById("button").addEventListener("click", myFunction);

    function myFunction() {
        enterWeb.setAttribute("class","header");
        enterWeb.setAttribute("id","");
}
    

var xhr = new XMLHttpRequest();
xhr.open("GET", 'get_tweets.php', true);
xhr.send(null);

xhr.onload = function() {
	if (xhr.status == 200) {

		var tweets = JSON.parse(xhr.responseText);
		console.log(tweets);
	}
}
}