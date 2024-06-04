window.document.addEventListener('DOMContentLoaded', () => {

})

const titleInput = document.getElementById("title");
var descriptorInput = document.getElementById("descriptor");
var authNameInput = document.getElementById("authName");
var textarea = document.getElementById("textareaInput");
var errorMessageElement = document.getElementById("errorMessage");
var errorMessageElement1 = document.getElementById("errorMessage1");
var errorMessageElement2 = document.getElementById("errorMessage2");
var errorMessageElement3 = document.getElementById("errorMessage3");

function handleTitleInput() {
  const title = titleInput.value;
  title = title.substring(0, 15);
  console.log("Title:", title);
  changeTitle(title);
  changeCardTitle(title);
}

function handleDescriptorInput() {
  var description = descriptorInput.value;
  description = description.substring(0, 40);
  console.log("Description:", description);
  changeSubTitle(description);
  changeCardSubTitle(description);
}

function handleAuthNameInput() {
  var authorName = authNameInput.value;
  authorName = authorName.substring(0, 15);
  console.log("Author name:", authorName);
  CardName(authorName);
}

titleInput.addEventListener("input", handleTitleInput);
titleInput.placeholder = "Please, enter New Post";

descriptorInput.addEventListener("input", handleDescriptorInput);
descriptorInput.placeholder = "Please, enter any description";

authNameInput.addEventListener("input", handleAuthNameInput);
authNameInput.placeholder = "Please, enter Author name";

// __________________________

const InputAuthorImg = document.getElementById("InputAuthorImg");
const uploadButton = document.getElementById("uploadButton");
const deleteButton = document.getElementById("deleteButton");
const changeButton = document.getElementById("changeButton");
const fileInput = document.getElementById("fileInput");
let imageAuthor;
InputAuthorImg.addEventListener("click", () => {
  fileInput.click();
});

fileInput.addEventListener("change", (event) => {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = () => {
    const imageData = reader.result;
    imageAuthor = imageData;
    InputAuthorImg.style.backgroundImage = `url(${imageData})`;
    changeCardAuthor(imageData);
    InputAuthorImg.innerHTML = "";
    InputAuthorImg.style.borderStyle = "none";
    uploadButton.innerHTML = "";
    deleteButton.style.display = "flex";
    changeButton.style.display = "flex";
  };

  reader.readAsDataURL(file);
});

deleteButton.addEventListener("click", () => {
  InputAuthorImg.style.backgroundImage = "";
  InputAuthorImg.innerHTML = `<img src="img/camera.svg" alt="InputUploadIcon" class="input-icon1" />`;
  deleteButton.style.display = "none";
  changeButton.style.display = "none";
  uploadButton.innerHTML = "<p>Upload</p>";
  InputAuthorImg.style.borderStyle = "dashed";
  changeCardAuthor("");
});

changeButton.addEventListener("click", () => {
  fileInput.value = "";
  fileInput.click();
});

// ___________________________
const InputBackImg = document.getElementById("InputBackImg");
const deleteButton1 = document.getElementById("deleteButton1");
const changeButton1 = document.getElementById("changeButton1");
const config1 = document.getElementById("config1");
const editBoxBack = document.getElementById("editBoxBack");
const fileInputBack = document.getElementById("fileInputBack");
let imageBack;
editBoxBack.style.height = "0";

InputBackImg.addEventListener("click", () => {
  fileInputBack.click();
});

fileInputBack.addEventListener("change", (event) => {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = () => {
    editBoxBack.style.height = "34px";
    const imageData = reader.result;
    imageBack = imageData;
    InputBackImg.style.backgroundImage = `url(${imageData})`;
    changeBackground(imageData);
    InputBackImg.innerHTML = "";
    InputBackImg.style.borderStyle = "none";
    deleteButton1.style.display = "flex";
    changeButton1.style.display = "flex";
    config1.innerHTML = "";
  };

  reader.readAsDataURL(file);
});

deleteButton1.addEventListener("click", () => {
  InputBackImg.style.backgroundImage = "";
  InputBackImg.innerHTML = `
    <div class="input-image_button">
        <img src="img/camera_upload.svg" alt="InputUploadIcon" class="input-icon1" />
    </div>`;
  deleteButton1.style.display = "none";
  changeButton1.style.display = "none";
  InputBackImg.style.borderStyle = "dashed";
  config1.innerHTML = `
  <div class="input-title_text">
      <p>Size up to 10mb. Format: png, jpeg, gif.</p>
  </div>`;
  editBoxBack.style.height = "0";
  changeBackground("");
});

changeButton1.addEventListener("click", () => {
  fileInputBack.value = "";
  fileInputBack.click();
});

