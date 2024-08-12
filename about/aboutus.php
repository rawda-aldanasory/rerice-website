<style>
  /* Import Google Fonts */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');

  /* Section Styles */
  .section {
    width: 100%;
    padding-top: 100px;
    min-height: 100vh;
    background-color: rgba(6, 74, 42, 0.7);
  }

  /* About Section */
  #about .content-section .title h1,
  #about .content-section .content h3,
  #about .content-section .content p,
  #about .content-section .content .button a,
  #about .content-section .social i {
    color: #ffffff;
  }

  /* About Section Button Hover */
  #about .content-section .content .button a:hover {
    background-color: #4d774e;
    color: #ffffff;
  }

  /* About Section Social Icons Hover */
  #about .content-section .social i:hover {
    color: #ffffff;
  }

  /* Contact Form Section */
  /* Reset Contact Form Styles to Original */
  #contact .screen-header {
    background: #4d4d4f;
  }

  #contact .screen-header-left .screen-header-button {
    background: white;
  }

  #contact .screen-header-button.close {
    background: #ffffff;
  }

  #contact .screen-header-button.maximize {
    background: #ffffff;
  }

  #contact .screen-header-button.minimize {
    background: #ffffff;
  }

  #contact .screen-header-ellipsis {
    background: #999;
  }

  #contact .app-title {
    color: #5cdca3;
  }

  #contact .app-title:after {
    background: #1ced70;
  }

  #contact .app-contact {
    color: #888;
  }

  #contact .app-form-control {
    background: none;
    border: none;
    border-bottom: 1px solid #666;
    color: #ddd;
  }

  #contact .app-form-control::placeholder {
    color: #666;
  }

  #contact .app-form-button {
    color: #ffffff;
    border-radius: 40px;
    border-color: #ffffff;
  }

  #contact .app-form-button:hover {
    border-color: #7cf4d4;
  }

  #contact .credits {
    color: #153527;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 16px;
  }

  #contact .credits-link {
    color: #fff;
  }

  #contact .credits-link:hover {
    color: #7cf4d4;
  }

  #contact .dribbble g {
    stroke: #ffffff;
  }


  /* General Styling */
  *,
  *:before,
  *:after {
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  /* Container */
  .container {
    width: 70%;
    margin: auto;
    padding-top: 100px;
    padding-bottom: 20px;
  }

  /* Content Section */
  .content-section {
    float: left;
    width: 55%;
  }

  .image-section {
    float: right;
    width: 40%;
  }

  .image-section img {
    width: 100%;
    height: auto;
  }

  .content-section .title {
    text-transform: uppercase;
    font-size: 28px;
    color: #000000;
    /* Black text color */
  }

  .content-section .content h3 {
    margin-top: 20px;
    color: #5d5d5d;
    font-size: 21px;
  }

  .content-section .content p {
    margin-top: 10px;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    line-height: 1.5;
  }

  .content-section .content .button {
    margin-top: 30px;
  }

  .content-section .content .button a {
    display: inline-block;
    padding: 12px 40px;
    border: 2px solid #000000;
    /* Black border */
    background-color: transparent;
    color: #ffffff;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    border-radius: 40px;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
  }

  .content-section .content .button a:hover {
    background-color: #164a41;
    /* Dark green on hover */
    color: #ffffff;
    /* White text on hover */
    border-color: #164a41;
    /* Dark green border on hover */
  }

  .content-section .social a {
    color: #ffffff;
    /* Black icon color */
    font-size: 30px;
    padding: 0px 10px;
    transition: color 0.3s ease-in-out;
  }

  .content-section .social a:hover {
    color: #164a41;
    /* Dark green on hover */
  }

  @media screen and (max-width: 768px) {
    .container {
      width: 80%;
      padding-top: 50px;
    }

    .content-section,
    .image-section {
      float: none;
      width: 100%;
      display: block;
    }

    .image-section img {
      display: block;
      margin: auto;
    }

    .content-section .title {
      text-align: center;
      font-size: 19px;
    }

    .content-section .content .button {
      text-align: center;
    }

    .content-section .content .button a {
      padding: 9px 30px;
    }

    .content-section .social {
      text-align: center;
    }
  }

  /* Contact Form Styling */
  .screen {
    position: relative;
    background: #3e3e3e;
    border-radius: 15px;
  }

  .screen-header {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    background: #4d4d4f;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }

  .screen-header-button {
    display: inline-block;
    width: 8px;
    height: 8px;
    margin-right: 3px;
    border-radius: 8px;
    background: white;
  }

  .screen-header-button.close {
    background: #76f48d;
  }

  .screen-header-button.maximize {
    background: #e8e925;
  }

  .screen-header-button.minimize {
    background: #74c54f;
  }

  .screen-body {
    display: flex;
    padding: 50px;
  }

  .screen-body-item {
    flex: 1;
  }

  .screen-body-item.left {
    display: flex;
    flex-direction: column;
  }

  .app-title {
    display: flex;
    flex-direction: column;
    position: relative;
    color: #5cdca3;
    font-size: 26px;
  }

  .app-contact {
    margin-top: auto;
    font-size: 8px;
    color: #888;
  }

  .app-form-group {
    margin-bottom: 15px;
  }

  .app-form-group.message {
    margin-top: 40px;
  }

  .app-form-group.buttons {
    margin-bottom: 0;
    text-align: right;
  }

  .app-form-control {
    width: 100%;
    padding: 10px 0;
    background: none;
    border: none;
    border-bottom: 1px solid #666;
    color: #ddd;
    font-size: 14px;
    text-transform: uppercase;
    outline: none;
    transition: border-color .2s;
  }

  .app-form-control::placeholder {
    color: #666;
  }

  .app-form-control:focus {
    border-bottom-color: #ddd;
  }

  .app-form-button {
    background: none;
    border: 2px solid #000000;
    /* Black border */
    color: #000000;
    /* Black text color */
    font-size: 14px;
    padding: 8px 16px;
    cursor: pointer;
    outline: none;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
  }

  .app-form-button:hover {
    background-color: #164a41;
    /* Dark green on hover */
    color: #ffffff;
    /* White text on hover */
    border-color: #164a41;
    /* Dark green border on hover */
  }

  /* Credits Styling */
  .credits {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    color: gray;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 16px;
  }

  .credits-link {
    display: flex;
    align-items: center;
    color: gray;
    font-weight: bold;
    text-decoration: none;
  }

  .dribbble {
    width: 20px;
    height: 20px;
    margin: 0 5px;
  }

  @media screen and (max-width: 520px) {
    .screen-body {
      flex-direction: column;
      padding: 40px;
    }

    .screen-body-item.left {
      margin-bottom: 30px;
    }

    .app-title {
      flex-direction: row;
    }

    .app-title span {
      margin-right: 12px;
    }
  }
</style>
<div class="section" id="about" style="background-color:#4d774e">
  <div class="container">
    <div class="content-section">
      <div class="title">
        <h1 data-tra="aboutUsHeader" data-aos="zoom-out-up">About Us</h1>
      </div>
      <div class="content" data-aos="fade-up-left">
        <h3 data-tra="whoAreWeHeader">Who are we</h3>
        <p data-tra="companyDescription">We are Re Rice, Egypt's first company recycling agricultural waste into materials for medicines, food, textiles, cardboard, and eco-friendly bioplastics.</p>
        <div class="button">
          <a href="OPenEdetors/index.php" style="border-radius: 40px; background-color:#ffffff;" target="_blank">Read More</a>
        </div>
      </div>
      <div class="social" data-aos="fade-right" style="margin-left: 10px;">
        <a href="https://www.facebook.com/profile.php?id=61563455975354&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
  <div class="video-section text-center">
    <video src="about/vidio.mp4" class="object-fit-fil center"  width="350" height="300" controls></video>
  </div>
</div>

<!-- contact form -->

<div class="background" id="contact" data-aos="fade-up-right">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span data-tra="contact">CONTACT  <span data-tra="us">US</span></span>
          
          </div>
          <div class="app-contact text-white" data-tra="contactInfo">CONTACT INFO : +2010********</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <!-- <input class="app-form-control" placeholder="NAME" value="" data-tra="namePlaceholder"> -->
            </div>
            <div class="app-form-group">
              <!-- <input class="app-form-control" placeholder="EMAIL" data-tra="emailPlaceholder"> -->
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="CONTACT NO" data-tra="contactNoPlaceholder" value="rerise@gmail.com">
            </div>
            <div class="app-form-group message">
              <!-- <input class="app-form-control" placeholder="MESSAGE" data-tra="messagePlaceholder" disabled> -->
            </div>
            <div class="app-form-group buttons ">
              <!-- <button class="app-form-button" data-tra="cancelButton">CANCEL</button> -->
              <!-- <button class="app-form-button" data-tra="sendButton">SEND</butto  n> -->
              <p class="text-white">Email Us</p> <a href="mailto:hr.rerise@gmail.com"class="text-white btn-success rounded p-2">Click Here</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>