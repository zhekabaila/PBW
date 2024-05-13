const burgerMenuButton = document.getElementById('burger-menu')
const closeMenuButton = document.getElementById('close-menu')

burgerMenuButton.addEventListener('click', () => {
  document.getElementById('mainNav').style.display = 'block'
  burgerMenuButton.style.display = 'none'
  closeMenuButton.style.display = 'block'
})

closeMenuButton.addEventListener('click', () => {
  document.getElementById('mainNav').style.display = 'none'
  burgerMenuButton.style.display = 'block'
  closeMenuButton.style.display = 'none'
})
