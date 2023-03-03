const form = document.querySelector('.typing-area'),
inputField = document.querySelector('.inputField'),
sendBtn = form.querySelector('button');
errorText= document.querySelector(".error-txt");
chatBox = document.getElementById('chat-box');
form.onsubmit = (e) =>{
    e.preventDefault();
}
  
sendBtn.onclick =() =>{
    let xhr = new XMLHttpRequest(); 
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              console.log(data);
              if(data === "success"){
                location.href = 'temp.php';
              }else{
                errorText.style.display = 'block';
                errorText.textContent = data;
              }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);

    inputField.value = " ";
    scrolltoBottom();
    //console.log('this funtion is not active');

}

chatBox.onmouseenter = () =>{
    chatBox.classList.add('active');
}

chatBox.onmouseleave = () =>{
    chatBox.classList.remove('active');
}

setInterval(()=>{
    console.log('this funtion is active');
    //Ajax code to reload without refreshing
    let xhr = new XMLHttpRequest();//create new object
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                data = xhr.response;       
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains('active')){// if the active clas is set, it won't auto scroll
                    
                    scrolltoBottom();
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 500) //create this request every 500ms

function scrolltoBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}