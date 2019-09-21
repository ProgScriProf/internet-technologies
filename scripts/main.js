
let searchBox = $(".menu-item-search-box");
searchBox.focus(increaseSizeSearchBox)
searchBox.blur(decreaseSizeSearchBox);

function increaseSizeSearchBox() {
    return changeSizeSearchBox(500);
}

function decreaseSizeSearchBox() {
    return changeSizeSearchBox(200);
}

function changeSizeSearchBox(width) {
    searchBox.animate({ width: width }, 300);
}