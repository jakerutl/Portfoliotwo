(function () {

    function getDesc(){
      const url = './scripts/getAbout.php'

      fetch(url)
        .then((resp) => resp.json())
        .then(function(resp){
          let  about = document.querySelector('.info').innerHTML = resp[0]['about_desc'];
          });
}


window.addEventListener('load',getDesc,false);
})();
