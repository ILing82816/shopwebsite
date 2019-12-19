const myForm = document.querySelector('.my-form');
const nameInput = document.querySelector('#Name');
const addInput = document.querySelector('#address');
const emailInput = document.querySelector('#email');
const passInput = document.querySelector('#password');
const phoneInput = document.querySelector('#phone');
const msg = document.querySelector('.msg');

myForm.addEventListener('submit', onSubmit);
//myForm.addEventListener('submit', express);
//myForm.addEventListener('submit', changepage);

function onSubmit(e){
	e.preventDefault();
	if(nameInput.value === ''||addInput.value === ''||emailInput.value === ''||passInput.value === ''||phoneInput.value === ''){
		msg.classList.add('error');
		msg.innerHTML='Please enter all field';
	}else{
		console.log('success');
		check();
		//express();
		//myForm.submit();
	}
}

function check(){
	let xhr = new XMLHttpRequest(); 
    let url = "read_single.php"; 
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-Type", "application/json");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			var myObj = JSON.parse(this.responseText);
			if(myObj.data[0]==null){
				express();
				
			}else{
				msg.classList.add('error');
				msg.innerHTML = 'You are already a member';
			}
		}
	};	
	var addmember = {
		"Name": nameInput.value
	};
	var addmemberJSON = JSON.stringify(addmember);
	xhr.send(addmemberJSON);
}

function express(){
	let xhr = new XMLHttpRequest(); 
    let url = "create.php"; 
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-Type", "application/json");
	xhr.onreadystatechange = function () {
		if (xhr.readyState === 4 && xhr.status === 200) {
			var myObj = JSON.parse(this.responseText);
			msg.classList.add('success');
			msg.innerHTML = 'success to sing up';
			window.setTimeout(changepage, 1500);
			
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
