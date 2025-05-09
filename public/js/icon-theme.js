function updateFavicon() {
    const favicon = document.getElementById("favicon");
    const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
    
    if (prefersDark) {
      favicon.href = "/Self-Management/public/images/short_lg-light.png";
    } else {
      favicon.href = "/Self-Management/public/images/short_lg-dark.png";
    }
  }

  updateFavicon();
  window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", updateFavicon);