document.querySelectorAll(".toggle-button").forEach((button) => {
  button.addEventListener("click", function () {
    const targetId = this.getAttribute("data-target");
    const moreText = document.getElementById(targetId);

    if (moreText.classList.contains("hidden")) {
      moreText.classList.remove("hidden");
      setTimeout(() => {
        moreText.classList.remove("opacity-0");
      }, 10); // Delay kecil untuk memastikan transisi berjalan
    } else {
      moreText.classList.add("opacity-0");
      moreText.addEventListener(
        "transitionend",
        () => {
          if (moreText.classList.contains("opacity-0")) {
            moreText.classList.add("hidden");
          }
        },
        { once: true }
      );
    }
  });
});
