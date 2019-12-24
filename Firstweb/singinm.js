const myForm = document.querySelector('.my-form');
const nameInput = document.querySelector('#Name');
const passInput = document.querySelector('#password');
const msg = document.querySelector('.msg');

myForm.addEventListener('submit', onSubmit);


function onSubmit(e){
	e.preventDefault();
	if(nameInput.value === ''||passInput.value === ''){
		msg.classList.add('error');
		msg.innerHTML='Please enter all field';
	}else{
		console.log('success');
		check();
	}
}

function check(){
	let xhr = new XMLHttpRequest(); 
    let url = "api/manager/read_password.php"; 
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-Type", "application/json");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			var myObj = JSON.parse(this.responseText);
			if(myObj.message=='Post Created'){
				msg.classList.add('success');
				msg.innerHTML = 'success to sing in';
				window.setTimeout(changepage, 1500);
				
			}else{
				msg.classList.add('error');
				msg.innerHTML = 'You enter a wrong Name or password';
			}
		}
	};	
	var addmember = {
		"Name": nameInput.value,
		"password": passInput.value
	};
	var addmemberJSON = JSON.stringify(addmember);
	xhr.send(addmemberJSON);
}

function changepage(){
	myForm.submit()
}