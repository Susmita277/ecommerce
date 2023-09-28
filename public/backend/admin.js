
var layouts = document.querySelectorAll('.pages');
layouts.forEach(function (layout) {
  layout.addEventListener('click', function () {
    layout.classList.toggle('show-sidebar');
  });

});

// image upload
let imageaddress = "";
let imageContainer = document.querySelector('.image-container');
let imagelist = [];
function addimage(event) {
  imageaddress = URL.createObjectURL(event.target.files[0]);
  imagelist.push(imageaddress);
}
// delete button
// let deletebutton=document.querySelector(".fa-trash");
// deletebutton.addEventListener('click',function(){
//   alert("Would you like to delete this?");
// });


// refresh button of product indexpage
// let refresh=document.querySelector(".fa-rotate");
// refresh.addEventListener('click',function(){
//   location.reload();
// });



// image preview
let defaultImage = document.querySelector('.default-image');
let previewImageContainer = document.querySelector('.banner_image');
function previewImage(event) {
  const imageFiles = event.target.files[0];
  const imageAddress = URL.createObjectURL(imageFiles);
  // if the image address is not empty before updating the src attribute
  previewImageContainer.src = imageAddress;
  previewImageContainer.style.display="block";
  defaultImage.style.display = "none";
};
let imageInputBox = document.getElementById('imageupload');
let deletebutton=document.querySelector('.delete_button')
deletebutton.addEventListener('click',()=>{
  imageInputBox.value = "";
  previewImageContainer.src = "";
  defaultImage.style.display = "block";
  previewImageContainer.style.display="none";

})