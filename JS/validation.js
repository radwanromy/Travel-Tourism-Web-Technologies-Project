		
function dhaka(){

	const http = new XMLHttpRequest();
	http.open('GET', 'dhaka.php', true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('dhaka').innerHTML = this.responseText;
		}
	}	
}
function validate(){
            
			let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
            let day = document.getElementById('day').value;
			let month =document.getElementById('month').value;
			let year = document.getElementById('year').value;
            let gender = document.myForm.gender.value;
            let pp = document.forms["myForm"]["image"].value;
            
            //Name Validation
			 if(username == ''){
				alert('Name: Null value');
			}
            else if(username.length<2 && (username>='A' && username<='Z' || username>='a' && username<='z')){
                    alert('Username: Contains at least two words');
                    }
            else if(username >='0'  && username<='9' || username=='~' || username=='!' || username=='@' || username =='#' || username=='$' || username=='%' || username=='^' || username=='&' || username=='*' ||username=='()'|| username=='/' ){
                    alert('Name: Can contain a-zor A-Zor dot(.) or dash(-)');
                    }
            else if(username>='0' && username<='9'){
                    alert('Name: Must be starts with letter');
                    }
            //Email Validation
            if(email  != ""){
				document.getElementById('head1').innerHTML = email;
			}else{
				alert('Email: Null value');
			} 
            //Gender Validation
           if(gender == ""){
                 alert("Gender: At least one of them has to be selected");
                   // return false;
			}  
            //Date of Birth Validation
            if(day == "" || month == "" || year == ""){
				alert("Date of Birth: Cannot be empty");
				//return false;
			}
			if((day > 0 && day <= 31) || (month >= 1 && month <= 12) 
			|| (year >= 1900 && year <= 2016)){
				alert("Date of Birth: Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)");
				//return false;
			} 
            //Profile Picture Validation
            if(pp == ""){
				alert("Profile Picture: Please, select a picture.");
				return false;
			}
		}

function ajax(){
            let email = document.getElementById('email').value;
	        const http = new XMLHttpRequest();
			http.open('POST', '../controller/emailCheck.php', true);
			http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			http.send('email='+email);

			http.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('emailMsg').innerHTML = this.responseText;
				}else{
					document.getElementById('emailMsg').innerHTML = "";
				}
				
			}	
        }
        const json = getAllUser();
        const data = JSON.stringify(json);

        /*let name = document.getElementById('name').value;
        const http = new XMLHttpRequest();
        http.open('GET', `server.php?name=${name}`, true);
        http.send();

        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('result').innerHTML = this.responseText;
            }
        }*/

        let name = document.getElementById('name').value;
        const http = new XMLHttpRequest();
        http.open('POST', `../controller/nameCheck.php`, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send(`mydata=${data}`);
        http.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                //document.getElementById('result').innerHTML = this.responseText;
                //alert(this.responseText);
                let data = JSON.parse(this.responseText);
                document.getElementById('result').innerHTML = data.name;
            }
        }
        function f1(){
			document.getElementsByTagName('a')[0].style.display = 'inline';
			
		}

		
		function emailValidity()
      {
      	var email = document.getElementById('email').value;
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/emailCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('email='+email);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('emailMsg').innerHTML = this.responseText;
				}else{
					document.getElementById('emailMsg').innerHTML = "";
				}
				
			}	
        }
    }
    }