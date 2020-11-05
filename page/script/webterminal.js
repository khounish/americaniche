$(document).ready(function () {
    var tabs = $("#tabs").tabs();
        $("#add-tab").click(function () {
            var count = $("#tabs ul li").length + 1;
            $("div#tabs").addTab( count);
        });
    
        $.fn.addTab = function (name) {
        $('ul', this).append('<li><a href="#tabs-' + name + '">' + 'Terminal'+name + '</a><span class="ui-icon ui-icon-close" role="presentation"></span></li>');
        $(this).append("<div id='tabs-" + name + "'>");
    
        $("#tabs-"+name).append("<div id='webterminal" + name + "'>");
        $("#tabs-"+name).append('<hr><br><object type="text/html" data="http://webterminal.americaniche.com" width="1000px" height="700px" style="border-style:solid; padding-left:0px; margin-left:10px"></object></div>');
        $(this).append("</div>");
        $(this).tabs("refresh");
    };
    
    // Close icon: removing the tab on click
    tabs.on( "click", "span.ui-icon-close", function() {
          var panelId = $( this ).closest( "li" ).remove().attr( "aria-controls" );
          $( "#" + panelId ).remove();
          tabs.tabs( "refresh" );
        });
    
    });
    
      function toggleCheck() {
        if(document.getElementById("myCheckbox").checked === true){
       document.getElementById("webterminal").style.display = "block";
      // $("[id^='webterminal']").style.display = "block";
      
      // $("div[id^='webterminal']").style.display = "block";
    
      // console.log($("div[id^='webterminal']"));
    
        } else {
          document.getElementById("webterminal").style.display = "none";
          // $("[id^='webterminal']").style.display = "none";
    
          // $("div[id^='webterminal']").style.display = "none";
    
    
        }
      }