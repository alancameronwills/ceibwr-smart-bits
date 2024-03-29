function ceibwr_hideHeader() {
  setInterval(()=>{
    let st = window.scrollY;
    let show = hide = false;
    if (window.oldscroll && st > window.oldscroll + 10) {
       show = true;
    } else if (window.oldscroll) {if (st < window.oldscroll - 10) {
      hide = true;}
    }
    if (show) {if (window.oldHeaderShowing) 
       show = false;
    }
    if (hide) {if (!window.oldHeaderShowing) 
       hide = false;
    }
    if (hide || show) {
       let head = document.querySelector("header.wp-block-template-part");
       if (head) {
         if (hide) { head.classList.remove("hide-header"); }
         else {head.classList.add("hide-header");}
       }
       window.oldHeaderShowing = show;
    }
    window.oldscroll = st;   
  },250);
}

window.onload = ()=>{
   ceibwr_hideHeader();
   let img = document.querySelector("img[data-object-fit='cover']");
   if (img) {
         let alt = img.getAttribute("alt");
         if (alt) {
           let matches = alt.match(/[0-9]+% +[0-9]+%/);
           if (matches) {
              img.style.objectPosition = matches[0];
           }
         }
   }

}