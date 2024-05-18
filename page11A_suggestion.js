function showHint(value) {
  var xhttp = new XMLHttpRequest()

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var suggestions = JSON.parse(this.responseText)

      document.getElementById('tbody').innerHTML = suggestions
        .map(({ id, nama, email }) => {
          return renderRow(id, nama, email)
        })
        .join('')
    }
  }

  //Code 4b
  xhttp.open('GET', `./page11B_gethint.php?keyword=${value}`)
  xhttp.send()
}

// Jalankan fungsi showHint untuk menampilkan nilai awal pada table
showHint(null)

function renderRow(id, nama, email) {
  if (id === null) {
    return `
      <tr>
        <td colspan="4" style="color: red; text-align: center;">Data tidak ditemukan!</td>
      </tr>
    `
  } else {
    return `
      <tr>
        <td>${id}</td>
        <td>${nama}</td>
        <td>${email}</td>
        <td>
          <div style="display: flex; justify-content: center; align-items: center; gap: 12px; height: 100%;">
            <a href='page09E.php?id=${id}&nama=${nama}&email=${email}'><img src='edit-icon.png' style='width:30px;height:30px;'></a>
            <a href='page09F.php?id=${id}' onclick='return confirmDelete()'><img src='delete-icon.png' style='width:30px;height:30px;'></a>
          </div>
        </td>
    </tr>
    `
  }
}
