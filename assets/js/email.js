function sendEmail(){
    Email.send({
    SecureToken : "72dc82ea-82dc-4a23-895a-5378b7527218",
    To : 'aakashrathva241@gmail.com',
    From : document.getElementById('email').value,
    Subject : document.getElementById('subject').value,
    Body : "Message :" + document.getElementById('message').value + "___email :" +  document.getElementById('email').value + "___Name :" +  document.getElementById('name').value 
    }).then(
   message => alert(message)
   );
}
