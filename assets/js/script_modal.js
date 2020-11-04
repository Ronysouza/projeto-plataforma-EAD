var fechar_modal_process = document.getElementById('fechar_modal_process')
var abrir_modal_process = document.getElementById('abrir_modal_process')
 




fechar_modal_process.addEventListener('click',function(e){
       
    $('.modal_process').animate({
      opacity:'toggle'
    }
    ) 
    
   document.querySelector('iframe').remove()
})







abrir_modal_process.addEventListener('click',function(e){
    e.preventDefault()      
   

    $('.modal_process').animate({
       width:'toggle'    
       

    },500)    
})



document.getElementById('fechar_modal_important').addEventListener('click',function(e){
    e.preventDefault()

    $('.modal_important').animate({
        opacity:'toggle',
        width:'toggle'    
        
 
     },500)

})


 

 document.getElementById('important').addEventListener('click',function(e){
     e.preventDefault()

  

     $('.modal_important').animate({
        opacity:'toggle'
      },1000 ) 







})



