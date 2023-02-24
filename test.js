let x = ik.childNodes[1].tagName;
let y = document.querySelector('.massa').getAttribute('data-attr');
let h = document.querySelector('.massa1').getAttribute('data-attr');
let j = document.querySelector('.massa2').getAttribute('data-attr');
let k = document.querySelector('.shapka').getAttribute('data-attr');

let yyy;
let hhh;
let jjj;

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




if (h) {
  y = y.slice(3, -2);
  yyy = y.split('","'); 
  h = h.slice(3, -2);
  hhh = h.split('","'); 
  j = j.slice(3, -2);
  jjj = j.split('","');
}

function stop() {
  v = '';
  window.scrollBy(0,-1);
}

let d = 2;
let a = 0;
let v = '';
function podgruzka() {
  while(a < hhh.length && v === '') {
    let windowRelativeBottom = document.documentElement.getBoundingClientRect().bottom;
    if (windowRelativeBottom > document.documentElement.clientHeight) break;
    podgr.insertAdjacentHTML("beforeend", `<p>${yyy[a]}</p><p>${jjj[a]}</p><p>${hhh[a]}</p>`);
    if (a == d) {
      v = 'stop';
      d+=3;
      } 
      a++;
      if(a==hhh.length) stopo.style.display = 'none';
  }
}
window.addEventListener('scroll', podgruzka);
podgruzka();
       
