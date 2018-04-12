(function(){

  var theImages = document.querySelectorAll('.image-holder'),
      theHeading = document.querySelector('.heading'),
      theSubhead = document.querySelector('.main-copy h2'),
      theSeasonText = document.querySelector('.main-copy p');
      // nextBtn = document.querySelector('.next'),
      // prevBtn = document.querySelector('.prev');



var dynamicContent = null;
      function getPortfolio(){
        const url = './scripts/getPortfolio.php'

        fetch(url)
          .then((resp) => resp.json())
          .then(function(resp){
            dynamicContent = resp;
            changeElements.call(document.querySelector('#cat_1'));
            });
      }
      window.addEventListener('load',getPortfolio,false);

      function changeElements(){
        let subImages = document.querySelector('.subImagesContainer');
        let objectIndex = dynamicContent[this.id];
        // let currentIndex = currentIndex + 1;
        while(subImages.firstChild){
          subImages.removeChild(subImages.firstChild);
        }

        objectIndex.forEach(function(images, index) {
          let newSubImg = document.createElement('img');
          newSubImg.classList.add('thumb');
          newSubImg.src = "images/thumb-" + objectIndex[index].image_path.replace('mp4','png'); //replaces mp4 extensions with jpg
          newSubImg.dataset.index = index;
          newSubImg.addEventListener('click', function() {popLightbox(index, objectIndex);}, false);
          subImages.appendChild(newSubImg);

        });

        theSubhead.firstChild.nodeValue = index;
        theSubhead.classList.add(this.id);
        appliedClass =  this.id;

}

    theImages.forEach(function(image, index){
      image.addEventListener('click', changeElements, false);
    });


 function popLightbox(currentIndex, currentObject){
   // document.ontouchmove = function(e){ e.preventDefault(); }
   // document.body.style.overflow = "hidden";

   let lightbox = document.querySelector('.lightbox');
   let video = lightbox.querySelector('video');
   let lightboxImg = lightbox.querySelector('img');

   if(currentObject[currentIndex].cat_id === "1"){
     video.classList.remove('hidden');
     video.muted = false;
     lightboxImg.classList.add('hidden');
     video.src = "videos/"+currentObject[currentIndex].image_path;
   }else{
     video.classList.add('hidden');
     lightboxImg.classList.remove('hidden'); //remove .hidden if we added it
     lightboxImg.src = "images/" + currentObject[currentIndex].image_path;
}
   let lightboxDesc = lightbox.querySelector('p');
   let lightboxClose = document.querySelector('.close-lightbox');
   let lightboxTitle = lightbox.querySelector('h1');

  lightbox.style.display = 'block';
  lightboxImg.src = "images/" + currentObject[currentIndex].image_path;
  lightboxDesc.innerHTML = currentObject[currentIndex].image_desc;
  lightboxTitle.innerHTML = currentObject[currentIndex].image_title;
  lightboxClose.addEventListener('click', closeLightbox, false);


  // lightbox.addEventListener('click', closeLightbox, false);
  let nextButton = lightbox.querySelector('#next');
  let prevButton= lightbox.querySelector('#prev');

  nextButton.addEventListener('click', function(){
    if(currentIndex + 1 >= currentObject.length){
      currentIndex = 0;
    }else{
    currentIndex ++;
    }
   changeLightboxContent(currentIndex , currentObject);
  }, false);

  prevButton.addEventListener('click', function(){
      if(currentIndex - 1 < 0){
        currentIndex = currentObject.length - 1;
      }else{
        currentIndex --;
      }
     changeLightboxContent(currentIndex , currentObject);
    }, false);

  function changeLightboxContent(currentIndex, currentObject){
     let lightbox = document.querySelector('.lightbox');
     let video = lightbox.querySelector('video');
     let lightboxImg = lightbox.querySelector('img');

     if(currentObject[currentIndex].cat_id === "1"){
       video.classList.remove('hidden');
       video.muted = false;
       lightboxImg.classList.add('hidden');
       video.src = "videos/"+currentObject[currentIndex].image_path;
     }else{
       video.classList.add('hidden');
       lightboxImg.classList.remove('hidden'); //remove .hidden if we added it
       lightboxImg.src = "images/" + currentObject[currentIndex].image_path;
    }
     let lightboxDesc = lightbox.querySelector('p');
     let lightboxTitle = lightbox.querySelector('h1');

    lightbox.style.display = 'block';
    lightboxImg.src = "images/" + currentObject[currentIndex].image_path;
    lightboxDesc.innerHTML = currentObject[currentIndex].image_desc;
    lightboxTitle.innerHTML = currentObject[currentIndex].image_title;
  }

  function closeLightbox(){
    document.ontouchmove = function(e){ return true; }
    lightbox.style.display = 'none';
    video.muted = true
    document.body.style.overflow = "auto";
    lightbox.querySelector('img').src = "";
    lightbox.querySelector('p').innerHTML = "";
    lightbox.querySelector('h1').innerHTML = "";

  }

 }

})();
