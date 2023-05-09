const scriptURL =
  "https://script.google.com/macros/s/AKfycbzIu054hgxmZLLrq2H6Z4EIdfV6YwJSrUDsURHGppeNFW_nAtHpKeLqUg0gf0gFnNg/exec";
const form = document.forms["contactform"];

form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => console.log("Success!", response))
    .catch((error) => console.error("Error!", error.message));
});
function submitFunction() {
  alert("Your Response is Submitted");
}
function reload() {
  window.location.reload();
}
