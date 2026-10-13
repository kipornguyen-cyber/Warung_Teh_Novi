import './bootstrap';
const nav=document.querySelector('#nav'),hamb=document.querySelector('#hamb');
hamb?.addEventListener('click',()=>nav?.classList.toggle('open'));
document.querySelectorAll('#nav a').forEach(a=>a.addEventListener('click',()=>nav?.classList.remove('open')));
const buttons=document.querySelectorAll('.filters button'),cards=document.querySelectorAll('.card');
buttons.forEach(btn=>btn.addEventListener('click',()=>{buttons.forEach(b=>b.classList.remove('active'));btn.classList.add('active');const f=btn.dataset.filter;cards.forEach(c=>c.classList.toggle('hidden',f!=='all'&&c.dataset.cat!==f));}));
const obs=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('show');obs.unobserve(e.target)}}),{threshold:.1});document.querySelectorAll('.reveal').forEach(e=>obs.observe(e));
const secs=[...document.querySelectorAll('main section[id]')],links=[...document.querySelectorAll('#nav>a:not(.order)')];const so=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting)links.forEach(l=>l.classList.toggle('active',l.getAttribute('href')==='#'+e.target.id))}),{rootMargin:'-45% 0px -45% 0px'});secs.forEach(s=>so.observe(s));
