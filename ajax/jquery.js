if (window.jQuery) {
  let kn = ik.childNodes[1].tagName;
  let v = '';
  let b = 3;
  let a = 0;
  function podgruzka() {
    $.ajax(
      {
        url: "ajax/pp.php",
        success: function(result) {
          let z = JSON.parse(result);
          for (a;(a!==b)&&(a<z.length); a++) {
            $('#podgr').before('<span>'+ z[a].niks +'</span><span class="tt">'+ z[a].data +'</span><p align="justify">'+ z[a].comment +'</p>');
          if (a==z.length-1) {
            v='stop';
            comme.style.display = 'none';
            break;
          } 
          comme.style.display = 'block';
          }
        }
      }
    )
  }

  comme.onclick = function() {
    v='';
    window.scrollBy(0,-1);
    b+=3;
    comme.style.display = 'none';
  };

function control() {
  if (v==='stop') return;
  let windowRelativeBottom = document.documentElement.getBoundingClientRect().bottom;
  if (windowRelativeBottom < document.documentElement.clientHeight) {
    setTimeout(()=>podgruzka(),500);
  };
};

function cam() {
window.addEventListener('scroll', control);
control();
};

if(kn != 'H3') cam();
}