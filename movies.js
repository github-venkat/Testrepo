let counter = 0;
let dcounter = 0;

function lcount() {
    counter++;
    document.querySelector('#likeh').innerHTML = counter;
    
}

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#like').onclick = lcount;

});

