/*
script upload file js @2022
*/

// ####### Setup #######
const defalutsizeupload = 1; //set max file upload
const config = new Array(1, 10, 50, 128); // SET MB
const imagesize = config[0] * (1024 * 1024); // byte to mb
const filesize = config[3] * (1024 * 1024); // byte to mb

// ####### Variable #######
let file,validExtensions; //this is a global variable and we'll use it inside multiple functions
var formData = new FormData($("#form-career")[0]); //form data
// Upload Avatar
const AvatardropArea = document.querySelector(".drag-area");
const button_avatar = AvatardropArea.querySelector("#clickuploadProfile");
const avatar = AvatardropArea.querySelector("input");
// Upload File #1
const dropAreaUploadfile_1 = document.querySelector(".-upload-1");
const Uploadfile_1 = dropAreaUploadfile_1.querySelector("input");
// Upload File #2
const dropAreaUploadfile_2 = document.querySelector(".-upload-2");
const Uploadfile_2 = dropAreaUploadfile_2.querySelector("input");
// Upload File #3
const dropAreaUploadfile_3 = document.querySelector(".-upload-3");
const Uploadfile_3 = dropAreaUploadfile_3.querySelector("input");
// Upload File #4
const dropAreaUploadfile_4 = document.querySelector(".-upload-4");
const Uploadfile_4 = dropAreaUploadfile_4.querySelector("input");
// Upload File #5
const dropAreaUploadfile_5 = document.querySelector(".-upload-5");
const Uploadfile_5 = dropAreaUploadfile_5.querySelector("input");
// Upload File #6
const dropAreaUploadfile_6 = document.querySelector(".-upload-6");
const Uploadfile_6 = dropAreaUploadfile_6.querySelector("input");

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
    ReaderFile(file, 'avatar'); //file คือ TEMP ที่ส่งมาจากฟอร์ม
});
// ####### End Avatar Profile #######

// ####### Start Upload File 1 #######
dropAreaUploadfile_1.onclick = () => {
  Uploadfile_1.click(); //if user click on the button then the input also clicked
};
//If user Drag File Over AvatardropArea
dropAreaUploadfile_1.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
});

//If user drop File on AvatardropArea
dropAreaUploadfile_1.addEventListener("drop", (event) => {
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  if (file.size > filesize) {
    Swal.fire({
        icon: "error",
        title: "Max file size is " + config[3] + "MB !",
        html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
    });
    return false;
  } else {
    ReaderFile(file, 'file', 'fileTranscript', '#file-01'); //calling function
  }
});
Uploadfile_1.addEventListener("change", function() {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  if (file.size > filesize) {
      Swal.fire({
          icon: "error",
          title: "Max file size is " + config[3] + "MB !",
          html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
      });
      return false;
  } else {
    ReaderFile(file, 'file', 'fileTranscript', '#file-01'); //calling function
  }
});
// ####### End Upload File 1 #######
// ####### Start Upload File 2 #######
dropAreaUploadfile_2.onclick = () => {
  Uploadfile_2.click(); //if user click on the button then the input also clicked
};
//If user Drag File Over AvatardropArea
dropAreaUploadfile_2.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
});

//If user drop File on AvatardropArea
dropAreaUploadfile_2.addEventListener("drop", (event) => {
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  if (file.size > filesize) {
    Swal.fire({
        icon: "error",
        title: "Max file size is " + config[3] + "MB !",
        html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
    });
    return false;
  } else {
    ReaderFile(file, 'file', 'fileMilitary', '#file-02'); //calling function
  }
});
Uploadfile_2.addEventListener("change", function() {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  if (file.size > filesize) {
      Swal.fire({
          icon: "error",
          title: "Max file size is " + config[3] + "MB !",
          html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
      });
      return false;
  } else {
    ReaderFile(file, 'file', 'fileMilitary', '#file-02'); //calling function
  }
});
// ####### End Upload File 2 #######
// ####### Start Upload File 3 #######
dropAreaUploadfile_3.onclick = () => {
  Uploadfile_3.click(); //if user click on the button then the input also clicked
};
//If user Drag File Over AvatardropArea
dropAreaUploadfile_3.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
});

//If user drop File on AvatardropArea
dropAreaUploadfile_3.addEventListener("drop", (event) => {
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  if (file.size > filesize) {
    Swal.fire({
        icon: "error",
        title: "Max file size is " + config[3] + "MB !",
        html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
    });
    return false;
  } else {
    ReaderFile(file, 'file', 'workexperience', '#file-03'); //calling function
  }
});
Uploadfile_3.addEventListener("change", function() {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  if (file.size > filesize) {
      Swal.fire({
          icon: "error",
          title: "Max file size is " + config[3] + "MB !",
          html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
      });
      return false;
  } else {
    ReaderFile(file, 'file', 'workexperience', '#file-03'); //calling function
  }
});
// ####### End Upload File 3 #######
// ####### Start Upload File 4 #######
dropAreaUploadfile_4.onclick = () => {
  Uploadfile_4.click(); //if user click on the button then the input also clicked
};
//If user Drag File Over AvatardropArea
dropAreaUploadfile_4.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
});

