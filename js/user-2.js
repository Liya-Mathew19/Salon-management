// JavaScript Document

function createCheck(){
	if(createCheckMandatory() == false){
		return false;
	}
	
	if(createCheckSize() == false){
		 return false;
	}
	if(checkName() == false){
		 return false;
	}
	if(checkHouseName() == false){
		 return false;
	}
	if(checkPlace() == false){
		 return false;
	}
	if(checkPrimaryLocation() == false){
		 return false;
	}
	if(checkYof() == false){
		 return false;
	}
	if(checkPhoneNumber() == false){
		 return false;
	}
	
	var confirmDecision = confirm("You are going to save the data. Do you want to continue?");
	return 	confirmDecision;
}

function updateCheck(){
	if(createCheckMandatory() == false){
		return false;
	}
	
	if(createCheckSize() == false){
		 return false;
	}
	
	if(checkName() == false){
		 return false;
	}
	if(checkHouseNumber() == false){
		 return false;
	}
	if(checkPlace() == false){
		 return false;
	}
	if(checkPrimaryLocation() == false){
		 return false;
	}
	if(checkYof() == false){
		 return false;
	}
	if(checkPhoneNumber() == false){
		 return false;
	}
	
	var confirmDecision=confirm("You are going to modify the data. Do you want to continue?");
	return 	confirmDecision;
}

function deleteCheck(){
	var confirmDecision=confirm("This is an irreversible process and it will delete all related data. Do you want to continue?");
	return 	confirmDecision;
}