// _______________________________
const InputPostImg = document.getElementById("InputPostImg");
const deleteButton2 = document.getElementById("deleteButton2");
const changeButton2 = document.getElementById("changeButton2");
const config2 = document.getElementById("config2");
const editBoxBack1 = document.getElementById("editBoxBack1");
const fileInputPost = document.getElementById("fileInputPost");
editBoxBack1.style.height = "0";
let imagePost;

InputPostImg.addEventListener("click", () => {
  fileInputPost.click();
});

fileInputPost.addEventListener("change", (event) => {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = () => {
    editBoxBack1.style.height = "34px";
    const imageData = reader.result;
    imagePost = imageData;
    InputPostImg.style.backgroundImage = `url(${imageData})`;
    changeBackgroundSmall(imageData);
    InputPostImg.innerHTML = "";
    InputPostImg.style.borderStyle = "none";
    deleteButton2.style.display = "flex";
    changeButton2.style.display = "flex";
    config2.innerHTML = "";
  };

  reader.readAsDataURL(file);
});

deleteButton2.addEventListener("click", () => {
  InputPostImg.style.backgroundImage = "";
  InputPostImg.innerHTML = `
    <div class="input-image_button2">
      <img src="img/camera_upload.svg" alt="InputUploadIcon" class="input-icon1" />
    </div>`;
  deleteButton2.style.display = "none";
  changeButton2.style.display = "none";
  InputPostImg.style.borderStyle = "dashed";
  config2.innerHTML = `
    <div class="input-title_text">
      <p>Size up to 10mb. Format: png, jpeg, gif.</p>
    </div>`;
  editBoxBack1.style.height = "0";
  changeBackgroundSmall("");
});

changeButton2.addEventListener("click", () => {
  fileInputPost.value = "";
  fileInputPost.click();
});

var sampleBigTitle = document.getElementById("sampleBigTitle");
sampleBigTitle.textContent = "New Post";
function changeTitle(text) {
  sampleBigTitle.innerText = text;
}

var sampleBigSubTitle = document.getElementById("sampleBigSubTitle");
sampleBigSubTitle.textContent = "Please, enter any description";
function changeSubTitle(text) {
  sampleBigSubTitle.innerText = text;
}

function changeCardAuthor(img) {
  var CardImageInput = document.getElementById("CardImageInput");
  CardImageInput.style.backgroundImage = "url(" + img + ")";
}

function changeBackground(img) {
  var sampleBigImage = document.getElementById("sampleBigImage");
  sampleBigImage.style.backgroundImage = "url(" + img + ")";
}

function changeBackgroundSmall(img) {
  var sampleBigImage = document.getElementById("sampleSmallImage");
  sampleBigImage.style.backgroundImage = "url(" + img + ")";
}

var cardTitle = document.getElementById("cardTitle");
cardTitle.textContent = "New Post";
function changeCardTitle(text) {
  cardTitle.innerText = text;
}

var cardSubTitle = document.getElementById("cardSubTitle");
cardSubTitle.textContent = "Please, enter any description";
function changeCardSubTitle(text) {
  cardSubTitle.innerText = text;
}

var CardNameInput = document.getElementById("CardNameInput");
CardNameInput.textContent = "Enter author name";
function CardName(text) {
  CardNameInput.innerText = text;
}

// ___________________________

function validateTitle() {
  var titleInput = document.getElementById("title");
  var errorMessageElement = document.getElementById("errorMessage");

  if (titleInput.value.trim() === "") {
    errorMessageElement.textContent = "Title is required.";
    titleInput.style.backgroundColor = "rgba(255, 255, 255, 1)";
    titleInput.style.borderColor = "#E86961";
    return false;
  } else {
    titleInput.style.borderColor = "black";
    errorMessageElement.textContent = "";
    titleInput.style.backgroundColor = "rgba(247, 247, 247, 1)";
    return true;
  }
}

function validateDescriptor() {
  var descriptorInput = document.getElementById("descriptor");
  var errorMessageElement1 = document.getElementById("errorMessage1");

  if (descriptorInput.value.trim() === "") {
    errorMessageElement1.textContent = "Description is required.";
    descriptorInput.style.backgroundColor = "rgba(255, 255, 255, 1)";
    descriptorInput.style.borderColor = "#E86961";
    return false;
  } else {
    descriptorInput.style.borderColor = "black";
    errorMessageElement1.textContent = "";
    descriptorInput.style.backgroundColor = "rgba(247, 247, 247, 1)";
    return true;
  }
}

