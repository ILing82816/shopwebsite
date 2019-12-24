const myForm = document.querySelector('.my-form');
const nameInput = document.querySelector('#Name');
const addInput = document.querySelector('#address');
const emailInput = document.querySelector('#email');
const passInput = document.querySelector('#password');
const phoneInput = document.querySelector('#phone');
const msg = document.querySelector('.msg');

myForm.addEventListener('submit', onSubmit);

function onSubmit(e){
	e.preventDefault();
	if(nameInput.value === ''||addInput.value === ''||emailInput.value === ''||passInput.value === ''||phoneInput.value === ''){
		msg.classList.add('error');
		msg.innerHTML='Please enter all field';
	}else{
		console.log('success');
		express();
	}
}

function express(){
	let xhr = new XMLHttpRequest(); 
    let url = "api/user/update.php"; 
	xhr.open("PUT", url, true);
	xhr.setRequestHeader("Content-Type", "application/json");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			var myObj = JSON.parse(this.responseText);
			if(myObj.message=='Post Updated'){
				//express();
				msg.classList.add('success');
				msg.innerHTML = 'success to update information';
				window.setTimeout(changepage, 1500);
				
			}else{
				msg.classList.add('error');
				msg.innerHTML = 'You enter wrong name';
			}
		}
	};	
	var addmember = {
		"Name": nameInput.value,
		"address": addInput.value,
		"email": emailInput.value,
		"password": passInput.value,
		"phone": phoneInput.value
	};
	var addmemberJSON = JSON.stringify(addmember);
	xhr.send(addmemberJSON);
}

function changepage(){
	myForm.submit()
}
