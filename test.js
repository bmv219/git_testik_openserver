let x = ik.childNodes[1].tagName;

let k = document.querySelector('.shapka').getAttribute('data-attr');

if (k) alert("Регистрация прошла успешно.");

dv.onclick = function(event) {
    let smenaphoto = event.target.closest('a');
    if (!smenaphoto) return;
    smenafot(smenaphoto.href, smenaphoto.title);
    event.preventDefault();
  }	
  function smenafot(href, title) {
      od.style.display = 'block';
      pervoe_foto.src = href;
      pervoe_foto.alt = title;
  }
  document.onclick = function(event) {
      if (event.target.tagName != 'IMG') {
          od.style.display = 'none';            //Надо переделать, мне не нравиться, пока не могу придумать как изменить
      }
    //  if (event.target != ikon1) {
      //regist.style.display = 'none';
     // }
  }
  
  vito.onclick = function() {
      alert('Я каждый день учусь чему то новому и стараюсь ежедневно обновлять эту страничку. На данный момент я изучаю PHP и React.');
  }



  if (x == 'H3') {
    document.forms.zak.style.display='none';
  } else {
    document.forms.zak.style.display='block';
    ikon1.style.display='none';
  }
ikon1.onclick = function() {
    if (regist.style.display == 'block') {
        regist.style.display = 'none';
      } else regist.style.display = 'block';
}


loa.onfocus = function() {
  if (x == 'H3') {
    window.scrollTo(0,0);
    alert('Для комментариев нужно выполнить вход');
    loa.blur();
  }
}



