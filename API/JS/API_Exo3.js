function getRandom(){
    try{
        fetch('PHP/API_Exo3.php', {
            method: 'post'
        }).then(function(response){
            return response.json();        
        }).then(function (data){
            UpdateDiv("arenne",data);
        })
    }catch (error){
        console.error(error);
    }

    function UpdateDiv(id,text){
        document.getElementById(id).innerHTML = text;
    }
         
}