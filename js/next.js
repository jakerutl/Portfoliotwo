var next = document.querySelector('.next'),
    theImages = document.querySelectorAll('.image-holder'),
    theHeading = document.querySelector('.heading'),
    theSubhead = document.querySelector('.main-copy h2'),
    theSeasonText = document.querySelector('.main-copy p')

function nextBtn(){
  // console.log("good to go");
let subImages = document.querySelector('.subImagesContainer');
let objectIndex = dynamicContent[this.id];

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

}


window.addEventListener('click', nextBtn, false );
