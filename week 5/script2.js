function func(event){
   var imgReplace = document.getElementsByTagName("img")[0].src = event.target.src;
}

document.body.addEventListener('click', func);

