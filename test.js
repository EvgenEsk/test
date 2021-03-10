var f = document.forms.Form;
f.onchange = function () {
    var n = f.querySelectorAll('[type="checkbox"]'),
        l = f.querySelectorAll('[type="checkbox"]:checked');
    for (var j = 0; j < n.length; j++)
        if (l.length >= 1) {
            f.submit.disabled = 0;
            l[i].disabled = false;

        } else {
            n[j].disabled = false;
            f.submit.disabled = 1;
        }
}