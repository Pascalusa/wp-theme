
<div id="popup" class="popup-Dialog">
    <div> <a href="#close" title="Close" class="close">X</a>

          <h4 class="center-align">Mentions Légales</h4>
            <hr style="background-color: black; height: 1px; margin-bottom: 35px;"> 

        <p class="center-align">This is a sample modal box that can be created using the powers of CSS3.</p>
        
    </div>
</div>


              <style>

              .popup-Dialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
        overflow: auto!important;
}
.popup-Dialog:target {
    opacity:1;
    pointer-events: auto;
}
.popup-Dialog > div {
    width: 100%;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    /*https://uigradients.com/*/
    background: #fff;
    /*background: -moz-linear-gradient(#fff, #e7501e);
    background: -webkit-linear-gradient(#fff, #e7501e);
    background: -o-linear-gradient(#fff, #e7501e);*/
}
.close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover {
    background: #e7501e;
}

              </style>
            