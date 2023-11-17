function validatelogin(){
    const username=document.querySelector('.username').value;
    const password=document.querySelector('.pass-word').value;
    if ((username.trim())==''){
      document.querySelector('.usererror').innerHTML="please fill in your username";
    }
    if ((password.trim())==''){
      document.querySelector('.passworderror').innerHTML="please fill in your password";
    }

  }
  
  document.querySelector('.button').addEventListener('click',()=>{
     validatelogin();


  })