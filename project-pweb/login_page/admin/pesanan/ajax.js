var keyword = document.getElementById('search');
var container = document.getElementById('contain');

keyword.addEventListener('keyup', function(){
    
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText 
        }
    }

    xhr.open('GET', 'ajax/data.php?keyword=' + keyword.value , true);
    xhr.send();

})
