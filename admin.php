<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Oxygen&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./style/admin_panel.css" />
  <title>admin</title>
  <script src="functional-panel.js" defer></script>
</head>
<body>
    <header>
        <div class="header-conteiner">
          <div class="header-logo">
            <img src="img/Logo Inversed.svg" alt="logo escape" />
          </div>
          <div class="container-logout">
            <img class="user-avatar" src="img/user-avatar.svg" alt="avatar" />
            <img class="logout" src="img/logout.svg" alt="logout" />
          </div>
        </div>
        </div>
    </header>
    <div>
        <div class="admin-conteiner">
            <div class="newpost-wrapper">
                <div class="newpost-wrapper_text">
                    <p class="newpost_title">New Post</p>
                    <span class="newpost_subtitle DescritpionSmall">
                        <span>Fill out the form bellow and publish your article</span>
                    </span>
                </div>
                <button class="newpost-button" id="publishButton" onclick="handleInput()">
                    <span class="newpost-button_title Body">
                        <span>Publish</span>
                    </span>
                </button>
            </div>
            <div id="CheckErrorContainer"></div>
            <div class="admin-cards">
                <div class="admin-main-information">
                    <div class="main-information-title H2">
                        <span>Main Information</span>
                    </div>
                    <div class="admin-form-wrapper">
                        <div class="admin-form1">

                            <div class="input-title">
                                <div class="input-title_text">
                                    <p>Title</p>
                                </div>
                                <input class="input_field" maxlength="15" id="title">
                                <div id="errorMessage" class="errorMasage"></div>
                            </div>

                            <div class="input-title">
                                <div class="input-title_text">
                                    <p>Short description</p>
                                </div>
                                <input class="input_field" maxlength="40" id="descriptor">
                                <div id="errorMessage1" class="errorMasage"></div>
                            </div>

                            <div class="input-title">
                                <div class="input-title_text">
                                    <p>Author name</p>
                                </div>
                                <input class="input_field" maxlength="15" id="authName">
                                <div id="errorMessage2" class="errorMasage"></div>
                            </div>

                            <div class="input-upload-conteiner">
                                <div class="input-title_text">
                                    <p>Author Photo </p>
                                </div>
                                <div class="input-upload">
                                    <input type="file" id="fileInput" style="display: none;">
                                    <button class="input-upload_icon" id="InputAuthorImg">
                                        <img src="img/camera.svg" alt="InputUploadIcon" class="input-icon1" />
                                    </button>
                                    <div class="input-upload-button_text" id="uploadButton">
                                        <p>Upload</p>
                                    </div>
                                    <div id="changeButton" class="active-button">
                                        <img src="img/camera.svg" />
                                        <p class="upload-text">Upload New</p>
                                    </div>
                                    <div id="deleteButton" class="active-button">
                                        <img src="img/trash-red.svg" />
                                        <p class="delete-text">Remove</p>
                                    </div>

                                </div>
                            </div>

                            <div class="input-date">
                                <div class="input-title_text">
                                    <p>Publish Date</p>
                                </div>
                                <div class="date-block">
                                    <input type="date" class="input_field" value="" id="dateAutor">
                                </div>
                            </div>

                            <div class="input-image">
                                <div class="input-title_text">
                                    <p>Hero Image </p>
                                </div>
                                <div class="input-image-upload">
                                    <input type="file" id="fileInputBack" style="display: none;">
                                    <button class="input-image_icon" id="InputBackImg">
                                        <div class="input-image_button">
                                            <img src="img/camera_upload.svg" alt="InputUploadIcon" class="input-icon1" />
                                            <div class="input-upload-button_text">
                                                
                                            </div>
                                        </div>
                                    </button>
                                    <div id="editBoxBack">
                                        <div class="edit-box-back" id="editBoxBack">
                                            <div id="changeButton1" class="active-button">
                                                <img src="img/camera.svg" />
                                                <p class="upload-text">Upload New</p>
                                            </div>
                                            <div id="deleteButton1" class="active-button">
                                                <img src="img/trash-red.svg" />
                                                <p class="delete-text">Remove</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-image-config" id="config1">
                                        <div class="input-title_text">
                                            <p>Size up to 10mb. Format: png, jpeg, gif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="input-image">
                                <div class="input-title_text">
                                    <p>Hero Image </p>
                                </div>
                                <div class="input-image-upload">
                                    <input type="file" id="fileInputPost" style="display: none;">
                                    <button class="input-image_icon edit2" id="InputPostImg">
                                        <div class="input-image_button2">
                                            <img src="img/camera_upload.svg" alt="InputUploadIcon" class="input-icon1" />
                                            <div class="input-upload-button_text">
                                                <p></p>
                                            </div>
                                        </div>
                                    </button>
                                    <div id="editBoxBack1">
                                        <div class="edit-box-back">
                                            <div id="changeButton2" class="active-button">
                                                <img src="img/camera.svg" />
                                                <p class="upload-text">Upload New</p>
                                            </div>
                                            <div id="deleteButton2" class="active-button">
                                                <img src="img/trash-red.svg"" />
                                                <p class="delete-text">Remove</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-image-config" id="config2">
                                        <div class="input-title_text">
                                            <p>Size up to 10mb. Format: png, jpeg, gif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="admin-form2">
                            <div class="form-preview">
                                <div class="form-preview_text">
                                    <p>Article preview</p>
                                </div>
                                <div class="page-preview-wrapper">
                                    <div class="page-preview">
                                        <div class="admin-dots">
                                            <img src="img/Ellipse 3.png" alt="." class="admin-dot1" />
                                            <img src="img/Ellipse 3.png" alt="." class="admin-dot2" />
                                            <img src="img/Ellipse 3.png" alt="." class="admin-dot3" />
                                        </div>
                                        <div class="wrapper-samle">
                                            <div class="sample-big-coneiner">
                                                <div class="sample-big-title">
                                                    <p id="sampleBigTitle"></p>
                                                </div>
                                                <div class="sample-big-subtitle">
                                                    <p id="sampleBigSubTitle"></p>
                                                </div>
                                            </div>
                                            <div class="sample-big-image" id="sampleBigImage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blure-block"></div>
                                <div class="blure-block2"></div>
                            </div>

                            <div class="card-preview">
                                <div class="blure-block3"></div>
                                <div class="blure-block4"></div>
                                <div class="form-preview_text">
                                    <p>Post card preview</p>
                                </div>
                                <div class="card-preview-wrapper">
                                    <div class="card-preview-conteiner">
                                        <div class="card-conteiner">
                                            <div class="card-image" id="sampleSmallImage"></div>
                                            <div class="card-line"></div>
                                            <div class="card-title">
                                                <p class="card-title__name" id="cardTitle"></p>
                                                <p class="card-title__description" id="cardSubTitle"></p>
                                            </div>
                                            <div class="card-line"></div>
                                            <div class="card-footer-conteiner">
                                                <div class="card-img" id="CardImageInput"></div>
                                                <p class="card-name" id="CardNameInput"></p>
                                                <p class="card-date" id="CardDateInput"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="admin-content">
                    <div class="admin-content_text">
                        <p>Content</p>
                    </div>
                    <div class="admin-content-wrapper">
                        <div class="input-title_text">
                            <p>Post content (plain text)</p>
                        </div>
                        <textarea class="input-block" placeholder="Type anything you want ..." id="textareaInput"></textarea>
                        <div id="errorMessage3" class="errorMasage"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>