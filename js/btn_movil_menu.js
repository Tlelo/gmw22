export function btn_movil_menu( modulo, open ){
  const btn_open = document.querySelector( open );
  
  const html_modulo = document.querySelector( modulo );
  
  btn_open.addEventListener("click",function(e){
    if( !html_modulo.classList.contains("open") ){
      html_modulo.classList.add("open")
    }else{
      html_modulo.classList.remove("open")
    }
  })
}