function createCheckMandatory(){
	
	var createCheckMandatoryStatus=true;
	if(document.getElementsByName("userName")[0].value == ""){
		document.getElementById("userNameSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("userNameSpan").innerHTML = "";
	}
	
	if(document.getElementsByName("password")[0].value == ""){
		document.getElementById("passwordSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("passwordSpan").innerHTML = "";
	}
	
	if(document.getElementsByName("name")[0].value == ""){
		document.getElementById("nameSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("nameSpan").innerHTML = "";
	}	
	
	if(document.getElementsByName("houseName")[0].value == ""){
		document.getElementById("houseNameSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("houseNameSpan").innerHTML = "";
	}	
	if(document.getElementsByName("place")[0].value == ""){
		document.getElementById("placeSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("placeSpan").innerHTML = "";
	}	
	
	if(document.getElementsByName("primaryLocation")[0].value == ""){
		document.getElementById("primaryLocationSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("primaryLocationSpan").innerHTML = "";
	}
	if(document.getElementsByName("yof")[0].value == ""){
		document.getElementById("yofSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("yofSpan").innerHTML = "";
	}
	
	
	if(document.getElementsByName("phone")[0].value == ""){
		document.getElementById("phoneSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("phoneSpan").innerHTML = "";
	}
		
	if(document.getElementsByName("photo")[0].value == ""){
		document.getElementById("photoSpan").innerHTML = "This field is mandatory";
		createCheckMandatoryStatus=false;
	}else{
		document.getElementById("photoSpan").innerHTML = "";
	}
	
	return createCheckMandatoryStatus;
}

function createCheckSize(){
	
	var createCheckSizeStatus=true;
	if(document.getElementsByName("userName")[0].value.length > 30){
		document.getElementById("userNameSpan").innerHTML = "Maximum character size is 30";
		createCheckSizeStatus=false;
	}else{
		document.getElementById("userNameSpan").innerHTML = "";
	}
	
	if(document.getElementsByName("password")[0].value.length > 30){
		document.getElementById("passwordSpan").innerHTML = "Maximum character size is 30";
		createCheckSizeStatus=false;
	}else{
		document.getElementById("passwordSpan").innerHTML = "";
	}
	
	if(document.getElementsByName("name")[0].value.length > 30){
		document.getElementById("nameSpan").innerHTML = "Maximum character size is 30";
		createCheckSizeStatus=false;
	}else{
		document.getElementById("nameSpan").innerHTML = "";
	}	
	
	if(document.getElementsByName("houseName")[0].value.length > 30){
		document.getElementById("houseNameSpan").innerHTML = "Maximum character size is 30";
		createCheckSizeStatus=false;
	}else{
		document.getElementById("houseNameSpan").innerHTML = "";
	}	
	if(document.getElementsByName("place")[0].value.length > 20){
		document.getElementById("placeSpan").innerHTML = "Maximum character size is 20";
		createCheckSizeStatus=false;
	}else{
		document.getElementById("placeSpan").innerHTML = "";
	}	
	if(document.getElementsByName("primaryLocation")[0].value.length > 30){
		document.getElementById("primaryLocationSpan").innerHTML = "Maximum character size is 30";
		createCheckSizeStatus=false;
	}else{
		document.getElementById("primaryLocationSpan").innerHTML = "";
	}	
	if(document.getElementsByName("yof")[0].value.length > 2){
		document.getElementById("yofSpan").innerHTML = "Maximum character size is 2";
		createCheckSizeStatus=false;
	}else{
		document.getElementById("yofSpan").innerHTML = "";
	}	
	
	if(document.getElementsByName("phone")[0].value.length > 10){
		document.getElementById("phoneSpan").innerHTML = "Minimum & Maximum digit size is 10";
		createCheckSizeStatus=false;
	}else{
		document.getElementById("phoneSpan").innerHTML = "";
	}
	
	return createCheckSizeStatus;
}


function checkName() {
	
	var value = document.getElementsByName("name")[0].value;
	var elementId = "nameSpan";
	var errorMessage = "Name should be alphabets";
	var regex = /^[a-zA-Z\s]+$/;
	
	var validationStatus=true;
	if( ! value.match(regex)) {
		document.getElementById(elementId).innerHTML = errorMessage;
		validationStatus = false;
    } else {
		document.getElementById(elementId).innerHTML = "";
    }  
	return validationStatus;
} 
function checkHouseName() {
	
	var value = document.getElementsByName("houseName")[0].value;
	var elementId = "houseNameSpan";
	var errorMessage = "House Name should be alphabets";
	var regex = /^[a-zA-Z\s]+$/;
	
	var validationStatus=true;
	if( ! value.match(regex)) {
		document.getElementById(elementId).innerHTML = errorMessage;
		validationStatus = false;
    } else {
		document.getElementById(elementId).innerHTML = "";
    }  
	return validationStatus;
} 
function checkPlace() {
	
	var value = document.getElementsByName("place")[0].value;
	var elementId = "placeSpan";
	var errorMessage = "Place Name should be alphabets";
	var regex = /^[a-zA-Z\s]+$/;
	var validationStatus=true;
	if( ! value.match(regex)) {
		document.getElementById(elementId).innerHTML = errorMessage;
		validationStatus = false;
    } else {
		document.getElementById(elementId).innerHTML = "";
    }  
	return validationStatus;
} 
function checkPrimaryLocation() {
	
	var value = document.getElementsByName("primaryLocation")[0].value;
	var elementId = "primaryLocationSpan";
	var errorMessage = "Primary Location should be alphabets";
	var regex = /^[a-zA-Z\s]+$/;
	var validationStatus=true;
	if( ! value.match(regex)) {
		document.getElementById(elementId).innerHTML = errorMessage;
		validationStatus = false;
    } else {
		document.getElementById(elementId).innerHTML = "";
    }  
	return validationStatus;
} 
function checkYof() {
	
	var value = document.getElementsByName("yof")[0].value;
	var elementId = "yofSpan";
	var errorMessage = "Year of Experience should be 1 or 2 digits";
	var regex =/^\d{1}|[1-9]\d{1}$/;
	var validationStatus=true;
	if( ! value.match(regex)) {
		document.getElementById(elementId).innerHTML = errorMessage;
		validationStatus = false;
    } else {
		document.getElementById(elementId).innerHTML = "";
    }  	
	return validationStatus;
} 
function checkPhoneNumber() {
	
	var value = document.getElementsByName("phone")[0].value;
	var elementId = "phoneSpan";
	var errorMessage = "Phone number should be 10 digits";
	var regex = /\d{10}$/;
	var validationStatus=true;
	if( ! value.match(regex)) {
		document.getElementById(elementId).innerHTML = errorMessage;
		validationStatus = false;
    } else {
		document.getElementById(elementId).innerHTML = "";
    }  
	return validationStatus;
} 