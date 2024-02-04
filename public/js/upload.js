const Buttons = document.querySelector("#buttons");
const ShowDone = document.querySelector("#ups");

var true1 = false;
var true2 = false;
var true3 = false;

function change() {
    var chngs = document.getElementById("buttons");

    chngs.innerHTML = chngs.innerHTML === "Upload" ? "Uploaded" : "Upload";
}

ShowDone.addEventListener("click", function () {
    this.classList.toggle("up");
    this.classList.toggle("done", !this.classList.contains("up"));
});

const FileBtn = document.getElementById("files");
const Tombol = document.getElementById("buttons");
const Teks = document.getElementById("texts");

Tombol.addEventListener("click", function () {
    FileBtn.click();
});

FileBtn.addEventListener("change", function () {
    if (FileBtn.value) {
        Teks.innerHTML = FileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
        change();
        ShowDone.click();
        true1 = true;
    } else {
        Teks.innerHTML = ".pdf, .jpeg, .jpg, .png";
        change();
        ShowDone.click();
        true1 = false;
    }
});

const Buttons2 = document.querySelector("#buttons2");
const ShowDone2 = document.querySelector("#ups2");

function change2() {
    var chngs2 = document.getElementById("buttons2");

    chngs2.innerHTML = chngs2.innerHTML === "Upload" ? "Uploaded" : "Upload";
}

ShowDone2.addEventListener("click", function () {
    this.classList.toggle("up");
    this.classList.toggle("done", !this.classList.contains("up"));
});

const FileBtn2 = document.getElementById("files2");
const Tombol2 = document.getElementById("buttons2");
const Teks2 = document.getElementById("texts2");

Tombol2.addEventListener("click", function () {
    FileBtn2.click();
});

FileBtn2.addEventListener("change", function () {
    if (FileBtn2.value) {
        Teks2.innerHTML = FileBtn2.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
        change2();
        ShowDone2.click();
        true2 = true;
    } else {
        Teks2.innerHTML = ".pdf, .jpeg, .jpg, .png";
        change2();
        ShowDone2.click();
        true2 = false;
    }
});

const Buttons3 = document.querySelector("#buttons3");
const ShowDone3 = document.querySelector("#ups3");

function change3() {
    var chngs3 = document.getElementById("buttons3");

    chngs3.innerHTML = chngs3.innerHTML === "Upload" ? "Uploaded" : "Upload";
}

ShowDone3.addEventListener("click", function () {
    this.classList.toggle("up");
    this.classList.toggle("done", !this.classList.contains("up"));
});

const FileBtn3 = document.getElementById("files3");
const Tombol3 = document.getElementById("buttons3");
const Teks3 = document.getElementById("texts3");

Tombol3.addEventListener("click", function () {
    FileBtn3.click();
});

FileBtn3.addEventListener("change", function () {
    if (FileBtn3.value) {
        Teks3.innerHTML = FileBtn3.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
        change3();
        ShowDone3.click();
        true3 = true;
    } else {
        Teks3.innerHTML = ".pdf, .jpeg, .jpg, .png";
        change3();
        ShowDone3.click();
        true3 = false;
    }
});

let stepBtn = document.querySelector("#step-btn");
stepBtn.addEventListener("click", function (e) {
    // e.preventDefault();

    if ((true1 && true2) || (true1 && true3)) {
        let step3Forms = document.getElementById("log");
        window.location.href = "/";
    }
});
