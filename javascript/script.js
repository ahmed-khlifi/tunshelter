function toggle(){
    var nav = document.getElementById('nav');
    if(nav.style.display == ''){
        console.log('eeee');
        nav.style.display = 'block'
    }else{
        nav.style.display = "";
    }
}