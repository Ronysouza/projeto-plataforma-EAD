var menu = document.querySelector('.banner_menu')
var banner_video = document.querySelector('.banner_video')
var fechar =  document.querySelector('.fechar')
var topo = document.querySelector('.topo')
var menu_mobile = document.querySelector('.menu_mobile')
var menu_mobile_float = document.querySelector('.menu_mobile_float')
var menu_painel = document.querySelector('.menu_painel');
var menu_painel_into = document.querySelector('.menu_painel_into');
var mostar_senha = document.querySelector('#mostrar');
var senha = document.querySelector('#senha');
 






 fechar.addEventListener('click',function(){
   if(menu.style.display =='none'){
   	menu.style.display ='block';
   fechar.innerHTML = '	FECHAR MENU';
   banner_video.style.width = '65%';


   }else{
   	menu.style.display ='none';
   		fechar.innerHTML = 'ABRIR MENU';
   		banner_video.style.width = '100%';
   }

 	

 });




menu_painel.addEventListener('click',function(){
      
      
      
      if(menu_painel_into.style.display === 'none'){
         menu_painel_into.style.display ='block'

      }else{
        menu_painel_into.style.display = 'none'
      }

       

 });






 


 


   mostar_senha.addEventListener('click',function(e){
    e.preventDefault();

   var att = senha.getAttribute('type')
      if(att = 'password'){
 
       senha.setAttribute('type','text');

        }

    
 })



 menu_mobile.addEventListener('click',function(){
         
         if(menu_mobile_float.style.display == 'none'){
                menu_mobile_float.style.display = 'block';
         }else{
          menu_mobile_float.style.display = 'none';
         } 

 });




