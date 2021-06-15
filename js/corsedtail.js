function ask() {
    var ans = document.getElementById('shwans');
    var icon = document.getElementById('fas');
    var que = document.getElementById('que');

    if (ans.style.display == "block") {
        ans.style.display = "none";
        que.style.backgroundColor = "#bbc1ec";
        que.style.color = "#000";
        icon.classList.remove('fa-chevron-left');
        icon.classList.add('fa-chevron-right');

    }
    else {
        ans.style.display = "block";
        que.style.backgroundColor = "#232946";
        que.style.color = "#fff";
        icon.classList.remove('fa-chevron-right');
        icon.classList.add('fa-chevron-left');
    }



}

