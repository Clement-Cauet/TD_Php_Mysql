var elem = document.getElementById("root");
elem.addEventListener('click', function(){
    elem.innerHTML = "Salut";
});

for(var i=0; i<1; i++){
    var tab = document.getElementsByName("test")[i];
    tab.addEventListener('click', function(){
        tab.innerHTML = "Salut";
    });
}
function test(){
    
}