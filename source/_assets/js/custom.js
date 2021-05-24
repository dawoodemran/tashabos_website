// DOM events onMouseHover or other events...

function showMenu() {
  document.getByElementId('#nav').addClassName('show')
}

function hideMenu() {
  document.getElementById('nav').removeClassName('show')
}
