function validateForm(){
    let name = document.forms["registration"]["cname"].value;
    let num  = document.forms["registration"]["cno"].value;
    let city  = document.forms["registration"]["c_city"].value;
    let mail  = document.forms["registration"]["cid"].value;
    let pass  = document.getElementById('pwd');
    let add  = document.forms["registration"]["cadd"].value;
    let role  = document.forms["registration"]["role"].value;
    let img1 = document.forms['registration']['idproof'];
    let img2 = document.forms['registration']['licence'];
    let validExt=["jpeg","jpg","png","pdf"];

    if(name.length<12){
        alert("*Error:-  Enter Your Full Name");
        return false;
    }
    if(num.length!=10){
        alert("*Error:- Enter correct number");
        return false;
    }
    if(city.length<3){
        alert("*Error:- Invalid city name");
        return false;
    }
    if((mail.charAt(mail.length-4)!='.') && (mail.charAt(mail.length-3)!='.')){
        alert("*Error:- Invalid . Position");
        return false;
    }
    if(mail.length>50){
        alert("*Error:- Email id length is too long");
        return false;
    }
    if(pass.value.length<8) {
        alert("*Error:- Required aleast 8 character long password");
        return false;
    }
    if(!pass.value.match(/[0-9]/)) {
        alert("*Error:- Required aleast one number");
        return false;
    }
    if(!pass.value.match(/[A-Z]/)) {
        alert("*Error:- Required aleast one uppercase letter");
        return false;
    }
    if(!pass.value.match(/[a-z]/)) {
        alert("*Error:- Required aleast one lowercase letter");
        return false;
    }
    if(!pass.value.match(/[!\@\#\$\&\*\^\?\%\(\)\_\-\+\=\>\<\.\,]/)) {
        alert("*Error:- Required aleast one special character");
        return false;
    }
    if(add.length>300){
        alert("*Error:- Address is too long");
        return false;
    }
    if(role.length>30){
        alert("*Error:- Role Model name is too long");
        return false;
    }

    if(img1.value!=''){
        let img_ext1=img1.value.substring(img1.value.lastIndexOf('.')+1);
        let result1=validExt.includes(img_ext1);

        if(result1==false){
            alert("*Error:- Selected files is not valid");
            return false;
        }
        else{
            if(parseFloat(img1.files[0].size/(1024*1024))>=3){
                alert("*Error:- File size must be smaller than 3 MB. Your current file size is "+ parseFloat(img1.files[0].size/(1024*1024)) );
                return false;
            }
        }
    }else{
        alert("*Error:- No image is selected");
        return false;
    }

    if(img2.value!=''){
        let img_ext2=img2.value.substring(img2.value.lastIndexOf('.')+1);
        let result2=validExt.includes(img_ext2);

        if(result2==false){
            alert("*Error:- Selected files is not valid");
            return false;
        }
        else{
            if(parseFloat(img2.files[0].size/(1024*1024))>=3){
                alert("*Error:- File size must be smaller than 3 MB. Your current file size is "+ parseFloat(img2.files[0].size/(1024*1024)) );
                return false;
            }
        }
    }else{
        alert("*Error:- No image is selected");
        return false;
    }
}