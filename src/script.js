const form = document.getElementById("cityForm");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  const citiesData = [
    { name: "Moscow", offset: 3 },
    { name: "Paris", offset: 2 },
    { name: "Berlin", offset: 2 },
    { name: "Brussels", offset: 2 },
    { name: "Amsterdam", offset: 2 },
    { name: "Rome", offset: 2 },
    { name: "London", offset: 1 },
    { name: "Dublin", offset: 1 },
    { name: "New York", offset: -4 },
    { name: "Washington, DC", offset: -4 },
    { name: "St. Louis", offset: -5 },
    { name: "Los Angeles", offset: -7 },
    { name: "Tokyo", offset: 9 },
    { name: "Beijing", offset: 8 },
    { name: "Ho Chi Minh City", offset: 7 },
    { name: "Mumbai", offset: 5 },
  ];

  const citiesWithBits = citiesData.map((city) => {
    const bitSequence = 1 << (12 - city.offset);

    return { ...city, bitSequence };
  });

  const formData = new FormData(event.target);
  const searchOffset = parseInt(formData.get("gmtInput"));

  const searchMask = 1 << (12 - searchOffset);

  const results = citiesWithBits.filter(
    (city) => (city.bitSequence & searchMask) !== 0,
  );

  const list = document.getElementById("list");
  const cityFormH2 = document.getElementById("cityFormH2");

  list.innerHTML = "";
  cityFormH2.classList.add("!hidden");

  if (results.length === 0) {
    const li = document.createElement("li");

    li.textContent = `Não foi encontrada nenhuma cidade com o GMT pesquisado.`;

    list.appendChild(li);

    return;
  }

  cityFormH2.classList.remove("!hidden");

  results.map((city) => {
    const li = document.createElement("li");

    li.textContent = `${city.name}`;

    list.appendChild(li);
  });
});
