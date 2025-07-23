function validateForm(){
    let mail = document.forms["login"]["name"].value;
    let pass  = document.getElementById('pwd');

    if((mail.charAt(mail.length-4)!='.') && (mail.charAt(mail.length-3)!='.')){
         Swal.fire({
            title: 'Error!',
            text: 'Invalid . Position',
            icon: 'error',
            confirmButtonText: '😢'
        })
        return false;
    }
    if(mail.length>50){
        Swal.fire({
            title: 'Error!',
            text: 'Email id length is too long',
            icon: 'error',
            confirmButtonText: '😢'
        })
        return false;
    }
    if (pass.value.length < 8) {
        Swal.fire({
            title: 'Error!',
            text: 'Required atleast 8 character long password',
            icon: 'error',
            confirmButtonText: '😢'
        })
        return false;
    }
    if (!pass.value.match(/[0-9]/)) {
        Swal.fire({
            title: 'Error!',
            text: 'Required atleast one number',
            icon: 'error',
            confirmButtonText: '😢'
        })
        return false;
    }
    if (!pass.value.match(/[A-Z]/)) {
        Swal.fire({
            title: 'Error!',
            text: 'Required atleast one uppercase letter',
            icon: 'error',
            confirmButtonText: '😢'
        })
        return false;
    }
    if (!pass.value.match(/[a-z]/)) {
        Swal.fire({
            title: 'Error!',
            text: 'Required atleast one lowercase letter',
            icon: 'error',
            confirmButtonText: '😢'
        })
        return false;
    }
    if (!pass.value.match(/[!\@\#\$\&\*\^\?\%\(\)\_\-\+\=\>\<\.\,]/)) {
        Swal.fire({
            title: 'Error!',
            text: 'Required atleast one special character',
            icon: 'error',
            confirmButtonText: '😢'
        })
        return false;
    }
}