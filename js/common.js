let tggoleBar = document.getElementById('tggoleBar');
let navbarSupportedContent = document.getElementById('navbarSupportedContent');

tggoleBar.onclick=()=>{
    navbarSupportedContent.classList.toggle('show_box');
    navbarSupportedContent.remove.toggle('show');
    
}


// navbar scrolling


const header = document.querySelector('#stop_nav')
   const setTop = header.offsetTop;
   console.log(setTop);
   window.addEventListener('scroll', ()=>{
	if(window.pageYOffset>setTop){
		header.classList.add('bg_navBar');
	}else{
		header.classList.remove('bg_navBar');
	}
   });