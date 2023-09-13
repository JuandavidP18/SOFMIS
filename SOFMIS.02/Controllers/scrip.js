const body = document.querySelector("body"),
  sidebar = body.querySelector(".sidebar"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box");
(modeSwtich = body.querySelector(".toggle-switch")),
  (modeText = body.querySelector(".mode-text"));

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});
modeSwtich.addEventListener("click", () => {
  body.classList.toggle("oscuro");

  if (body.classList.contains("oscuro")) {
    modeText.innerText = "Claro";
  } else {
    modeText.innerText = "Oscuro";
  }
});
const btnAbriModal = document.querySelector("#btn-abrir-modal");
const btnCerrarModal = document.querySelector("#btn-cerrar-modal");
const modal = document.querySelector("#modal");

btnAbriModal.addEventListener("click", () => {
  modal.showModal();
});
btnCerrarModal.addEventListener("click", () => {
  modal.close();
});

const btnAbriModalEditor = document.querySelector("#btn-abrir-modal-editar");
const btnCerrarModalEditor = document.querySelector("#btn-cerrar-modal-editar");
const Editor = document.querySelector("#Editar");

btnAbriModalEditor.addEventListener("click", () => {
  Editor.showModal();
});
btnCerrarModalEditor.addEventListener("click", () => {
  Editor.close();
});

const btnAbriModalRegistrar = document.querySelector("#btn-abrir-modal-registrar");
const btnCerrarModalRegistrar = document.querySelector("#btn-cerrar-modal-registrar");
const registrar = document.querySelector("#registrar");

btnAbriModalRegistrar.addEventListener("click", () => {
  registrar.showModal();
});
btnCerrarModalRegistrar.addEventListener("click", () => {
  registrar.close();
});

const btnAbriModalProveedor = document.querySelector("#btn-abrir-modal-proveedor");
const btnCerrarModalProveedor = document.querySelector("#btn-cerrar-modal-proveedor");
const proveedor = document.querySelector("#proveedor");

btnAbriModalProveedor .addEventListener("click", () => {
  proveedor.showModal();
});
btnCerrarModalProveedor.addEventListener("click", () => {
  proveedor.close();
});
