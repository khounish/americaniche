<html>
  <head>
    <title>Assignment</title>
    <style>
    input[type="checkbox"] {
      margin:10px;
      position:relative;
      width:100px;
      height:28px;
      -webkit-appearance: none;
      background: linear-gradient(0deg, #333, red);
      outline: none;
      border-radius: 20px;
      box-shadow: 0 0 0 4px #353535, 0 0 0 5px #3e3e3e, inset 0 0 10px rgba(0,0,0,1);
    }

    input:checked[type="checkbox"]:nth-of-type(1) {
      background: linear-gradient(0deg, #e67e22, #f39c12);
      box-shadow: 0 0 0 4px #353535, 0 0 0 5px #3e3e3e, inset 0 0 10px rgba(0,0,0,1);
    }

    input:checked[type="checkbox"]:nth-of-type(2) {
      background: linear-gradient(0deg, #70a1ff, #1e90ff);
      box-shadow: 0 0 0 4px #353535, 0 0 0 5px #3e3e3e, inset 0 0 10px rgba(0,0,0,1);
    }

    input[type="checkbox"]:before {
      content:'';
      position:absolute;
      top:0;
      left:0;
      width:60px;
      height:28px;
      background: linear-gradient(0deg, #000, white);
      border-radius: 20px;
      box-shadow: 0 0 0 1px #232323;
      transform: scale(.98,.96);
      transition:.5s;
    }

    input:checked[type="checkbox"]:before {
      left:40px;
    }

    input[type="checkbox"]:after{
      content:'';
      position:absolute;
      top:calc(50% - 2px);
      left:70px;
      width:4px;
      height:4px;
      background: linear-gradient(0deg, #6b6b6b, #000);
      border-radius: 50%;
      transition:.5s;
    }

    input:checked[type="checkbox"]:after {
      left:100px;
    }

    #heading{
      background-color:rgba(36, 83, 179);
      height:70px;
      font-size: 30px;
    }

    #toggle{
      float:right;
    }
    #a{
      float:right;
    }

    #webterminal{
      display:none;
    }
    img{
      float:left;
    }
    </style>
    <script>
    function toggleCheck() {
    if(document.getElementById("myCheckbox").checked === true){
   document.getElementById("webterminal").style.display = "block";
    } else {
      document.getElementById("webterminal").style.display = "none";
    }
  }
    </script>
  </head>

  <body>

    <img src="p.gif" height="70px">


    <div id="heading">
      <h1 style="text-align:center; color:white">Assignment 1</h1>
    </div>


    <div id="questions">

      <div id="toggle">
        <input type="checkbox" id="myCheckbox" onchange="toggleCheck()" name="">
    </div>
      <div id="a"><h3>webterminal</h3></div>

      </div>
      <lr>
      <br><br>
      <h3>Questions</h3>
      <ol>
        <li>Print " Welcome to day 2 session " on default stdout device</li>
        <li>Print " Today is Tuesday" on a file and print back the same on stdout</li>
        <li>Read " 100" into a variable and print it on default stdout device</li>
        <li>what is the differnce while storing "100" into a variable and printing it back</li>
        <li>create 5 empty files and show the latest file in ascending or descending order</li>
        <li>Create a folder called backup at landing point , change your location from landing point to Kurukshtra_Training/Php . Sitting at same location copy the files created at Assigment 2 step 11 to the created backup folder .
      </li>  <li>Setup a process so that daily before logout/exit from working shell it will do the copy the 4 files mentione in step 1 to backup folder created in step 1
      </li>
      </ol>
    </div>

    <div id="webterminal">
      <hr><br>
      <object type="text/html" data="http://webterminal.americaniche.com" width="65%" height="45%" style="border-style:solid; padding-left:30px; margin-left:130px">
      </object>
    <h1></h1>
    </div>
  </body>
</html>
