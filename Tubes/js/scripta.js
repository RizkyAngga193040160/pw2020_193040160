const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

//hilangkan tombol cari
tombolCari.style.display = 'none';

//event ketika menuliskan sesuatu
keyword.addEventListener('keyup', function () {

   //ajax
   //xmlhttprequest
   /*const xhr = new XMLHttpRequest();

   xhr.onreadystatechange = function(){
       if(xhr.readystate == 4 && xhr.status == 200){
           container.innerHTML = xhr.responseText;
       }
   };

   xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
   xhr.send();*/

   //Fetch()
   fetch('ajax/ajax_caria.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));

});