const form = document.getElementById("calcul-form");
const nombreA = document.getElementById("nombreA");
const nombreB = document.getElementById("nombreB");
const operation = document.getElementById("operation");
const errorMessage = document.getElementById("error-message");
const historiqueList = document.getElementById("historique-list");

let historique = [];

form.addEventListener("submit", function (e) {
  e.preventDefault();
  errorMessage.textContent = "";

  const a = nombreA.value.trim();
  const b = nombreB.value.trim();
  const op = operation.value;

  if (a === "" || b === "") {
    errorMessage.textContent = "Veuillez remplir les deux nombres.";
    return;
  }

  const numA = Number(a);
  const numB = Number(b);

  if (isNaN(numA) || isNaN(numB)) {
    errorMessage.textContent = "Veuillez entrer des nombres valides.";
    return;
  }

  if (op === "/" && numB === 0) {
    errorMessage.textContent = "La division par zéro n'est pas autorisée.";
    return;
  }

  let resultat;
  switch (op) {
    case "+":
      resultat = numA + numB;
      break;
    case "-":
      resultat = numA - numB;
      break;
    case "*":
      resultat = numA * numB;
      break;
    case "/":
      resultat = numA / numB;
      break;
    default:
      errorMessage.textContent = "Opération inconnue.";
      return;
  }

  const operationString = `${numA} ${op} ${numB} = ${resultat}`;
  historique.push(operationString);

  updateHistorique();

  form.reset();
});

function updateHistorique() {
  historiqueList.innerHTML = "";
  for (let op of historique) {
    const li = document.createElement("li");
    li.textContent = op;
    historiqueList.appendChild(li);
  }
}
