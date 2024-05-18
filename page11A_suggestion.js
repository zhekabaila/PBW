function showHint(str) {
  if (str.length == 0) {
    document.getElementById('txtHint').innerHTML = ''
    return
  }

  var xhttp = new XMLHttpRequest()

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var suggestions = JSON.parse(this.responseText)

      document.getElementById('txtHint').innerHTML = suggestions
        .map(({ nama }) => {
          return `
          <li>
            <a href="?search=${nama}" style="text-decoration: none;">
                <p style="color: black; background-color: #fee0e5; padding: 6px 24px; border-radius: 2px; margin-top: 4px;">
                    ${nama}
                </p>
            </a>
          </li>`
        })
        .join('')
    }
  }

  //Code 4b
  xhttp.open('GET', './page11B_gethint.php?keyword=' + str, true)
  xhttp.send()
}
