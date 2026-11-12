let keys='';document.addEventListener('keydown',e=>{if(e.key.length===1)keys+=e.key;keys=keys.slice(-42);let s=document.querySelector('section');if(s)s.textContent=keys});
