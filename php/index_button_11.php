<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background: #e0e5ec;
  }
  h1 {
    position: relative;
    text-align: center;
    color: #353535;
    font-size: 50px;
    font-family: "Cormorant Garamond", serif;
  }
  
  p {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    text-align: center;
    font-size: 18px;
    color: #676767;
  }
  .frame {
    width: 90%;
    margin: 40px auto;
    text-align: center;
  }
  button {
    margin: 20px;
  }
  .custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
     box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
    outline: none;
  }
  
  .btn-11 {
    border: none;
    background: rgb(251,33,117);
      background: linear-gradient(0deg, rgba(251,33,117,1) 0%, rgba(234,76,137,1) 100%);
      color: #fff;
      overflow: hidden;
  }
  .btn-11:hover {
      text-decoration: none;
      color: #fff;
  }
  .btn-11:before {
      position: absolute;
      content: '';
      display: inline-block;
      top: -180px;
      left: 0;
      width: 30px;
      height: 100%;
      background-color: #fff;
      animation: shiny-btn1 3s ease-in-out infinite;
  }
  .btn-11:hover{
    opacity: .7;
  }
  .btn-11:active{
    box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
                -4px -4px 6px 0 rgba(116, 125, 136, .2), 
      inset -4px -4px 6px 0 rgba(255,255,255,.2),
      inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
  }
  
  
  @keyframes shiny-btn1 {
      0% { -webkit-transform: scale(0) rotate(45deg); opacity: 0; }
      80% { -webkit-transform: scale(0) rotate(45deg); opacity: 0.5; }
      81% { -webkit-transform: scale(4) rotate(45deg); opacity: 1; }
      100% { -webkit-transform: scale(50) rotate(45deg); opacity: 0; }
  }
    </style>
</head>
<body>

     <div class="frame">
      <button class="custom-btn btn-11">Read More<div class="dot"></div></button>
     </div>
     

</body>
</html>