function dragStart(ev) {
    ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
    ev.dataTransfer.setDragImage(ev.target,50,50);
    return true;
}

// these functions prevents default behavior of browser
function dragEnter(ev) {
    event.preventDefault();
    return true;
}
function dragOver(ev) {
    event.preventDefault();
}

// function defined for when drop element on target
function dragDrop(ev) {
    var data = ev.dataTransfer.getData("Text");
    if (ev.target.className === "housedrop"){
        ev.target.appendChild(document.getElementById(data));
    }
    ev.target.lastChild.style.position = "unset";
    ev.stopPropagation();
    return false;
}