//If user drop File on AvatardropArea
dropAreaUploadfile_4.addEventListener("drop", (event) => {
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  if (file.size > filesize) {
    Swal.fire({
        icon: "error",
        title: "Max file size is " + config[3] + "MB !",
        html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
    });
    return false;
  } else {
    ReaderFile(file, 'file', 'marriage', '#file-04'); //calling function
  }
});
Uploadfile_4.addEventListener("change", function() {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  if (file.size > filesize) {
      Swal.fire({
          icon: "error",
          title: "Max file size is " + config[3] + "MB !",
          html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
      });
      return false;
  } else {
    ReaderFile(file, 'file', 'marriage', '#file-04'); //calling function
  }
});
// ####### End Upload File 4 #######
// ####### Start Upload File 5 #######
dropAreaUploadfile_5.onclick = () => {
  Uploadfile_5.click(); //if user click on the button then the input also clicked
};
//If user Drag File Over AvatardropArea
dropAreaUploadfile_5.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
});

//If user drop File on AvatardropArea
dropAreaUploadfile_5.addEventListener("drop", (event) => {
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  if (file.size > filesize) {
    Swal.fire({
        icon: "error",
        title: "Max file size is " + config[3] + "MB !",
        html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
    });
    return false;
  } else {
    ReaderFile(file, 'file', 'license', '#file-05'); //calling function
  }
});
Uploadfile_5.addEventListener("change", function() {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  if (file.size > filesize) {
      Swal.fire({
          icon: "error",
          title: "Max file size is " + config[3] + "MB !",
          html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
      });
      return false;
  } else {
    ReaderFile(file, 'file', 'license', '#file-05'); //calling function
  }
});
// ####### End Upload File 5 #######
// ####### Start Upload File 6 #######
dropAreaUploadfile_6.onclick = () => {
  Uploadfile_6.click(); //if user click on the button then the input also clicked
};
//If user Drag File Over AvatardropArea
dropAreaUploadfile_6.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
});

//If user drop File on AvatardropArea
dropAreaUploadfile_6.addEventListener("drop", (event) => {
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  if (file.size > filesize) {
    Swal.fire({
        icon: "error",
        title: "Max file size is " + config[3] + "MB !",
        html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
    });
    return false;
  } else {
    ReaderFile(file, 'file', 'other', '#file-06'); //calling function
  }
});
Uploadfile_6.addEventListener("change", function() {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  if (file.size > filesize) {
      Swal.fire({
          icon: "error",
          title: "Max file size is " + config[3] + "MB !",
          html: "ไฟล์ต้องไม่เกิน " + config[3] + "MB !", //message
      });
      return false;
  } else {
    ReaderFile(file, 'file', 'other', '#file-06'); //calling function
  }
});
// ####### End Upload File 6 #######

// ####### Start Function Global #######
function removeFile(ele, target){
  formData.delete(ele);
  // hide html
  $(target).find('.file-return').text("-");
  $(target).hide();
}

function ReaderFile(temp, action, inp, target) {
  let fileType = temp.type; //getting selected file type

  switch (action) {
    case 'avatar':
      validExtensions = ["image/jpeg", "image/jpg", "image/png", "image/gif"]; //adding some valid image extensions in array
      if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader(); //creating new FileReader object
        fileReader.onload = () => {
          let fileURL = fileReader.result; //passing user file source in fileURL variable
          $('#img-area').attr('src', fileURL);
        }
        fileReader.readAsDataURL(file.slice(0, imagesize)); //size is set to 20mb
        formData.append("picProfile", temp); //appending file to formData object
      }else{
        Swal.fire({
          icon: "error",
          title: "เกิดข้อผิดพลาด !",
          html: "ประเภทไฟล์ไม่ถูกต้อง !", //message
        });
      }
      break;

    case 'file':
      validExtensions = [
        "image/jpeg", 
        "image/jpg", 
        "image/png", 
        "application/pdf", 
      ]; //adding some valid file extensions in array
      if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader(); //creating new FileReader object
        fileReader.onload = () => {
          let fileURL = fileReader.result; //passing user file source in fileURL variable
          formData.append(inp, temp); //appending file to formData object
        }
        fileReader.readAsDataURL(file.slice(0, filesize)); //size is set to 20mb
        // show html
        $(target).find('.file-return').text(temp.name);
        $(target).show();
      }else{
        Swal.fire({
          icon: "error",
          title: "เกิดข้อผิดพลาด !",
          html: "ประเภทไฟล์ไม่ถูกต้อง !", //message
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
// ####### End Function Global #######
