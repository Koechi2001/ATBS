$(document).ready(function() {
	$("#old").hide();
    $("#cart").hide();
    $("#new").show();

    // Initialize the dropdown menu
  $('.dropdown-toggle').dropdown();

    xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                
                if(content != "0")
                {
             	   $("#old").show();
                   $("#cart").show();
             	   $("#new").hide();
             	   content = "Welcome" + content + "!";
             	   $("#wuser").text(content);
             	  }
             	   else
             	   {	
             	   $("#old").hide();
                   $("#cart").hide();
             	   $("#new").show();
             	                	   }
            }
        }
        
        xmlhttp.open("GET","home.php",true);
        xmlhttp.send();      
        
        $("#logout").click(function(){
        	location.href = "logout.php";
        });
        });