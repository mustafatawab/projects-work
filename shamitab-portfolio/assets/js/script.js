const text =
  "✦ Exergames ✦ Rapid Prototyping ✦ Game Feel/UX ✦ Generative AI ✦ Navigation ✦ Geospatial Visualization ✦ Data Analytics ✦ AR ✦ VR ✦ Computer Vision ✦ Technical Art ✦ Web Development ✦ Micro-Controllers ";
const container = document.getElementById("waveText");

const makeWaveSpans = (str, offset = 0) => {
  const frag = document.createDocumentFragment();
  for (let i = 0; i < str.length; i++) {
    const span = document.createElement("span");
    span.textContent = str[i];
    span.className = "char";
    // negative delay starts animation already "in motion"
    span.style.animationDelay = `${-(i + offset) * 0.05}s`;
    frag.appendChild(span);
  }
  return frag;
};




  console.log('Script file is runnign ')