function validateAuthName() {
  var authNameInput = document.getElementById("authName");
  var errorMessageElement2 = document.getElementById("errorMessage2");

  if (authNameInput.value.trim() === "") {
    errorMessageElement2.textContent = "Author name is required.";
    authNameInput.style.backgroundColor = "rgba(255, 255, 255, 1)";
    authNameInput.style.borderColor = "#E86961";
    return false;
  } else {
    authNameInput.style.borderColor = "black";
    errorMessageElement2.textContent = "";
    authNameInput.style.backgroundColor = "rgba(247, 247, 247, 1)";
    return true;
  }
}

let text;
function validateTextarea() {
  var textarea = document.getElementById("textareaInput");
  var errorMessageElement3 = document.getElementById("errorMessage3");
  text = textarea.value;
  if (textarea.value.trim() === "") {
    errorMessageElement3.textContent = "Correct format is “*****@***.**”";
    textarea.style.borderColor = "#E86961";
    return false;
  } else {
    textarea.style.borderColor = "black";
    errorMessageElement3.textContent = "";
    return true;
  }
}

titleInput.addEventListener("input", function () {
  if (titleInput.value.trim() !== "") {
    errorMessageElement.style.color = "#999999";
    titleInput.style.borderColor = "black";
  }
});

descriptorInput.addEventListener("input", function () {
  if (descriptorInput.value.trim() !== "") {
    errorMessageElement1.style.color = "#999999";
    descriptorInput.style.borderColor = "black";
  }
});


authNameInput.addEventListener("input", function () {
  if (authNameInput.value.trim() !== "") {
    errorMessageElement2.style.color = "#999999";
    authNameInput.style.borderColor = "black";
  }
});

textarea.addEventListener("input", function () {
  if (textarea.value.trim() !== "") {
    errorMessageElement3.style.color = "#999999";
    textarea.style.borderColor = "black";
  }
});

let date;
const inputDataDate = document.getElementById("dateAutor").value;
function saveAndDisplayDate() {
  var inputDate = document.getElementById("dateAutor").value;
  var savedDate = new Date(inputDate);
  var day = savedDate.getDate();
  var month = savedDate.getMonth() + 1;
  var year = savedDate.getFullYear() % 100;
  var formattedDate = `${day}/${month}/${year}`;
  date = formattedDate;
  CardDate(formattedDate);
}
var CardDateInput = document.getElementById("CardDateInput");
CardDateInput.textContent = "4/19/23";
function CardDate(text) {
  CardDateInput.innerText = text;
}
document.getElementById("dateAutor").addEventListener("change", function () {
  saveAndDisplayDate();
});

function validateInputs() {
  var isValidTitle = validateTitle();
  var isValidDescriptor = validateDescriptor();
  var isValidAuthName = validateAuthName();
  var isValidTextarea = validateTextarea();

  if (!isValidTitle) {
    return "Title field is empty!";
  }

  if (!isValidDescriptor) {
    return "Description field is empty!";
  }

  if (!isValidAuthName) {
    return "Author name field is empty!";
  }

  if (!isValidTextarea) {
    return "Textarea field is empty!";
  }

  if (!fileInput.files.length) {
    return "Please upload an image!";
  }

  if (!fileInputBack.files.length) {
    return "Please upload back an image!";
  }

  if (!fileInputPost.files.length) {
    return "Please upload post an image!";
  }

  var inputDate = document.getElementById("dateAutor").value;
  if (!inputDate) {
    return "Please enter a valid date!";
  }

  return null;
}

function handleInput() {
  var errorMessage = validateInputs();
  var CheckErrorContainer = document.getElementById("CheckErrorContainer");

  if (errorMessage) {
    console.error(errorMessage);
    CheckErrorContainer.innerHTML = `<div class="error-box_conteiner">
                    <div class="error-box">
                        <img src="img/alert-circle-red.svg" />
                        <p>Whoops! Some fields need your attention :o</p>
                    </div>
                </div>`;
  } else {
    var title = document.getElementById("title").value;
    var description = document.getElementById("descriptor").value;
    var authorName = document.getElementById("authName").value;
    CheckErrorContainer.innerHTML = `
    <div class="error-box_conteiner1">
                    <div class="error-box">
                        <img src="img/check-circle-green.svg" />
                        <p>Publish Complete!</p>
                    </div>
                </div>`;




    const card_post = {
      title: title,
      subtitle: description,
      content: text,
      author: authorName,
      author_url: imageAuthor,
      publish_date: inputDataDate,
      image_url: imageBack,
      featured: 0,
      card_url: imagePost,
    };


    // console.log(card_post);

    fetch("http://localhost:8001/api.php", {
      method: "post",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(card_post),
    }).then(function (response) {
      if (!response.ok) {
        throw new Error("Bad status code from server.");
      }
      return response.json();
    });
  }
}