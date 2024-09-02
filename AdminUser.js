$(document).ready(function() {
	$("#add").show();
	
	$("#ad").click(function(){
	var username = document.getElementById("username2").value;	
	var firstname = document.getElementById("firstname2").value;	
	var middlename = document.getElementById("middlename2").value;	
	var lastname = document.getElementById("lastname2").value;	
	var email = document.getElementById("email").value;	
	var tel = document.getElementById("tel").value;	
	var gender = document.getElementById("gender").value;	
	var birthday = document.getElementById("birthday").value;	
	var password = document.getElementById("pwd1").value;	
	
	
	
	xmlhttp = new XMLHttpRequest();	
	xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var content = xmlhttp.responseText;
                
                if(content != "0")
                {
             	   alert(content);
             	   
             	  }
             	   else
             	   {	
             	   alert("User added!");
             	   $(':input','#addf')
 		 .not(':button, :submit, :reset, :hidden')
  		.val('');
             	   }
            }
        }
        
        xmlhttp.open("GET","AdminUserAdd.php?username="+username+"&firstname="+firstname+"&middlename="+middlename+"&lastname="+lastname+"&email="+email+"&cellphone="+tel+"&gender="+gender+"&birthday="+birthday+"&password="+pwd1,true);
        xmlhttp.send();      
        
	});
	
	
	
	$("#a").click(function(){
		$("#add").show();
	});
});