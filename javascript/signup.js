const form = document.getElementById('form'),
submitBtn = form.querySelector('form button'),
errorText= document.getElementById('error-txt');


form.onsubmit = (e) =>{
    e.preventDefault();

}

submitBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest(); 
    xhr.open("POST", "add_user.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              console.log(data)
              if(data == "success"){
                location.href="chathome.php";
              }else{
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}