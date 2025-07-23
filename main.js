const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menu-item");
const line = document.querySelector(".line");

const card_single_arr = document.querySelectorAll(".card-single");
const card_buttons = document.querySelectorAll(".card-single a");

card_buttons.forEach(btn => {
  btn.addEventListener("click", (e) => {
    const card = e.target.closest('.card-single');
    card.classList.toggle('flipped');
    card.classList.remove("hovered")
  })
})

card_single_arr.forEach(card => {
  card.addEventListener("mouseenter", () => {
    console.log(card)
    card.classList.add("hovered");
  })
  card.addEventListener("mouseleave", () => {
    card.classList.remove("hovered");
  })
})

let isHovering = false;

function moveLine(element) {
  console.log(element.offsetLeft);
  const { offsetLeft, offsetWidth} = element;
  line.style.left = offsetLeft + 'px';
  line.style.width = offsetWidth + 'px';
}

menuItems.forEach(item => {
  item.addEventListener("mouseenter",() => {
    moveLine(item);
    isHovering = true;
  });

})
menu.addEventListener("mouseleave", () => {
  moveLine(activeItem);
})

const activeItem = document.querySelector(".menu-item.active");

if(activeItem) moveLine(activeItem);