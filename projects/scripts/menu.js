const listItem1 = document.querySelector('.js-list-item-1')
const sublist1 = document.querySelector('.js-sublist-1')
const listItem2 = document.querySelector('.js-list-item-2')
const sublist2 = document.querySelector('.js-sublist-2')
const listItem3 = document.querySelector('.js-list-item-3')
const sublist3 = document.querySelector('.js-sublist-3')

const toggleSublist = (listItem, sublist) => {
  listItem.addEventListener('click', () => {
    if (sublist.style.opacity === '1') {
      sublist.style.opacity = 0
      sublist.style.pointerEvents = 'none'
      return
    }
    sublist.style.opacity = 1
    sublist.style.pointerEvents = 'initial'
  })
}

toggleSublist(listItem1, sublist1)
toggleSublist(listItem2, sublist2)
toggleSublist(listItem3, sublist3)