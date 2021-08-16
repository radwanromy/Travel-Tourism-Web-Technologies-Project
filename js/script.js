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


function barishal(){

	const http = new XMLHttpRequest();
	http.open('GET', 'barishal.php', true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('barishal').innerHTML = this.responseText;
		}
	}	
}

function chattogram(){

	const http = new XMLHttpRequest();
	http.open('GET', 'chattogram.php', true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('chattogram').innerHTML = this.responseText;
		}
	}	
}


function khulna(){

	const http = new XMLHttpRequest();
	http.open('GET', 'khulna.php', true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('khulna').innerHTML = this.responseText;
		}
	}	
}

function rajshahi(){

	const http = new XMLHttpRequest();
	http.open('GET', 'rajshahi.php', true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('rajshahi').innerHTML = this.responseText;
		}
	}	
}


function rangpur(){

	const http = new XMLHttpRequest();
	http.open('GET', 'rangpur.php', true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('rangpur').innerHTML = this.responseText;
		}
	}	
}


function mymensingh(){

	const http = new XMLHttpRequest();
	http.open('GET', 'mymensingh.php', true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('mymensingh').innerHTML = this.responseText;
		}
	}	
}


function sylhet(){

	const http = new XMLHttpRequest();
	http.open('GET', 'sylhet.php', true);
	http.send();
	
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('sylhet').innerHTML = this.responseText;
		}
	}	
}