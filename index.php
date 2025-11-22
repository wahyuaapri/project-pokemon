<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Pokédex — Glass Landing (Bootstrap 5)</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



<script>
  // REFRESH BUTTON ACTION
  document.getElementById("refreshBtn").addEventListener("click", () => {
    location.reload();
  });
</script>


<script>
// SIMPLE THEME SWITCHER
const toggle = document.getElementById('themeToggle');
toggle.addEventListener('click', () => {
  if(document.body.getAttribute('data-theme') === 'light'){
    document.body.removeAttribute('data-theme');
  } else {
    document.body.setAttribute('data-theme','light');
  }
});
</script>



<style>
  
  :root{
    --bg:#071022;
    --card-bg: rgba(255,255,255,0.04);
    --glass-border: rgba(255,255,255,0.06);
    --muted: #b8c6e6;
    --accent: #7ad0ff;
    --glass-blur: 8px;
    --glass-radius: 18px;
    --shadow: 0 6px 18px rgba(2,6,23,0.6);
  }
  [data-theme="light"]{
    --bg:#f5f8fb;
    --card-bg: rgba(255,255,255,0.85);
    --glass-border: rgba(10,14,24,0.06);
    --muted:#495057;
    --accent:#0066cc;
    --shadow: 0 6px 32px rgba(10,14,24,0.08);
  }
  

  html,body{height:100%}
  body{
    
    background: linear-gradient(180deg,var(--bg), #031027 140%);
    color: #eef6ff;
    font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    -webkit-font-smoothing:antialiased;
    -moz-osx-font-smoothing:grayscale;
    padding:2rem 1rem;
  }

  /* Header / hero */
  .hero{
    display:flex;
    gap:1rem;
    align-items:center;
    justify-content:space-between;
    flex-wrap:wrap;
    margin-bottom:1.5rem;
  }
  .brand{
    display:flex;
    gap:.8rem;
    align-items:center;
  }
  .logo{
    width:56px;
    height:56px;
    border-radius:14px;
    background:linear-gradient(135deg,var(--accent), #6bd5ff 60%);
    box-shadow: var(--shadow);
    display:grid;
    place-items:center;
    color:#012;
    font-weight:800;
    font-family:Poppins, Inter;
    font-size:20px;
  }
  .hero h1{margin:0; font-size:1.25rem; font-weight:700}
  .hero p{margin:0; color:var(--muted); font-size:.95rem}

  /* controls */
  .controls{
    display:flex;
    gap:.6rem;
    align-items:center;
  }
  .search-wrap{
    min-width:220px;
    max-width:420px;
    width:40vw;
  }
  .glass{
    background: var(--card-bg);
    border: 1px solid var(--glass-border);
    border-radius: var(--glass-radius);
    backdrop-filter: blur(var(--glass-blur));
    padding: .7rem;
    box-shadow: var(--shadow);
  }

  /* grid */
  #grid{
    margin-top:1rem;
  }
  .text-muted{
    color: white !important;
  }
  .poke-card{
    cursor:pointer;
    transition: transform .18s ease, box-shadow .18s ease;
    overflow:visible;
  }
  .poke-card:hover{
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(2,6,23,0.45);
  }
  .poke-card .card-body{padding:.75rem}
  .poke-sprite{
    width:100%;
    height:140px;
    display:block;
    object-fit:contain;
    user-select:none;
    -webkit-user-drag:none;
    transition: transform .25s ease;
  }
  .poke-card:hover .poke-sprite{
    transform: translateY(-6px) scale(1.02);
  }

  /* type badges */
  .type-badge{
    font-size:11px;
    font-weight:700;
    padding:5px 8px;
    border-radius:999px;
    text-transform:capitalize;
    color:#072;
    display:inline-block;
  }
  .badge-wrap{min-height:24px}

  /* modal */
  .modal-content{
  background: var(--card-bg);          /* mengikuti tema gelap/terang */
  border-radius: 18px;
  border: 1px solid var(--glass-border);
  backdrop-filter: blur(var(--glass-blur));
  -webkit-backdrop-filter: blur(var(--glass-blur));
  box-shadow: var(--shadow);
  color: inherit;
}

.btn-close {
  filter: invert(1) brightness(200%);
}

  .modal-img{
    width:100%;
    max-width:320px;
    display:block;
    margin:0 auto;
  }
  .stat-name{font-size:.78rem; text-transform:uppercase; color:var(--muted)}
  .evo-img{
    width:84px; height:84px; object-fit:contain;
    background: rgba(255,255,255,0.02);
    border-radius:12px;
    padding:.35rem;
  }

  /* skeleton */
  .skeleton{
    background:linear-gradient(90deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.06) 50%, rgba(255,255,255,0.03) 100%);
    background-size: 200% 100%;
    animation: shimmer 1.4s linear infinite;
  }
  @keyframes shimmer{0%{background-position:-200% 0}100%{background-position:200% 0}}

  /* responsive tweaks */
  @media (max-width:767px){
    .poke-sprite{height:110px}
    .logo{width:48px;height:48px;font-size:18px}
    .hero h1{font-size:1.02rem}
  }

  /* custom type colors (light text where needed) */
  .t-fire{background:#ffb86b;color:#3b1500}
  .t-water{background:#7cc4ff;color:#00243d}
  .t-grass{background:#9be89b;color:#042a07}
  .t-electric{background:#ffd86b;color:#2b1700}
  .t-psychic{background:#ffa3e0;color:#330022}
  .t-normal{background:#cfcfcf;color:#0a0a0a}
  .t-rock{background:#b8a073;color:#081004}
  .t-ground{background:#e6c99a;color:#2a1603}
  .t-flying{background:#d8f0ff;color:#022433}
  .t-bug{background:#cdeaa0;color:#091a03}
  .t-poison{background:#d2a6ff;color:#1a0233}
  .t-ghost{background:#b7b7ff;color:#020224}
  .t-ice{background:#dff3ff;color:#012233}
  .t-fighting{background:#ffb3a3;color:#300a00}
  .t-steel{background:#cfd6de;color:#061022}
  .t-dark{background:#bfb3b3;color:#050202}
  .t-dragon{background:#c5b3ff;color:#050025}
  .t-fairy{background:#ffd0f0;color:#210022}
  .t-default{background:#e9ecef;color:#081022}

  /* small helpers */
  .muted-sm{color:var(--muted); font-size:.9rem}

  /* Container biar center dan tidak terlalu mepet */
#pagination {
    gap: 8px; /* jarak antar tombol */
}

/* Style dasar semua tombol pagination */
#pagination .page-item .page-link {
    backdrop-filter: blur(12px);
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #fff;
    border-radius: 14px;
    padding: 10px 18px;
    font-size: 1rem;
    transition: 0.25s ease;
}

/* Hover efek */
#pagination .page-item .page-link:hover {
    background: rgba(255, 255, 255, 0.22);
    transform: translateY(-2px);
    color: #fff;
}

/* Active state */
#pagination .page-item.active .page-link {
    background: rgba(255, 255, 255, 0.35);
    border-color: rgba(255, 255, 255, 0.5);
    color: #000;
    font-weight: 700;
    box-shadow: 0 0 15px rgba(255,255,255,0.45);
    transform: scale(1.05);
}

/* Disable button */
#pagination .page-item.disabled .page-link {
    opacity: 0.5;
    cursor: not-allowed;
}

/* Responsive biar tetap bagus di HP */
@media (max-width: 480px) {
    #pagination .page-item .page-link {
        padding: 8px 14px;
        font-size: 0.9rem;
    }
}

</style>
</head>
<body>

<div class="container">

  <div class="hero">
    <div class="brand">
      <div class="logo">PDX</div>
      <div>
        <h1>Pokédex — Glass Landing</h1>
        <p class="muted-sm">Bootstrap 5 • Responsive • Lazy-loaded sprites • Modern UI</p>
      </div>
    </div>

    <div class="controls">
      <div class="glass search-wrap d-flex align-items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search text-muted" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.415l-3.85-3.85zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
        <input id="search" type="search" class="form-control border-0 bg-transparent text-white" placeholder="Cari nama atau # (mis: 025 / pikachu)" oninput="applyFilter()" aria-label="Cari Pokemon">
        <button id="resetBtn" class="btn btn-sm btn-outline-secondary" title="Reset" onclick="resetFilter()">Reset</button>
      </div>

      <div class="glass d-flex gap-2 align-items-center">
        <button id="refreshBtn" class="btn btn-sm btn-outline-light" title="Reload list">Reload</button>
      </div>
    </div>
  </div>

  <!-- stats / info row -->
  <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
    <div class="glass p-2 d-flex gap-3 align-items-center">
      <div class="small text-muted">Menampilkan</div>
      <div id="count" class="fw-bold">—</div>
      <div class="small text-muted">dari <span id="limitLabel">151</span> Pokémon</div>
    </div>
    

    <div class="muted-sm">Tip: klik kartu untuk melihat detail, atau pakai pencarian cepat.</div>
  </div>

  <!-- grid -->
  <div id="grid" class="row g-3"></div>

  <div class="d-flex justify-content-center mt-4">
    <nav>
        <ul id="pagination" class="pagination pagination-lg"></ul>
    </nav>
    </div>


  <!-- skeleton / fallback -->
  <div id="skeletonGrid" class="row g-3" style="display:none;"></div>

</div>

<!-- Modal -->
<div class="modal fade" id="dexModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content p-3">
      <div class="modal-header border-0">
        <div>
          <h5 id="dexTitle" class="modal-title"></h5>
          <div id="dexSub" class="muted-sm"></div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>

      <div class="modal-body">
        <div class="row g-3">
          <div class="col-md-4 text-center">
            <img id="dexImg" class="modal-img mb-3" alt="">
            <div id="dexTypes" class="d-flex gap-2 justify-content-center flex-wrap mb-2"></div>
            <div id="dexDesc" class="small text-muted"></div>
          </div>

          <div class="col-md-8">
            <h6 class="fw-bold mb-2">Statistik</h6>
            <div id="dexStats" class="mb-3"></div>

            <h6 class="fw-bold mb-2">Evolusi</h6>
            <div id="dexEvo" class="d-flex gap-2 align-items-center flex-wrap mb-3"></div>

            <h6 class="fw-bold mb-2">Info Tambahan</h6>
            <div class="row">
              <div class="col-sm-6">
                <div class="small text-muted">Height</div>
                <div id="dexHeight" class="fw-bold"></div>
              </div>
              <div class="col-sm-6">
                <div class="small text-muted">Weight</div>
                <div id="dexWeight" class="fw-bold"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
/*
  Enhanced Pokédex
  - LIMIT: jumlah pokemon yang dimuat (default 151)
  - Caching: menyimpan detail yang sudah di-fetch
  - Lazy-loading sprites via IntersectionObserver
  - Improved modal: evolusi + images + stats bars
  - Theme toggle (light/dark)
*/

const LIMIT = 151;
let LIST = [];
let DETAIL_CACHE = new Map();
let CURRENT_PAGE = 1;
const PER_PAGE = 12;


// mapping tipe -> css class
const TYPE_CLASS = {
  fire:'t-fire', water:'t-water', grass:'t-grass', electric:'t-electric', psychic:'t-psychic',
  normal:'t-normal', rock:'t-rock', ground:'t-ground', flying:'t-flying', bug:'t-bug', poison:'t-poison',
  ghost:'t-ghost', ice:'t-ice', fighting:'t-fighting', steel:'t-steel', dark:'t-dark', dragon:'t-dragon', fairy:'t-fairy'
};  

const gridEl = document.getElementById('grid');
const countEl = document.getElementById('count');
const limitLabel = document.getElementById('limitLabel');
limitLabel.textContent = LIMIT;

// helper: format id -> 3 digit
function fmtId(i){ return '#'+String(i).padStart(3,'0'); }

// create skeleton while loading
function showSkeleton(){
  const sk = document.getElementById('skeletonGrid');
  sk.style.display='grid';
  sk.innerHTML='';
  for(let i=0;i<12;i++){
    const col = document.createElement('div'); col.className='col-6 col-md-4 col-lg-3';
    col.innerHTML = `
      <div class="glass p-2 skeleton" style="height:220px;border-radius:12px"></div>
    `;
    sk.appendChild(col);
  }
}
function hideSkeleton(){ document.getElementById('skeletonGrid').style.display='none'; }

// lazy image loader
const io = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      const img = e.target;
      const src = img.dataset.src;
      if(src){
        img.src = src;
        img.removeAttribute('data-src');
      }
      io.unobserve(img);
    }
  });
},{rootMargin:'200px'});

// render grid
function renderGrid(arr){
  gridEl.innerHTML='';
  countEl.textContent = LIST.length;

  arr.forEach(p=>{
    const col = document.createElement('div');
    col.className = 'col-6 col-md-4 col-lg-3';
    col.innerHTML = `
      <div class="card poke-card glass h-100 border-0" role="button" aria-pressed="false" tabindex="0" data-id="${p.id}">
        <div class="card-body d-flex flex-column align-items-center">
          <div class="w-100 d-flex justify-content-between align-items-start w-100">
            <small class="text-muted">${fmtId(p.id)}</small>
            <small class="text-muted text-capitalize">${p.name}</small>
          </div>
          <div class="flex-fill d-flex align-items-center justify-content-center" style="width:100%;padding:.5rem 0;">
            <img class="poke-sprite" alt="${p.name}" data-src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${p.id}.png" loading="lazy">
          </div>
          <div class="badge-wrap mt-2 w-100 d-flex justify-content-center gap-1 small" id="badge-${p.id}">
            <!-- tipe akan diisi -->
          </div>
        </div>
      </div>
    `;
    gridEl.appendChild(col);

    // observe image lazy load
    const img = col.querySelector('img[data-src]');
    if(img) io.observe(img);

    // attach click / keyboard handler
    const card = col.querySelector('.poke-card');
    card.addEventListener('click', ()=> openDex(p.id));
    card.addEventListener('keydown', e=>{ if(e.key==='Enter' || e.key===' ') openDex(p.id); });
  });

  // after rendering, fetch types for badges in batch (non-blocking)
  arr.forEach(p=>{
    fetch(p.url).then(r=>r.json()).then(d=>{
      DETAIL_CACHE.set(p.id, d); // store detail for later
      const b = document.getElementById(`badge-${p.id}`);
      if(!b) return;
      b.innerHTML = d.types.map(t=>`<span class="type-badge ${TYPE_CLASS[t.type.name]||'t-default'}">${t.type.name}</span>`).join(' ');
    }).catch(_=>{ /* ignore individual failures */ });
  });
}


// initialize list (fetch only list first)
async function init(){
  showSkeleton();
  try{
    const res = await fetch(`https://pokeapi.co/api/v2/pokemon?limit=${LIMIT}`);
    const data = await res.json();
    LIST = data.results.map((x,i)=>({name:x.name, url:x.url, id:i+1}));
    hideSkeleton();
    updatePage();
  }catch(err){
    hideSkeleton();
    gridEl.innerHTML = `<div class="col-12"><div class="glass p-3 text-center">Gagal memuat data. Coba klik <button class="btn btn-sm btn-outline-light" onclick="init()">Reload</button></div></div>`;
    console.error(err);
  }
}

// open modal and show detail (uses cache if available)
async function openDex(id){
  const p = LIST.find(x=>x.id===id);
  if(!p) return;
  // show loading modal quickly
  const dexModalEl = document.getElementById('dexModal');
  const bsModal = new bootstrap.Modal(dexModalEl);
  document.getElementById('dexTitle').textContent = `${p.name} ${fmtId(id)}`;
  document.getElementById('dexImg').src = '';
  document.getElementById('dexTypes').innerHTML = '';
  document.getElementById('dexStats').innerHTML = '<div class="small text-muted">Memuat statistik…</div>';
  document.getElementById('dexEvo').innerHTML = '<div class="small text-muted">Memuat evolusi…</div>';
  document.getElementById('dexDesc').textContent = '';
  document.getElementById('dexHeight').textContent = '';
  document.getElementById('dexWeight').textContent = '';
  bsModal.show();

  try{
    // detail (may exist in cache)
    let detail = DETAIL_CACHE.get(id);
    if(!detail){
      const res = await fetch(p.url);
      detail = await res.json();
      DETAIL_CACHE.set(id, detail);
    }

    // species
    const speciesRes = await fetch(detail.species.url);
    const species = await speciesRes.json();

    // evolution chain
    let evoData = null;
    try{
      const evoRes = await fetch(species.evolution_chain.url);
      evoData = await evoRes.json();
    }catch(evoErr){
      evoData = null;
    }

    // image & title
    const imgUrl = detail.sprites.other?.['official-artwork']?.front_default ||
                   detail.sprites.front_default ||
                   `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${id}.png`;
    document.getElementById('dexImg').src = imgUrl;
    document.getElementById('dexDesc').textContent = species.flavor_text_entries.find(e=>e.language.name==='en')?.flavor_text?.replace(/\n|\f/g,' ') || '';

    // types
    document.getElementById('dexTypes').innerHTML = detail.types.map(t=>`<span class="type-badge ${TYPE_CLASS[t.type.name]||'t-default'}">${t.type.name}</span>`).join(' ');

    // stats
    const statsHtml = detail.stats.map(s=>{
      const percent = Math.round((s.base_stat / 255) * 100); // normalized (255 highest base)
      return `<div class="mb-2">
        <div class="d-flex justify-content-between align-items-center">
          <div class="stat-name">${s.stat.name}</div>
          <div class="small fw-bold">${s.base_stat}</div>
        </div>
        <div class="progress" style="height:10px;border-radius:10px;background:rgba(0,0,0,0.12)">
          <div class="progress-bar" role="progressbar" style="width:${percent}%" aria-valuenow="${percent}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>`;
    }).join('');
    document.getElementById('dexStats').innerHTML = statsHtml;

    // evolutions (walk chain)
    const evoWrap = document.getElementById('dexEvo');
    if(evoData && evoData.chain){
      const evoList = [];
      (function walk(node){
        if(!node) return;
        evoList.push(node.species.name);
        if(node.evolves_to && node.evolves_to.length) walk(node.evolves_to[0]);
      })(evoData.chain);

      // create images for evo chain (try to fetch ids by name -> naive find)
      const nodes = evoList.map(name => {
        const idx = LIST.find(x=>x.name===name)?.id;
        const src = idx ? `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${idx}.png` : null;
        return {name, idx, src};
      });

      evoWrap.innerHTML = nodes.map((n,i) => `
        <div class="d-flex align-items-center gap-2">
          <div class="text-center">
            <img alt="${n.name}" ${n.src ? `src="${n.src}"` : ''} class="evo-img mb-1" loading="lazy">
            <div class="small text-capitalize">${n.name}</div>
          </div>
          ${i < nodes.length-1 ? `<div class="text-secondary">→</div>` : ''}
        </div>
      `).join(' ');
    }else{
      evoWrap.innerHTML = `<div class="small text-muted">Tidak ada data evolusi.</div>`;
    }

    // height / weight
    document.getElementById('dexHeight').textContent = (detail.height/10) + ' m';
    document.getElementById('dexWeight').textContent = (detail.weight/10) + ' kg';

  }catch(err){
    console.error(err);
    document.getElementById('dexStats').innerHTML = `<div class="small text-danger">Gagal memuat data detail.</div>`;
    document.getElementById('dexEvo').innerHTML = '';
  }
}


// search / filter
function applyFilter() {
  CURRENT_PAGE = 1;
  updatePage();
}

function resetFilter() {
  document.getElementById('search').value = "";
  CURRENT_PAGE = 1;
  updatePage();
}


function renderPagination(totalItems) {
  const totalPages = Math.ceil(totalItems / PER_PAGE);
  const pagEl = document.getElementById('pagination');
  pagEl.innerHTML = "";

  if (totalPages <= 1) return;

  // Prev button
  const prevLi = document.createElement("li");
  prevLi.className = "page-item" + (CURRENT_PAGE === 1 ? " disabled" : "");
  prevLi.innerHTML = `<a class="page-link" href="#">Prev</a>`;
  prevLi.onclick = () => {
    if (CURRENT_PAGE > 1) {
      CURRENT_PAGE--;
      updatePage();
    }
  };
  pagEl.appendChild(prevLi);

  // Page numbers
  for (let i = 1; i <= totalPages; i++) {
    const li = document.createElement("li");
    li.className = "page-item" + (i === CURRENT_PAGE ? " active" : "");
    li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
    li.onclick = () => {
      CURRENT_PAGE = i;
      updatePage();
    };
    pagEl.appendChild(li);
  }

  // Next button
  const nextLi = document.createElement("li");
  nextLi.className = "page-item" + (CURRENT_PAGE === totalPages ? " disabled" : "");
  nextLi.innerHTML = `<a class="page-link" href="#">Next</a>`;
  nextLi.onclick = () => {
    if (CURRENT_PAGE < totalPages) {
      CURRENT_PAGE++;
      updatePage();
    }
  };
  pagEl.appendChild(nextLi);
}

function updatePage() {
  const start = (CURRENT_PAGE - 1) * PER_PAGE;
  const end = start + PER_PAGE;

  const q = document.getElementById('search').value.trim().toLowerCase();
  const listFiltered = q
    ? LIST.filter(p => p.name.includes(q) || String(p.id).includes(q))
    : LIST;

  const sliced = listFiltered.slice(start, end);
  renderGrid(sliced);
  renderPagination(listFiltered.length);
}

// refresh btn
document.getElementById('refreshBtn').addEventListener('click', ()=>{
  DETAIL_CACHE.clear();
  init();
});

// init
showSkeleton();
init();

</script>
</body>
</html>
