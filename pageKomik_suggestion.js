function showHint(value) {
  var xhttp = new XMLHttpRequest()

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var suggestions = JSON.parse(this.responseText)

      document.getElementById('tbody').innerHTML = suggestions
        .map(({ id, judul, sampul, pratinjau }) => {
          return renderRow(id, judul, sampul, pratinjau)
        })
        .join('')
    }
  }

  //Code 4b
  let route =
    value && value !== ''
      ? `./pageKomik_gethint.php?keyword=${value}`
      : `./pageKomik_gethint.php`

  xhttp.open('GET', route, true)
  xhttp.send()
}

function renderRow(id, judul, sampul, pratinjau) {
  if (id === null) {
    return `
    <tr>
    <td colspan="5" style="color: red; text-align: center;">Data tidak ditemukan!</td>
    </tr>
    `
  } else {
    return `
    <tr>
      <td>${id}</td>
      <td>${judul}</td>
      <td><img src="./img/${sampul}" alt="Sampul"></td>
      <td><a href="${pratinjau}" target="_blank">Pratinjau</a></td>
      <td>
        <div style="display: flex; justify-content: center; align-items: center; gap: 12px; height: 100%;">
          <a href='page09G.php?id=${id}'>
            <img src='edit-icon.png' style='width:30px;height:30px;' />
          </a>
          <a href='page09H.php?id=${id}' onclick='return confirmDelete()'>
            <img src='delete-icon.png' style='width:30px;height:30px;' />
          </a>
        </div>
    </td>
  </tr>
    `
  }
}

showHint()
