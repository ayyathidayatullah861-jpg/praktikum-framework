<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Himpunan Mahasiswa</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}

body{
  background: linear-gradient(135deg,#0f0f0f,#1c1c1c);
  min-height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  color:#fff;
}

.container{
  width:90%;
  max-width:1000px;
  background:#111;
  border-radius:20px;
  box-shadow:0 10px 40px rgba(0,0,0,0.8);
  overflow:hidden;
  border:1px solid rgba(255,215,0,0.2);
}

header{
  background:linear-gradient(90deg,#000,#1a1a1a);
  padding:20px;
  text-align:center;
  border-bottom:1px solid rgba(255,215,0,0.2);
}

header h1{
  color:#FFD700;
  letter-spacing:2px;
}

.tabs{
  display:flex;
}

.tabs button{
  flex:1;
  padding:15px;
  border:none;
  cursor:pointer;
  background:#1a1a1a;
  color:#aaa;
  font-weight:600;
  transition:0.3s;
}

.tabs button.active{
  background:linear-gradient(90deg,#FFD700,#b89600);
  color:#000;
}

.content{
  padding:25px;
}

form{display:none}
form.active{display:block}

.form-group{margin-bottom:15px}

label{
  display:block;
  margin-bottom:5px;
  color:#FFD700;
}

input, textarea, select{
  width:100%;
  padding:12px;
  border-radius:10px;
  border:1px solid #333;
  background:#1a1a1a;
  color:#fff;
  outline:none;
  transition:0.3s;
}

input:focus, textarea:focus{
  border:1px solid #FFD700;
  box-shadow:0 0 10px rgba(255,215,0,0.4);
}

textarea{height:100px;resize:none}

button{
  width:100%;
  padding:12px;
  border:none;
  border-radius:10px;
  background:linear-gradient(90deg,#FFD700,#b89600);
  color:#000;
  font-size:16px;
  font-weight:600;
  cursor:pointer;
  transition:0.3s;
}

button:hover{
  transform:scale(1.03);
  box-shadow:0 0 15px rgba(255,215,0,0.6);
}

</style>
</head>

<body>
<div class="container">

<header>
  <h1>HIMPUNAN MAHASISWA</h1>
</header>

<div class="tabs">
  <button class="tab-btn active" onclick="showTab('daftar')">Pendaftaran</button>
  <button class="tab-btn" onclick="showTab('aspirasi')">Aspirasi</button>
</div>

<div class="content">

<form id="daftar" class="active">
  <div class="form-group">
    <label>Nama Lengkap</label>
    <input type="text" required>
  </div>

  <div class="form-group">
    <label>NIM</label>
    <input type="text" required>
  </div>

  <div class="form-group">
    <label>Program Studi</label>
    <input type="text" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" required>
  </div>

  <div class="form-group">
    <label>Alasan Bergabung</label>
    <textarea required></textarea>
  </div>

  <button type="submit">Daftar Sekarang</button>
  <div id="message" style="margin-top:10px;font-weight:600"></div>
  </form>

<form id="aspirasi">
  <div class="form-group">
    <label>Nama (Opsional)</label>
    <input type="text">
  </div>

  <div class="form-group">
    <label>Kategori</label>
    <select>
      <option>Akademik</option>
      <option>Fasilitas</option>
      <option>Kegiatan</option>
    </select>
  </div>

  <div class="form-group">
    <label>Isi Aspirasi</label>
    <textarea required></textarea>
  </div>

  <button type="submit">Kirim Aspirasi</button>
  <div id="message" style="margin-top:10px;font-weight:600"></div>
  </form>

</div>
</div>

<script>
function showTab(tabId){
  document.querySelectorAll('form').forEach(f=>f.classList.remove('active'));
  document.querySelectorAll('.tab-btn').forEach(b=>b.classList.remove('active'));
  document.getElementById(tabId).classList.add('active');
  event.target.classList.add('active');
}

// VALIDASI & FEEDBACK
const forms = document.querySelectorAll('form');

forms.forEach(form => {
  form.addEventListener('submit', function(e){
    e.preventDefault();

    const inputs = form.querySelectorAll('input[required], textarea[required]');
    let valid = true;

    inputs.forEach(input => {
      if(input.value.trim() === ''){
        valid = false;
        input.style.border = '1px solid red';
      } else {
        input.style.border = '1px solid #FFD700';
      }
    });

    const message = form.querySelector('#message');

    if(!valid){
      message.innerHTML = "❌ Data belum lengkap!";
      message.style.color = "red";
    } else {
      message.innerHTML = "✅ Data berhasil dikirim!";
      message.style.color = "#FFD700";
      form.reset();
    }
  });
});

</script>

</body>
</html>
