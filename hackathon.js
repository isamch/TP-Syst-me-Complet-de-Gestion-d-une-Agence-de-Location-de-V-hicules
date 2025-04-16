// splice // push
let candidatures = [
  {
    id: 1,
    nom: "Ali Benali",
    age: 20,
    projet: "Application mobile de recyclage",
    statut: "en attente" // ou "validée", "rejetée"
  },
  {
    id: 2,
    nom: "isam chajia",
    age: 22,
    projet: "Application web de ma3rftx",
    statut: "validée" // ou "validée", "rejetée"
  }
]

let id = 0;
// {
//   id: 1,
//   nom: "Ali Benali",
//   age: 20,
//   projet: "Application mobile de recyclage",
//   statut: "en attente" // ou "validée", "rejetée"
// }

function ajouterCandidature(nom, age, projet) {
  candidatures.push({
    id: id++,
    nom: nom,
    age: age,
    projet: project,
    statut: "en attente" // ou "validée", "rejetée"
  });
}


function afficherToutesLesCandidatures() {
  candidatures.forEach(e => {
    console.log(e);
  })
}


function validerCandidature(id) {
  candidatures.forEach(e => {
    if (e.id == id) {
      e.statut = "validée";
    }
  })
}

function rejeterCandidature(id) {
  candidatures.forEach(e => {
    if (e.id == id) {
      e.statut = "rejetée";
    }
  })
}


function rechercherCandidat(nom) {
  candidatures.forEach(e => {
    if (e.nom == nom) {
      console.log(e);
    }
  })
}


function filtrerParStatut(statut) {
  candidatures.forEach(e => {
    if (e.status == statut) {
      console.log(e);
    }
  })
}

function statistiques() {
  // total condidat :
  let count = 0;
  let countValidee = 0, countRejectee = 0, countEnattente = 0;

  candidatures.forEach(e => {
    count++;
    if (e.status == "validée") {
      countValidee++;
    } else if (e.status == "rejetée") {
      countRejectee++;
    } else {
      countEnattente++;
    }

  });


  return [{
    "Total des candidatures": count,
    "Validées": countValidee,
    "Rejetées": countRejectee,
    "En attente": countEnattente
  }];
}

function trierParNom() {
  candidatures.sort((a, b) => a.nom < b.nom);
}

function trierParAge(desc = false) {

  if (!desc) {
    candidatures.sort((a, b) => a.age - b.age);
  } else {
    candidatures.sort((a, b) => b.age - a.age);
  }

}



// call functions :


ajouterCandidature("Fatima Zahra", 22, "Plateforme de tutorat");
ajouterCandidature("Mohamed Amine", 19, "Application de dons alimentaires");

validerCandidature(1);
rejeterCandidature(2);

afficherToutesLesCandidatures();
statistiques();
rechercherCandidat("fatima");












