// Function to validate form submission for Page06C
function validate06C() {
  var nomor = document.getElementById('nomor').value.trim()
  var judul = document.getElementById('judul').value.trim()

  var errorNomor = document.getElementById('errorNomor')
  var errorJudul = document.getElementById('errorJudul')

  errorNomor.innerText = ''
  errorNomor.style.display = 'none'
  errorJudul.innerText = ''
  errorJudul.style.display = 'none'

  if (nomor === '') {
    document.getElementById('pesanError').innerText = 'Nomor tidak boleh kosong'
    document.getElementById('pesanError').style.display = 'block'
    return false
  }

  if (isNaN(nomor)) {
    document.getElementById('pesanError').innerText =
      'Nomor hanya boleh berisi angka'
    document.getElementById('pesanError').style.display = 'block'
    return false
  }

  if (judul === '') {
    document.getElementById('pesanError').innerText = 'Judul tidak boleh kosong'
    document.getElementById('pesanError').style.display = 'block'
    return false
  }

  if (!/^[a-zA-Z0-9\s]+$/.test(judul)) {
    document.getElementById('pesanError').innerText =
      'Terdapat karakter yang tidak valid pada judul'
    document.getElementById('pesanError').style.display = 'block'
    return false
  }

  return true
}

function validate06D() {
  var id = document.getElementById('id').value.trim()
  var nama = document.getElementById('nama').value.trim()
  var email = document.getElementById('email').value.trim()

  var pesanError = document.getElementById('pesanError')
  pesanError.innerText = ''

  if (id === '') {
    pesanError.innerText = 'ID tidak boleh kosong'
    pesanError.style.display = 'block'
    return false
  }

  if (nama === '') {
    pesanError.innerText = 'Nama tidak boleh kosong'
    pesanError.style.display = 'block'
    return false
  }

  if (!/^[a-zA-Z\s]+$/.test(nama)) {
    pesanError.innerText = 'Nama Hanya Boleh Berisi Huruf'
    pesanError.style.display = 'block'
    return false
  }

  if (email === '') {
    pesanError.innerText = 'Email tidak boleh kosong'
    pesanError.style.display = 'block'
    return false
  }

  if (!validateEmail(email)) {
    pesanError.innerText = 'Format email tidak valid'
    pesanError.style.display = 'block'
    return false
  }

  pesanError.style.display = 'none'
  return true
}

function validateLoginForm() {
  var username = document.getElementById('username').value
  var password = document.getElementById('password').value

  var errorMessage = ''

  if (!username.trim()) {
    errorMessage += 'Username tidak boleh kosong.\n'
  } else if (!/^[a-zA-Z0-9]+$/.test(username)) {
    errorMessage += 'Username hanya boleh berisi huruf dan angka.\n'
  }

  if (!password.trim()) {
    errorMessage += 'Password tidak boleh kosong.\n'
  } else if (password.trim().length > 8) {
    errorMessage += 'Password tidak boleh lebih dari 8 karakter.\n'
  }

  if (errorMessage) {
    alert(errorMessage)
    return false
  }

  return true
}

function validateEmail(email) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)
}

function validateRegist() {
  var username = document.forms['registrationForm']['username'].value
  var password = document.forms['registrationForm']['password'].value
  var errorMessage = ''

  if (username == '') {
    errorMessage += 'Username harus diisi.\n'
  }

  if (password == '') {
    errorMessage += 'Password harus diisi.\n'
  }

  if (errorMessage) {
    alert(errorMessage)
    return false
  }

  return true
}
