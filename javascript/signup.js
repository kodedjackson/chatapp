const form = document.querySelector(".signup form"),
submitBtn = form.querySelector('.button input');


errorText= document.querySelector(".error-txt");


form.onsubmit = (e) =>{
 e.preventDefault();

}

submitBtn.onclick =() =>{
    let xhr = new XMLHttpRequest(); 
    xhr.open("POST", "add_user.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              console.log(data)
              if(data == "success"){
                location.href="chats.php";
              }else{
                errorText.textContent = data;
                errorText.style.display = 'block';
                
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
