// script.js

function copyLink(){

  const text =
  document.getElementById("shortLink").innerText;

  navigator.clipboard.writeText(text);

  const btn =
  document.getElementById("copyBtn");

  btn.innerText = "Copied";

  setTimeout(()=>{

    btn.innerText = "Copy Link";

  },1500);
}