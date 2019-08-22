function validation(){
			var lname = document.getElementById('lname').value;
			var mail = document.getElementById('email').value;
			var mobile = document.getElementById('phone').value;

			if(lname == ""){
				document.getElementById('lastname').innerHTML ="Last Name is Mandatory";
				return false;
			}
			
			//Email fieled is here
			if(mail == ""){
				document.getElementById('emailer').innerHTML =" ** Please Fill the Email Id";
				return false;
			}
			
			//Mobile number fieled is here			
			if(isNaN(mobile)){
				document.getElementById('phonenumber').innerHTML =" ** Please Fill Numbers Only";
				return false;	
			}
			if((mobile.length <10) || (mobile.length > 10)){
				document.getElementById('phonenumber').innerHTML =" ** Please Fill 10 Digit Number";
				return false;
			}
			if(mobile == ""){
				document.getElementById('phonenumber').innerHTML =" ** Please Fill the Phone Number";
				return false;
			}
		}