// //AFFICHAGE SECTION COMMING SOON

// const comingSoon = document.querySelector(".comingSoon");
// const gameList = document.createElement("ul");
// gameList.id = "game-list";
// comingSoon.appendChild(gameList);

// // FETCH API DEPUIS PHP
// fetch("http://localhost:8888/collectendo/index.php")
//   .then(res => res.json())
//   .then(data => {
//     data.forEach(game => {
//       const li = document.createElement("li");
//       li.classList.add("fiche");
//       const releaseDate =
//       game.release_dates?.[0]?.date
//       ? new Date(game.release_dates[0].date * 1000).toLocaleDateString("fr-FR")
//       : "TBA";
//       const coverUrl = game.cover?.image_id
//       ? `https://images.igdb.com/igdb/image/upload/t_cover_big/${game.cover.image_id}.jpg`
//       : "../public/Assets/nintendo-switch-2-box-art-templates.webp"; // IMAGE PAR DEFAULT
//       li.innerHTML = `
//       <img src="${coverUrl}" alt="${game.name}">
//       <strong>${game.name}</strong>
//       <p>${game.platforms?.map(p => p.name).join(", ")}</p>
//       <em>${releaseDate}</em>`;
//         gameList.appendChild(li);
//     });

//   })
//   .catch(err => console.error("Erreur fetch :", err));

// gameList.classList.add("fichesProduit");

