"use-strict";

import * as AUTH from "../controller/rqst-user-ctrl";

const form = document.querySelector("#login-form");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const login = document.querySelector("#login").value;
  const psw = document.querySelector("#psw").value;

  authenticate(login, psw);
});

//----------------------------------------------
// Fonction de mise vérification du mdp et du login
//----------------------------------------------

async function authenticate(login, psw) {
  const auth = new AUTH.RequestAuth(login, psw);
  const res = await auth.auth();

  if (res) {
    window.location.replace("http://archi-test.com/admin");
    console.log("location change");
  } else {
    alert("wrong password/login");
  }
}

//-----------------------------------------------
// Lien header
//-----------------------------------------------

document.querySelector(".logoContainer").addEventListener("click", () => {
  console.log("clcki");
  window.location.replace("http://archi-test.com/welkome");
});

//-----------------------------------------------
// Lien du footer
//-----------------------------------------------

/**
 * Lien vers FaceBook
 */
document.querySelector("#faceBook").addEventListener("click", () => {
  window.open("https://www.facebook.com/ArchimedGe");
});

/**
 * Lien vers Insta
 */
document.querySelector("#instagram").addEventListener("click", () => {
  window.open("https://www.instagram.com/archimedge");
});

/**
 * Lien vers LinkedIn
 */
document.querySelector("#linkedIn").addEventListener("click", () => {
  window.open("https://fr.linkedin.com/company/archimed-ge");
});

/**
 * Lien site groupe
 */
document.querySelector(".footerLeft").addEventListener("click", () => {
  window.open("https://www.archimed-ge.com/");
});