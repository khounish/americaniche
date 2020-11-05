<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body>
<div id="tabs">
  <ul>
    <li ><a href="#tabs-1">Terminal1</a>
    <!-- <span class="ui-icon ui-icon-close" role="presentation"></span> -->
    </li>
    <span> <button id="add-tab" style="{background: darkgrey;height: 39px;border-radius: 142px;}">Add terminal</button></span>
  </ul>
 <div id="tabs-1">
  <div id="webterminal">
      <hr><br>
      <object type="text/html" data="http://webterminal.americaniche.com" width="1000px" height="700px" style="border-style:solid; padding-left:30px; margin-left:150px">
      </object>
    </div>
  </div>
</div>
</body>
</html>