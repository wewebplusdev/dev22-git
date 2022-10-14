/*
script upload file js @2022
*/

// ####### Setup #######
const defalutsizeupload = 1; //set max file upload
const config = new Array(1, 10, 50, 128); // SET MB
const imagesize = config[0] * (1024 * 1024); // byte to mb
const filesize = config[3] * (1024 * 1024); // byte to mb

// ####### Variable #######
let file; //this is a global variable and we'll use it inside multiple functions
const AvatardropArea = document.querySelector(".drag-area");
const button_avatar = AvatardropArea.querySelector("#clickuploadProfile");
const avatar = AvatardropArea.querySelector("input");
var formData = new FormData($("#form-career")[0]); //form data

// ####### Start Avatar Profile #######
button_avatar.onclick = () => {
  avatar.click(); //if user click on the button then the input also clicked
};
avatar.addEventListener("change", function() {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  if (file.size > imagesize) {
      Swal.fire({
          icon: "error",
          title: "Max file size is " + config[0] + "MB !",
          html: "ไฟล์ต้องไม่เกิน " + config[0] + "MB !", //message
      });
      return false;
  } else {
    ReaderFile(file, 'avatar'); //calling function
  }
});

//If user Drag File Over AvatardropArea
AvatardropArea.addEventListener("dragover", (event) => {
    event.preventDefault(); //preventing from default behaviour
});

//If user drop File on AvatardropArea
AvatardropArea.addEventListener("drop", (event) => {
    event.preventDefault(); //preventing from default behaviour
    //getting user select file and [0] this means if user select multiple files then we'll select only the first one
    file = event.dataTransfer.files[0];
    ReaderFile(file); //file คือ TEMP ที่ส่งมาจากฟอร์ม
});


function ReaderFile(temp, action) {
  let fileType = temp.type; //getting selected file type
  let validExtensions = ["image/jpeg", "image/jpg", "image/png", "image/gif"]; //adding some valid image extensions in array

  switch (action) {
    case 'avatar':
      if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader(); //creating new FileReader object
        fileReader.onload = () => {
          let fileURL = fileReader.result; //passing user file source in fileURL variable
          $('#img-area').attr('src', fileURL);
        }
        fileReader.readAsDataURL(file.slice(0, imagesize)); //size is set to 20mb
        formData.append("picProfile", temp); //appending file to formData object
        console.log($('#picProfile')[0]);
      }else{
        Swal.fire({
          icon: "error",
          title: "เกิดข้อผิดพลาด !",
          html: "กรุณลองใหม่อีกครั้ง !", //message
        });
      }
      break;
  
    default:
      Swal.fire({
        icon: "error",
        title: "เกิดข้อผิดพลาด !",
        html: "กรุณลองใหม่อีกครั้ง !", //message
      });
      break;
  }
}
// ####### End Avatar Profile #######