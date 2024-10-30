window.addEventListener("load", () => {
  const kmUpdateAppId = document.querySelector("[data-update-app-id]");
  const handleToggleUiState = (e) => {
    e.preventDefault();
    const kmSectionOne = document.querySelector("[data-section-one]"),
      kmSectionTwo = document.querySelector("[data-section-two]");

    [kmSectionOne, kmSectionTwo].forEach(div => div.classList.remove("km-active", "km-hide"));
    kmSectionOne.classList.add("km-hide");
    kmSectionTwo.classList.add("km-active");
  };
  kmUpdateAppId.addEventListener("click", handleToggleUiState);
});
